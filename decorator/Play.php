<?php
require_once './Beverage/Espresso.php';
require_once './Beverage/HouseBlend.php';
require_once './Beverage/DarkRoast.php';
require_once './Beverage/Decaf.php';
require_once './Condiment/Milk.php';
require_once './Condiment/Mocha.php';
require_once './Condiment/Sugar.php';
require_once './Condiment/Whip.php';

use Beverage\Espresso;
use Beverage\HouseBlend;
use Beverage\DarkRoast;
use Beverage\Decaf;
use Condiment\Milk;
use Condiment\Mocha;
use Condiment\Sugar;
use Condiment\Whip;

$espresso = new Espresso;
echo $espresso->getDescription()." $".$espresso->cost()."\n";

$houseblend = new HouseBlend;
$houseblend = new Mocha($houseblend);
$houseblend = new Mocha($houseblend);
$houseblend = new Sugar($houseblend);
echo $houseblend->getDescription()." $".$houseblend->cost()."\n";

$darkRoast = new DarkRoast;
$darkRoast = new Sugar($darkRoast);
$darkRoast = new Whip($darkRoast);
$darkRoast = new Milk($darkRoast);
echo $darkRoast->getDescription()." $".$darkRoast->cost()."\n";

$decaf = new Decaf;
$decaf = new Sugar($decaf);
echo $decaf->getDescription()." $".$decaf->cost()."\n";