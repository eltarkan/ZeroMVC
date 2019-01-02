<?php


class model{

  public $conn;

  public function __constructor(){


  }

  public function connection(){

    return $this->conn = new PDO("mysql:host = localhost;dbname=test","root","trkncngz");

  }


}

?>
