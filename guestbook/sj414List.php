<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>Layout ����</title>
    <link type="text/css" rel="stylesheet" href="./css/SjLayout.css"/>
  </head>
  <body>
    <header>
      <h1>���� ����</h1>
    </header>
    <?php
      $data_dir='./data';

      fileNameLoad($data_dir);
      
      $cnt = count($filename);
      echo '<div class="form_class">���� ���� = ' . $cnt . ' �� <a href=sj414.htm>�Է�ȭ������</a></div>';
      for($i = $cnt-1; $i>=0; $i--){
        $data = file("$data_dir/$filename[$i]");
        $tmp = implode($data, "<br>");
        echo ' <div id="list">���� : ' . $i  . ' <br>' . $tmp . '</div>';
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