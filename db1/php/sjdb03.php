<?php
try{
  $pdo = new PDO('mysql:host=localhost; dbname=testdb2; charset=utf8', 'sejong', 'sj4321');
  
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $strMsg = ' DB Connetion';
}catch(PDOException $e){
  $strMsg = 'DB error : ' . $e->getMessage() .
  '<br>오류 발생 파일 :  ' . $e->getFile() .
  '<br>오류 발생 행 : ' . $e->getLine();
}

include __DIR__ . '/../templates/msgOutput.html.php';