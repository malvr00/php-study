<?php
  class NameAgeClass2{
    public $name;
    public $age;
    public static $cnt =0;
    const SJ = 'sejong Computer';
    public function __construct(string $name, int $age){
      $this->name = $name;
      $this->age = $age;
      self::$cnt++;
    }
    public function __destruct(){
      NameAgeClass2::$cnt--;		// self::cnt--;, self는 class 내부에서만 사용가능
      echo ' 소멸자 실행 <br>';
    }
    public function output(){
      echo ' 이름은 ' . $this->name . ' 나이는 ' . $this->age;
      echo ' score = ' . NameAgeClass2::$cnt . ', ' . self::$cnt . '<br>';
    }

    static function staticTest(){	// static 변수만 사용 가능
      echo ' 현재 객체 수는 ' . self::$cnt . ' <br>';
      echo 'SJ = ' . self::SJ . ' , ' . NameAgeClass2::SJ . '<br>;
    }
  }

  $nAge1 = new NameAgeClass2('sejong', 11);
  $nAge1->output();
	
  $nAge2 = new NameAgeClass2('computer', 22);
  $nAge2->output();

  NameAgeClass2::staticTest();
  $nAge1 = $nAge2;		// 자동소멸
  $nAge1->output();

  echo ' 상수 SJ = ' . NameAgeClass2::SJ . ' <br>';