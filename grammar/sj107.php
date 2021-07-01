<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>php 예제 7</title>
  </head>
  <body>
    <h2>함수, return 값, 인수 사용</h2>
  <?php
    $aa=100;
    $bb=200;
    
    echo('함수의 결과 값 <br>');
    $cc = hap(5,3);
    $dd = hap($aa,$bb);
    echo("\$cc = $cc<br>");
    echo("\$dd = $dd<br>");
    
    echo ('<p>Swap 함수 호출<br>');
    swap1($aa,$bb);
    echo "swap1()실행후의 \$aa = $aa, \$bb = $bb<br>";
    swap2($aa,$bb);
    echo "swap2()실행후의 \$aa = $aa, \$bb =$bb</p>";
    
    function hap($a, $b){
      $c = $a + $b;
      return $c;
    }
    
    function swap1($a,$b){
      echo "<p>swap1()에서 전 \$a = $a, \$b = $b<br>";
      $c = $a;
      $a = $b;
      $b = $c;
      echo "swap1()에서 후 \$a = $a, \$b = $b</p>";
    }
    
    function swap2 (&$a, &$b){
      echo "<p>swap2()에서 전 \$a = $a, \$b = $b <br>";
      $c = $a;
      $a = $b;
      $b = $c;
      echo "swap2()에서 후 \$a = $a, \$b = $b</p>";
    }
      
  ?>
  </body>
</html>