<?php

namespace Beverage;

require_once './Abstracts/Beverage.php';

use Abstracts\Beverage; 

class DarkRoast extends Beverage
{
    public function __construct()
    {
        $this->description = "다크로스트";
    }

    public function cost()
    {
        return 1.29;
    }
}
