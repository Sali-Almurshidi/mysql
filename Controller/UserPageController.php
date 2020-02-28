<?php


class UserPageController
{
    function getUserInformation (){
        $userId = $_SESSION['userID'];
        $connection = new Connection();
        $userId = intval($userId);
        $sql = "SELECT * FROM student WHERE id = '$userId'";
        $connection->openConnection();
        $result = $connection->getPdo()->query($sql);
        $dbPassword = $result->fetch();
        return $dbPassword;
    }
}