<?php
namespace Core;
class Router {

    private static $routes; // routes = tableaux vide
    public static function connect ($url , $route) //$route tableaux
    { 
        self :: $routes[$url] = $route; // route tableaux controler => "" action=> ""
    }
    
    public static function get ($url){
        return(self::$routes[$url]);
    }
}


    
   