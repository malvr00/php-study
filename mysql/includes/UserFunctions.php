<?php
function selectAllScore($pdo){
  $sql = 'SELECT * FROM `student` INNER JOIN `score` ON `student`.`stu_no`=`score`.`sc_no`';
  $stmt = myQuery($pdo, $sql);
  return $stmt->fetchAll();
}

function myQuery($pdo, $sql, $param =[] ){
  $stmt = $pdo->prepare($sql);
  $stmt->execute($param);
  return $stmt;
}
function stuCount($pdo, $no){
  $param = [':stu_no'=>$no];
  $stmt = myQuery($pdo,'SELECT COUNT(*) FROM `student` WHERE `stu_no` = :stu_no',$param);
  $row = $stmt->fetch();
  return $row[0];
}

/*function insertScore($pdo, $param){
  $sql = 'INSERT INTO `score` SET
          `sc_no` = :sc_no,
          `sc_cpp` = :sc_cpp,
          `sc_java` = :sc_java';
  $sql = 'INSERT INTO `score` SET ';
  foreach($param as $key=>$value){
    $sql .= '`'. $key .'`= :' .$key .', ';
  }
  $sql = rtrim($sql, ', ');
  
  myQuery($pdo, $sql, $param);
}*/
function insertScore($pdo, $table, $param){
  $sql = 'INSERT INTO `' . $table . '` SET ';
  foreach($param as $key=>$value){
    $sql .= '`' .$key . '`= :' . $key .', ';
  }
  $sql = rtrim($sql, ', ');
  
  myQuery($pdo, $sql, $param);
}
function updateScore($pdo, $param){
  /*$sql = 'UPDATE `score` SET `sc_no` = :sc_no, `sc_cpp` = :sc_cpp,
                             `sc_java` = :sc_java WHERE `sc_id=:id';
  $sql = 'UPDATE `score` SET ';*/
  foreach($param as $key=>$value){
    $sql .= '`' .$key . '`= :' .$key .', ';
   // echo $sql .'<br>';
  }
  
  $sql = rtrim($sql, ', ');
  $sql .= ' WHERE `sc_id`=:sc_id';

  myQuery($pdo, $sql, $param);
}

function updateData($pdo, $table, $keyField, $param){
  $sql = 'UPDATE `' . $table . '` SET ';
  foreach($param as $key=>$value){
    $sql .= '`' . $key . '`= :' . $key . ', ';
  }
  $sql = rtrim($sql, ', ');
  $sql .= ' WHERE `' . $keyField . '`=:'.$keyField;
  
  myQuery($pdo, $sql, $param);
}

function selectScore($pdo, $id){
  $param = [':sc_id'=>$id];
  $stmt = myQuery($pdo, 'SELECT * FROM `score` WHERE `sc_id` = :sc_id', $param);
  return $stmt->fetch();  
}

/*function deleteScore($pdo, $id){
  $param = [':sc_id'=>$id];
  myQuery($pdo, 'DELETE FROM `score` WHERE `sc_id`=:sc_id', $param);
}*/
function deleteData($pdo, $table, $keyField, $id){
  $param = [':id'=>$id];
  $sql = 'DELETE FROM `' . $table . '` WHERE `' . $keyField . '`=:id';
  myQuery($pdo, $sql, $param);
}