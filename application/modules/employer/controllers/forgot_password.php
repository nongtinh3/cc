<?php if(!defined('BASEPATH')) exit ('No direct script allow access');

/*-------------------------------------------------------
| Talents version 1
| Employer Controller
| Author: Nguyen Duc Hung
| Create_date: 20/11/2011
---------------------------------------------------------*/

require_once APPPATH.'third_party/employer_controller'. EXT;

class Forgot_password extends employer_controller
{
	var $nn ='';
	function __construct()
	{
		parent:: __construct();
		$this->load->helper('string');
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
		//redirect('employer/','refresh');
		//$result = array('status' => true, 'mess' => 'Change language ok');
		//echo json_encode($result);
		//$this->load->view('employer/test',$data);
		
	}
	function index()
	{
		$data = array();		
		$captcha_result = '';
		$data['img_cap'] = $this-> _make_captcha();			
		$this->site_title = 'Forgot password| Talents Project Version 1';
		$this->render($this->load->view('account/forgot_password', $data, TRUE), $this->layout_em);
	
	}
	function check_forgot()
	{
		$data = array();
		$valid = $this->form_validation;
		$valid->set_rules('txtemail',$this->lang->line('Email address'),'trim|required|valid_email');
		$valid->set_rules('captcha',$this->lang->line('Code'),'trim|required');	
		$email = $this->input->post('txtemail');
		
		if($this->_check_captcha())
			{				
					if($valid->run() == FALSE)
						{
							$this->session->set_flashdata('error',$this->lang->line('Complete information is not accurate'));
							redirect('employer/forgot_password/');
						}
					else
					{
						$q = $this->EM->selectAll(array('em_email'=>$email),null,null);
						if($q->num_rows > 0)
						{
							foreach($q->result() as $row)
							{
								if($row->em_email == $email)
								{
									$this->loadMail();
									$data['code'] = random_string('alnum',10);
									$url = site_url('employer/forgot_password/change_forgot/'.$row->em_code_forgot_pass);
									$this->email->from("nongtinh3@gmail.com",'Thanh Minh');
									$this->email->to($email);
									$this->email->subject("Forgot password?");
									$this->email->message("We responded the problem you want to change your password. You certainly do not want?".anchor($url));
									if($this->email->send())
									{
										$this->session->set_flashdata('error','We will send email for you to reset the password');
										redirect('employer/forgot_password/');
									}
								}
							}
						}
						else
						{
							$this->session->set_flashdata('error',$this->lang->line('Email does not exist'));
							redirect('employer/forgot_password/');
						}
						
					}
				
			}
			else
			{
				
				$this->session->set_flashdata('error',$this->lang->line('incorrect code'));
				redirect('employer/forgot_password/');	
			}
		$this->site_title = 'Forgot password| Talents Project Version 1';
		$this->render($this->load->view('account/forgot_password', $data, TRUE), $this->layout_em);
			
			
	}
	function change_forgot()
	{
		$data = array();
		$uid = $this->uri->segment(4);
		$valid = $this->form_validation;
		$valid->set_rules('txtpass_new','Password New','trim|required|min_length[6]|max_length[20]');
		$valid->set_rules('txtpass_new_2','Confirm Password','trim|required|matches[txtpass_new]');
		$data['em_password'] = md5($this->input->post('txtpass_new_2'));
			if($valid->run() == TRUE)
			{
					$this->EM->change_forgot_password($uid,$data);					
					$data['error'] = "Change password successfully";
				
			}
					

					
		
		$this->site_title = 'Forgot password| Talents Project Version 1';
		$this->render($this->load->view('account/change_forgot_password', $data, TRUE), $this->layout_em);
	}
	
}
?>