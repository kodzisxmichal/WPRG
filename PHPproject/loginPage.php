<?php
require('Scripts/Classes/User.php');
session_start();
$_SESSION['user'] = serialize(User::getInstance());

?>
<html>
<head>
    <title>Strona logowania</title>
    <link rel="stylesheet" href="StyleSheets/bar.css">
    <link rel="stylesheet" href="StyleSheets/mainStyle.css">
    <link rel="stylesheet" href="StyleSheets/login.css">
    <link rel="stylesheet" href="Icons/css/fontello.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">

</head>
<body>
<div id="container">

    <div id="logo">
        <h1>PHP Project</h1>
    </div>

    <div id="content">
        <form action="" method="POST">
            <div class="login-table">
                <input id="username-input" class="login-buttons" type="text" placeholder="Nazwa użytkownika" name="username-input">
            </div>
            <div class="login-table">
                <input id="password-input" class="login-buttons" type="password" placeholder="Hasło" name="password-input">
                <br>
                <button id="password-reset" type='submit' name='reset'>Zapomniałem hasła</button>
            </div>
            <div class="login-table">
                <button id="login-button" class="login-buttons" type='submit' name='login-button'>Zaloguj</button>
            </div>
        </form>
    </div>

    <div id="footer">
        <h3>Footer</h3>
    </div>

</div>

<?php

    $user = unserialize($_SESSION['user']);

    if(isset($_POST['login-button'])){
        $user->login($_POST['username-input'],$_POST['password-input']);

        if($user->isLogged()){
            $_SESSION['user'] = serialize($user);
            header("Location: mainPage.php");
        }
    }
?>

</body>
</html>