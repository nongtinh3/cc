<?php
require_once APPPATH.'third_party/employer_controller'. EXT;
class Welcome extends employer_controller {
  function  __construct(){
    parent::Controller();
    $this->load->model('MSubscribers');
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
    session_start();
    $this->output->enable_profiler(FALSE);
  }
 
  function index(){
 
        $captcha_result = '';
    $data['cap_img'] = $this -> _make_captcha();
    $this->load->view('contact', $data);
  }
 
  function subscribe(){
    /**
     * form_validation
     */
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email',  'required|valid_email');
    $this->form_validation->set_rules('captcha', 'Captcha', 'required');
    if ( $this -> _check_capthca() ) {
        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('subscribe_msg', 'All fields are required . Please try again!');
            redirect('welcome/index');
        }
        else
        {
            $this->MSubscribers->createSubscriber();
            $this->session->set_flashdata('subscribe_msg', 'Thanks for subscribing!');
            redirect('welcome/index','refresh');
        }
      }else {
        $this->session->set_flashdata('subscribe_msg', 'Enter captcha . Please try again!');
    redirect('welcome/index');
      }
  }
  /**
   * For captcha
   *
   */
   function _make_captcha()
  {
    $this -> load -> plugin( 'captcha' );
    $vals = array(
      'img_path' => './captcha/', // PATH for captcha ( *Must mkdir (htdocs)/captcha )
      'img_url' => 'captcha/', // URL for captcha img
      'img_width' => 200, // width
      'img_height' => 60, // height
      // 'font_path'     => '../system/fonts/2.ttf',
      'expiration' => 7200 ,
      );
    // Create captcha
    $cap = create_captcha( $vals );
    // Write to DB
    if ( $cap ) {
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
 
  function _check_capthca()
  {
    // Delete old data ( 2hours)
    $expiration = time()-7200 ;
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
 
  /**
   * End of captcha
   */
}//end controller class
 
?>