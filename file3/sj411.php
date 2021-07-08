<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>php 예제</title>
  </head>
  <body>
    <?php
      $file_name = './count.dat';
      if(file_exists($file_name)){
        $data = file($file_name);
        $cnt = trim($data[0]);
        $cnt++;
      }
      else{
        $cnt = 1;
      }
      $fp = fopen($file_name, 'w');
      fwrite($fp, $cnt);
      fclose($fp);
      
      echo '당신은 ' . $cnt . ' 번째 방문자 입니다<br>';
      $len = strlen($cnt);
      $cnt = (String)$cnt;
      echo $cnt . '의 글자 수  = ' . $len . ' <br>';
      echo '<p>당신은';
      for($i = 0; $i<strlen($cnt); $i++){
        echo '<img src=./images/' . $cnt[$i] . '.gif>';
      }
      echo '번째 방문자 입니다.</p>';
      for($i=0; $i<strlen($cnt); $i++){
        echo '<img src=images/B' . $cnt[$i] . '.gif>';
      }
    ?>
  </body>
</html>