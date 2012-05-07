<?php if(!defined('BASEPATH')) exit ('No direct script allow access');

	require_once APPPATH.'third_party/employer_controller'.EXT;
	
	class My_candidate extends Employer_controller
	{
		function __construct()
		{
			parent::__construct();
		}
		function index()
		{
			$this->checklogin();
			$data = array();
			$this->site_title = 'Resume Viewing | Talents Project Version 1';
			$this->render($this->load->view('my_candidate/index',$data,TRUE),$this->layout_em);
		}
	}
