<?php

  function outPage($page){
    extract($page);   // 배열 내용을 key를 변수명으로 하여 추출
    ob_start();
    include __DIR__ . '/../templates/' . $tempName;   // extract()로 추출한 경우
    return ob_get_clean();
  }
try{  // front Controller
  include_once __DIR__ . '/../includes/DbConnect.php';
  include_once __DIR__ . '/../classes/TableManager.php';
  include_once __DIR__ . '/../controllers/StudentController.php';
  
  $stuTable = new TableManager($pdo, 'student', 'stu_no');
  $scoreTable = new TableManager($pdo, 'score', 'sc_id');
  $stuController = new StudentController($stuTable, $scoreTable);
  
/*  if(isset($_GET['add'])){
    $page = $stuController->scoreAddUpdate();  
  }elseif(isset($_GET['del'])){
    $page = $stuController->scoreDelete();
  }elseif(isset($_GET['list'])){
    $page = $stuController->scoreList();
  }else{
    $page = $stuController->home();
  }*/   // 1차
  
  $funcName = $_GET['func']?$_GET['func']:'home';
  $page = $stuController->$funcName();
 // print_r($page);
  $title = $page['title'];
  
  $outString = outPage($page);
  
} catch(Exception $ex){
  $outString = '<p>Error: ' .$e->getMessage(). $e->getFile().' Line: '. $e->getLine() . ' </p>';  
}
include __DIR__ . '/../templates/sj6layout.html.php';