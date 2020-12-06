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
            return 1.29;
        } elseif ($this->size === 'M') {
            return 2.29;
        } elseif ($this->size === 'L') {
            return 3.29;
        }
    }
}
