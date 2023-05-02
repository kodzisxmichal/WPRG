<?php

function changePage()
{
        if (isset($_GET['goToIndex1'])) {
            header("location: index1.php");
        } else if (isset($_GET['goToIndex2'])) {
            header("location: index2.php");
        } else if (isset($_GET['goToIndex3'])) {
            header("location: index3.php");
        }
}