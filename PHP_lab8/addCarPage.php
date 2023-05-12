<?php
session_start();
require "Utillity\\PageManagament.php";
?>

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
<?php
pageBar();

require "Utillity\\DataBaseManagament.php";
$db_connection = connectToDB();



?>


</body>
</html>