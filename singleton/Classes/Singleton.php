<?php

namespace Classes;

class Singleton
{
    private static $instance;

    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new static;
            //static::$instance = new self;
            //static::$instance = new Singleton;
        }

        return static::$instance;
    }

    /**
     * 새로운 인스턴스 생성을 막기 위해
     * private로 접근자 설정
     */
    private function __construct()
    {

    }

    /**
     * 인스턴스 복제를 막기 위해
     * private로 접근자 설정
     */
    private function __clone()
    {

    }

    /**
     * 인스턴스 unserialize를 막기 위해
     * private로 접근자 설정
     */
    private function __wakeup()
    {

    }
}