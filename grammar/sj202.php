<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>switch 예제</title>
  </head>
  <body>
    <h2>switch 문 연습</h2>
  <?php
    $a = 1;
    switch($a)
    {
      case 1:
        echo'<p>a는 1 </p>';
      case 2:
        echo '<p>a 는 2</p>';
        break;
      default:
        echo '<p>Default</p>';
        break;
    }
    
    $a = '세종';
    switch($a)
    {
      case '세종';
        echo '<p> 세종이 선택됨</p>';
        break;
      case '정보처리';
        echo '<p>정보처리 선택</p>';
        break;
      default;
        echo '<p>default</p>';
        break;
    }
  ?>
  </body>
</html>