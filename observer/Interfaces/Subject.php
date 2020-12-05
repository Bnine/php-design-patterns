<?php

namespace Interfaces;

/**
 * 주제 인터페이스
 * 옵저버 등록, 삭제, 알림 메소드 생성
 * 2020.12.05 Bnine
 */

interface Subject
{
   public function registerObserver($observer);
   public function removeObserver($observer);
   public function notifyObservers();
}
