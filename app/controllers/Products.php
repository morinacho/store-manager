<?php   

	class Products extends Controller{
		private $productModel;
		private $waistModel;

		public function __construct(){
			
			if (!Controller::authenticated()){ 
				redirect('home');
			}
			else{
				$this->productModel = $this->model('Product');
				$this->waistModel	= $this->model('Waist');
			}
		}

		public function index(){ 
			# Get products and wasit
			$products = $this->productModel->getProducts();
			$waist 	  = $this->waistModel->getWaists(); 
			$param    = [
				'products' => $products,
				'waist'	   => $waist
			];
			$this->view('products/index', $param);
		}

		public function store(){}

		public function edit(){}

		public function delete(){}
	}

?> 