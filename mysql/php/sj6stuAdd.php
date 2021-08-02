<?php
if(isset($_POST['stu_no'])){
  try{
    $pdo = new PDO('mysql:host=localhost; dbname=testdb2; charset=utf8', 'sejong', 'sj4321');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = 'INSERT INTO `student` SET
    `stu_no` = :stu_no,
    `stu_name` = :stu_name,
    `stu_address` = :stu_addr,
    `stu_birthday` = CURDATE()';
    $stmt = $pdo->prepare($sql);
    
    $stmt->bindValue(':stu_no', $_POST['stu_no']);
    $stmt->bindValue(':stu_name', $_POST['stu_name']);
    $stmt->bindValue(':stu_addr', $_POST['stu_addr']);
    
    $stmt->execute();
    
    // header('locationL sj6stuList.php');
    
    $title = ' Student input';
    $outString='<h2>Student input Success</h2>';
  }catch(PDOException $e){
    $outString = '<p>error: ' . $e->getMessage(). $e->getFile(). ' Line: '. 
    $e->getLine(). '</p>';
  }
}else{
  $title = 'Student Input';
  ob_start();
  include __DIR__ . '/../templates/sj6stuForm.html.php';
  $outString = ob_get_clean();
}
include __DIR__ . '/../templates/sj6layout.html.php';