<?php if(!defined('BASEPATH')) exit ('No direct script allow access');

	require_once APPPATH.'third_party/employer_controller'.EXT;
	
	class Advanced_search extends Employer_controller
	{
		function __construct()
		{
			parent::__construct();
		}
		function index()
		{
			$this->checklogin();
			$data = array();
			$this->site_title = 'Advanced search | Talents Project Version 1';
			$this->render($this->load->view('advanced_search/index',$data,TRUE),$this->layout_em);
		}
	}
