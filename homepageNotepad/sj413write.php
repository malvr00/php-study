<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>메모 저장</title>
  </head>
  <body>
  <?php
    $content = htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8');
    
    if(!$content){
      echo '<script type="text/javascript">
        window.alert("메모 내용을 입력하세요.")
        history.go(-1)
        </script>';
      exit;
    }
    if($fp=fopen('memo1.dat', 'a')){
      fwrite($fp, $content."\n");
      fclose($fp);
      echo '<script type="text/javascript">
              location ="sj413.php";
              </script>';
    }
    else{
      echo '<script type="text/javascript">
              window.alert("file 이상");
              history.go(-1)
              </script>';
    }
  ?>
  </body>
</html>