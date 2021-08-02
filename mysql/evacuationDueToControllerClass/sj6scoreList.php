<?php
try{
  include_once __DIR__ . '/../includes/DbConnect.php';
  include_once __DIR__ . '/../classes/TableManager.php'; 
   
  $stuTable = new TableManager($pdo, 'student', 'stu_no');
  $scoreTable = new TableManager($pdo, 'score', 'sc_no');
  
  $scoreResult = $scoreTable->selectAll();
  
  $result = [];
  foreach($scoreResult as $row){
    $stuRow = $stuTable->selectID($row['sc_no']);
    
    $result[] =[
            'sc_id'=>$row['sc_id'],
            'sc_no'=>$row['sc_no'],
            'stu_name'=>$stuRow['stu_name'],
            'sc_cpp'=>$row['sc_cpp'],
            'sc_java'=>$row['sc_java'],
            'sc_av'=>$row['sc_av'],
            'sc_grade'=>$row['sc_av']];
  }
  $title = 'Student Score Status';
  
  ob_start();
  
  include __DIR__ . '/../templates/sj6scoreList.html.php';
  
  $outString= ob_get_clean();
}
catch(PDOException $e){
  $outString ='<p> error: ' .$e->getMessage() . $e->getFile(). ' Line: '. $e->getLine(). '</p>';
}
include __DIR__ . '/../templates/sj6layout.html.php';