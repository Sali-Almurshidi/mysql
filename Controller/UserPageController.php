<?php


class UserPageController
{
    private $userId;
    private $pdo;

    function getUserInformation()
    {
        $userId = $_SESSION['userID'];
        $connection = new Connection();
        $userId = intval($userId);
        $sql = "SELECT * FROM student WHERE id = '$userId'";
        $connection->openConnection();
        $result = $connection->getPdo()->query($sql);
        $dbPassword = $result->fetch();
        return $dbPassword;
    }

    function render()
    {
       // if (isset($_POST['deleteAccount'])) {
            /*$loginController = new loginController();
            $loginController->render();*/
            $this->deleteAccount();
       // }
    }


    function deleteAccount()
    {
        $userId = $_SESSION['userID'];
        $connection = new Connection();
        $userId = intval($userId);

        $sql = "DELETE FROM student WHERE id=:studentID";

        $connection->openConnection();

        $result = $connection->getPdo()->prepare($sql);

        $dbPassword = $result->execute(['studentID' => $userId]);
        var_dump($dbPassword);

         return $dbPassword;
    }
}
