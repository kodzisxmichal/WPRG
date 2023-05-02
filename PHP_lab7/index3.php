<html>
<head>
    <title>Dodaj Samochod</title>
    <style>
        body{
            background-color: #393E46;
            color: #F7F7F7;
        }
    </style>
</head>
<body>
<form action="" method="get">
    <button type="submit" name="goToIndex1"> Strona Główna </button>
    <button type="submit" name="goToIndex2"> Wszystkie Samochody </button>
    <button type="submit" name="goToIndex3"> Dodaj Samochod </button>
</form>

<form action="" method="post">
    Marka *<input type="text" placeholder="Marka" name="brand" required/><br>
    Model *<input type="text" placeholder="Model" name="model" required/><br>
    Cena *<input type="number" placeholder="Cena" name="price" required/><br>
    Rok *<input type="number" placeholder="Rok" name="year" required/><br>
    Opis <input type="text" placeholder="Opis" name="description"/><br>
    <input type="submit" name="addCar" value="Dodaj">
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    require "PageManagament.php";
    changePage();
}
require "DataBaseManagament.php";
$db_connection = connectToDB();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['addCar'])){
        $brand = $_POST['brand'];$model = $_POST['model'];$price = $_POST['price'];
        $year = $_POST['year'];$description = $_POST['description'];
        $query = "INSERT INTO samochody(marka,model,cena,rok,opis) VALUES ('$brand','$model','$price','$year','$description')";
        $result = mysqli_query($db_connection,$query);
    }
}

?>


</body>
</html>