<?php
if (!defined("true-access"))
{
	die("cannot access");
}
include_once("common.php");
/*
* users database
*/
function users_loggedIn()
{
	return (isset($_SESSION['user']));
}

function users_username()
{
	
}

function users_renderLoginForm()
{
	if (!users_loggedIn()) {
		echo '<form action="index.php?option=store&view=login" method="post">                          '.PHP_EOL;
		echo '<input type="text" placeholder="username" name="username"/>'.PHP_EOL;
		echo '<input type="password" placeholder="password" name="password"/>'.PHP_EOL;
		echo '<input type="submit" value="Login"/>                       '.PHP_EOL;
		echo '</form>                                                      '.PHP_EOL;
	}
	else
	{
		p("Welcome user!");
		echo '<form action="index.php?option=store&view=logout" method="post">                          '.PHP_EOL;
		echo '	<input type="submit" value="Logout"/>                       '.PHP_EOL;
		echo '</form>                                                      '.PHP_EOL;
	}
}


?>