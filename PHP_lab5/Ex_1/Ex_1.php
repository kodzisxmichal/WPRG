<html>
<head>
    <title>Ex5_1</title>
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

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['output'])) {
        $filePath=$_POST['inputFile'];
        reverseFile($filePath);
    }
}

function reverseFile($filePath){
    if($filePath!=NULL) {
        $openedFile = fopen($filePath, 'r+');
        echo $filePath;
        if(!$openedFile) {
            echo "nie mozna wczytac pliku";

        }
        else {
            $file = file($filePath);
            $fileLength = count($file)-1;

            for ($i = 0; $i < ($fileLength+1) / 2; $i++) {
                $var = $file[$i];
                $file[$i] = $file[$fileLength - $i];
                $file[$fileLength - $i] = $var;
            }

            for ($i = 0; $i < $fileLength + 1; $i++) {
                echo $file[$i];
            }

            file_put_contents($filePath,$file);

            fclose($openedFile);
        }
    }

}


?>

</body>
</html>

