<?php

try{
  $pdo = new PDO('mysql:host=localhost; dbname=testdb2; charset=utf8', 'sejong', 'sj4321');
  echo 'MariaDB Connection';
}
catch(PDOException $e){
  echo 'DB error : ' . $e;
}
