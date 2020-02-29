<?php

class Connection
{

    private $dbhost;
    private $dbuser;
    private $dbpass;
    private $dbname;
    private $pdo;

    /**
     * @return mixed
     */
    public function getPdo() : PDO
    {
        return $this->pdo;
    }

    function openConnection()
    {
        // Try to figure out what these should be for you
        $this->dbhost = "127.0.0.1";
        $this->dbuser = "becode";
        $this->dbpass = "******";
        $this->dbname = "becode";
        // Try to understand what happens here
        $this->pdo = new PDO('mysql:host=' . $this->dbhost . ' ;dbname='
            . $this->dbuser, $this->dbpass, $this->dbname);

        // Why we do this here
        //return $pdo;
    }

    function checkConnection()
    {
        try {
            $this->openConnection();

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return true;

        } catch (PDOException $e) {
            return "Connection failed: " . $e->getMessage();
        }
    }

    function insertData(StudentInfo $studentInfo)
    {

        try {
            $sql = "INSERT INTO student (first_name, last_name, username, linkedin, github, email, preferred_language, avatar, video, quote, quote_author, password) VALUES (:firstName, :lastName, :username, :linkedin, :github, :email, :preferred_language, :avatar , :video ,:quote , :quote_author, :password)";

            $paraArr = array('firstName' => $studentInfo->getFirstName(), 'lastName' => $studentInfo->getLastName(), 'username' => $studentInfo->getUserName(), 'linkedin' => $studentInfo->getLinkedin(), 'github' => $studentInfo->getGithub(), 'email' => $studentInfo->getEmail(), 'preferred_language' => $studentInfo->getPreferredLanguage(), 'avatar' => $studentInfo->getAvatar(), 'video' => $studentInfo->getVideo(), 'quote' => $studentInfo->getQuote(), 'quote_author' => $studentInfo->getQuoteAuthor(),'password'=>$studentInfo->getPassword() );

            $this->pdo->prepare($sql)->execute($paraArr);
        } catch (Exception $e) {
            echo $e->getMessage();
        }


    }

}

