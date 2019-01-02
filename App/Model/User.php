<?php

class User extends model
{

  public function insert(){


    try {

      $sql = "insert into users(name,surname) values('Tarkan','Cengiz')";
      $this->connection()->exec($sql);

    } catch (PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();

    }

  }

}



?>
