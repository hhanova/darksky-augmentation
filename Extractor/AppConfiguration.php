<?php
/**
 * Created by IntelliJ IDEA.
 * User: JakubM
 * Date: 18.09.14
 * Time: 14:18
 */

namespace Keboola\ForecastIoExtractorBundle\Extractor;


class AppConfiguration
{
	public $app_name;
	public $forecastio_key;
	public $google_key;
	public $mapquest_key;

	public function __construct($appName, $mainConfig)
	{
		$this->app_name = $appName;

		$this->forecastio_key = $mainConfig['forecastio_key'];
		$this->google_key = $mainConfig['google_key'];
		$this->mapquest_key = $mainConfig['mapquest_key'];
	}
} 