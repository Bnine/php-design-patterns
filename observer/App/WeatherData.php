<?php

namespace App;

require_once './Interfaces/Subject.php';

use Interfaces\Subject;
//use Interfaces\Observer;

/**
 * WeatherData 클래스
 * 하위 클래스들이 사용 할 수 있는 fight 메소드를 생성
 */

Class WeatherData implements Subject
{
    private $observers = array();
    private $temperature;
    private $humidity;
    private $pressure;

    public function registerObserver($observer) 
    {
        $this->observers[] = $observer;
    }

    public function removeObserver($observer) 
    {
        $remove_arr_key = array_search($observer, $this->observers);
        echo "다음 옵저버를 제거합니다 : Arr key -> ".$remove_arr_key."\n";
        if (array_key_exists($remove_arr_key, $this->observers)) {
            unset($this->observers[$remove_arr_key]);
        }
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $ob) {
            $ob->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function measurementsChanged()
    {
        $this->notifyObservers();
    }

    public function setMeasurements($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }
}