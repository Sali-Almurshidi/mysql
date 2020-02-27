<?php


class loginController
{

    function render()
    {



            if (isset($_POST['login'])) {

                $firstName = $_POST['first-name'];
                $lastName = $_POST['last-name'];

                require 'View/login.php';
            }else {
                require 'View/login.php';
            }

        }



}