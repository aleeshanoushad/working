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

	public function addprofile($id=NULL){

		if($id != NULL){
			$userid =$id;
			$data['editdata'] =$this->ud->getuserdetailsdata($userid);
		}else{
			$userid = $this->session->userdata('user_id');
			$data['editdata']=NULL;
		}

		$data['editid']=$id;
		$data['userdetails'] =$this->lm->getuserdetails($userid);
		$data['userdata']=$this->lm->getalluserdetails($userid);

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
		$id=$this->session->userdata('user_id');

		// $profile =  $this->input->post('profile');
		$config['upload_path']          = '.public/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 2000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		$salt=1;
		$fileName = date('ymdhis').'_'.$salt;
		$salt++;
		$config['file_name'] = $fileName;
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('profile'))
		{
			$error = array('error' => $this->upload->display_errors());
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
		}
        // if($error) {echo "<pre>";
        // print_r ($error);
        // echo "</pre>";} else echo $data;
        // echo "<pre>";
        //  print_r ($_POST);
        //  echo "</pre>"; exit;
		$user_table = array(
			'firstname' =>$firstname , 
			'lastname' =>$lastname 
		);
		$user_details = array(
			'ud_userid'=>$id, 
			'ud_address' =>$address , 
			'ud_phone' =>$phone , 
			
		);

		
		$insert_user =$this->lm->updatesigning($user_table,$id);
		$insert_user_details =$this->ud->insertuserdetailsdata($user_details);
		if($insert_user && $insert_user_details){
			$this->session->set_flashdata('messageS', 'Basic information  Added Sucessfuly');
			redirect('user/addprofile/'.$id,'refresh');

		}else{
			$this->session->set_flashdata('messageE', 'Something Wrong.. Please try again.');
			redirect('addprofile','refresh');
		}
	}
	public function profesionaladd($value='')
	{
		$skill = $this->input->post('val-skill');
		$occupation = $this->input->post('occupation');
		$companyname = $this->input->post('companyname');
		$id=$this->session->userdata('user_id');
		$insrtdata =array(
			'ud_education' =>$skill,
			'ud_occupation' =>$occupation,
			'ud_companyname' =>$companyname
		);
		$updt = $this->ud->updateprofsion($insrtdata,$id);
		if($updt){
			$this->session->set_flashdata('messageS', 'Proffesional information  Added Sucessfuly');
			redirect('user/profile','refresh');

		}else{
			$this->session->set_flashdata('messageE', 'Something Wrong.. Please try again.');
			redirect('user/editprofile#professional','refresh');
		}

	}
	
	public function adddocuments($value='')
	{
		$userid = $this->session->userdata('user_id');
		$data['userdetails'] =$this->lm->getuserdetails($userid);
		$this->load->view('adddocuments', $data);
	}
	public function addingdocumnets($value='')
	{
		$documentname = $this->input->post('documentname');
		$documentno = $this->input->post('documentno');
		$expiratndate = strtotime($this->input->post('expiratndate'));
		$remaindbfr = $this->input->post('remaindbfr');
		$remaindmeby = $this->input->post('remaindmeby');

	}
}

/* End of file User.php */
/* Location: ./application/modules/user/controllers/User.php */ ?>