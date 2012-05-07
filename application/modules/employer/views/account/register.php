<script type="text/javascript" src="<?=base_url();?>public/js/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$('#act_email').click(function(){
			var email = $('#txtemail').val();
			var url = '<?=base_url();?>';
			$.ajax({				
				type : "GET",
				dataType: "html",
				url : url + 'employer/check_email?email=' + email,
				
				success : function(data){
					if(data){						
						  $('#err_top').html(data);
								
					} else {
						return false;
					}
				}				
			}); 
		});		
	});
</script>
<div class="step_postjob"><h3 style="font-size:20px; font-weight:bold"><?=$this->lang->line('Sign in');?></h3></div>
<div class="line_dotted"><!-- --></div>
<!-- begin wrap -->
<div class="wrap_cr">
   <!-- begin content -->
   <div id="content_cr">
   <form enctype="multipart/form-data" onsubmit="return checkForm();" method="post" action="<?=site_url('employer/register');?>" class="form_field" name="frm">
           <div style="margin-bottom:10px">
		   
		   <span style="color: rgb(255, 0, 0); font-weight: bold;" id="err_top">
           <?php if(@$error!=''):?>
				<img alt="" src="http://images.vietnamworks.com/bullet_error.gif">                	
                    <?=@$error;?>
                <? endif;?>
				<br><br>
		   </span>
		   
		  
		   
		   </div>
		   <!-- begin Log In Information -->
 			<div class="box_corner">				
                    <b class="xtop"><b class="xb1 dblue_top"><!-- --></b><b class="xb2 dblue_curve dblue_title"><!-- --></b><b class="xb3 dblue_curve dblue_title"><!-- --></b></b>
					
					<div class="dblue_bg_title">
					  <strong><?=$this->lang->line('Log In Information');?></strong>
					  
					</div>
					
					<div style="text-align:center" class="dwhite_content">
					<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
					  <tbody><tr>
						<td>
						<span style="display:none" class="field_green" id="err_notExist_email">The email adress is still available.</span>
						<label class="labels">&nbsp;</label><span style="display:none" class="field_err" id="err_duplicate_email">The email address has already been used.<br>Please provide another one.</span>
						<span style="display:none" class="field_err" id="err_error_insert">ERROR IN DATA INSERT</span>
						<span style="" class="field_err" id="err_txtEmail"><strong><?=form_error('txtemail');?></strong></span>
						<p style="height:20px">
						  <label class="labels"><span class="require_emp">*</span><?=$this->lang->line('Enter Email Login');?>:</label>

						  <input type="text" class="field" value="<?=set_value('txtemail');?>" name="txtemail" id="txtemail" maxlength="255">
						  <a onmouseover="return escape('This email login will be your master email for receiving VietnamWorks' special promotion, resume alerts, newsletters, etc.&lt;p&gt;For security reasons, you should use &lt;strong&gt;your own email&lt;/strong&gt; as email login. &lt;/p&gt;')" class="hintanchor"><img width="22" height="22" border="0" alt="" src="http://images.vietnamworks.com/icon_q_emp.gif"></a>
						</p>
						<div class="ssub_note"><br>
						<a  class="link_under" href="javascript:void;()" id="act_email"><?=$this->lang->line('Check Email availability');?></a></div>
						<input type="hidden" value="0" name="chkEmail">
						<label class="labels">&nbsp;</label><span style="" id="err_txtEmail2" class="field_err"><strong><?=form_error('txtemail2')?></strong></span>
						<p>
						<label class="labels"><span class="require_emp">*</span> <?=$this->lang->line('Re-Enter Email Login');?>:</label>
						<input type="text" class="field" value="<?=set_value('txtemail2');?>" name="txtemail2" maxlength="255">
						</p>
						<label class="labels">&nbsp;</label><span style="display:none" id="err_txtPassword" class="field_err"><?=form_error('txtpass');?></span>
					    <p>
						  <label class="labels"><span class="require_emp">*</span>

 <?=$this->lang->line('Enter Password');?>:</label>
						  <input type="password" class="field" value="" name="txtpass" maxlength="255">
						  <span class="lb_mid">

 <?=$this->lang->line('4-20 characters');?></span>
						</p>
					    <label class="labels">&nbsp;</label><span style="" class="field_err" id="err_txtPassword2"><strong><?=form_error('txtpass2');?></strong></span>
						<p>  
						  <label class="labels"><span class="require_emp">*</span>

 <?=$this->lang->line('Confirm Password');?> :</label> 
						  <input type="password" class="field" value="" name="txtpass2" maxlength="255">
						</p>
						</td>
				  </tr>
				</tbody></table>
					</div><!--end xboxcontent-->	
					<b class="xbottom"><b class="xb3 dblue_curve dblue_bg_bottom"><!-- --></b><b class="xb2 dblue_curve dblue_bg_bottom"><!-- --></b><b class="xb1 dblue_top"><!-- --></b></b>				
			</div><!-- end Log In Information -->
			
			<!-- begin Registration Information -->
 			<div class="box_corner">				
                    <b class="xtop"><b class="xb1 dblue_top"><!-- --></b><b class="xb2 dblue_curve dblue_title"><!-- --></b><b class="xb3 dblue_curve dblue_title"><!-- --></b></b>
					<div class="dblue_bg_title">
					  <strong>

 <?=$this->lang->line('Registration Information');?></strong>
					</div>
					<div style="text-align:center" class="dwhite_content">
					<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
					  <tbody><tr>
						<td>
						<label class="labels">&nbsp;</label><span style="" class="field_err" id="err_txtCompanyName"><strong><?=form_error('txt_company_name');?></strong></span>
						<p>	
							<label class="labels"><span class="require_emp">*</span>

 <?=$this->lang->line('Company Name');?> :</label>
							<input type="text" class="field" value="<?=set_value('txt_company_name');?>" id="txtCompanyName" name="txt_company_name" maxlength="255">
						</p>
						<label class="labels">&nbsp;</label><span style="" id="err_cbxCompanySize" class="field_err"><strong><?=form_error('txt_company_size');?></strong></span>
						<p>
							<label class="labels"><span class="require_emp">*</span>

 <?=$this->lang->line('Company size (number of employees)');?>:</label>
							<select class="field_list field_list_w" id="cbxCompanySize" name="txt_company_size"> 
							  <option selected="" value=""><?=$this->lang->line('Please select')?>...</option>
                              <?php foreach($em_size as $row) {?>
							  <option value="<?=$row->id;?>"<?=set_select('txt_company_size',$row->id);?>><?=$row->em_size;?></option>
                              <?php } ?>

							</select> 
						</p>
					    <label class="labels">&nbsp;</label><span style="display:none" id="err_txtCompanyProfile" class="field_err">

 <?=$this->lang->line('Company Profile is limit of 10,000 character');?>.</span>
						<p style="height:135px">	
							<label class="labels">

 <?=$this->lang->line('Company profile');?>:</label>
						  <textarea class="co_pro_area" rows="10" id="txt_company_profile" name="txt_company_profile" type="text"><?=set_value('txt_company_profile');?></textarea>
						  <img width="22" height="22" border="0" alt="" src="http://images.vietnamworks.com/icon_q_emp.gif"></a>						</p>  
						  <div class="ssub_note">

 <?=$this->lang->line('Character Count: 0 (10,000 character limit)');?>: </div>
						<label class="labels">&nbsp;</label><span style="display:none" class="field_err" id="err_txtLogo">Please select your company logo again.<br>File type is (*.gif, *.jpg, *.png) and size is less than 5 KB</span>
					    <p style="height:20px">
						  <label class="labels">

 <?=$this->lang->line('Upload company logo');?>:</label> 
						  <input type="file" class="field hintanchor" size="37" name="p_image" value="<?=$this->lang->line('Upload');?>">
						</p>
						<div class="ssub_note">(File types: gif, jpg, png)</div>
						<label class="labels">&nbsp;</label><span style="" id="err_txtAddress" class="field_err"><strong><?=form_error('txt_address');?></strong></span>
						<p>	
							<label class="labels"><span class="require_emp">*</span>

 <?=$this->lang->line('Company address');?> :</label> 
							<input type="text" class="field" value="<?=set_value('txt_address');?>" name="txt_address" maxlength="255">
						</p>
                        <label class="labels">&nbsp;</label><span style="" id="err_txtAddress" class="field_err"><strong><?=form_error('txt_district');?></strong></span>
						<p>
						  <label class="labels">

 <?=$this->lang->line('District');?>:</label> 
						  <input type="text" class="field" value="<?=set_value('txt_district');?>" name="txt_district" maxlength="255">
						</p>
						<label class="labels">&nbsp;</label><span style="" id="err_cbxCountry" class="field_err"><strong><?=form_error('txt_country');?></strong></span>
						<p>	
							<label class="labels"><span class="require_emp">*</span>

 <?=$this->lang->line('Country');?> :</label> 
						  <select onchange="changeCity()" class="field_list field_list_w" id="cbxCountry" name="txt_country">
							  <option selected="" value="">

 <?=$this->lang->line('Please select');?>...</option>
							 
                             <?php foreach($em_country as $row) {?>
							  <option value="<?=$row->id;?>"<?=set_select('txt_country',$row->id);?>><?=$row->em_city;?></option>
                              <?php } ?>

						  </select>
						</p>
						<label class="labels">&nbsp;</label><span style="display:none" id="err_cbxProvince" class="field_err">Please select Province/City</span>
						<p>	
							<label class="labels"><span class="require_emp">*</span>

 <?=$this->lang->line('Province / City');?> :</label>
						  <select class="field_list field_list_w" id="cbxProvince" name="txt_company_province" disabled="">
							  <option selected="" value="">
 <?=$this->lang->line('Please select');?>...</option>
                              <?php foreach($em_province as $row) { ?>							  
							  <option  value="<?=$row->id;?>"<?=set_select('txt_company_province',$row->id);?>><?=$row->em_vince;?></option>
                              <?php } ?>
						  </select> 
						</p>
						<label class="labels">&nbsp;</label><span  id="err_txtWebSite" class="field_err"><strong><?=form_error('txt_company_web');?></strong></span>
						<p>	
						  <label class="labels">

 <?=$this->lang->line('Company website');?>:</label> 
						  <input type="text" onblur="this.value=this.value.replace('http://','');" class="field" value="<?=set_value('txt_company_web');?>" name="txt_company_web" maxlength="100">
						</p>
						<label class="labels">&nbsp;</label><span  id="err_txtContactName" class="field_err"><strong><?=form_error('txt_contact_name');?></strong></span>
						<p>  	
						  <label class="labels"><span class="require_emp">*</span>

 <?=$this->lang->line('Contact name');?> :</label> 
						  <input type="text" class="field" value="<?=set_value('txt_contact_name');?>" name="txt_contact_name" id="txtContactName" maxlength="100">
						</p>
						<p>
						  <label class="labels">

 <?=$this->lang->line("Contact person's position");?>:</label> 
						  <input type="text" class="field" value="<?=set_value('txt_contact_person');?>" name="txt_contact_person" id="txtContactPosition" maxlength="100">
						</p>
						<label class="labels">&nbsp;</label><span style="" id="err_txtTelephone" class="field_err"><strong><?=form_error('txt_telephone');?></strong></span>
						<p>	
						  <label class="labels"><span class="require_emp">*</span>

 <?=$this->lang->line('Telephone number');?> :</label> 
						  <input type="text" class="field" value="<?=set_value('txt_telephone');?>" name="txt_telephone" id="txtTelephone" maxlength="100">
						</p>
						<label class="labels">&nbsp;</label><span style= id="err_txtMobilephone" class="field_err"><strong><?=form_error('txt_mobile');?></strong></span>
						<p>	
						  <label class="labels">

 <?=$this->lang->line('Mobile number');?>:</label> 
						  <input type="text" class="field" value="<?=set_value('txt_mobile');?>" id="txtMobilephone" name="txt_mobile" maxlength="100">
						</p>
						<label class="labels">&nbsp;</label><span  id="err_txtFaxNumber" class="field_err"><strong><?=form_error('txt_fax');?></strong></span>
						<p>	
							<label class="labels">

 <?=$this->lang->line('Fax number');?>:</label>
						  <input type="text" name="txt_fax" class="field" value="<?=set_value('txt_fax');?>" maxlength="100">
						</p>
						
						<div style="margin:10px 0px 5px 10px">
							<div class="more">
							<span style="padding-top: 10px; padding-bottom: 5px; float:left; color: rgb(255, 0, 0);" id="err_chkIAgree"><strong><?=form_error('txt_ok');?></strong></span>
							<input type="checkbox" style="clear:both" class="checkm" value="1" id="chkIAgree" name="txt_ok"<?=set_checkbox('txt_ok','1')?>>
							<span class="lbm"><span class="require_emp">*</span>

 <?=$this->lang->line('I have read & accept Xtasea-talents Privacy Policy and Terms of Use');?></span></div><br>
							<!-- <div class="more"><input type="checkbox" name="chkIsNewLetter" value="1" class="checkm"  style="clear:both" checked >
							<span class="lbm">Send me valuable <a href="/samples/newsletter/emp_newsletter.html" target="_blank" class="link">newsletters</a> of VietnamWorks </span></div> -->
						</div> 				  </td>
				  </tr>
				</tbody></table>

					</div><!--end xboxcontent-->	
					<b class="xbottom"><b class="xb3 dblue_curve dblue_bg_bottom"><!-- --></b><b class="xb2 dblue_curve dblue_bg_bottom"><!-- --></b><b class="xb1 dblue_top"><!-- --></b></b>				
			</div><!-- end Registration Information -->
			
			<div class="btn_pos">
				  <div class="btn_bg_emp"><div class="btn_l_emp"></div>
				  <input type="submit" value="<?=$this->lang->line('Sign Up Now!');?>" name="Submit" class="btn_c_emp">
      			  
		
				  <div class="btn_r_emp"></div></div>
			</div>
            <input type="hidden" name="image" />
             <input type="hidden" name="image_thumb" />
		</form>	
   </div>
   <!-- end content -->
</div>
<!-- end wrap -->
<script type="text/javascript">
//***********************************************************************
//Script Auto run
//***********************************************************************
	document.getElementById('limit_companyprofile').innerHTML = document.frm.txtCompanyProfile.value.length;

	function chkEmailAvailable() {
		var f = document.frm;
		var has_error = false;

		errorAlertOff(f.duplicate_email,'err_duplicate_email');
		errorAlertOff(f.notExist_email,'err_notExist_email');
		errorAlertOff(f.error_insert,'err_error_insert');

		if (!checkRequired(f.txtEmail)) has_error=true;
		if (!checkEmail(f.txtEmail)) has_error=true;

		if (has_error) { document.location.replace('#top'); return false; }

		f.chkEmail.value = 1;
		document.frm.cbxProvince.disabled = false;
		f.submit();
	}

	function changeCity(){
		if ( document.frm.cbxCountry.value != 1 ) {
			// select province Other for not Vietnam
			document.frm.cbxProvince.value = 66;
			document.frm.cbxProvince.disabled=true;			
		}
		else {
			// select Ho Chi Minh for Vietnam
			document.frm.cbxProvince.value = "";
			document.frm.cbxProvince.disabled=false;
		}	
	}
	
	function isImageFile(){
		var spicturetype = "gif, jpg, png";
		
		//check picture(file, type, extension, resume picture) 
		f = document.frm;
		
		if(trim(f.companylogo.value)!=""){
			sfile = f.companylogo.value;
	
			//get extension file(gif, jpg, png, ...)
			if(sfile.indexOf(".")<=0){
				errorAlert(f.companylogo, "err_txtLogo");
				return false;
			}
			atmp = sfile.split(".");
			sext = atmp[atmp.length-1];
			sext = trim(sext.toLowerCase());
	
			isExisted = false;
			atmp = spicturetype.split(",");
			for(i=0; i<atmp.length; i++){
				stmp = atmp[i];
				stmp = trim(stmp.toLowerCase()); 
				if(sext==stmp){
					isExisted = true;
					break;
				}
			}//for
			if(!isExisted){
				errorAlert(f.companylogo, "err_txtLogo");
				return false;
			}//if
		}//if
		return true;
	}//function
	
	function checkForm(){
		var f = document.frm;
		var has_error = false;

		errorAlertOff(f.duplicate_email,'err_duplicate_email');
		errorAlertOff(f.notExist_email,'err_notExist_email');
		errorAlertOff(f.error_insert,'err_error_insert');
		
		if(!isImageFile()) has_error = true;
		
		if (f.chkEmail.value==1) return true;

		if (!checkRequired(f.txtEmail)) has_error=true;
		if (!checkEmail(f.txtEmail)) has_error=true;
		if (!checkRequired(f.txtEmail2)) has_error=true;
		if (!checkEmail(f.txtEmail2)) has_error=true;
		if ( trim(f.txtEmail.value) != trim(f.txtEmail2.value) ) { errorAlert(f.txtEmail2); has_error=true};
		if (!checkRequired(f.txtPassword)) has_error=true;
		if (f.txtPassword.value.length<4) { errorAlert(f.txtPassword); has_error=true};
		if (!checkRequired(f.txtPassword2)) has_error=true;
		if (f.txtPassword2.value.length<4) { errorAlert(f.txtPassword2); has_error=true};
		if (f.txtPassword.value!=f.txtPassword2.value) { errorAlert(f.txtPassword2); has_error=true};

		if (!checkRequired(f.txtCompanyName)) has_error=true;
		if (!checkInt(f.cbxCompanySize)) has_error=true;
		if (f.txtCompanyProfile.value.length>10000) { errorAlert(f.txtCompanyProfile); has_error=true};
		if (!checkRequired(f.txtAddress)) has_error=true;
		if (!checkInt(f.cbxProvince)) has_error=true;
		if (!checkInt(f.cbxCountry)) has_error=true;

		if (!checkRequired(f.txtContactName)) has_error=true;
		//if (!checkRequired(f.cbxcontactmethodid)) has_error=true;

		//if (!checkRequired(f.txtContactEmail)) has_error=true;
		//if (!checkEmail(f.txtContactEmail)) has_error=true;

		if (!checkRequired(f.txtTelephone)) has_error=true;
		if (!checkPhone(f.txtTelephone)) has_error=true;
		if(trim(f.txtMobilephone.value)){
			if (!checkPhone(f.txtMobilephone)) has_error=true;
		};
		if(trim(f.txtFaxNumber.value)){
			if (!checkPhone(f.txtFaxNumber)) has_error=true;
		};

		if (!f.chkIAgree.checked){ errorAlert(f.chkIAgree); has_error=true}
		else{ errorAlertOff(f.chkIAgree) }
		/*if (!checkInt(f.cbxHowYouKnowusid)) has_error=true;*/

		if ( has_error ) { 
			document.location.replace('#top'); return false;
		}
		else {
			document.frm.cbxProvince.disabled = false;
		}
	}

	function initialMyFocus() {
		with(document.frm){
			txtEmail.focus();
		}
	}
	
	// disable the city combobox if the country is not vietnam
	changeCity();
	initialMyFocus();
</script>


	<div style="clear:both"></div>
