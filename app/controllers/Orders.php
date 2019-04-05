<?php   

	class Orders extends Controller{
		
		public function __construct(){
			if (!Controller::authenticated()){ 
				redirect('home');
			}
			else{ 
				$this->view("orders/index"); 
			}
		}

		public function index(){}

		public function store(){}

		public function edit(){}

		public function delete(){}
	}

?>