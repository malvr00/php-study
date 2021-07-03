<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>Form Tag사용</title>
  </head>
  <body>
    <h2>입력 내용 확인</h2>
    
    <?php
      $u_name = htmlspecialchars($_POST['user_name']);
      $u_zip  = htmlspecialchars($_POST['user_zip']);
      $u_address = htmlspecialchars($_POST['user_address']);
      $u_tel = htmlspecialchars($_POST['user_tel']);
      $u_email = htmlspecialchars($_POST['user_email']);
      $u_pgm = htmlspecialchars($_POST['user_pgm']);
      $u_license = htmlspecialchars($_POST['group1']);
      $u_pil = htmlspecialchars($_POST['chk1']);
      $u_sil = htmlspecialchars($_POST['chk2']);
      $u_note = htmlspecialchars($_POST['user_note']);
      
      echo "<p>Form 에서 전달된 내용입니다.</p>";
      echo "<p>이름 : $u_name <br>";
      echo "우편번호: $u_zip<br>";
      echo "주소    : $u_address<br>";
      echo "전화번호: $u_tel<br>";
      echo "E-Mail  : $u_email<br>";
      echo "Programming : $u_pgm<br>";
      echo "자격증  : $u_license<br>";
      echo "구문1   : $u_pil<br>"; 
      echo "구문2   : $u_sil<br>";
      echo "비고    : $u_note</p>";
    ?>
  </body>
</html>