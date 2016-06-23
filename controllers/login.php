
<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	public function index($param = NULL){
		$data['param'] = $param;
		$this->load->view('login_view', $data);
	}

	public function procedure(){
		
		$this->load->model('login_model');
		
		$result = $this->login_model->validate();
		
		if(! $result){
			$param = '<font color=red>Invalid username and/or password.</font><br />';
			$this->index($param);
		}else{
			
			redirect('home');
		}		
	}
}
?>