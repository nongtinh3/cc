<?php
	class Employer_model extends CI_Model
	{
		var $table = "x4_employer";
		var $table2 = "x4_employer_descript";
		function __construct()
		{
			parent::__construct();
		}
		function check_sql($str) {
		if (is_array($str))
			return '';
		else if (function_exists('mysql_real_escape_string'))
			return mysql_real_escape_string($str);
		else if (function_exists('mysql_escape_string'))
			return mysql_escape_string($str);

		return null;
		}
		function x4_register($data)
		{
			$data = array(
				'em_email'     	=>$data['em_email'],
				'em_password'	=>$data['em_password'],		
				'em_code_active'=>$data['em_code_active'],	
				'em_code_forgot_pass'=>$data['em_code_forgot_pass'],	
				'em_date_join'  =>$data['em_date_join']		
			);
			$this->db->set($data);
			if($this->db->insert($this->table)) return TRUE; else return FALSE;
		}
		function update_x4_register($id,$data)
		{
			$this->db->where('em_id',$id);
			$data = array(				
				'em_password'	=>$data['em_password']				
			);
			$this->db->set($data);
			if($this->db->update($this->table)) return TRUE; else return FALSE;
		}
		function update_x4_email($id,$data)
		{
			$q = $this->db->get_where($this->table,array('em_id'=>$id));
			if($q->num_rows() == 1)
			{
				$data = array(
					'em_email' =>$data['em_email']
				);
				$this->db->set($data);
				$this->db->update($this->table);
				return true;
			}
			else
			{
				return false;
			}
			
		}
		function nl2br_revert($string)
		 {
    	return preg_replace('`<br(?: /)?>([\\n\\r])`', '$1', $string);
		} 
		function insert_x4_register_descript($data)
		{			
			$data = array(
				'em_id' 			=>$data['em_id'],
				'em_com_name' 		=>$data['em_com_name'],
				'em_com_size'   	=>$data['em_com_size'],
				'em_com_profile'	=>$data['em_com_profile'],
				'em_com_address'	=>$data['em_com_address'],
				'em_com_district'	=>$data['em_com_district'],
				'em_com_country'	=>$data['em_com_country'],
				'em_com_province' 	=>$data['em_com_province'],
				'em_com_web'		=>$data['em_com_web'],
				'em_contact_name'   =>$data['em_contact_name'],
				'em_contact_position'=>$data['em_contact_position'],
				'em_phone'			=>$data['em_phone'],
				'em_mobile'			=>$data['em_mobile'],
				'em_fax'			=>$data['em_fax'],
				'em_logo'			=>$data['image']				
			);
			$this->db->set($data);
			if($this->db->insert($this->table2)) return TRUE; else return FALSE;
		}
		function update_x4_register_descript($id,$data)
		{
			$this->db->where('em_id',$id);			
			$data = array(				
				'em_com_name' 		=>$data['em_com_name'],
				'em_com_size'   	=>$data['em_com_size'],
				'em_com_profile'	=>$data['em_com_profile'],
				'em_com_address'	=>$data['em_com_address'],
				'em_com_district'	=>$data['em_com_district'],
				'em_com_country'	=>$data['em_com_country'],
				'em_com_province' 	=>$data['em_com_province'],
				'em_com_web'		=>$data['em_com_web'],
				'em_contact_name'   =>$data['em_contact_name'],
				'em_contact_position'=>$data['em_contact_position'],
				'em_phone'			=>$data['em_phone'],
				'em_mobile'			=>$data['em_mobile'],
				'em_fax'			=>$data['em_fax'],
				'em_logo'			=>$data['image']				
			);
			$this->db->set($data);
			if($this->db->update($this->table2)) return TRUE; else return FALSE;
		}
		
		function active_x4_register($uid)
		{
			$result = $this->db->get_where('x4_employer',array('em_code_active'=>$uid));				
			if($result->num_rows() == 1)
			{
				$data = array(
					'active'=>1
				);
				$this->db->set($data);
				$this->db->update("x4_employer");				
				return true; 
			}
			else
			{
				return false;
			}
		}
		function change_forgot_password($uid,$data)
		{
			$this->db->where('em_code_forgot_pass',$uid);			
			$data = array(				
				'em_password'	=>$data['em_password']				
			);
			$this->db->set($data);
			if($this->db->update($this->table)) return TRUE; else return FALSE;
			
		}
		function x4_show()
		{
			$q = $this->db->get($this->table);
			return $q->result();
		}
		function x4_get_id($id)
		{
			$q ="select * from x4_employer,x4_employer_descript where x4_employer.em_id = x4_employer_descript.em_id and x4_employer.em_id =?";
			$result = $this->db->query($q,$id);			
			return $result->row();
		}
		function get_com_size($uid)
		{
			$q = $this->db->get_where('x4_size', array('id'=>$uid));
			if($q->num_rows()>0)
			{
				$ok = $q->row();
				return $ok->em_size;				
			}
			else
			{
				return false;
			}
		}
		function get_com_country($uid)
		{
			$q = $this->db->get_where('x4_city', array('id'=>$uid));
			if($q->num_rows()>0)
			{
				$ok = $q->row();
				return $ok->em_city;				
			}
			else
			{
				return false;
			}
		}
		function get_province($uid)
		{
			$q = $this->db->get_where('x4_province', array('id'=>$uid));
			if($q->num_rows()>0)
			{
				$ok = $q->row();
				return $ok->em_vince;				
			}
			else
			{
				return false;
			}
		}
		function get_category($uid)
		{
			$q = $this->db->get_where('x4_category', array('id'=>$uid));
			if($q->num_rows()>0)
			{
				$ok = $q->row();
				return $ok->em_cat_name;				
			}
			else
			{
				return false;
			}
		}
		function get_language($uid)
		{
			$q = $this->db->get_where('x4_language', array('id'=>$uid));
			if($q->num_rows()>0)
			{
				$ok = $q->row();
				return $ok->em_la_name;				
			}
			else
			{
				return false;
			}
		}
		function get_level($uid)
		{
			$q = $this->db->get_where('x4_level', array('id'=>$uid));
			if($q->num_rows()>0)
			{
				$ok = $q->row();
				return $ok->em_level;				
			}
			else
			{
				return false;
			}
		}
		function get_city($uid)
		{
			$q = $this->db->get_where('x4_province', array('id'=>$uid));
			if($q->num_rows()>0)
			{
				$ok = $q->row();
				return $ok->em_vince;				
			}
			else
			{
				return false;
			}
		}
		function get_salary_type($uid)
		{
			$q = $this->db->get_where('x4_salary_type', array('id'=>$uid));
			if($q->num_rows()>0)
			{
				$ok = $q->row();
				return $ok->em_salary;				
			}
			else
			{
				return false;
			}
		}
		function get_skill($uid)
		{
			$q = $this->db->get_where('x4_skill', array('id'=>$uid));
			if($q->num_rows()>0)
			{
				$ok = $q->row();
				return $ok->skill_name;				
			}
			else
			{
				return false;
			}
		}
		function get_profess($uid)
		{
			$q = $this->db->get_where('x4_profess', array('id'=>$uid));
			if($q->num_rows()>0)
			{
				$ok = $q->row();
				return $ok->profess_name;				
			}
			else
			{
				return false;
			}
		}
		function check_user($username , $em_id =null)
		{
			if($em_id != null)
			{
				$this->db->where('em_id!=',$em_id);
			}
			$this->db->where('em_email',$username);
			$this->db->select('em_id');
			$q = $this->db->get($this->table);
			if($q->num_rows()>0)
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
		
		
		function show_x4_size()
		{
			$q = "select * from x4_size order by id asc";
			$result=$this->db->query($q);
			return $result->result();
		}
		function show_x4_city()
		{
			$q = "select * from x4_city order by id asc";
			$result=$this->db->query($q);
			return $result->result();
		}
		function show_x4_category()
		{
			$q = "select * from x4_category order by id asc";
			$result=$this->db->query($q);
			return $result->result();
		}
		function selectAll($where = null,$order =null ,$limit=null)
		{
			if($where !=null)
			{
				foreach($where as $field =>$value)
				{
					if($field[0] =='?')
					{
						$this->db->where_in(substr($field,1),$value);
					}
					else if($field[0] =='!')
					{
						$this->db->where_not_in(substr($field,1),$value);
					}
					else
					{
						$this->db->where($field,$value);
					}
				}
			}
			if($order !=null)
			{
				foreach($order as $key=>$value)
				{
					$this->db->order_by($key,$value);
				}
			}
			if($limit !=null)
			{
				$this->db->limit($limit['max'],$limit['begin']);
			}
			$q = $this->db->get($this->table);
			return $q;
		}
		function post_job($data)
		{
			$data = array(
				'em_id'				=>$data['em_id'],
				'job_title' 		=>$data['job_title'],
				'job_code' 			=>$data['job_code'],
				'job_level'			=>$data['job_level'],
				'job_type' 			=>$data['job_type'],
				'job_salary_min' 	=>$data['min'],
				'job_salary_max' 	=>$data['max'],
				'job_salary_other' 	=>$data['other'],
				'job_work'   		=>$data['job_work_place'],
				'job_category'		=>$data['job_category'],
				'job_description' 	=>$data['job_desc'],
				'job_requirement' 	=>$data['job_requirement'],
				'job_apply'       	=>$data['job_date_end'],
				'job_language'    	=>$data['job_language'],
				'job_begin'		  	=>$data['job_begin'],
				'job_skill'			=>$data['job_skill']
				
			);
			$this->db->set($data);
			if($this->db->insert("x4_post_job")) return TRUE; else return FALSE;
		}
		function update_post_job($id,$data)
		{
			$this->db->where('id',$id);
			$data = array(	
				'em_id'				=>$data['em_id'],			
				'job_title' 		=>$data['job_title'],
				'job_code' 			=>$data['job_code'],
				'job_level'			=>$data['job_level'],
				'job_type' 			=>$data['job_type'],
				'job_salary_min' 	=>$data['min'],
				'job_salary_max' 	=>$data['max'],
				'job_salary_other' 	=>$data['other'],
				'job_work'   		=>$data['job_work_place'],
				'job_category'		=>$data['job_category'],
				'job_description' 	=>$data['job_desc'],
				'job_requirement' 	=>$data['job_requirement'],
				'job_apply'       	=>$data['job_date_end'],
				'job_language'    	=>$data['job_language'],
				'job_begin'		  	=>$data['job_begin'],
				'job_skill'         =>$data['job_skill']								
			);
			$this->db->set($data);
			if($this->db->update("x4_post_job")) return TRUE; else return FALSE;
		}
		function insert_profess_skill($data)
		{			
			$data = array(
				'post_id'           =>$data['post_id'],						
				'name_profess'       =>$data['name_profess'],
				'name_skill'        =>$data['name_skill']
				
										
			);
			$this->db->set($data);
			if($this->db->insert("profess_skill")) return TRUE; else return FALSE;
		}
		function add_server($data)
		{
			$data = array(
				'em_id'=>$data['em_id'],
				'post_id'=>$data['post_id'],
				'post_id' =>$data['post_id'],
				'bold_red' =>$data['bold_red'],
				'top_level' =>$data['top_level'],
				'top_job'   =>$data['top_job']
			);
			$this->db->set($data);
			$this->db->insert("x4_service");
		}
		function update_server($id,$data)
		{
			$this->db->where('post_id',$id);
			$data = array(	
				'em_id'=>$data['em_id'],			
				'post_id' =>$data['post_id'],
				'bold_red' =>$data['bold_red'],
				'top_level' =>$data['top_level'],
				'top_job'   =>$data['top_job']
			);
			$this->db->set($data);
			$this->db->update("x4_service");
		}
		function delete_post($id)
		{			
			$this->db->where('id',$id);			
			return $this->db->delete("x4_post_job");
		}
		function delete_seeker_apply($id)
		{			
			$this->db->where('id',$id);			
			return $this->db->delete("x5_job_save");
		}
		function delete_server($id)
		{			
			$this->db->where('post_id',$id);			
			return $this->db->delete("x4_service");
		}
		function delete_profess_skill($id)
		{			
			$this->db->where('post_id',$id);			
			return $this->db->delete("profess_skill");
		}
		function x4_server($data)
		{
			$data = array(
				'em_id'				=>$data['em_id'],
					
			);
			$this->db->set($data);
			if($this->db->insert("x4_post_job")) return TRUE; else return FALSE;
		}
		function show_em_level()
		{
			$q = $this->db->get("x4_level");
			return $q->result();
		}
		function show_em_type()
		{
			$q = $this->db->get("x4_job_type");
			return $q->result();
		}
		function show_salary_type()
		{
			$q = $this->db->get("x4_salary_type");
			return $q->result();
		}
		function show_language()
		{
			$q = $this->db->get("x4_language");
			return $q->result();
		}
		function show_province()
		{
			$q = $this->db->get("x4_province");
			return $q->result();
		}
		function show_post_job($uid)
		{		
			
			$this->db->where('id',$uid);
			$q = $this->db->get("x4_post_job");
			return $q->row();
		}
		function show_post_job_employer($uid)
		{		
			
			$this->db->where('em_id',$uid);
			$q = $this->db->get("x4_post_job");
			return $q->result();
		}
		function show_top_week()
		{			
			$q = $this->db->get("x4_top_job");
			return $q->result();
		}
		function show_x4_service($uid)
		{			
			$this->db->where('post_id',$uid);
			$result = $this->db->get("x4_service");			
			return $result->row();
		
		}
		function insert_a($data)
		{			
			$data = array(
				'a'=>$data['a']
			);
			$this->db->set($data);
			return $this->db->insert("test");
		}
		function show_test()
		{
			$q = $this->db->get("test");
			return $q->result();
		}
		function show_profess($uid)
		{
			$this->db->where('order_cate',$uid);
			$q = $this->db->get("x4_profess");
			return $q->result();	
		}
		function show_skill($uid)
		{
			$this->db->where('cate_id',$uid);
			$q = $this->db->get("x4_skill");
			return $q->result();	
		}
		function show_profess_skill($id)
		{
			$this->db->where('post_id',$id);
			$q = $this->db->get('profess_skill');
			return $q->result();
		}
		/*function show_apply_seeker($uid)
		{
			$this->db->where('em_post_id',$uid);
			$q = $this->db->get('x5_seeker_apply_job');
			return $q->result();
		}*/
		function get_email($id)
		{
			$q = $this->db->get_where('x5_seeker',array('id'=>$id));
			if($q->num_rows()>0)
			{
				return $q->row()->se_email;
			}
			else
			{
				return false;
			}
		}
		function show_apply_seeker($uid)
		{
			$this->db->where('save_job_id',$uid);
			$q = $this->db->get('x5_job_save');
			return $q->result();
		}
		function get_by_id_seeker($uid)
		{
			$sql = "select * from x5_seeker_post,x5_seeker_post2 where x5_seeker_post.se_id = x5_seeker_post2.pid_job1 and  x5_seeker_post.se_id = ?";
			$result = $this->db->query($sql,$uid);
			return $result->row();
		}
		
		function get_by_id_seeker_vt($uid)
		{
			$sql = "select * from x5_seeker_post,x5_seeker_post2 where x5_seeker_post.se_id = x5_seeker_post2.pid_job1 and  x5_seeker_post2.pid = ?";
			$result = $this->db->query($sql,$uid);
			return $result->row()->se_vitri_mm;
		}
		function get_thongtin_apply($uid)
		{
			$sql = "select * from x5_seeker_post,x5_seeker_post2 where x5_seeker_post.se_id = x5_seeker_post2.pid_job1 and  x5_seeker_post2.pid = ?";
			$result = $this->db->query($sql,$uid);
			return $result->row();
		}
		function get_by_national($id)
		{
			$q = $this->db->where('id',$id);			
			return $this->db->get('national')->row()->name_national;
		}
		function get_x5_seeker_info($id)
		{
			$q = "select * from x5_seeker_post,x5_seeker_post2 where x5_seeker_post.se_id = x5_seeker_post2.pid_job1 and  x5_seeker_post2.pid = ?";
			$result = $this->db->query($q,$id);			
			return $ok = $result->row();
		}
		function show_x5_seeker($uid)
		{
			$this->db->where('id',$uid);
			$q = $this->db->get("x5_seeker");	
			return $q->row();
		}
		function get_by_country($id)
		{
			$q = $this->db->where('id',$id);			
			return $this->db->get('x4_city')->row()->em_city;
		}
		function get_by_seeker($uid)
		{
			$this->db->where('id',$uid);
			$q = $this->db->get('x5_seeker');
			return $q->row();
		}
		function get_thongtin($uid)
		{
			$this->db->where('id',$uid);
			$q = $this->db->get('x5_seeker');
			return $q->row();
		}
		function get_x4_job_type($uid)
		{
			$q = $this->db->get_where('x4_job_type',array('id'=>$uid));
			if($q->num_rows() >0)
			{
				return $q->row()->em_job_name;
			}
			else{
			return false;	
			}
			
		}
		function get_by_seeker_apply($uid)
		{
			$this->db->where('se_id',$uid);
			$q = $this->db->get('x5_seeker_apply_job');
			return $q->row();
		}
		function get_bangcap($uid)
			{
				$q = $this->db->get_where('x5_bangcap', array('id'=>$uid));
				if($q->num_rows()>0)
				{
					$ok = $q->row();
					return $ok->ten_bangcap;				
				}
				else
				{
					return false;
				}
			}
		function get_ngoaingu($uid)
		{
			$q = $this->db->get_where('x5_ngoaingu', array('id'=>$uid));
			if($q->num_rows()>0)
			{
				$ok = $q->row();
				return $ok->ten_ngoaingu;				
			}
			else
			{
				return false;
			}
		}
		function total($dk = null)
		{
			if($dk != null)
			{
				$this->db->where('p_id', $dk);
			}
			
			
			
			return $this->db->count_all_results("x4_post_job");
		}
		
		function news_phantrang($begin,$max)
		{
		if($begin == ''){
			$begin = 0;
		}
		if($max >= 0 && $max != ''){
			$limit = 'limit '.$begin.','. $max;
		}else{
			$limit ='';	
		}
		return $this->db->query('select * from x4_post_job order by id '. $limit)->result();	
		}
		
		function insert_message($data)
		{
			$data = array(
				'id_seeker'   =>$data['id_seeker'],
				'id_employer' =>$data['id_employer'],
				'message'	  =>$data['message']
				
			);
			$this->db->set($data);
			if($this->db->insert('message')) return true; else return false;
		}
		function get_testonline($uid)
		{	
			$this->db->group_by(array('id_chude','id_user'));
		
			$this->db->where('id_job',$uid);
			$q = $this->db->get('user_test');
			return $q->result();
		}
		function update_message_seeker($id,$data)
		{
			$this->db->where('pid',$id);
			$data = array(
				'se_message' => $data['message'],
				'em_id'		 => $data['em_id'],
				'se_date'	  =>$data['se_date']	
			);
			$this->db->set($data);
			return $this->db->update('x5_seeker_post2');
		}
		
		
	}
	
?>