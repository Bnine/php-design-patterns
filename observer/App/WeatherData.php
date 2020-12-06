<?php

namespace App;

require_once './Interfaces/Subject.php';

use Interfaces\Subject;

/**
 * WeatherData 클래스
 * 옵저버 추가와 삭제를 하며
 * setMeasurements 메소드를 통해 값이 들어오면
 * notifyObservers 메소드를 통해 등록된 옵저버 전원에게 통보(update 메소드 호출)
 * 2020.12.05 Bnine
 */

Class WeatherData implements Subject
{
    private $observers = array();
    private $temperature;
    private $humidity;
    private $pressure;

    public function registerObserver($observer) 
    {
        echo "옵저버를 추가합니다\n";
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