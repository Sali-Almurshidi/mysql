<?php


class ProfileController
{
    function getProfileInformation( int $studentID){
        $connection = new Connection();
        $connection->openConnection();
        $connection->getPdo();

        $sql = "SELECT * FROM student WHERE id=:ID";

        $statement = $connection->getPdo()->prepare($sql);
        $statement->execute(['ID' => $studentID]);

        return $statement->fetch();

    }

    function render()
    {
        require 'View/profile.php';
    }
}