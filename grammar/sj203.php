<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>�ݺ��� ����</title>
  </head>
  <body>
    <h2>�ݺ��� ����</h2>
  <?php
    $a = 0;
    echo '<p>whlie����<br>';
    while($a<5){
      echo '$a = ' . $a . '<br>';
      $a++;
    }
    echo 'while ��</p>';
    
    $a = 0;
    echo '<p>do - while ���� <br>';
    do{
      echo '$a = ' . $a . '<br>';
      $a++;
    }while($a<5);
    echo 'do - while ��</p>';
    
    $b = 0;
    echo'<p>for ���� <br>';
    for($a=1; $a<5; $a++){
      echo '$a = ' . $a . '<br>';
      $b += $a;
    }
    echo '$b = ' . $b . '<br>';
    echo 'for �� </p>';
    $arr = array(1,2,3);
    foreach($arr as $value){
        echo ' ' . $value . ' <br>';
    }
    foreach($arr as $value):
      echo ''. $value .' <br>';
    endforeach;
  ?>
  </body>
</html>