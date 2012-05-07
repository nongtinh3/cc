
<div id="body_content"><a id="_top" name="_top"></a>

<style type="text/css">
&lt;!--
.style9 {color: #FFFFFF; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 11px; border-top:1px dashed #FFFFFF; border-bottom:1px dashed #FFFFFF;}
--&gt;
</style>



<div class="container" id="jobpost">
        <div class="pageTitleBox span-24 last">
                <!-- Begin Ads Area -->

                <div class="span-5">
                        <h1 class="pageTitle jobPost"><span>Post Job</span></h1>
                </div>
                <br clear="all">

        </div>
        <!-- End Ad Area -->
        <!-- Begin SideBar -->
        <div class="sideBar column span-5 column  floatLeft" id="sideBar">   
                   
                <ul class="listSteps append-bottom">
                	<li class=" stepComplete"><h3><span class="light">1. </span> <a href="javascript:doProcess(3, 1); void(0);">Job Detail</a> </h3><span class="stepStatus sprite_icon checkIcon"><em class="hide">Completed</em></span> <span class="stepLegend">Provide your job details including company profile, job description, job requirement,...</span></li>	          <li class=" stepComplete"><h3><span class="light">2. </span> <a href="javascript:doProcess(3, 2); void(0);">Billing Information</a> </h3><span class="stepStatus sprite_icon checkIcon"><em class="hide">Completed</em></span> <span class="stepLegend">Provide us accurate billing information for invoice processing.</span></li>	          <li class="stepActive stepComplete"><h3><span class="light">3. </span> Job Review </h3> <span class="stepLegend">Preview and finish the job posting</span></li>	                      </ul>              
        </div>
        
        <div class="content span-19 last floatLeft" id="content">
                
                
    <div id="messagebox" class="messageBox">
                        
</div>
                
                
                
                        <!-- Begin Step 1- Panel -->
                        <div class="panelContainer last">
                                <h2 class="panelHeader clsHeader"><span>Company Information</span></h2>
					  <div class="panelWrapper clsContent">
                                        <div class="panelContent relative">
                                        <fieldset>
                                                <legend>Company  Information Content</legend>
                                                 <dl class="formRow span-18">

                                                        <dt>&nbsp;</dt>
                                                        <dd class="formValue span-12">
                                                                <strong><?=$em_info->em_contact_name;?></strong>
                                                                <br><a target="_blank" href="<?=$em_info->em_com_web;?>"><?=$em_info->em_com_web;?></a><br>                                                                <p><?=@$em_info->em_com_address;?></p>
                                                                <p><?=@$em_info->em_com_profile;?></p>
                												<p>Company Size: <?=$this->EM->get_com_size(@$em_info->em_com_size);?></p>
                												                												<p>Contact Person: <strong><?=$em_info->em_contact_position;?></strong></p>
                												
                                                        </dd>
                                             </dl> 
                                              <span class="absolute  bottomRight padding-right"><a class="  sprite_icon editIcon padding-left" href="<?=site_url('employer/update_profile/');?>">Edit</a></span>   
                                        </fieldset>
                                </div>
                                
                                </div>
                        </div>
                      
                       
                        <div class="panelContainer last">

                                <h2 class="panelHeader clsHeader"><span>Job Information</span></h2>
                                <div class="panelWrapper clsContent">
                                        <div class="panelContent relative">
                                                <fieldset>
                                                        <legend>Job Information Content</legend>
                                                        <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="">Job Title</label>

                                                                </dt>
                                                                <dd class="column formValue"><span class=" highlightText"><strong><?=@$em_post_job->job_title;?></strong></span></dd>
                                                        </dl>
														                                                        
                                                        <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="companyName">Job Description</label>
                                                                </dt>
                                                                <dd class="formValue listtype_on span-12">
                                                                	<?=nl2br(@$em_post_job->job_description);?>                                                                        </dd>
                                                        </dl>
														<dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="companyName">Job Requirement</label>
                                                                </dt>
                                                                <dd class="formValue listtype_on span-12">
                                                            <?=nl2br(@$em_post_job->job_requirement);?>														</dd>
                                                        </dl>
                                                        <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="companyName2">Preferred language<span class="note">(For applications)</span></label>
                                                                </dt>
                                                                <dd class="formValue span-12"><?=$this->EM->get_language(@$em_post_job->job_language);?></dd>                                                              
                                                        </dl>
                                                        <!--<dl class="formRow span-18" >
                                                                <dt>
                                                                        <label for="companyName">Job Code</label>
                                                                </dt>
                                                                <dd class="formValue span-12">none</dd>

                                                        </dl>-->
                                                        <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="companyName">Job Level</label>
                                                                </dt>
                                                                <dd class="formValue span-12"><?=$this->EM->get_level(@$em_post_job->job_level);?></dd>
                                                        </dl>
                                                        <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="companyName">Job Category </label>
                                                                </dt>

                                                                <dd class="formValue span-12"><?=$this->EM->get_category(@$em_post_job->job_category);?><br></dd>
                                                        </dl>
                                                        
                                                        <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="companyName">Work Place </label>

                                                                </dt>
                                                                <dd class="formValue span-12"> <?=$this->EM->get_province(@$em_post_job->job_work);?></dd>
                                                        </dl>
                                                        <dl class="formRow span-18">
                                                                <dt>

                                                                        <label for="companyName">Salary Range</label>
                                                                </dt>
                                                                <dd class="formValue span-12">
<?php if(@$em_post_job->job_salary_min == 0 && @$em_post_job->job_salary_max == 0){?>
<?=$this->EM->get_salary_type(@$em_post_job->job_salary_other);?>
<?php } else { ?>
   <?php echo @$em_post_job->job_salary_min;?> - <?php echo @$em_post_job->job_salary_max. "(USD/Month)";}?>                                                             	
                                                                    
                                                                    
                                                                
                                                                </dd>
                                                        </dl>
                                                        <dl class="formRow span-18">

                                                                <dt>
                                                                        <label for="companyName">Job Type</label>
                                                                </dt>
                                                                <dd class="formValue span-12">Full-Time Permanent</dd>
                                                        </dl>
																												<dl class="formRow span-18">

                                                                <dt>
                                                                        <label for="companyName">Deadline to apply</label>
                                                                </dt>
                                                                <dd class="formValue span-12">11-02-2011</dd>
                                                        </dl>
														
                                                        <span class="absolute  bottomRight padding-right"><a class="  sprite_icon editIcon padding-left" href="<?=site_url('employer/post_job/edit_post/'.@$em_post_job->id);?>">Edit</a></span>
						</fieldset>
                                        </div>
                                </div>
                        </div>                        
                       
                      
                        <div class="panelContainer last">
                                <h2 class="panelHeader clsHeader"><span>Contact Information</span></h2>

                                <div class="panelWrapper clsContent">
                                        <div class="panelContent relative">
                                                <fieldset>
                                                        <legend>Contact Information Content</legend>
                                                        <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="label">Contact Person</label>
                                                                </dt>

                                                                <dd class="formValue span-12"><?=@$em_info->em_contact_name;?><br>
                                                                        <span class="inlineText sprite_icon iconCheck padding-left">Showed in job ads</span> </dd>
                                                        </dl>
                                                        <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="label">Phone Number<span class="note">(hidden to job seekers)</span></label>
                                                                </dt>

                                                                <dd class="formValue span-12"><?=@$em_info->em_phone;?></dd>
                                                        </dl>
                                                        <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="companyName2">Email for applications<span class="note">(hidden to job seeksers)</span></label>
                                                                </dt>
                                                                <dd class="formValue span-12"><?=@$em_info->em_email;?></dd>

                                                        </dl>
                                                        <span class="absolute  bottomRight padding-right"><a class="  sprite_icon editIcon padding-left" href="<?=site_url('employer/update_profile/');?>">Edit</a></span>
                                            </fieldset>
                                        </div>
                                </div>
                        </div>
                       <!-- Premium services -->
                        <div class="panelContainer span-19  append-bottom last">
                                <h2 class="panelHeader clsHeader"><span>Services Summary</span></h2>

                                <div class="panelWrapper clsContent">
                                        <div class="panelContent relative">
                                        	<fieldset>
                                        	<dl class="listSimple span-18">
														<dt class="listHeader">
                                                                <span class="column span-8 highlightText">Service Name</span>
                                                                <span class="column span-5 highlightText floatRight alignRight">Service Price (USD)*</span>
                                                                <br class="clear">                                                                
                                                        </dt> 
																												<dt>
                                                                <span class="column span-8">Job Posting</span>
                                                                <span class="column span-3 floatRight alignRight">
                                                                $79</span>
                                                                <br class="clear">                                                                
                                                        </dt>
																													                                                        <dt class="listHeader">
                                                                <span class="column span-8">Bold &amp; Red/Top Level</span>
                                                                <br class="clear">                                                                
                                                        </dt>
                                                        															<dd>
                                                                <span class="column span-8 prepend-0">
																
																<?=$this->EM->get_category($em_post_job->job_category);?></span>
                                                                <?php if(@$em_service->bold_red!=0) {?>
																<span class="column span-4plus padding-left  sprite_icon checkIcon">Bold &amp; Red <em class="hide">(Not buy)</em></span>
                                                                 <span class="column span-3 floatRight alignRight">$39</span>                                                                <span class="column span-8 prepend-0">&nbsp;</span>
                                                                <?php } else { ?>
                                                                <span class="column span-4plus  padding-left  sprite_icon deleteIconDis light">Bold &amp; Red <em class="hide">(Not buy)</em></span>
                                                                <?php } ?>
                                                                <?php if(@$em_service->top_level!=0) {?>
																<span class="column span-4plus padding-left sprite_icon checkIcon">Top Level<em class="light"> (<?=@$em_service->top_level;?> week)</em></span>
																									<span class="column span-3 floatRight alignRight">$89</span>                 
                                                 <?php } else { ?>  
                                                  <span class="column span-4plus  padding-left  sprite_icon deleteIconDis light">Top Level <em class="hide">(Not buy)</em></span>
                                                    <?php } ?>                                           <br class="clear">
															</dd>

																														<dt>
                                                                <span class="column span-8plus ">Top Job on Homepage</span>
                                                                <span class="nobold">
																                                                                	<!-- Active -->
                                                                                                                                     <?php if(@$em_service->top_job!=0) {?>
                                                                        <span class="column span-4plus padding-left  sprite_icon checkIcon">Active <span class="light">(<?=@$em_service->top_job;?> week)</span></span>
																		<span class="nobold"><span class="column span-3 floatRight alignRight">$179</span></span>
               <?php } else { ?>     
                <span class="column span-4plus  padding-left  sprite_icon deleteIconDis light">Active <em class="hide">(Not buy)</em></span>
               <?php } ?>                                                    
																                                                                </span>
                                                                <br class="clear">                                                                
                                                        </dt>
														                                                        <dd>
                                                        <!--<br class="clear" />
                                                        <em>* The above prices vary depending on the discount rate of each service package</em>-->
                                                        </dd>
                                            </dl>
                                           <span class=" absolute  bottomRight padding-right"><a class="  sprite_icon editIcon padding-left" href="<?=site_url('employer/post_job/edit_post/'.@$em_post_job->id);?>">Edit</a></span>
                                            </fieldset>
                                        </div>

                                </div>
                        </div>
                        <!--Begin Profess - Skill -------->
                        
                        <div class="panelContainer span-19  append-bottom last">

                                <h2 class="panelHeader clsHeader"><span>Professional - Skill</span></h2>
                                <div class="panelWrapper clsContent">
                                        <div class="panelContent relative">
                                        	<fieldset>
                                              
                                                        <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="label">Skill</label>
                                                                </dt>
                                                                <dd class="formValue span-12">
                                                                <?php
																	$skill = $em_post_job->job_skill;
																	$ac = explode(',',$skill);
																	foreach($ac as $row)
																	{
																		
																		echo $this->EM->get_skill($row)."<br>";
																		
																	}
																	
																	/*foreach($this->EM->show_skill(@$em_post_job->job_skill) as $row)
																	{
																		$ac = $row->skill_name;
																		echo $ac;
																	}*/
																?>
                                                                </dd>

                                                        </dl>
																									
                                                       
                                            <span class="absolute  bottomRight padding-right"><a class="  sprite_icon editIcon padding-left" href="javascript:void()">Edit</a></span>
                                            </fieldset>

                                        </div>
                                </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <!--End ---------------------->
                        <!-- Begin Step 3- Panel -->
                        <div class="panelContainer span-19  append-bottom last">

                                <h2 class="panelHeader clsHeader"><span>Billing Information</span></h2>
                                <div class="panelWrapper clsContent">
                                        <div class="panelContent relative">
                                        	<fieldset>
                                              <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="label">Company Name</label>
                                                                </dt>

                                                                <dd class="formValue span-12"><?=@$em_info->em_com_name;?></dd>
                                                        </dl>
                                                        <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="label">Contact Person</label>
                                                                </dt>
                                                                <dd class="formValue span-12"><?=@$em_info->em_contact_name;?></dd>

                                                        </dl>
																												<dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="label">Position</label>
                                                                </dt>
                                                                <dd class="formValue span-12"><?=@$em_info->em_contact_position;?></dd>

                                                        </dl>
                                                                                                                <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="companyName2">Billing Email</label>
                                                                </dt>
                                                                <dd class="formValue span-12"><?=@$em_info->em_email;?></dd>
                                                        </dl>
                                                         <dl class="formRow span-18">

                                                                <dt>
                                                                        <label for="companyName2">Billing Address</label>
                                                                </dt>
                                                                <dd class="formValue span-12"><?=@$em_info->em_com_address;?>, <?=$this->EM->get_city(@$em_info->em_com_province);?>, <?=$this->EM->get_com_country(@$em_info->em_com_country);?></dd>
                                                        </dl>
                                                         <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="companyName2">Phone</label>

                                                                </dt>
                                                                <dd class="formValue span-12"><?=@$em_info->em_phone;?></dd>
                                                        </dl>
                                                         <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="companyName2">Fax</label>
                                                                </dt>
                                                                <dd class="formValue span-12"><?=@$em_info->em_fax;?></dd>

                                                        </dl>
                                                          <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="companyName2">Tax Code</label>
                                                                </dt>
                                                                <dd class="formValue span-12">N/a</dd>
                                                        </dl>
                                                          <dl class="formRow span-18">

                                                                <dt>
                                                                        <label for="companyName2">Payment Method</label>
                                                                </dt>
                                                                <dd class="formValue span-12">Bank transfer</dd>
                                                        </dl>
                                            <span class="absolute  bottomRight padding-right"><a class="  sprite_icon editIcon padding-left" href="<?=site_url('employer/update_profile/');?>">Edit</a></span>
                                            </fieldset>

                                        </div>
                                </div>
                        </div>
                        
		<!-- End Step 4-->
		<input type="hidden" value="" name="jumpto">
          <input type="hidden" value="3" name="postedstep">
          
         	<input type="hidden" value="332397" name="jobid">
         	<input type="hidden" value="<?=@$em_post_job->id;?>" name="post_id">
            <input type="hidden" value="1" name="paymentmethodid">
                        <!-- Form Action Bar-->
                      

        </div>

	<!-- End Content-->
</div>
<script type="text/javascript">
function doProcess(currentstep, jumpto) {
	var f 			= document.ofrm;

	f.jumpto.value	= jumpto;
	f.doing.value	= 'jump';
	f.submit();
}
//toggle content text
$(document).ready(function() {
	 $(".clsHeader").click(function() {
	 	$(this).next(".clsContent").slideToggle('fast');
	 });
	});
</script>
<!-- InstanceEndEditable -->
<!-- end Container -->
<br class="clear">
<script src="/js/jquery/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
function doProcess(currentstep, jumpto) {
	var f 			= document.ofrm;

	f.jumpto.value	= jumpto;
	f.doing.value	= 'jump';
	f.submit();
}
//toggle content text
$(document).ready(function() {
	 $(".clsHeader").click(function() {
	 	$(this).next(".clsContent").slideToggle('fast');
	 });
	});
</script>	<div style="clear:both"></div>
</div>