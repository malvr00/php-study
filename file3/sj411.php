<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>php ����</title>
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
      
      echo '����� ' . $cnt . ' ��° �湮�� �Դϴ�<br>';
      $len = strlen($cnt);
      $cnt = (String)$cnt;
      echo $cnt . '�� ���� ��  = ' . $len . ' <br>';
      echo '<p>�����';
      for($i = 0; $i<strlen($cnt); $i++){
        echo '<img src=./images/' . $cnt[$i] . '.gif>';
      }
      echo '��° �湮�� �Դϴ�.</p>';
      for($i=0; $i<strlen($cnt); $i++){
        echo '<img src=images/B' . $cnt[$i] . '.gif>';
      }
    ?>
  </body>
</html>