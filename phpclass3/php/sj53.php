<?php
  include_once __DIR__ . '/../includes/NameAgeClass.php';
  
  class BirthdayClass extends NameAgeClass{
    public $year;
    public $month;
    public $day;
    
    public function __construct(){
      parent::__construct();
      $this->year = 1989;
      $this->month = 4;
      $this->day = 1;
      echo '자손 생성자에서 age = ' . $this->age .' <br>';
    }
    public function __destruct(){
      echo '자손 소멸자 실행<br>';
      //parent::__destruct();
    }
    
    public function output(){
      echo '자손에서 출력 : ' . $this->getName() . ' , '. $this->year. ','.
      $this->month. ' , '. $this->day . ' <br>';
    }
    public function output2(){
      echo '자손에서 선조Method 호출 ';
      parent::output();
    }
//    public function globalTest(){}
  }
  
  $bDay = new BirthdayClass();
  $bDay->output();
  $bDay->setNameAge('자손', 33);
  $bDay->output();
  $bDay->output2();
?>