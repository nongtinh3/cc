<div class="wrapper_2">
  <form  method="post" action="<?=site_url('employer/forgot_password/check_forgot');?>" name="frm">
  <table width="100%" cellspacing="0" cellpadding="2" border="0">
    <tbody><tr>
      <td colspan="2"><h1 style="font-size:20px; font-weight:bold"><?=$this->lang->line('Forgot Password')?></h1></td>
    </tr>   
    <tr>
      <td class="line_3" colspan="2"></td>
    </tr>	
    <?php if($this->session->flashdata('error')){ ?>
	<tr id="err_top">
      <td align="left" class="error" colspan="2"><img alt="" src="http://images.vietnamworks.com/bullet_error.gif"> <?=$this->session->flashdata('error')?></td>
    </tr>
    <? }?>
	<tr>
      <td height="10" colspan="2"></td>
    </tr>
     <tr>
      <td colspan="2"><div><?=$this->lang->line('We will send email for you to reset the password')?></div></td>
    </tr>	
    <tr>
      <td height="10" colspan="2"></td>
    </tr>
    <tr style="display:none">
      <td>&nbsp;</td>
	  <td><span class="error">Your email doesn't exist in our database. Please try again.</span></td>
    </tr>
    <tr style="display:none">
      <td>&nbsp;</td>
      <td><span class="error">ERROR IN DATA INSERT</span></td>
    </tr>    
    <tr  id="err_txtEmail">
      <td>&nbsp;</td>
      <td><span class="error"><?=form_error('txtemail');?></span></td>
    </tr>
    <tr>
      <td align="right"><span class="txt_require">*</span><?=$this->lang->line('Fill in your email address')?>:</td>
      <td width="70%">
      <input type="text" style=" width:200px" value="<?=set_value('txtemail');?>" name="txtemail">
      </td>
    </tr>
		<tr>
		<td></td>
		<td><?=$img_cap;?></td>
	</tr>
	<tr  id="err_sid">
      <td>&nbsp;</td>
      <td><span class="error"></span></td>
    </tr>
	<tr>
		<td align="right"><span class="txt_require">*</span> <?=$this->lang->line('Verify code')?>:</td>
		<td width="70%"><input type="text"   name="captcha"></td>
	</tr>
	<tr>
		<td></td>
		<td>
			<input type="submit" value="  Submit  " name="SubUser" class="btn_em">
			<input type="hidden" value="Submit" name="SubUser">
		</td>
	</tr>
	
		<tr>
      <td height="10" colspan="3"></td>
    </tr>	
	<tr>
        <td colspan="3"><p>Need more help?<br>
          Direct Contact: (848) 5404 1373<br>
          Email:<a href="#">limor@XTAsea-talents.com</a></p></td>
      </tr>
  </tbody></table>
  </form>
</div>
