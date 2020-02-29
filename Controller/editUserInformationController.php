<?php


class editUserInformationController
{
    private $pdo;

    private $userID ;
    private $firstName;
    private $lastName;
    private $linkedin;
    private $github;
    private $email;
    private $avatar;
    private $video;
    private $quote;
    private $quoteAuthor;
    private $preferredLanguage;

    private $oldInformation;

    private $connect;


    function render()
    {
        if (($_SERVER['REQUEST_METHOD'] == 'POST')) {

            if (isset($_POST['confirmChange'])) {

                $this->firstName = $_POST['first-name'];
                $this->lastName = $_POST['last-name'];
                $this->linkedin = $_POST['linkedin'];
                $this->github = $_POST['github'];
                $this->email = $_POST['email'];
                $this->avatar = $_POST['avatar'];
                $this->video = $_POST['video'];
                $this->quote = $_POST['quote'];
                $this->quoteAuthor = $_POST['quote-author'];
                $this->preferredLanguage = $_POST['preferred-language'];

                $this->userID = $_SESSION['userID'];
                $this->getOldInformation();
                $this->checkChangField();
                $this->sendToDB();

                require 'View/editUserInformation.php';
                echo "done";

            }

        } else {
            require 'View/editUserInformation.php';
        }
    }

    function getOldInformation(){

        $this->ConnectionWithBD();
        $this->userID = intval( $this->userID);
        $sql = "SELECT * FROM student WHERE id = ' $this->userID'";
        $result = $this->pdo->query($sql);
        $this->oldInformation = $result->fetch();
    }

    function checkChangField(){

        if($this->firstName == null){
            $this->firstName = $this->oldInformation['first_name'];
        }
        if($this->lastName == null){
            $this->lastName = $this->oldInformation['last_name'];
        }
        if($this->github == null){
            $this->github = $this->oldInformation['github'];
        }
        if($this->email == null){
            $this->email = $this->oldInformation['email'];
        }
        if($this->avatar == null){
            $this->avatar = $this->oldInformation['avatar'];
        }
        if($this->video == null){
            $this->video = $this->oldInformation['video'];
        }
        if($this->quote == null){
            $this->quote = $this->oldInformation['quote'];
        }
        if($this->quoteAuthor == null){
            $this->quoteAuthor = $this->oldInformation['quote_author'];
        }
        if($this->preferredLanguage == null){
            $this->preferredLanguage = $this->oldInformation['preferred_language'];
        }
    }

    function ConnectionWithBD()
    {
        $connect = new Connection();
        $connect->openConnection();
        $this->pdo = $connect->getPdo();
    }

    function sendToDB(){
       // $this->ConnectionWithBD();
        //$this->pdo = $this->connect->getPdo();
        $connect = new Connection();
        $connect->openConnection();
        $this->pdo = $connect->getPdo();
     try{
         $sql = "UPDATE student SET (first_name, last_name, linkedin, github, email, preferred_language, avatar, video, quote, quote_author) VALUES (:firstName, :lastName, :linkedin, :github, :email, :preferred_language, :avatar , :video ,:quote , :quote_author) WHERE id='$this->userID'";

         $paraArr = array('firstName' => $this->firstName, 'lastName' => $this->lastName, 'linkedin' => $this->linkedin, 'github' => $this->github, 'email' => $this->email, 'preferred_language' => $this->preferredLanguage, 'avatar' => $this->avatar, 'video' => $this->video, 'quote' => $this->quote, 'quote_author' => $this->quoteAuthor);


         $this->pdo->prepare($sql)->execute($paraArr);

     }  catch (PDOException $e){
         echo $sql . "<br>" . $e->getMessage();
     }
    }
}








