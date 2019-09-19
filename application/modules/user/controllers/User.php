<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login/Login_model','lm');
		$this->load->model('user/user_details_model','ud');

	}
	
	public function dashboard()
	{
		
		if($this->session->userdata('user_id')){
			$userid = $this->session->userdata('user_id');
			$data['userdetails'] =$this->lm->getuserdetails($userid);
			if($this->session->userdata('user_id') == 1){

				$this->load->view('dashboard-admin',$data);
			}
			else{
				$this->load->view('dashboard-user',$data);
			}
			
		}else{
			$this->load->view('login/login');
		}
		
		
	}
	public function profile(){
		
		$userid = $this->session->userdata('user_id');
		$data['userdetails'] =$this->lm->getuserdetails($userid);
		
		$this->load->view('profile', $data);
	}

	public function addprofile(){
		
		$userid = $this->session->userdata('user_id');
		$data['userdetails'] =$this->lm->getuserdetails($userid);
		$data['userdata']=$this->lm->getalluserdetails($userid);
		
		// echo "<pre>";
		// print_r ($data['userdata']);
		// echo "</pre>";exit;

		$this->load->view('addprofile', $data);
	}
 
 	public function editprofile($value='')
 	{
 		$userid = $this->session->userdata('user_id');
		$data['userdetails'] =$this->lm->getuserdetails($userid);
		
		$this->load->view('addprofile', $data);

 	}
	public function addingprofile()
	{
								      // profile

		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');

		$Address1[0] = $this->input->post('Address1');
		$Address1[1] = $this->input->post('Address2');
		$Address1[2] = $this->input->post('district');
		$address =implode(',', $Address1);
		$phone =  $this->input->post('phone');

		$user_table = array(
			'firstname' =>$firstname , 
			'lastname' =>$lastname 
		);
		$user_details = array(
			'ud_frstname' =>$firstname , 
			'ud_address' =>$address , 
			'ud_phone' =>$phone , 
			
		);
		$insert_user =$this->lm->signining($user_table);
		$insert_user_details =$this->ud->insertuserdetailsdata($user_details);
		if($insert_user && $insert_user_details){
			$this->session->set_flashdata('messageS', 'Sign Up sucessfuly...Please login Now.');
			redirect('user/editprofile#professional','refresh');

		}else{
			// $this->
		}
	}
	


}

/* End of file User.php */
/* Location: ./application/modules/user/controllers/User.php */ ?>