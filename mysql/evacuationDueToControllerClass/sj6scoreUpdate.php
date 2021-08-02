<?php

include_once __DIR__ . '/../includes/DbConnect.php';
include_once __DIR__ . '/../includes/UserFunctions.php';

try{
  if(isset($_POST['sc_no'])){
    //updateScore($pdo,['sc_no'=>$_POST['sc_no'],'sc_cpp'=>$_POST['sc_cpp'],
    //         'sc_java'=>$_POST['sc_java'],'sc_id'=>$_POST['sc_id']]);
    updateData($pdo, 'score', 'sc_id', $_POST);
    header('location: sj6scoreList.php');
  }else{
    $row = selectScore($pdo, $_GET['id']);
    
    $title = 'Score Modify';
    ob_start();
    include __DIR__ . '/../templates/sj6scoreForm2.html.php';
    $outString = ob_get_clean();
  }
}catch(PDOException $e){
  $outString = '<p>error : ' . $e->getMessage(). $e->getFile() . ' Line : ' . $e->getLine() . '</p>';
}
include __DIR__ . '/../templates/sj6layout.html.php';