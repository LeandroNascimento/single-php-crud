<?php
@include('model/Db.class.php');

class Contact{
	
	private $first_name = '';
	private $second_name = '';
	private $city = '';
	private $anddress = '';
	private $conn;
	private $table = 'contacts';

 	public function __construct(){
 		$db = new Db;
 		$this->conn = $db->getConn();
  }

	public function all(){
		$sql = "SELECT * FROM ".$this->table;
		return $this->conn->query($sql);
	}
	public function save(){
		$sql = "INSERT INTO ".$this->table." (first_name, second_name, city) VALUES('$this->first_name','$this->second_name', '$this->city')";
		return $this->conn->query($sql);	
	}

	public function update($id){
		$sql = "UPDATE ".$this->table." SET first_name='$this->first_name',second_name='$this->second_name', city='$this->city' WHERE id=".$id;
		return $this->conn->query($sql);	
	}

	public function isValid(){
		return true;
	}

	public function find($id){
		$sql = "SELECT * FROM ".$this->table." WHERE id = ".$id;
		return $this->conn->query($sql)->fetch_assoc();
	}

	public function destroy($id){
		$sql = "DELETE FROM ".$this->table." WHERE id=".$id;
		return $this->conn->query($sql);	
	}



	public function setFirstName($first_name){
		$this->first_name = $first_name;
	}

	public function setSecondName($second_name){
		$this->second_name = $second_name;
	}

	public function setCity($city){
		$this->city = $city;
	}

}



