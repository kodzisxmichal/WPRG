<html>
<head>
    <title>Ex5_2</title>
    <style>
        body{
            background-color: #393E46;
            color: #F7F7F7;
            font-family: Arial;
            font-size: xx-large;
        }
    </style>
</head>
<body>

<?php

$openedFile = fopen("links.txt",'r');
$file = file("links.txt");
while (!feof($openedFile)){
    $line = fgets($openedFile);
    $lineParts =  explode(";", $line);
    $url = $lineParts[0];
    $description = $lineParts[1];
    echo "<a href=$url>$description</a><br>";

}

?>

</body>
</html>
