<?php
try{
    $pdo = new PDO('mysql:host=localhost; dbname=testdb2; charset=utf8', 'sejong', 'sj4321');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = 'CREATE TABLE `student`(
      `stu_id` INT NOT NULL AUTO_INCREMENT,
      `stu_no` CHAR(4) NOT NULL,
      `stu_name` CHAR(10),
      `stu_address` TEXT,
      `stu_birthday` DATE,
      PRIMARY KEY(`stu_id`)
    )DEFAULT CHARACTER SET  utf8 ENGINE=InnoDB';
    
   // $sql = 'DROP TABLE `student`';
   // $sql = 'ALTER TABLE `student` DROP `stu_test`';
    
    $pdo->exec($sql);
    $strMsg = '학생 테이블 생성. ';
    
    $sql = 'CREATE TABLE `score`(
      `sc_id` INT NOT NULL AUTO_INCREMENT,
      `sc_no` CHAR(4) NOT NULL,
      `sc_cpp` INT,
      `sc_java` INT,
      `sc_av` FLOAT,
      `sc_grade` CHAR(1),
      PRIMARY KEY(`sc_id`)
    )DEFAULT CHARACTER SET utf8';
    
    //$sql = 'DROP TABLE `score`';
    
    $pdo->exec($sql);
    $strMsg .= '성적테이블 생성.';
  }catch(PDOException $e){
    $strMsg = 'DB 오류: ' . $e->getMessage() .
    '<br>오류 발생 파일: '. $e->getFile().
    '<br>오류 발생 행 : '. $e->getLine();
  }
  
  include __DIR__ . '/../templates/msgOutput.html.php';
?>