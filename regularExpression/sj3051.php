<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>정규표현식</title>
  </head>
  <body>
    <h2>정규표현식 연습</h2>
    <?php
      $str1 = 'abcdefg';
      echo 'cd= ' . preg_match('/cd/', $str1) . ' <br>';
      echo 'dc = ' . preg_match('/dc/', $str1) . ' <br>';
      echo 'CD = ' . preg_match('/CD/', $str1) . ' <br>';
      echo 'CD/i=' . preg_match('/CD/i', $str1). ' <br>';
      echo 'cd+= ' . preg_match('/cd+/', $str1). ' <br>';
      echo 'cd*= ' . preg_match('/cd*/', $str1). ' <br>';
      echo 'cd.*=' . preg_match('/cd.*/', $str1).' <br>';
      echo '^cd*=' . preg_match('/^cd*/', cddddd) .'<br>';
      echo '^cd.*=' .preg_match('/^cd.*/', caaaa).'<br>';
      echo '^[ab]/='.preg_match('/^[ab]/', 'bacacc').'<br>';
      echo '/[^ab]/=' . preg_match('/[^ab]/', 'baaa') . '<br>';
      echo '/[0-9]/=' . preg_match('/[0-9]/', 'baaa') . ' <br>';
      echo '/[^0-9]/='.preg_match('/[^0-9]/', 'baaa') . ' <br>';
      echo 'a+='.preg_match('/^...-...$/','123-456') . ' <br>';
      echo '/[^ ]/='.preg_match('/[^ ]/','') . '<br>';
      
      echo '^[0-9a-zA-z]{4,8}$= ' . preg_match('/^[0-9a-zA-Z]{4,8}$/', 'a12') . '<br>';
      echo '^[0-9a-zA-z]{4,8}$= ' . preg_match('/^[0-9a-zA-Z]{4,8}$/', 'a123') . '<br>';
      echo '^[0-9a-zA-z]{4,8}$= ' . preg_match('/^[0-9a-zA-Z]{4,8}$/', 'a123!') . '<br>';
      echo '^[0-9a-zA-z]{4,8}$= ' . preg_match('/^[0-9a-zA-Z]{4,8}$/', 'a123a123') . '<br>';
    ?>
  </body>
</html>