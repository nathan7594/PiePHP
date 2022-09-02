<?php
use Core\Router;
Router::connect('/', ['controller' => 'App', 'action' => 'index']); // /=url []=route controler fichier qu'on appelle et action la fonction du fichier 
Router::connect('/register', ['controller' => 'User', 'action' => 'add']);
Router::connect('/yes', ['controller' => 'User', 'action' => 'connectModel']);
Router::connect('/ok',['controller'=>'User','action'=>'ok']);