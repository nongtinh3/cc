<script type="text/javascript" src="<?=base_url();?>public/js/jquery.min.js"></script>

<script>
	$().ready(function(){
		$('#contact').hide();
		$('#act').click(function(){
			$('#contact').show();
			
			var mess = $('#message').val();
			var id_seeker = $('#id_seeker').val();
			var id_employer = $('#id_employer').val();
			var status = true;
			if(mess == '')
			{
				alert('Please enter message content');
				status = false;
				return false;	
				$('#message').focus();
			} else {
				$.ajax({
					type: "POST",
					dataType: "json",
					url: '<?=base_url();?>employer/send_message',
					data: 'mess=' + mess + '&id_seeker=' + id_seeker + '&id_employer=' + id_employer,
					success: function(data)
					{
						if(data.status) {	
							alert(data.info); // Neu thanh con thi hien thi thong bao
							$('#message').val('');
							$('#contact').hide();
						} else {
							alert(data.info); // Neu thanh con thi hien thi thong bao	
						}
						// Roi lam di
					}
				});	
			}
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

                          <h2 class="panelHeader clsHeader"><span>Seeker test online</span></h2>
                                <div class="panelWrapper clsContent">
                                
                                        <div class="panelContent relative">
                                        		
	                         
								<div class="subContentPreview">
									
							
	                      
                                                
                                                
                                                
                                                <fieldset>
                                                	<table style="border:1px solid #ccc">
                                                    	<tr>
                                                        	<td>STT</td>
                                                        	<td>Email</td>
                                                            <td>Skill</td>
                                                            <td>Results</td>                                                            
                                                        </tr>
                                                         <?php
														 $i = 1;
                                                            foreach($test_online as $row)
                                                            {
																
													 ?>	
                                                     		<tr>
                                                            	<td><?=$i++;?></td>
                                                                <td> <?=$this->EM->get_email($row->id_user);?></td>
                                                                 <td><?= $this->EM->get_skill($row->id_chude)?></td>
                                                                 <td><?=$row->ketqua;?></td>
                                                            </tr>
                                                     <?php } ?>
                                                    </table>	
                                                		
                                                      
                                          </fieldset>
                                        </div>
                                </div>
                  </div>
             

	

</div>
   
<br class="clear">



<div style="clear:both"></div>
