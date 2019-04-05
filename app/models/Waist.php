<?php  

	class Waist{
		private $db;
		
		public function __construct(){
			$this->db = new DataBase;
		}

		public function getWaists(){
			$this->db->query('SELECT * FROM  waist');

			$response = $this->db->getRecords();
			return $response;
		}

		public function addWaist($param){
			$this->db->query('INSERT INTO waist (waist_name) VALUES (:waist_name)');

			# Link values
			$this->db->bind(':waist_name', $param['waist-name']);

			# Run
			if($this->db->execute()){
				return true;
			}
			else{
				return false;
			}
		}
	}
?>