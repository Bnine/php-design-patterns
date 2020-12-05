<?php

namespace App;

require_once './Interfaces/WeaponInterface.php';

use Interfaces\WeaponInterface;

/**
 * BowBehavior 클래스
 * 활로 공격하는 것을 표현하는 클래스
 * 2020.12.05 Bnine
 */

Class BowBehavior implements WeaponInterface
{
    public function useWeapon()
    {
        $crit = mt_rand(0, 100);
        //echo $crit;
        if ($crit >= 90) {
            echo "활로 더 강하게 공격합니다!";
        } else {
            echo "활로 공격합니다!";
        }
    }
}