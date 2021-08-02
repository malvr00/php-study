<?php
class StudentController{
  private $stuTable;
  private $scoreTable;
  
  public function __construct($stuTable, $scoreTable){
    $this->stuTable = $stuTable;
    $this->scoreTable = $scoreTable;
  }
  // sj6index.php에서 처리하던 내용
  public function home(){
    $title = 'Grade management';
    //ob_start();
    //include __DIR__ . '/../templates/sj6home.html.php';
    //$outString = ob_get_clean();
    //return ['outString'=>$outString, 'title'=>$title];
    return ['tempName'=>'sj6home.html.php','title'=>$title];
  }
  
  // sj6scoreList.php에서 처리하던 내용
  public function scoreList(){
    $scoreResult = $this->scoreTable->selectAll();
    $result=[];
    foreach($scoreResult as $row){
      $stuRow = $this->stuTable->selectID($row['sc_no']);
      $result[] = [
          'sc_id'=>$row['sc_id'],
          'sc_no'=>$row['sc_no'],
          'stu_name'=>$stuRow['stu_name'],
          'sc_cpp'=>$row['sc_cpp'],
          'sc_java'=>$row['sc_java'],
          'sc_av'=>$row['sc_av'],
          'sc_grade'=>$row['sc_av']];
    }
    $title = 'student score status';
//    ob_start();
//   include __DIR__ .'/../templates/sj6scoreList.html.php';
//    $outString = ob_get_clean();
//    return['outString'=>$outString, 'title'=>$title];
    return ['tempName'=>'sj6scoreList.html.php','title'=>$title, 'result'=>$result];
  }
  
  // sj6scoreDelete.php에서 처리하던내용
  public function scoreDelete(){
    $this->scoreTable->deleteData($_POST['sc_id']);
    header('location: sj6index.php?func=scoreList');
  }
  
  // sj6scoreAddUpdate.php에서 처리하던 내용
  public function scoreAddUpdate(){
    if(isset($_POST['sc_id'])){
      if($_POST['sc_id'] == ''){
        $this->scoreTable->insertData($_POST);
      }else{
        $this->scoreTable->updateData($_POST);
      }
      header('location: sj6index.php?func=scoreList');
    }
    if(isset($_GET['id'])){
       $row = $this->scoreTable->selectID($_GET['id']);
       $title2 = ' MODIFY';
       $title = ' Score' . $title2;
       return['tempName'=>'sj6scoreForm3.html.php', 'title'=>$title, 'title2'=>$title2, 'row'=>$row];
     }else{
       $title2 = ' INPUT';
       $title = 'score' . $title2;
       return ['tempName'=>'sj6scoreForm3.html.php', 'title'=>$title, 'title2'=>$title2];
     }
//    $title = 'Score' . $title2;
//    ob_start();
//    include __DIR__ . '/../templates/sj6scoreForm3.html.php';
//    $outString = ob_get_clean();
  }
  
  // sj6stuList
  public function stuList(){
    $result = $this->stuTable->selectAll();
    $title = 'Student Status';
    
    return ['tempName'=>'sj6stuList.html.php', 'title'=>$title, 'result'=>$result];
  }
  
  public function stuDelete(){
    $this->stuTable->deleteData($_POST['stu_no']);
    header('location: sj6index.php?func=stuList');
  }
  
  public function stuAddUpdate(){
    if(isset($_POST['stu_id'])){
      if($_POST['stu_id'] == ''){
        $this->stuTable->insertData($_POST);
      }else{
        $this->stuTable->updateData($_POST);
      }
      
      header('location: sj6index.php?func=stuList');
    }
    if(isset($_GET['id'])){
       $row = $this->stuTable->selectID($_GET['id']);
       $title2 = ' Modify';
       $title = 'Student' . $title2;
       return ['tempName'=>'sj6stuForm3.html.php', 'title'=>$title, 'title2'=>$title2, 'row'=>$row];
     }else{
       $title2 = ' Input';
       $title = 'Student' .$title2;
       return ['tempName'=>'sj6stuForm3.html.php', 'title'=>$title, 'title2'=>$title2];
     }
//     $title = 'Student' . $title2;
//     ob_start();
//     include __DIR__ .'/../templates/sj6stuForm3.html.php';
//     $outString = ob_get_clean();
//    return ['outString'=>$outString, 'title'=>$title];
  }
}