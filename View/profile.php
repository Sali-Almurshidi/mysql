<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
//require 'Controller/ProfileController.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>

<h1>Profile</h1>

<?php
$id = $_GET['user'];

$userInformation = new ProfileController();
$profile = $userInformation->getProfileInformation($id);

?>
<form method="get">
    <button value="Submit" onclick="" name="showAllData"> back to list user page</button>
</form>
<table>

    <tr>
        <td><h3>-------------------</h3></td>
    </tr>
    <tr>
        <td>First name:</td>
        <td><?php echo $profile['first_name'] ?></td>
    </tr>
    <tr>
        <td>Last name:</td>
        <td><?php echo $profile['last_name'] ?></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><?php echo $profile['email'] ?></td>
    </tr>
    <tr>
        <td>
            <img src="<?php echo '../img/' . $profile['preferred_language'] . '.png' ?>" alt="flag">
        </td>
    </tr>
    <tr>
        <td>User Name:</td>
        <td><?php echo $profile['username'] ?></td>
    </tr>
    <tr>
        <td>Github:</td>
        <td><?php echo $profile['github'] ?></td>
    </tr>
    <tr>
        <td>Avatar:</td>
        <td><?php echo $profile['avatar'] ?></td>
    </tr>
    <tr>
        <td>Video:</td>
        <td><a href="<?php $profile['video']?>">Video</a></td>
    </tr>
    <tr>
        <td>Quote:</td>
        <td><?php echo $profile['quote'] ?></td>
    </tr>
    <tr>
        <td>Quote author:</td>
        <td><?php echo $profile['quote_author'] ?></td>
    </tr>
    <tr>
        <td>Date:</td>
        <td><?php echo $profile['created_at'] ?></td>
    </tr>
    <tr>
    <img src="https://belikebill.ga/billgen-API.php?default=1&name=yourname&sex=f" />
    </tr>
</table>



</body>
</html>

