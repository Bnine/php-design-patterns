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

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getSize() 
    {
        return $this->size;
    }

    public function cost()
    {
        if ($this->size === 'S') {
            return 0.89;
        } elseif ($this->size === 'M') {
            return 1.89;
        } elseif ($this->size === 'L') {
            return 2.89;
        }
    }
}
