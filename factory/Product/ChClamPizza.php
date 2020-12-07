<?php

namespace Product;

require_once './Product/Pizza.php';

use Product\Pizza;

class ChClamPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "시카고 스타일 조개 피자";
        $this->dough = "Extra Thick 크러스트 도우";
        $this->sauce = "Plum Tomato 소스";
        $this->toppings = array(
            "Shredded Mozzarella 치즈",
            "신선한 홍합",
            "신선한 조개"
        );
    }

    public function cut()
    {
        echo "네모모양으로 4조각 슬라이스\n";
    }
}