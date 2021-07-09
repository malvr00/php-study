<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>Layout 연습</title>
    <link type="text/css" rel="stylesheet" href="./css/SjLayout.css"/>
  </head>
  <body>
    <header>
      <h1>방명록 보기</h1>
    </header>
    <?php
      $data_dir='./data';

      fileNameLoad($data_dir);
      
      $cnt = count($filename);
      echo '<div class="form_class">방명로 객수 = ' . $cnt . ' 개 <a href=sj414.htm>입력화면으로</a></div>';
      for($i = $cnt-1; $i>=0; $i--){
        $data = file("$data_dir/$filename[$i]");
        $tmp = implode($data, "<br>");
        echo ' <div id="list">방명록 : ' . $i  . ' <br>' . $tmp . '</div>';
      }
    ?>
  </body>
</html>

<?php
  function fileNameLoad($ddir){
    global $filename;
    $dir = opendir("$ddir");
      while($temp=readdir($dir)){
        if(($temp != '.')&& ($temp !='..')){
          $filename[] = $temp;
        }
      }
    closedir($dir);
  }
?>