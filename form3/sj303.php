<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>Form Tag���</title>
  </head>
  <body>
    <h2>�Է� ���� Ȯ��</h2>
    
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
      
      echo "<p>Form ���� ���޵� �����Դϴ�.</p>";
      echo "<p>�̸� : $u_name <br>";
      echo "�����ȣ: $u_zip<br>";
      echo "�ּ�    : $u_address<br>";
      echo "��ȭ��ȣ: $u_tel<br>";
      echo "E-Mail  : $u_email<br>";
      echo "Programming : $u_pgm<br>";
      echo "�ڰ���  : $u_license<br>";
      echo "����1   : $u_pil<br>"; 
      echo "����2   : $u_sil<br>";
      echo "���    : $u_note</p>";
    ?>
  </body>
</html>