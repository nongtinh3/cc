<?php if(!defined('BASEPATH')) exit ('No direct script allow access');

/*-------------------------------------------------------
| Talents version 1
| Home Controller
| Author: Nguyen Duc Hung
| Create_date: 20/11/2011
---------------------------------------------------------*/

require_once APPPATH.'third_party/employer_controller'. EXT;

class Home extends employer_controller
{
	function __construct()
	{
		parent:: __construct();
	}
	
	function index()
	{
		$this->checklogin();
		$data = array();
		$data['em_post_job'] = $this->EM->show_post_job_employer($_SESSION['em_id']);
		
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
						if($this->EM->delete_post($id))
						{
							$this->EM->delete_server($id);
							$this->EM->delete_profess_skill($id);
						}
						
					}
					redirect('employer/home','refresh');
				}
				
			}
			
		}
		$this->site_title = 'Empoyer | Talents Project Version 1';
		
		$this->render($this->load->view('home', $data, TRUE), $this->layout_em);
		
	}
	function delete_post()
	{
		$data = array();
		$uid = $this->uri->segment(4);
		if($this->EM->delete_post($uid))
		{		
			$this->EM->delete_server($uid);		
			redirect('employer/home/');
		}
		
	}
	
}
// End file home.php
// Location file: ./modules/employer/controllers/home.php