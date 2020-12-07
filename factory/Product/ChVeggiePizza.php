<?php

namespace Product;

require_once './Product/Pizza.php';

use Product\Pizza;

class ChVeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "시카고 스타일 야채 피자";
        $this->dough = "Extra Thick 크러스트 도우";
        $this->sauce = "Plum Tomato 소스";
        $this->toppings = array(
            "Shredded Mozzarella 치즈",
            "유기농 피망",
            "유기농 방울토마토",
            "유기농 버질",
            "유기농 양파"
        );
    }

    public function bake() 
    {
        echo "350도에서 15분간 구워줍니다\n";
    }

    public function cut()
    {
        echo "네모모양으로 4조각 슬라이스\n";
    }
}