<?php

/**
 * This file is part of the ddex-php package.
 * 
 * (c) Sebastian Wolff <seabass88@gmail.com>
 */


namespace DDEXWrapper;

require_once('../vendor/autoload.php');

use Symfony\Component\Validator\Validation;

use \JMS\Serializer\XmlSerializationVisitor;
use \JMS\Serializer\XmlDeserializationVisitor;

use \JMS\Serializer\Handler\SubscribingHandlerInterface;
use \JMS\Serializer\GraphNavigator;
use \JMS\Serializer\VisitorInterface;
use \JMS\Serializer\Context;

use \JMS\Serializer\SerializerBuilder;
use \JMS\Serializer\Handler\HandlerRegistryInterface;

use \GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use \GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;


if (!defined('DDEX_APP_ROOT')) {
	define('DDEX_APP_ROOT', __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'DDEXWrapper' . DIRECTORY_SEPARATOR);
}

require_once DDEX_APP_ROOT . 'Bootstrap.php';
\DDEXWrapper\Bootstrap::init();





class ERN_app {

	const NAMESPACE = 'DDEX';
	const APP = 'ERN';
	private $VERSION;
	private $CLASS_NAME;

	protected $data;

	public function __construct($VERSION)
	{
		$this->VERSION = $VERSION;

		$this->__version_check();
		$this->init();
	}

	private function init()
	{
		$this->CLASS_NAME = 
			"\\" .
			$this::NAMESPACE . "\\" .
			$this::APP . "\\" .
			$this::APP . "_" .
			$this->VERSION;

			// eg. \DDEX\ERN\ERN_431

		$this->data = $this->ClassConstructor('NewReleaseMessage');
	}


	public function DataAccessor()
	{
		return $this->data;
	}

	public function ClassConstructor($fn = null)
	{
		$fn_class = $this->CLASS_NAME . "\\" . $fn;

		$args = func_get_args();
		array_shift($args); // remove 0

		if(class_exists($fn_class)) {
			return new $fn_class(...$args);
		} else {
			die('Version mismatch? ' . $fn_class . ' does not exist');
		}

	}


	private function __version_check()
	{
		$valid_versions = [
			'340',
			'341',
			'350',
			'351',
			'360',
			'370',
			'371',
			'37D1',
			'37D2',
			'380',
			'381',
			'382',
			'383',
			'400',
			'410',
			'411',
			'420',
			'430',
			'431',
		];

		if(!$this->VERSION)
		{
			die('no ERN version provided');
		}
		if(!in_array((string) $this->VERSION, $valid_versions))
		{
			die('unsupported ERN version provided');
		}
	}



	public function validate($config = [])
	{
		$object = $this->data;

		// get the validator
		$builder = Validation::createValidatorBuilder();
		foreach (glob('validation/*.yml') as $file) {
			$builder->addYamlMapping($file);
		}
		$validator =  $builder->getValidator();

		// validate $object
		$violations = $validator->validate($object, null, ['xsd_rules']);
		return $violations;
	}


	public function serialize($config = [])
	{

		// Create serializer. Second argument ensures existing xds-generated yml settings are loaded
		$serializerBuilder = SerializerBuilder::create()
			->addMetadataDir(
				__DIR__ . DIRECTORY_SEPARATOR . implode(DIRECTORY_SEPARATOR, ['..', 'src', 'DDEXWrapper', 'metadata', $this->CLASS_NAME]),
				$this->CLASS_NAME
			);


		// Required for global handlers like DateTime
		$serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
			$serializerBuilder->addDefaultHandlers();
			$handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
			$handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling

			// $handler->registerSubscribingHandler(new YourhandlerHere());
		});


		$serializer = $serializerBuilder->build();

		$serialized_output = $serializer->serialize($this->data, 'xml');

		// cdata hack:
		// $serialized_output = preg_replace("/" . preg_quote('<![CDATA[', '/') . "(.*?)" . preg_quote(']]>', '/') . "/mis", "\\1", $serialized_output);

		return $serialized_output;

	}

}


$ERN_app = new ERN_app('431'); // ERN 4.31

$NewReleaseMessage = $ERN_app->DataAccessor();

$NewReleaseMessage->setReleaseProfileVersionId('Audio');
$NewReleaseMessage->setReleaseProfileVariantVersionId('');
$NewReleaseMessage->setAvsVersionId('3');
$NewReleaseMessage->setLanguageAndScriptCode('en-US');

	$messageHeader = $ERN_app->ClassConstructor('MessageHeaderType');
	$messageHeader->setMessageThreadId('20240929000001');
	$messageHeader->setMessageId('20240929000001-0000001');
	$messageHeader->setMessageFileName('20240929000001-0000001.xml');


echo $ERN_app->serialize();