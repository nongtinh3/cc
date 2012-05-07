<?php if(!defined('BASEPATH')) exit('Woa...Not find system folder');
class Seeker_Controller extends CI_Controller {
	
	function __construct() {
	
		parent:: __construct();
		
		session_start();
		
		// Set date_time theo thuan
		date_default_timezone_set('Asia/Bangkok'); 
		
		$this->load->library('util');
		
		
	}

	function render($content, $layout) {
		
		$data['headers'] = $this->headers();
		$data['search'] = $this->search();
		$data['right'] = $this->right();
		$data['footers'] = $this->footer();
		$data['content'] = $content;
		
		$this->load->view($layout, $data);
		
	}
	//cai nay de load templ ko co khung tim kiem
	function render2($content, $layout) {
		
		$data['headers'] = $this->headers();
		//$data['search'] = $this->search();
		$data['right'] = $this->right();
		$data['footers'] = $this->footer();
		$data['content'] = $content;
		
		$this->load->view($layout, $data);
		
	}
	function render3($content, $layout) {
		
		$data['headers'] = $this->headers();
		//$data['search'] = $this->search();
		$data['right'] = $this->right2();
		$data['footers'] = $this->footer();
		$data['content'] = $content;
		
		$this->load->view($layout, $data);
		
	}
	//cai nay de load templ ko co khung tim kiem va khung ben phai	
	function render_login($content, $layout) {
		
		$data['headers'] = $this->headers();
		//$data['search'] = $this->search();
		//$data['right'] = $this->right();
		$data['footers'] = $this->footer();
		$data['content'] = $content;
		
		$this->load->view($layout, $data);
		
	}
	
	public function headers() {
		
		$data = array();
		
		return $this->load->view('seeker/template/headers', $data, TRUE);	
	}
	public function search() {
		
		$data = array();
		
		return $this->load->view('seeker/template/search', $data, TRUE);	
	}
	public function right() {
		
		$data = array();
		
		return $this->load->view('seeker/template/right', $data, TRUE);	
	}
	
	//load khung tim viec cho seeker center
	public function right2() {
		
		$data = array();
		
		return $this->load->view('seeker/template/right2', $data, TRUE);	
	}
	
	public function footer() {
	
		$data = array();
		
		return $this->load->view('seeker/template/footers', $data, TRUE);	
	
	}
	
	
	function loadMail() {
		
		$this->load->library('email');
		
		if($this->config->item('mail_protocol') !='') {
			
				$mail_config = array(	
						'protocol'		=> $this->config->item('mail_protocol'), 
						'smtp_host'		=> $this->config->item('smtp_host'), 
						'smtp_user'		=> $this->config->item('smtp_user'), 
						'smtp_pass'		=> $this->config->item('smtp_pass'), 
						'smtp_port'		=> $this->config->item('smtp_port'), 
						'smtp_timeout'	=> $this->config->item('smtp_timeout'), 
						'charset'		=> $this->config->item('mail_charset'),
						'wordwrap'		=> $this->config->item('mail_wordwrap'),
						'mailtype'		=> $this->config->item('mailtype')
				);
			
			
			$this->email->initialize($mail_config);
		}
		
	}
	
	function checklogin()
		{
			
			if(empty($_SESSION['se_id']) || $_SESSION['logged_in_se'] == FALSE)
			{
				redirect('seeker/my_account/login');
			}
		}
	
	
	
	public function deleteFile($file) {
		
		if(is_file($file)) unlink($file);
		
	}
	
	
	function _captcha() {
		
			$this->load->helper('captcha');
		// Reload captcha
			$expiration = time()-300; // Two hour limit
            $this->db->query("DELETE FROM captcha WHERE captcha_time < ".$expiration);
            $vals = array(
                        //'word'         => 'Random word',
                        'img_path'     	=> './captcha/',
                        'img_url'     	=> base_url().'captcha/',
                        'font_path'     => './system/fonts/georgiab.ttf',
                        'img_width'     => '110',
                        'img_height' 	=> '30',
                        'expiration' 	=> '1800'
                    );

            $cap = create_captcha($vals);
         
            $data = array(
                        'captcha_id'    => '',
                        'captcha_time'    => $cap['time'],
                        'ip_address'    => $this->input->ip_address(),
                        'word'            => $cap['word']
                    );

            $query = $this->db->insert_string('captcha', $data);
            $this->db->query($query);
		return $cap;
	}
	function _make_captcha()
		{
			$this->load->plugin('captcha');
			$vals = array(
			  'img_path' => './captcha/', // PATH for captcha ( *Must mkdir (htdocs)/captcha )
			  'img_url' => base_url().'captcha/', // URL for captcha img
			  'img_width' => 200, // width
			  'img_height' => 60, // height
			  // 'font_path'     => '../system/fonts/2.ttf',
			  'expiration' => 7200 ,
			  );
			  $cap = create_captcha( $vals );
			 if ( $cap )
			  {
			  $data = array(
				'captcha_id' => '',
				'captcha_time' => $cap['time'],
				'ip_address' => $this -> input -> ip_address(),
				'word' => $cap['word'] ,
						);
			  $query = $this -> db -> insert_string( 'captcha', $data );
			  $this -> db -> query( $query );
				}else {
				  return "Umm captcha not work" ;
				}
			return $cap['image'] ;
		}
		function _check_captcha()
		  {
			// Delete old data ( 2hours)
			$expiration = time()-300 ;
			$sql = " DELETE FROM captcha WHERE captcha_time < ? ";
			$binds = array($expiration);
			$query = $this->db->query($sql, $binds);
			
			//checking input
			$sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";
			$binds = array($_POST['captcha'], $this->input->ip_address(), $expiration);
			$query = $this->db->query($sql, $binds);
			$row = $query->row();

		  if ( $row -> count > 0 )
			{
			  return true;
			}
			return false;
		
		  }

}
/* End file admin_controller */
/* Local file application/thirty_path/public_controller.php */