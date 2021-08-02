<?php
  class TableManager{   // �տ��� ���� �Լ� Class ���η�
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
    
    // Query ó��
    public function myQuery($sql, $param =[] ){ 
      $stmt = $this->pdo->prepare($sql);
      $stmt->execute($param);
      return $stmt;
    }
    
    // �ڷ��߰�
    public function insertData($param){
      $sql = 'INSERT INTO `' . $this->table . '` SET ';
      foreach($param as $key=>$value){
        $sql .= '`' .$key . '`= :' . $key .', ';
      }
      $sql = rtrim($sql, ', ');
      
      $this->myQuery($sql, $param);
    }
    
    // �ڷ����
    public function deleteData($id){
      $param = [':id'=>$id];
      $sql = 'DELETE FROM `' . $this->table . '` WHERE `' . $this->keyField . '`=:id';
      $this->myQuery($sql, $param);
    }
    
    // �ڷ� ����
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