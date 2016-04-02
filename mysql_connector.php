<?php

class Database {

  var $servername = "db4free.net";
  var $port = "3306";
  var $username = "mysqladmin";
  var $password = "mysqlpass";
  var $database = "my_default_db";
  public $conn;

  function __construct(){
    // Empty Constructor
  }

  public function connect(){
    $this->conn = new mysqli($this->servername . ':' . $this->port,
                             $this->username,
                             $this->password);

    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error."\n");
    }
    mysqli_select_db($this->conn, $this->database)
      or die("Could not connect to " . $this->database);
  }

  public function disconnect(){
    $this->conn->close();
  }
}

?>
