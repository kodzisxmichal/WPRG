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

<form action="" method="post">
    <fieldset>
        <legend>Pesel Decoder</legend>
        <br>
        <input name="input1" type="number" minlength="11" maxlength="11"/>
        <input name="output" type="submit" value="Oblicz"/>
    </fieldset>
</form>


<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $month = array(
        '1' => 'Stycznia',
        '2' => 'Lutego',
        '3' => 'Marca',
        '4'  => 'Kwietnia',
        '5' => 'Maja',
        '6' => 'Czerwieca',
        '7' => 'Lipieca',
        '8'  => 'Sierpienia',
        '9' => 'Wrzesnia',
        '10' => 'Października',
        '11' => 'Listopada',
        '12'  => 'Grudnia'

    );

    $peselArr = str_split($_POST['input1']);
        $weight=9;
        $result=0;
        $tmp=0;

        for($i=0;$i<10;$i++){
            $weight+=2;
            $weight%=10;
            if($weight==5)
                $weight=7;
            $tmp = $peselArr[$i];
            if($tmp*$weight<=10)
                $result += $tmp * $weight;
            else
                $result += (($tmp * $weight) % 10);
        }

        if($result>=10)
            $result%=10;
        if(10-$result!=$peselArr[10])
            echo "Błędny pesel";
        else{
            echo $peselArr[4],$peselArr[5]," ",$month[$peselArr[2]+$peselArr[3]]," 19",$peselArr[0],$peselArr[1]," roku";
            if($peselArr[9]%2==0)
                echo "\njesteś kobietą";
            else echo "\njesteś mężczyzną";

        }
}
?>

</body>
</html>

