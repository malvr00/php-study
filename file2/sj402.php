<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>php ����</title>
  </head>
  <body>
    <?php
      $file_name = './test402.txt';
      
      if(!($file=fopen($file_name, 'w'))){
        echo $fname. ' ���� ���� �߻�<br>';
        exit;
      }
      $data = '<p>û�ֿ���<br>������ǻ�� �п��� <br> �ֽ��ϴ�.</p>';
      $cnt = fwrite($file, $data);
      echo $cnt . 'Byte�� ' . $file_name . ' �� ��µ� <br>';
      fclose($file);
      
      if(!$file=fopen($file_name, 'r')){
        echo '<p> file not found</p>';
      }
      else{
        echo 'File�� ��ϵ� ������ <br>';
        fpassthru($file);
      }
    ?>
  </body>
</html>