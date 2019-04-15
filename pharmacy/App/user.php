<?php

class user {

  private
  $ID, $name, $role, $email, $password;
  private $core;


  function __construct($name, $role, $email, $password){
    $this->name = $name;
    $this->email=$email;
		$this->password = $password;
		$this->role = $role;
		$this->core = Core::getConnection();
	}


  public function geteID(){
		return $this->ID;
	}
	public function getname(){
		return $this->name;
	}
	public function setname($employeename){
		$this->name = $name;
	}

  public function getemail(){
    return $this->email;
  }
  public function setemail($email){
    $this->email = $email;
  }




public function getpassword(){
    return $this->password;
  }
  public function setpassword($password){
    $this->password = $password;
  }

public function getrole(){
    return $this->role;
  }
  public function setrole($role){
    $this->role = $role;
  }







  public function adduser(){
    $query = "INSERT INTO `users` (name, email, password)
          VALUES (:name, :email, :password)
    ";
    try {
      $stmt = $this->core->prepare($query);
      $res = $stmt->execute([
        ':name' => $this->getname(),
        ':email' => $this->getemail(),
        ':password' => $this->getpassword(),
       
      ]);

    } catch (\Exception $e) {
      return $e->getMessage();
    }
    return $res;
  }

  public function selectuser($id){
    $query = "SELECT * FROM employee where employeeID = ?";
    $stmt = $this->core->prepare($query);
    $stmt->execute(array($id));
    return  $stmt->fetch();
  }

public function login($email,$password){
   $sql = "SELECT * FROM `users` where email = ? AND password = ? limit 1" ;
    $stmt = $this->core->prepare($sql);
    $stmt->execute(array($email,$password));
    if($stmt->rowcount() == 0){
      return -1;
    }else{
      $user = $stmt->fetch();
      return $user['role'];
    }

}









  public  function selectuserbyemail( $email ){
    $query = "SELECT * FROM users where email = ?";
    $stmt = $this->core->prepare($query);
    $stmt->execute(array($email));
    $user =  $stmt->fetch();
     return $user['id'];
  }


}
