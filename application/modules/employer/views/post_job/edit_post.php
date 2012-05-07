<script type="text/javascript" src="<?=base_url();?>public/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>public/js/jquery.jdpicker.js"></script>
<link href="<?=base_url();?>public/css/jdpicker.css" rel="stylesheet" type="text/css" media="all" />

	<script type="text/javascript">
	$(document).ready(function() {
		var url = '<?=base_url();?>';
		// Reset all div
		$('#form_skill').hide(); // Mac dinh seelct chuyewn mon an di
		$('#skill').hide();
		
		$('#job_category').change(function() { // Neu co su thay doi gia tri o select category
			var cat = $(this).val();
			if(cat !='') {
				$('#form_skill').show(); 
				$('#skill').show();// Select chuyen mon se hien thi
				$.ajax ({
					type: "POST", // Kieu du lieu lay ve la dang POST
					dataType: "html",
					url: url + 'employer/post_job/get_chuyenmon', // Action toi ham get_chuyenmon trong controller demo
					data: "id=" + cat,
					success: function(data) {
						if(data) {
							$('#skill').html(data); // Gia tri tra ve se hien thi vo select box chuyen mon
						} else {
							$('#form_skill').hide();
							$('#skill').hide();
							$('#chon_skill').hide();
							$('#form_chon_skill').hide();
							$('#form_add').hide();
							$('#form_chon_skill').hide(); // Neu ko thi hien thi loi
						}	
					}
				});
			} else {
				$('#form_skill').hide();
				$('#skill').hide();
				$('#chon_skill').hide();
				$('#form_chon_skill').hide();
				$('#form_add').hide();
				$('#form_chon_skill').hide();
				
			}
		});
		$('#form_select').hide();
		$('#chon_skill').hide();		
		$('#form_add').hide();
		$('#form_chon_skill').hide();
		$('#skill').change(function() { // Neu co su thay doi gia tri o select category
			var cat = $(this).val();
			if(cat !='') {
				$('#chon_skill').show(); 
				$('#form_select').show();
				$('#form_add').show();
				$('#form_chon_skill').show();
				$('#skill').show();// Select chuyen mon se hien thi
				$.ajax ({
					type: "POST", // Kieu du lieu lay ve la dang POST
					dataType: "html",
					url: url + 'employer/post_job/get_skill', // Action toi ham get_chuyenmon trong controller demo
					data: "id=" + cat,
					success: function(data) {
						if(data) {
							$('#chon_skill').html(data); // Gia tri tra ve se hien thi vo select box chuyen mon
						} else {
							$('#form_select').hide();
							$('#chon_skill').hide();		
							$('#form_add').hide();
							$('#form_chon_skill').hide(); // Neu ko thi hien thi loi
						}	
					}
				});
			} else {
				
				$('#chon_skill').hide();
				$('#form_chon_skill').hide();
				$('#form_add').hide();
				$('#form_chon_skill').hide();
			}
		});
		
		
		 // Mac dinh seelct chuyewn mon an di
		
		$('#add').click(function() {  
		  return !$('#chon_skill option:selected').remove().appendTo('#selectAll');  
		 });  
		 $('#remove').click(function() {  
		  return !$('#selectAll option:selected').remove().appendTo('#chon_skill');  
		 });  
		 
		 $('form').submit(function() {
		 $('#selectAll option').each(function(i) {
		  $(this).attr("selected", "selected");
		 });	 
		  
		});
		    
	});
</script>


<div id="content">
<h3 style="font-size:14px;"><strong><?=@$error;?></strong></h3>
<form  action="<?=base_url()?>employer/post_job/edit_post/<?=@$em_post_job->id;?>" method="POST">

<div id="jobpost" class="container">
	<div class="pageTitleBox span-24 last">
                <!-- Begin Ads Area -->

                <div class="span-5">
                        <h1 style="font-size:24px; font-weight:bold"><span><?=$this->lang->line('Post Job')?></span></h1>
                </div>
                <br clear="all">
    </div>
    <!-- Begin SideBar --><!-- Emd SideBar -->

        <!-- Begin Content-->
  <div id="content" class="content span-19 last floatLeft">
                
                <!-- Begin Message Box -->
                <div id="err_top" class="messageBox" style="display:none">
                        <div class="error"><strong class="sprite_icon errorIcon">Sorry, there are errors with the information you provided. Please scroll down to check for errors.
						</strong></div>
                        <!-- <div class="notice"><strong class="sprite_icon noticeIcon">This is a div with the class notice</strong></div>
                        <div class="success"><strong class="sprite_icon successIcon">This is a div with the class success</strong></div>
                        -->                        
                </div>
                <!-- End Message Box-->
                
                

                        <!-- Begin Step 1- Panel --><!-- Begin Step 2- Panel -->
            <h2 style="font-size:14px; color:red"><?=$this->session->flashdata('wanring');?></h2>
                        <div class="panelContainer last">
                        		<div class="panelContainer last">
                                <h2 class="panelHeader clsHeader"><span><?=$this->lang->line('Premium Services')?></span></h2>
                    <div class="panelWrapper clsContent">
					<div class="panelContent">
                                        <fieldset>
                                                <legend>Premium Services</legend>
                                               
                                                <div class="premiumServices">
                                                <select onblur="UpdateFormStatus();" onchange="updateFieldbyCat(this, '_0'); UpdateFormStatus(); " class="field_list field_list_w" id="industryid_0" size="1" name="industryid[]" style="display:none">
											                  					<option value="0">Please select ...</option>
											                                    <option selected="" value="58">
				                                  </select><table border="1" class="listTable span-17p " title="Premium Services List" padding="0">

                                                        <colgroup>
                                                                <col width="34%">
                                                                <col width="22%">
                                                                <col width="22%">
                                                                <col width="22%">
                                                        </colgroup>
                                                        <tbody>
                                                                <tr>
                                                                        <th style="vertical-align:bottom" class="border alignRight"><?=$this->lang->line('Your selected Job Categories')?></th>

                                                                        <th class="border">
                                                                                <h2 class="highlightText "><?=$this->lang->line('Bold & Red')?></h2>
                                                                                <span><?=$this->lang->line('Highlight your job on search result page')?>. </span>
                                                                        </th>
                                                                        <th class="border">
                                                                                <h2 class="highlightText"><?=$this->lang->line('Top Level')?></h2>
                                                                                <span><?=$this->lang->line('Your job is on top of search result page')?>.</span>

                                                                        </th>
                                                                        <th>
                                                                                <h2 class="highlightText"><?=$this->lang->line('Top Job')?></h2>
                                                                                <span><?=$this->lang->line('Your job is highlight on homepage')?>.</span>
                                                                        </th>
                                                                </tr>
                                                                                                                                <tr>
                                                                        <td class="alignRight"><span style="font-weight: 400; font-size:100%" id="lb_category_id_0"><?=$this->EM->get_category(@$em_post_job->job_category);?></span></td>
                                                                        	
											                                
                                                                        <td class="alignRight">
                                                                                <select   name="txt_bold_red">
											                  <!--<option value="remove">No extra visibility for my advertisment</option>-->
                                                    
	<option value="0" <?php if(@$show_service->bold_red == 0){ echo "selected"; } ?>>Not User</option>	
    <option value="1" <?php if(@$show_service->bold_red == 1){ echo "selected"; } ?>>User this service</option> 
    </select>
                                                        </td>
                                                                        <td class="alignRight">
                                                                                <select class="select span-3plus last" tabindex="3"  name="txt_top_level">
<option value="0" <?php if(@$show_service->top_level == 0){ echo "selected"; } ?>>Not User</option>
<?php
	foreach($top as $rows)
	{
		if($rows->id == @$show_service->top_level)
		{
?>
<option value="<?=$rows->id;?>" selected="selected"><?=$rows->top_job;?></option>
<?php
		} else {
?>
<option value="<?=$rows->id;?>" ><?=$rows->top_job;?></option>
<?			
		}
	}
?>	
									   									  </select>
                                                                        </td>
                                                                                                                                                <td class="alignRight" rowspan="1">
                                                                        														   									<select class="select span-3plus last" tabindex="3" id="topjob" name="txt_top_job">
<option value="0" <?php if(@$em_post_job->top_job == 0){ echo "selected"; } ?>>Not User</option>
<?php
	foreach($top as $row)
	{
		if($row->id == @$show_service->top_job)
		{
?>
<option value="<?=$row->id;?>" selected="selected"><?=$row->top_job;?></option>
<?php
		} else {
?>
<option value="<?=$row->id;?>" ><?=$row->top_job;?></option>
<?			
		}
	}
?>	
					   																						   									  </select>
						   																					   					  </td>
                                                          </tr>
                                                                                                                                <tr>
                                                                        <td>&nbsp;</td>
                                                                        <td>&nbsp;<a title="Sample page of Bold Red Services" class="thickbox" href="javascript:void()"><?=$this->lang->line('View sample')?></a></td>
                                                                        <td>&nbsp;<a title="Sample page of Top Level on Search Result" class="thickbox" href="javascript:void()"><?=$this->lang->line('View sample')?></a></td>
                                                                        <td>&nbsp;<a title="Sample page of Top Job Services" class="thickbox" href="javascript:void()"><?=$this->lang->line('View sample')?></a></td>

                                                                </tr>
                                                                
                                                        </tbody>
                                                </table>
                                        </div>
                                        </fieldset>
                   	  </div>
                               	  </div>
                                </div>	         
                    <h2 class="panelHeader"><span><?=$this->lang->line('Job Information')?></span></h2>
                                <div class="panelWrapper">
                                        <div class="panelContent">
                                                <fieldset>
                                                        <legend>Job Information Content</legend>
                                                        <dl class="formRow span-18" id="errorjobtitle">
                                                                <dt>
                                                                        <label for=""><?=$this->lang->line('Job Title')?></label>
                                                                </dt>
                                                                <dd class="column formValue">
   <?php if(@$em_post_job->job_title!=''){?>                                                             
  <input type="text" title="Please enter job title" class="text required" maxlength="100" name="txt_job_title" id="jobtitle" value="<?=@$em_post_job->job_title;?>" tabindex="7">
  <?php } else { ?>
   <input type="text" title="Please enter job title" class="text required" maxlength="100" name="txt_job_title" id="jobtitle" value="<?=set_value('txt_job_title');?>" tabindex="7">
  <?php } ?>
                                                                         <span class="errorMessage" id="err_salaryrangeid" ><strong class="sprite_icon warningIcon"><?=form_error('txt_job_title');?></strong></span>																		
                                                                       </dd>
                                                        </dl>
                                                        <dl class="formRow span-18" id="errorjobcode">
                                                                <dt>
                                                                        <label for="companydesc"><?=$this->lang->line('Job Code')?><span class="note">(<?=$this->lang->line('Optional')?>)</span></label>
                                                                </dt>
                                                                <dd class="formValue span-13">
 <?php if(@$em_post_job->job_code!=''){?>                                                                
                                                                        <input type="text" class="text span-3" name="txt_job_code" id="txt_job_code" value="<?=@$em_post_job->job_code;?>" tabindex="8">
<?php } else { ?>
<input type="text"  id="txt_job_code" class="text span-3" name="txt_job_code"  value="<?=set_value('txt_job_code');?>" tabindex="8">
<?php } ?>                                                                        
                                                                        <span class="errorMessage" style="display:none"><strong class="sprite_icon warningIcon">Error message goes here</strong></span></dd>
                                                        </dl>
                                                        <dl class="formRow span-18" id="errorjoblevelid">
                                                                <dt>
                                                                        <label for="companydesc"><?=$this->lang->line('Job Level')?></label>
                                                                </dt>
                                                                <dd class="formValue span-13">               
               <select title="Please select job level" name="joblevelid" id="joblevelid" class="select span-7 required" tabindex="9">
               
              
               <?php foreach($em_level as $row) { ?>
               <?php if($row->id == @$em_post_job->job_level){?>
               <option value="<?=$row->id;?>" selected="selected"><?=$row->em_level;?></option>
               <?php } else { ?>               
                <option value="<?=$row->id;?>"><?=$row->em_level;?></option>
                <?php } } ?>
            </select>
                                                                       <span class="errorMessage" id="err_joblevelid" ><strong class="sprite_icon warningIcon"><?=form_error('joblevelid');?></strong></span></dd>
                                                        </dl>
                                                        <dl class="formRow span-18" id="errortypeworkingid">
                                                                <dt>
                                                                        <label for="companydesc"><?=$this->lang->line('Job Type')?></label>
                                                                </dt>
                                                                <dd class="formValue span-13">
                                                                        <select title="Please select job type" name="typeworkingid" id="typeworkingid" class="select span-7 required" tabindex="10">
                 
                 <?php foreach($em_type as $row){?>
                 <?php if($row->id == @$em_post_job->job_type){?>
                  <option value="<?=$row->id;?>" selected="selected"><?=$row->em_job_name;?></option>
                 <?php } else { ?>
                  <option value="<?=$row->id;?>"><?=$row->em_job_name;?></option>
                  <?php } }?> </select>
                                                                        <span class="errorMessage" id="err_typeworkingid" ><strong class="sprite_icon warningIcon"><?=form_error('typeworkingid');?></strong></span></dd>
                                                        </dl>
                                                        <dl class="formRow span-18" id="dl_salaryrangeid">
                                                                <dt>
                                                                        <label for="companydesc"><?=$this->lang->line('Salary Range')?></label>
                                                                </dt>
                                                                <dd class="formValue span-13">
                                                                        <select name="salaryrangeid" id="salaryrangeid" class="select span-7" tabindex="11" onchange="UpdateFormStatus();" onblur="UpdateFormStatus(); ">
                    
                      
                               
                      		 
                              	
                        	<option value="0" selected="">Specified</option>    
                         <?php foreach($em_salary as $row){?>
                       			<?php if($row->id == $em_post_job->job_salary_other) {?>
                             	
                         <option value="<?=$row->id;?>" selected="selected"><?=$row->em_salary;?></option>
                  		<?php } else { ?>
                        
                          <option value="<?=$row->id;?>" ><?=$row->em_salary;?></option>
<?php } }?>
                   
                      
                       
                       
																				                                                                      </select>
                                                                                                                                                    
                            
                                 	   <span id="salaryrange">
	                                                                        <span class="errorMessage" id="err_salaryrangeid"><strong class="sprite_icon warningIcon"><?=form_error('salaryrangeid');?></strong></span>
	                                                                        <br><span class="inlineText span-1minus" style="clear: both"><?=$this->lang->line('Min')?> </span>
<?php if(@$em_post_job->job_salary_min!=''){ ?>
<input type="text" class="text span-2 " value="<?=@$em_post_job->job_salary_min;?>" name="salarymin" id="salarymin"  tabindex="12">
<?php } else { ?>
<input type="text" class="text span-2 " value="<?=set_value('salarymin');?>" name="salarymin" id="salarymin"  tabindex="12">
<?php } ?>
	                                                                       <span class=" inlineText span-1minus padding-left"><?=$this->lang->line('Max')?> </span><?php if(@$em_post_job->job_salary_max!=''){ ?>
<input type="text" class="text span-2 " value="<?=@$em_post_job->job_salary_max;?>" name="salarymax" id="salarymax"  tabindex="12">
<?php } else { ?>
<input type="text" class="text span-2 " value="<?=set_value('salarymax');?>" name="salarymax" id="salarymax"  tabindex="12">
<?php } ?>
	                                                                       <span class="inlineText span-3">&nbsp;<?=$this->lang->line('(USD/Month)')?></span>
                                                                       </span>
                                                          
                                                                </dd>
                                                        </dl>
                                                        <dl class="formRow span-18" id="errorcity">
                                                    <dt>
                                                                        <label for="companydesc"><?=$this->lang->line('Work Place')?></label>
                                                                </dt>
                                                                <dd class="formValue span-12 relative">   
                                                                   
                                                                                                                                            
                                                                    <!-- dunglt modify -->
     																<select name="work_place" class="select span-7 required" tabindex="9">
                                                                   
                                  <?php foreach($em_country as $row) { ?>
                                  <?php if($row->id == $em_post_job->job_work){?>
                                  <option value="<?=$row->id;?>" selected="selected"><?=$row->em_city;?></option>
                                    <?php } else { ?>
                                    <option value="<?=$row->id;?>"><?=$row->em_city;?></option>
                                    <?php } }?>
                                   
                                                                    </select> 
                                                                    
                                                                     
                                                                    <div id="addcity" class="floatBox span-5 absolute" style="left:280px ;display:none"><span class="floatBoxArrow">&nbsp;</span><ul id="cityadd" class="relative"></ul></div>
                                                                    
                                                                    <!-- dunglt end modify -->                                                                    
                                                                        <span class="errorMessage" id="err_cityid" style="display:none"><strong class="sprite_icon warningIcon"><?=form_error('cityid[]');?></strong></span></dd>
                                                        </dl>
                                                        <dl class="formRow span-18" id="errorindustry">
                                                    <dt>
                                                                        <label for="companydesc"><?=$this->lang->line('Job Category')?></label>
                                                                </dt>
                                                                <dd class="formValue span-12 relative">
                                                                                                                                                       <!-- dunglt modify --><select name="job_category" id="job_category" class="select span-7 required" tabindex="9">
                                   <?php foreach($em_category as $row) { 
								   		if($em_post_job->job_category == $row->id)
											{
								   ?>
                                 <option value="<?=$row->id;?>" selected="selected"><?=$row->em_cat_name;?></option>
                                   <?php }  else {?>
                                    <option value="<?=$row->id;?>" ><?=$row->em_cat_name;?></option>
                                   <?php }  }?>
                                   </select> 
                                                                  <div id="addindustry" class=" floatBox span-5 absolute" style="left:280px ;display:none"><span class="floatBoxArrow">&nbsp;</span><ul id="industryadd" class="relative"></ul></div>
                                                                    <!-- dunglt end modify -->
                                                          <span class="errorMessage" id="err_industryid" style="display:none"><strong class="sprite_icon warningIcon">Please choose at least one category</strong></span></dd>
                                                        </dl>
                                                        
                                                        <dl class="formRow span-18" id="form_skill">
                                                   				 <dt>
                                                                        <label for="companydesc"><?=$this->lang->line('Skill')?></label>
                                                                </dt>
                                                                <dd class="formValue span-12 relative">
                                                                                                                                                       <!-- dunglt modify --><select name="skill" id="skill" class="select span-7 required" tabindex="9">
                                                           </select> 
                                                                  
                                                                    <!-- dunglt end modify -->
                                                         		</dd>
                                                        </dl>
                                                        
                                                        <dl class="formRow span-18" id="form_chon_skill">
                                                   				 <dt>
                                                                        <label for="companydesc"><?=$this->lang->line('Choose Skill')?></label>
                                                                </dt>
                                                                <dd class="formValue span-12 relative">
                                                                                                                                                       <!-- dunglt modify --><select name="chon_skill" id="chon_skill" multiple="multiple" class="select span-7 required" tabindex="9">
                                                           </select>                                                        
                                                                  
                                                                    <!-- dunglt end modify -->
                                                         		</dd>                                                		 </dl>
                                                        
                                                        
                                                         <dl class="formRow span-18" id="form_add">
                                                   				 <dt>
                                                                        <label for="companydesc"></label>
                                                                </dt>
                                                                <dd class="formValue span-12 relative">
                                                                                                                                                     							<a href="#" id="add" style="background:#ccc; padding:5px 15px"><?=$this->lang->line('Add')?></a>
                                                                                                                                                                                <a href="#" id="remove" style="background:#ccc; padding:5px 15px"><?=$this->lang->line('Remove')?></a>
                                                         		</dd>                                                		 </dl>
                                                        
                                                        <!------End form chon skill------------>
                                                        
                                                        <!-----Begin chon ---------->
                                                        
                                                         <dl class="formRow span-18" id="form_select">
                                                   				 <dt>
                                                                        <label for="companydesc"><?=$this->lang->line('Skill selected')?></label>
                                                                </dt>
                                                                <dd class="formValue span-12 relative">
                                                                                                                                                       <!-- dunglt modify --><select name="selectAll[]" id="selectAll" multiple="multiple" class="select span-7 required" tabindex="9">
                                                           </select> 
                                                                  
                                                                    <!-- dunglt end modify -->
                                                         		</dd>
                                                               
                                                                  
                                                                    <!-- dunglt end modify -->
                                                         		</dd>
                                                                
                                                                
                                                        </dl>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        <dl class="formRow span-18" id="errorjobdescription">
                                                                <dt>
                                                                        <label for="companydesc"><?=$this->lang->line('Job Description')?></label>
                                                                </dt>
																
                                                                <dd class="formValue span-12plus">
                 <?php if(@$em_post_job->job_description!='') {?>
                 <textarea type="text" title="Please enter job description" class="_browser required" cols="75" onkeyup="limiter(this.id,'jobdescriptionremain',2,14500)" name="jobdescription" id="jobdescription" rows="10" tabindex="16"><?=$this->EM->nl2br_revert(@$em_post_job->job_description);?></textarea>
                 <?php } else { ?>
                <textarea type="text" title="Please enter job description" class="_browser required" cols="75" onkeyup="limiter(this.id,'jobdescriptionremain',2,14500)" name="jobdescription" id="jobdescription" rows="10" tabindex="16"><?=set_value('jobdescription');?></textarea> 
                 <?php } ?>       								
                                                                        <span class="note" id="jobdescriptionremain"><?=$this->lang->line('You have 14500 characters remaining')?></span><span class="errorMessage" id="err_jobdescription" ><strong class="sprite_icon warningIcon"><?=form_error('jobdescription');?></strong>
                                                                        </span>
																		
																</dd>
                                                        </dl>
														<dl class="formRow span-18" id="errorjobrequirement">
                                                                <dt>
                                                                        <label for="companydesc"><?=$this->lang->line('Job Requirement')?></label>
                                                                </dt>
                                                                <dd class="formValue listtype_on span-13">
                                            <?php if(@$em_post_job->job_requirement!='') { ?>                    
                                                                        <textarea title="Please enter job requirement" type="text" class="bottom required" onkeyup="limiter(this.id,'skillexperienceremain',2,14500)" name="job_requirement" id="job_requirement" rows="10" tabindex="17"><?=$this->EM->nl2br_revert(@$em_post_job->job_requirement);?></textarea>
                                             <?php } else { ?>
                                             <textarea title="Please enter job requirement" type="text" class="bottom required" onkeyup="limiter(this.id,'skillexperienceremain',2,14500)" name="job_requirement" id="job_requirement" rows="10" tabindex="17"><?=set_value('job_requirement');?></textarea>
                                             <?php } ?>                          
                                                                        
                                                                         <span class="note" id="skillexperienceremain"><?=$this->lang->line('You have 14500 characters remaining')?></span><span class="errorMessage" id="err_skillexperience" ><strong class="sprite_icon warningIcon"><?=form_error('job_requirement');?></strong></span>
																		 <span class="errorMessage" id="err_email_jobrequirement" style="display:none"><strong class="sprite_icon warningIcon">Please do not enter email address or telephone number in this field.</strong></span>
																</dd>
                                                        </dl>
														<dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="label"><?=$this->lang->line('Deadline to apply')?><span class="note">(<?=$this->lang->line('Optional')?>)</span></label></dt>
                                                                <dd class="formValue span-13">
                                                                <?php if(@$em_post_job->job_apply!='') {?>
                                                                <input type="text"  onfocus="formatText(this,'dd/mm/yyyy');" onblur="setDefaultValue(this,'dd/mm/yyyy')" value="<?=@$em_post_job->job_apply;?>" class="text span-5plus hintText" name="txtBirthday" id="txtBirthday"><span id="date_icon" class="sprite_icon dateIcon span-2"></span>
                                                                <?php } else { ?>
                                                             <input type="text"  onfocus="formatText(this,'dd/mm/yyyy');" onblur="setDefaultValue(this,'dd/mm/yyyy')" value="<?=set_value('txtBirthday');?>" class="text span-5plus hintText" name="txtBirthday" id="txtBirthday"><span id="date_icon" class="sprite_icon dateIcon span-2"></span>   
                                                                <?php } ?>
                                                                    
                                                        </dd></dl>
														
														
                                                        <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="companydesc2"><?=$this->lang->line('Preferred language for applications')?></label>
                                                                </dt>
                                                                <!-- dunglt -->
                                                                <dd class="formValue span-13">
         <select name="txt_language" class="select" tabindex="18">
        
         <?php foreach($em_language as $row) {?>
         	<?php if($row->id == @$em_post_job->job_language) {?>
         	<option value="<?=$row->id;?>" selected="selected"><?=$row->em_la_name;?></option>
            <?php } else {?>
            <option value="<?=$row->id;?>"><?=$row->em_la_name;?></option>
         <?php } }  ?>
         
       
                                                                                                                                         </select>
                                                                <span class="errorMessage" id="languagegselectid" style="display:none"><strong class="sprite_icon warningIcon">Error message goes here</strong></span></dd>
                                                                <!-- dunglt -->
                                                        </dl>
</fieldset>
                                        </div>
                                </div>
                        </div>
                        <!-- Begin Step 3- Panel -->
                        <div class="panelContainer span-19  append-bottom last">
                                <h2 class="panelHeader"><span><?=$this->lang->line('Contact Information')?></span></h2>
                                <div class="panelWrapper">
                                        <div class="panelContent">
                                                <fieldset>
                                                        <legend>Contact Information Content</legend>
                                                        <dl class="formRow span-18" id="errorcontact">
                                                                <dt>
                                                                        <label for="label"><?=$this->lang->line('Contact Person')?></label>
                                                                </dt>
                                                                <dd class="formValue span-13">
                                                                        <input type="text" class="text" maxlength="30" name="contactname" id="contactname" value="<?=@$em_info->em_contact_position;?>" tabindex="19">
                                                                        <br>
                                                                        <span>
                                                                                <input type="checkbox" name="isshowcontact" value="1" checked="checked" tabindex="20">
																				<span class="inlineText"><?=$this->lang->line('Showed in job ads')?></span>
																				<span class="errorMessage" id="err_contactname_input" style="display:none"><br><strong class="sprite_icon warningIcon">Please do not enter email address or telephone number</strong></span>
                                                                                <span class="errorMessage" id="err_contactname" style="display:none"><br><strong class="sprite_icon warningIcon">Please enter contact name</strong></span></span></dd>
                                                        </dl>
											<dl class="formRow span-18" id="errortelephone">
                                                                <dt>
                                                                        <label for="label"><?=$this->lang->line('Phone Number')?></label>
                                                                </dt>
                                                                <dd class="formValue span-13">
                                                                        <input type="text" class="text span-5" name="telephone" id="telephone" value="<?=@$em_info->em_phone;?>" tabindex="21">
																		<span class="note">&nbsp;(<?=$this->lang->line('hidden to job seekers')?>)</span>
                                                                        <span class="errorMessage" id="err_telephone" style="display:none"><strong class="sprite_icon warningIcon">Please enter phone number</strong></span></dd>
                                                        </dl>
<dl class="formRow span-18" id="erroremailaddress">
                                                                <dt>
                                                                        <label for="companydesc2"><?=$this->lang->line('Email for applications')?></label>
                                                                </dt>
                                                                <dd class="formValue span-13">
                                                                        <input type="text" class="text span-5" name="emailaddress" id="emailaddress" value="<?=@$em_info->em_email;?>" tabindex="22">
																		<span class="note">&nbsp;(<?=$this->lang->line('hidden to job seekers')?>)</span>
                                                                        <span class="errorMessage" id="err_emailaddress" style="display:none"><strong class="sprite_icon warningIcon">Please enter email address</strong></span></dd>
                                                        </dl>
                                                        <span style="float:right"><a class="  sprite_icon editIcon padding-left" href="<?=site_url('employer/update_profile/');?>"><strong><?=$this->lang->line('Edit')?></strong></a></span>  
</fieldset>
                                        </div>
                                        <div>
                                        <input type="hidden" value="<?=@$this->session->userdata('em_id');?>" name="em_id">
                                        <input type="hidden" value="<?=@$em_post_job->id;?>" name="post_id">
						                               
						               
                                        </div>
                                </div>
                        </div>
		<!-- End Step 3-->
        
            <!-- Form Action Bar-->
                        <div class="formAction">
                                        <fieldset>
											<input type="submit" name="btnJob" value="<?=$this->lang->line('Update')?>" class="btn_em">
                                            <input type="reset" name="btnJob" value="<?=$this->lang->line('Cancel')?>" class="btn_em">
											
                                                <!-- <button type="button" class="actionBtn Sec" tabindex="18"><span>Go back</span></button> -->
                                        </fieldset>
                        </div>
                        
                        
                     
</form>
  </div>

	<!-- End Content-->
<!-- </div>-->


<div id="dialogBox" class="dialogBox" style="display:none">
    <div id="growlUI" class="highlightBox warning"></div>
    <span class="iconBox"><a onclick="closeBlockUI()" class="sprite_icon deleteIconDis"><span class="hide">Close</span></a></span>
</div>
<script type="text/javascript">

$(document).ready(function(){
		$('#deadlinedate').jdPicker(
			{
				date_format:"dd/mm/YYYY"
			}
		);
	});
// This function to add another category at bellow last category 

function UpdateFormStatus() {
   //calculate the location price
 // ofrm.joblocationfee.value = cart.calServicePrice('city');
  
   //calcualte the industry related price
  //ofrm.jobcategoryfee.value = cart.calGroupPrice('indus_[0-9]+');

  UpdateIndustryElementsStatus(); 
}

function UpdateIndustryElementsStatus() {

//alert('asdfasf 2');

  if ( $("#salaryrangeid").val() == 0 ) {
    $("#salarymin").attr('disabled', false);
    $("#salarymax").attr('disabled', false);
    $('#salaryrange').css('display','');
  }
  else {
    $("#salarymin").attr('disabled', true);
    $("#salarymax").attr('disabled', true);
    $("#salaryrange").hide();
  }

  num_group = $(ofrm.industryid).length;
  num_indus = cart.countItemsPerService('industry');
    
  // update "remove category button" status
  if ( num_group >= 2 )
    $("#btn_remove").show();
  else
    $("#btn_remove").hide();
  
  
  // update "add category button" status
  if ( num_indus == num_group && num_group<3) 
    $("#btn_add").show();
  else
    $("#btn_add").hide();

  
  // update extrapriority and visibility status for each group
  for (i=0; i<num_group; i++) {
    if ( $(ofrm.industryid)[i].value > 0 ) {
      $(ofrm.extravisibilityid)[i].disabled = false;
      $(ofrm.extrapriorityid)[i].disabled = false;
    }
    else {
      $(ofrm.extravisibilityid)[i].disabled = true;
      $(ofrm.extrapriorityid)[i].disabled = true;
    }
  }
}


function doValidate() {
  isError = false;
   //check jobpack
  var jobpackArr = ofrm.jobpackid;
  hasJobpack = false;
  for(i = 0; i<jobpackArr.length; i++){
	if(jobpackArr[i].checked) hasJobpack = true;
  }
  $('#err_jobpack').addClass('hide');
  if(!hasJobpack){
	isError = true;
	$('#err_jobpack').removeClass('hide');
  }
  /*
$('#companysizeid').removeClass('errorLine');
  if ( $('#companysizeid').val()==''){
	   isError = true;
	   $('#err_companysizeid').css('display','');
  }else $('#err_companysizeid').css('display','none');
  */
/*    $('#err_companywebsite').css('display','none');
  
  if(trim($('#companywebsite').val())!='')
	if(!validateUrl($('#companywebsite').val())){
		isError = true;
		$('#err_companywebsite').css('display','');
	}
	*/
  if ( $('#joblevelid').val()==''){
	   isError = true;
	   $('#errorjoblevelid').addClass('errorLine');
	   $('#err_joblevelid').css('display','');
 }else $('#err_joblevelid').css('display','none');
 $('#errortypewokingid').removeClass('errorLine');
 if ( $('#typeworkingid').val()==''){
	   isError = true;
	   $('#errortypeworkingid').addClass('errorLine');
	   $('#err_typeworkingid').css('display','');
 }else $('#err_typeworkingid').css('display','none');
  
  
  $('#err_companydesc').hide();
  $('#err_companydesc_input').hide();
  if ( !checkRequired(ofrm.companydesc)){ 
	  isError = true;
	  $('#err_companydesc').show();
  }else{
	//check phone or email in this field
	  if(emailExistsInString($('#companydesc').val()) || phoneExistsInString($('#companydesc').val())){
		isError = true;
		$('#err_companydesc_input').show();
	  }
  }
  
  $('#err_jobtitle').css('display','none');
  $('#err_jobtitle_input').css('display','none');
  if ( !checkRequired(ofrm.jobtitle)){ 
	  isError = true;
	  $('#err_jobtitle').css('display','');
  }else{
	//check phone or email in this field
	  if(emailExistsInString($('#jobtitle').val()) || phoneExistsInString($('#jobtitle').val())){
		isError = true;
		$('#err_jobtitle_input').css('display','');
	  }
  }
  
  $('#err_email_companyprofile').css('display','none');
  if ( !checkRequired(ofrm.companyprofile)){
	   isError = true;
	   $('#errorcompanyprofile').addClass('errorLine');
  }else{
		//check exist email
	    if(emailExistsInString($('#companyprofile').val())){
			isError = true;
			$('#err_email_companyprofile').css('display','');
		}
		//check if exist phone number
		if(phoneExistsInString($('#companyprofile').val())){
			isError = true;
			$('#err_email_companyprofile').css('display','');
		}
	}
 // if ( !checkRequired(ofrm.jobdescription)) isError = true;
  //if ( !checkRequired(ofrm.skillexperience)) isError = true;
  $('#err_contactname').hide();
  $('#err_contactname_input').hide();
  if ( !checkRequired(ofrm.contactname)){ 
	  isError = true;
	  $('#err_contactname').show();
  }else{
	//check phone or email in this field
	  if(emailExistsInString($('#contactname').val()) || phoneExistsInString($('#contactname').val())){
		isError = true;
		$('#err_contactname_input').show();
	  }
  }
  $('#errortelephone').removeClass('formRow span-18 errorLine').addClass('formRow span-18');
  $('#err_telephone').hide();
  if ( !checkRequired(ofrm.telephone)) {
	  isError = true;
	  $('#errortelephone').removeClass('formRow span-18').addClass('formRow span-18 errorLine');
  }
  $('#erroremailaddress').removeClass('formRow span-18 errorLine').addClass('formRow span-18');
  $('#err_emailaddress').hide();
  if ( !checkRequired(ofrm.emailaddress)) {
	  isError = true;
	  $('#erroremailaddress').removeClass('formRow span-18').addClass('formRow span-18 errorLine');
  }
	//check select city
	var sumcity=0;
	$.each($("input[name='cityid[]']:checked"), function() {
		  
		 sumcity=sumcity+1;
		  
	});
$('#errorcity').removeClass('errorLine');
	
	if(sumcity==0){
		isError = true;
		$('#errorcity').addClass('errorLine');
		$('#err_cityid').css('display','');
	}else{
		$('#err_cityid').css('display','none');
	}
	//check select industry
	var sumindustry=0;
	$.each($("input[name='industryid[]']:checked"), function() {
		 sumindustry=sumindustry+1;
	});
	$('#errorindustry').removeClass('errorLine');
	if(sumindustry==0){
		isError = true;
		 $('#errorindustry').addClass('errorLine');
		 $('#err_industryid').css('display','');
	}else{
		$('#err_industryid').css('display','none');
	}
	
	$('#err_email_jobdescription').css('display','none');
	$('#errorjobdescription').removeClass('errorLine');
	  if ( !checkRequired(ofrm.jobdescription)){
		   isError = true;
		   $('#errorjobdescription').addClass('errorLine');
		   $('#err_email_jobdescription').css('display','none');
	  }else{
		//check exist email
		if(emailExistsInString($('#jobdescription').val())){
			isError = true;
			$('#err_email_jobdescription').css('display','');
		}
		//check if exist phone number
		if(phoneExistsInString($('#jobdescription').val())){
			isError = true;
			$('#err_email_jobdescription').css('display','');
		}
	  }
	  
	  $('#err_email_jobrequirement').css('display','none');
	if ( !checkRequired(ofrm.skillexperience)){
	    isError = true;
	    $('#errorjobrequirement').addClass('errorLine');
	}else{
		//check exist email
	    if(emailExistsInString($('#skillexperience').val())){
			isError = true;
			$('#err_email_jobrequirement').css('display','');
		}
		//check if exist phone number
		if(phoneExistsInString($('#skillexperience').val())){
			isError = true;
			$('#err_email_jobrequirement').css('display','');
		}
	}
	  
  // Check Salary
  $('#dl_salaryrangeid').removeClass('errorLine');
  if (ofrm.salaryrangeid.value == '') {
    if (!isNaN(parseInt(ofrm.salarymin.value))) ofrm.salarymin.value = parseInt(ofrm.salarymin.value);
    if (!isNaN(parseInt(ofrm.salarymax.value))) ofrm.salarymax.value = parseInt(ofrm.salarymax.value);
    $('#err_salaryrangeid').css('display','none');
    if (isNaN(parseInt(ofrm.salarymin.value)) || isNaN(parseInt(ofrm.salarymax.value))) {
      isError = true;
      $('#dl_salaryrangeid').addClass('errorLine');
      $('#err_salaryrangeid').css('display','');
    } else {
      if (parseInt(ofrm.salarymin.value) > parseInt(ofrm.salarymax.value) || (parseInt(ofrm.salarymin.value)+parseInt(ofrm.salarymax.value)) == 0) {
        isError = true;
        $('#dl_salaryrangeid').addClass('errorLine');
        $('#err_salaryrangeid').css('display','');
      }
    }
  }
  else {
    if ( !checkRequired(ofrm.salaryrangeid)) isError = true;
  } 
  
  // check First Category
 /* var total_comp = $(ofrm.industryid).length;
  $('#err_industryid_0').hide();
  if (total_comp > 1) {
    if (ofrm.industryid[0].value == 0) {
      isError = true;
      $('#err_industryid_0').show();
    }
  }
  else {
    if (ofrm.industryid.value == 0){
      isError = true;     
      $('#err_industryid_0').show();
      
    }
  }*/
  
  // if don't chose a salary range, must enter valid specified salary
  /*
  if ( !checkRequired(ofrm.salaryrangeid) ) {
    errorAlertOff(ofrm.salaryrangeid);
    
    if ( !checkRequired(ofrm.salarymin) ) isError = true;
    if ( !checkRequired(ofrm.salarymax) ) isError = true;
    if ( !checkInt(ofrm.salarymin) ) isError = true;
    if ( !checkInt(ofrm.salarymax) ) isError = true;
  }
  */
  
  $('#err_top').hide();
  if (isError) {
    $('#err_top').show();
    window.location = '#_top';
  }
  return (isError == false);
}


//dunglt modify 10/2010
/*addCart cho city*/
var arrcityfirst =new Array();

 
var arrcity=new Array(); // regular array (add an optional integer
var k = new Array();
var k1=-1;
  $.each($("input[name='cityid[]']:checked"), function() {
	  k1=k1+1;
	  arrcity[k1]=$(this).val();
	  
	jQuery("#cityadd").append("<li class='clear' id='city1_"+$(this).val()+"'><span class='span-4plus'>"+$('#textcity_'+$(this).val()).text()+"</span><span class='absolute light'>[<a href='javascript:void(0)' onClick='removeCart("+$(this).val()+",\""+$('#textcity_'+$(this).val()).text()+"\",\"city1_"+$(this).val()+"\");'>x</a>]</span></li>");
	
	});


 function addCart(value,text,obj){
	if(obj.is(':checked')){
		k = new Array();
		for(i=0;i<=k1;i++){
			k[i]=i;
		}
		for(i=0; i<=2; i++){
			if(k[i] == null){
				k[i]=i;
				$('#addcity').css('display','');
				jQuery("#cityadd").append("<li  class='clear' id='city1_"+value+"'><span class='span-4plus'>"+text+"</span><span class='absolute light'>[<a href='javascript:void(0)' onClick='removeCart("+value+",\""+text+"\",\"city1_"+value+"\");'>x</a>]</span></li>");
				
				arrcity[i] = value;
				//cart.add('city', value,k[i], 'city');
				i=2; var validcity=true;
				k1++;
			}
		}
		if(validcity ==null){
			$("#city_"+value).attr('checked',false);
			showMessage('dialogBox#growlUI',"<span style='padding:10px 0; display:block'><span class='sprite_icon importantIcon floatLeft'>&nbsp;</span>You can only select maximum <strong>3</strong> locations</span>",3000,350); 
		}
	}
	else{
		
		for(key in arrcity){
			if(value==arrcity[key]){
				
				$('#city1_'+value).remove();
				//cart.remove('city',value,key, 'city', 'update buying order');
				
				arrcity.splice(key,1);
				k.splice(key,1);
				k1--;
			}
		}
		if(arrcity.length<=0)
			$('#addcity').css('display','none');
	}
}
function removeCart(value,text,id_li){
	for(key in arrcity){
		if(value==arrcity[key]){
			$("#city_"+value).attr('checked',false);  
			$('#'+id_li).remove();
			arrcity.splice(key,1);
			k.splice(key,1);
			//cart.remove('city',value,  k, 'city', 'update buying order');
			k1--;
		}
	}
	if(arrcity.length<=0)
		$('#addcity').css('display','none');
}
/*end addCart cho city*/
 
 /*addCart cho industry*/
 //use for submit
 
var arrindusf =new Array();


var arrindustry=new Array(); // regular array (add an optional integer
var h = new Array();
var h1=-1;
$.each($("input[name='industryid[]']:checked"), function() {
	h1=h1+1;
	arrindustry[h1]=$(this).val();
	jQuery("#industryadd").append("<li class='clear' id='industry1_"+$(this).val()+"'><span class='span-4plus'>"+$('#textindustry_'+$(this).val()).text()+"</span><span class='absolute light'>[<a href='javascript:void(0)' onClick='removeCartIndustry("+$(this).val()+",\""+$('#textindustry_'+$(this).val()).text()+"\",\"industry1_"+$(this).val()+"\");'>x</a>]</span></li>");
	
	});
	
 
function addCartIndustry(value,text,obj){
	if(obj.is(':checked')){
		h=new Array();
		for(i=0;i<=h1;i++){
			h[i]=i;
		}
		
		for(i=0; i<=2; i++){
			if(h[i] == null){
			h[i]=i;
			$("#addindustry").css("display", "");
			jQuery("#industryadd").append("<li class='clear' id='industry1_"+value+"'><span class='span-4plus'>"+text+"</span><span class='absolute light'>[<a href='javascript:void(0)' onClick='removeCartIndustry("+value+",\""+text+"\",\"industry1_"+value+"\");'>x</a>]</span></li>");
			
			arrindustry[i] = value;
			//cart.add('industry', value,k[i], 'industry');
			//cart.add('industry',value, '_'+h[i], 'indus_'+h[i]);
			i=2;var validindustry=true;
			h1++;
			}
		}
		if(validindustry ==null){$("#industry_"+value).attr('checked',false);showMessage('dialogBox#growlUI',"<span style='padding:10px 0; display:block'><span class='sprite_icon importantIcon floatLeft'>&nbsp;</span>You can only select maximum <strong>3</strong> categories</span>",3000,350);}
	}
	else{
		for(key in arrindustry){
			if(value==arrindustry[key]){
				
				$('#industry1_'+value).remove();
				//cart.remove('industry',value,key, 'industry', 'update buying order');
				//cart.removeGroup('indus_'+key);
				arrindustry.splice(key,1);
				h.splice(key,1);
				h1--;
			}
		}
		if(arrindustry.length<=0)
			$("#addindustry").css("display", "none");
	}
}
 
//dunglt end modify 10/2010
function doProcess(currentstep, jumpto) {
  var isValid   = true;
  
  if  (currentstep != jumpto) isValid = doValidate();
  else {
    if ( !checkRequired(ofrm.jobtitle)) isValid = false; 
  }
 
  if ( isValid ) {
    //new.Price project   
    if ( (cart.calTotalPrice()>cart.calServicePrice('jobposting')) ) {      
      cart.add('saving', 1, 1, 'other');
    } else {
      cart.remove('saving', 1, 1, 'other');
    }
	//so sanh industry old adn new de update vao cart
    //for(i=0;i<arrindustry.length;i++){
	//add city vao cart
	addCityToCart();
	//end add city
	var arrindusfinal=new Array();
	s=-1;
	$.each($("input[name='industryid[]']:checked"), function() {
	s=s+1;
	arrindusfinal[s]=$(this).val();
	});
	recalculateIndustry(arrindusf,arrindusfinal);
	/*
	//remove premium service if selected job-package is job-pack
	if($('input[name=jobpackid]:checked').val()==5){ //this is ID of job-pack from job-pack database
		//get all industry
		var industry = cart.list.industry;
		for(i=0;i<industry.length;i++){
			//remove services of each industry
			//use add function to remove other service and add 0 value
			if(industry[i]){
				cart.add('extrapriority', 1, '_'+i, industry[i].group); //extrapriority
				cart.add('extravisibility', 1, '_'+i, industry[i].group); //extravisibility
			}
		}
		//remove topjob if any
		if(cart.list.topjob){
			for(i=0;i<7;i++)
				cart.remove('topjob',i,i,'other');
		}
	} */
	//update indus_X
	
    ofrm.order.value  = cart.toXML();
    ofrm.doing.value  = 'jump';
    ofrm.jumpto.value = jumpto; 
    ofrm.submit();    
  }
  else {
    return false;
  } 
}
function removeCartIndustry(value,text,id_li)
{
  for(key in arrindustry){
   if(value==arrindustry[key]){
    $("#industry_"+value).attr('checked',false);
    $('#'+id_li).remove();arrindustry.splice(key,1);
    h.splice(key,1);
    h1--
   }
  }
  if(arrindustry.length<=0)$("#addindustry").css("display","none")
}

cart.fromXML('<items><item service_key="jobposting" option_key="1" buying_order="0" group="jobposting" /></items>');

$("#ofrm").ready ( function() { UpdateFormStatus() }  );
$("#ofrm").change ( function() { UpdateFormStatus() }  );
$("#ofrm").click ( function() { UpdateFormStatus() }  );
$("#ofrm").dblclick ( function() { UpdateFormStatus() }  );

UpdateFormStatus();

//MARS project
//var total_template  = ; // include default + buy
var isHaveLogo    = 0;
var checkLogo     = 0;
var languageid    = 2;
//if (total_template>=1) {
  //checkShowLogoOnSearch();  
//}


$(document).ready(function () {
	//load character limiter 
	limiter('companyprofile','companyprofileremain',2,10000);
	limiter('jobdescription','jobdescriptionremain',2,14500);
	limiter('skillexperience','skillexperienceremain',2,14500);
	//$('#companydesc').alphanumeric({allow:"., \"';:<>{}[]+-()"});
});


//job description sample
function showJobDescription(){
	showMessage('jobDescriptionDialog','',0,710,1,1);
	loadDefinitionList($('#definition_group option:selected').val());
}
function loadDefinitionList(group) {
	$.ajax({
			type: "POST", url:"/employers/job_desc_template.php",
			data: "doing=get_definition_list&groupid="+group,
			dataType: "json",
			success: function(data) {
				var def_list = '<select class="span-16" id=definition_list onclick="loadDefinition(this.value)">';
				for (id in data) {
					def_list += '<option value="'+id+'">'+data[id]+'</option>';
				}
				def_list += '</select>';
				$('#definition_list_div').html(def_list);
				loadDefinition($('#definition_list option:selected').val());
			}
		  });
}
function loadDefinition(definitionId){
	$.ajax({
			type: "POST", url:"/employers/job_desc_template.php",
			data: "doing=get_definition&definitionid="+definitionId,
			dataType: "text",
			success: function(data) {
				$('#jobdes_template').val(data);
			}
		  });
}
</script>


<div id="jobDescriptionDialog" class="dialogBox span-18" style="display:none; text-align:normal">
	<div class="dialogContent">
		<div class="dialogHeader">
			<h3>Job Description Library</h3>
		</div>
		<div class="dialogBody">
			<strong>1. Please choose the category of your job</strong> (e.g. Accounting/Finance, IT Software)
			<div id="definition_group_div">
				<select id="definition_group" onchange="loadDefinitionList(this.value)" class="span-16">
				<option value="1">Accounting - Finance</option>
				<option value="2">Admin-Clerk</option>
				<option value="3">Advertising/PR/Media</option>
				<option value="4">Architecture</option>
				<option value="5">Art - Design</option>
				<option value="6">Banking-Investment</option>
				<option value="7">Chemical</option>
				<option value="8">Construction</option>
				<option value="9">Customer Service</option>
				<option value="10">Education</option>
				<option value="11">Engineering</option>
				<option value="12">Entry level</option>
				<option value="13">Environment/Water Service</option>
				<option value="14">Executive management</option>
				<option value="15">Food Beverage</option>
				<option value="16">Furniture</option>
				<option value="17">Human Resource</option>
				<option value="18">Import-Export</option>
				<option value="19">Interpreter-Translator</option>
				<option value="20">IT hardware-network</option>
				<option value="21">IT software</option>
				<option value="22">Legal</option>
				<option value="23">Logistic</option>
				<option value="24">Production - Manufacturing</option>
				<option value="25">Marketing</option>
				<option value="26">Medical</option>
				<option value="27">Media/ Newspaper</option>
				<option value="28">Oil and gas</option>
				<option value="29">Sales</option>
				<option value="30">Sales Engineer</option>
				<option value="31">Security</option>
				<option value="32">Telecommunication</option>
				<option value="33">Tourism-Hotel</option>
				<option value="34">Warehouse</option>
				</select>
			</div>
            <div class="clear"></div><br><br>
			<strong>2. Please choose a job title under this category </strong>(e.g. Chief Accountant, Software Engineer)
			<div id="definition_list_div">
				<select id="definition_list" class="span-16" onchange="loadDefinition(this.value)"></select>
			</div>
			<div class="clear"></div><br><br>
			<strong>3. Your suggested job description</strong>
			<div>
				<div class="scrollBox2 padding" style="height:220px" id="jobdes_template_div"><textarea type="text" id="jobdes_template" style="border:0px;width:100%;height:94%;"></textarea></div>
			</div>
			<!-- End Dialog Content -->                                        
			<div class="formActionBar span-10 padding-top"><button type="button" class="ActionBtn XLBtn" tabindex="16" onclick="if($('#jobdes_template').val()!='') $('#jobdescription').val($('#jobdes_template').val()); closeBlockUI()"><span>Use this sample</span></button><button type="button" class="ActionBtn" tabindex="16" onclick="closeBlockUI()"><span>Cancel</span></button>                                        
			</div> 
			<div class="iconBoxLarge floatRight"><a onclick="closeBlockUI()" class=" sprite_icon deleteIconDis"></a></div><br class="clear">
		</div>
	</div>
</div>	<div style="clear:both"></div>
</div>
    </div>

<script>
$(document).ready(function(){
function addCart(value,text,obj){
 if(obj.is(':checked')){
  k = new Array();
  for(i=0;i<=k1;i++){
   k[i]=i;
  }
  for(i=0; i<=2; i++){
   if(k[i] == null){
    k[i]=i;
    $('#addcity').css('display','');
    jQuery("#cityadd").append("<li  class='clear' id='city1_"+value+"'><span class='span-4plus'>"+text+"</span><span class='absolute light'>[<a href='javascript:void(0)' onClick='removeCart("+value+",\""+text+"\",\"city1_"+value+"\");'>x</a>]</span></li>");
    
    arrcity[i] = value;
    //cart.add('city', value,k[i], 'city');
    i=2; var validcity=true;
    k1++;
   }
  }
  if(validcity ==null){
   $("#city_"+value).attr('checked',false);
   showMessage('dialogBox#growlUI',"<span style='padding:10px 0; display:block'><span class='sprite_icon importantIcon floatLeft'>&nbsp;</span>You can only select maximum <strong>3</strong> locations</span>",3000,350); 
  }
 }
 else{
  
  for(key in arrcity){

   if(value==arrcity[key]){
    
    $('#city1_'+value).remove();
    //cart.remove('city',value,key, 'city', 'update buying order');
    
    arrcity.splice(key,1);
    k.splice(key,1);
    k1--;
   }
  }
  if(arrcity.length<=0)
   $('#addcity').css('display','none');
 }
}
function removeCart(value,text,id_li){
 for(key in arrcity){
  if(value==arrcity[key]){
   $("#city_"+value).attr('checked',false);  
   $('#'+id_li).remove();
   arrcity.splice(key,1);
   k.splice(key,1);
   //cart.remove('city',value,  k, 'city', 'update buying order');
   k1--;
  }
 }
 if(arrcity.length<=0)
  $('#addcity').css('display','none');
}
});
</script>

<script type="text/javascript">


var language = 2;
$(document).ready(function(){
	
		$('#txtBirthday').jdPicker(
		{
			date_format:"dd/mm/YYYY",
			changeInput: function(dateString) {
			    this.input.val(dateString).change();
			    $('#txtBirthday').removeClass("hintText");
			    if(this.input.context.type!="hidden")
			    this.hide();
			    							    
  			}
		}
		);	
});
</script>