<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>Form Tag사용</title>
  </head>
  <body>
    <h2>PHP 함수사용 입력 내용 확인</h2>
    <?php
      $u_name = htmlspecialchars($_POST['user_name'],ENT_QUOTES, 'UTF-8');
      $u_password = htmlspecialchars($_POST['user_password'],ENT_QUOTES, 'UTF-8');
      $u_address = htmlspecialchars($_POST['user_address'],ENT_QUOTES, 'UTF-8');
      
      if((!$u_name) || (!$u_password) || (!$u_address)){
        error($u_name, $u_password, $u_address);
      }
      else{
        display($u_name,$u_password, $u_address);
      }
    ?>
  </body>
</html>

<?php
  function display($name, $pass, $addr){
    echo '<p>Form에서 전달된 내용 입니다.</p>';
    echo '<p>이름은 ' . $name . ' 입니다.</p>';
    echo '비번은 ' . $pass . ' 입니다.<br>';
    echo '주소는 ' . $addr . ' 입니다.</p>';
    return;
  }
  
  function error($name, $pass, $addr){
    if((!$name) && (!$pass) && (!$addr)){
      echo '<h2>이름과 비번 주소를 모두 기록하세요</h2>';
      return;
    }
    if($name=''){
      echo '<h2>이름을 기록하세요.</h2>';
      return;
    }
    if(empty($pass)){
      echo '<h2>비밀번호를 기록하세요</h2>';
      return;
    }
    if(!$addr){
      echo '<h2>주소를 기록하세요.</h2>';
      return;
    }
  }
?>