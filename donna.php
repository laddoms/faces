<head>	
		<html lang="en">
		<meta name="description" content="Explore faces in nature. Images of nature, rocks, mountains, clouds, leaves, trees, fungi, shadows, and
		other things that have hidden faces in them" />
		<meta name="keywords" content="Faces in nature. Images of mountains, rocks, trees, leaves, faces, clouds, fungi, shadows, snow. Nature
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
<?php include('header.inc.php'); ?>
<div id="wrapper">
	
	<div id="donnapage">
		<img src="images/donna.jpg" alt="image of Donna" id="donnaImg"/>
			 	<div id="donna">
					<h2>Donna ~ Hiker / Nature Photographer</h2>
					<p>Hi, my name is Donna Liese and I am a contributor to Explore Faces in Nature. 
						I was blessed with a childhood surrounded by fields and woods. Every day I was excited to go outdoors and explore. 
						My mind was filled with wonder, my heart peace and contentment. 
					</p>
					<p>	This appreciation of spending time in nature has continued throughout my life. To my surprise, and thanks to my
					   friend Eva Kealey, I have a new hobby, finding faces in nature! 
						It’s so much fun to discover one, and bring it to life by creating a story! Remember, there are no limits to our 
					   imaginations and creativity…Have fun!
					</p>
				</div>
		
			<div id="donnaphotolarge">
				<fieldset><legend>Photography by Donna</legend>
						
						<img src="images/donna1.JPG" alt="photo of face in nature">
						<img src="images/donna2.JPG" alt="photo of face in nature">
						<img src="images/donna3.JPG" alt="photo of face in nature">
					
				</fieldset>
			</div>
		
		<div id="photographybydonnaimages"><!--this div is only visible on cell phone sized screens-->
			<h1>Photography by Donna</h1>	
			<img src="images/donna1.JPG" alt="photo of face in nature"><br />
			<img src="images/donna2.JPG" alt="photo of face in nature"><br />
			<img src="images/donna3.JPG" alt="photo of face in nature">
		</div>
	</div>	
</div>
	<?php include('footer.inc.php'); ?> 


<script src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
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
<script type="text/javascript" src="slick/slick.min.js"></script>
      <script>
      $('.slider').slick({
       infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1
      });
      </script>