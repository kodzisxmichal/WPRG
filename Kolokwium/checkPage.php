<?php
session_start();
?>
<html>
<head>
    <title>Kolokwium</title>
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
    echo $_SESSION['name']."<br>";
    echo $_SESSION['surrname']."<br>";
    echo $_SESSION['email']."<br>";
    echo $_SESSION['answer']."<br>";
    echo "<br> Jeżeli dane są prawidłowe nacisnij zatwierdź";

?>

<form action="" method="POST">
        <input name="submit" type="submit" value="zatwierdź"/>
</form>

<?php
setcookie("27121", "02/06/2023", time() + (60*60*24*7));
header("Location: index.php");
?>

</body>
</html>


