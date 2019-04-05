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
			if($_SERVER['REQUEST_METHOD'] == "POST"  ){
				$param = [
					'user-name' 	=> trim($_POST['user-name']),
					'user-lastname' => trim($_POST['user-lastname']),
					'user-phone' 	=> trim($_POST['user-phone']),
					'user-address' 	=> trim($_POST['user-address'])
				];
				if($this->userModel->addUser($param)){
					redirect('users/index');
				}
				else{
					die("FATAL ERROR");
				}
		}

	}
?>