<?php if(!defined('BASEPATH')) exit ('No direct script allow access');


require_once APPPATH.'third_party/employer_controller'. EXT;

class Employer extends employer_controller
{
	var $nn ='';
	function __construct()
	{
		parent:: __construct();
		$this->load->helper('cookie');
		$this->nn = get_cookie('lang');	
		$this->lang->load('home', $this->nn);	
		$this->lang->load('form_validation', $this->nn);	
			
	}
  
	function index()
	{		
		$data = array();
		$this->site_title = "Talents Project Version 1";
		$this->render_index($this->load->view('main/index', $data, TRUE), $this->layout_index);
	}
	
	
	function about_us()
	{
		$data = array();
		$this->site_title = "About us | Talents Project Version 1";
		$this->render_index($this->load->view('main/about_us', $data, TRUE), $this->layout_index);
	}
	function contact_us()
	{
		$data = array();
		$this->site_title = "Contact us | Talents Project Version 1";
		$this->render_index($this->load->view('main/contact_us', $data, TRUE), $this->layout_index);
	}
	function mission()
	{
		$data = array();
		$this->site_title = "Mission | Talents Project Version 1";
		$this->render_index($this->load->view('main/missyou', $data, TRUE), $this->layout_index);
	}
	function vision()
	{
		$data = array();
		$this->site_title = "Vision | Talents Project Version 1";
		$this->render_index($this->load->view('main/vision', $data, TRUE), $this->layout_index);
	}
	function dream()
	{
		$data = array();
		$this->site_title = "Contact us | Talents Project Version 1";
		$this->render_index($this->load->view('main/dreamteam', $data, TRUE), $this->layout_index);
	}
	function your()
	{
		$data = array();
		$this->site_title = "Contact us | Talents Project Version 1";
		$this->render_index($this->load->view('main/your', $data, TRUE), $this->layout_index);
	}
	//function index
	function home()
	{
		$this->checklogin();
		$data = array();
		$this->render($this->load->view('home', $data, TRUE), $this->layout_em);
	}
	
	//function login
	function login()
		{
			$data = array();
			$this->site_title = 'Login | Talents Project Version 1';
			//$em_id = $_SESSION['em_id'];
			//$logged_in = $this->session->userdata('logged_in');
			if(empty($_SESSION['em_id']) || $_SESSION['logged_in'] == FALSE)
			{
				
				
			}
			else
			{
				redirect('employer/home/');
			}
			$valid = $this->form_validation;
			$valid->set_rules('txtemail','Email','trim|required|valid_email|xss_clean');
			$valid->set_rules('txtpass','Pass','trim|required|xss_clean');
			$email = $this->check_sql($this->input->post('txtemail'));
			$pass = md5($this->input->post('txtpass'));
			if($valid->run() == TRUE)
			{
				
				$q = $this->EM->selectAll(array('em_email'=>$email),null,null);
				if($q->num_rows >0)
				{
					foreach($q->result() as $row)
					{
							if($row->em_password == $pass)
							{
								if($row->active == 1)
								{
									$_SESSION['em_id'] = $row->em_id;									
									$_SESSION['em_email'] = $row->em_email;
									$_SESSION['em_password'] = $row->em_password;
									$_SESSION['logged_in'] = TRUE;	
									redirect('employer/login');
								}
								else
								{
									$data['error'] = "You have not activated your account";
									
								}
							}
							else
							{
								$data['error'] = "Password incorrect";
								
							}
						
					}
					
				}
				else
				{
					$data['error'] = "Account not exists";
					
				}
				
			}
			$this->render($this->load->view('account/login', $data, TRUE), $this->layout_em);
		}
		//function logout
		function logout()
		{
			/*$data = array(
				'em_id'=>$_SESSION['em_id'],
				'em_email' =>$_SESSION['em_email'],
				'em_password'=>$_SESSION['em_password'],	
				'logged_in' =>$_SESSION['logged_in']
			);*/
			//$a = $_SESSION[$data];
			unset($_SESSION['em_id']);
			unset($_SESSION['em_email']);
			unset($_SESSION['em_password']);
			unset($_SESSION['logged_in']);
			//session_destroy();
			//$this->session->unset_userdata($data);
			redirect('employer/login','refresh');
		}
	
	// Function register
	public function register()
	{
		
		$data = array();
		$data['em_country'] = $this->EM->show_x4_city();
		$data['em_size'] = $this->EM->show_x4_size();
		$data['em_province'] = $this->EM->show_province();
		$valid = $this->form_validation;
		$valid->set_rules('txtemail',$this->lang->line('Enter Email Login'),'trim|required|valid_email|xss_clean');
		$valid->set_rules('txtemail2',$this->lang->line('Re-Enter Email Login'),'trim|required|matches[txtemail]|xss_clean');
		$valid->set_rules('txtpass',$this->lang->line('Enter Password'),'trim|required|min_length[4]|max_length[20]|xss_clean');
		$valid->set_rules('txtpass2',$this->lang->line('Confirm Password'),'trim|required|matches[txtpass]|xss_clean');
		$valid->set_rules('txt_company_name',$this->lang->line('Company Name'),'trim|required');
		$valid->set_rules('txt_company_size',$this->lang->line('Company size (number of employees)'),'trim|required');
		$valid->set_rules('txt_address', $this->lang->line('Company address'),'trim|required');
		
		$valid->set_rules('txt_country', $this->lang->line('District'),'trim|required');
		
		$valid->set_rules('txt_contact_name',$this->lang->line('Contact name'),'trim|required');
		
	
		$valid->set_rules('txt_telephone',$this->lang->line('Telephone number'),'trim|required|alpha_numeric');
		
		
		$valid->set_rules('txt_ok',$this->lang->line('I have read & accept Xtasea-talents Privacy Policy and Terms of Use'),'trim|required|alpha_numeric');			
		$data['em_email'] = $this->check_sql($this->input->post('txtemail'));
		$data['em_password'] = md5($this->input->post('txtpass'));
		$data['em_code_active'] =random_string('alnum',10);
		$data['em_code_forgot_pass'] = random_string('alnum',10);
		$data['em_date_join'] = date('j/n/Y');
		$image 					= $this->input->post('image');
		$image_thumb 			= $this->input->post('image_thumb');
		if($valid->run() == TRUE)
		{
			if($this->EM->check_user($this->input->post('txtemail'),null))
			{
				$data['error'] = "The email address has already been used.";				
			} 
			else
			{
				if($this->EM->x4_register($data))
				{
					
					$data['em_id']		 	= 		$this->db->insert_id();
					$data['em_com_name']	=		$this->check_sql($this->input->post('txt_company_name'));
					$data['em_com_size']	=		$this->check_sql($this->input->post('txt_company_size'));
					$data['em_com_address']	=		$this->check_sql($this->input->post('txt_address'));
					$data['em_com_district']=		$this->check_sql($this->input->post('txt_district'));
					$data['em_com_country']	=		$this->check_sql($this->input->post('txt_country'));
					$data['em_com_profile']	=		$this->check_sql(nl2br($this->input->post('txt_company_profile')));
					$data['em_com_province']=		$this->input->post(('txt_company_province')!='')? $this->input->post('txt_company_province'):0;
					$data['em_com_web']		=		$this->check_sql($this->input->post('txt_company_web'));
					$data['em_contact_name']=		$this->check_sql($this->input->post('txt_contact_name'));
					$data['em_contact_position']=	$this->check_sql($this->input->post('txt_contact_person'));
					$data['em_phone']		=		$this->check_sql($this->input->post('txt_telephone'));
					$data['em_mobile']      =		$this->check_sql($this->input->post('txt_mobile'));
					$data['em_fax']         =		$this->check_sql($this->input->post('txt_fax'));
					
					if($_FILES['p_image']['name']!='')
					{
					$config['upload_path'] = './upload/employers/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['remove_spaces'] = TRUE;
					$config['max_size'] = 1024;
					$config['max_width'] = '1024';
					$config['max_height'] = '1024';
					$config['file_name'] = $_FILES['p_image']['name'];
					$this->load->library('upload', $config);
					if(!$this->upload->do_upload('p_image')) 
					{
					return false;
					} else {
					$upload = $this->upload->data();
					$data['image'] = 'upload/employers/'.$upload['file_name'];
					$data['image_thumb'] = 'upload/employers/'.$upload['raw_name'].'_thumb'.$upload['file_ext'];
					// tao image thumb
						$config['image_library'] = 'gd2';
						$config['source_image'] = $upload['full_path'];
						$config['thumb_maker'] = '_thumb';
						$config['create_thumb'] = TRUE;
						$config['maintain_ratio'] = FALSE;
						$config['quality'] = '100%';
						$config['width'] = '100';
						$config['height'] = '120';
						$config['new_image'] = $upload['file_name'];	
						$this->load->library('image_lib', $config);
						$this->image_lib->resize();
						$this->image_lib->clear();
						if($image !='' && $image_thumb !='')
						{
						$this->deleteFile($image);
						$this->deleteFile($image_thumb);
						}
					
						}	
					}
					else
					{
						if($image !='' && $image_thumb !='') {
						$data['image'] = $image;
						$data['image_thumb'] = $image_thumb;
						} else {
							$data['image'] = '';
							$data['image_thumb'] = '';
						}
					}
					
					$this->EM->insert_x4_register_descript($data);
					$this->loadMail();
					$this->email->from('nongtinh3@gmail.com','Thanh Minh');
					$this->email->to($this->input->post('txtemail'));
					$this->email->subject("Register thành công");
					$url = site_url('employer/active_login/'.$data['em_code_active']);
					$this->email->message("congratulate you've successfully registered X-tanlent. You must activate your new account login".anchor(($url)));
					
					if($this->email->send())
						{
							$data['error'] = "Send email successfully";							
							redirect('employer/thongbao');
						}
					
					
				
				}
				else
				{					
				$data['error'] = "You have failed to register";
				redirect('employer/register');
				}
			}
		}
		$this->site_title = 'Register | Talents Project Version 1';
		$this->render($this->load->view('account/register', $data, TRUE), $this->layout_em);
	}
	function thongbao()
		{
			
			$data = array();
			$data['error'] = "You have successfully registered. Request your activation email before logging";
			$this->site_title =  "Register Seeker | XTAsea-talents.com";
			$this->render($this->load->view('account/thanks_signup',$data,TRUE),$this->layout_em);
		}
	function active_login()
	{
		
		$data = array();
		$uid = $this->uri->segment(3);
		
		if($q =  $this->EM->active_x4_register($uid))
		{
			$data['error'] = "Thanh cong";
		}
		else{
			$data['error'] = "khong thanh cong";
		}
		$this->site_title = 'Thanks Signup | Talents Project Version 1';
		$this->render($this->load->view('account/thanks_signup', $data, TRUE), $this->layout_em);
		
	}
	function check_email()
	{
		
		$email = $this->input->get('email');
		if($this->EM->check_user($email,null))		
			{
				echo "The email address has already been used.";
			}
			else
			{
				echo "The email adress is still available.";		
			}		
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
	
	function test2()
	{
		$data = array();
		$this->checklogin();
		$this->db->where('lang_code',$this->nn);
		$data['q'] = $this->db->get('x4_category')->result();
		$this->site_title = "test";
		$this->render($this->load->view('test', $data, TRUE), $this->layout_em);
	}
	function send_message()
	{
		//$data = array();
		$this->checklogin();
		$data['message'] = $this->input->post('mess');
		$data['id_seeker'] = $this->input->post('id_seeker');
		$data['id_employer'] = $this->input->post('id_employer');
		if($this->EM->insert_message($data))
		{
			$ok = array('status' => true, 'info' => 'The message of you sended');	
		} else {
			$ok = array('status' => false, 'info' => 'The message not send. Plz try again!');	
		}
		
		echo json_encode($ok);
	}
	
}
// End file home.php
// Location file: ./modules/emlpoyer/controllers/employer.php