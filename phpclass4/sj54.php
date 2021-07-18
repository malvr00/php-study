<?php
  abstract class AbsClass{
    private $name;
    protected $age;
    public function __construct(){
      $this->name = '기본이름';
      $this->age=77;
    }
    public function getName(){
      return $this->name;
    }
    public abstract function output();
  }
  
  class AbsClass2 extends AbsClass{
    public function output(){
      echo '자손에서 ' . $this->getName().  ', ' . $this->age . ' <br>';
    }
  }
  
  $obj1 = new absClass2();
  $obj1->output();
  
  echo 'try - catch test<br>';
  
  function tryDivide($x, $y){
    if($y == 0){
      throw new Exception('0으로 나눌수 없어요.');
    }
    return $x / $y;
  }
  
  try{
    echo tryDivide(10,4) . ' <br>';
    echo tryDivide(10,0) .'<br>';
  }catch(Exception $ex){
    echo '오류 발생: ' . $ex->getMessage() .' <br>';
  }
  echo 'end try-catch test<br>';
?>