<?php

namespace Product;

abstract class Pizza
{
    protected $name;
    protected $dough;
    protected $sauce;
    protected $toppings = array();

    public function prepare() 
    {
        echo $this->name." 를(을) 준비 합니다.\n";
        echo $this->dough." 를(을) 반죽하는 중...\n";
        echo $this->sauce." 를(을) 맛있게 바르는 중...\n";
        foreach ($this->toppings as $tp) {
            echo $tp." 를(을) 올리는 중...\n";
        }
    }

    public function bake() 
    {
        echo "350도에서 25분간 구워줍니다\n";
    }

    public function cut() 
    {
        echo "8조각으로 슬라이스\n";
    }

    public function box() 
    {
        echo "기본 피자 박스로 포장을 합니다\n";
    }

    public function getName() 
    {
        return $this->name;
    }
}