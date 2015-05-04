<?php


include_once("models/users.php");
include_once("models/books.php");
include_once("models/purchases.php");


function view_enabled($view)
{
     if($view == "list")
	       return "execute_list";
	else if($view == "login")
	       return "execute_login";
	else if($view == "logout")
	       return "execute_logout";
	else if($view == "purchase")
	       return "execute_purchase";
	else 
	       return false;
}

function controller_route($view)
{
      if($view = view_enabled($view)){
	         //view contains something valid
			 $view(); //we execute the variable as a method, and it contains whatever we have selected
	  }
	  else
	  {
	      die("404 bad view");
	  }
}


function execute_list()
{
      $data =array();
	  $data["books"] = books_getAll();
	  
	  include("views/booklist.php");
	  view($data);
}

function execute_login()
{
      $username = $_POST['username'];
      $password = $_POST['password'];
      $success = users_checkExists($username,$password);
	  execute_list(); //send to the books list page
}

function execute_logout()
{
      session_unset ();
	  execute_list(); //send to the book list page
}

function execute_purchase()
{

}




?>