<?php if ( !defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );
	require_once APPPATH.'third_party/employer_controller'. EXT;
class Myexample_captcha extends employer_controller {
 function __construct()
 {
	 parent::__construct();
 }
  function index()
  {
    /**
     * --SQL DDL 
     * 
     * CREATE TABLE captcha (
     * captcha_id bigint(13) unsigned NOT NULL auto_increment,
     * captcha_time int(10) unsigned NOT NULL,
     * ip_address varchar(16) default '0' NOT NULL,
     * word varchar(20) NOT NULL,
     * PRIMARY KEY `captcha_id` (`captcha_id`),
     * KEY `word` (`word`)
     * );
     */

    $captcha_result = '';
    $data["cap_img"] = $this -> _make_captcha();
    if ( $this -> input -> post( 'submit' ) ) {
      if ( $this -> _check_capthca() ) {
        $captcha_result = 'GOOD';
      }else {
        $captcha_result = 'BAD';
      }
    }
    $data["cap_msg"] = $captcha_result;
	$this->render($this->load->view('capcha_view', $data, TRUE), $this->layout_em);
    
  }
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

}//endofclass
/**
 * End of file example_captcha.php
 */
/**
 * Location: ./application/controllers/example_captcha.php
 */

?>
