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

		//$this->load->view('books/all_books_view', $data);
	}
	 public function show_results_view(){

	 	$this->load->view('results_view');
	 }
}

