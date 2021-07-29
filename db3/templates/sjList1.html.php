<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title><?=$title?></title>
  </head>
  <body>
    <h1><?=$title?></h1>
    <?php
      if(isset($errMsg)):?>
        <p>
        <?php echo $errMsg; ?>
        </p>
      <?php else: ?>
          <?=$outString ?>
      <?php endif; ?>
  </body>
</html>
