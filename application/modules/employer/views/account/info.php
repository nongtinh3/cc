<div id="body_content"><div class="step_postjob">
	<h1 style="font-size:20px; font-weight:bold"><?=$this->lang->line('My profile')?></h1>
</div>
<div class="line_dotted"><!-- --></div>
<!-- begin wrap -->
<div class="wrap_cr">
   <!-- begin content -->

   <div id="content_cr">
		   <!-- begin Log In Information -->
 			<div class="box_corner">				
                    <b class="xtop"><b class="xb1 dblue_top"><!-- --></b><b class="xb2 dblue_curve dblue_title"><!-- --></b><b class="xb3 dblue_curve dblue_title"><!-- --></b></b>
					<div class="dblue_bg_title">
					  <strong><?=$this->lang->line('Log In Information')?></strong>
					</div>
					<div class="dwhite_content" style="text-align:center">
					<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
						
					  <tbody><tr>
						<td><form class="form_field" action="#">
						<p>
						  <label class="labels"><?=$this->lang->line('Email address')?>:</label>
						  <span class="field_text"><?=@$em_info->em_email;?></span>
						</p>
					    <p>
						  <label class="labels"><?=$this->lang->line('Enter Password')?>:</label> <span class="field_text">******</span>

						</p>
                      
					  </form></td>
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
					<div class="dwhite_content" style="text-align:center">
					<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
					  <tbody><tr>
						<td><form class="form_field" action="#">
						<p style="height:50px">
						  <label class="labels">
						   <img width="95" height="49" border="0" src="<?=base_url();?><?=@$em_info->em_logo;?>"></label>						  
						  <span class="field_text" style=" margin-top:20px">
						  <strong></strong>
						  </span>
						  </p>
						<p>
						  <label class="labels"><strong><?=$this->lang->line('Company size (number of employees)')?>:</label>
						  <span class="field_text"><?=$this->EM->get_com_size(@$em_info->em_com_size);?>
						  						  </span>
						</p>

					    <div>
						  <label class="labels"><strong><?=$this->lang->line('Company profile')?>:</strong></label>
						  <span class="field_text"><?=@$em_info->em_com_profile;?></span>
					    </div>  
						
						<p style="padding-top:5px">
						  <label class="labels"><strong><?=$this->lang->line('Company address')?>:</strong></label>
						  <span class="field_text"><?=@$em_info->em_com_address;?></span>
						</p>

						<p>
						  <label class="labels"><strong><?=$this->lang->line('District')?>:</strong></label>
						  <span class="field_text"><?=@$em_info->em_com_district ;?></span>
						</p>
						<p>
						  <label class="labels"><strong><?=$this->lang->line('Country')?>:</strong></label>
						  <span class="field_text"><?=$this->EM->get_com_country(@$em_info->em_com_country);?></span>
						</p>

						<p>
						  <label class="labels"><strong><?=$this->lang->line('Province')?>:</strong></label>
						  <span class="field_text"><?=$this->EM->get_city(@$em_info->em_com_province);?></span>
						</p>
						<p>
						  <label class="labels"><strong><?=$this->lang->line('Company website')?>:</strong></label>
						  <span class="field_text"><?=@$em_info->em_com_web;?>
						  </span>
						</p>
						<p>
						  <label class="labels"><strong><?=$this->lang->line('Contact name')?>:</strong></label>
						  <span class="field_text"><?=@$em_info->em_contact_name ;?></span>
						</p>
						<p>
						  <label class="labels"><strong><?=$this->lang->line("Contact person's position")?>:</strong></label> <span class="field_text"><?=@$em_info->em_contact_position ;?></span>
						</p>

						<p>
						  <label class="labels"><strong><?=$this->lang->line("Telephone number")?>:</strong></label>
						  <span class="field_text"><?=@$em_info->em_phone ;?></span>
						</p>
						<p>
						  <label class="labels"><strong><?=$this->lang->line('Mobile number')?>:</strong></label>
							<span class="field_text"><?=@$em_info->em_mobile;?></span>						
						  </p>

						<p>
						  <label class="labels"><strong><?=$this->lang->line('Fax number')?>:</strong></label>
						  <span class="field_text"><?=@$em_info->em_fax ;?></span>
						</p>
					  </form></td>
				  </tr>
				</tbody></table>
					</div><!--end xboxcontent-->	
					<b class="xbottom"><b class="xb3 dblue_curve dblue_bg_bottom"><!-- --></b><b class="xb2 dblue_curve dblue_bg_bottom"><!-- --></b><b class="xb1 dblue_top"><!-- --></b></b>				
			</div><!-- end Registration Information -->

   </div>
   <!-- end content -->
</div>
<!-- end wrap -->	<div style="clear:both"></div>
</div>