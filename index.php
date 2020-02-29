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
require 'Controller/UserPageController.php';
require 'Controller/userEditPasswordController.php';
require 'Controller/editUserInformationController.php';

require 'Model/StudentInfo.php';

$connection = new Connection();
$connectionStatus = $connection->checkConnection();

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

/*if (isset($_GET['confirmChange'])) {
    $change = new editUserInformationController();
    $insert->render($_POST, $connection);
}

if (isset($_GET['doneChangePassword'])) {
    $change = new editUserInformationController();
    $insert->render($_POST, $connection);
}*/

if (isset($_GET['editInformation'])) {
    $editInformation = new editUserInformationController();
    $editInformation->render();
}

if (isset($_GET['deleteAccount'])) {
    $deleteUser = new UserPageController();
    $result = $deleteUser->deleteAccount();
    if($result == true){
        $loginController = new loginController();
        $loginController->render();
    }else{
        require 'View/userPage.php';
        echo "fail to delete this account";
    }

}


if(!isset($_GET['showAllData']) && !isset($_GET['user']) && !isset($_GET['homePage']) &&
        !isset($_GET['loginPage']) && !(isset($_GET['editInformation']))  ){
    if ($connectionStatus == true) {
        $insert = new insertController();
        $insert->render($_POST, $connection);
    } else {
        echo $connectionStatus;
    }
}



