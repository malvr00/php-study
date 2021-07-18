<?php
  interface TestInterface1{
    const SJ = '세종컴퓨터학원';
    public function setNameAge($name, $age);
    public function output();
  }
  interface TestInterface2{
    public function getName();
  }
  
  class testClass1 implements testInterface1{
    private $name;
    private $age;
    public function setNameAge($name, $age){
      $this->name = $name;
      $this->age = $age;
    }
    public function output(){
      echo'자손1 에서' . $this->name . ', ' . $this->age. ' <br>';
    }
  }
  class testClass2 implements testInterface1, testInterface2{
    private $name;
    private $age;
    public function getName(){
      return $this->name;
    }
    public function setNameAge($name, $age){
      $this->name = $name;
      $this->age = $age;
    }
    public function output(){
      echo '자손2에서 ' . $this->getName() . ', ' .$this->age . '<br>';
    }
  }
  
  $obj1 = new testClass1();
  $obj1->setNameAge('sejong', 33);
  $obj1->output();
  $obj2 = new testClass2();
  $obj2->setNameAge('computer', 22);
  $obj2->output();
  echo '이름 = ' . $obj2->getName(). ' ,' . TestInterface1::SJ;
?>