<?php
  include_once __DIR__ . '/../includes/DbConnect.php';
  include_once __DIR__ . '/../classes/TableManager.php'; 
  $stuTable = new TableManager($pdo, 'student', 'stu_id');
  try{
    if(isset($_POST['stu_id'])){
      if($_POST['stu_id'] == ''){
        //insertScore($pdo, 'student', $_POST);
        $stuTable->insertData($_POST);
      }else{
        //updateData($pdo, 'student', 'stu_id', $_POST);
        $stuTable->updateData($_POST);
      }
      
      header('location: sj6stuList.php');
    }else{
      if(isset($_GET['id'])){
        // $sql = 'SELECT * FROM `student` WHERE `stu_id`='. $_GET['id'];
        // $result = $pdo->query($sql);
        // $row = $result->fetch();
        $row = $stuTable->selectID($_GET['id']);
        $title2 = ' Modify';
      }else{
        $title2 = ' Input';
      }
      $title = 'Student' . $title2;
      ob_start();
      include __DIR__ .'/../templates/sj6stuForm3.html.php';
      $outString = ob_get_clean();
    }
  }catch(PDOException $e){
    $outString = '<p>Error: ' .$e->getMessage(). $e->getFile(). 'Line : '.$e->getLine() .'<p>';
  }
  include __DIR__ .'/../templates/sj6layout.html.php';