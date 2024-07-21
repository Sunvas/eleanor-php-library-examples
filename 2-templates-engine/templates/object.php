<?php
return new class {
	function head(string$title):string
	{
		return<<<HTML
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{$title} :: Object template demo</title>
</head>
HTML;
	}

	function header(string$title):string
	{
		return<<<HTML
<body>
	<header>
		<h1>{$title} - Object template demo</h1>
	</header>
HTML;
	}

	function main(string$content):string
	{
		return<<<HTML
<main>{$content}</main>
HTML;
	}

	function footer(string$content):string
	{
		return<<<HTML
<footer>{$content}</footer>
HTML;
	}

	function foot():string
	{
		return<<<'HTML'
</body>
</html>
HTML;
	}
};