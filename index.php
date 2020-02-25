<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'Controller/Connection.php';
require 'Controller/InsertController.php';

require 'Model/StudentInfo.php';

$connection = new Connection();
$connectionStatus = $connection->checkConnection() ;

if ($connectionStatus == true ){
    require 'View/insert.php';
    //$connection->getPdo();
    $insert = new insertController();
    $insert->render($_POST ,$connection);
}else{
    echo $connectionStatus;
}


