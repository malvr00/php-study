<?php
  $pdo = new PDO('mysql:host=localhost; dbname=testdb2; charset=utf8', 'sejong', 'sj4321');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);