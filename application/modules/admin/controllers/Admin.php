 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('dashboard');
	}

}

/* End of file Admin.php */
/* Location: ./application/modules/admin/controllers/Admin.php */ ?>