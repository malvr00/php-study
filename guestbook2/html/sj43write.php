<?php
  include_once _DIR_ . '/../includes/UserFunctions.php';
  $data_dir = './data';
  $filename = readFileName($data_dir);
  
  $cnt = count($filename) + 1;
  $name = htmlspecialchars($_POST['user_name'], ENT_QUOTES, 'UTF-8');
  $password = htmlspecialchars($_POST['user_password'], ENT_QUOTES, 'UTF-8');
  $email = htmlspecialchars($_POST['user_email'], ENT_QUOTES, 'UTF-8');
  $comment = htmlspecialchars($_POST['user_comment'], ENT_QUOTES, 'UTF-8');
  $fp = fopen("$data_dir/$cnt","w");
  fwrite($fp, "$name\n$password\n$email\n$comment");
  fclose($fp);
  $outString = '<div class="form_class"> 방명록에 기록됨.'.
               '<a href="sj43index.php">입력 화면으로</a>' .
               '<a href="sj43list.php">내용보기화면으로</a></div>';
  $title = '방명록 기록';
  include __DIR__ .'/../templates/sj43layout.html.php';
?>