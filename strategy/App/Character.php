<?php

namespace App;

use Interfaces\WeaponInterface;

/**
 * Character 클래스
 * 하위 클래스들이 사용 할 수 있는 fight 메소드를 생성
 */

Class Character 
{
    private $weapon;

    public function setWeapon(WeaponInterface $weapon)
    {
        $this->weapon = $weapon;
    }

    public function fight()
    {
        $this->weapon->useWeapon();
    }
}