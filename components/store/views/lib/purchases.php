<?php
if (!defined("true-access"))
{
	die("cannot access");
}
include_once("common.php");
/*
* Purchases layout
*/

function purchases_render($purchase)
{
	h3($purchase['Title']);
	p("for ".$purchase['Price']);
}

?>