<?php
require_once './Creator/NyPizzaStore.php';
require_once './Creator/ChPizzaStore.php';

use Creator\NyPizzaStore;
use Creator\ChPizzaStore;

$nyPizzaOrder = new NyPizzaStore;
$chPizzaOrder = new ChPizzaStore;

$pizza = $nyPizzaOrder->orderPizza("cheese");
echo "Bnine님이 주문하신 피자 -> ".$pizza->getName()."\n";

$pizza = $chPizzaOrder->orderPizza("veggie");
echo "Bnine님이 주문하신 피자 -> ".$pizza->getName()."\n";

$pizza = $nyPizzaOrder->orderPizza("pepperoni");
echo "Bnine님이 주문하신 피자 -> ".$pizza->getName()."\n";

$pizza = $chPizzaOrder->orderPizza("clam");
echo "Bnine님이 주문하신 피자 -> ".$pizza->getName()."\n";

$pizza = $nyPizzaOrder->orderPizza("veggie");
echo "Bnine님이 주문하신 피자 -> ".$pizza->getName()."\n";