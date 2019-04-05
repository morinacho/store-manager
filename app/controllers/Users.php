<?php   

	class Users extends Controller{
		private  $userModel;

		public function __construct(){
			if (!Controller::authenticated()){ 
				redirect('home');
			}
			else{
				$this->userModel = $this->model('User');
			}
		}

		public function index(){
			// Get users
			$users = $this->userModel->getUsers();
			$param = [
				'users' => $users
			];
			$this->view('users/index', $param);
		}
 
		public function store(){
			if($_SERVER['REQUEST_METHOD'] == "POST"){
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
			else{
				$param = [
					'user-name' 	=> '',
					'user-lastname' => '',
					'user-phone' 	=> '',
					'user-address' 	=> ''
				];
			}
		}

		public function show($id){
			// Get user
			$user = $this->userModel->getUser($id);
			$param = [
				'user' => $user
			];
			$this->view('users/user-profile', $param);
		}

		public function edit(){}

		public function delete(){}
	}

?>