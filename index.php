<?php
declare(strict_types=1);
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'Controller/Connection.php';
require 'Controller/InsertController.php';
require 'Controller/ProfileController.php';
require 'Controller/UserInfoController.php';
require 'Controller/loginController.php';

require 'Model/StudentInfo.php';

$connection = new Connection();
$connectionStatus = $connection->checkConnection();


//load different controller here based on user input
//_get user info = true -> load the user controller

if (isset($_GET['showAllData'])) {
    $userInfoController = new UserInfoController();
    $userInfoController->render();
}

if (isset($_GET['user'])) {
    $profileController = new ProfileController();
    $profileController->render();
}

if (isset($_GET['loginPage'])) {
    $loginController = new loginController();
    $loginController->render();
}

if (isset($_GET['homePage'])) {
    $insert = new insertController();
    $insert->render($_POST, $connection);
}

if(!isset($_GET['showAllData']) && !isset($_GET['user']) && !isset($_GET['homePage']) &&
        !isset($_GET['loginPage'])){
    if ($connectionStatus == true) {
        $insert = new insertController();
        $insert->render($_POST, $connection);
    } else {
        echo $connectionStatus;
    }
}



