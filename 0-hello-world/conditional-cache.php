<?php
namespace WhatEverYouWant;
use Eleanor\Classes\Output;

include './library/core.php';

//The condition will be the time of the last modification.
$etag=(string)filemtime(__FILE__);

//If current $etag matches, user's cache is up to date
if(Output::ReturnCache($etag))
	return 1;

$date=date('Y-m-d H:i:s');

//Passing $etag as the condition to the user's browser
Output::SendHeaders(Output::HTML,200,$etag);
echo<<<HTML
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Conditional cache :: Eleanor PHP Library demo</title>
</head>
<body>
	<h1>Conditional cache</h1>
	<p>This page will be cached on your browser until this file is modified. Current date on server: {$date}</p>
</body>
</html>
HTML;