<?php
try{
  $pdo = new PDO('mysql:host=localhost; dbname=testdb2; charset=utf8', 'sejong', 'sj4321');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $sql = 'SELECT * FROM `student`';
  $result = $pdo->query($sql);
  
  $row = $result->fetch();
  
  echo "배열형태참조 : $row[0], $row[1], $row[2]<br>";
  echo "필드명 참조 : $row[stu_id], $row[stu_no], $row[stu_name]<br>";
  
  $row = $result->fetchObject();
  echo "객체형태 첨조 : $row->stu_id, $row->stu_no, $row->stu_name<br>";
  
  echo '<br>for 사용<br>';
  while($row = $result->fetchObject()){
    echo "$row->stu_id, $row->stu_no, $row->stu_name<br>";
    echo $row->stu_id.', '. $row->stu_no . ', ' . $row->stu_name . '<br>';
  }
  
  echo '<br> foreach 사용 <br>';
  $result = $pdo->query($sql);
  
  foreach($result as $row){
    echo "$row[stu_id], $row[stu_no], $row[stu_name]<br>";
  }
  
  $result = $pdo->query($sql);
  foreach($result as $row):
    echo "$row[stu_id], $row[stu_no], $row[stu_name]<br>";
  endforeach;
}catch(PDOException $e){
  $strMsg = 'DB 오류 : ' . $e->getMessage() . ' <br>오류 발생 파일 : '.$e->getFile().
  '<br> 오류 발생 행 :  ' . $e->getLine();
}

include __DIR__ . '/../templates/msgOutput2.html.php';