<?php if(!defined('BASEPATH')) exit ('No direct script allow access');

/*-------------------------------------------------------
| Talents version 1
| Post job Controller
| Author: Nguyen Duc Hung
| Create_date: 20/11/2011
---------------------------------------------------------*/

require_once APPPATH.'third_party/employer_controller'. EXT;

class Post_job extends employer_controller
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
		
		$data['em_country'] = $this->EM->show_x4_city();
		$data['em_size'] = $this->EM->show_x4_size();
		///$data['em_info'] = $this->EM->x4_get_id($_SESSION['em_id']);
		$data['em_info'] = $this->EM->x4_get_id($_SESSION['em_id']);
		$data['em_level'] = $this->EM->show_em_level();
		$data['em_type'] = $this->EM->show_em_type();
		$data['em_category'] = $this->EM->show_x4_category();
		$data['em_salary'] = $this->EM->show_salary_type();
		$data['em_language'] = $this->EM->show_language();
		$valid = $this->form_validation;		
		$valid->set_rules('txt_job_title',$this->lang->line('Job Title'),'trim|required');
		$valid->set_rules('joblevelid',$this->lang->line('Job Level'),'trim|required');
		$valid->set_rules('typeworkingid',$this->lang->line('Job Type'),'trim|required');
		$valid->set_rules('salaryrangeid',$this->lang->line('Salary Range'),'trim|required');
		$valid->set_rules('jobdescription',$this->lang->line('Job Description'),'trim|required');
		$valid->set_rules('job_requirement',$this->lang->line('Job Requirement'),'trim|required');	
		$valid->set_rules('txtBirthday',$this->lang->line('Brithday'),'trim|required');			
		//if($this->input->post('salarymin') == null && $this->input->post('salarymax'))
		
		$data['min'] = ($this->input->post('salarymin') !='') ? $this->input->post('salarymin') : 0; // Cai ni co the co hoac ko
		$data['max'] = ($this->input->post('salarymax') !='') ? $this->input->post('salarymax'): 0;// Cai ni co the co hoac ko
		if($data['min'] !='' && $data['max'] !='')
		{
			$data['other'] = 0; 
		} else {
			$data['other'] = $this->input->post('salaryrangeid');	
		}
		//$data['em_post_job'] = $this->EM->show_post_job($_SESSION['em_id']);
		$data['em_post_job'] = $this->EM->show_post_job($_SESSION['em_id']);	
		$data['job_title'] = $this->input->post('txt_job_title');
		$data['job_code'] = $this->input->post('txt_job_code');
		$data['job_level'] = $this->input->post('joblevelid');
		$data['job_type'] = $this->input->post('typeworkingid');	
		$data['job_work_place'] = $this->input->post('work_place');
		$data['job_category'] = $this->input->post('job_category');
		$data['job_desc'] = nl2br($this->input->post('jobdescription'));
		$data['job_requirement'] = nl2br($this->input->post('job_requirement'));
		$data['job_date_end'] = $this->input->post('txtBirthday');
		$data['job_begin'] =  date('j/n/Y');
		$data['em_id']          = $this->input->post('id');
		$data['job_language']   = $this->input->post('txt_language');
		
		$uid = $this->input->post('id');
		
		// Thi phai la d^ata['skill'ơ chu sao nhiu do no hieudc
		
		
		
		
		$act = $this->input->post('btnJob');
				$skill = $this->input->post('selectAll');				
				if(!empty($skill) && gettype($skill) == 'array')
					{
						$ep_do = implode(",", $skill);
						$data['job_skill'] = $ep_do;
						
					} else {
						$data['job_skill'] = 0;							
					}		
		
			if($this->form_validation->run() == TRUE)
			{	
					
				if($this->EM->post_job($data))
				{
					$post_id = $this->db->insert_id();
					//$data['em_id']          = $this->input->post('id');
					$this->session->set_userdata('post_id',$post_id);	
					//$this->session->userdata('post_id') = 	$post_id;				
					redirect('employer/post_job/post_job_2');				
				} else {
					$this->session->set_flashdata("wanring","Co van de");
					redirect('employer/post_job/');	
				}
				
			}
		
		$this->site_title = 'Post Job | Talents Project Version 1';
		$this->render($this->load->view('post_job/post_job_1', $data, TRUE), $this->layout_em);
		
	} 	
	function get_chuyenmon()
	{
		$id = (int)$this->input->post('id');
		
		$this->db->where('cate_id', $id);
		$q = $this->db->get('x4_skill');
		if($q->num_rows() > 0 )
		{
			echo "<option value=''>--Chon CM--</option>";
			foreach($q->result() as $row)
			{
				echo "<option value=" . $row->id .">" . $row->skill_name . "</option>";	
			}	
		} else {
			return;	
		}
		
	} 
	function get_skill()
	{
		$id = (int)$this->input->post('id');
		
		$this->db->where('order_cate', $id);
		$q = $this->db->get('x4_skill');
		if($q->num_rows() > 0 )
		{
			echo "<option value=''>--Chon CM--</option>";
			foreach($q->result() as $row)
			{
				echo "<option value=" . $row->id .">" . $row->skill_name . "</option>";	
			}	
		} else {
			return;	
		}
	}
	function post_job_2()
	{
		$this->checklogin();
		$data = array();
		
	
		
		$this->session->set_userdata($data);		
		$data['em_city_info'] = $this->EM->show_x4_city();
		$data['em_size'] = $this->EM->show_x4_size();
		$data['em_info'] = $this->EM->x4_get_id($_SESSION['em_id']);
		$data['em_level'] = $this->EM->show_em_level();
		$data['em_type'] = $this->EM->show_em_type();
		$data['em_category'] = $this->EM->show_x4_category();
		$data['em_salary'] = $this->EM->show_salary_type();
		$data['em_language'] = $this->EM->show_language();
		$data['em_province'] = $this->EM->show_province();
		$data['top']         = $this->EM->show_top_week();			
		$data['em_post_job'] = $this->EM->show_post_job($this->session->userdata('post_id'));	
		
		$data['bold_red'] = $this->input->post('txt_bold_red');
		$data['top_level'] = $this->input->post('txt_top_level');
		$data['top_job'] = $this->input->post('txt_top_job');	
		
		$data['em_id'] = $_SESSION['em_id'];		
		$data['post_id'] =  $this->session->userdata('post_id');
		$id = $this->session->userdata('post_id');	
		$act = $this->input->post('ok');
		$profess[] = $this->input->post('profess');
		$skill[] = $this->input->post('skill') ;
		
		if($act == $this->lang->line('Continue'))
		{
			
						
			if($id)
			{
										
					foreach($profess as $row)
					{
						if($row == '')
						{
							$data['name_profess'] = 0;
						}
						else
						{
						$data['name_profess'] = implode(',',$row);
						}
						
					}	
				
				
					foreach($skill as $row)
					{
						if($row =='')
						{
							$data['name_skill'] = 0;
						}
						else
						{
						$data['name_skill'] = implode(',',$row);	
						}
						
					}
				
				$this->EM->insert_profess_skill($data);
				
				$this->EM->add_server($data);				
			}
				
			
		
		redirect('employer/post_job/post_job_3');
		}
		
			
		$this->site_title = 'Post Job | Talents Project Version 1';
		$this->render($this->load->view('post_job/post_job_2', $data, TRUE), $this->layout_em);
	}
	function post_job_3()
	{
		$this->checklogin();
		$data = array();
		$data['post_id'] = $this->session->userdata('post_id');
		$data['em_city_info']= $this->EM->show_x4_city();
		$data['em_size']     = $this->EM->show_x4_size();
		$data['em_info']     = $this->EM->x4_get_id($_SESSION['em_id']);
		$data['em_level']    = $this->EM->show_em_level();
		$data['em_type']     = $this->EM->show_em_type();
		$data['em_category'] = $this->EM->show_x4_category();
		$data['em_salary']   = $this->EM->show_salary_type();
		$data['em_language'] = $this->EM->show_language();
		$data['em_province'] = $this->EM->show_province();
		$data['em_service']  = $this->EM->show_x4_service($this->session->userdata('post_id'));
		$data['em_post_job'] = $this->EM->show_post_job($this->session->userdata('post_id'));
		$data['profess_show'] = $this->EM->show_profess_skill($this->session->userdata('post_id'));
		$act = $this->input->post('ok');
		if($act == $this->lang->line('Finish'))
		{
			$data = array(
			'post_id' =>''
			);
			$this->session->unset_userdata($data);
			//unset($this->session->userdata('post_id'));
			redirect('employer/post_job/thanks','refresh');
		}
		$this->site_title    = 'Post Job | Talents Project Version 1';
		$this->render($this->load->view('post_job/post_job_3', $data, TRUE), $this->layout_em);
	}
	function thanks()
	{
		$this->checklogin();
		$data = array();
		$this->site_title    = 'Thanks | Talents Project Version 1';
		$this->render($this->load->view('post_job/thanks_post_job', $data, TRUE), $this->layout_em);		
	}
	function views()
	{
		$this->checklogin();
		$data = array();
		$uid = $this->uri->segment(4);
		$data['post_id'] = $this->session->userdata('post_id');
		$data['em_city_info']= $this->EM->show_x4_city();
		$data['em_size']     = $this->EM->show_x4_size();
		$data['em_info']     = $this->EM->x4_get_id($_SESSION['em_id']);
		$data['em_level']    = $this->EM->show_em_level();
		$data['em_type']     = $this->EM->show_em_type();
		$data['em_category'] = $this->EM->show_x4_category();
		$data['em_salary']   = $this->EM->show_salary_type();
		$data['em_language'] = $this->EM->show_language();
		$data['em_province'] = $this->EM->show_province();
		$data['show_service'] = $this->EM->show_x4_service($uid);
		$data['em_post_job'] = $this->EM->show_post_job($uid);
		$data['profess_show'] = $this->EM->show_profess_skill($this->session->userdata('post_id'));
		$act = $this->input->post('ok');
		if($act == "Finish")
		{
				$data = array(
			'post_id' =>''
			);
			//unset($this->session->userdata('post_id'));
			$this->session->unset_userdata($data);
			redirect('employer/post_job/thanks','refresh');
		}
		$this->site_title    = 'Post Job | Talents Project Version 1';
		$this->render($this->load->view('post_job/views', $data, TRUE), $this->layout_em);
	}
	function edit_post()
	{
		$this->checklogin();
		$data = array();
		$uid = $this->uri->segment(4);
		
		$data['em_country'] = $this->EM->show_x4_city();
		$data['em_city_info']= $this->EM->show_x4_city();
		$data['em_size']     = $this->EM->show_x4_size();
		$data['em_level']    = $this->EM->show_em_level();
		$data['em_type']     = $this->EM->show_em_type();
		$data['em_category'] = $this->EM->show_x4_category();
		$data['em_salary']   = $this->EM->show_salary_type();
		$data['em_language'] = $this->EM->show_language();
		$data['em_province'] = $this->EM->show_province();
		$data['top']         = $this->EM->show_top_week();
		$data['show_service'] = $this->EM->show_x4_service($uid);
		$data['em_info']     = $this->EM->x4_get_id($_SESSION['em_id']);
		$data['em_post_job'] = $this->EM->show_post_job($uid);
		
		
		// kiem tra ton tai form validation
		
		$valid = $this->form_validation;
		$valid->set_rules('txt_job_title',$this->lang->line('Job Title'),'trim|required');
		$valid->set_rules('joblevelid',$this->lang->line('Job Level'),'trim|required');
		$valid->set_rules('typeworkingid',$this->lang->line('Job Type'),'trim|required');
		$valid->set_rules('salaryrangeid',$this->lang->line('Salary Range'),'trim|required');
		$valid->set_rules('jobdescription',$this->lang->line('Job Description'),'trim|required');
		$valid->set_rules('job_requirement',$this->lang->line('Job Requirement'),'trim|required');	
		$valid->set_rules('txtBirthday',$this->lang->line('Brithday'),'trim|required');	
		
		
		
				
		$data['job_title'] = $this->input->post('txt_job_title');
		$data['job_code'] = $this->input->post('txt_job_code');
		$data['em_id'] = $_SESSION['em_id'];
		$data['job_level'] = $this->input->post('joblevelid');
		$data['job_type'] = $this->input->post('typeworkingid');	
		$data['job_work_place'] = $this->input->post('work_place');
		$data['job_category'] = $this->input->post('job_category');
		$data['job_desc'] = nl2br($this->input->post('jobdescription'));
		$data['job_requirement'] = nl2br($this->input->post('job_requirement'));
		$data['job_date_end'] = $this->input->post('txtBirthday');
		$data['job_begin'] =  date('j/n/Y');
		$data['job_language']   = $this->input->post('txt_language');
		
		$data['post_id'] = $this->input->post('post_id');
		$data['bold_red'] = $this->input->post('txt_bold_red');
		$data['top_level'] = $this->input->post('txt_top_level');
		$data['top_job'] = $this->input->post('txt_top_job');
			
		
		$data['min'] = ($this->input->post('salarymin') !='') ? $this->input->post('salarymin') : 0; // Cai ni co the co hoac ko
		$data['max'] = ($this->input->post('salarymax') !='') ? $this->input->post('salarymax'): 0;// Cai ni co the co hoac ko
		if($data['min'] !='' && $data['max'] !='')
		{
			$data['other'] = 0; 
		} else {
			$data['other'] = $this->input->post('salaryrangeid');	
		}
		
		$_id = $this->input->post('post_id');
		$skill = $this->input->post('selectAll');				
				if(!empty($skill) && gettype($skill) == 'array')
					{
						$ep_do = implode(",", $skill);
						$data['job_skill'] = $ep_do;
						
					} else {
						$data['job_skill'] = 0;							
					}		
		if($valid->run() == TRUE)
		{
			if($_id!='')
			{
				
				if($this->EM->update_post_job($_id,$data))
				{
					
					$this->EM->update_server($_id,$data);					
					$data['error'] = "Update Confirm";	
					redirect('employer/post_job/edit_post/'.$uid,'refresh');			
								
				}
			}
			else
			{
				redirect('employer/home');
				
			}
		}
		
		
		$this->site_title    = 'Edit | Talents Project Version 1';
		$this->render($this->load->view('post_job/edit_post', $data, TRUE), $this->layout_em);
	}
		
}
// End file home.php
// Location file: ./modules/emlpoyer/controllers/employer.php