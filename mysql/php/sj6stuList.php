<?php
try{
  include_once __DIR__ . '/../includes/DbConnect.php';
  include_once __DIR__ . '/../classes/TableManager.php';

  $stuTable = new TableManager($pdo, 'student', 'stu_id');
  
  $result = $stuTable->selectAll();
  
  $title = 'Student Status';
  ob_start();
  
  include __DIR__ . '/../templates/sj6stuList.html.php';
  
  $outString = ob_get_clean();
}catch(PDOException $e){
  $outString = '<p>error : ' . $e->getMessage(). $e->getFile() . ' Line : ' . $e->getLine() . '</p>';
}
include __DIR__ . '/../templates/sj6layout.html.php';