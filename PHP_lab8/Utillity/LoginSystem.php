<?php

function loginAccountv2($login,$password){
    require "Utillity\\DataBaseManagament.php";

    $db_connection=connectToDB();
    $query = 'SELECT * FROM uzytkownik HAVING login ="'.$login.'"';
    $result = mysqli_query($db_connection,$query);

    $row = mysqli_fetch_row($result);
    if($password==$row[2]){
        $_SESSION['logged'] = true;
        $_SESSION['login'] = $row[1];
        $_SESSION['user_id'] = $row[0];
        $_SESSION['role_id'] = $row[3];
    }

}


