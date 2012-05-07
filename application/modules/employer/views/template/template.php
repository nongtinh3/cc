<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$this->site_title;?></title>
<link href="<?=base_url();?>public/css/base.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?=base_url();?>public/css/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?=base_url();?>public/js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>public/js/jquery.pngFix.pack.js"></script>
<script type="text/javascript" src="<?=base_url();?>public/js/jquery.pngFix.js"></script>
<script type="text/javascript" src="<?=base_url();?>public/js/common.js"></script>
<script type="text/javascript" src="<?=base_url();?>public/js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="<?=base_url();?>public/js/jquery.aslidertext.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>public/js/jquery.fancybox-1.3.4.pack.js"></script>

<script type="text/javascript"> 
$(document).ready(function(){
	$('#dress_index').aSliderText({
			updateTime: 5000,
			height: 135,
			element: 'p'
	});
	$("#various1").fancybox({
		'width'				: '50%',
		'height'			: '50%',
		'autoScale'			: false,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'type'				: 'iframe'
	});
	$("#various2").fancybox({
		'width'				: '50%',
		'height'			: '50%',
		'autoScale'			: false,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'type'				: 'iframe'
	});
	
	
	//$(document).pngFix(); 
	
	// run the code in the markup!
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
        	
            <?=$menu_employer;?>
        </div>
        <div id="content">
        <?=$content;?>
        </div>
        <?=$footers;?>
		
    </div>

</body>
</html>