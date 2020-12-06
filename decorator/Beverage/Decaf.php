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
            return 2.49;
        } elseif ($this->size === 'M') {
            return 3.49;
        } elseif ($this->size === 'L') {
            return 4.49;
        }
    }
}
