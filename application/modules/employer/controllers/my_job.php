<?php if(!defined('BASEPATH')) exit ('No direct script allow access');

	require_once APPPATH.'third_party/employer_controller'.EXT;
	
	class My_job extends Employer_controller
	{
			var $nn ='';
		function __construct()
		{
			parent::__construct();
			$this->load->helper('cookie');
			$this->nn = get_cookie('lang');	
			$this->lang->load('home', $this->nn);	
			$this->lang->load('form_validation', $this->nn);
		}
		function change()
		{
		$data = array();
		$lang = $this->input->get('lang');		
		if($lang) {
			$this->config->set_item('language', $lang);
			$cookie = array(
						'name' => 'lang',
						'value' => $lang,
						'expire' => '86500000',
						'path'   => $this->config->item('cookie_path'),
	                    'prefix' => $this->config->item('cookie_prefix'),
					 );
				set_cookie($cookie);
		} else {
			$cookie = array(
						'name' => 'lang',
						'value' => 'vn',
						'expire' => '86500000',
						'path'   => $this->config->item('cookie_path'),
	                    'prefix' => $this->config->item('cookie_prefix'),
					 );
				set_cookie($cookie);
				$this->config->set_item('language', 'vn');
		}	
		$data['url_curent'] = $this->input->get('url');
		redirect($data['url_curent'],'refresh');		
		}
		function index()
		{
			$this->checklogin();
			$data = array();
			$this->site_title = 'My job | Talents Project Version 1';
			$this->render($this->load->view('my_job/index',$data,TRUE),$this->layout_em);
		}
		
	}
