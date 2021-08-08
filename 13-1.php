<?php

class X{
    private $non_static_member = 1;
    private static $static_member = 2;

    function __construct()
    {
        echo $this->non_static_member .' '.self::$static_member."\n";
        // echo self::$non_static_member . ' '.$this->static_member."\n";
    }
}
new X();