<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class Login_model extends CI_Model{

  
  public $_table = 'user_model';
  public $protected_attributes = array('userid');
  protected $primary_key = 'userid';

		public function signining($data){
			$ins =$this->db->insert('user_model',$data);
			if($ins){
				return true;		
			}else{
				return false;  
		     }
			}
		public function activeuser($mailid,$pass)
			{
				$this->db->select('userid,usertype,firstname,lastname');
				$this->db->from('user_model');
				$this->db->where('email', $mailid);
				$this->db->where('password', $pass);
				$query = $this->db->get();
				// echo $this->db->last_query();exit;
				if($query->num_rows()>0){
					return $query->row();
				}else{
					return false;
				}
			}
		 public function getuserdetails($userid=FALSE)
		{
		    $this->db->select('usertype,ud_firstname,ud_lastname');
		    $this->db->from('user_model a');
		    $this->db->join('user_details_model b', 'a.userid = b.ud_userid', 'left');
		    $this->db->where('userid', $userid);
		    $query = $this->db->get();
		    // echo $this->db->last_query();exit;
		    if ($query->num_rows() > 0) {
		    	return $query->row();
		    }else{
		    	return false;
		    }
		   

		}	


}