<?php

define("true-access",true);
session_start();

function component_enabled($component)
{
       //
	   if($component == "store")
	         return "store/controller.php";
		else
		     return false;
}

function route()
{
       $component = empty($_GET["option"]) ? "store" : $_GET["option"]; //defaults to store if the logical sentence is true
	   $view = empty($_GET["view"]) ? "list" : $_GET["view"];
	   
	   if($file = component_enabled($component))
	   {
	         //file contains something
	         include_once("components/".$file);
			 controller_route($view);
	   }
	   else
	   {
	         die("404 bad component");
	   }
	   



}

route();

?>