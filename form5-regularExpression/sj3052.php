<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>Form Tag 사용</title>
  </head>
  <body>
    <h2>정규 표현식 사용</h2>
    <?php
      $u_name = htmlspecialchars($_POST['user_name'], ENT_QUOTES, 'UTF-8');
      $u_password = htmlspecialchars($_POST['user_password'], ENT_QUOTES, 'UTF-8');
      $u_address = htmlspecialchars($_POST['user_address'], ENT_QUOTES, 'UTF-8');
      if(error_check($u_name, $u_password, $u_address)){
        display($u_name, $u_password, $u_address);
      }
    ?>
  </body>
</html>
<?php
  function display($name, $pass, $addr){
    echo '<p>Form에서 전달된 내용 입니다.</p>';
    echo '<p>이름은  ' . $name . ' 입니다..<br>';
    echo '비번은 ' . $pass . ' 입니다.<br>';
    echo '주소는 ' . $addr . ' 입니다.</p>';
  }
  function error_msg($msg){
    echo '<script name="javascript">window.alert("' . $msg . '");history.go(-1);</script>';
  }
  function error_check($name, $pass, $addr){
    if(!preg_match('([^ ])',$name)){
      error_msg('이름을 기록하세요.');
      return false;
    }
    if(!preg_match('(^[0-9a-zA-Z]{4,8}$)',$pass)){
      error_msg('비밀번호는 영문, 숫자 4-8글자만 입력하세요.');
      return false;
    }
    if(!preg_match('([^ ])',$addr)){
      error_msg('주소를 기록하세요.');
      return false;
    }
    return true;
  }
?>
