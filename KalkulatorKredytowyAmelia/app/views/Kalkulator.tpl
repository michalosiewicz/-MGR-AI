<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kalkulator Kredytowy</title>
	
</head>
<body>

	<div class="header">
		<h1>{$dane->tytul}</h1>
		<h2>{$dane->opis}</h2>
	</div>

	<form action="{$conf->action_root}oblicz" method="post">

			<label for="loanAmount">Kwota kredytu: </label>
			<input id="loanAmount" type="text" name="kredyt" value="{$dane->kredyt}"><br /><br />
			<label for="interest">Oprocentowanie roczne: </label>
			<input id="interest" type="text" name="oprocentowanie" value="{$dane->oprocentowanie}"><br /><br />
			<label for="repaymentPeriod">Okres kredytowania w latach: </label>
			<input id="repaymentPeriod" type="text" name="okres_kredytowania" value="{$dane->okres_kredytowania}"><br /><br />
			<button type="submit">Oblicz</button>
		
	</form>

	{if $msgs->isMessage()}
	<ul>
  		{foreach $msgs->getMessages() as $msg}
  		{$msg->text}<br />
  		{/foreach}
	</ul>
	{/if}

</body>

</html>