<?php  

	class Product{

		private $db;
		
		public function __construct(){
			$this->db = new DataBase;
		}

		public function getProducts(){
			$this->db->query('SELECT * FROM  product');

			$response = $this->db->getRecords();
			return $response;
		}
	}

?>