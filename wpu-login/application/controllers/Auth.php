<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Auth extends CI_controller

{
	public function index()
{
	$this->load->view('auth/login');
}
}


