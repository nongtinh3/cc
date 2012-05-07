<div class="step_postjob"><img width="300" height="30" alt="" src="http://images.vietnamworks.com/post_job_signup.gif"></div>
<div class="line_dotted"><!-- --></div>
<!-- begin wrap -->
<div class="wrap_cr">
   <!-- begin content -->
   <div id="content_cr">
   <form enctype="multipart/form-data" onsubmit="return checkForm();" method="post" action="<?=site_url('employer/register');?>" class="form_field" name="frm">
           <div style="margin-bottom:10px">
		   
		   <span style="color: rgb(255, 0, 0); font-weight: bold;" id="err_top">
				<img alt="" src="http://images.vietnamworks.com/bullet_error.gif"><?php if($this->session->flashdata('wanring')!=''):?>
                	<?=$this->session->flashdata('wanring');?>
                    <?=@$error;?>
                <? endif;?>
				<br><br>
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
						<span style="display:none" class="field_green" id="err_notExist_email">The email adress is still available.</span>
						<label class="labels">&nbsp;</label><span style="display:none" class="field_err" id="err_duplicate_email">The email address has already been used.<br>Please provide another one.</span>
						<span style="display:none" class="field_err" id="err_error_insert">ERROR IN DATA INSERT</span>
						<span style="" class="field_err" id="err_txtEmail"><?=form_error('txtemail');?></span>
						<p style="height:20px">
						  <label class="labels"><span class="require_emp">*</span> Enter Email Login:</label>

						  <input type="text" class="field" value="<?=set_value('txtemail');?>" name="txtemail" maxlength="255">
						  <a onmouseover="return escape('This email login will be your master email for receiving VietnamWorks' special promotion, resume alerts, newsletters, etc.&lt;p&gt;For security reasons, you should use &lt;strong&gt;your own email&lt;/strong&gt; as email login. &lt;/p&gt;')" class="hintanchor"><img width="22" height="22" border="0" alt="" src="http://images.vietnamworks.com/icon_q_emp.gif"></a>
						</p>
						<div class="ssub_note"><br>
						<a onclick="javascript:chkEmailAvailable()" class="link_under" href="#">Check Email availability</a></div>
						<input type="hidden" value="0" name="chkEmail">
						<label class="labels">&nbsp;</label><span style="" id="err_txtEmail2" class="field_err"><?=form_error('txtemail2')?></span>
						<p>
						<label class="labels"><span class="require_emp">*</span> Re-Enter Email Login:</label>
						<input type="text" class="field" value="<?=set_value('txtemail2');?>" name="txtemail2" maxlength="255">
						</p>
						<label class="labels">&nbsp;</label><span style="display:none" id="err_txtPassword" class="field_err"><?=form_error('txtpass');?></span>
					    <p>
						  <label class="labels"><span class="require_emp">*</span> Enter Password:</label>
						  <input type="password" class="field" value="" name="txtpass" maxlength="255">
						  <span class="lb_mid">4-20 characters</span>
						</p>
					    <label class="labels">&nbsp;</label><span style="" class="field_err" id="err_txtPassword2"><?=form_error('txtpass2');?></span>
						<p>  
						  <label class="labels"><span class="require_emp">*</span> Confirm Password:</label> 
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
					  <strong>Registration Information</strong>
					</div>
					<div style="text-align:center" class="dwhite_content">
					<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
					  <tbody><tr>
						<td>
						<label class="labels">&nbsp;</label><span style="" class="field_err" id="err_txtCompanyName"><?=form_error('txt_company_name');?></span>
						<p>	
							<label class="labels"><span class="require_emp">*</span> Company Name:</label>
							<input type="text" class="field" value="<?=set_value('txt_company_name');?>" id="txtCompanyName" name="txt_company_name" maxlength="255">
						</p>
						<label class="labels">&nbsp;</label><span style="" id="err_cbxCompanySize" class="field_err"><?=form_error('txt_company_size');?></span>
						<p>
							<label class="labels"><span class="require_emp">*</span>Company size (number of employees):</label>
							<select class="field_list field_list_w" id="cbxCompanySize" name="txt_company_size"> 
							  <option selected="" value="<?=set_select('txt_company_size');?>">Please select...</option>
                              <?php foreach($em_size as $row) {?>
							  <option value="<?=$row->id;?>"><?=$row->em_size;?></option>
                              <?php } ?>

							</select> 
						</p>
					    <label class="labels">&nbsp;</label><span style="display:none" id="err_txtCompanyProfile" class="field_err">Company Profile is limit of 10,000 character.</span>
						<p style="height:135px">	
							<label class="labels">Company profile:</label>
						  <textarea onkeyup="maxLength(this, 10000);
								document.getElementById('limit_companyprofile').innerHTML = this.value.length;" onchange="maxLength(this, 10000);
								document.getElementById('limit_companyprofile').innerHTML = this.value.length;" onmousemove="maxLength(this, 10000);
								document.getElementById('limit_companyprofile').innerHTML = this.value.length;" class="co_pro_area" rows="10" id="txtCompanyProfile" name="txt_company_profile"></textarea>
						  <img width="22" height="22" border="0" alt="" src="http://images.vietnamworks.com/icon_q_emp.gif"></a>						</p>  
						  <div class="ssub_note">Character Count: <span id="limit_companyprofile">0</span> (10,000 character limit)</div>
						<label class="labels">&nbsp;</label><span style="display:none" class="field_err" id="err_txtLogo">Please select your company logo again.<br>File type is (*.gif, *.jpg, *.png) and size is less than 5 KB</span>
					    <p style="height:20px">
						  <label class="labels">Upload company logo:</label> 
						  <input type="file" class="field hintanchor" size="37" name="p_image">
						</p>
						<div class="ssub_note">(File types: gif, jpg, png)</div>
						<label class="labels">&nbsp;</label><span style="" id="err_txtAddress" class="field_err"><?=form_error('txt_address');?></span>
						<p>	
							<label class="labels"><span class="require_emp">*</span> Company address:</label> 
							<input type="text" class="field" value="" name="txt_address" maxlength="255">
						</p>
                        <label class="labels">&nbsp;</label><span style="" id="err_txtAddress" class="field_err"><?=form_error('txt_district');?></span>
						<p>
						  <label class="labels">District:</label> 
						  <input type="text" class="field" value="<?=set_value('txt_district');?>" name="txt_district" maxlength="255">
						</p>
						<label class="labels">&nbsp;</label><span style="" id="err_cbxCountry" class="field_err"><?=form_error('txt_country');?></span>
						<p>	
							<label class="labels"><span class="require_emp">*</span> Country:</label> 
						  <select onchange="changeCity()" class="field_list field_list_w" id="cbxCountry" name="txt_country">
							  <option selected="" value="<?=set_select('txt_country');?>">Please select...</option>
							 
                             <?php foreach($em_country as $row) {?>
							  <option value="<?=$row->id;?>"><?=$row->em_city;?></option>
                              <?php } ?>

						  </select>
						</p>
						<label class="labels">&nbsp;</label><span style="display:none" id="err_cbxProvince" class="field_err">Please select Province/City</span>
						<p>	
							<label class="labels"><span class="require_emp">*</span> Province / City:</label>
						  <select class="field_list field_list_w" id="cbxProvince" name="cbxProvince" disabled="">
							  <option selected="" value="">Please select...</option>							  
							  <option value="29">Ho Chi Minh</option>
<option value="24">Ha Noi</option>
<option value="71">Mekong Delta</option>
<option value="2">An Giang</option>
<option value="3">Ba Ria</option>
<option value="4">Bac Can</option>
<option value="5">Bac Giang</option>
<option value="6">Bac Lieu</option>
<option value="7">Bac Ninh</option>
<option value="8">Ben Tre</option>
<option value="9">Bien Hoa</option>
<option value="10">Binh Dinh</option>
<option value="11">Binh Duong</option>
<option value="12">Binh Phuoc</option>
<option value="13">Binh Thuan</option>
<option value="14">Ca Mau</option>
<option value="15">Can Tho</option>
<option value="16">Cao Bang</option>
<option value="17">Da Nang</option>
<option value="18">Dac Lac</option>
<option value="69">Dien Bien</option>
<option value="19">Dong Nai</option>
<option value="20">Dong Thap</option>
<option value="21">Gia Lai</option>
<option value="22">Ha Giang</option>
<option value="23">Ha Nam</option>
<option value="25">Ha Tay</option>
<option value="26">Ha Tinh</option>
<option value="27">Hai Duong</option>
<option value="28">Hai Phong</option>
<option value="30">Hoa Binh</option>
<option value="31">Hue</option>
<option value="32">Hung Yen</option>
<option value="33">Khanh Hoa</option>
<option value="34">Kon Tum</option>
<option value="35">Lai Chau</option>
<option value="36">Lam Dong</option>
<option value="37">Lang Son</option>
<option value="38">Lao Cai</option>
<option value="39">Long An</option>
<option value="40">Nam Dinh</option>
<option value="41">Nghe An</option>
<option value="42">Ninh Binh</option>
<option value="43">Ninh Thuan</option>
<option value="44">Phu Tho</option>
<option value="45">Phu Yen</option>
<option value="46">Quang Binh</option>
<option value="47">Quang Nam</option>
<option value="48">Quang Ngai</option>
<option value="49">Quang Ninh</option>
<option value="50">Quang Tri</option>
<option value="51">Soc Trang</option>
<option value="52">Son La</option>
<option value="53">Tay Ninh</option>
<option value="54">Thai Binh</option>
<option value="55">Thai Nguyen</option>
<option value="56">Thanh Hoa</option>
<option value="57">Thua Thien-Hue</option>
<option value="58">Tien Giang</option>
<option value="59">Tra Vinh</option>
<option value="60">Tuyen Quang</option>
<option value="61">Kien Giang</option>
<option value="62">Vinh Long</option>
<option value="63">Vinh Phuc</option>
<option value="64">Vung Tau</option>
<option value="65">Yen Bai</option>
<option value="66">Other</option>
<option value="70">International</option>
<option value="72">Hau Giang</option>
 						  </select> 
						</p>
						<label class="labels">&nbsp;</label><span  id="err_txtWebSite" class="field_err"><?=form_error('txt_company_web');?></span>
						<p>	
						  <label class="labels">Company website:</label> 
						  <input type="text" onblur="this.value=this.value.replace('http://','');" class="field" value="<?=set_value('txt_company_web');?>" name="txt_company_web" maxlength="100">
						</p>
						<label class="labels">&nbsp;</label><span  id="err_txtContactName" class="field_err"><?=form_error('txt_contact_name');?></span>
						<p>  	
						  <label class="labels"><span class="require_emp">*</span> Contact name:</label> 
						  <input type="text" class="field" value="<?=set_value('txt_contact_name');?>" name="txt_contact_name" id="txtContactName" maxlength="100">
						</p>
						<p>
						  <label class="labels">Contact person's position:</label> 
						  <input type="text" class="field" value="" name="txt_contact_person" id="txtContactPosition" maxlength="100">
						</p>
						<label class="labels">&nbsp;</label><span style="" id="err_txtTelephone" class="field_err"><?=form_error('txt_telephone');?></span>
						<p>	
						  <label class="labels"><span class="require_emp">*</span> Telephone number:</label> 
						  <input type="text" class="field" value="<?=set_value('txt_telephone');?>" name="txt_telephone" id="txtTelephone" maxlength="100">
						</p>
						<label class="labels">&nbsp;</label><span style= id="err_txtMobilephone" class="field_err"><?=form_error('txt_mobile');?></span>
						<p>	
						  <label class="labels">Mobile number:</label> 
						  <input type="text" class="field" value="<?=set_value('txt_mobile');?>" id="txtMobilephone" name="txt_mobile" maxlength="100">
						</p>
						<label class="labels">&nbsp;</label><span  id="err_txtFaxNumber" class="field_err"><?=form_error('txt_fax');?></span>
						<p>	
							<label class="labels">Fax number:</label>
						  <input type="text" name="txt_fax" class="field" value="<?=set_value('txt_fax');?>" maxlength="100">
						</p>
						
						<div style="margin:10px 0px 5px 10px">
							<div class="more">
							<span style="padding-top: 10px; padding-bottom: 5px; float:left; color: rgb(255, 0, 0);" id="err_chkIAgree"><?=form_error('txt_ok');?></span>
							<input type="checkbox" style="clear:both" class="checkm" value="1" id="chkIAgree" name="txt_ok"<?=set_checkbox('txt_ok','1')?>>
							<span class="lbm"><span class="require_emp">*</span> I have read &amp; accept <strong>VietnamWorks</strong> <a target="_blank" class="link" href="http://employer.vietnamworks.com/privacy_policy.php">Privacy Policy</a> and <a target="_blank" class="link" href="http://employer.vietnamworks.com/terms_of_use.php">Terms of Use</a></span></div><br>
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
				  <input type="submit" value="Sign Up Now!" name="Submit" class="btn_c_emp">
      			  
		
				  <div class="btn_r_emp"></div></div>
			</div>
            <input type="hidden" name="image" />
             <input type="hidden" name="image_thumb" />
		</form>	
   </div>
   <!-- end content -->
</div>
<!-- end wrap -->



	<div style="clear:both"></div>
