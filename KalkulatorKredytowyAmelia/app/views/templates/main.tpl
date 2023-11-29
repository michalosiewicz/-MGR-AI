<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="{$dane->opis}">
	<title>{$dane->tytul}</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<link rel="stylesheet" href="{$conf->app_url}/css/style.css">	
</head>

<body>

<div class="header">
	<h1>{$dane->tytul}</h1>
	<h2>{$dane->opis}</h1>
</div>

<div class="content">
{block name=content} Domyślna treść zawartości .... {/block}
</div><!-- content -->

<div class="footer">
	<p>
{block name=footer} Dziękujemy za skorzystanie {/block}
	</p>
</div>

</body>
</html>