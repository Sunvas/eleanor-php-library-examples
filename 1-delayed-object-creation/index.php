<?php
namespace WhatEverYouWant;
use Eleanor\Classes\Output, Eleanor\Assign;

include './library/core.php';

/** Just a container to make variable $Db like superglobal */
class Core extends \Eleanor\Library
{
	/** @var null|Assign|\MySQLi */
	public static null|Assign|\MySQLi $Db;
}

//Delayed object creation
Assign::For(Core::$Db,fn()=>new \MySQLi('localhost','user','password','database'));

Output::SendHeaders(Output::TEXT,200,0);

echo Core::$Db::class,PHP_EOL,//Outputs Eleanor\Assign
	Core::$Db->server_version,PHP_EOL,//Outputs version on MySQL server
	Core::$Db::class,PHP_EOL;//Outputs mysqli