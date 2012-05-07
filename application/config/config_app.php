<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Your configure.
|--------------------------------------------------------------------------
|
| Some config for change later.
| Control and view can be change when ...
*/

/*********** Mail config ***********/
$config['send_mail'] = TRUE;
$config['mail_protocol'] = 'smtp';
$config['smtp_host'] = 'mail.thuanvietland.com.vn';
$config['smtp_user'] = 'thuanvie';
$config['smtp_pass'] = 'X3FwWlTd';
$config['smtp_port'] = 25;
$config['smtp_timeout'] = 20;
$config['mail_charset'] = 'UTF-8';
$config['mail_wordwrap'] = TRUE;
$config['mailtype'] = 'html';
$config['crlf'] = '\r\n';
$config['newline'] = '\r\n';

$config['mail_support'] = 'nongtinh3@gmail.com';
$config['mail_support_text'] = 'Thông tin hộ trợ - www.choqng.com';
$config['mail_contact'] = 'nongtinh3@gmail.com';
$config['mail_contact_text'] = 'Thông tin liên hệ - www.choqng.com';
$config['mail_advisory'] = 'nongtinh3@gmail.com';
$config['mail_advisory_text'] = 'Góp ý - www.choqng.com';
$config['mail_webmaster'] = 'nongtinh3@gmail.com';
$config['mail_webmaster_text'] = 'Ban quản trị - www.choqng.com';

/*********** File configs ***********/
$config['upload_news_dir'] = 'data_uploads/tin_tuc/';
$config['upload_product_dir'] = 'data_uploads/product/';
$config['upload_product_thumb_dir'] = 'data_uploads/product/thumb/';
$config['upload_mode'] = 2;
$config['file_size'] = 104923136;
$config['file_ext'] = '.gif,.jpg,.png,.bmp';
$config['file_music_ext'] = '.wmv,.wma,.mp3,.avi';
$config['file_ext_reject'] = 'sh,php,cgi,py,bin,pl';
$config['image_width'] = 1024;
$config['image_height'] = 1024;
$config['image_thumb_width'] = 120;
$config['image_thumb_height'] = 100;

/*********** Pagination configs ***********/
$config['paginator_size'] = 20;

/*********** Date configs ***********/
$config['datetime_vi'] = 'd/m/Y h:i:s';

/* End of file config.php */
/* Location: ./system/application/config/config_app.php */