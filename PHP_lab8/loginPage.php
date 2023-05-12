<?php
session_start();
?>
<html>
<head>
    <title>Login page</title>
    <style>
        body{
            background-color: #393E46;
            color: #F7F7F7;
        }
    </style>
</head>
<body>

<form action="" method="post">
    Login <input type="text" placeholder="Login" name="login" required/><br>
    Password <input type="text" placeholder="Password" name="password" /><br>
    <input type="submit" name="log_in" value="Zaloguj">
</form>

<?php

require "Utillity\\LoginSystem.php";
if(isset($_POST['log_in'])){
    loginAccountv2($_POST['login'],$_POST['password']);
    if(isset($_SESSION['logged']) && $_SESSION['logged']){
        echo "Logged";
        header("location: mainPage.php");
    }
    else{
        echo "błedny login lub hasło";
    }
}

?>

</body>
</html>