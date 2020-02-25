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
    public function getPdo()
    {
        return $this->pdo;
    }

    function openConnection()
    {
        // Try to figure out what these should be for you
        $this->dbhost = "127.0.0.1";
        $this->dbuser = "becode";
        $this->dbpass = "becode";
        $this->dbname = "becode";
        // Try to understand what happens here
        $this->pdo = new PDO('mysql:host=' . $this->dbhost . ' ;dbname='
            . $this->dbuser, $this->dbpass, $this->dbname);

        // Why we do this here
        //return $pdo;
    }

    function checkConnection()
    {
        $this->openConnection();
        try {
            //  $returnValue = openConnection();
            // set the PDO error mode to exception
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return true;

        } catch (PDOException $e) {
            return "Connection failed: " . $e->getMessage();
        }
    }

    function insertData(StudentInfo $studentInfo)
    {
        echo $studentInfo->getFirstName();

        $sql = "INSERT INTO student (first_name,last_name,username,linkedin , github , email, avatar, video ,quote, quote_author , preferred_language) VALUES ('$studentInfo->getFirstName()','$studentInfo->getLastName()','$studentInfo->getUserName()','$studentInfo->getLinkedin()','$studentInfo->getGithub()','$studentInfo->getEmail()', '$studentInfo->getAvatar()','$studentInfo->getVideo()','$studentInfo->getQuote()','$studentInfo->getQuoteAuthor()','$studentInfo->getPreferredLanguage()' )";


        if ($this->pdo->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->pdo->error;
        }
        $this->pdo->close();
    }
}

