<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>반복문 예제</title>
  </head>
  <body>
    <h2>반복문 예제</h2>
  <?php
    $a = 0;
    echo '<p>whlie시작<br>';
    while($a<5){
      echo '$a = ' . $a . '<br>';
      $a++;
    }
    echo 'while 끝</p>';
    
    $a = 0;
    echo '<p>do - while 시작 <br>';
    do{
      echo '$a = ' . $a . '<br>';
      $a++;
    }while($a<5);
    echo 'do - while 끝</p>';
    
    $b = 0;
    echo'<p>for 시작 <br>';
    for($a=1; $a<5; $a++){
      echo '$a = ' . $a . '<br>';
      $b += $a;
    }
    echo '$b = ' . $b . '<br>';
    echo 'for 끝 </p>';
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