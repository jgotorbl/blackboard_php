<?php

if (!defined("true-access"))
{
	die("cannot access");
}

include_once("common.php");
/*
* Purchases database
*/

function purchases_buyBook($book, $username)
{
	list($dbc, $error) = connect_to_database();
	
	$book_safe = mysqli_real_escape_string($dbc, $book); //protect ourselves
	$username_safe = mysqli_real_escape_string($dbc,$username); //protect ourselves
	//$now = new date();
	
	$results = mysqli_query($dbc,"insert into purchases (username, book) values ('$username_safe','$book_safe')");
	
	return $results;
}

function purchases_getAll($username)
{
	list($dbc, $error) = connect_to_database();

	$username_safe = mysqli_real_escape_string($dbc,$username); //protect ourselves
	
	$results = mysqli_query($dbc,"select * from purchases join books on purchases.book = books.id where username='$username_safe'");
	
	$allPurchases = array();
	
	if ($results)
	{
		while ($purchase = mysqli_fetch_array($results,MYSQLI_ASSOC))
		{
			$allPurchases[] = $purchase;
		}
	}
	
	return $allPurchases;
}


?>