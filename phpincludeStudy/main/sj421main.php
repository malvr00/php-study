<?php
  ob_start();
  include 'sj421.inc.php';
  $outString = ob_get_clean();
  echo $outString;
?>