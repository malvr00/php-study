<?php

  include_once __DIR__ . '/../includes/DbConnect.php';
  include_once __DIR__ . '/../classes/TableManager.php'; 
  
  $scoreTable = new TableManager($pdo, 'score', 'sc_id');
  try{
    if(isset($_POST['sc_id'])){
      if($_POST['sc_id'] == ''){
        //insertScore($pdo, 'score', $_POST);
        $scoreTable->insertData($_POST);
      }else{
        //updateData($pdo, 'score','sc_id', $_POST);
        $scoreTable->updateData($_POST);
      }
      header('location: sj6scoreList.php');
    }else{
      if(isset($_GET['id'])){
        //$row = selectScore($pdo, $_GET['id']);
        $row = $scoreTable->selectID($_GET['id']);
        $title2 = ' MODIFY';
      }else{
        $title2 = ' INPUT';
      }
      $title = 'Score' . $title2;

      ob_start();
      include __DIR__ . '/../templates/sj6scoreForm3.html.php';
      $outString = ob_get_clean();

    }
  }catch(PDOException $e){
    $outString = '<p>Error: ' .$e->getMessage(). $e->getFile().' Line: '. $e->getLine() . ' </p>';
  }
  include __DIR__ . '/../templates/sj6layout.html.php';