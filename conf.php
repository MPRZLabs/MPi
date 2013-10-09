<?php
  
  require("debug.php");
  // Welcome to MPi configuration file. Just fill in the fields.
  
  
  define("DATABASE_BACKEND", "mysql"); // can also be sqlite (not yet but soon)

  if (DATABASE_BACKEND == "mysql")
  {
    require("mysql.php");
  }
  elseif (DATABASE_BACKEND == "sqlite")
  {
    require("sqlite.php");
  }
  else
  {
    debug_die("Invalid database backend!");
  }
  
  
?>