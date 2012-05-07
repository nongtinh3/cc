<div id="body_content"><form  method="post" action="<?=site_url('employer/change_email');?>" name="frm">
<div class="wrapper_2">
  <table width="100%" cellspacing="0" cellpadding="0" align="center">
  	<tbody><tr>
      <td colspan="2"><img width="300" height="30" title="Update profile" alt="Update profile" src="http://images.vietnamworks.com/btxte_change_email_login.gif"></td>
    </tr>   
	 <tr>
      <td class="line_3" colspan="2"></td>
    </tr>
  </tbody></table>
   <div class="error" id="err_top" style="display:none">
   	<br>
	<img alt="" src="http://images.vietnamworks.com/bullet_error.gif"> Sorry, there are errors with the information you provided. Please scroll down to check for errors.
	<br><br>
	</div>
  <table width="100%" cellspacing="0" cellpadding="4" align="center">
     <tbody><tr>
      <td colspan="2"><div class="txt_require">* Required Fields</div></td>
    </tr>
	<tr>
      <td colspan="2"></td>
    </tr>
    <?php if(@$this->session->flashdata('error')){ ?>
    <tr>				
		<td>&nbsp;</td>
        <td class="error"><div align="left"><?=@$this->session->flashdata('error');?></div></td>
    </tr>
    <?php } ?>
	<tr style="display:none">
	  <td>&nbsp;</td>
      <td align="left" class="error">Password is wrong</td>
    </tr>
    <tr style="display:none">
	  <td>&nbsp;</td>
      <td align="left" class="error">ERROR IN DATA UPDATE</td>
    </tr>    
    <tr>
      <td width="170" class="left_form">&nbsp;&nbsp;Current  Email Login:</td>
      <td>quachdaica1991@gmail.com</td>
    </tr>
    <tr  id="err_txtPassword">
      <td>&nbsp;</td>
      <td class="error_text"><div align="left"><?=form_error('txtpass');?></div></td>
    </tr>
    <tr>
      <td class="left_form"><span class="txt_require">*</span> Confirm Current Password:</td>
      <td><input type="password" style="width:200px" name="txtpass" maxlength="20"></td>
    </tr>
    <tr  id="err_txtNewEmail">
      <td>&nbsp;</td>
      <td class="error_text"><div align="left"><?=form_error('txtemail');?></div></td>
    </tr>
    <tr>
      <td class="left_form"><span class="txt_require">*</span> Enter New  Email Login:</td>
      <td>
	  	<input type="text" style="width:200px" value="" name="txtemail" maxlength="100">
		<a onmouseover="return escape('Use your main personal email here. This will be your main log in name. You should not use another person\'s email for security reasons.')" class="hintanchor"><img width="14" height="14" border="0/" alt="" src="http://images.vietnamworks.com/bullet_question.gif"></a>
	  </td>
    </tr>
    <tr style="display:none" id="err_txtConfirmEmail">
      <td>&nbsp;</td>
      <td class="error_text"><div align="left"><?=form_error('txtemail2');?></div></td>
    </tr>
    <tr>
      <td class="left_form"><span class="txt_require">*</span> Re-Enter New Email Login:</td>
      <td><input type="text" style="width:200px" value="" name="txtemail2" maxlength="100"></td>
    </tr>
    <tr>
      <td height="10" bgcolor="White" colspan="2"></td>
    </tr>
    <tr>
      <td class="left_form"></td>
      <td bgcolor="#FFFFFF" align="left">      	
      	<input type="submit" style="width:65px" value="Save" name="btnUpdate" class="btn_em">
		<input type="button" style="width:65px" onclick="javascript:back()" value="Cancel" name="btnCancel" class="btn_em">
        <input type="hidden" name="id" value="<?=$em_info->em_id;?>" />	<br />
        <input type="hidden" name="pass" value="<?=$em_info->em_password;?>" />	<br />
         <input type="hidden" name="email" value="<?=$em_info->em_email;?>" />	<br />
      	<input type="hidden" value=" Update " name="btnUpdate">          
      </td>
    </tr>
  </tbody></table>
</div>
<?=$em_info->em_password;?>
</form>
	<div style="clear:both"></div>
</div>