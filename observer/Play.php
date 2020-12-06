<?php
require_once './App/CurrentConditionsDisplay.php';
require_once './App/StatisticsDisplay.php';
require_once './App/ForecastDisplay.php';
require_once './App/WeatherData.php';

use App\CurrentConditionsDisplay;
use App\StatisticsDisplay;
use App\ForecastDisplay;
use App\WeatherData;

$weatherData = new WeatherData;

//옵저버들을 등록
$currentConditionsDisplay = new CurrentConditionsDisplay($weatherData);
$statisticsDisplay = new StatisticsDisplay($weatherData);
$ForecastDisplay = new ForecastDisplay($weatherData);

$weatherData->setMeasurements(80.1, 60.0, 30.4);
$weatherData->setMeasurements(80.1, 60.0, 30.4);
$weatherData->setMeasurements(82.7, 56.5, 22.7);

$weatherData->removeObserver($currentConditionsDisplay);

$weatherData->setMeasurements(84, 62.1, 35.0);

$currentConditionsDisplay = new CurrentConditionsDisplay($weatherData);

$weatherData->setMeasurements(75, 50.5, 20.9);