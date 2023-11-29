{extends file="main.tpl"}

{block name=content}

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

{/block}