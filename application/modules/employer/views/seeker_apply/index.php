<script type="text/javascript" src="<?=base_url();?>public/js/jquery-1.6.4.min.js"></script>

		<script>
	$(document).ready(function(){
		$('tr:odd').addClass('ccc');	
		$('.check:input').toggle(function(){
			$('input:checkbox').attr('checked','checked');	
		},function(){
			$('input:checkbox').removeAttr('checked');	
		})
		$('.check').toggle(function(){
			$('input:checkbox').attr('checked','checked');	
		},function(){
			$('input:checkbox').removeAttr('checked');	
		})
		$('.uncheck').click(function(){
			$('input:checkbox').removeAttr('checked');	
		});
	});
</script>	
<div id="cc_right">
    <div class="cc_right_tt">
    	<h2 class="h2_title">Seeker Apply</h2> 
        <img src="<?=base_url();?>public/images/post_job/cc_iconempmsg.gif" height="60" width="59" align="right" />      
    </div>
    <div class="all"></div>
     <form action="<?=site_url('employer/seeker_apply/show');?>" method="post">
    <div class="cc_right_top">
    	<div class="cc_right_top_left">
       <span class="span_left"><a href="#"><?=$this->lang->line('Check All')?></a> | <a href="#"><?=$this->lang->line('UnCheck All')?></a></span>
        
        <span><input type="submit" name="act" value="<?=$this->lang->line('Delete')?>" /></span>
        </div>
        <div class="cc_right_top_right">
        	<span class="span_right"><strong><?=$this->lang->line('Page')?>: 1</strong></span>
            <span class="span_right">Display 1-4 of 4</span>
        </div>
    </div>
   
    <div class="cc_right_content">
    	<table class="table_content" cellpadding="0" cellspacing="0">
        	<tr class="bg_td">
            	<td class="input_center"><input type="checkbox" class="check"  /></td>
                <td class="bg_td" style="width:200px"><?=$this->lang->line('Job Title')?></td>
                <td class="bg_td"><?=$this->lang->line('Name of candidate')?></td>
                 <td class="bg_td"><?=$this->lang->line('Email')?></td>            
               
                <td class="bg_td"><?=$this->lang->line('Date Posted')?></td>              
                <td class="bg_td">#</td>
            </tr>	
            	<?php
					$counter = 0;
				?>
            	<?php foreach($show_apply_seeker as $row){
					$counter++;
				?>
                <tr>
                
            	<td class="input_center"><input type="checkbox" name="selected[]" value="<?=$row->id;?>"  /></td>
                <td><?=$row->save_vitri ;?></td>  
                <td><?=$row->fullname ;?></td>             
                <td><?=$row->email;?></td>
                 <td><?=$row->save_date;?></td>
               
                <td><a href="<?=site_url('employer/seeker_apply/views_seeker/?get_id='.$row->save_resume_apply);?>">[View]</a> | <a href="<?=site_url('employer/seeker_apply/delete_post/'.$row->id);?>">[Delete]</a></td>
                </tr>	
                <?php } ?>
            
            
        </table>
    </div>
       <div class="cc_right_top">
    	<div class="cc_right_top_left">
        <span class="span_left"><a href="#"><?=$this->lang->line('Check All')?></a> | <a href="#"><?=$this->lang->line('UnCheck All')?></a></span>
        
        <span><input type="submit" name="act" value="<?=$this->lang->line('Delete')?>" /></span>
        </div>
        <div class="cc_right_top_right">
        	<span class="span_right"><strong><?=$this->lang->line('Page')?>: 1</strong></span>
            <span class="span_right">Display 1-4 of 4</span>
        </div>
    </div>
    </form>
    </div>
    	
     
</div>