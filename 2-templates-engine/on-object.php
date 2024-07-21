<?php
namespace WhatEverYouWant;
use Eleanor\Classes\Output;

include './library/core.php';

$T=new \Eleanor\Classes\Template('./templates/object.php');

$content=$T->head('Head title')
	->header('Header title')
	->main('<p>Main content</p>')
	->footer('Footer content')
	->foot();

Output::SendHeaders(Output::HTML,200,0);
echo$content;