<?php

namespace Creator;

require_once './Creator/PizzaStore.php';
require_once './Product/NyCheesePizza.php';
require_once './Product/NyPepperoniPizza.php';
require_once './Product/NyVeggiePizza.php';
require_once './Product/NyClamPizza.php';

use Creator\PizzaStore;
use Product\NyCheesePizza;
use Product\NyPepperoniPizza;
use Product\NyVeggiePizza;
use Product\NyClamPizza;

class NyPizzaStore extends PizzaStore
{
    public function createPizza($type)
    {
        echo "뉴욕피자스토어\n";
        if ($type === "cheese") {
            return new NyCheesePizza;
        } elseif ($type === "pepperoni") {
            return new NyPepperoniPizza;
        } elseif ($type === "veggie") {
            return new NyVeggiePizza;
        } elseif ($type === "clam") {
            return new NyClamPizza;
        } else {
            return null;
        }
    }
}