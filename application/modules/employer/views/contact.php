<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Using captcha with Codeigniter</title>
  <base href="<?=base_url();?>">
  </head>
<body>
<div id='main'>
 
<?php
if ($this->session->flashdata('subscribe_msg')){
    echo "<div class='message'>";
    echo $this->session->flashdata('subscribe_msg');
    echo "</div>";
}
?>
<?php echo form_open("welcome/subscribe"); ?>
<?php echo form_fieldset('Subscribe To Our Newsletter'); ?>
<h5>Name</h5>
<input type="text" name="name" id="name" value="<?php echo set_value('name'); ?>" size="40" />
 
<h5>Email</h5>
<input type="text" name="email" id="email" value="<?php echo set_value('email'); ?>" size="40" />
 
<h5>Are you human?</h5>
<?php echo "<p>$cap_img</p>" ;?>
 
<input type="text" name="captcha" value="" size="40" />
 
<div><input type="submit" value="Subscribe" /></div>
<?php echo form_fieldset_close(); ?>
<?php echo form_close(); ?>
</div>
</body>
</html>