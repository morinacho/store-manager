<?php  

	class User{
		private $db;
		
		public function __construct(){
			$this->db = new DataBase;
		}

		public function getUsers(){
			$this->db->query('SELECT * FROM  buyer');

			$response = $this->db->getRecords();
			return $response;
		}

		public function getUser($id){
			$this->db->query('SELECT * FROM  buyer WHERE buyer_id =' . $id);

			$response = $this->db->getRecord();
			return $response;
		}

		public function addUser($param){
			$this->db->query('INSERT INTO buyer (buyer_name, buyer_lastname, buyer_phone, buyer_address)
									 VALUES (:buyer_name, :buyer_lastname, :buyer_phone, :buyer_address)');

			# Link values
			$this->db->bind(':buyer_name', $param['user-name']);
			$this->db->bind(':buyer_lastname', $param['user-lastname']);
			$this->db->bind(':buyer_phone', $param['user-phone']);
			$this->db->bind(':buyer_address', $param['user-address']);

			# Run
			if($this->db->execute()){
				return true;
			}
			else{
				return false;
			}
		}

		public function getByEmail($email){
			$email =  $this->db->deleteSpecialChars($email,'email'); 
			$this->db->query('SELECT * FROM  user WHERE user_email = :email');
			$this->db->bind(':email', $email);

			$response = $this->db->getRecord();
			return $response;
		}

		public function userRecord($param){
			$this->db->query('INSERT INTO user (user_nick, user_email, user_password)
									 VALUES (:user_nick, :user_email, :user_password)');

			# Link values
			$this->db->bind(':user_nick', $param['user-nick']);
			$this->db->bind(':user_email', $param['user-email']);
			$this->db->bind(':user_password', $param['user-password']);

			# Run
			if($this->db->execute()){
				return true;
			}
			else{
				return false;
			}
		}
	}
#buyer_image
?>
