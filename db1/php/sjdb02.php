<?php
  try{
    $pdo = new PDO('mysql:host=localhost; dbname=testdb2; charset=utf8', 'sejong', 'sj4321');
    $strMsg = 'Maria DB Connetion';
  }
  catch(PDOException $e){
    $strMsg = 'DB error : '. $e;
  }
  include __DIR__ . '/../templates/msgOutput.html.php';
?>