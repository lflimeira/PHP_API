<?php
include('connection/connection.class.php');
/**
* 
*/
class Client
{
	//Attributes
	private $id;
	private $name;
	private $age;
	private $gender;
	private $db;
	private $method;
	function __construct($name = '', $age = '', $gender = '')
	{
		# code...
		$this->db = ConnectionDB::getInstance();
		$this->name = $name;
		$this->age = $age;
		$this->gender = $gender;
	}

	function verifyMethod($method,$route){
		switch ($method) {
		case 'GET':
			# Quando o metodo for GET, retorna o usuário.
			return self::doGet($route);
			break;
		case 'POST':
			# Quando o metodo for POST, incluí um novo usuário.
			if(empty($route[1])){
				return self::doPost();
			}else{
				return $arr_json = array('status' => 404);
			} 
			break;
		case 'PUT':
			# Quando o metodo for PUT, altera um usuário existente.
			return self::doPut($route); 
			break;
		case 'DELETE':
			# Quando o metodo for DELETE, deleta um usuário existente.
			return self::doDelete($route); 
			break;		
		default:
			# Quando o metodo for diferente dos anteriores, retorna uma mensagem de erro.
			return array('status' => 405);
      		break;
		}
	}

	function doGet($route){
		//
		$sql = 'SELECT * FROM api.client WHERE id = :id';
	    $stmt = $this->db->prepare($sql);
	    $stmt->bindValue(":id", $route[1]);
	    $stmt->execute();

	    if($stmt->rowCount() > 0)
	    {
	    	$row  = $stmt->fetch(PDO::FETCH_ASSOC);
			return $arr_json = array('status' => 200, 'client' => $row);
	    }else{
			return $arr_json = array('status' => 404);
	    }
	}
	function doPost(){
		//
		$sql = 'INSERT api.client (name,age,gender) VALUES (:name,:age,:gender)';
	    $stmt = $this->db->prepare($sql);
	    $stmt->bindValue(':name', $this->name);
	    $stmt->bindValue(':age', $this->age);
	    $stmt->bindValue(':gender', $this->gender);
	    $stmt->execute();

	    if($stmt->rowCount() > 0)
	    {
			return $arr_json = array('status' => 200);
	    }else{
			return $arr_json = array('status' => 400);
	    }
		
	}
	function doPut($route){
		$sql = 'UPDATE api.client 
						SET 
						name = :name
						, age = :age
						, gender = :gender
						WHERE id = :id';
	    $stmt = $this->db->prepare($sql);
	    $stmt->bindValue(':name', $this->name);
	    $stmt->bindValue(':age', $this->age);
	    $stmt->bindValue(':gender', $this->gender);
	    $stmt->bindValue(":id", $route[1]);
	    $stmt->execute();

	    if($stmt->rowCount() > 0)
	    {
			return $arr_json = array('status' => 200);
	    }else{
			return $arr_json = array('status' => 400);
	    }

	}
	function doDelete($route){
		
	}
}
?>