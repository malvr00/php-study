<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>Form Tag 사용</title>
  </head>
  <body>
    <h2>Get 방식의 입력 내용 확인</h2>
    <?php
      $user_name = htmlspecialchars($_GET['g_name'], ENT_QUOTES, 'UTF-8');
      $user_address = htmlspecialchars($_GET['g_address']);
      echo 'Form 에서 $_GET 배열로 전달된 내용입니다.<br>';
      echo '당신의 이름은' . $user_name . '입니다.<br>';
      echo '당신의 주소는 ' . $user_address . ' 입니다.<br>';
    ?>
    
  </body>
</html>