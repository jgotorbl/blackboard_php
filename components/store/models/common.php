<?php
if (!defined("true-access"))
{
	die("cannot access");
}
/*
* common database code
*/

if (!defined("true-access"))
{
	die("cannot access");
}

//define("SALT","word");
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASSWORD","");

function connect_to_database($database = "books_database")
{
	$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,$database);
	$error = "";
	
	if ($dbc)
	{
		//good news everyone!
		mysqli_set_charset($dbc,"utf8");
	}
	else
	{
		$error = mysqli_connect_error();
	}
	
	return array($dbc,$error);
}
?>