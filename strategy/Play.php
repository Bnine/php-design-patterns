<?php
require_once './App/Character.php';
require_once './App/SwordBehavior.php';
require_once './App/KnifeBehavior.php';
require_once './App/AxeBehavior.php';
require_once './App/BowBehavior.php';

use App\Character;
use App\SwordBehavior;
use App\KnifeBehavior;
use App\AxeBehavior;
use App\BowBehavior;

$player = new Character;

//player with sword
$player->setWeapon(new SwordBehavior);
$player->fight();

//player with Bow
$player->setWeapon(new BowBehavior);
$player->fight();

//player with Axe
$player->setWeapon(new AxeBehavior);
$player->fight();

//player with Knife
$player->setWeapon(new KnifeBehavior);
$player->fight();
