 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Session_model extends MY_Model {

	public $_table = 'ci_sessions';
	public $protected_attributes = array('session_id');
	protected $primary_key = 'session_id';

}

/* End of file Session_model.php */
/* Location: ./application/modules/login/models/Session_model.php */