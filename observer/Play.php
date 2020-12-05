<?php
require_once './App/WeatherStation.php';
require_once './App/WeatherData.php';

use App\WeatherData;
use App\WeatherStation;

$weather = new WeatherStation(new WeatherData);

$weather->main();