<?php
namespace WhatEverYouWant;
use Eleanor\Classes\Output;

include './library/core.php';

$T=new \Eleanor\Classes\Template([
	'./templates/object.php',
	'./templates/array.php',

	['nl'=>PHP_EOL.PHP_EOL]//Direct
]);

$content=$T->head('Head title')->nl()
	->header2('Header title')//From array template
	->nl()->main('<p>Main content</p>')->nl()
	->footer('Footer content')->nl()
	->foot();

Output::SendHeaders(Output::HTML,200,0);
echo$content;