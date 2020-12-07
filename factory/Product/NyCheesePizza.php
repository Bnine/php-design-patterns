<?php

namespace Product;

require_once './Product/Pizza.php';

use Product\Pizza;

class NyCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "뉴욕 스타일 소스와 치즈 피자";
        $this->dough = "Thin 크러스트 도우";
        $this->sauce = "마리나라 소스";
        $this->toppings = array(
            "Grated Reggiano 치즈"
        );
    }
}