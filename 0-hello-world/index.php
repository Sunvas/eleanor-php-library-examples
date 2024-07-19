<?php
namespace WhatEverYouWant;
use Eleanor\Classes\Output;

include './library/core.php';

//Uncomment next line to see the error
//CallMissedFunction();

if(isset($_GET['text']))
{
	//Plain text with success code 200 without cache
	Output::SendHeaders(Output::TEXT,200,0);
	echo'Hello, World!';
}

elseif(isset($_GET['json']))
{
	//JSON with success code 200 without cache
	Output::SendHeaders(Output::JSON,200,0);
	echo json_encode([
		'ok'=>true,
		'text'=>'Hello, world!'
	]);
}

else
{
	//HTML webpage with success code 200 without cache
	Output::SendHeaders(Output::HTML,200,0);
	echo<<<'HTML'
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hello, World! :: Eleanor PHP Library demo</title>
</head>
<body>
	<h1>Hello, world!</h1>
</body>
</html>
HTML;
}