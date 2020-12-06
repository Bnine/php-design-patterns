<?php

namespace Beverage;

require_once './Abstracts/Beverage.php';

use Abstracts\Beverage; 

class Espresso extends Beverage
{
    public function __construct()
    {
        $this->description = "에스프레소";
    }

    public function cost()
    {
        return 1.99;
    }
}
