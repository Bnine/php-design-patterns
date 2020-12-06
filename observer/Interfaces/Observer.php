<?php

namespace Interfaces;

/**
 * 옵저버 인터페이스
 * 업데이트 메소드 생성
 * 2020.12.05 Bnine
 */

interface Observer
{
   public function update($temp, $humidity, $pressure);
}
