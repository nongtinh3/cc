<?php
	require_once APPPATH.'third_party/employer_controller'.EXT;
	class Test extends Employer_controller
	{
		function __construct()
		{
			parent::__construct();
		}
		function change()
		{
			$data = array();
			$data['lang'] = $this->input->get('lang');
			$data['url_curent'] = $this->input->get('url');
			redirect($data['url_curent'],'refresh');
			$this->load->view('test',$data);
			
		}
		function index()
		{
			$data = array();
			$data['city'] = $this->EM->show_x4_city();	
			
			$gt[] = $this->input->post('selectAll2');
			$act = $this->input->post('ok');			
			if($act =="Ok")
			{				
				foreach($gt as $row)
				{
					$data['a'] = implode(',',$row);	
					$this->EM->insert_a($data);
				}
						
			}
				
			$this->site_title = "Test online";
			$this->load->view('test',$data);
		}
		function show()
		{
			$data = array();
			$data['aa'] = $this->EM->show_test();
			$this->site_title = "Test online";
			$this->load->view('test2',$data);
		}
	}
	
?>