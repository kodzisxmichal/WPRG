<html>
<head>
    <title>Ex1</title>
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo '<ul>';
    foreach($_POST as $key => $value)
        echo "<li>$key: $value</li>";
    echo '</ul>';
}
else {
    echo <<< END
					<form action="" method="post">
						<fieldset>
							<legend>Formularz kontaktowy</legend>
							<ul>
								<li>Imię i nazwisko *<input type="text" placeholder="Twoje imię i nazwisko" name="name"/></li>
								<li>Adres e-mail *<input type="email" placeholder="Twój adres e-mail np. j.kowalski@gmail.com" name="email"/></li>
								<li>Telefon kontaktowy<input type="tel" placeholder="Dozwolone znaki: cyfry, spacje" name="tel" pattern="[0-9]{9}"/></li>
								<li>
									Wybierz temat
									<select name="topic" id="topic">
										<option value="Wykonanie strony internetowej">Wykonanie strony internetowej</option>
										<option value="Coś innego">Coś innego</option>
									</select>
								</li>
								<br>
								<li>
									Treść wiadomości *<textarea name="text" placeholder="Wypisz tutaj treść swojej wiadomości..."></textarea>
								</li>
								<br>
								<li>Preferowana forma kontaktu</li>
									<ul>
										<li><input type="checkbox" name="prefmail">E-mail</input></li>
										<li><input type="checkbox" name="preftel">Telefon</input></li>
									</ul>
								<br>
								<li>Posiadasz już stronę www?</li>
								<ul>
									<li><input type="radio" name="www"/>Tak</li>
									<li><input type="radio" name="www"/>Nie</li>
								</ul>
								<br>
								<li>Załączniki</li>
								<input type="file" name="file"/>
							</ul>
						</fieldset>
						<input name="output" type="submit" value="Wyślij formularz"/>
					</form>
				END;
}
?>
</body>
</html>