<?php

namespace Product;

require_once './Product/Pizza.php';

use Product\Pizza;

class ChCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "시카고 스타일 소스와 치즈 피자";
        $this->dough = "Extra Thick 크러스트 도우";
        $this->sauce = "Plum Tomato 소스";
        $this->toppings = array(
            "Shredded Mozzarella 치즈",
            "페페로니"
        );
    }

    public function cut()
    {
        echo "네모모양으로 4조각 슬라이스\n";
    }
}