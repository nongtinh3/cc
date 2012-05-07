<script type="text/javascript" src="<?=base_url();?>public/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>public/js/jquery.jdpicker.js"></script>
<link href="<?=base_url();?>public/css/jdpicker.css" rel="stylesheet" type="text/css" media="all" />

<div id="content">


<div id="jobpost" class="container">
	<div class="pageTitleBox span-24 last">
                <!-- Begin Ads Area -->

                <div class="span-5">
                        <h1 class="pageTitle jobPost"><span>Post Job</span></h1>
                </div>
                <br clear="all">
    </div>
    <!-- Begin SideBar -->
    <div id="sideBar" class="sideBar column span-5 column floatLeft">
		   
                <ul class="listSteps append-bottom">
                	<li class="stepActive stepComplete"><h3><span class="light">1. </span> Job Detail </h3> <span class="stepLegend">Provide your job details including company profile, job description, job requirement,...</span></li>	          <li class="stepDisabled"><h3><span class="light">2. </span> Billing Information </h3> <span class="stepLegend">Provide us accurate billing information for invoice processing.</span></li>	          <li class="stepDisabled"><h3><span class="light">3. </span> Job Review </h3> <span class="stepLegend">Preview and finish the job posting</span></li>	                      </ul>	</div>
	<!-- Emd SideBar -->

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
                
                <form name="ofrm" id="frmPostJob" action="<?=site_url('employer/post_job');?>" class="jqtransform " method="POST">

                        <!-- Begin Step 1- Panel -->
                        <div class="panelContainer last">
                                <h2 class="panelHeader"><span>Company Information</span></h2>
								<div class="panelWrapper">
									<div class="panelContent">
                                        <fieldset>
                                                <legend>Company  Information Content</legend>
                                                <dl class="formRow span-18" id="errorcompanydesc">
                                                        <dt>
                                                                <label for="">Company Name</label>
                                                        </dt>
                                                        <dd class="formValue span-13">                                                   
															<input type="text" maxlength="100" class="text" name="companydesc" id="companydesc" value="<?=@$em_info->em_com_name;?>" tabindex="1">
															<span class="errorMessage" id="err_companydesc_input" style="display:none"><br><strong class="sprite_icon warningIcon">Please do not enter email address or telephone number</strong></span>
															<span class="errorMessage" id="err_companydesc" style="display:none"><strong class="sprite_icon warningIcon">Please enter your company name</strong></span></dd>
                                                </dl>
                                                <dl class="formRow span-18">
                                                        <dt>
                                                            <label for="companydesc">Size<span class="note">(Optional)</span></label>
                                                        </dt>
                                                        <dd class="formValue span-13">
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
                                                                <span class="errorMessage" id="err_companysizeid" style="display:none"><strong class="sprite_icon warningIcon">Please choose company size</strong></span></dd>
                                                </dl>
                                                <dl class="formRow span-18">
                                                        <dt>
                                                                <label for="companydesc">Company Website<span class="note">(Optional)</span></label>
                                                        </dt>
                                                        <dd class="formValue span-13">
                                                                                                               
                                                                <input type="text" class="text" name="companywebsite" id="companywebsite" value="<?=@$em_info->em_com_web?>" tabindex="3">
                                                                <span id="err_companywebsite" class="errorMessage" style="display:none"><strong class="sprite_icon warningIcon">Please enter correct website format</strong></span></dd>
                                                </dl>
                                                <dl class="formRow span-18">
                                                        <dt>
                                                                <label for="companydesc">Company Address<span class="note">(Optional)</span></label>
                                                        </dt>
                                                        <dd class=" formValue span-13">
                                                                <input type="text" class="text" name="address" id="address" value="<?=@$em_info->em_com_address;?>" tabindex="4">
                                                        </dd>
                                                </dl>
                                                <dl class="formRow span-18" id="errorcompanyprofile">
                                                        <dt>
                                                                <label for="companydesc">Company Profile</label>
                                                        </dt>
                                                        <dd class="formValue span-13">
                                                                <textarea type="text" class="bottom" onkeyup="limiter(this.id,'companyprofileremain',2,10000)" name="companyprofile" id="companyprofile" rows="8" tabindex="5"><?=@$em_info->em_com_profile;?></textarea>
                                                                <br>
                                                                <span class="note" id="companyprofileremain">You have 9660 characters remaining</span> <span class="errorMessage" id="err_companyprofile" style="display:none"><strong class="sprite_icon warningIcon">Please enter company profile</strong></span>
																<span class="errorMessage" id="err_email_companyprofile" style="display:none"><strong class="sprite_icon warningIcon">Please do not enter email address or telephone number in this field.</strong></span>
														</dd>
                                                </dl>
												<!--  dunglt moi them *********************** -->

												
											<!--  dunglt end moi them *********************** -->
                                        </fieldset>
                                </div>
                                
                                </div>
                        </div>
                        <!-- Begin Step 2- Panel -->
                        <div class="panelContainer last">
                                <h2 class="panelHeader"><span>Job Information</span></h2>
                                <div class="panelWrapper">
                                        <div class="panelContent">
                                                <fieldset>
                                                        <legend>Job Information Content</legend>
                                                        <dl class="formRow span-18" id="errorjobtitle">
                                                                <dt>
                                                                        <label for="">Job Title</label>
                                                                </dt>
                                                                <dd class="column formValue">
                                                                        <input type="text" title="Please enter job title" class="text required" maxlength="100" name="txt_job_title" id="jobtitle" value="" tabindex="7">
                                                                         <span class="errorMessage" id="err_salaryrangeid" ><strong class="sprite_icon warningIcon"><?=form_error('txt_job_title');?></strong></span>																		
                                                                       </dd>
                                                        </dl>
                                                        <dl class="formRow span-18" id="errorjobcode">
                                                                <dt>
                                                                        <label for="companydesc">Job Code<span class="note">(Optional)</span></label>
                                                                </dt>
                                                                <dd class="formValue span-13">
                                                                        <input type="text" class="text span-3" name="txt_job_code" id="" value="<?=set_value('txt_job_code');?>" tabindex="8">
                                                                        <span class="errorMessage" style="display:none"><strong class="sprite_icon warningIcon">Error message goes here</strong></span></dd>
                                                        </dl>
                                                        <dl class="formRow span-18" id="errorjoblevelid">
                                                                <dt>
                                                                        <label for="companydesc">Job Level</label>
                                                                </dt>
                                                                <dd class="formValue span-13">               
               <select title="Please select job level" name="joblevelid" id="joblevelid" class="select span-7 required" tabindex="9">
               <option value="<?=set_value('joblevelid');?>" selected="">Please select</option>
               <?php foreach($em_level as $row) { ?>
                <option value="<?=$row->id;?>"><?=$row->em_level;?></option>
                <?php } ?>
            </select>
                                                                       <span class="errorMessage" id="err_joblevelid" ><strong class="sprite_icon warningIcon"><?=form_error('joblevelid');?></strong></span></dd>
                                                        </dl>
                                                        <dl class="formRow span-18" id="errortypeworkingid">
                                                                <dt>
                                                                        <label for="companydesc">Job Type</label>
                                                                </dt>
                                                                <dd class="formValue span-13">
                                                                        <select title="Please select job type" name="typeworkingid" id="typeworkingid" class="select span-7 required" tabindex="10">
                  <option selected="" value="<?=set_value('typeworkingid');?>">Please select</option>
                 <?php foreach($em_type as $row){?>
                  <option value="<?=$row->id;?>"><?=$row->em_job_name;?></option>
                  <?php } ?> </select>
                                                                        <span class="errorMessage" id="err_typeworkingid" style="display:none"><strong class="sprite_icon warningIcon">Please select job type</strong></span></dd>
                                                        </dl>
                                                        <dl class="formRow span-18" id="dl_salaryrangeid">
                                                                <dt>
                                                                        <label for="companydesc">Salary Range</label>
                                                                </dt>
                                                                <dd class="formValue span-13">
                                                                        <select name="salaryrangeid" id="salaryrangeid" class="select span-7" tabindex="11" onchange="UpdateFormStatus();" onblur="UpdateFormStatus(); ">
                                                                                <option value="" selected="">Specified</option>
                                                                                <option value="7">Competitive</option>
																				<option value="6">Negotiable</option>
                                                                        </select>
                                                                        <span id="salaryrange">
	                                                                        <span class="errorMessage" id="err_salaryrangeid" style="display:none"><strong class="sprite_icon warningIcon">Please enter specified salary</strong></span>
	                                                                        <br><span class="inlineText span-1minus" style="clear: both">Min </span><input type="text" class="text span-2 " name="salarymin" id="salarymin" value="" tabindex="12">
	                                                                       <span class=" inlineText span-1minus padding-left">Max </span><input type="text" class="text span-2" name="salarymax" id="salarymax" value="" tabindex="13">
	                                                                       <span class="inlineText span-3">&nbsp;(USD/Month)</span>
                                                                       </span>
                                                                </dd>
                                                        </dl>
                                                        <dl class="formRow span-18" id="errorcity">
                                                                <dt>
                                                                        <label for="companydesc">Work Place <span class="note">(Maximum 3 locations)</span></label>
                                                                </dt>
                                                                <dd class="formValue span-12 relative">   
                                                                   
                                                                                                                                            
                                                                    <!-- dunglt modify -->
                                                                    <div class="scrollBox  nobold select span-7" style="height:115px;">
                                                                   <ul>
                                                                   <?php foreach($em_country as $row) { ?>
                                                                   <li>
<input type="checkbox" onclick="addCart('<?=$row->id;?>','<?=$row->em_city;?>',$('#city_<?=$row->id;?>'))" id="city_<?=$row->id;?>" value="<?=$row->id;?>" tabindex="14" name="cityid[]"><label id="textcity_<?=$row->id;?>" onclick="if($('#city_<?=$row->id;?>').is(':checked')){$('#city_<?=$row->id;?>').attr('checked',false)}else{$('#city_<?=$row->id;?>').attr('checked',true)} addCart('<?=$row->id;?>','<?=$row->em_city;?>',$('#city_<?=$row->id;?>'))" class="pointer"><?=$row->em_city;?></label></li>
                                                                     
 <?php  } ?>
                                                                                             																	
 </ul>
                                                                    </div> 
                                                                     
                                                                    <div id="addcity" class="floatBox span-5 absolute" style="left:280px ;display:none"><span class="floatBoxArrow">&nbsp;</span><ul id="cityadd" class="relative"></ul></div>
                                                                    
                                                                    <!-- dunglt end modify -->                                                                    
                                                                        <span class="errorMessage" id="err_cityid" style="display:none"><strong class="sprite_icon warningIcon">Please choose at least one location</strong></span></dd>
                                                        </dl>
                                                        <dl class="formRow span-18" id="errorindustry">
                                                                <dt>
                                                                        <label for="companydesc">Job Category <span class="note">(Maximum 3 categories)</span></label>
                                                                </dt>
                                                                <dd class="formValue span-12 relative">
                                                                                                                                                       <!-- dunglt modify -->
                                                                    <div class="scrollBox  nobold select span-7" style="height:115px;">
                                                                    <ul>
                                                                     
<?php foreach($em_category as $row) { ?>
<li>                                                                                               																	<input type="checkbox" onclick="addCartIndustry('<?=$row->id;?>','<?=$row->em_cat_name;?>',$('#industry_<?=$row->id;?>'))"                                                                                                                    id="industry_<?=$row->id;?>" value="<?=$row->id;?>" tabindex="15" name="industryid[]">                                                                                                                  <label id="textindustry_<?=$row->id;?>" 
                                                                                                                    onclick="if($('#industry_<?=$row->id;?>').is(':checked')){                                                                                                                    $('#industry_<?=$row->id;?>').attr('checked',false)
                                                                                                                    }else{$('#industry_<?=$row->id;?>').attr('checked',true)} 
                                                                                                                    addCartIndustry('<?=$row->id;?>','<?=$row->em_cat_name;?>',$('#industry_<?=$row->id;?>'))" 
                                                                                                                    class="pointer"><?=$row->em_cat_name;?></label>
                                                                                                                    </li>
 <?php  } ?>
 </ul>
      </div>  
                                                                    <div id="addindustry" class=" floatBox span-5 absolute" style="left:280px ;display:none"><span class="floatBoxArrow">&nbsp;</span><ul id="industryadd" class="relative"></ul></div>
                                                                    <!-- dunglt end modify -->
                                                                        <span class="errorMessage" id="err_industryid" style="display:none"><strong class="sprite_icon warningIcon">Please choose at least one category</strong></span></dd>
                                                        </dl>
                                                        <dl class="formRow span-18" id="errorjobdescription">
                                                                <dt>
                                                                        <label for="companydesc">Job Description</label>
                                                                </dt>
																
                                                                <dd class="formValue span-12plus">
																	    <textarea type="text" title="Please enter job description" class="_browser required" cols="75" onkeyup="limiter(this.id,'jobdescriptionremain',2,14500)" name="jobdescription" id="jobdescription" rows="10" tabindex="16"></textarea>
																		<span class="column floatRight"><a onclick="showJobDescription()" href="javascript:void(0)">View job description samples</a></span><br>
                                                                        <span class="note" id="jobdescriptionremain">You have 14500 characters remaining</span><span class="errorMessage" id="err_jobdescription" style="display:none"><strong class="sprite_icon warningIcon">Please enter job description</strong>
                                                                        </span>
																		<span class="errorMessage" id="err_email_jobdescription" style="display:none"><strong class="sprite_icon warningIcon">Please do not enter email address or telephone number in this field.</strong></span>
																</dd>
                                                        </dl>
														<dl class="formRow span-18" id="errorjobrequirement">
                                                                <dt>
                                                                        <label for="companydesc">Job Requirement</label>
                                                                </dt>
                                                                <dd class="formValue listtype_on span-13">
                                                                        <textarea title="Please enter job requirement" type="text" class="bottom required" onkeyup="limiter(this.id,'skillexperienceremain',2,14500)" name="skillexperience" id="skillexperience" rows="10" tabindex="17"></textarea>
                                                                         <span class="note" id="skillexperienceremain">You have 14500 characters remaining</span><span class="errorMessage" id="err_skillexperience" style="display:none"><strong class="sprite_icon warningIcon">Please enter job requirement</strong></span>
																		 <span class="errorMessage" id="err_email_jobrequirement" style="display:none"><strong class="sprite_icon warningIcon">Please do not enter email address or telephone number in this field.</strong></span>
																</dd>
                                                        </dl>
														<dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="label">Deadline to apply<span class="note">(optional)</span></label></dt>
                                                                <dd class="formValue span-13">
                                                                    <input type="text"  onfocus="formatText(this,'mm/dd/yyyy');" onblur="setDefaultValue(this,'mm/dd/yyyy')" value="mm/dd/yyyy" class="text span-5plus hintText" name="txtBirthday" id="txtBirthday"><span id="date_icon" class="sprite_icon dateIcon span-2"></span>
                                                        </dd></dl>
														
														
                                                        <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="companydesc2">Preferred language for applications</label>
                                                                </dt>
                                                                <!-- dunglt -->
                                                                <dd class="formValue span-13">
                                                                <select name="languageselectedid" class="select" tabindex="18">
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
                                <h2 class="panelHeader"><span>Contact Information</span></h2>
                                <div class="panelWrapper">
                                        <div class="panelContent">
                                                <fieldset>
                                                        <legend>Contact Information Content</legend>
                                                        <dl class="formRow span-18" id="errorcontact">
                                                                <dt>
                                                                        <label for="label">Contact Person</label>
                                                                </dt>
                                                                <dd class="formValue span-13">
                                                                        <input type="text" class="text" maxlength="30" name="contactname" id="contactname" value="<?=@$em_info->em_contact_position;?>" tabindex="19">
                                                                        <br>
                                                                        <span>
                                                                                <input type="checkbox" name="isshowcontact" value="1" checked="checked" tabindex="20">
																				<span class="inlineText">Showed in job ads</span>
																				<span class="errorMessage" id="err_contactname_input" style="display:none"><br><strong class="sprite_icon warningIcon">Please do not enter email address or telephone number</strong></span>
                                                                                <span class="errorMessage" id="err_contactname" style="display:none"><br><strong class="sprite_icon warningIcon">Please enter contact name</strong></span></span></dd>
                                                        </dl>
											<dl class="formRow span-18" id="errortelephone">
                                                                <dt>
                                                                        <label for="label">Phone Number</label>
                                                                </dt>
                                                                <dd class="formValue span-13">
                                                                        <input type="text" class="text span-5" name="telephone" id="telephone" value="<?=@$em_info->em_phone;?>" tabindex="21">
																		<span class="note">&nbsp;(hidden to job seekers)</span>
                                                                        <span class="errorMessage" id="err_telephone" style="display:none"><strong class="sprite_icon warningIcon">Please enter phone number</strong></span></dd>
                                                        </dl>
<dl class="formRow span-18" id="erroremailaddress">
                                                                <dt>
                                                                        <label for="companydesc2">Email for applications</label>
                                                                </dt>
                                                                <dd class="formValue span-13">
                                                                        <input type="text" class="text span-5" name="emailaddress" id="emailaddress" value="nongtinh3@gmail.com" tabindex="22">
																		<span class="note">&nbsp;(hidden to job seekers)</span>
                                                                        <span class="errorMessage" id="err_emailaddress" style="display:none"><strong class="sprite_icon warningIcon">Please enter email address</strong></span></dd>
                                                        </dl>
</fieldset>
                                        </div>
                                        <div>
                                        <input type="hidden" value="" name="postedstep">
						                <input type="hidden" value="" name="order">
						                <input type="hidden" value="" name="jumpto">
						                <input type="hidden" value="" name="doing">               
						                <input type="hidden" value=" 0" name="isHaveLogo">
                                        </div>
                                </div>
                        </div>
		<!-- End Step 3-->
                        <!-- Form Action Bar-->
                        <div class="formAction">
                                        <fieldset>
											<button type="submit" name="btnJob" class="actionBtn" tabindex="23"><span>Continue</span></button>
											<button type="button" class="actionBtn LBtn Sec" tabindex="24"><span>Save for later</span></button>
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
var ofrm = document.ofrm;
$(document).ready(function(){
		$('#deadlinedate').jdPicker(
			{
				date_format:"mm/dd/YYYY"
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

  if ( $("#salaryrangeid").val() == '' ) {
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
      <script type="text/javascript">
<!--
var language = 2;
$(document).ready(function(){
	
		$('#txtBirthday').jdPicker(
		{
			date_format:"mm/dd/YYYY",
			changeInput: function(dateString) {
			    this.input.val(dateString).change();
			    $('#txtBirthday').removeClass("hintText");
			    if(this.input.context.type!="hidden")
			    this.hide();
			    							    
  			}
		}
		);	
});
//-->
</script>
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
