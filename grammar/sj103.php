<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>php ���� 3</title>
  </head>
  <body>
    <h2>echo, print test</h2>
  <?php
    echo ("<p>echo�� ��ȣ ���.<br>");
    echo "��ȣ ���� ���<br>";
    echo '���� �ο� ��ȣ ���<br>';
    echo "echo�� �����ٿ�
        ����� �����մϴ�.<br>";
    echo " echo�� �����ٿ� ".
      "����� �����մϴ�.</p>";
    $var = 123;
    
    echo "<p>php ���� var = $var <br>";
    echo 'php ���� test var = $var<br>';
    echo 'php ���� test var = ' . $var . '<br>';
    echo "php ���� test \$var = $var<br>";
    echo 'sejong\'s sejong"s <br>';
    
    print '<p>print ��ȣ ����<br>';
   // printf ' ��ȣ ���� �׽�Ʈ<br>';
    printf('printf�� ��ȣ ���� ����<br>');
    printf('2 ���� = %b, 10����= %d, ����= %c, �Ǽ�= %10.2f<br>',10,123,65,12.57);
    print ('end<p>');
    exit;
  ?>
  <h2> exit ������ ��� �ɱ�</h2>
  <?
    echo '<p>php ����</p>';
  ?>
  </body>
</html>