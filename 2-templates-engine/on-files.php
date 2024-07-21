<?php
namespace WhatEverYouWant;
use Eleanor\Classes\Output;

include './library/core.php';

$T=new \Eleanor\Classes\Template('./files/');

$content=$T->head(['title'=>'Head title'])
	->header(['title'=>'Header title'])
	->main(['content'=>'<p>Main content</p>'])
	->footer(['content'=>'Footer content'])
	->foot();

Output::SendHeaders(Output::HTML,200,0);
echo$content;