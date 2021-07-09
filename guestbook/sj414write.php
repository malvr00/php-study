<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>Layout 연습</title>
    <link type="text/css" rel="stylesheet" href="./css/SjLayout.css" />
  </head>
  <body>
    <header>
      <h1>방명록 기록</h1>
    </header>
    <?php
      $data_dir='./data';
      $dir=opendir("$data_dir");
      while($temp=readdir($dir)){
        if(($temp != '.')&& ($temp !='..')){
          $filename[] = $temp;
        }
      }
      closedir($dir);
      $cnt = count($filename) + 1;
      echo 'cnt1 = ' . $filename[1] . '<br>';
      $name = htmlspecialchars($_POST['user_name'], ENT_QUOTES, 'UTF-8');
      $password = htmlspecialchars($_POST['user_password'], ENT_QUOTES, 'UTF-8');
      $email = htmlspecialchars($_POST['user_email'], ENT_QUOTES, 'UTF-8');
      $comment = htmlspecialchars($_POST['user_comment'], ENT_QUOTES, 'UTF-8');
      $fp = fopen("$data_dir/$cnt", "w");
      fwrite($fp, "$name\n$password\n$email\n$comment");
      fclose($fp);
      echo '<div class="form_class"> 방명록에 기록됨.'.
            '<a href=sj414.htm>입력 화면으로</a>' . 
            '<a href=sj414List.php>내용보기화면으로</a></div>';
    ?>
  </body>
</html>