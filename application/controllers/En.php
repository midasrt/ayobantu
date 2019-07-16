<?php
class En extends CI_Controller {

	function __construct(){
		parent :: __construct();
		$this->load->model('Login');
		$this->load->model('campaign');
		$this->load->model('user');
		$this->load->model('categories');
	}

	public function index()
	{
		if($this->session->userdata('login')){
			redirect('En/home');
		}
		else {
			$data['page'] = 'fe/home';
			$this->load->view('fe/main',$data);
		}
	}

	function register(){
		if($this->session->userdata('login')){
			redirect('En/home');
		}
		else{
			$data['page'] = "fe/register";
			$this->load->view('fe/main',$data);	
		}
	}






	// START BACKEND CONTROLLER

	public function manage()
	{
		if($this->session->userdata('login')){
			redirect('En/main_dash');
		}
		else {
			$this->load->view('login');
		}
	}

	public function login(){
		$username = $_POST['username'];
		$password = $_POST['password'];
	
		$cek_login = $this->Login->do_login($username,$password);
						
		if($cek_login){			
			$data = array(
				'username'=>$username,
				'login'=>true
			);				
			$this->session->set_userdata($data);
			$this->main_dash();
		}
		else{
			$data['error_login'] = "Incorrect Username or Password";		
			$this->load->view('login',$data);				
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('En');
	}

	public function main_dash()
	{
		if($this->session->userdata('login')!="true"){
			redirect('En');	
		}
		else{
			$data['page'] = "dashboard";
			$data['count_usr'] = $this->user->count_all();
			$data['count_cmp'] = $this->campaign->count_all();
			$data['count_cmp_24'] = $this->campaign->count_24();
			$data['crumb'] = "Dashboard";
			$this->load->view('main_dash',$data);	
		}
	}

	function user(){
		if($this->session->userdata('login')!="true"){
			redirect('En');	
		}
		else{
			$data['page'] = "user";
			$data['crumb'] = "User Manager";
			$this->load->view('main_dash',$data);	
		}
	}

	function campaigns(){
		if($this->session->userdata('login')!="true"){
			redirect('En');	
		}
		else{
			$data['page'] = "campaigns";
			$data['crumb'] = "Campaign Manager";
			$data['get_all'] = $this->campaign->get_all();
			$this->load->view('main_dash',$data);	
		}
	}

	function categories(){
		if($this->session->userdata('login')!="true"){
			redirect('En');	
		}
		else{
			$data['page'] = "category";
			$data['get_all'] = $this->categories->get_all();
			$data['crumb'] = "Categories Manager";
			$this->load->view('main_dash',$data);	
		}
	}

	function add_cat(){
		if($this->session->userdata('login')!="true"){
			redirect('En');	
		}
		else{
			$cat_name = $_POST['cat_name'];
			$this->categories->insert($cat_name);
			$data['page'] = "category";
			$data['get_all'] = $this->categories->get_all();
			$data['crumb'] = "Categories Manager";
			$this->load->view('main_dash',$data);	
		}
	}

	function donations(){
		if($this->session->userdata('login')!="true"){
			redirect('En');	
		}
		else{
			$data['page'] = "donations";
			$data['crumb'] = "Donations Manager";
			$data['get_all'] = $this->campaign->get_all();
			$this->load->view('main_dash',$data);	
		}
	}

	function reports(){
		if($this->session->userdata('login')!="true"){
			redirect('En');	
		}
		else{
			$data['page'] = "reports";
			$data['crumb'] = "Reports";
			$this->load->view('main_dash',$data);	
		}
	}

	function sysuser(){
		if($this->session->userdata('login')!="true"){
			redirect('En');	
		}
		else{
			$data['page'] = "sysuser";
			$data['crumb'] = "System User";
			$this->load->view('main_dash',$data);	
		}
	}
}
