<?php   

	class Products extends Controller{
		private $productModel;

		public function __construct(){
			$this->productModel = $this->model('Product');
		}

		public function index(){ 
			// Get products
			$products = $this->productModel->getProducts();
			$param = [
				'products' => $products
			];
			$this->view('products/index', $param);
		}

		public function store(){}

		public function edit(){}

		public function delete(){}
	}

?> 