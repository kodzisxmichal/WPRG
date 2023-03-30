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
        <input name="birthDay" type="number" placeholder="Dzień" maxlength="2">

        <select id="birthMonth" name="birthMonth">
            <option value="1">Styczeń</option>
            <option value="2">Luty</option>
            <option value="3">Marzec</option>
            <option value="4">Kwiecień</option>
            <option value="5">Maj</option>
            <option value="6">Czerwiec</option>
            <option value="7">Lipiec</option>
            <option value="8">Sierpień</option>
            <option value="9">Wrzesień</option>
            <option value="10">Październik</option>
            <option value="11">Listopad</option>
            <option value="12">Grudzień</option>
        </select>

        <input name="birthYear" type="number" placeholder="Rok" maxlength="4">

        <input name="userDataOutput" type="submit" value="Potwierdź"/>
    </fieldset>
</form>


<?php

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['userDataOutput'])) {
        weekDay();
        completedYears();
        birthdayDays();
    }
}

function weekDay()
{
    $birthDay = $_GET['birthDay'];
    $birthMonth = $_GET['birthMonth'];
    $birthYear = $_GET['birthYear'];

    $birthDate = mktime(0, 0, 0, $birthMonth, $birthDay, $birthYear);

    echo "\n",date("l", $birthDate);
}

function completedYears(){
    $birthYear = $_GET['birthYear'];

    $Date=getdate();

    echo "\nMasz ukończone ", $Date['year']-$birthYear," lat";
}

function birthdayDays(){

    $birthDay = $_GET['birthDay'];
    $birthMonth = $_GET['birthMonth'];
    $birthYear = $_GET['birthYear'];

    $Date=getdate();

    $birthdayDate = mktime(0, 0, 0, $birthMonth, $birthDay);
    $actualDate = mktime(0,0,0,$Date['mon'],$Date['mday']);

    if($birthdayDate>$actualDate)
        $daysToBirthday=365-abs(ceil(($birthdayDate-$actualDate)/86400));
    else
        $daysToBirthday=abs(ceil(($actualDate-$birthdayDate)/86400));


    echo "\nDo urodzin następnych urodzin zostało ci ", 365-$daysToBirthday, " dni";
}

?>

</body>
</html>

