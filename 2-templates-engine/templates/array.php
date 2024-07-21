<?php
return[
	'head'=>fn(string$title)=><<<HTML
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{$title} :: Array template demo</title>
</head>
HTML,

	'header2'=>fn(string$title)=><<<HTML
<body>
	<header>
		<h1>{$title} - Array template demo</h1>
	</header>
HTML,

	'main'=>fn(string$content)=><<<HTML
<main>{$content}</main>
HTML,

	'footer'=>fn(string$content)=><<<HTML
<footer>{$content}</footer>
HTML,

	'foot'=><<<'HTML'
</body>
</html>
HTML
];