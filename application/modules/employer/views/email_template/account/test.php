<?php
	if($this->session->flashdata('error'))
	{
		echo $this->session->flashdata('error');
	}
?>
<form action="<?=site_url('employer/test/sub');?>" method="post" enctype="multipart/form-data" >
	Email : <input type="text" name="txtemail" value="<?=set_value('txtemail');?>" /><br />
    Pass:<input type="password" name="txtpass" /><br />
  	  <?=form_error('txtpass');?>
    Code: <?=$img_cap;?>
  
  <input type="text" name="captcha" value="" size="40" />
    
    <input type="submit" name="ok" id="ok" value="Ok"   />
</form>
