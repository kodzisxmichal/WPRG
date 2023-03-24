<html>
<head>
    <title>Ex5</title>
    <style>
        body{
            background-color: #393E46;
            color: #F7F7F7;
            font-family: Arial;
        }
    </style>
</head>
<body>

<?php
    $password1="admin";
    $login1="admin";

if($_SERVER['REQUEST_METHOD'] == 'POST'&&($_POST['login']==$login1&&$_POST['password']==$password1)) {
        echo "Zalogowano";
    }
else{
    echo<<<END
    <form action="" method="post">
        <fieldset>
            <legend>Logowanie</legend>
            <br>
            Login: <input name="login" required/><br><br>
            Hasło: <input name="password" required/><br><br>
            <input name="output" type="submit" value="Zaloguj"/>
        </fieldset>
    </form>

END;

    if($_SERVER['REQUEST_METHOD'] == 'POST'&&($_POST['login']!=$login1||$_POST['password']!=$password1))
        echo "błędny login lub hasło";
}
?>

</body>
</html>

