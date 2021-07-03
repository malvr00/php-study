<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>Form tag 사용</title>
  </head>
  <body>
    <h2>POST방식의 입력 내용 확인</h2>
    <?php
      $u_name = htmlspecialchars($_POST['user_name'], ENT_QUOTES, 'UTF-8');
      $u_password = htmlspecialchars($_POST['user_password'], ENT_QUOTES, 'UTF-8');
      $u_address = htmlspecialchars($_POST['user_address'], ENT_QUOTES, 'UTF-8');
      
      echo '<p> Form 에서 전달된 내용입니다.</p>';
      echo '<p> 이름은 ' . $u_name . ' 입니다.<br>';
      echo '비번은 ' . $u_password . ' 입니다.<br>';
      echo '주소는 ' . $u_address . '입니다.</p>';
    ?>
  </body>
</html>