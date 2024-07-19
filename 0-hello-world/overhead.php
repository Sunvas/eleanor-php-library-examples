<?php
namespace WhatEverYouWant;
use Eleanor\Classes\Output;

define('START',hrtime(true));

include './library/core.php';

Output::SendHeaders(Output::HTML,200,0);

$overhead=hrtime(true)-START;
$memory=memory_get_peak_usage(false);

echo<<<HTML
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Overhead :: Eleanor PHP Library demo</title>
</head>
<body>
	<h1>Overhead</h1>
	<p>It took <b>{$overhead}</b> nanoseconds and <b>{$memory}</b> bytes of memory to generate this page with Eleanor PHP Library.</p>
</body>
</html>
HTML;