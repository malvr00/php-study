<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>if ����</title>
  </head>
  <body>
    <h2>if �� ����</h2>
  <?php
    $a = 0;
    if($a){
      echo '<p>if($a = ' . $a . ' --> �� </p>';  
    }
    else{
      echo '<p>$a = ' . $a . ' --> ���� </p>';  
    }
    if($a<0){
      echo '<p>if($a = ����</p>';
    }
    else if($a>0){
        echo '<p>if($a = ���)</p>';
    }
    else{
      echo '<p> $a = ���� ��</p>';
    }
    if($a<0) : echo '<p>$a = �� ���� </p>';
    elseif($a > 0): echo'<p>$a = �� ��� </p>';
    else: echo'<p>$a = ���� ������ ��</p>';
    endif;
    
    $a = 10;
    $b = ($a>0) ? '���' : '����';
    echo '<p>$b = ' . $b . ' </p>';
    $a = 'sejong';
    if($a == 'sejong'){
        echo '<p>�����̳�</p>';
    }
    else{
      echo '<p>������ �ƴϳ�</p>';
    }
    $a = 10;
    if($a>=1 && $a <=100){
      ?>
        <h2>
          a�� 1���� 100 ������ ��
        </h2>
      <?php
    }
    else{
      echo '<h2>a�� ������ ���� �ƴ� </h2>';
    }
  ?>
  </body>
</html>