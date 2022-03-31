<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('login/login');
		$this->load->view('footer');
	}
}

 ?>