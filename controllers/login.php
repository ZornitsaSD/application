
<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		
		$this->load->model('users_model');

		$this->load->model('login_model');
	}

	//Insert
	public function show_add_user(){

		//$this->load->view('add_user_view');

		$data['dynamic_view'] = 'add_user_view';
       	$data['title'] = 'User view';

        $this->load->view('templates/main_template', $data);

	}

	public function index()//insert_user()
	{
		
        $this->load->view('templates/header');

		$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
 
 		if($this->form_validation->run() === FALSE)
 		{
	 	     $this->show_add_user();
 		}
 		else
 		{
 			$this->users_model->add_user();

 			echo "<p id='entrance'>".anchor('login/log_in', 'Вход')."</p>";
		}
	}

//Login	
	public function log_in($param = NULL){
		$data['param'] = $param;
		//$this->load->view('login_view', $data);

		$data['dynamic_view'] = 'login_view';
       	$data['title'] = 'Login';

        $this->load->view('templates/main_template', $data);

	}

	public function procedure(){
		
		$result = $this->login_model->validate();
		
		if(! $result){
			$param = '<font color=white>Грешно потребителско име и/или парола.</font><br />';
			$this->log_in($param);
		}else{
			
			redirect('home');
		}		
	}

	
}