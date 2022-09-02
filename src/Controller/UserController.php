<?php
use Core\Controller;

class UserController extends Core\Controller
{
    public function connectModel()
    {
        require_once("src/Model/UserModel.php");
        $connect = new UserModel;
        $connect->connectController();
    }
    public function add(){
        echo "je suis la méthode add du user controller";
    }
    public function ok(){
        $cho = "pas de pb\n";
        echo $cho;
        $chocho =ucfirst($cho);
        echo $chocho;
    }
    public function index(){
        echo "je suis la méthode index du controller User";
    }
}



