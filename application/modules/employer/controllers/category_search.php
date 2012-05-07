<?php if(!defined('BASEPATH')) exit ('No direct script allow access');

	require_once APPPATH.'third_party/employer_controller'.EXT;
	
	class Category_search extends Employer_controller
	{
		function __construct()
		{
			parent::__construct();
		}
		function index()
		{
			$this->checklogin();
			$data = array();
			$this->site_title = 'Category search | Talents Project Version 1';
			$this->render($this->load->view('category_search/index',$data,TRUE),$this->layout_em);
		}
	}
