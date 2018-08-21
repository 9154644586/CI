<?php
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->login();
	}
	public function login()
	{
		$this->load->view('login');
	}
}

?>