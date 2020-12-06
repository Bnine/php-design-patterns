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
$espresso->setSize('M');
$espresso = new Mocha($espresso);
echo $espresso->getDescription()." $".$espresso->cost()."\n";

$espresso1 = new Espresso;
$espresso1->setSize('L');
$espresso1 = new Mocha($espresso1);
echo $espresso1->getDescription()." $".$espresso1->cost()."\n";

$houseblend = new HouseBlend;
$houseblend->setSize('S');
$houseblend = new Mocha($houseblend);
$houseblend = new Mocha($houseblend);
$houseblend = new Sugar($houseblend);
echo $houseblend->getDescription()." $".$houseblend->cost()."\n";

$houseblend1 = new HouseBlend;
$houseblend1->setSize('M');
$houseblend1 = new Mocha($houseblend1);
$houseblend1 = new Mocha($houseblend1);
$houseblend1 = new Sugar($houseblend1);
echo $houseblend1->getDescription()." $".$houseblend1->cost()."\n";

$darkRoast = new DarkRoast;
$darkRoast->setSize('S');
$darkRoast = new Sugar($darkRoast);
$darkRoast = new Whip($darkRoast);
$darkRoast = new Milk($darkRoast);
echo $darkRoast->getDescription()." $".$darkRoast->cost()."\n";

$darkRoast1 = new DarkRoast;
$darkRoast1->setSize('L');
$darkRoast1 = new Sugar($darkRoast1);
$darkRoast1 = new Whip($darkRoast1);
$darkRoast1 = new Milk($darkRoast1);
echo $darkRoast1->getDescription()." $".$darkRoast1->cost()."\n";

$decaf = new Decaf;
$decaf->setSize('L');
$decaf = new Sugar($decaf);
echo $decaf->getDescription()." $".$decaf->cost()."\n";