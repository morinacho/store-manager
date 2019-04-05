<?php  

	class Waists extends Controller{
		private $waistModels;

		public function __construct(){
			if (!Controller::authenticated()){ 
				redirect('home');
			}
			else{
				$this->waistModels = $this->model('Waist');
			}
		}

		public function store(){
			echo "IS inside";
			if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['create-waist'])){
				$param = ['waist-name' => trim($_POST['waist-name'])];

				if($this->waistModels->addWaist($param)){
					redirect('products/index'); 
					echo "creado";
				}
				else{
					die("FATAL ERROR");
				}
			}
		}
	}	
	
?>