<?php if(!defined('BASEPATH')) exit ('No direct script allow access');

	require_once APPPATH.'third_party/employer_controller'.EXT;
	
	class Change_password extends Employer_controller
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
			$captcha_result = '';
			$data['img_cap'] = $this-> _make_captcha();
			$data['em_info'] = $this->EM->x4_get_id($_SESSION['em_id']);
			$this->site_title = 'Change Password | Talents Project Version 1';
			$this->render($this->load->view('account/change_password',$data,TRUE),$this->layout_em);
		}
		function check_password()
		{
			$this->checklogin();
			$data = array();
			$valid = $this->form_validation;
			$valid->set_rules('txtpass',$this->lang->line('Password'),'trim|required]');
			$valid->set_rules('txtpass_new',$this->lang->line('Password'),'trim|required|min_length[4]|max_length[20]');
			$valid->set_rules('txtpass_new_2',$this->lang->line('Password'),'trim|required|matches[txtpass_new]');
			$valid->set_rules('captcha',$this->lang->line('Code'),'trim|required');	
			$pass = md5($this->input->post('txtpass'));		
			$uid = $this->input->post('ac_id');
			$check_pass = $this->input->post('re_pass');
			
			$data['em_info'] = $this->EM->x4_get_id($_SESSION['em_id']);
			
			if($this->_check_captcha())
			{
				if($valid->run() == FALSE)
				{
					$this->session->set_flashdata('error',$this->lang->line('Complete information is not accurate'));
					redirect('employer/change_password/');
				}
				else
				{
					if($pass == $check_pass)
					{
					$data['em_password'] = md5($this->input->post('txtpass_new_2'));
					$this->EM->update_x4_register($uid,$data);
					$this->session->set_flashdata('error',$this->lang->line('Change password successfully'));
					redirect('employer/change_password/','refresh');
					}
					else
					{
					$this->session->set_flashdata('error',$this->lang->line('Password are wrong. Please you enter password'));	
					redirect('employer/change_password/');
					}
				}
			} 
			else 
			{
				$this->session->set_flashdata('error',$this->lang->line('incorrect code'));
				redirect('employer/change_password/');	
			}
			
		}
		
		

	}
