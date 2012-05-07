<script type="text/javascript" src="<?=base_url();?>public/js/jquery.min.js"></script>
<div id="header">
            <h1><a href="#"><img src="<?=base_url()?>public/images/graphics/logo.gif" width="354" height="52" title="Logo" /></a></h1>
            <div>
            	<span><a href="<?=site_url('employer/login');?>"><?=$this->lang->line('Sign in')?></a> | <a href="<?=site_url('employer/register');?>"><?=$this->lang->line('Join Now')?></a></span>
                <p>               <select id="val_lang">
 	<option value="" selected="selected">--Choose Language--</option>
    <option value="en" <? if($this->nn =='en') echo "selected" ;?>>English</option>
     <option value="vn" <? if($this->nn =='vn') echo "selected" ;?>>Hedrew</option>
 </select>
 <input type="hidden" id="url_curent" value="<? echo current_url()?>" />
 <script>
 	$().ready(function(){
		$('#val_lang').change(function(){
			var lang = $(this).val();
			var url_curent = $('#url_curent').val()
			var url = '<?=base_url()?>';
			window.location.href = url + 'employer/change?lang=' + lang  +'&url=' + url_curent;		
			
		});	
	});
 </script>
<script type="application/javascript">
 	function change_lang(url)
	{
		if(url == '')
		{
			alert('Please you choose language');
		}
		else
		{
			location.href = url;
		}
	}
 </script> |<a href="#"><img src="<?=base_url()?>public/images/icons/icon_f_29x29.gif" width="29" height="29" alt="" align="absmiddle"></a><a href="#"><img src="<?=base_url()?>public/images/icons/icon_in_29x29.gif" width="29" height="29" alt="" align="absmiddle"></a><a href="#"><img src="<?=base_url()?>public/images/icons/icon_t_29x29.gif" width="29" height="29" alt="" align="absmiddle"></a><a href="#"><img src="<?=base_url()?>public/images/icons/icon_rss_29x29.gif" width="29" height="29" alt="" align="absmiddle"></a></p>
            </div>
        </div>