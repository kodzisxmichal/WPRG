<?php
session_start();

$cookie_name="visits";
$value = 1;

if (!isset($_SESSION['visited'])) {
    $_SESSION['visited'] = true;

    if(isset($_COOKIE[$cookie_name])) {
        $value = $_COOKIE[$cookie_name];
        $value++;
    }
    setcookie($cookie_name, $value, time() + (3600), "/");
}

?>
<html>
<head>
    <title>Ex6_2</title>
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

echo $_COOKIE[$cookie_name];

?>

</body>
</html>