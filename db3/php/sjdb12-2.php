<?php
try{
  $pdo = new PDO('mysql:host=localhost; dbname=testdb2; charset=utf8', 'sejong', 'sj4321');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = 'SELECT * FROM `student`';
  $result = $pdo->query($sql);
  
  while($row = $result->fetch()){
    $stuName[] = $row['stu_no']. ' '.$row['stu_name'] .' '.$row['stu_address'];
  }
  $title = 'Student Name List2';
  $outString = '';
  ob_start();
  include __DIR__ .'/../templates/stuName.html.php';
  $outString = ob_get_clean();
}catch(PDOException $e){
  $outString = 'error : ' . $e->getMessage(). ' <br> error File : ' . $e->getFile().
  '<br>error Line : ' . $e->getLine();
}
include __DIR__ . '/../templates/sjList1.html.php';