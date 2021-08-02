<!DOCTYPE hmtl>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/sj6form.css">
    <title><?=$title?></title>
  </head>
  <body>
    <header>
      <h1><?=$title?></h1>
    </header>
    <nav>
      <ul>
        <li><a href="sj6index.php">Home</a></li>
        <li><a href="sj6index.php?func=stuList">Student Status</a></li>
        <li><a href="sj6index.php?func=stuAddUpdate">Student input</a></li>
        <li><a href="sj6index.php?func=scoreList">View score</a></li>
        <li><a href="sj6index.php?func=scoreAddUpdate">Enter score</a></li>
      </ul>
    </nav>
    <main>
      <?=$outString?>
    </main>
    <footer>
      <h4>Sejong Computer Academy Sachang-dong, Cheongju-si, Chungbuk </h4>
    </footer>
  </body>
</html>