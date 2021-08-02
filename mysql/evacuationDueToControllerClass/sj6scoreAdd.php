<?php
  if(isset($_POST['sc_no'])){
    try{
      include_once __DIR__ . '/../includes/DbConnect.php';
      include_once __DIR__ . '/../includes/UserFunctions.php';
      //    print_r($_POST['sc_no']);
      if(stuCount($pdo, $_POST['sc_no'])){
        
      // 함수분리
      /*  $sql = 'INSERT INTO `score` SET `sc_no` = :sc_no,
        `sc_cpp` = :sc_cpp, `sc_java` = :sc_java';
        
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':sc_no', $_POST['sc_no']);
        $stmt->bindValue(':sc_cpp', $_POST['sc_cpp']);
        $stmt->bindValue(':sc_java', $_POST['sc_java']);
        $stmt->execute();*/
        
        //insertScore($pdo, ['sc_no'=>$_POST['sc_no'], 'sc_cpp'=>$_POST['sc_cpp'], 'sc_java'=>$_POST['sc_java']]);
        insertScore($pdo, 'score', $_POST);
        header('location: sj6scoreList.php');
      }else{
        $title = 'Enter score';
        $outString = '<p>no students</p>';
      }
    }
    catch(PDOException $e){
      $outString = '<p>error : ' . $e->getMessage(). $e->getFile() . ' Line : ' . $e->getLine() . '</p>';
    }
  }else{
    $title = ' Enter score ';
    ob_start();
    include __DIR__ . '/../templates/sj6scoreForm.html.php';
    $outString = ob_get_clean();
  }
  include __DIR__ . '/../templates/sj6layout.html.php';