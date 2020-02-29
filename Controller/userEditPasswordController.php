<?php


class userEditPasswordController
{

    function render(){
        if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
            $oldPassword = $_POST['oldPassword'];
            $newPassword = $_POST['newPassword'];
            $confirmPassword = $_POST['confirmPassword'];

            if($newPassword == $confirmPassword){
                $userID = $_SESSION['userID'];
                $newpassword = password_hash($newPassword, PASSWORD_DEFAULT);

                $checkPassword = new loginController();
                $checkPassword->checkUserInput();


            }else{
                echo "the new password and the confirm password not match ";
            }
        }
    }
}