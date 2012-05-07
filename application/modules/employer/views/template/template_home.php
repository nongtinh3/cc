<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$this->site_title;?></title>
<link href="<?=base_url();?>public/css_employer/master.css" rel="stylesheet" type="text/css" media="all" />




<script type="text/javascript"> 
$(document).ready(function(){	
	
    $('div pre code').each(function() {
        eval($(this).text());
    });
	
	// Menu main admin
	var url = document.location.href;
	//alert(url);
	$('.nav_main a').each(function(){
		if($(this).attr('href') == url) {
			$(this).addClass('active_a_menu');
			var parentTagName = $(this).parent().parent().prev().get(0).tagName;
			var parent = $(this).parent().parent().prev();
				if(parentTagName == 'A') {
					parent.addClass('active_a_menu');
				}
		} else {
			$(this).removeClass('active_a_menu');
		}
	});	
	
});

</script>

</head>

<body>
	<div id="container">
    	<div id="wrapper">        	
            <?=$headers;?>
            <?=$menu;?>
        </div>
        <div id="content">
        <?=$content;?>
        </div>
        <?=$footers;?>
		
    </div>

</body>
</html>