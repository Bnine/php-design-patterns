<?php

namespace Condiment;

//require_once './Abstracts/CondimentDecorator.php';
require_once './Interfaces/CondimentDecorator.php';

//use Abstracts\CondimentDecorator; 
use Interfaces\CondimentDecorator;

class Sugar implements CondimentDecorator
{
    private $beverage;

    public function __construct($beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription() 
    {
        return $this->beverage->getDescription().", 설탕 추가";
    }

    public function cost()
    {
        return $this->beverage->cost() + 0.25;
    }
}
