 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login/Login_model','lm');

	}

	public function index()
	{
		
		if($this->session->userdata('user_id')){
			$userid = $this->session->userdata('user_id');
			$data['userdetails'] =$this->lm->getuserdetails($userid);
			$this->load->view('dashboard',$data);
		}else{
			$this->load->view('login/login');
		}
		
		
	}
	public function profile(){
		
		$userid = $this->session->userdata('user_id');
		$data['userdetails'] =$this->lm->getuserdetails($userid);
		$this->load->view('admin-profile', $data);
	}
	


}

/* End of file Admin.php */
/* Location: ./application/modules/admin/controllers/Admin.php */ ?>