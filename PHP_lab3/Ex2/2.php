<html>
<head>
    <title>Ex2</title>
    <style>
        body{
            background-color: #393E46;
            color: #F7F7F7;
            font-family: Arial;
        }
    </style>
</head>
<body>
    <h1>Kalkulator</h1>
    <form action="" method="post">
        <fieldset>
            <legend>Prosty Kalkulator</legend>
            
            <input name="input1" type="number"/>
            <select name="operator" id="operator">
				<option value="+">Dodawanie</option>
				<option value="-">Odejmowanie</option>
				<option value="*">Mnożenie</option>
				<option value="/">Dzielenie</option>
			</select>
			<input name="input2" type="number"/>
			<br><br>
			<input name="outputSimple" type="submit" value="Oblicz"/>
        </fieldset>
    </form>

    <form action="" method="post">
        <fieldset>
            <legend>Zaawansowany Kalkulator</legend>

            <input name="input1" type="number"/>
            <select name="operator" id="operator">
                <option value="cos">Cos</option>
                <option value="sin">Sin</option>
                <option value="tan">Tan</option>
                <option value="bindec">Binarne na dziesiętne</option>
                <option value="decbin">Dziesiętne na binarne</option>
                <option value="dechex">Dziesiętne na szestnastkowe</option>
                <option value="hexdec">Szestnastkowe na dziesiętne</option>
                <option value="deg2rad">Stopnie na radiany</option>
                <option value="rad2deg">Radiany na stopnie</option>
            </select>
            <br><br>
            <input name="outputAdvanced" type="submit" value="Oblicz"/>
        </fieldset>
    </form>

<?php
    if(isset($_POST['outputSimple'])){
        $number1=$_POST['input1'];
        $number2=$_POST['input2'];
        $operator=$_POST['operator'];
        $result=NULL;
        switch ($operator){
            case "+":
                echo $number1+$number2;
                break;
            case "-":
                echo $number1-$number2;
                break;
            case "*":
                echo $number1*$number2;
                break;
            case "/":
                echo $number1/$number2;
                break;
        }
    }
    elseif(isset($_POST['outputAdvanced'])){
        $number1=$_POST['input1'];
        $operator=$_POST['operator'];
        switch ($operator){
            case "cos":
                echo cos($number1);
                break;
            case "sin":
                echo sin($number1);
                break;
            case "tan":
                echo tan($number1);
                break;
            case "bindec":
                echo bindec($number1);
                break;
            case "decbin":
                echo decbin($number1);
                break;
            case "dechex":
                echo dechex($number1);
                break;
            case "hexdec":
                echo hexdec($number1);
                break;
            case "deg2rad":
                echo deg2rad($number1);
                break;
            case "rad2def":
                echo rad2deg($number1);
                break;
        }
    }

?>
</body>
</html>