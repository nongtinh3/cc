<script>
	function kt()
	{		
		if(document.form.p_image.value == '')
		{
			alert('Please your update image');
			return false;
		}
		return true
	}
</script>
<div id="body_content"><div class="step_postjob"><img height="30" alt="" src="http://images.vietnamworks.com/post_job_uptprofile.gif"></div>
<div class="line_dotted"><!-- --></div>
<!-- begin wrap -->
<div class="wrap_cr">
   <!-- begin content -->
   <div id="content_cr">
   <form method="post" action="<?=site_url('employer/update_profile');?>" class="form_field" enctype="multipart/form-data" onsubmit="return kt();" name="form" >
           <div style="margin-bottom:10px">
		   
		   <span style="display:none; color:#FF0000; font-weight:bold" id="err_top">
				<img alt="" src="http://images.vietnamworks.com/bullet_error.gif">
				<?=@$error;?><br><br>
		   </span>
		   
		   <span class="require_emp">*</span> <strong>Required fields</strong>
		   
		   </div>
		   <!-- begin Log In Information -->
 			<div class="box_corner">				
                    <b class="xtop"><b class="xb1 dblue_top"><!-- --></b><b class="xb2 dblue_curve dblue_title"><!-- --></b><b class="xb3 dblue_curve dblue_title"><!-- --></b></b>
					
					<div class="dblue_bg_title">
					  <strong>Log In Information</strong>
					  
					</div>
					
					<div style="text-align:center" class="dwhite_content">
					<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
					  <tbody><tr>
						<td>
							<div style="display:none" class="field_err" id="err_txtEmail"><label class="labels">&nbsp;</label>Invalid Email Login (Master Account).</div>
						<p>
						  <label class="labels">Email login (Master account):</label>

						  <input type="text" disabled="disabled" class="field" value="<?=@$em_info->em_email;?>" name="txtEmail" maxlength="255">
						</p>
						<label class="labels">&nbsp;</label><span  id="txtpass" class="field_err"><?=form_error('txtpass');?></span>
					    <p>
						  <label class="labels"><span class="require_emp">*</span> Confirm current password:</label>
						  <input type="password" class="field" value="<?=set_value('txtpass');?>" name="txtpass" maxlength="255">
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
					  <strong>Registration Information</strong>
					</div>
					<div style="text-align:center" class="dwhite_content">
					<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
					  <tbody><tr>
						<td>
						<div style="width:100%; margin-left:163px; display:none" class="field_err" id="err_txtLogo">Please select your company logo again. Image type is one of (*.gif, *.jpg, *.png, *.jpeg)<br> image size is less than 1000 KB and image dimension must be bigger than 95x49px</div>					   
                        <div style="height:70px;">
						  <label class="labels">&nbsp;<img width="95" height="49" border="0" style="vertical-align:bottom" id="logo_preview" src="<?=base_url();?><?=@$em_info->em_logo;?>"></label>
						  						  	
						  		<input type="hidden" value="0" name="p_image">
							  	<span>
									<img alt="" style="display:none;" src="http://images.vietnamworks.com/loading.gif" id="loading">
								</span>
								<div style="float:left;margin-left:8px">
									<div style="direction: ltr; overflow: hidden;  position: relative;" class="upload_div1" id="upload_area">
										Change logo
										<input type="file" class="fupload" multiple="multiple" name="p_image">
									</div>
									<div style="margin:5px 0px">(File types: gif, jpg, png, jpeg)</div>
								</div>
								<style>
								.upload_div1 {
								    background: none repeat scroll 0 0 #eee;
								    border:1px inset #ddd;
								    color: #333;
								    display: block;
								    padding: 4px;
								    text-align: center;
								    width: 90px;
								}
								</style>
								<!-- 
								<span id="change_photo_lnk" style="position:relative;margin-left:5px">
									<input type=button value='Change your logo'</button><br/>
									<input name="companylogo" type="file" id="companylogo" size="15" onkeyup="this.value=''" onchange="ajaxFileUpload()"/>
								</span><br>-->
						</div>
						
						<p>	
							<label class="labels"><span class="require_emp">*</span> Company Name:</label>
							<input type="text" class="field" value="<?=@$em_info->em_com_name;?>" id="txtCompanyName" name="txt_company_name" maxlength="255">
						</p>
						<div style="display:none" id="err_cbxCompanySize" class="field_err"><label class="labels">&nbsp;</label>Please select Company Size</div>
						<p>
							<label class="labels"><span class="require_emp">*</span> Company size (number of employees):</label>
							<select class="field_list field_list_w" id="cbxCompanySize" name="txt_company_size"> 
							  <option selected="" value="">Please select...</option>
                              <?php foreach($em_size as $row) {
									if($row->id == @$em_info->em_com_size)
									{  
								?>                           
                               
                       		  <option  value="<?=@$row->id;?>" selected="selected"><?=@$row->em_size;?></option>
                              <?php } else { ?>
                   			  <option  value="<?=@$row->id;?>"><?=@$row->em_size;?></option>
                              
                              <?php } }?>
							

						  </select> 
						</p>
					    <div style="display:none" id="err_txtCompanyProfile" class="field_err"><label class="labels">&nbsp;</label>Company Profile is limit of 10,000 character.</div>
						<p style="height:135px">	
							<label class="labels">Company profile:</label>
						  <textarea onkeyup="maxLength(this, 10000);
								document.getElementById('limit_companyprofile').innerHTML = this.value.length;" onchange="maxLength(this, 10000);
								document.getElementById('limit_companyprofile').innerHTML = this.value.length;" onmousemove="maxLength(this, 10000);
								document.getElementById('limit_companyprofile').innerHTML = this.value.length;" class="co_pro_area" rows="10" id="txtCompanyProfile" name="txt_company_profile"><?=@$em_info->em_com_profile;?></textarea>
						  <img width="22" height="22" border="0" alt="" src="http://images.vietnamworks.com/icon_q_emp.gif" onmouseout="javascript: this.src = 'http://images.vietnamworks.com/icon_q_emp.gif';" onmouseover="javascript: this.src = 'http://images.vietnamworks.com/icon_q_emp_over.gif';"></a>						</p>  
						  <div class="ssub_note">Character Count: <span id="limit_companyprofile">1</span> (10,000 character limit)</div>
						<div style="display:none" id="err_txtAddress" class="field_err"><label class="labels">&nbsp;</label>Please enter address</div>
						<p>	
							<label class="labels"><span class="require_emp">*</span> Company address:</label> 
							<input type="text" class="field" value="<?=@$em_info->em_com_address;?>" name="txt_address" maxlength="255">
						</p>
						<p>
						  <label class="labels">District:</label> 
						  <input type="text" class="field" value="<?=@$em_info->em_com_district;?>" name="txt_district" maxlength="255">
						</p>
						<div style="display:none" id="err_cbxCountry" class="field_err"><label class="labels">&nbsp;</label>Please select country</div>
						<p>	
							<label class="labels"><span class="require_emp">*</span> Country:</label> 
						  <select onchange="changeCity()" class="field_list field_list_w" id="cbxCountry" name="txt_country">
							  <option selected="" value="">Please select...</option>
                              <?php foreach($em_country as $row) {?>
                              		<?php if($row->id == $em_info->em_com_country) {?>
                       	    <option selected="selected" value="<?=$row->id;?>"><?=$row->em_city;?></option>
                                    <?php } else { ?>
                            <option  value="<?=$row->id;?>"><?=$row->em_city;?></option>
                                    <?php } ?>
                              <?php } ?>
							 

						  </select>
						</p>
						<div style="display:none" id="err_cbxProvince" class="field_err"><label class="labels">&nbsp;</label>Please select Province/City</div>
						<p>	
							<label class="labels"><span class="require_emp">*</span> Province / City:</label>
						  <select class="field_list field_list_w" id="cbxProvince" name="cbxProvince">
							  <option selected="" value="">Please select...</option>
							  <option value="29">Ho Chi Minh</option>
 						  </select> 
						</p>
						<div style="display:none" id="err_txtWebSite" class="field_err"><label class="labels">&nbsp;</label>Please enter valid WebSite</div>
						<p>	
						  <label class="labels">Company website:</label> 
						  <input type="text" onblur="this.value=this.value.replace('http://','');" class="field" value="<?=@$em_info->em_com_web;?>" name="txt_company_web" maxlength="100">
						</p>
						<div style="display:none" id="err_txtContactName" class="field_err"><label class="labels">&nbsp;</label>Please enter Contact Name</div>
						<p>  	
						  <label class="labels"><span class="require_emp">*</span> Contact name:</label> 
						  <input type="text" class="field" value="<?=@$em_info->em_contact_name;?>" name="txt_contact_name" id="txt_contact_name" maxlength="100">
						</p>
						<p>
						  <label class="labels">Contact person's position:</label> 
						  <input type="text" class="field" value="<?=@$em_info->em_contact_position;?>" name="txt_contact_person" id="txt_contact_person" maxlength="100">
						</p>
						<div style="display:none" id="err_txtTelephone" class="field_err"><label class="labels">&nbsp;</label>Please enter valid Contact Phone</div>
						<p>	
						  <label class="labels"><span class="require_emp">*</span> Tel phone number:</label> 
						  <input type="text" class="field" value="<?=@$em_info->em_phone;?>" name="txt_telephone"  maxlength="100">
						</p>
						<div style="display:none" id="err_txtMobilephone" class="field_err"><label class="labels">&nbsp;</label>Please enter valid Mobile Phone</div>
						<p>	
						  <label class="labels">Mobile number:</label> 
						  <input type="text" class="field" value="<?=@$em_info->em_mobile;?>" id="txt_mobile" name="txt_mobile" maxlength="100">
						</p>
						<div style="display:none" id="err_txtFaxNumber" class="field_err"><label class="labels">&nbsp;</label>Please enter valid Fax number</div>
						<p>	
							<label class="labels">Fax number:</label>
						  <input type="text" class="field" value="<?=@$em_info->em_fax;?>" name="txt_fax" id="txt_fax" maxlength="100">
						</p>
						
						<!-- <div class="ssub_note">
						<input type="checkbox" name="chkIsNewLetter" value="1" class="checkm"  
						style="clear:both" 
						 
						 
						/>
						<input type="hidden" name="isaddnewletter" 
							value="" />
						<span class="lbm">
						Send me valuable <a href="/samples/newsletter/emp_newsletter.html" target="_blank" class="link">newsletters</a> of VietnamWorks
						</span>
						</div> -->
						</td>
				  </tr>
				</tbody></table>

					</div><!--end xboxcontent-->
					<b class="xbottom"><b class="xb3 dblue_curve dblue_bg_bottom"><!-- --></b><b class="xb2 dblue_curve dblue_bg_bottom"><!-- --></b><b class="xb1 dblue_top"><!-- --></b></b>				
			</div><!-- end Registration Information -->
			
			<div class="btn_pos">
				  <div class="btn_bg_emp"><div class="btn_l_emp"></div>
				  <input type="button" onclick="javascript:back()" value="Cancel" class="btn_c_emp" name="btnCancel">
				  <div class="btn_r_emp"></div></div>

				  
				  <div class="btn_bg_emp"><div class="btn_l_emp"></div>
				  <input type="submit" value="Save" class="btn_c_emp" name="ok">
				  <div class="btn_r_emp"></div></div>
			</div>			
		<input type="hidden" value="<?=@$em_info->em_id;?>" name="id">
        <input type="hidden" name="image"  />
        <input type="hidden" name="image_thumb" />
   </form>	
   </div>
   <!-- end content -->
</div>


</div>


</div>
