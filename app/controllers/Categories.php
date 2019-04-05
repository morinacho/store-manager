<?php   

	class Categories extends Controller{
        private $categoryModel;
        
		public function __construct(){
			if(!Controller::authenticated()){
                redirect('home');
            }
		}

		public function index(){
			 
        }
        
        public function store(){}
	}

?>