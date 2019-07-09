<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html

	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login/Login_model','lm');
	}

	public function index()
	{

		if($this->session->userdata('loginid')) {
		
		 $usrtype = $this->session->userdata('sessionusertype');
         $usertypename = $this->session->userdata('sessionusertypename');
         echo $usertypename;

	  }
	  // echo "out";
	  $this->load->view('loginsignup');
	}
	
	public function signupfunction(){
		

		$frstname=$this->input->post('frstname');
		$lastname=$this->input->post('lastname');
		$email=$this->input->post('email');
		$passw=$this->input->post('passwrd');
		$passwrd=md5($passw);
		$data  = array('firstname' =>$frstname ,
			'lastname' =>$lastname,
			'email' =>$email ,
			'password' =>$passwrd,
			'usertype' =>0
		);

		$insrt =$this->lm->signining($data);
		if($insrt){
			
			$this->session->set_flashdata('messageS', 'Sign Up sucessfuly.');

		}else{
			
			$this->session->set_flashdata('messageE', 'Error occured try again.');

		}
		$this->load->view('loginsignup', $datas);
	}
	public function loginned()
	{
		$this->load->model('login/Login_model','lm');

		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$encryptpass=md5($password);
		$logged =$this->lm->activeuser($email,$encryptpass);

	
		if(!empty($logged)){
			$arraysession = array(
				'loginid' => $logged->userid
			);
			
			$this->session->set_userdata($arraysession);
			$this->session->set_flashdata('messageS', 'Sign Up sucessfuly.');
		}else{
			$this->session->set_flashdata('messageE', 'Error occured try again.');

		}
		if($logged->usertype == '0'){
			redirect('user/index','refresh');
		}else{
			redirect('admin/index','refresh');
		}
		
	}
}

?>