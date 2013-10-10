<?php
  
  	require("debug.php");
  	// Welcome to MPi configuration file. Just fill in the fields.
	  
  	//CHANGE STUFF HERE
	define("DATABASE_BACKEND", "mysql");
	
  	if (DATABASE_BACKEND == "mysql")
  	{
    	require("mysql.php");
		// CHANGE STUFF HERE
		$db = new DatabaseHandler("host", "user", "pass", "name");
  	}
  	elseif (DATABASE_BACKEND == "sqlite")
  	{
    	require("sqlite.php");
		$db = new DatabaseHandler("system.sqlite");
  	}
  	else
  	{
		debug_die("Invalid database backend!");
	}
  
?>