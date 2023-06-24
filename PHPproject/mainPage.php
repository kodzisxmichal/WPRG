<?php
session_start();
require_once('Scripts/Classes/User.php');
require_once('Scripts/Classes/Item.php');
require_once('Scripts/Classes/pageManager.php');

if(!isset($_SESSION['user'])) {
    $_SESSION['user'] = serialize(User::getInstance());
}
$user = unserialize($_SESSION['user']);

if(isset($_GET['button4'])){
    header('Location: loginPage.php');
}

pageManager::buttonMenu();

if(isset($_GET['button5'])){
    $user->logout();
    $_SESSION['user'] = serialize($user);
}

if (isset($_COOKIE['last_search'])) {
    $lastSearch = $_COOKIE['last_search'];
    $_SESSION['lastsearch']=$lastSearch;
} else {
    $_SESSION['lastsearch']="Type here";
}

if(isset($_GET['buttonCart'])){
    if(!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    array_push($_SESSION['cart'], $_GET['buttonCart']);
    var_dump($_SESSION["cart"]);
}

?>


<html>
<head>
    <title>Strona Główna</title>
    <link rel="stylesheet" href="StyleSheets/bar.css">
    <link rel="stylesheet" href="StyleSheets/ofertsStyle.css">
    <link rel="stylesheet" href="StyleSheets/mainStyle.css">
    <link rel="stylesheet" href="Icons/css/fontello.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            transition: background-color 0.5s ease;
        }
    </style>



    <script>
        // document.getElementById("changeColorBtn").addEventListener("click", function() {
        //     document.body.style.backgroundColor = "white";
        // });
        function changecolor() {
            if(document.body.style.backgroundColor == "white"){
                document.body.style.backgroundColor = "#393939";
            }
            else document.body.style.backgroundColor = "white";
        }
    </script>
</head>
<body>
<div id="container">

    <div id="logo">
        <h1>PHP Project</h1>
    </div>

    <div id="menu">
        <div id="category-menu">
            <form action="" method="get">
                <button class="menu-button" type='submit' name='button1' method='get'>Strona główna</button>
                <button class="menu-button" type='submit' name='button2' method='get'>Kategorie</button>
                <input class="menu-button" id="searchbar" name="searchbar" type="text" placeholder="<?php echo $_SESSION['lastsearch'] ?>" method='get'>
                <button class="menu-button" id="searchbar-submit" type="submit" name="button3" method='get'><i class="icon-search"></i></button>
                <?php if(!$user->isLogged()){ ?>
                    <button class="menu-button" type='submit' name='button4' method='get'>Zaloguj</button>
                <?php }else{ ?>
                <button class="menu-button" type='submit' name='button5' method='get'>Wyloguj</button>

                <?php
                echo $user->getUsername();
                }
                ?>
            </form>
            <button id="changeColorBtn" class="menu-button" onclick="changecolor();">Change Background Color</button>
        </div>
        <?php
        if($_SESSION['categorybar']==true){
            echo '<form action="" method="get">';
            echo '<div id="category-menu">';
            echo '<button class="menu-button" type="submit" name="category1" method="get"">Nasiona</button>';
            echo '<button class="menu-button" type="submit" name="category2" method="get">Narzędzia</button>';
            echo '<button class="menu-button" type="submit" name="category3" method="get"">Inne</button>';
            echo '</div>';
            echo '</form>';
        }

        if(isset($_GET['button3'])){
            $_SESSION['search']=$_GET['searchbar'];
            $searchTerm = $_GET['searchbar'];

            setcookie('last_search', $searchTerm, time() + 3600, '/');
        }

        ?>
    </div>

    <div id="content">
        <?php echo pageManager::generateSaleTable($user);?>
    </div>

    <div id="footer">
        <h5><?php echo pageManager::generateFooter() ?><h5>
    </div>

</div>


</body>
</html>