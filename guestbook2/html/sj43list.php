<?php
  include_once __DIR__  .'/../includes/UserFunctions.php';
  $data_dir='./data';
  $filename = readFileName($data_dir);
  $cnt = count($filename);
  sort($filename);
  // ob_start();
  // echo '<div class="form_class">���� ���� = " . cnt .
  //        ' �� <a gref=sj414.html>�Է�ȭ������ </a></div>';
  
  $outStr = '<div class="form_class"> ���� ���� = ' . $cnt . 
            ' �� <a href="sj43index.php">�Է� ȭ������ </a> </div>';
  for($i = $cnt-1; $i >= 0; $i--){
    $data=file("$data_dir/$filename[$i]");
    $tmp = implode($data,"<br>");
    $outStr .= '<div id="list"> ���� : ' . $filename[$i] . ' <br>' .$tmp . '</div>';
  }
  $title = '���� ����';
  $outString = $outStr;
  include __DIR__ . '/../templates/sj43layout.html.php';
?>