<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>php ���� 8</title>
  </head>
  <body>
    <h2>��������, ��������, ��������</h2>
  <?php
    $aa = '��������';
    $bb = '���������ϱ�?';
    echo ('<p> $aa = ' . $aa . '<br>');
    echo '$bb = ' . $bb . '</p>';
    test1();
    
    test2();
    test2();
    test2();
    
    function test1(){
      global $aa;
      echo '<p> test()�� $aa = ' . $aa . '<br>';
      echo 'test1()�� $bb = ' . $bb . '<br>';
      $aaa = $GLOBALS['aa'];
      $bbb = $GLOBALS['bb'];
      echo 'test()�� $aaa = ' . $aaa . ' $bbb = ' . $bbb . ' </p>';
    }
    
    function test2(){
      static $s = 1;
      $a = 1;
      $s++;
      $a++;
      echo '<p>test2()�� $s = ' . $s . '$a = ' . $a . '</p>';
    }
  ?>
  </body>
</html>