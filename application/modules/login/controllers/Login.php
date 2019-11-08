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
			
			$this->session->set_flashdata('messageS', 'Sign Up sucessfuly...Please login Now.');

		}else{
			
			$this->session->set_flashdata('messageE', 'Error occured try again.');

		}
		redirrect('login','refresh');
	}


	public function loginned()
	{
		$this->load->model('login/Login_model','lm');
		$this->load->model('login/Session_model','sm');

		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$encryptpass=md5($password);
		$logged =$this->lm->activeuser($email,$encryptpass);
		

	
		if(!empty($logged)){
			$arraysession = array(
				'user_id' => $logged->userid,
				'user_name'=>$logged->firstname." ".$logged->lastname,
				'ip_address'=>$this->input->ip_address()
			);
			
			
			$this->session->set_userdata($arraysession);

			$insrt =$this->sm->insert($arraysession);

			$this->session->set_flashdata('messageS', 'Loggined sucessfuly.');
			
				redirect('user/dashboard','refresh');
			
		}else{
			$this->session->set_flashdata('messageE', 'Username or Password is incorrect..please try again.');
			redirect('login/index','refresh');

		}
		
		
	}
	public function logout()
	{

		$user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            
                $this->session->unset_userdata($key);
           
        }
    $this->session->sess_destroy();
    redirect('login');
	}
}

?>