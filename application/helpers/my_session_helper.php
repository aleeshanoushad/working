<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



function show_messages(){
	$CI =& get_instance();
	if ($CI->session->flashdata('messageS') != "") {

		return '<div  class="alert alert-success fade in">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		' . $CI->session->flashdata('messageS') . '
		</div>';
	} elseif ($CI->session->flashdata('messageE') != "") {

		return '<div  class="alert alert-error fade in">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		' . $CI->session->flashdata('messageE') . '
		</div>';
		
	} elseif ($CI->session->flashdata('messageW') != "") {

		return '<div  class="alert alert-warning fade in">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		' . $CI->session->flashdata('messageW') . '
		</div>';

	} elseif ($CI->session->flashdata('messageI') != "") {

		return '<div  class="alert alert-info fade in">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		' . $CI->session->flashdata('messageI') . '
		</div>';
	}
                       
}

	?>