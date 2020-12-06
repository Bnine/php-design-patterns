<?php

namespace App;

require_once './Interfaces/Observer.php';
require_once './Interfaces/DisplayElement.php';

use Interfaces\Observer;
use Interfaces\DisplayElement;

/**
 * CurrentConditionsDisplay 클래스
 * 온도와 습도를 표시하는 옵저버
 * 2020.12.05 Bnine
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