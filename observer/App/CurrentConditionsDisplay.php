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

Class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private $temperature;
    private $humidity;
    private $pressure;
    private $weatherData;

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
        $this->display();
    }

    public function display() 
    {
        echo "현재 온도는 ".$this->temperature."F degrees 이며 습도는 ".$this->humidity."입니다.\n";
    }
}