<?php

namespace Abstracts;

abstract class Beverage 
{
    protected $description = "설명글이 없습니다.";
    protected $size = "선택된 사이즈가 없습니다.";

    public function getDescription() 
    {
        return $this->description."(".$this->size.")";
    }

    abstract public function cost();

    abstract public function setSize($size);

    abstract public function getSize();
}
