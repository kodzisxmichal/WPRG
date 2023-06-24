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
if(!isset($_COOKIE['27121'])){
?>
<form action="" method="POST">
    <fieldset>
        <br>
        <input name="name" type="text" placeholder="imię" maxlength="20">
        <input name="surrname" type="text" placeholder="nazwisko" maxlength="20">
        <input name="email" type="email" placeholder="e-mail" maxlength="50">
        <input name="answer" type="text" placeholder="odpowiedź konkursową" maxlength="255">

        <input name="userDataOutput" type="submit" value="Potwierdź"/>
    </fieldset>
</form>

<?php


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['userDataOutput'])) {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['surrname'] = $_POST['surrname'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['answer'] = $_POST['answer'];
    }

 header("Location: checkPage.php");
    }
}
else {
    echo "Formularz został wysłany";
    $db_connection = connectToDB();

    $name=$_SESSION['name'];
    $surrname=$_SESSION['surrname'];
    $email=$_SESSION['email'];
    $answer=$_SESSION['answer'];

    $query = "INSERT INTO zgloszenia(imie,nazwisko,adres_email,odpowiedz) VALUES ('$name','$surrname','$email','$answer')";
    $result = mysqli_query($db_connection, $query);
}


function connectToDB()
{
    $db_connection = mysqli_connect("localhost", "root", "", "konkurs");
    if (!$db_connection) {
        echo "<h2>Błąd połączenia z bazą!</h2>";
    } else {
        return $db_connection;
    }
}

?>

</body>
</html>

