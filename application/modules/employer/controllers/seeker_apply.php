<?php if(!defined('BASEPATH')) exit ('No direct script allow access');

	require_once APPPATH.'third_party/employer_controller'.EXT;
	
	class Seeker_apply extends Employer_controller
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
		function show()
		{
		$this->checklogin();
		$data = array();
		$uid = $this->uri->segment(4);
		$data['show_apply_seeker'] = $this->EM->show_apply_seeker($uid);
		
		
		//$data['em_post_job'] = $this->EM->show_post_job_employer($_SESSION['em_id']);
		
		$act = $this->input->post('act');
		$del = $this->input->post('selected');
		if($act == "Delete")
		{
			
			if($del)
			{
				if(gettype($del) == 'array' && count($del)>0)
				{
					foreach($del as $id)
					{
						$this->EM->delete_seeker_apply($id);
					
					}
					redirect('employer/seeker_apply/show','refresh');
				}
				
			}
			
		}
		$this->site_title = 'Seeker apply | Talents Project Version 1';
		$this->render($this->load->view('seeker_apply/index',$data,TRUE),$this->layout_em);
		
		
		
		
	}
	function delete_post()
	{
		$this->checklogin();
		$data = array();
		$uid = $this->uri->segment(4);
		if($this->EM->delete_seeker_apply($uid))
		{					
			redirect('employer/seeker_apply/show');
		}
		
	}
	function views_seeker()
	{
		$this->checklogin();
		$data = array();
		$uid = $this->input->get('get_id');							
		$data['seeker'] = $this->EM->get_x5_seeker_info($uid);
		$data['seeker2'] = $this->EM->show_x5_seeker($data['seeker']->se_id);
		
		$act = $this->input->post('btnJob');
		
		if($act == 'Message')
		{
			$data['message'] = $this->input->post('txt_message');
			$data['em_id']   = $this->input->post('id_employer');
			$data['se_date'] = date('j/n/Y');
			if($this->EM->update_message_seeker($uid,$data))
			{
				$data['error'] = "Send Message Seeker confirm";
			}
			else
			{
				$data['error'] = "Send Message error";
			}
		}	
		
		$this->site_title = 'View Seeker apply | Talents Project Version 1';
		$this->render($this->load->view('seeker_apply/views',$data,TRUE),$this->layout_em);
	}
	function show_test()
	{
		$this->checklogin();
		$data = array();
		$uid = $this->uri->segment(4);
		if($uid)
		{
		$data['seeker'] = $this->EM->show_x5_seeker($uid);
		$data['test_online'] = $this->EM->get_testonline($uid);
		}
		$this->site_title = 'View Seeker test | Talents Project Version 1';
		$this->render($this->load->view('seeker_apply/view_test_online',$data,TRUE),$this->layout_em);
	}
		
	}
