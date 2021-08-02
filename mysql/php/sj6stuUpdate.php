<?php
  try{
    $pdo = new PDO('mysql:host=localhost; dbname=testdb2; charset=utf8', 'sejong', 'sj4321');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_POST['stu_no'])){
      $sql = 'UPDATE `student` SET `stu_no` = :stu_no, `stu_name` = :stu_name,
              `stu_address` = :stu_addr, `stu_birthday` = :stu_bday
              WHERE `stu_id`=:id';
      $stmt = $pdo->prepare($sql);
      $stmt->bindValue(':stu_no', $_POST['stu_no']);
      $stmt->bindValue(':stu_name', $_POST['stu_name']);
      $stmt->bindValue(':stu_addr', $_POST['stu_addr']);
      $stmt->bindValue(':stu_bday', $_POST['stu_bday']);
      $stmt->bindValue(':id', $_POST['stu_id']);
      $stmt->execute();
      header('location: sj6stuList.php');
    }else{
      $sql = 'SELECT * FROM `student` WHERE `stu_id`='. $_GET['id'];
      $result = $pdo->query($sql);
      $row = $result->fetch();
      $title = 'Edit students';
      ob_start();
      include __DIR__ . '/../templates/sj6stuForm2.html.php';
      $outString = ob_get_clear();
    }
  }catch(PDOException $e){
    $outString = '<p> error : ' . $e->getMessage(). $e->getFIle(). ' Line: ' . $e->getLine(). ' </p>';
  }
include __DIR__ . '/../templates/sj6layout.html.php';