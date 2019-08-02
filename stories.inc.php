<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<html lang="en">
<head>	
		<html lang="en">
		<meta name="description" content="Fun with faces in nature. Images of nature, rocks, mountains, clouds, leaves, trees, fungi, shadows, and
		other things that have hidden faces in them" />
		<meta name="keywords" content="Faces in nature. Images of mountians, rocks, trees, leaves, faces, clouds, fungi, shadows, snow. Nature
		facts. Oak trees. Shadows. Clouds. Snow. The story of Wendy the tree. The story of Mr Mushroom." />
		<meta name="author" content="Laurie Addoms, Eva Keeley">
		<meta name="google-site-verification" content="SgSoecd7wlU8s7ZpugWhIgYAJd5VMNL3RKI4zTEtUl8" />
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta name=viewport content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet"> 
		<meta http-equiv="content-type" content="text/html;charset=uts-8" />
		<title>Explore Faces in Nature</title>
		<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    	<link href="styling.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div id="wrapper">
	<div id="creativestories">
		<?php include('header.inc.php'); ?>
		<div id="lakeImg">  					 <!--change the name of this div-->
			<img src="images/tree4.JPG">
		</div>
		<div id="storiesnav">
			<?php include('nav.inc.php'); ?>
		</div>
	
		<div id="stories">
			<div id="wendylink">
				<a href="thestoryofwendy.inc.php"><img style="margin-left:40px;"src="images/wendymedium.jpg">
				<p style="margin-left:110px;">Wendy</a></p>
			</div>
			<div id="mushroomlink">
				<a href="mushroomstory.inc.php"><img src="images/mushroommedium.jpg">
				<p style="margin-left:-10px;">Fred the Mushroom</a></p>
			</div>
			<div id="baileylink">
				<a href="bailey.inc.php"><img src="images/fencemedium.jpg">
				<p style="margin-left:50px;">Bailey's Story</a></p>
			</div>
		</div>	
	</div>

<?php include('footer.inc.php'); ?>
</div>
</body>
<script src="js/jquery-1.11.2.min.js"></script>
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script>
	$(function(){
	  $('a').each(function() {
		if ($(this).prop('href') == window.location.href) {
		  $(this).addClass('current');
		}
	  });
	});
</script>	