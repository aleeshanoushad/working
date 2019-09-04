 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login/Login_model','lm');

	}

	

}

/* End of file Admin.php */
/* Location: ./application/modules/admin/controllers/Admin.php */ ?>