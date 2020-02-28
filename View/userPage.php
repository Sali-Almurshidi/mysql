<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<h1> user page </h1>
<?php

$users = new UserPageController();
$storedInformation = $users->getUserInformation();

?>
<table>
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
        <td><?php echo $storedInformation['last_name']?></td>
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
    <tr>
        <td>date:</td>
        <td><?php echo $storedInformation['created_at'] ?></td>
    </tr>
    </tr>
</table>

<form method="get">
    <button value="Submit" onclick="" name="login"> edit information </button>
    <button value="Submit" onclick="" name="homePage"> back to home page</button>
    <button value="Submit" onclick="" name="deleteAccount"> Delete this account </button>
</form>

</body>
</html>
