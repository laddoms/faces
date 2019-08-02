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
<body>
<div id="wrapper">	
	<?php 
		include('header.inc.php'); ?>
		<div id="hikesimg">
			<img src="images/mttombanner.jpg" alt="view from Mt Tom Massachusetts">
		</div>
	<div id="readerhike">
		<div id="hikingnav">
			<?php include('nav.inc.php'); ?>
		</div>
			<?php
				$hikeName=$_GET['content'];  //the content var is also the name of the hike. But its used it two different ways. See $content below. 
				$hikeName=ucwords($hikeName);  //turns the first char of each word to upper case
				echo"<h2>$hikeName</h2>";
				if(isset($_GET['image'])&&(!empty($_GET['image'])))
					{
						$image=$_GET['image'];
					}
				
				$content=$_GET['content'];  
			
				echo"<img src=\"./images/hikersimages/$image.jpg\" width=\"290\" height=\"180\">";
				$content=file_get_contents("./images/hikersimages/$content". ".txt");
				
				//*the following function gets the hikers name from the txt file and returns it. 
		
				function getHikersName($content)
					{
						$hikerName="Submitted by:";  //find the start of the submitted by string. this is used to find the name.
						$hikerNamePos = strpos($content, $hikerName);  //remember strpos is zero based. 
						$description="Description";  //the very next word after hiker name is Description. This will be the ending point of the substr below
						$descriptionPos = strpos($content, $description);  //this finds the  postion of the word 'Description' in the txt file
						$name = substr($content, $hikerNamePos, ($descriptionPos - $hikerNamePos)) . "</p>";  //substr is used to get the hikers name. start point is "Submitted by:". End point is the length of the hikers name which is $descriptionPos - $hikerNamePos. 
						//the substr above actually returns the words "submitted by" in addition to the name. 
						return $name;
					}
				function getDescription($content)
					{
						$description=strpos($content, "Description:");
						$description = substr($content, $description);
						return $description;
					}
				$name = getHikersName($content);
				$description = getDescription($content);
				echo "<h2>$name</h2>";
				echo"<p>$description</p>";
				
			?>
	</div>




</div>
</body>
<div id="hikingfooter">
	<?php include('footer.inc.php'); ?>
</div>
<script src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
    <script>
		  $('.slider11').slick({
		   fade: true,
			autoplay: false,
			autoplaySpeed: 2000,
			arrows: true,
			dots: false
			
		  });
    </script>
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








