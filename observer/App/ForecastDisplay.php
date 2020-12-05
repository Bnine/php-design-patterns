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