<?php
  $title = '방명록 입력';
  
  ob_start();
  
  include __DIR__ . '/../templates/sj43input.html.php';
  
  $outString = ob_get_clean();
  
  include __DIR__ . '/../templates/sj43layout.html.php';
?>