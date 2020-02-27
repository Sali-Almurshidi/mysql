
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<form method="post">

    <label>first name:</label><br>
    <input type="text" id="first-name" name="first-name" placeholder="first name" required><br>

    <label>last name:</label><br>
    <input type="text" id="last-name" name="last-name" placeholder="last title" required><br>

    <label>user name:</label><br>
    <input type="text" id="user-name" name="user-name" placeholder="user title" required><br>

    <label>linkedin:</label><br>
    <input type="text" id="linkedin" name="linkedin" placeholder="linkedin " required><br>

    <label>github:</label><br>
    <input type="text" id="github" name="github" placeholder="github " required><br>

    <label>email:</label><br>
    <input type="text" id="email" name="email" placeholder="email " required><br>

    <label>avatar:</label><br>
    <input type="text" id="avatar" name="avatar" placeholder="avatar "  required><br>

    <label>video:</label><br>
    <input type="text" id="video" name="video" placeholder="video " required><br>

    <label>quote:</label><br>
    <input type="text" id="quote" name="quote" placeholder="quote "required><br>

    <label>quote author:</label><br>
    <input type="text" id="quote-author" name="quote-author" placeholder="quote author " required><br>

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
    <label>Password:</label><br>
    <input type="password" id="password" name="password" placeholder="Enter your password" required><br>

    <label>Confirm Password:</label><br>
    <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required><br>

    <br>
    <button value="Submit" name="add"> register </button>

</form>
<br/><br/>
<form method="get">
    <button value="Submit" onclick="" name="showAllData"> show all data</button>
    <button value="Submit" onclick="" name="loginPage"> Login</button>
</form>

</body>
</html>