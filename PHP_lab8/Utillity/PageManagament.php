<?php

function changePage()
{
        if (isset($_GET['goToIndex1'])) {
            header("location: mainPage.php");
        } else if (isset($_GET['goToIndex2'])) {
            header("location: allCarsPage.php");
        } else if (isset($_GET['goToIndex3'])) {
            header("location: addCarPage.php");
        } else if (isset($_GET['goToIndex4'])) {
            header("location: myCarsPage.php");
        } else if (isset($_GET['goToIndex5'])) {
            header("location: loginPage.php");
        }
}

function pageBar(){

    echo '<form action="" method="get">
    <button type="submit" name="goToIndex1"> Strona Główna </button>
    <button type="submit" name="goToIndex2"> Wszystkie Samochody </button>
    <button type="submit" name="goToIndex3"> Dodaj Samochod </button>
    <button type="submit" name="goToIndex4"> Moje Samochody </button>';

    if(isset($_SESSION['logged']) && $_SESSION['logged']) {
        echo "zalogowano jako ";
        echo $_SESSION['login'];
    }
    else
        echo '<button type="submit" name="goToIndex5"> Zaloguj </button>';

    echo '</form>';

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        changePage();
    }
}