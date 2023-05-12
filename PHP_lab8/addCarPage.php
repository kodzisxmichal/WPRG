<?php
session_start();
require "Utillity\\PageManagament.php";
?>

<html>
<head>
    <title>Dodaj samochod</title>
    <style>
        body{
            background-color: #393E46;
            color: #F7F7F7;
        }
    </style>
</head>
<body>
<?php
pageBar();
?>

<form action="" method="post">
    Marka *<input type="text" placeholder="Marka" name="brand" required/><br>
    Model *<input type="text" placeholder="Model" name="model" required/><br>
    Cena *<input type="number" placeholder="Cena" name="price" required/><br>
    Rok *<input type="number" placeholder="Rok" name="year" required/><br>
    Opis <input type="text" placeholder="Opis" name="description"/><br>
    <input type="submit" name="addCar" value="Dodaj">
</form>

<?php

require "Utillity\\DataBaseManagament.php";
$db_connection = connectToDB();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userID=1;
    if(isset($_SESSION['user_id']))
        $userID = $_SESSION['user_id'];
    if(isset($_POST['addCar'])){
        $brand = $_POST['brand'];$model = $_POST['model'];$price = $_POST['price'];
        $year = $_POST['year'];$description = $_POST['description'];
        $query = "INSERT INTO samochody(marka,model,cena,rok,opis,id_uzytkownik) VALUES ('$brand','$model','$price','$year','$description',".$userID.")";
        $result = mysqli_query($db_connection,$query);
    }
}



?>


</body>
</html>