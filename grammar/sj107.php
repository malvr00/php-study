<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>php ���� 7</title>
  </head>
  <body>
    <h2>�Լ�, return ��, �μ� ���</h2>
  <?php
    $aa=100;
    $bb=200;
    
    echo('�Լ��� ��� �� <br>');
    $cc = hap(5,3);
    $dd = hap($aa,$bb);
    echo("\$cc = $cc<br>");
    echo("\$dd = $dd<br>");
    
    echo ('<p>Swap �Լ� ȣ��<br>');
    swap1($aa,$bb);
    echo "swap1()�������� \$aa = $aa, \$bb = $bb<br>";
    swap2($aa,$bb);
    echo "swap2()�������� \$aa = $aa, \$bb =$bb</p>";
    
    function hap($a, $b){
      $c = $a + $b;
      return $c;
    }
    
    function swap1($a,$b){
      echo "<p>swap1()���� �� \$a = $a, \$b = $b<br>";
      $c = $a;
      $a = $b;
      $b = $c;
      echo "swap1()���� �� \$a = $a, \$b = $b</p>";
    }
    
    function swap2 (&$a, &$b){
      echo "<p>swap2()���� �� \$a = $a, \$b = $b <br>";
      $c = $a;
      $a = $b;
      $b = $c;
      echo "swap2()���� �� \$a = $a, \$b = $b</p>";
    }
      
  ?>
  </body>
</html>