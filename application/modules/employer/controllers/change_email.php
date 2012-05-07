<?php if(!defined('BASEPATH')) exit ('No direct script allow access');

	require_once APPPATH.'third_party/employer_controller'.EXT;
	
	class Change_email extends Employer_controller
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
			$data['em_info'] = $this->EM->x4_get_id($_SESSION['em_id']);
			$valid = $this->form_validation;
			$valid->set_rules('txtpass',$this->lang->line('Password'),'trim|required');
			$valid->set_rules('txtemail',$this->lang->line('Enter New  Email Login'),'trim|required|valid_email');
			$valid->set_rules('txtemail2',$this->lang->line('Re-Enter New Email Login'),'trim|required|matches[txtemail]');
			$txtpass2 = md5($this->input->post('txtpass'));
			$txtemail2 = $this->input->post('txtemail2');
			
			$check_pass = $this->input->post('pass');
			$check_email = $this->input->post('email');
			
			
			if($valid->run() == TRUE)
			{		
				if($txtpass2 == $check_pass)
				{		
					$q = $this->EM->selectAll(array('em_email'=>$txtemail2),null,null);
					if($q->num_rows() > 0)
					{
						foreach($q->result() as $row)
						{
							if($row->em_email == $txtemail2)
							{
								$this->session->set_flashdata('error',$this->lang->line('Email this has been used'));
								redirect('employer/change_email');
							}							
						}
					}
					else
					{
								$check_id = $this->input->post('id');
								$data['em_email'] = $this->input->post('txtemail2');	
								$this->EM->update_x4_email($check_id,$data);								
								$this->session->set_flashdata('error',$this->lang->line('Change Email Success'));
								redirect('employer/change_email','refresh');
								
							
					}
				}
				else
				{
					$this->session->set_flashdata('error',$this->lang->line('Enter the wrong password'));
							redirect('employer/change_email');
				}
				
			
			}
			$this->site_title = 'Change Email | Talents Project Version 1';
			$this->render($this->load->view('account/change_email',$data,TRUE),$this->layout_em);	
			
		}
	}
