<?php

function connectToDB()
{
    $db_connection = mysqli_connect("localhost", "root", "", "mojaBaza");
    if (!$db_connection) {
        echo "<h2>Błąd połączenia z bazą!</h2>";
    } else {
        echo "dziala";
        return $db_connection;
    }
}

