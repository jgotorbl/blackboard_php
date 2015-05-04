<?php
defined("true-access") OR die("No script kiddies");

include_once("lib/common.php");
include_once("lib/users.php");
include_once("lib/books.php");


/*
* Display books and offer them for purchase to users
*/

function view($data)
{
    startOfPage();
    startContent();

    h1("AMAZING Books");
    p("Welcome to AMAZING Books - Please Log in and buy!");
    users_renderLoginForm();
     
    $books = $data["books"];
    foreach ($books as $book)
    {
	    books_render($book);
    }

    endContent();
    endOfPage();
}




?>
