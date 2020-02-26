<?php


class UserInfoController
{

    function getUsersInformation()
    {
        $connection = new Connection();

        $sql = "SELECT id, first_name, last_name , email , preferred_language FROM student";
        $connection->openConnection();

        $result = $connection->getPdo()->query($sql);

        return $result;

    }

    function render()
    {
        require 'View/usersInfo.php';
    }


}