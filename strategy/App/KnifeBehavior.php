<?php

namespace App;

require_once './Interfaces/WeaponInterface.php';

use Interfaces\WeaponInterface;

/**
 * KnifeBehavior 클래스
 * 단검으로 공격하는 것을 표현하는 클래스
 * 2020.12.05 Bnine
 */

Class KnifeBehavior implements WeaponInterface
{
    public function useWeapon()
    {
        $crit = mt_rand(0, 100);
        //echo $crit;
        if ($crit >= 90) {
            echo "단검으로 더 강하게 공격합니다!\n";
        } else {
            echo "단검으로 공격합니다!\n";
        }
    }
}