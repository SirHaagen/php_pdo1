<?php
  $host= 'localhost';
  $user= 'root';
  $password= '';
  $dbname= 'pdoposts';

  $dsn= 'mysql:host='. $host. ';dbname='. $dbname;

  //Create new PDO instance
  $pdo= new PDO($dsn, $user, $password);

  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

  #PDO QUERY (NO VARIABLES, NO INPUTS FROM USER)
  $stmt= $pdo->query('SELECT * FROM posts');

  /*while($row= $stmt->fetch(PDO::FETCH_ASSOC)){
    echo $row['title']. "<br>";
  }*/

  /*while($row= $stmt->fetch(PDO::FETCH_OBJ)){
    echo $row->title. "<br>";
  }*/

  //If we don't want to specify inside fetch(), we use line 12
  while($row= $stmt->fetch()){
    echo $row->title. "<br>";
  }

?>