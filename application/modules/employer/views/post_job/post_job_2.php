<script>
	$().ready(function(){
		$('#add1').click(function(){
			return !$('#select1 option:selected').clone(true).appendTo('#selectAll');	
		});
		$('#add2').click(function(){
			return !$('#select2 option:selected').clone(true).appendTo('#selectAll2');	
		});
		$('#remove1').click(function(){
			return $('#selectAll option:selected').remove();	
		});
		$('#remove2').click(function(){
			return $('#selectAll2 option:selected').remove();	
		});
		$('form').submit(function() {
		 $('#selectAll option').each(function(i) {
		  $(this).attr("selected", "selected");
		 });
		 
		  $('#selectAll2 option').each(function(i) {
		  $(this).attr("selected", "selected");
		 });
		});
		
		
	});
</script>
<style>
	.bt{
		text-decoration:none;
		background:#000;		
		display:block;
		margin-bottom:5px;
		text-align:center;
		line-height:25px;	
		border: 1px solid #aaa;		
		color: #123456;
		margin: 2px;
		clear:both;	
	}
</style>

<div id="body_content"><a id="_top" name="_top"></a>
<div class="container showgrid" id="jobpost">
	<div class="pageTitleBox span-24 last">
                <!-- Begin Ads Area -->

                <div class="span-5">
                        <h1 style="font-size:24px; font-weight:bold"><span><?=$this->lang->line('Post Job')?></span></h1>
                </div>
                <br clear="all">
    </div>
    <!-- Begin SideBar -->
     <div id="sideBar" class="sideBar column span-5 column floatLeft">
		   
                <ul class="listSteps append-bottom">
                	<li class="stepActive stepComplete"><h3><span class="light">1. </span> <?=$this->lang->line('Job Detail')?> </h3> <span class="stepLegend"><?=$this->lang->line('Provide your job details including company profile, job description, job requirement')?>,...</span></li>	          <li class="stepDisabled"><h3><span class="light">2. </span> <?=$this->lang->line('Billing Information')?> </h3> <span class="stepLegend"><?=$this->lang->line('Provide us accurate billing information for invoice processing')?>.</span></li>	          <li class="stepDisabled"><h3><span class="light">3. </span> <?=$this->lang->line('Job Review')?> </h3> <span class="stepLegend"><?=$this->lang->line('Preview and finish the job posting')?></span></li>	                      </ul>	</div>
        <div class="content span-19 last" id="content">                 
                <div style="display:none" class="messageBox" id="err_top">
                        <div class="error"><strong class="sprite_icon errorIcon">Sorry, there are errors with the information you provided. Please scroll down to check for errors.</strong></div>                                          
                </div>                 
                <form class="jqtransform " method="post" action="<?=site_url('employer/post_job/post_job_2');?>" name="ofrm" id="ofrm">
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
                                                                                <span><?=$this->lang->line('Highlight your job on search result page')?> </span>
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
                                                                        <td class="alignRight"><span style="font-weight: 400; font-size:100%" id="lb_category_id_0"><?=$this->EM->get_category(@$em_post_job->job_category);?>
                                                                      
                                                                        </span></td>
                                                                        	
											                                
                                                                        <td class="alignRight">
                                                                                <select   name="txt_bold_red">
											                  <!--<option value="remove">No extra visibility for my advertisment</option>-->
                                                    
	<option value="0" <?php if(@$em_post_job->bold_red == 0){ echo "selected"; } ?>>Not User</option>	
    <option value="1" <?php if(@$em_post_job->bold_red == 1){ echo "selected"; } ?>>User this service</option> 
    </select>
                                                        </td>
                                                                        <td class="alignRight">
                                                                                <select class="select span-3plus last" tabindex="3"  name="txt_top_level">
<option value="0" <?php if(@$em_post_job->top_level == 0){ echo "selected"; } ?>>Not User</option>
<?php
	foreach($top as $rows)
	{
		if($rows->id == @$em_post_job->top_job)
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
		if($row->id == @$em_post_job->top_job)
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
                                
  	                        <!-- Begin Billing Information Panel -->
						
                  <div class="panelContainer last"><a id="_bi" name="_bi"></a>
                                <h2 class="panelHeader clsHeader"><span><?=$this->lang->line('Billing Information')?></span></h2>
                                <div class="panelWrapper clsContent">
									<div class="panelContent">
                                        <fieldset>
                                        		<input type="checkbox" style="display:none" checked="" value="1" class="checkm" name="isdefault">
                                                <legend>Company  Information Content</legend>
                                                
                                                <dl id="dl_companyname" class="formRow span-18">
                                                        <dt>
                                                                <label for=""><?=$this->lang->line('Company Name')?></label>
                                                        </dt>
                                                        <dd class="formValue span-12">
                                                                <input type="text" tabindex="4" value="<?=$em_info->em_com_name;?>" id="companyname" name="companyname" class="text">
                                                                <span style="display:none" id="err_companyname" class="errorMessage"><strong class="sprite_icon warningIcon">Please enter company name.</strong></span></dd>
                                                </dl>
                                                 <dl id="dl_address" class="formRow span-18">

                                                        <dt>
                                                                <label for="companyName"><?=$this->lang->line('Billing Address')?></label>
                                                        </dt>
                                                        <dd class=" formValue">
                                                                <input type="text" tabindex="5" value="<?=$em_info->em_com_address;?>" id="address" name="address" class="text">
                                                                <span style="display:none" id="err_address" class="errorMessage">Please enter address.</span> </dd>
                                                </dl>

                                                 <dl class="formRow span-18">
                                                        <dt>
                                                                <label for="companyName"><?=$this->lang->line('District')?><span class="note">(<?=$this->lang->line('Optional')?>)</span></label>
                                                        </dt>
                                                        <dd class=" formValue">
                                                                <input type="text" tabindex="6" value="<?=$em_info->em_com_district;?>" name="district" class="text span-6">
                                                                </dd>

                                                </dl>
                                                
                                                <dl id="dl_countryid" class="formRow span-18">
                                                        <dt>
                                                                <label for="companyName"><?=$this->lang->line('Country')?></label>
                                                        </dt>
                                                        <dd class="formValue span-12">
                                                        		<select tabindex="7" onchange="changeCity()" class="select span-6" name="countryid">
                                                                <?php  foreach($em_city_info as $row) { 
																		if($row->id == @$em_info->em_com_country)
																		{
																?>
                                                                <option value="<?=$row->id;?>" selected="selected"><?=$row->em_city;?></option>
                                                                <?php			
																		}
																		else
																		{
																?>
                                                                 <option value="<?=$row->id;?>"><?=@$row->em_city;?></option>
                                                                <?php			
																		}
																?>
                                                                		
                                                                <?php } ?>
									                             



									                            </select>
                                                                <span id="err_countryid" style="display:none" class="errorMessage"><strong class="sprite_icon warningIcon">Please select country.</strong></span></dd>
                                                </dl>
                                                
                                                <dl id="dl_cityid" class="formRow span-18">
                                                        <dt>
                                                                <label for="companyName"><?=$this->lang->line('Province')?></label>
                                                        </dt>
                                                        <dd class="formValue span-12">
                                                                <select tabindex="8" class="select span-6" id="cityid" name="cityid">
																	<option selected="" value=""><?=$this->lang->line('Please select')?> ...</option>								
																	 <?php  foreach($em_province as $row) { 
																		if($row->id == @$em_info->em_com_province)
																		{
																?>
                                                                <option value="<?=$row->id;?>" selected="selected"><?=$row->em_vince;?></option>
                                                                <?php			
																		}
																		else
																		{
																?>
                                                                 <option value="<?=$row->id;?>"><?=@$row->em_vince;?></option>
                                                                <?php			
																		}
																?>
                                                                		
                                                                <?php } ?>

																</select>
                                                                <span style="display:none" id="err_cityid" class="errorMessage"><strong class="sprite_icon warningIcon">Please select province.</strong></span></dd>
                                                </dl>                                                                                          
                                               
                                                 <dl id="dl_contactname" class="formRow span-18">
                                                                <dt>
                                                                        <label for="label"><?=$this->lang->line('Billing Contact Person')?></label>

                                                                </dt>
                                                                <dd class="formValue span-12">
                                                                        <input type="text" tabindex="9" value="<?=@$em_info->em_contact_name;?>" id="contactname" name="contactname" class="text span-6">
                                                                        <span id="err_contactname" style="display:none" class="errorMessage"><strong class="sprite_icon warningIcon">Please enter contact name.</strong></span>
                                                         </dd>
                                                </dl>
                                               <dl class="formRow span-18">
                                                       <dt>

                                                                <label for="label"><?=$this->lang->line('Position')?><span class="note">(<?=$this->lang->line('Optional')?>)</span></label>
                                                        </dt>
                                                        <dd class="formValue span-12">
                                                                <input type="text" tabindex="10" value="<?=@$em_info->em_contact_position;?>" id="contactpersonposition" name="contactpersonposition" class="text span-6">
                                                        </dd>
                                                </dl>
                                                <dl id="dl_contactemail" class="formRow span-18">

                                                                <dt>
                                                                        <label for="companyName2"><?=$this->lang->line('Billing Email')?></label>
                                                                </dt>
                                                                <dd class="formValue span-12">
                                                                        <input type="text" tabindex="11" value="<?=@$em_info->em_email;?>" id="contactemail" name="contactemail" class="text span-6">
                                                                        <span style="display:none" id="err_contactemail" class="errorMessage"><strong class="sprite_icon warningIcon">Please enter valid email address.</strong></span>
                                                                </dd>
                                                </dl>
                                                                       
												<dl id="dl_companyphone" class="formRow span-18">

                                                                <dt>
                                                                        <label for="label"><?=$this->lang->line('Phone Number')?></label>
                                                                </dt>
                                                                <dd class="formValue span-12">
                                                                        <input type="text" tabindex="12" value="<?=$em_info->em_phone;?>" id="companyphone" name="companyphone" class="text span-6">
                                                                        <span style="display:none" id="err_companyphone" class="errorMessage"><strong class="sprite_icon warningIcon">Please enter valid telephone number.</strong></span>
                                                                </dd>
                                                </dl>
                                                <dl id="dl_companyfax" class="formRow span-18">

                                                                <dt>
                                                                        <label for="companyName2"><?=$this->lang->line('Fax')?><span class="note">(<?=$this->lang->line('Optional')?>)</span></label>
                                                                </dt>
                                                                <dd class="formValue span-12">
                                                                        <input type="text" tabindex="13" value="<?=$em_info->em_fax;?>" id="fax" name="companyfax" class="text span-6">
                                                                        <span style="display:none" id="err_companyfax" class="errorMessage"><strong class="sprite_icon warningIcon">Please enter valid fax number.</strong></span>
                                                                </dd>
                                                </dl>
                                                <dl class="formRow span-18">
                                                       <dt>

                                                                <label for="label"><?=$this->lang->line('Tax Code')?><span class="note">(<?=$this->lang->line('Optional')?>)</span></label>
                                                        </dt>
                                                        <dd class="formValue span-12">
                                                                <input type="text" tabindex="14" value="" id="taxcode" name="taxcode" class="text span-6">
                                                        </dd>
                                                </dl>
                                                <dl class="formRow span-18">
                                                        <dt>
                                                                <label for="companyName"><?=$this->lang->line('Payment Method')?></label>
                                                        </dt>
                                                        <dd class="formValue span-12">
																<select tabindex="15" class="select span-6" name="paymentmethodid">
																	<option selected="" value="1">Bank transfer</option>
																</select>
														</dd>                                                                
                                                </dl>
                                                <dl class="formRow span-18">
                                                       <dt><label for="label">&nbsp;</label></dt>
                                                           <dd class="formValue span-12"><span class="inlineText">
                                                           <input type="checkbox" checked="true" value="1" tabindex="16" name="isconfirm"><?=$this->lang->line("I'd like to receive Notification Emails related to this job posting.");?></span>
                                                           </dd>
                                                </dl>
                                        </fieldset>
                                </div>
							</div>
                        </div>
                        <!-- Begin Step 2- Panel -->
                        <input type="hidden" name="postedstep" value="1">
		                <input type="hidden" name="id" value="<?=@$em_post_job->id;?>">
                        
                     
                       
		              
		                <input type="hidden" value="304068" name="currentBillingContactId">
                        <!-- Form Action Bar-->
                        <div class="formAction">
                                        <fieldset>
                                        									           <input type="submit" name="ok" value="<?=$this->lang->line('Continue')?>" class="btn_em">
								            								            
								                  
											<button onclick="window.location='<?=site_url('employer/post_job');?>'" tabindex="19" class="actionBtn Sec" type="button"><span><?=$this->lang->line('Go back')?></span></button>                                                

                                        </fieldset>
                       </div>
       
                      
</form>

        </div>

	<!-- End Content-->
	
</div>
<style media="all" type="text/css">@import "http://www.vietnamworks.com/js/jquery/thickbox.css";</style>
<script src="/js/jquery/jquery.min.js" type="text/javascript"></script>
<script src="/js/price_compressed.js" language="javascript"></script>
<script src="/js/jquery/thickbox-compressed.js" language="javascript"></script>
<script src="/js/string.js" type="text/javascript"></script>
<script type="text/javascript">
services.addModifyingPrice('city', 1,  1,  0.0, '=', 1);
services.addModifyingPrice('city', 2,  2,  0.0, '=', 1);
services.addModifyingPrice('city', 3,  -1,  0.0, '=', 1);
services.addModifyingPrice('industry', 1,  3,  0.0, '=', 1);
services.addModifyingPrice('industry', 4,  -1,  0.0, '=', 1);

services.addBasePrice('extravisibility', '10',  '', 15.0);

services.addBasePrice('extravisibility', '20',  '', 39.0);

services.addBasePrice('extrapriority', '30',  '', 89.0);

services.addBasePrice('extrapriority', '91',  '', 178.0);

services.addBasePrice('extrapriority', '92',  '', 267.0);

services.addBasePrice('extrapriority', '93',  '', 356.0);

services.addBasePrice('topjob', '1',  '', 105.0);

services.addBasePrice('topjob', '3',  '', 179.0);

services.addBasePrice('topjob', '4',  '', 358.0);

services.addBasePrice('topjob', '5',  '', 537.0);

services.addBasePrice('topjob', '6',  '', 716.0);

services.addBasePrice('logo', '2',  '', 123.0);

services.addBasePrice('jobposting', '1',  '', 79.0);

services.addBasePrice('jobtemplate', '1',  '', 163.0);
//toggle content text
$(document).ready(function() {
	 $(".clsHeader").click(function() {
	 	$(this).next(".clsContent").slideToggle('fast');
	 });
	});
</script>
<script type="text/javascript">
var ofrm = document.ofrm;


function UpdateFormStatus() {
  // calculate the location price
  //ofrm.joblocationfee.value = cart.calServicePrice('city');
  
  // calcualte the industry related price
  //ofrm.jobcategoryfee.value = cart.calGroupPrice('indus_[0-9]+');

  UpdateIndustryElementsStatus(); 
}

function UpdateIndustryElementsStatus() {

//alert('asdfasf 2');

  //num_group = $(ofrm.industryid).length;
  //num_indus = cart.countItemsPerService('industry');
    

  // update extrapriority and visibility status for each group
  //has been removed
}


function doValidate() {
  	isError = false;
  	$('#dl_companyname').removeClass('errorLine');
	if (!checkRequired(ofrm.companyname)){ 		isError = true; $('#dl_companyname').addClass('errorLine');}
	$('#dl_contactname').removeClass('errorLine');
	if (!checkRequired(ofrm.contactname))	{	isError = true; $('#dl_contactname').addClass('errorLine');}
	
	$('#dl_contactemail').removeClass('errorLine');
	if (!checkRequired(ofrm.contactemail)) 	{isError = true; $('#dl_contactemail').addClass('errorLine');}
	else if(!checkEmail(ofrm.contactemail)) 	{isError = true; $('#dl_contactemail').addClass('errorLine');}

	$('#dl_address').removeClass('errorLine');
	if (!checkRequired(ofrm.address))			{isError = true; $('#dl_address').addClass('errorLine');}
	
	$('#dl_countryid').removeClass('errorLine');
	if (!checkRequired(ofrm.countryid))		{isError = true; $('#dl_countryid').addClass('errorLine');}
	
	$('#dl_cityid').removeClass('errorLine');
	if (!checkRequired(ofrm.cityid))			{isError = true; $('#dl_cityid').addClass('errorLine');}
	
	$('#dl_companyphone').removeClass('errorLine');	
	if (!checkRequired(ofrm.companyphone)) 	{isError = true; $('#dl_companyphone').addClass('errorLine');}
	else if(!checkPhone(ofrm.companyphone)) 	{isError = true;$('#dl_companyphone').addClass('errorLine');}
	
	
	if (ofrm.companyfax.value != '') {
		$('#dl_companyfax').removeClass('errorLine');
		if (!checkPhone(ofrm.companyfax)) {isError = true; $('#dl_companyfax').addClass('errorLine');}
	}
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

function doAdd(osource, odes, imax){
  AddTo_Cart(osource, odes);
}


function RemoveCart_Item(_67){
  for(k=_67.length-1;k&gt;-1;k--){
    if(_67.options[k].selected){
      cart.remove('city', _67.options[k].value,  k, 'city', 'update buying order');
      _67.options[k]=null;
    }
  }
}

function AddTo_Cart(_64,_65){
  for(k=0;k&lt;_64.length;k++){
    IsExisted=false;
    if(_64.options[k].selected==true){
      stext=_64.options[k].text;
      svalue=_64.options[k].value;
      for(i=0;i&lt;_65.length;i++){
        if(svalue==_65.options[i].value){
          IsExisted=true;
          break;
        }
      }
      j=_65.length;
      if(IsExisted==false &amp;&amp; j&lt;3){
        var _66=new Option(stext,svalue);
        _65.options[j]=_66;
        cart.add('city', svalue, j, 'city');
//        alert('|'+j);
      }
    }
  }
}

//change top_job service
//update to cart object
startTopJobValue = $('#topjob option:selected').val();

function doProcess(currentstep, jumpto) {
  var isValid   = true;
  if  (currentstep != jumpto) isValid = doValidate();
  
  if ( isValid ) {
    //new.Price project
    if ( (cart.calTotalPrice()&gt;cart.calServicePrice('jobposting')) ) {
      //cart.add('saving', 1, 1, 'other');
    } else {
      //cart.remove('saving', 1, 1, 'other');
    }
	//enabled disabled fields
	$('#cityid').removeAttr("disabled");
	
	//recalculate topjob service
	var currentTopJobValue = $('#topjob option:selected').val();
	if(startTopJobValue!=currentTopJobValue){ 
		//add new value to CART
		cart.add('topjob', currentTopJobValue, currentTopJobValue/*option_key*/, 'other');
		//remove starting value from CART
		cart.remove('topjob', startTopJobValue, startTopJobValue, 'other');
	}
	
    ofrm.order.value  = cart.toXML();
    ofrm.doing.value  = 'jump';
    ofrm.jumpto.value = jumpto; 
    
    ofrm.submit();    
  }
  else {
    return false;
  } 
}

function onEnter(e, function_txt){
  var key;
  if(window.event)
    key = window.event.keyCode;
  else
    key = e.which;

  
  if((key &gt;= 48 &amp;&amp; key &lt;= 57) || key == 8 || key == 13) {
    if (key == 13) {
      eval(function_txt);
    }
    else {
      return false;
    }
  }
  else {
    return false;
  }
}

function setFocusCat_Except() {
  var total_cmd = $(ofrm.extravisibilityid).length;
  if (total_cmd == 1) {
    if (!(ofrm.extravisibilityid.disabled)) ofrm.extravisibilityid.focus();
  }
}

function setFocusCat() {
  var total_cmd = $(ofrm.extravisibilityid).length;
  if (total_cmd &gt; 1) {
    if (!(ofrm.extravisibilityid[total_cmd-1].disabled)) ofrm.extravisibilityid[total_cmd-1].focus();
  }
  else {
    if (!(ofrm.extravisibilityid.disabled)) ofrm.extravisibilityid.focus();
  }
}

function updateFieldbyCat(obj, cid) {
  var total_comp = $(ofrm.industryid).length;
  var cid = cid.substring(1, 2);
  
  // add or remove service
  if (obj.value &gt; 0) {
    cart.add('industry', obj.value, '_'+cid, 'indus_'+cid);
    
    if (total_comp &gt; 1) {
      cart.add('extrapriority', ofrm.extrapriorityid[cid].value, '_'+cid, 'indus_'+cid);
      cart.add('extravisibility', ofrm.extravisibilityid[cid].value, '_'+cid, 'indus_'+cid);
    }
    else {
      cart.add('extrapriority', ofrm.extrapriorityid.value, '_'+cid, 'indus_'+cid);
      cart.add('extravisibility', ofrm.extravisibilityid.value, '_'+cid, 'indus_'+cid);
    }
  }
  else cart.removeGroup('indus_'+cid);
  
  // update price label
  //$('#industryfee_'+cid).html('USD$' + cart.getOptionPrice('industry', obj.value, '_'+cid)); 
  $('#industryfee_'+cid).html('');
  if (total_comp &gt; 1) {
    $('#extravisibilityfee_'+cid).html('USD$'+cart.getOptionPrice('extravisibility', ofrm.extravisibilityid[cid].value, '_'+cid));
    $('#extrapriorityfee_'+cid).html('USD$'+cart.getOptionPrice('extrapriority', ofrm.extrapriorityid[cid].value, '_'+cid));
  }
  else {
    $('#extravisibilityfee_'+cid).html('USD$'+cart.getOptionPrice('extravisibility', ofrm.extravisibilityid.value, '_'+cid));
    $('#extrapriorityfee_'+cid).html('USD$'+cart.getOptionPrice('extrapriority', ofrm.extrapriorityid.value, '_'+cid));
  }
  
  if (obj.value == 0) {
    
    // set focus
    if (total_comp &gt; 1) {
      ofrm.extravisibilityid[cid].options[0].selected   = true;
      ofrm.extrapriorityid[cid].options[0].selected   = true;
    }
    else {
      ofrm.extravisibilityid.options[0].selected  = true;
      ofrm.extrapriorityid.options[0].selected  = true;
    }
  }
  return true;
}

cart.fromXML('&lt;items&gt;&lt;item service_key="city" option_key="29" buying_order="0" group="city" /&gt;&lt;item service_key="industry" option_key="58" buying_order="0" group="indus_0" /&gt;&lt;item service_key="extravisibility" option_key="1" buying_order="0" group="indus_0" /&gt;&lt;item service_key="extrapriority" option_key="1" buying_order="0" group="indus_0" /&gt;&lt;item service_key="jobposting" option_key="1" buying_order="0" group="jobposting" /&gt;&lt;/items&gt;');

$("#ofrm").ready ( function() { UpdateFormStatus() }  );
$("#ofrm").change ( function() { UpdateFormStatus() }  );
$("#ofrm").click ( function() { UpdateFormStatus() }  );
$("#ofrm").dblclick ( function() { UpdateFormStatus() }  );

UpdateFormStatus();

function changeCity(){
	if ( ofrm.countryid.value != 1 ) {
		// select province Other for not Vietnam
		ofrm.cityid.value		= 66;
		ofrm.cityid.disabled	= true;			
	}
	else {
		// select Ho Chi Minh for Vietnam
		ofrm.cityid.value		= "";
		ofrm.cityid.disabled	= false;
	}	
}

//MARS project
var languageid    = 2;
function showIndustry(){
	for(i=0;i&lt;=0;i++){
       	$('#lb_category_id_'+i).html($('#industryid_'+i+' option:selected').text());
	}
}
showIndustry();
</script>
	<div style="clear:both"></div>
</div>