<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>php 예제 8</title>
  </head>
  <body>
    <h2>전역변수, 지역변수, 정적변수</h2>
  <?php
    $aa = '전역변수';
    $bb = '전역변수일까?';
    echo ('<p> $aa = ' . $aa . '<br>');
    echo '$bb = ' . $bb . '</p>';
    test1();
    
    test2();
    test2();
    test2();
    
    function test1(){
      global $aa;
      echo '<p> test()의 $aa = ' . $aa . '<br>';
      echo 'test1()의 $bb = ' . $bb . '<br>';
      $aaa = $GLOBALS['aa'];
      $bbb = $GLOBALS['bb'];
      echo 'test()의 $aaa = ' . $aaa . ' $bbb = ' . $bbb . ' </p>';
    }
    
    function test2(){
      static $s = 1;
      $a = 1;
      $s++;
      $a++;
      echo '<p>test2()의 $s = ' . $s . '$a = ' . $a . '</p>';
    }
  ?>
  </body>
</html>