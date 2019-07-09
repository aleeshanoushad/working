<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_details_model extends CI_Model { 

	public $_table = 'User_details_model';
	public $protected_attributes = array('ud_id');
	protected $primary_key = 'ud_id';

	// public function getuserdata($value='')
	// {
	// 	$this->db->select('*');
	// 	$this->db->from($_table);
	// 	$this->db->where('Field / comparison', $Value);
	// }

	

}

/* End of file user_details_model.php */
/* Location: ./application/modules/user/models/user_details_model.php */ ?>