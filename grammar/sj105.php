<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>php 에제 5</title>
  </head>
  <body>
    <h2>기호상수, 환경변수 유동(가변)변수</h2>
  <?php
    define('SJ', 'sejong computer academy');
    define('MAX', 65);
    
    echo '<p>SJ = ' . SJ . '<br>';
    echo 'MAX = ' , MAX , ' <br>';
    
    $mm = MAX;
    $aa = 'SJ = '.SJ.'<br>';
    
    echo '\$mm='.$mm.', \$aa = '.$aa.'</p>';
    
    echo '내장상수<br>';
    echo 'PHP_VERSION = ', PHP_VERSION, '<br>';
    echo 'OS = ',PHP_OS, '<br>';
    echo '현재 File명 = ',_FILE_,' <br>';
    echo '현재 행번호 = ',_LINE_,' <br>';
    
    echo('환경변수<br>');
    echo 'SCRIPT_NAME = '. $_SERVER['SCRIPT_NAME'].'<br>';
    echo 'SERVER_NAME = '. $_SERVER['SERVER_NAME'].'<br>';
    echo 'REMOTE_ADDR = '.$_SERVER['REMOTE_ADDR'].'<br>';
    
    echo('유동변수<br>');
    $ss = 'sejong';
    $$ss = '세종정보처리';
    echo '$$ss = '.$ss.' <br>';
    echo '$ss = '.$sejong.'';
  ?>
  </body>
</html>