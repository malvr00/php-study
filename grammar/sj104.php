<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>php ���� 4</title>
  </head>
  <body>
    <h2>���� ��� ����</h2>
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
    echo '<p>�ڵ� �� ��ȯ �� 1 \$aa =' . $aa . ' </p>';
    
    $st = "12ab456";
    $st += 1;
    echo '<p>�ڵ� �� ��ȯ �� 2 \$st = ' . $st . '</p>';
    
    $bb = 123.56;
    $str = (string)$bb;
    $cc = (int)$bb;
    $dd = $str + 10;
    echo '<p> $bb, $cc, $dd, $str </p>';
    printf('<p>\$bb = %s ���Դϴ�.<br>',gettype($bb));
    printf('\$str = %s ���Դϴ�.<br>',gettype($str));
    printf('\$cc = %s ���Դϴ�.<br>',gettype($cc));
    printf('\$dd = %s ���Դϴ�.<br>',gettype($dd));
    
    $ee = settype($bb,integer);
    printf('<p>\$bb = %s ���Դϴ�.<br>', gettype($bb));
    printf('\$ee = ' . $ee . ', \$bb = ' . $bb . '</p>');
    
    $arr = (array)'111,222';
    $arr = (array) '333,444';
    echo '<p>arr[0] = '.$arr[0].', arr[1] = ' . $arr[1] . '<br>';
    echo 'arr = ' .$arr . '<br>';
    printf('\$arr = %s ���Դϴ�.</p>',gettype($arr));
    
    function test(){
      echo '<p>����� test()�ҹ���</p>';
    };
   /* function TEST(){
          echo '<p>�빮�� test</p>';
      };*/
  ?>
  </body>
</html>