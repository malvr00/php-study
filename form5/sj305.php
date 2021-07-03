<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>Form Tag���</title>
  </head>
  <body>
    <h2>PHP �Լ���� �Է� ���� Ȯ��</h2>
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
    echo '<p>Form���� ���޵� ���� �Դϴ�.</p>';
    echo '<p>�̸��� ' . $name . ' �Դϴ�.</p>';
    echo '����� ' . $pass . ' �Դϴ�.<br>';
    echo '�ּҴ� ' . $addr . ' �Դϴ�.</p>';
    return;
  }
  
  function error($name, $pass, $addr){
    if((!$name) && (!$pass) && (!$addr)){
      echo '<h2>�̸��� ��� �ּҸ� ��� ����ϼ���</h2>';
      return;
    }
    if($name=''){
      echo '<h2>�̸��� ����ϼ���.</h2>';
      return;
    }
    if(empty($pass)){
      echo '<h2>��й�ȣ�� ����ϼ���</h2>';
      return;
    }
    if(!$addr){
      echo '<h2>�ּҸ� ����ϼ���.</h2>';
      return;
    }
  }
?>