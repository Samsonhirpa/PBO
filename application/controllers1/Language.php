<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Language extends CI_Controller {
	public function english()
	{
		$this->session->unset_userdata('lang');
		$this->session->set_userdata('lang','english');
		redirect($_SERVER["HTTP_REFERER"]);


	}
	public function oromo()
	{
		$this->session->unset_userdata('lang');
		$this->session->set_userdata('lang','oromo');
		redirect($_SERVER["HTTP_REFERER"]);

	}
	public function amharic()
	{
		$this->session->unset_userdata('lang');
		$this->session->set_userdata('lang','amharic');
		redirect($_SERVER["HTTP_REFERER"]);

	}
	// public function uenglish()
	// {
	// 	$this->session->unset_userdata('lang');
	// 	$this->session->set_userdata('lang','english');
	// 	redirect('famscontroller/userdashboard','referesh');

	// }
	// public function uoromo()
	// {
	// 	$this->session->unset_userdata('lang');
	// 	$this->session->set_userdata('lang','oromo');
	// 	redirect('famscontroller/userdashboard','referesh');

	// }
	// public function senglish()
	// {
	// 	$this->session->unset_userdata('lang');
	// 	$this->session->set_userdata('lang','english');
	// 	redirect('famscontroller/staffdashboard','referesh');

	// }
	// public function soromo()
	// {
	// 	$this->session->unset_userdata('lang');
	// 	$this->session->set_userdata('lang','oromo');
	// 	redirect('famscontroller/staffdashboard','referesh');

	// }
}

