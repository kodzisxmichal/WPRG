<html>
<head>
    <title>Ex4</title>
    <style>
        body{
            background-color: #393E46;
            color: #F7F7F7;
            font-family: Arial;
        }
    </style>
</head>
<body>

<form action="" method="get">
    <fieldset>
        <br>
        <input name="number" type="number" placeholder="number" max="150">

        <input name="userNumberOutput" type="submit" value="Potwierdź"/>
    </fieldset>
</form>


<?php

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['userNumberOutput'])) {

        $timeStart=microtime(true);
        echo silniaRecursive($_GET['number']),"\n";
        $timeStop=microtime(true);
        $recursiveTime = round($timeStop-$timeStart,8);

        $timeStart=microtime(true);
        echo silniaNormal($_GET['number'],"\n");
        $timeStop=microtime(true);
        $normalTime = round($timeStop-$timeStart,8);

        echo "\nR: ",$recursiveTime,"   \nN: ",$normalTime;
    }

}

function silniaRecursive($liczba)
{
    if($liczba < 2)
        return 1;
    else
        return $liczba*silniaRecursive($liczba-1);
}
function silniaNormal($n){
    $silnia=0;
    for($i=$n;$i>1;$i--)
		$silnia*=$i;

    return $silnia;
}

?>

</body>
</html>

