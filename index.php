<?php

echo "<pre>";
//echo $_POST['email'].PHP_EOL;
//echo $_POST['password'].PHP_EOL;
//var_dump($_POST);
//var_dump($_GET);
//var_dump($_SERVER);
//var_dump(str_replace('\\', '/', substr(__DIR__ , strlen($_SERVER['DOCUMENT_ROOT']))));
//echo "</pre>";
define('BASE_URI ', str_replace('\\', '/', substr(__DIR__ , strlen($_SERVER['DOCUMENT_ROOT']))));
require_once(implode(DIRECTORY_SEPARATOR , ['Core','autoload.php'])); // copie ce qui est dans core/autoload.php dans le fichier ou je suis du coup index.php 
$app = new Core\Core (); 
//$app ->run();

$app->rundynamique();




