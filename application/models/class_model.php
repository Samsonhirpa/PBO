<?php
defined('BASEPATH') or exit('No direct access is Allowed');
class class_model extends CI_Model
{

public function saveclass()
{
	$data=array(
		'class_name'=>$this->input->post('class_name'),
		'class_number'=>$this->input->post('classnumber'),
		'class_description'=>$this->input->post('description'),
		
	);   
	$query=$this->db->insert('class',$data);
	if($query)
	{
		return true;

	}
	else
	{
		return false;
	}

}
}
