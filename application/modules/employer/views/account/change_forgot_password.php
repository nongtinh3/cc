<div id="body_content"><form  method="post" action="<?=site_url('employer/forgot_password/change_forgot');?>" name="frm">
<div class="wrapper_2">
  <table width="100%" cellspacing="0" cellpadding="0" align="center">  	
	<tbody><tr>
      <td colspan="2"><img width="300" height="30" alt="Sign Up" src="http://images.vietnamworks.com/btxte_change_password.gif"></td>
    </tr>   
	<tr>
      <td class="line_3" colspan="2"></td>
    </tr>
  </tbody></table>
  <?php
	if(isset($error))
	{
		?>
  <div class="error" id="err_top" >
   	<br>
    
		
	<img alt="" src="http://images.vietnamworks.com/bullet_error.gif"> 
    <?
		echo $error;
	}
?>
	<br><br>
	</div>
  <table width="100%" cellspacing="0" cellpadding="4" align="center">  	
     <tbody><tr>
      <td colspan="2"><div class="txt_require">* Required Fields</div></td>
    </tr>		
<!--    
    <tr>
      <td colspan="2" class="txt_title"><b>Change Password</b></td>
    </tr>
-->
	<tr>
      <td colspan="2"></td>
    </tr>
	<tr style="display:none">
	  <td width="170">&nbsp;</td>
      <td align="left" class="error"><span class="left_form"><?php
	if($this->session->flashdata('error'))
	{
		echo $this->session->flashdata('error');
	}
?></td>
    </tr>
    <tr id="err_txtReNewPassword">
		<td>&nbsp;</td>
      	<td align="left" class="error_text"><?=form_error('txtpass_new');?></td>
    </tr>
    <tr>
      <td class="left_form"><span class="txt_require">*</span> Enter New Password:</td>
      <td>
        <input type="password" style="width:200px" name="txtpass_new" maxlength="20">
        <a onmouseover="return escape('A valid password must contain 4-20 characters, and it can\'t be the same as your above registered email.')" class="hintanchor"><img width="14" height="14" border="0/" alt="" src="http://images.vietnamworks.com/bullet_question.gif"></a>
        (4-20 characters)</td>
    </tr>
    <tr id="err_txtReNewPassword">
		<td>&nbsp;</td>
      	<td align="left" class="error_text"><?=form_error('txtpass_new_2');?></td>
    </tr>
    <tr>
      <td class="left_form"><span class="txt_require">*</span> Confirm New Password:</td>
      <td><input type="password" style="width:200px" name="txtpass_new_2" maxlength="20"></td>
    </tr>
		
	</tr>
	    
    <tr>
      <td class="left_form"></td>
      <td align="left">      	
      	<input type="submit" style="width:65px" value="Save" name="btnUpdate" class="btn_em">
		<input type="button" style="width:65px" onclick="javascript:back()" value="Cancel" name="btnCancel" class="btn_em">
       
        
      	<input type="hidden" value=" Update " name="btnUpdate">
      </td>
    </tr>
  </tbody></table>
</div>

</form>


</div>