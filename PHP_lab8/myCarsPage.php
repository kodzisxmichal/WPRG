<?php
session_start();
require "Utillity\\PageManagament.php";
?>
<html>
<head>
    <title>Moje Samochody</title>
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

require "Utillity\\DataBaseManagament.php";
$db_connection = connectToDB();

if(isset($_SESSION['user_id'])&&isset($_SESSION['role_id'])){
    $tmp = $_SESSION['user_id'];

    if($_SESSION['role_id']==2)
        $query = 'SELECT * FROM samochody ORDER BY rok DESC';
    else
        $query = 'SELECT * FROM samochody WHERE id_uzytkownik="'.$tmp.'" ORDER BY rok DESC';
}
else $query = 'SELECT * FROM samochody WHERE id_uzytkownik="-1" ORDER BY rok DESC';

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