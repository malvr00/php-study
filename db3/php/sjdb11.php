<?php
try{
  $pdo = new PDO('mysql:host=localhost; dbname=testdb2; charset=utf8', 'sejong', 'sj4321');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $sql = 'SELECT * FROM `student`';
  $result = $pdo->query($sql);
  
  $row = $result->fetch();
  
  echo "�迭�������� : $row[0], $row[1], $row[2]<br>";
  echo "�ʵ�� ���� : $row[stu_id], $row[stu_no], $row[stu_name]<br>";
  
  $row = $result->fetchObject();
  echo "��ü���� ÷�� : $row->stu_id, $row->stu_no, $row->stu_name<br>";
  
  echo '<br>for ���<br>';
  while($row = $result->fetchObject()){
    echo "$row->stu_id, $row->stu_no, $row->stu_name<br>";
    echo $row->stu_id.', '. $row->stu_no . ', ' . $row->stu_name . '<br>';
  }
  
  echo '<br> foreach ��� <br>';
  $result = $pdo->query($sql);
  
  foreach($result as $row){
    echo "$row[stu_id], $row[stu_no], $row[stu_name]<br>";
  }
  
  $result = $pdo->query($sql);
  foreach($result as $row):
    echo "$row[stu_id], $row[stu_no], $row[stu_name]<br>";
  endforeach;
}catch(PDOException $e){
  $strMsg = 'DB ���� : ' . $e->getMessage() . ' <br>���� �߻� ���� : '.$e->getFile().
  '<br> ���� �߻� �� :  ' . $e->getLine();
}

include __DIR__ . '/../templates/msgOutput2.html.php';