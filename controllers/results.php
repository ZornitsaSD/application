<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Results extends CI_Controller{
	
	function __construct(){
		parent::__construct();

		$this->load->model('results_model');
		$this->load->model('users_model');
	}
	
	function insert_result(){

	$this->results_model->ad_result();

	$this->home->do_logout();
	}
}

