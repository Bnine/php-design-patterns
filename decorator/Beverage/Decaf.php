<?php

namespace Beverage;

require_once './Abstracts/Beverage.php';

use Abstracts\Beverage; 

class Decaf extends Beverage
{
    public function __construct()
    {
        $this->description = "디카페";
    }

    public function cost()
    {
        return 2.49;
    }
}
