<?php

function connectToDB(){
    $db_connection = mysqli_connect("localhost", "root", "", "mojaBaza");
    if (!$db_connection) {
        echo "<h2>Błąd połączenia z bazą!</h2>";
    } else {
        echo "dziala";
        return $db_connection;
    }

    function mainPage($db_connection){
        $query = 'SELECT * FROM samochody';
        $result = mysqli_query($db_connection,$query);

        while ($row = mysqli_fetch_row($result)){
            echo "<tr>";
            echo "<td>$row[0]</td>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "<td>$row[4]</td>";
            echo "</tr>";

        }
    }
}
