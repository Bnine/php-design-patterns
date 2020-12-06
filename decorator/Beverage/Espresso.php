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
            return 1.99;
        } elseif ($this->size === 'M') {
            return 2.99;
        } elseif ($this->size === 'L') {
            return 3.99;
        }
    }
}
