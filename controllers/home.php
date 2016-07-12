<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->check_validation();
		$this->load->model('login_model');
		$this->load->model('results_model');
	}
	
	public function index(){
		//$this->session->set_userdata();
		//echo 'Congratulations, you are logged in.';
		//$username = $this->session->userdata('username');
		//echo $username;
		//echo '<p><a href='.base_url().'index.php/home/do_logout'.'>Logout!</a></p>';
		$this->load->view('battlefield3');	
	}
	
	//insert
	/*public function add_res(){
		
		//echo 'Congratulations, you are logged in.';
		//$username = $this->session->userdata('username');
		//echo $username;
		//echo '<p><a href='.base_url().'index.php/home/do_logout'.'>Logout!</a></p>';
		$this->index();
		
		//$res = $_GET['res'];
		$date = date('Y-m-d');
		$this->session->userdata('res');
		$gamer_id = $this->session->userdata('gamer_id');
		echo $gamer_id;
		$this->session->userdata($date);

		$this->results_model->ad_result();

	}*/
	
	private function check_validation(){
		if(! $this->session->userdata('validated')){
			redirect('login');
		}	
	}
	
	public function do_logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
 }
 ?>