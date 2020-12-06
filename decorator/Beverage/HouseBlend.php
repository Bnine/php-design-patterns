<?php

namespace Beverage;

require_once './Abstracts/Beverage.php';

use Abstracts\Beverage; 

class HouseBlend extends Beverage
{
    public function __construct()
    {
        $this->description = "하우스블랜드";
    }

    public function cost()
    {
        return 0.89;
    }
}
