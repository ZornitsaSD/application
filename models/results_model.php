<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Results_model extends CI_Model{

	public function ad_result()
	{
		$res = array(
			'score' => $this->input->post('res') 
			);

		return $this->db->insert('results', $res);
	}

}