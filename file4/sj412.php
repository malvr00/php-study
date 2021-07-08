<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>counter</title>
  </head>
  <body>
    <h3>방문 횟수</h3>
    <?php
      $file_name='./count.dat';
      $cnt = read_cntfile($file_name);
      echo '읽은 cnt = ' . $cnt . '<br>';
      $cnt++;
      write_cntfile();
      $StrNum = (string)$cnt;
      $len = strlen($StrNum);
      
      echo '<p>당신은 ';
      for($i=0; $i<$len; $i++){
        echo '<img src="./images/' . $StrNum[$i] . '.gif"/>';
      }
      echo '번째 손님입니다. </p>';
      echo '<p><a href="sj412.html">홈으로</a></p>';
    ?>
  </body>
</html>

<?php
  function read_cntfile($file_name){
    if(file_exists($file_name)){
      $fp=fopen($file_name, 'r');
      $buf=fread($fp, filesize($file_name));
      echo $cc;
      fclose($fp);
      $cnt=intval($buf);
    }
    else{
      $cnt = 1;
    }
    return $cnt;
  }
  function write_cntfile(){
    global $file_name, $cnt;
    $fp = fopen($file_name, 'w');
    fwrite($fp, $cnt);
    fclose($fp);
  }
?>