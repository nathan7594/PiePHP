<?php

namespace Core;

use Core\Router;

class Core {

public function run()

{ 
    echo __CLASS__ . " [OK]" . PHP_EOL;
    //require_once("./Core/router.php");// Chemin je pars de lindex
    require_once("./src/route.php");
    $url=substr($_SERVER["REQUEST_URI"],7);
    $array = Router::get($url);
    $controller = $array["controller"]."Controller";
    require_once("./src/Controller/$controller.php");
    $action = $array["action"];
    $instancecontroller = new $controller();
    $instancecontroller->$action();
} 
public function rundynamique()

{ 
    $url=substr($_SERVER["REQUEST_URI"],8);
    if($url==""){
        $controller = "AppController";
        $methode = "index";
        
    }
    else{ 
        $array = explode("/",$url);
        if(count($array)==1){
            $controller = $array[0]."Controller";
            $methode = "index";// Précise pas de méthode exécute index

           
        }
        elseif(count($array)==2){
            $controller = $array[0]."Controller";
            $methode = $array[1];
        }
        else{
            echo "Erreur 404";
        }
    }

    if(file_exists("./src/controller/$controller.php")){
        require_once("./src/controller/$controller.php");
        
            if(method_exists($controller,$methode)){
                $instancecontroller = new $controller; // instancie la classe du controlleur
                $instancecontroller->$methode();// execute une méthode on lappelle 
            }
    
            else{
                echo "la méthode n'éxiste pas DESOLE";
            }
    }
    else{
        echo "le controlleur n'existe pas";
    } 
}

}
