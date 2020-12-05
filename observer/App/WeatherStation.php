<?php

namespace App;

require_once './App/CurrentConditionsDisplay.php';
require_once './App/StatisticsDisplay.php';
require_once './App/ForecastDisplay.php';

use App\CurrentConditionsDisplay;
use App\StatisticsDisplay;
use App\ForecastDisplay;

/**
 * WeatherStation 클래스
 * 하위 클래스들이 사용 할 수 있는 fight 메소드를 생성
 */
Class WeatherStation
{
    private $weatherData;
    private $currentConditionsDisplay;
    private $statisticsDisplay;

    public function __construct($weatherData)
    {
        $this->weatherData = $weatherData;
    }

    public function main()
    {
        $this->currentConditionsDisplay = new CurrentConditionsDisplay($this->weatherData);
        $this->statisticsDisplay = new StatisticsDisplay($this->weatherData);
        $this->ForecastDisplay = new ForecastDisplay($this->weatherData);

        $this->weatherData->setMeasurements(80.1, 60.0, 30.4);

        $this->weatherData->setMeasurements(80.1, 60.0, 30.4);

        $this->weatherData->setMeasurements(82.7, 56.5, 22.7);

        $this->weatherData->removeObserver($this->currentConditionsDisplay);
        $this->weatherData->setMeasurements(84, 62.1, 35.0);

        $this->currentConditionsDisplay = new CurrentConditionsDisplay($this->weatherData);
        $this->weatherData->setMeasurements(75, 50.5, 20.9);
    }
}