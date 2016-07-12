<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Results_model extends CI_Model{

	public function get_results(){
		
		$this->db->select('*');
		$this->db->from('results');
		$this->db->join('users', 'users.gamer_id = results.gamer_id');
		
		$this->db->where('results.date_deleted =', NULL);

		$gamer_id = $this->session->userdata('gamer_id');
		$this->db->where('results.gamer_id =', $gamer_id);
		$query = $this->db->get();

		return $result = $query->result_array();
		}

//insert result
		
	/*	public function ad_result()
	{
		$date = date('Y-m-d');
		$gamer_id = $this->session->userdata('gamer_id');
		$gamer_id = $this->session->userdata('res');
		$res = array(
			'score' => $this->input->post('res'),
			'date' => $this->input->post($date),
			'gamer_id' => $this->input->post($gamer_id)  
			);

		return $this->db->insert('results', $res);
	}*/


	//delete
	
	public function get_delete_result($result_id){

		$this->db->select('*');
		$this->db->from('results');
		$q = $this->db->get();
		return $result = $q->result();
	}

	public function delete_result($result_id){ 
		
		$date = date('Y-m-d');
		$date_del = array(
			'date_deleted' => $date
			);
		$this->db->where('result_id', $result_id);

		$this->db->update('results', $date_del);
	}

}