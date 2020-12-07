<?php

namespace Product;

require_once './Product/Pizza.php';

use Product\Pizza;

class NyVeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "뉴욕 스타일 야채 피자";
        $this->dough = "Thin 크러스트 도우";
        $this->sauce = "마리나라 소스";
        $this->toppings = array(
            "Grated Reggiano 치즈",
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
}