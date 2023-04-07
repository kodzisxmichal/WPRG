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

<form action="" method="post">
    <fieldset>
        <br>
        <input name="inputFile" type="file">

        <input name="output" type="submit" value="Potwierdź"/>
    </fieldset>
</form>


<?php

visitorsCounter();

function visitorsCounter(){
    $openedFile = fopen("licznik.txt", 'r+');
    $file = file("licznik.txt");
    $counter = file_get_contents('licznik.txt');
    $counter++;
    file_put_contents("licznik.txt",$counter);
    fclose($openedFile);
}

?>

</body>
</html>

