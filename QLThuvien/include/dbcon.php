<?php
class Database{
  private $host;
  private $user;
  private $pass;
  private $db;
  public $mysqli;

  public function __construct() {
    $this->db_connect();
  }

  private function db_connect(){
    $this->host = 'localhost';
    $this->user = 'root';
    $this->pass = '';
    $this->db = 'lms';

    $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);
    return $this->mysqli;	
  }

  public function db_query($sql){
        return $this->mysqli->query($sql);
  }
  public function db_num_rows($result){
  	return $result->num_rows;
  }
  public function db_fetch_array($result){
  	return $result->fetch_array(MYSQLI_BOTH);
  }
}

?>