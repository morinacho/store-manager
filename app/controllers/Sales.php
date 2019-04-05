<?php   

	class Sales extends Controller{
		
		public function __construct(){
			$this->view("sales/index");
			if (!Controller::authenticated()){ redirect('home');}
		}

		public function index(){}

		public function store(){}

		public function edit(){}

		public function delete(){}
	}

?>