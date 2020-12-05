<?php

namespace App;

require_once './Interfaces/Observer.php';
require_once './Interfaces/DisplayElement.php';
require_once './App/WeatherData.php';

use Interfaces\Observer;
use Interfaces\DisplayElement;
//use App\WeatherData;

/**
 * WeatherData 클래스
 * 하위 클래스들이 사용 할 수 있는 fight 메소드를 생성
 */

Class StatisticsDisplay implements Observer, DisplayElement
{
    private $temperature;
    private $humidity;
    private $pressure;
    private $weatherData;
    private $temperatureArr = array();
    private $temperatureTotal;
    private $temperatureTotalCnt;

    public function __construct($weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->updateAvgMaxMin();
        $this->display();
    }

    public function display() 
    {
        echo "평균온도/최고온도/최저온도 ".round($this->temperatureTotal/$this->temperatureTotalCnt, 1)."/".max($this->temperatureArr)."/".min($this->temperatureArr)."\n";
    }

    public function updateAvgMaxMin()
    {
        $this->temperatureArr[] = $this->temperature;
        $this->temperatureTotal += $this->temperature;
        $this->temperatureTotalCnt = count($this->temperatureArr);
    }
}