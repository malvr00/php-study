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
}