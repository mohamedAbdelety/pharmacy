<?php

class item {

  private
  $ID, $name, $type, $price, $description;
  private $core;


  function __construct($name, $type, $price, $description){
    $this->name = $name;
    $this->type=$type;
		$this->price = $price;
		$this->description = $description;
		$this->core = Core::getConnection();
	}


  public function geteID(){
		return $this->ID;
	}
	public function getname(){
		return $this->name;
	}
	public function setname($name){
		$this->name = $name;
	}

  public function gettype(){
    return $this->type;
  }
  public function settype($type){
    $this->type = $type;
  }




public function getprice(){
    return $this->price;
  }
  public function setprice($price){
    $this->price = $price;
  }

public function getdescription(){
    return $this->description;
  }
  public function setdescription($description){
    $this->description = $description;
  }







  public function additem(){
    $query = "INSERT INTO `item` (name, type, price, description)
          VALUES (:name, :type, :price, :description)
    ";
    try {
      $stmt = $this->core->prepare($query);
      $res = $stmt->execute([
        ':name' => $this->getname(),
        ':type' => $this->gettype(),
        ':price' => $this->getprice(),
        ':description' => $this->getdescription(),
      ]);

    } catch (\Exception $e) {
      return $e->getMessage();
    }
    return $res;
  }

public function allitem(){
    $query = "SELECT * FROM item";
    $stmt = $this->core->prepare($query);
    $stmt->execute(array());
    return $items = $stmt->fetchall();
}



  public function searchitem($value,$sortType, $sortby){
    $sql = "SELECT * FROM `item` where `name` Like :value OR `type` Like :value OR `price` Like :value ORDER BY `$sortby` $sortType" ;
    $stmt = $this->core->prepare($sql);
    $stmt->execute([':value' => "%".$value. "%"]);
    return $stmt->fetchAll();
  }


   public function deleteitem($id){
    $query = "DELETE FROM `item` WHERE id = ?";
    try {
      $stmt = $this->core->prepare($query);
      $res = $stmt->execute(array($id));

    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }


  public function selectitem($id){
    $query = "SELECT * FROM item where id = ?";
    $stmt = $this->core->prepare($query);
    $stmt->execute(array($id));
    return  $stmt->fetch();
  }


  public function updateitem($name,$type,$price ,$description,$id){
    $query = "UPDATE item SET name = ? , type = ? , price = ? ,description = ?  WHERE id = ? ";
    $stmt = $this->core->prepare($query);
    $res = $stmt->execute(array($name,$type,$price,$description,$id));
  }
  public function buyitem($item_id,$user_id){
     $query = "INSERT INTO `buyes` (user_id, item_id)
          VALUES (:user_id, :item_id)
    ";
    try {
      $stmt = $this->core->prepare($query);
      $res = $stmt->execute([
        ':user_id' => $user_id,
        ':item_id' => $item_id,
      ]);

    } catch (\Exception $e) {
      return $e->getMessage();
    }
    return $res;
  }



}
