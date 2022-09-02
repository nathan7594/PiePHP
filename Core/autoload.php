<?php

   Spl_autoload_register ( function ($class) {
    $file = str_replace("\\","/",$class.".php");
    require_once($file);
   // $file = "./Core/Core.php";
    //require_once($file);
   
    
       
   });
 

       // var_dump($sources);
       // echo $class;
      //./core/core.php
        
        



