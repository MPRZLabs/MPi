<?php
  class DatabaseHandler {
    protected $link;
    private $host, $user, $pass, $name;
    
    public function __construct($host, $user, $pass, $name)
    {
      $this->host = $host;
      $this->user = $user;
      $this->pass = $pass;
      $this->name = $name;
      $this->init();
    }
    private function init()
    {
      $this->link = mysql_connect($this->host, $this->user, $this->pass) or debug_die('Could not connect: ' . mysql_error());
      mysql_select_db($this->name, $this->link) or debug_die('Could not select database');    
    }
  }
?>