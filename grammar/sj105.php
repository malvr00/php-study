<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>php ���� 5</title>
  </head>
  <body>
    <h2>��ȣ���, ȯ�溯�� ����(����)����</h2>
  <?php
    define('SJ', 'sejong computer academy');
    define('MAX', 65);
    
    echo '<p>SJ = ' . SJ . '<br>';
    echo 'MAX = ' , MAX , ' <br>';
    
    $mm = MAX;
    $aa = 'SJ = '.SJ.'<br>';
    
    echo '\$mm='.$mm.', \$aa = '.$aa.'</p>';
    
    echo '������<br>';
    echo 'PHP_VERSION = ', PHP_VERSION, '<br>';
    echo 'OS = ',PHP_OS, '<br>';
    echo '���� File�� = ',_FILE_,' <br>';
    echo '���� ���ȣ = ',_LINE_,' <br>';
    
    echo('ȯ�溯��<br>');
    echo 'SCRIPT_NAME = '. $_SERVER['SCRIPT_NAME'].'<br>';
    echo 'SERVER_NAME = '. $_SERVER['SERVER_NAME'].'<br>';
    echo 'REMOTE_ADDR = '.$_SERVER['REMOTE_ADDR'].'<br>';
    
    echo('��������<br>');
    $ss = 'sejong';
    $$ss = '��������ó��';
    echo '$$ss = '.$ss.' <br>';
    echo '$ss = '.$sejong.'';
  ?>
  </body>
</html>