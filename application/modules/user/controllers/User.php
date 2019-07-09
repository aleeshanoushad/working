<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('dashboard');
	}

}

/* End of file User.php */
/* Location: ./application/modules/user/controllers/User.php */ ?>