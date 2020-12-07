<?php

namespace Creator;

abstract class PizzaStore
{
    public function orderPizza($type) {
        echo "피자를 주문합시다\n";
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    abstract protected function createPizza($type);
}