<?php

namespace Creator;

require_once './Creator/PizzaStore.php';
require_once './Product/ChCheesePizza.php';
require_once './Product/ChPepperoniPizza.php';
require_once './Product/ChVeggiePizza.php';
require_once './Product/ChClamPizza.php';

use Creator\PizzaStore;
use Product\ChCheesePizza;
use Product\ChPepperoniPizza;
use Product\ChVeggiePizza;
use Product\ChClamPizza;

class ChPizzaStore extends PizzaStore
{
    public function createPizza($type)
    {
        echo "시카코피자스토어\n";
        if ($type === "cheese") {
            return new ChCheesePizza;
        } elseif ($type === "pepperoni") {
            return new ChPepperoniPizza;
        } elseif ($type === "veggie") {
            return new ChVeggiePizza;
        } elseif ($type === "clam") {
            return new ChClamPizza;
        } else {
            return null;
        }
    }
}