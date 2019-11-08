<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_details_model extends CI_Model { 

	public $_table = 'user_details_model';
	public $protected_attributes = array('ud_id');
	protected $primary_key = 'ud_id';

	

	public function getuserdetailsdata($value='')
	{
		$this->db->select('*');
		$this->db->from('user_details_model');
		$this->db->where('ud_userid', $value);
		$query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
	}
    public function insertuserdetailsdata($value=NULL)
    {
    	if($value!=NULL){
           
    		$insrt =$this->db->insert('user_details_model',$value);
    		if($insrt){
    			return true;
    		}else{
    			return false;
    		}
    	}else{
    		return false;
    	}
    }
    public function updateprofsion($value=array(),$id)
    {
        if(empty($value)){
            return false;
        }else{
            $this->db->set($value);
            $this->db->where('ud_userid',$id);
            $query =$this->db->update('user_details_model');
            
            if($query){
                return true;
            }else{
                return false;
            }
        }
    }
	

}

/* End of file user_details_model.php */
/* Location: ./application/modules/user/models/user_details_model.php */ ?>