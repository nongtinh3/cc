<?php if(!defined('BASEPATH')) exit ('No direct script allow access');

	require_once APPPATH.'third_party/employer_controller'.EXT;
	
	class Update_profile extends Employer_controller
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
			
			$valid = $this->form_validation;		
			$valid->set_rules('txtpass',$this->lang->line('Enter Password'),'trim|required|min_lenght[4]|max_lenght[12]');
			
			$uid = $this->input->post('id');		
			$data['em_country'] = $this->EM->show_x4_city();
			$data['em_province'] = $this->EM->show_province();
			$data['em_info'] = $this->EM->x4_get_id($_SESSION['em_id']);
			$data['em_size'] = $this->EM->show_x4_size();
			$data['em_password'] = md5($this->input->post('txtpass'));
			$image 					= $this->input->post('image');
			$image_thumb 			= $this->input->post('image_thumb');
			if($valid->run() == TRUE)
			{
				if($uid!='')
				{
				if($this->EM->update_x4_register($uid,$data))
				{
					$this->session->set_flashdata("wanring",$this->lang->line('Update successful'));
					$data['em_id']		 	= 		$this->db->insert_id();
					$data['em_com_name']	=		$this->input->post('txt_company_name');
					$data['em_com_size']	=		$this->input->post('txt_company_size');
					$data['em_com_address']	=		$this->input->post('txt_address');
					$data['em_com_district']=		$this->input->post('txt_district');
					$data['em_com_country']	=		$this->input->post('txt_country');
					$data['em_com_profile']	=		nl2br($this->input->post('txt_company_profile'));
					$data['em_com_province']=		$this->input->post('txt_company_province');
					$data['em_com_web']		=		$this->input->post('txt_company_web');
					$data['em_contact_name']=		$this->input->post('txt_contact_name');
					$data['em_contact_position']=	$this->input->post('txt_contact_person');
					$data['em_phone']		=		$this->input->post('txt_telephone');
					$data['em_mobile']      =		$this->input->post('txt_mobile');
					$data['em_fax']         =		$this->input->post('txt_fax');
					
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
					$data['error'] =$this->lang->line('Update successful');					
					if($this->EM->update_x4_register_descript($uid,$data))
					{
						redirect('employer/update_profile','refresh');
					}
					
					
				}
			}
			}
			$this->site_title = 'Update Profile | Talents Project Version 1';
			//$this->render($this->load->view('account/test',$data,TRUE),$this->layout_em);
			$this->render($this->load->view('account/update_profile',$data,TRUE),$this->layout_em);
		}
	}
