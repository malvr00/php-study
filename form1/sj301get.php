<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>Form Tag ���</title>
  </head>
  <body>
    <h2>Get ����� �Է� ���� Ȯ��</h2>
    <?php
      $user_name = htmlspecialchars($_GET['g_name'], ENT_QUOTES, 'UTF-8');
      $user_address = htmlspecialchars($_GET['g_address']);
      echo 'Form ���� $_GET �迭�� ���޵� �����Դϴ�.<br>';
      echo '����� �̸���' . $user_name . '�Դϴ�.<br>';
      echo '����� �ּҴ� ' . $user_address . ' �Դϴ�.<br>';
    ?>
    
  </body>
</html>