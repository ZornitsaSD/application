<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Results extends CI_Controller{
	
	function __construct(){
		parent::__construct();

		$this->load->model('results_model');
		$this->load->model('users_model');
	}
	
	public function show_gamer_result(){
		$gamer_id = $this->session->userdata('gamer_id');
		$data['res'] = $this->results_model->get_results($gamer_id);

		$data['dynamic_view'] = 'results_view';
        $data['title'] = 'Results';

        $this->load->view('templates/main_template', $data);

		
	}

//insert
	/*function insert_result($res){
	 $res = $_GET['res'];

	$this->results_model->ad_result();

	//$this->home->do_logout();
	}*/


	//delete
 	 public function del_result(){
        $result_id = $_GET['result_id'];
    	 $this->results_model->delete_result($result_id);
          //echo "Successfully deleted a result from DB!";

          //$this->load->view('view_results');
          $this->show_gamer_result();
    }
}

