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
        <input name="path" placeholder="path"><br>
        <input name="dirName" placeholder="dictonary name"><br>
        <select id="option" name="option">
            <option value="1">Read</option>
            <option value="2">Delete</option>
            <option value="3">Create</option>
        </select><br><br>
        <input name="userOutput" type="submit" value="Potwierdź"/>
    </fieldset>
</form>


<?php

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['userOutput'])) {
        idk($_GET['path'],$_GET['dirName'],$_GET['option']);
    }

}

function idk($path,$dirName,$option){
    switch ($option){
        case 2:
            delete($path,$dirName);
            break;
        case 3:
            create($path,$dirName);
            break;
        default:
            read($path,$dirName);
            break;

    }
}

function read($path,$dirname){
    $dir = "$path\\$dirname";

    if (is_dir($dir)){
        if ($dh = opendir($dir)){
            while (($file = readdir($dh)) !== false){
                if($file!='..'&&$file!='.')
                    echo "filename:" . $file . "<br>";
            }
            closedir($dh);
        }
    }
}

function create($path,$dirname){
    $dir = "$path\\$dirname";

    if(!mkdir($dir)) {
        echo ("$dir arleady exist");
    }

}

function delete($path,$dirname){
    $dir = "$path\\$dirname";

    if(!rmdir($dir)) {
        echo ("Could not remove $dir");
    }
}

?>

</body>
</html>
