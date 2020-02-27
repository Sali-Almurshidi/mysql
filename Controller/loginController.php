<?php

class loginController
{

    private $pdo;
    private $email;
    private $password;

    function render()
    {
        if (isset($_POST['login'])) {

            $this->email = $_POST['email'];
            $this->password = $_POST['password'];
            $this->getinput();

        } else {
            require 'View/login.php';
        }
    }

    function getinput()
    {
        $this->ConnectionWithBD();
        $array = $this->checkUserInput();
        if ($array == false) {
            echo "your email or password is wrong";
            require 'View/login.php';
        }else {
            $_SESSION['userID'] = $array['id'];
            require 'View/userPage.php';
        }

    }

    function ConnectionWithBD()
    {
        $connect = new Connection();
        $connect->openConnection();
        $this->pdo = $connect->getPdo();
    }

    function checkUserInput()
    {
        $sql = "SELECT password FROM student WHERE email = '$this->email'";
        $result = $this->pdo->query($sql);
        $dbPassword = $result->fetch();
        var_dump($dbPassword);
        if(password_verify($this->password, $dbPassword['password'])){
            //$this->password = password_hash($this->password, PASSWORD_DEFAULT);
            $sql = "SELECT id FROM student WHERE email = '$this->email'";
            $result = $this->pdo->query($sql);
            return $result->fetch();
        }else{
            return false;
        }

    }
}

