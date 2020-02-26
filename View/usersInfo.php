<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>

<h1>Users Information</h1>

<form method="get">
    <button value="Submit" onclick="" name="homePage"> back to home page</button>
</form>

<?php

$users = new UserInfoController();
$Information = $users->getUsersInformation();

?>
<table>
    <?php
    foreach ($Information as $storedInformation):
        ?>
        <tr datatype="">
        <tr>
            <td><h3>-------------------</h3></td>
        </tr>
        <tr>
            <td>First name:</td>
            <td><?php echo $storedInformation['first_name'] ?></td>
        </tr>
        <tr>
            <td>Last name:</td>
            <td><?php echo $storedInformation['last_name'] ?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo $storedInformation['email'] ?></td>
        </tr>
        <tr>
            <td>
                <img src="<?php echo '../img/' . $storedInformation['preferred_language'] . '.png' ?>" alt="flag">
            </td>
        </tr>
        <tr>
            <td><a href="?user=<?php echo $storedInformation['id'] ?>">Profile</td>
        </tr>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>