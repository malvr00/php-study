<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>Form Tag ���</title>
  </head>
  <body>
    <h2>POST����� �Է� ���� Ȯ��</h2>
    <?php
      $user_name = htmlspecialchars($_POST['p_name']);
      $user_address = htmlspecialchars($_POST['p_address']);
      
      echo 'Form ���� $_POST �迭�� ���޵� ���� �Դϴ�.<br>';
      echo '����� �̸��� ' .$user_name . ' �Դϴ�.<br>';
      echo '����� �ּҴ� ' . $user_address . ' �Դϴ�.<br>';
      echo '����� �ּҴ� ' . $_POST['p_address'] . '�Դϴ�.<br>';
      
      echo '����� �̸��� ' . $p_name . '�Դϴ�.<br>';
    ?>
  </body>
</html>