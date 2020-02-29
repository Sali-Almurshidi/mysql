
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<?php $user = $_SESSION['username']?>
<label>user name: <?php echo $user?></label><br>

<form method="post">

    <label>first name:</label><br>
    <input type="text" id="first-name" name="first-name" placeholder="first name" ><br>

    <label>last name:</label><br>
    <input type="text" id="last-name" name="last-name" placeholder="last title" ><br>

    <label>linkedin:</label><br>
    <input type="text" id="linkedin" name="linkedin" placeholder="linkedin " ><br>

    <label>github:</label><br>
    <input type="text" id="github" name="github" placeholder="github " ><br>

    <label>email:</label><br>
    <input type="text" id="email" name="email" placeholder="email " ><br>

    <label>avatar:</label><br>
    <input type="text" id="avatar" name="avatar" placeholder="avatar "  ><br>

    <label>video:</label><br>
    <input type="text" id="video" name="video" placeholder="video " ><br>

    <label>quote:</label><br>
    <input type="text" id="quote" name="quote" placeholder="quote "><br>

    <label>quote author:</label><br>
    <input type="text" id="quote-author" name="quote-author" placeholder="quote author " ><br>

    <label>preferred language:</label><br>
    <!-- <input type="text" id="preferred-language" name="preferred-language" placeholder="preferred language " required><br>-->
    <select name="preferred-language">
        <option value="be">be</option>
        <option value="de">de</option>
        <option value="en">en</option>
        <option value="fr">fr</option>
        <option value="ru">ru</option>
    </select>
    <br/>
    <br>
    <button value="Submit" onclick="" name="confirmChange"> Confirm Change </button>
</form>
<br/><br/>
<form method="get">

    <button value="Submit" onclick="" name="confirmChange"> Change Password </button>
</form>

</body>
</html>