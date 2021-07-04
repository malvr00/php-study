<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>Form Tag ���</title>
  </head>
  <body>
    <h2>���� ǥ���� ���</h2>
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
    echo '<p>Form���� ���޵� ���� �Դϴ�.</p>';
    echo '<p>�̸���  ' . $name . ' �Դϴ�..<br>';
    echo '����� ' . $pass . ' �Դϴ�.<br>';
    echo '�ּҴ� ' . $addr . ' �Դϴ�.</p>';
  }
  function error_msg($msg){
    echo '<script name="javascript">window.alert("' . $msg . '");history.go(-1);</script>';
  }
  function error_check($name, $pass, $addr){
    if(!preg_match('([^ ])',$name)){
      error_msg('�̸��� ����ϼ���.');
      return false;
    }
    if(!preg_match('(^[0-9a-zA-Z]{4,8}$)',$pass)){
      error_msg('��й�ȣ�� ����, ���� 4-8���ڸ� �Է��ϼ���.');
      return false;
    }
    if(!preg_match('([^ ])',$addr)){
      error_msg('�ּҸ� ����ϼ���.');
      return false;
    }
    return true;
  }
?>
