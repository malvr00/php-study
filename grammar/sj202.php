<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>switch ����</title>
  </head>
  <body>
    <h2>switch �� ����</h2>
  <?php
    $a = 1;
    switch($a)
    {
      case 1:
        echo'<p>a�� 1 </p>';
      case 2:
        echo '<p>a �� 2</p>';
        break;
      default:
        echo '<p>Default</p>';
        break;
    }
    
    $a = '����';
    switch($a)
    {
      case '����';
        echo '<p> ������ ���õ�</p>';
        break;
      case '����ó��';
        echo '<p>����ó�� ����</p>';
        break;
      default;
        echo '<p>default</p>';
        break;
    }
  ?>
  </body>
</html>