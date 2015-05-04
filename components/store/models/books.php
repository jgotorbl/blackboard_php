<?php
if (!defined("true-access"))
{
	die("cannot access");
}
include_once("common.php");
/*
* books database
*/

function books_getAll()
{
	$books = array();
	list($dbc,$error) = connect_to_database();
	if ($dbc)
	{
		$query = "SELECT books.Id, Title, FirstName, LastName, Price FROM BOOKS join AUTHORS where books.author = authors.id;";
		
		
		$result = mysqli_query($dbc,$query);
		if ($result)
		{
			while ($book = mysqli_fetch_array($result))
			{
				$books[] = $book;
			}
		}
	}
	return $books;
}

?>