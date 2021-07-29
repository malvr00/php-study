<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Message</title>
  </head>
  <body>
    <?php if(isset($strMsg)):?>
              <p>
              <?php echo $strMsg; ?>
              <?=strMsg;?>
              </p>
    <?php else: ?>
            <p>
            OK<br>
            </p>
    <?php endif; ?>
  </body>
</html>