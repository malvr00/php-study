<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>Form tag ���</title>
  </head>
  <body>
    <h2>POST����� �Է� ���� Ȯ��</h2>
    <?php
      $u_name = htmlspecialchars($_POST['user_name'], ENT_QUOTES, 'UTF-8');
      $u_password = htmlspecialchars($_POST['user_password'], ENT_QUOTES, 'UTF-8');
      $u_address = htmlspecialchars($_POST['user_address'], ENT_QUOTES, 'UTF-8');
      
      echo '<p> Form ���� ���޵� �����Դϴ�.</p>';
      echo '<p> �̸��� ' . $u_name . ' �Դϴ�.<br>';
      echo '����� ' . $u_password . ' �Դϴ�.<br>';
      echo '�ּҴ� ' . $u_address . '�Դϴ�.</p>';
    ?>
  </body>
</html>