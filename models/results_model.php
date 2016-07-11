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

}