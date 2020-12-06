<?php

namespace Abstracts;

abstract class Beverage 
{
    protected $description = "설명글이 없습니다.";

    public function getDescription() 
    {
        return $this->description;
    }

    abstract public function cost();
}
