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
      echo '�ڼ� �����ڿ��� age = ' . $this->age .' <br>';
    }
    public function __destruct(){
      echo '�ڼ� �Ҹ��� ����<br>';
      //parent::__destruct();
    }
    
    public function output(){
      echo '�ڼտ��� ��� : ' . $this->getName() . ' , '. $this->year. ','.
      $this->month. ' , '. $this->day . ' <br>';
    }
    public function output2(){
      echo '�ڼտ��� ����Method ȣ�� ';
      parent::output();
    }
//    public function globalTest(){}
  }
  
  $bDay = new BirthdayClass();
  $bDay->output();
  $bDay->setNameAge('�ڼ�', 33);
  $bDay->output();
  $bDay->output2();
?>