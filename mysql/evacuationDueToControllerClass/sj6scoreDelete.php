<?php
try{
  include_once __DIR__ . '/../includes/DbConnect.php';
  include_once __DIR__ . '/../classes/TableManager.php'; 
  
  //deleteScore($pdo, $_POST['sc_id']);
  //deleteData($pdo, 'score', 'sc_id', $_POST['sc_id']);
  $scoreTable = new TableManager($pdo, 'score', 'sc_id');
  $scoreTable->deleteData($_POST['sc_id']);
  header('location: sj6scoreList.php');
}catch(PDOExcetpion $e){
  $outString = '<p>Error: ' .$e->getMessage(). $e->getFile(). 'Line : '.$e->getLine() .'<p>';
}
include __DIR__ . '/../templates/sj6layout.html.php';
