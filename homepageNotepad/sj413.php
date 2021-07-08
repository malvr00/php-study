<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>메모장</title>
    <link rel="stylesheet" href="./css/form2.css" />
  </head>
  <body>
    <header>
      <h1>1 줄짜리 메모장</h1>
    </header>
    
    <?php
      $fname = './memo1.dat';
      if(!file_exists($fname)){
        $fp = fopen($fname,'w');
        fclose($fp);
      }
      $data=file($fname);
      $cnt=count($data);
      echo '메모의 갯수는 cnt = ' . $cnt . ' <hr>';
      
      while($list=each($data)){
        $i = $list['key']+1;
        $i = $list[0] + 1;
        echo '<h4>' . $i . ' 번째 메모: ' . $list['value'] . '</h4> ';
      }
    ?>
    <hr>
    <form action="sj413write.php" method="POST">
      <label for="content1">메모 남기기:</label>
      <input type="text" name="content" id="content1" autofocus=""/>
      <p><input type="submit" value="메모저장하기"></input></p>
    </form>
  </body>
</html>