<script type="text/javascript" src="<?=base_url();?>public/js/jquery.min.js"></script>

<script>
	$().ready(function(){
		$('#contact').hide();
		$('#act').click(function(){
			$('#contact').show();
			
			var mess = $('#message').val();			
			
			if(mess == '')
			{
				alert('Please enter message content');				
				return false;					
			} 
			return true;
			
		});	
	});
</script>

<div id="body_content"><a id="_top" name="_top"></a>

<style type="text/css">
&lt;!--
.style9 {color: #FFFFFF; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 11px; border-top:1px dashed #FFFFFF; border-bottom:1px dashed #FFFFFF;}
--&gt;
</style>



<div class="container" id="jobpost">
        <div class="content span-19 last floatLeft" id="content">
                
                
    <div id="messagebox" class="messageBox">
                        
</div>
                
    
                <form class="jqtransform  viewMode" action="" method="post" name="ofrm">

                        <!-- Begin Step 1- Panel -->

                        <div class="panelContainer last">

                          <h2 class="panelHeader clsHeader"><span>Seeker Information</span></h2>
                                <div class="panelWrapper clsContent">
                                
                                        <div class="panelContent relative">
                                        		
	                         
								<div class="subContentPreview">
									
							
	                      
                                                
                                                
                                                
                                                <fieldset>
                                                		<dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="">Avatar : </label>

                                                                </dt>
                                                                <dd> <? if(@$seeker->avatar) { ?>
                                <img height="106" width="80" alt="" src="<?=base_url()?><?=@$seeker->avatar?>" id="my_img">
                                <?php } else {?>
																			<img height="106" width="80" alt="" src="http://images.vietnamworks.com/gen/sam_resumephoto.png" id="my_img">
                                                                            <?php } ?></dd>
                                                        </dl>
                                                		
                                                        <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="">Email : </label>

                                                                </dt>
                                                                <dd><?=$seeker2->se_email;?></dd>
                                                        </dl>
                                                        <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="">Full name : </label>

                                                                </dt>
                                                          <dd><?=$seeker->fullname;?></dd>
                                                        </dl>
                                                        <dl class="formRow span-18">
                                                                <dt>
                                   <label for="">Location : </label>
                                                                </dt>
                                                                <dd> 
                            <?=@$seeker->address;?>	- <?=@$this->EM->get_by_country(@$seeker->country)?></dd>
                                                  </dl>
                                                        
                                                  <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="">Gender : </label>

                                                                </dt>
                                                                <dd> 
                              <?=(@$seeker->gender == 1) ?"Male":"Female";?></dd>
                                                  </dl>
														                                                        
                                                        <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="companyName">Date:</label></dt>
                                                                <dd class="formValue listtype_on span-12">
                                                     <?=@$seeker->birth_day?>  </dd>
                                                        </dl>
                                                  <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="companyName">Location:</label></dt>
                                                                <dd class="formValue listtype_on span-12">
                                                    <?=$this->EM->get_province(@$seeker_post->se_residence);?>  </dd>
                                                  </dl>
                                                  
                                                  
                                                  <dl class="formRow span-18">
										<dt class="span-4plus alignLeft">
											<label>Total Years of Experience</label>
										</dt>
										<dd><?=@$seeker->se_nam_kn;?></dd>
									</dl>
										<dl class="formRow span-18">
										<dt class="span-4plus alignLeft">
											<label>Degree Level</label>
										</dt>
										<dd><?=@$this->EM->get_bangcap($seeker->se_bangcap);?></dd>
									</dl>
																																				<dl class="formRow span-18">
										<dt class="span-4plus alignLeft">
											<label>Expected Position</label>
										</dt>
										<dd><?=@$seeker->se_vitri_mm;?></dd>
									</dl>
									<dl class="formRow span-18">
										<dt class="span-4plus alignLeft">
											<label>Expected Job Level</label>
										</dt>
										<dd><?=@$this->EM->get_level($seeker->se_capbac_mm);?></dd>
									</dl>
									<dl class="formRow span-18">
										<dt class="span-4plus alignLeft">
											<label>Expected Work Place</label>
										</dt>
										<dd><?=@$this->EM->get_province($seeker->se_noi_lam);?></dd>
									</dl>
									<dl class="formRow span-18">
										<dt class="span-4plus alignLeft">
											<label>Expected Job Category</label>
										</dt>
										<dd><?=@$this->EM->get_category($seeker->se_nganh_nghe)?></dd>
									</dl>
									<dl class="formRow span-18">
										<dt class="span-4plus alignLeft">
											<label>Expected Salary</label>
										</dt>
										<dd>
                                       <?php if(@$seeker_info->se_luong == 0){
										echo "Negotiable"; } else {?>
                                        	<?=@$seeker_info->se_luong;?> USD/Month
                                        <?php } ?>										</dd>
									</dl>
                                                  
                                                  
                                                  
                                                  
                                                  
                                                  
                                                  
                                                  
                                                  
                                                   <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="companyName">Career Objective:</label></dt>
                                                                <dd class="formValue listtype_on span-12">
                                                    <?=@$seeker->se_muctieu;?>  </dd>
                                                        </dl>
                                                  <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="companyName">Work Experience:</label></dt>
                                                                <dd class="formValue listtype_on span-12">
                                                    <?=@$seeker->se_kinhnghiem;?> </dd>
                                                  </dl>
                                                  </dl>
                                                  <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="companyName">Education and qualifications:</label></dt>
                                                                <dd class="formValue listtype_on span-12">
                                                    <?=@$seeker->se_trinhdo;?> </dd>
                                                  </dl>
                                                   <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="companyName">Skill:</label></dt>
                                                                <dd class="formValue listtype_on span-12">
                                                    <?=@$seeker->se_kinang;?> </dd>
                                                  </dl>
                                                   <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="companyName">Test Job:</label></dt>
                                                                <dd class="formValue listtype_on span-12">
                                                    <?=@$seeker->save_job_id;?></dd>
                                                  </dl>
                                                  
                                                  
                                                   
                                          </fieldset>
                                        </div>
                                </div>
                  </div>
             

	

</div>
   
<br class="clear">



<div style="clear:both"></div>
<div class="panelContainer last">

                          <h2 class="panelHeader clsHeader"><span>Send Message Seeker</span></h2>
                                <div class="panelWrapper clsContent">
                                
                                        <div class="panelContent relative">
                                        		
	                         
								<div class="subContentPreview">
								<form action="<?=base_url('employer/seeker_apply/views_seeker');?>" method="post">
                               <?=@$error;?>
                                   <fieldset>
                                                             <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="companyName">Email:</label></dt>
                                                                <dd class="formValue listtype_on span-12">
                                                    <?=@$seeker2->se_email;?></dd>
                                                  </dl>
                                                   <dl class="formRow span-18">
                                                                <dt>
                                                                        <label for="companyName">Message:</label></dt>
                                                                <dd class="formValue listtype_on span-12">
                                                   <textarea name="txt_message" cols="70" rows="10" id="message"></textarea></dd>
                                                  </dl>
                                                
                                                  </div> 
                                                		
                                        </fieldset>
                        </div>
	<div class="formAction">
                                        <fieldset>
                                       
                                       <input type="hidden" name="id_seeker" id="id_seeker" value="<?=$seeker->se_id;?>" />
                                       <input type="hidden" name="id_employer" id="id_employer" value="<?=$_SESSION['em_id']?>" />
											<input type="submit" id="act" name="btnJob" value="Message" class="btn_em">
                                          
											
                                                <!-- <button type="button" class="actionBtn Sec" tabindex="18"><span>Go back</span></button> -->
                                        </fieldset>
                                  </form>	      
                                  
                        </div>


</div>



                          