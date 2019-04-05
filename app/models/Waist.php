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
	}
?>