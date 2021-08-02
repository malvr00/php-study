<?php
  class TableManager{   // 앞에서 만든 함수 Class 내부로
    private $pdo;
    private $table;
    private $keyField;
    
    public function __construct($pdo, $table, $keyField){
      $this->pdo = $pdo;
      $this->table = $table;
      $this->keyField = $keyField;
    }
    public function selectAll(){
      $sql = 'SELECT * FROM `'. $this->table.'`';
      $stmt = $this->myQuery($sql);
      return $stmt->fetchAll();
    }
    public function selectID($id){
      $sql = 'SELECT * FROM `'.$this->table.'` WHERE `' . $this->keyField . '` = :id';
      $param = [':id'=>$id];
      $stmt = $this->myQuery($sql, $param);
      return $stmt->fetch();
    }
    
    // Query 처리
    public function myQuery($sql, $param =[] ){ 
      $stmt = $this->pdo->prepare($sql);
      $stmt->execute($param);
      return $stmt;
    }
    
    // 자료추가
    public function insertData($param){
      $sql = 'INSERT INTO `' . $this->table . '` SET ';
      foreach($param as $key=>$value){
        $sql .= '`' .$key . '`= :' . $key .', ';
      }
      $sql = rtrim($sql, ', ');
      
      $this->myQuery($sql, $param);
    }
    
    // 자료삭제
    public function deleteData($id){
      $param = [':id'=>$id];
      $sql = 'DELETE FROM `' . $this->table . '` WHERE `' . $this->keyField . '`=:id';
      $this->myQuery($sql, $param);
    }
    
    // 자료 수정
    public function updateData($param){
      $sql = 'UPDATE `' . $this->table . '` SET ';
      foreach($param as $key=>$value){
        $sql .= '`' . $key . '`= :' . $key . ', ';
      }
      $sql = rtrim($sql, ', ');
      $sql .= ' WHERE `' . $this->keyField . '`=:'.$this->keyField;
      
      $this->myQuery($sql, $param);
    }
  }