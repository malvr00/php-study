<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>php 예제 9</title>
  </head>
  <body>
    <h2>내장 함수</h2>
  <?php
    $str1 = trim(' se   jong');
    $str2 = '세종컴퓨터터 학원';
    echo('$str1 = ' . $str1 . '<br>');
    echo ('strlen($str1) = ' . strlen($str1) . '<br>');
    echo ('strlen($str2) = ' . strlen($str2) . '<br>');
    
    echo ('mb_strlen($str2) = ' .mb.strlen($str2) . ' <br>');
    echo ('substr($str1, 2, 2) = ' . substr($str1,2,2) . ' <br>');
    echo ('substr($str2, 3, 3) = ' . substr($str2,3,3) . ' <br>');
    echo ('mb_substr($str2, 2, 2) = ' . mb_substr($str2,2,2) . '<br>');
    echo ('str_replace("jo","ko",$str1) = ' . str_replace("jo","ko",$str1). ' <br>');
    echo ('str_replace("컴퓨터","정보",$str2) = ' . str_replace("컴퓨터", "정보", $str2). ' <br>');
    $str3 = '<b>sejong\'s"&</b>';
    echo (' $str3 = ' . $str3 . ' <br>');
    
    
    echo('ENT_COMPACT = ' . htmlspecialchars($str3) . ' <br>');
    echo('ENT_QUOTES = ' . htmlspecialchars($str3, ENT_QUOTES) . '<br>');
    echo('ENT_NOQUOTES = ' . htmlspecialchars($str3, ENT_NOQUOTES, 'UTF-8'). ' <br>');
    
    $str4 = strip_tags($str3);
    echo(' $str4 = ' . $str4 . ' <br>');
    
    $str5 = addslashes('sejong"s\a');
    echo(' $str5 = ' . $str5 . ' <br>');
    echo(' $str5 = ' . stripslashes($str5) . '<br>');
    
    $str6 = 'se,jong,computer';
    $arr = explode(',',$str6);
    print'<pre>';
    print_r($arr);
    print '</pre>';
    $str7 = implode(', ',$arr);
    print $str7;
  ?>
  </body>
</html>