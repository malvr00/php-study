<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>php ����</title>
  </head>
  <body>
    <h2>File ���</h2>
    <?php
      $file_name = './test1.txt';
      $exist = file_exists($file_name);
      echo ('exist = ' . $exist . '<br>');
      if(!$exist){
        echo ($file_name . ' file�� �����ϴ�. <br>');
        exit;
      }
      $data = file($file_name);
      $cnt = count($data);
      echo '<p>' . $file_name . ' �� ���� (' . $cnt. ' ��)<br>';
      for($i=0; $i<$cnt; $i++){
        echo $i . '��:' . $data[$i] . ' <br>';
      }
      echo '</p>';
      if(!($file=fopen($file_name,'rw'))){
        echo($file_name . ' file not found !!');
      }
      else{
        $data = fread($file, 11);
        echo('10 Byte�� ���<br>' . $data . ' <br>');
        fclose($file);
      }
      if(!$file=fopen($file_name, 'rb')){
        echo 'file not found';
      }
      else{
        $fSize = filesize($file_name);
        echo ' file ũ��� ' . $fSize . '�Դϴ�.<br>';
        echo '----- fpasstru�� ��� -----<br>';
        fpassthru($file);
      }
    ?>
  </body>
</html>