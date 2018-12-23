<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta name="keywords" content="Public School Ghazipur, Modern School Ghazipur," />
  <meta name="description" content="Merry City School ghazipur,Merry City School Phullanpur ghazipur" />
<meta http-equiv="X-UA-Compatible" content="IE=10,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
<meta name="format-detection" content="telephone=no" /><title>
	Merry City School Phullanpur,Ghazipur
</title><link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/navigation.css" media="all" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css" />
<!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/ie6_styles.css" media="all" /><![endif]-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/right_menu.css" media="all" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/popup_css.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/responsive.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/component.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/gallery/css/screen.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/gallery/css/lightbox.css">
<script type="text/javascript" src="<?php echo base_url();?>assets/scripts/jquery-1.7.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/scripts/jquery.lightbox_me.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/scripts/popup.js"></script>
<script src="<?php echo base_url();?>assets/script/jquery.jcarousel.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/script/js-func.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/script/toggle.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/script/tab.js"></script>
<!--Right Menu open-->
<script>  
$(function(){
	// building select menu
	$('<select />').appendTo('.leftNav');

	
	$('.leftNav ul li a').each(function(){
		
		var target = $(this);
		var temp=document.URL.split("index.html");
		
		var currentPage=temp.reverse(); 
		
		if(target.attr('href')==currentPage[0])
		{
			$('<option />', {
			'selected':'selected',
			'value' : target.attr('href'),
			'text': target.text()
		}).appendTo('.leftNav select');
			
		}
		else
		{
		$('<option />', {
			'value' : target.attr('href'),
			'text': target.text()
		}).appendTo('.leftNav select');
	   }

	});

	// on clicking on link
	$('.leftNav select').on('change',function(){
		window.location = $(this).find('option:selected').val();
	});
});
</script>
<!--Right Menu close-->

</head>
<body style='background-image:url(<?php echo base_url();?>assets/images/merrybackground.jpg)'>
