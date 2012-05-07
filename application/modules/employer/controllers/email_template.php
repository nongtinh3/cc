<?php if(!defined('BASEPATH')) exit ('No direct script allow access');

	require_once APPPATH.'third_party/employer_controller'.EXT;
	
	class Email_template extends Employer_controller
	{
		function __construct()
		{
			parent::__construct();
		}
		function index()
		{
			$this->checklogin();
			$data = array();
			$this->site_title = 'Email template | Talents Project Version 1';
			$this->render($this->load->view('email_template/index',$data,TRUE),$this->layout_em);
		}
	}
