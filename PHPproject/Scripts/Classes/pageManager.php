<?php
class pageManager
{

    public static function generateSaleTable($user) {
        require_once('Scripts/Classes/Item.php');
        require_once('Scripts/Classes/User.php');

        if(isset($_SESSION['category']) && $_SESSION['category']!="wszystko") {
            $query = "SELECT image_path,title,price,amount,description FROM items WHERE category=" . '"' . $_SESSION['category'] . '"';
        }else if(isset($_GET['searchbar']) && $_GET['searchbar']!=NULL){
            $query = "SELECT image_path,title,price,amount,description FROM items WHERE title LIKE '%{$_GET['searchbar']}%'";
        }
        else {$query = "SELECT image_path,title,price,amount,description FROM items";}
        $dataArray = $user->question($query);

        $items = array();
        while ($row = mysqli_fetch_row($dataArray)){
            array_push($items, new Item($row[0], $row[1], $row[2], $row[3], $row[4]));
        }


        $tableHtml = '<div class="sale-table">';

        // Generate table rows
        foreach ($items as $item) {
            $tableHtml .= '<div class="table-row">';
            $tableHtml .= '<div class="table-cell"><img src="' . $item->image_path . '" height="100px" width="100px" alt="' . $item->title . '"></div>';
            $tableHtml .= '<div class="table-cell">' . $item->title . '</div>';
            $tableHtml .= '<div class="table-cell">' . $item->price . " zł" . '</div>';
            $tableHtml .= '<div class="table-cell">' . $item->amount . '</div>';
            $tableHtml .= '<div class="table-cell">' . $item->description . '</div>';
            $tableHtml .= "<div class=\"table-cell\"><form><button class=\"add-to-cart-btn\" name=\"buttonCart\" value=\"{$item->title}\">Dodaj do koszyka</button></form></div>";
            $tableHtml .= '</div>';
        }

        $tableHtml .= '</div>';

        return $tableHtml;
    }

    public static function generateFooter() {
        $phoneNumber = "123-456-789";
        $address = "Targ Drzewny 9, Gdańsk, Polska";

        $footerHtml = '<footer>';
        $footerHtml .= '<p>Number telefonu: ' . $phoneNumber . '</p>';
        $footerHtml .= '<p>Adres: ' . $address . '</p>';
        $footerHtml .= '</footer>';

        return $footerHtml;
    }

    public static function buttonMenu(){
        if(isset($_GET['button1'])){
            $_SESSION['category'] = "wszystko";
            $_SESSION['search'] = NULL;
        }

        if(isset($_GET['button2'])){
            if($_SESSION['categorybar']==false)
                $_SESSION['categorybar']=true;
            else{
                $_SESSION['categorybar']=false;
            }
        }

        if(isset($_GET['category1'])){
            $_SESSION['category'] = "nasiona";
        }
        if(isset($_GET['category2'])){
            $_SESSION['category'] = "narzedzia";
        }
        if(isset($_GET['category3'])){
            $_SESSION['category'] = "inne";
        }
    }
}