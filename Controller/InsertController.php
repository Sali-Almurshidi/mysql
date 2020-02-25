<?php

class insertController
{
    function render(array $POST , Connection $connection)
    {

        if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
            // all the field have to be fill
         /*   if (!isset($_POST['first-name']) &&
                !isset($_POST['last-name']) &&
                !isset($_POST['user-name']) &&
                !isset($_POST['linkedin']) &&
                !isset($_POST['github']) &&
                !isset($_POST['email']) &&
                !isset($_POST['avatar']) &&
                !isset($_POST['video']) &&
                !isset($_POST['quote']) &&
                !isset($_POST['quote-author']) &&
                !isset($_POST['video']) &&
                !isset($_POST['preferred-language'])
            ) {*/


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

                $userData = new StudentInfo($firstName, $lastName, $userName,
                    $linkedin, $github, $email,
                    $avatar, $video, $quote, $quoteAuthor, $preferredLanguage);

                $connection->insertData($userData);

           /* } else {
                echo "fill all the field ";
            }*/


        }
    }
}
