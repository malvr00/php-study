<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>php 예제 6</title>
  </head>
  <body>
    <h2>배열 사용</h2>
  <?php
    $배열[] = '배열의 0 번째';
    $배열[] = 111;
    $배열[] = '배열의 2번째';
    
    $배열[1] = $배열[1] + 1;
    echo "<p>$배열[0], $배열[1], $배열[2]</p>";
    
    $arr[2] = '2 번째';
    $arr[0] = '0 번째';
    $arr[3] = '3 번째';
    $cnt = sizeof($arr);
    echo "배열요소 수 = $cnt, arr = $arr[0], $arr[1], $arr[2]<br>";
    
    $k1 = array(1,'aaa',3);
    //$k11 = [1,'aaa',3];
    echo "<p>k1 = $k1[0], $k1[1], $k1[2]</p>";
    
    $k2 = array(11, 2=>33, 44);
    $cnt = sizeof($k2);
    echo '<p>k2의 size = '.$cnt.' <br>';
    echo "k2 = $k2[0], $k2[1], $k2[2], $k2[3]</p>";
    
    $k3['aa'] = 11;
    $k3['bb'] = 22;
    $k3['cc'] = 33;
    echo 'k3[aa] = '.$k3['aa'].'<br>';
    echo 'k3[bb] = '.$k3['bb'].'<br>';
    $a = 'cc';
    echo 'k3[\$a] = '.$k3[$a].'<br>';
    
    list($key, $value) = each($k3);
    echo("\$key = $key, \$value = $value<br>");
    list($key, $value) = each($k3);
    echo("\$key = $key, \$value = $value<br>");
    list($key, $value) = each($k3);
    echo("\tkey = $key, \$value = $value<br>");
  ?>
  </body>
</html>