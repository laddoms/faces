
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
		<html lang="en">
		<meta name="description" content="Explore with faces in nature. Images of nature, rocks, mountains, clouds, leaves, trees, fungi, shadows, and
		other things that have hidden faces in them" />
		<meta name="keywords" content="Faces in nature. Images of mountians, rocks, trees, leaves, faces, clouds, fungi, shadows, snow. Nature
		facts. Oak trees. Shadows. Clouds. Snow. The story of Wendy the tree. The story of Mr Mushroom." />
		<meta name="author" content="Laurie Addoms, Eva Keeley">
		<meta name="google-site-verification" content="SgSoecd7wlU8s7ZpugWhIgYAJd5VMNL3RKI4zTEtUl8" />
		
		<meta name=viewport content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet"> 
		
		<title>Explore Faces in Nature</title>
		<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    	<link href="styling.css" type="text/css" rel="stylesheet" />
</head>
<html>
	<link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet"> 
<body>
	<?php include('header.inc.php'); ?>	
<div id="wrapper">
		<div id="indexpage">
			<div id="backgroundimgdiv">
				<img src="images/waterbackground.jpg" id="backgroundimg">
		
				<div id="welcome1">
					<h2>About Faces in Nature</h2>
					<p>Explore Faces in Nature encourages children and families to head out to the great outdoors and let their imaginations take
					   them on a creative, fun-filled adventure. It is a discovery game in which everyone seeks to find extraordinary faces hidden
					   in Nature.</p>
				</div>
				<div id="welcome2">
					<h2>History</h2>
					<p>My first experience with a face in nature was right in my own backyard! I was feeling sad, as I gazed out the window, I looked up 
					   and saw a tree smiling at me. Can you see it in the photo below? Ever since that first tree smiled at me, I’ve discovered so 
					   many more faces in nature. I have seen faces in clouds, trees, rocks, and even bugs.  
					   Next time you head outdoors, grab your camera. I hope you too will have fun finding faces in nature.
					</p>
				</div>
				<div id="welcome3">
					<h2>Eva ~ Nature Photographer </h2>
					 <p>My name is Eva Kealey, creator of Explore Faces in Nature. I have three children and two grandsons. One of the greatest 
						gifts in our lives has been playing outside, and soaking up what mother nature has to offer. I am an avid hiker who enjoys 
						spending time outdoors during all seasons, especially winter.
					</p>
				</div>
			
				 <div class="row">
					<img src="images/originaltree1.jpg" alt="tree with a smile" id="image1">
					<img src="images/leafonrock.jpg" alt="face in a leaf" id="image2">
					<img src="images/mushroom1.jpg" alt="mushroom with a face" id="image3">
					<img src="images/indexrockimage.jpg" alt="face on a rock" id="image4">
				</div> 
			</div>
		</div>
</div>	
	
<?php include('footer.inc.php'); ?> 
	

</body>
</html>
<script src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
      <script>
      $('.slider').slick({
       fade: true,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        dots: true,
		cssEase:'linear',
		speed:900
      });
      </script>
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
</html>
