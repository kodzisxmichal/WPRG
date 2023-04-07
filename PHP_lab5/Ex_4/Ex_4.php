<html>
<head>
    <title>Ex5_2</title>
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

$allowed_ips_file = 'ip.txt';
$allowed_ips = file($allowed_ips_file, FILE_IGNORE_NEW_LINES);

if (in_array($_SERVER['REMOTE_ADDR'], $allowed_ips)) {
    include 'specialPage.php';
} else {
    echo "normalna strona";
}




?>

</body>
</html>
