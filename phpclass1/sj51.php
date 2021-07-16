<?php
  class NameAgeClass{
    private $name = '선조이름';
    public $age = 77;
    protected $age2;
    public function __construct(){	// 생성자
      $this->name = '기본이름';	  
      echo ' 생성자 이름은 ' . $this->name . ' 입니다.<br>';
    }    	  
    public function __destruct(){	// 소멸자
      echo ' 소멸자 생성 ';
    }
    public function output(){
      echo ' 이름은 ' . $this->name . ' 나이는 '. $this->age . '<br>';
    }
    public function setNameAge(string $name, int $age){
      $this->name = $name;
      $this->age = $age;
    }
    public function getName(){
      retrun $this->name;
    }
    final public function globalTest(){
      global $age;			// global 변수는 class 변수 아님
      echo ' global $age = ' . $age . ' <br>';
    }
  }
  $age = 222;
  $nAge1 = new NameAgeClass();
  $nAge1->age = 111;
  $nAge1->setNameAge('sejong',33);
  echo 'getName() = ' . $nAge1->getName(). '<br>';
  $nAge1->output();
  $nAge1->globalTest();
  $nAge2 = $nAge1;
  $nAge1->setNameAge('computer', 20);
  $nAge2->output();