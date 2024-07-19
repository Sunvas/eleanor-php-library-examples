<?php
namespace WhatEverYouWant;
use Eleanor\Classes\Output;

include './library/core.php';

$date=date('Y-m-d H:i:s');

//3600 is number of seconds for unconditional cache on user's browser
Output::SendHeaders(Output::HTML,200,3600);
echo<<<HTML
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Uncoditional cache :: Eleanor PHP Library demo</title>
</head>
<body>
	<h1>Uncoditional cache</h1>
	<p>This page will be cached on your browser for 1 hour. Current date on server: {$date}</p>
</body>
</html>
HTML;