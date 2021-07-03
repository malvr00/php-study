<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>Form Tag 사용</title>
  </head>
  <body>
    <h2>POST방식의 입력 내용 확인</h2>
    <?php
      $user_name = htmlspecialchars($_POST['p_name']);
      $user_address = htmlspecialchars($_POST['p_address']);
      
      echo 'Form 에서 $_POST 배열로 전달된 내용 입니다.<br>';
      echo '당신의 이름은 ' .$user_name . ' 입니다.<br>';
      echo '당신의 주소는 ' . $user_address . ' 입니다.<br>';
      echo '당신의 주소는 ' . $_POST['p_address'] . '입니다.<br>';
      
      echo '당신의 이름은 ' . $p_name . '입니다.<br>';
    ?>
  </body>
</html>