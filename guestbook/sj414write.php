<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>Layout ����</title>
    <link type="text/css" rel="stylesheet" href="./css/SjLayout.css" />
  </head>
  <body>
    <header>
      <h1>���� ���</h1>
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
      echo '<div class="form_class"> ���Ͽ� ��ϵ�.'.
            '<a href=sj414.htm>�Է� ȭ������</a>' . 
            '<a href=sj414List.php>���뺸��ȭ������</a></div>';
    ?>
  </body>
</html>