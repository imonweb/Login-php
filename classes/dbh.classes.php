<?php 

class Dbh {
  
  protected function connect(){
    try {
      $username = "root";
      $password = "p@ssw0rd";
      $dbname = new PDO('mysql:host=localhost;dbname=login_php', $username, $password);
      return $dbh;
    }
    catch (PDOException $e) {
      print "Error!: " . $e->getMessage() . " <br/>";
      die();
    }
  }

}