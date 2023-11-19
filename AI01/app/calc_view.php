<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="loanAmount">Kwota kredytu: </label>
	<input id="loanAmount" type="text" name="loanAmount" value="<?php isset($loanAmount)?print($loanAmount):''; ?>" /><br />
	<label for="interest">Oprocentowanie roczne: </label>
	<input id="interest" type="text" name="interest" value="<?php isset($interest)?print($interest):''; ?>" /><br />
	<label for="repaymentPeriod">Okres kredytowania w latach: </label>
	<input id="repaymentPeriod" type="text" name="repaymentPeriod" value="<?php isset($repaymentPeriod)?print($repaymentPeriod):''; ?>" /><br />
	<input type="submit" value="Oblicz" />
</form>

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Wynik: '.$result; ?>
</div>
<?php } ?>

</body>
</html>