<?php
try{
  include_once __DIR__ . '/../includes/DbConnect.php';
  include_once __DIR__ . '/../classes/TableManager.php'; 
  
  $stuTable = new TableManager($pdo, 'student', 'stu_id');
  $stuTable->deleteData($_POST['stu_id']);
  
  //deleteData($pdo, 'student', 'stu_id', $_POST['stu_id']);
  
  header('location: sj6stuList.php');
}catch(PDOException $e){
  $outString = '<p>error : ' . $e->getMessage() . $e->getFile().' Line: ' .$e->getLine(). '</p>';
}
include __DIR__ . '/../templates/sj6layout.html.php';