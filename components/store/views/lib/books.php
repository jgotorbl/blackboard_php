<?php
if (!defined("true-access"))
{
	die("cannot access");
}
include_once("common.php");
include_once("users.php");
/*
* books layout
*/
function books_render($book)
{
	h3($book['Title']." $".$book['Price']);
	p("by: ".$book['FirstName']." ".$book["LastName"]);
	if (users_loggedIn()) {
		books_renderPurchaseForm($book);
	}
}

function books_renderPurchaseForm($book) {

	echo '<form id="buy'.$book['Id'].'" action="purchase.php" method="POST">       '.PHP_EOL;
	echo '	<input name="username" type="hidden" value="'.$_SESSION['user']['username'].'"/>'.PHP_EOL;
	echo '	<input name="book" type="hidden" value="'.$book['Id'].'"/>'.PHP_EOL;
	echo '	<input type="submit" value="Purchase"/>                     '.PHP_EOL;
	echo '</form> ';    
}


?>