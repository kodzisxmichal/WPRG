<html>
<head>
    <title>Strona Główna</title>
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

<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    require "PageManagament.php";
    changePage();
}

require "DataBaseManagament.php";
$db_connection = connectToDB();

$query = 'SELECT * FROM samochody ORDER BY cena ASC LIMIT 5';
$result = mysqli_query($db_connection,$query);

echo '<table>';
echo "<tr>";
echo "<td>ID</td>";
echo "<td>Marka</td>";
echo "<td>Model</td>";
echo "<td>Cena</td>";
echo "<td>Rok</td>";
echo "</tr>";

while ($row = mysqli_fetch_row($result)){
    echo "<tr>";
    echo "<td>$row[0]</td>";
    echo "<td>$row[1]</td>";
    echo "<td>$row[2]</td>";
    echo "<td>$row[3]</td>";
    echo "<td>$row[4]</td>";
    echo "</tr>";

}
echo '</table>';

?>


</body>
</html>