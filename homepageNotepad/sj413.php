<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>�޸���</title>
    <link rel="stylesheet" href="./css/form2.css" />
  </head>
  <body>
    <header>
      <h1>1 ��¥�� �޸���</h1>
    </header>
    
    <?php
      $fname = './memo1.dat';
      if(!file_exists($fname)){
        $fp = fopen($fname,'w');
        fclose($fp);
      }
      $data=file($fname);
      $cnt=count($data);
      echo '�޸��� ������ cnt = ' . $cnt . ' <hr>';
      
      while($list=each($data)){
        $i = $list['key']+1;
        $i = $list[0] + 1;
        echo '<h4>' . $i . ' ��° �޸�: ' . $list['value'] . '</h4> ';
      }
    ?>
    <hr>
    <form action="sj413write.php" method="POST">
      <label for="content1">�޸� �����:</label>
      <input type="text" name="content" id="content1" autofocus=""/>
      <p><input type="submit" value="�޸������ϱ�"></input></p>
    </form>
  </body>
</html>