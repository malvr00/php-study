<?php
try{
  $pdo = new PDO('mysql:host=localhost; dbname=testdb2; charset=utf8', 'sejong', 'sj4321');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $pdo->exec('INSERT INTO `student` (`stu_no`, `stu_name`, `stu_address`, `stu_birthday`)'
              . 'VALUES (\'1001\', \'HONG\', \'Sachang-dong\', \'2000-1-1\')');
  $pdo->exec('INSERT INTO `student` (`stu_no`, `stu_name`, `stu_address`, `stu_birthday`)'
              . 'VALUES (\'1002\', \'KIM\', \'Bunpyeong-dong\', \'2001-2-2\')');
  $pdo->exec('INSERT INTO `student` (`stu_no`, `stu_name`, `stu_address`, `stu_birthday`)'
              . 'VALUES (\'1003\', \'KANG\', \'Sajik-dong\', \'2002-3-3\')');
  $pdo->exec('INSERT INTO `student` (`stu_no`, `stu_name`, `stu_address`, `stu_birthday`)'
              . 'VALUES (\'1004\', \'JANG\', \'yongam-dong\', \'2003-4-4\')');
  $pdo->exec('INSERT INTO `student` (`stu_no`, `stu_name`, `stu_address`, `stu_birthday`)'
              . 'VALUES (\'1005\', \'KIM2\', \'Gaesin-dong\', \'2004-5-5\')');
  
  $pdo->exec('INSERT INTO `score` (`sc_no`, `sc_cpp`, `sc_java`) VALUES ("1001", 99, 99)');
  $pdo->exec('INSERT INTO `score` (`sc_no`, `sc_cpp`, `sc_java`) VALUES ("1002", 88, 78)');
  $pdo->exec('INSERT INTO `score` (`sc_no`, `sc_cpp`, `sc_java`) VALUES ("1003", 99, 45)');
  $pdo->exec('INSERT INTO `score` (`sc_no`, `sc_cpp`, `sc_java`) VALUES ("1004", 88, 100)');
  $pdo->exec('INSERT INTO `score` (`sc_no`, `sc_cpp`, `sc_java`) VALUES ("1005", 100, 100)');
  
  $strMsg = 'Data add.';
}catch(PDOException $e){
  $strMsg = 'DB error : ' . $e->getMessage() . '<br> 오류 발생파일 : ' . $e->getFile().
  '<br>오류 발생 행 : ' . $e->getLine();
}
include __DIR__ . '/../templates/msgOutput.html.php';