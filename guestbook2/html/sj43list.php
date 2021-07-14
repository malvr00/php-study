<?php
  include_once __DIR__  .'/../includes/UserFunctions.php';
  $data_dir='./data';
  $filename = readFileName($data_dir);
  $cnt = count($filename);
  sort($filename);
  // ob_start();
  // echo '<div class="form_class">방명록 갯수 = " . cnt .
  //        ' 개 <a gref=sj414.html>입력화면으로 </a></div>';
  
  $outStr = '<div class="form_class"> 방명록 갯수 = ' . $cnt . 
            ' 개 <a href="sj43index.php">입력 화면으로 </a> </div>';
  for($i = $cnt-1; $i >= 0; $i--){
    $data=file("$data_dir/$filename[$i]");
    $tmp = implode($data,"<br>");
    $outStr .= '<div id="list"> 방명록 : ' . $filename[$i] . ' <br>' .$tmp . '</div>';
  }
  $title = '방명록 보기';
  $outString = $outStr;
  include __DIR__ . '/../templates/sj43layout.html.php';
?>