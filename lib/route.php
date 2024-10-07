<?php
#los namespace van conforme la carpeta que se ecuentran
namespace Lib;
class Route{
    private static $routes= [];
    public static function get($uri,$callback){
        self::$routes['GET'][$uri]= $callback;
    }
    public static function post($uri,$callback){
        self::$routes['POST'][$uri]=$callback;
    }
}