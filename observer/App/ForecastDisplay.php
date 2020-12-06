<?php

namespace App;

require_once './Interfaces/Observer.php';
require_once './Interfaces/DisplayElement.php';

use Interfaces\Observer;
use Interfaces\DisplayElement;

/**
 * ForecastDisplay 클래스
 * 최신의 기압을 저장 하였다가 새로운 기압 정보가 들어오면
 * 직전의 기압 정보와 새로운 기압 정보를 이용해서
 * 기압 정보를 표시해줌
 * 2020.12.05 Bnine
 */

Class ForecastDisplay implements Observer, DisplayElement
{
    private $temperature;
    private $humidity;
    private $pressure;
    private $weatherData;
    private $beforePressure;
    private $currentForecast;

    public function __construct($weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update($temperature, $humidity, $pressure)
    {
        $this->beforePressure = $this->pressure;
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->updateForecast();
        $this->display();
    }

    public function display() 
    {
        echo "현재 기상 상태 : ".$this->currentForecast."\n";
    }

    public function updateForecast()
    {
        if ($this->beforePressure === $this->pressure) {
            $this->currentForecast = "현재 기상에 변화는 없습니다";
        } elseif ($this->beforePressure > $this->pressure) {
            $this->currentForecast = "기상이 안 좋아지고 있군요. 추위와 비를 조심하십시요";
        } elseif ($this->beforePressure < $this->pressure) {
            $this->currentForecast = "기상이 좋아지고 있군요. 좋은 날씨를 기대해도 되겠어요";
        }
    }
}