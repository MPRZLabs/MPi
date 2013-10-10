<?php
	/**
	 * MySQL backend for database handling.
	 */
  	class DatabaseHandler {
  		/**
		 * storing the database connection
		 */
    	protected $link;
		/**
		 * storing connection parameters
		 */
    	private $host, $user, $pass, $name;
    	
		/**
		 * takes parameters and init()s
		 */
    	public function __construct($host, $user, $pass, $name)
    	{
	      	$this->host = $host;
	      	$this->user = $user;
	      	$this->pass = $pass;
	      	$this->name = $name;
	      	$this->init();
	    }
		
		/**
		 * shuts down the connection to the database
		 */
		 public function __destruct()
		 {
		 	mysql_close($this->link);
		 }
		
		/**
		 * opens the connection to the database
		 */
	    private function init()
	    {
	      	$this->link = mysql_connect($this->host, $this->user, $this->pass) or debug_die('Could not connect: ' . mysql_error());
	      	mysql_select_db($this->name, $this->link) or debug_die('Could not select database');    
	    }
  	}
?>