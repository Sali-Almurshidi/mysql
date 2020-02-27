<?php

class insertController
{
    function render(array $POST, Connection $connection)
    {

        if (($_SERVER['REQUEST_METHOD'] == 'POST')) {

            if (isset($_POST['add'])) {

                $firstName = $POST['first-name'];
                $lastName = $POST['last-name'];
                $userName = $POST['user-name'];
                $linkedin = $POST['linkedin'];
                $github = $POST['github'];
                $email = $POST['email'];
                $avatar = $POST['avatar'];
                $video = $POST['video'];
                $quote = $POST['quote'];
                $quoteAuthor = $POST['quote-author'];
                $preferredLanguage = $POST['preferred-language'];
                $password = $POST['password'];
                $confirmPassword = $POST['confirmPassword'];

                if($password ===  $confirmPassword){

                    $password = password_hash($password, PASSWORD_DEFAULT);

                    $userData = new StudentInfo($firstName, $lastName, $userName,
                        $linkedin, $github, $email,
                        $avatar, $video, $quote, $quoteAuthor, $preferredLanguage , $password);

                    $connection->insertData($userData);
                    require 'View/userPage.php';
                }else{
                    require 'View/register.php';
                    echo "the password conformation does not match ";

                }

            }

        } else {
            require 'View/register.php';
        }
    }
}
