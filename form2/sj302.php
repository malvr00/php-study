<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>Form tag���</title>
  </head>
  <body>
    <h2>hidden, radio, check ���</h2>
    <?php
      $page = htmlspecialchars($_POST['page'], ENT_QUOTES, 'UTF-8');
      $passwd = htmlspecialchars($_POST['password']);
      $grp1 = htmlspecialchars($_POST['group1']);
      
      $chk1 = isset($_POST['chk1']) ? $_POST['chk1'] : '' ;
      $chk2 = !empty($_POST['chk2']) ? $_POST['chk2'] : '' ;
      $chk = isset($_POST['chk']) ? $_POST['chk'] : '' ;
      //$chk = $_POST['chk']??'';   // 7�̻� ������
      $program = htmlspecialchars($_POST['pgm']);
      $txtvalue = htmlspecialchars($_POST['txtcmt']);
      
      echo '<p>Form���� ���� �� ���� �Դϴ�.</p>';
      echo '<p>hidden���� ���޵� page = ' . $page . ' �Դϴ�.<br>';
      echo 'password = ' . $passwd . ' �Դϴ�.</p>';
      echo '<p>radio ���� ������ ' . $grp1 . '�Դϴ�.</p>';
      echo '<p>chkeck Box�� ���õ� ������<br>';
      if($chk1)
        echo $chk1 . ' ������.<br>';
      else
        echo '���� �ȵ�(�ʱ�).<br>';
      if($chk2)
        echo $chk2. ' ������ . <br>';
      else
        echo '���� �ȵ�(�Ǳ�1).<br>';
      echo '<p>�������� 3 ���� ���õ� ���� <br>';
      if($chk){
        foreach($chk as $value){
          echo $value . ' ���� ���� ��<br>';
        }
        echo '</p>';
      }
      echo '<p>List���� ���õ� ������ ' . $program . '�Դϴ�.</p>';
      echo '<p>textarea�� �����Դϴ�.<br>';
      echo $txtvalue .'</p>';
    ?>
  </body>
</html>