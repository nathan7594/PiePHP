<?php
class UserModel
{
    public function connectController()
    {

        $servername = 'localhost:8889';
        $username = 'root';
        $password = 'root';

        try {
            $conn = new PDO("mysql:host=$servername;dbname=user", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connexion réussie";
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
        $conn = null;
    }
}
//$connect = new UserModel;
//$connect->connectController();
