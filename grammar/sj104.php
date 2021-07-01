<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>php 예제 4</title>
  </head>
  <body>
    <h2>변수 사용 연습</h2>
  <?php
    $aa = 100;
    $AA = 200;
    test();
    TEST();
    echo ('<p>\$aa =' . $aa . '<br>');
    echo ('\$AA = ' . $AA . '</p>');
    $aa = 'sejong';
    echo ("<pre>\$aa = \n $aa</pre>");
    
    $aa = 111;
    $aa += 1.7;
    echo '<p>자동 형 변환 후 1 \$aa =' . $aa . ' </p>';
    
    $st = "12ab456";
    $st += 1;
    echo '<p>자동 형 변환 후 2 \$st = ' . $st . '</p>';
    
    $bb = 123.56;
    $str = (string)$bb;
    $cc = (int)$bb;
    $dd = $str + 10;
    echo '<p> $bb, $cc, $dd, $str </p>';
    printf('<p>\$bb = %s 형입니다.<br>',gettype($bb));
    printf('\$str = %s 형입니다.<br>',gettype($str));
    printf('\$cc = %s 형입니다.<br>',gettype($cc));
    printf('\$dd = %s 형입니다.<br>',gettype($dd));
    
    $ee = settype($bb,integer);
    printf('<p>\$bb = %s 형입니다.<br>', gettype($bb));
    printf('\$ee = ' . $ee . ', \$bb = ' . $bb . '</p>');
    
    $arr = (array)'111,222';
    $arr = (array) '333,444';
    echo '<p>arr[0] = '.$arr[0].', arr[1] = ' . $arr[1] . '<br>';
    echo 'arr = ' .$arr . '<br>';
    printf('\$arr = %s 형입니다.</p>',gettype($arr));
    
    function test(){
      echo '<p>여기는 test()소문자</p>';
    };
   /* function TEST(){
          echo '<p>대문자 test</p>';
      };*/
  ?>
  </body>
</html>