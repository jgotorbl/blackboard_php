<?php
session_start();
define("true-access",true);

include_once("lib/database/purchases.php");
include_once("lib/layout/purchases.php");
/*
* Buy a book result page
*/
startOfPage();

$book = $_POST['book'];
$username = $_POST['username'];
purchases_buyBook($book,$username);

$history = purchases_getAll($username);
h1("Your Purchases");
foreach($history as $purchase)
{
	purchases_render($purchase);
}


endOfPage();
?>
