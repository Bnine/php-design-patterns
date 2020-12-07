<?php

require_once './Classes/Singleton.php';

use Classes\Singleton;

/**
 * Singleton 클래스 객체 생성 시도시 에러
 */
//$obj = new Singleton;

/**
 * static getInstance 호출로
 * 인스턴스를 넘겨 받음
 */
$obj = Singleton::getInstance();
$obj_chk = $obj instanceof Singleton;
var_dump($obj);
var_dump($obj_chk);

$obj2 = Singleton::getInstance();
$obj_chk = $obj2 instanceof Singleton;
var_dump($obj2);
var_dump($obj_chk);

var_dump($obj === $obj2);
