
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>	
		<html lang="en">
		<meta name="description" content="Explore with faces in nature. Images of nature, rocks, mountains, clouds, leaves, trees, fungi, shadows, and
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
<html>
	<link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet"> 
<body>
	<div id="wrapper">
		<?php include('header.inc.php'); ?>	
		<div id="treearmsimg">
			<img src="images/forestparktreearms2.jpg" alt="tree">
		</div>
		<div id="title">
			<h1>Explore Faces in Nature</h1>
		</div>
		<div id="indexnav"><?php include('nav.inc.php'); ?></div>
		<div id="clouds"></div>
		<div id="welcome" style="font-family: 'ZCOOL XiaoWei', serif;">
			<p id="welcome1" style="font-family: 'ZCOOL XiaoWei', serif;">Explore Faces in Nature encourages children and families to head out to the great outdoors and let their imaginations take them on a 
			   creative, fun-filled adventure. It is a discovery game in which everyone seeks to find extraordinary faces hidden in Nature.
			</p>
			<p>My name is Eva Kealey, creator of Explore Faces in Nature. I have three children and 2 grandsons. One of the greatest gifts in our
			   lives has been playing outside, soaking up what mother nature has to offer. I am an avid hiker who enjoys spending time outdoors 
			   during all seasons, especially winter.
			</p>
			<p id="welcome3">My first experience with a face in nature was right in my own backyard! I was feeling sad, as I gazed out the window, I looked up 
		       and saw a tree smiling at me. Can you see it?  
			</p>
			<img src="images/originaltree1.jpg" id="originaltree" style="margin-top:-15px;">
			<p id="welcome4">Ever since that first tree smiled at me, I’ve discovered so many more faces in nature. I have seen faces in clouds, trees, rocks, and even bugs.  
			Next time you head outdoors, grab your camera. I hope you too will have fun finding faces in nature.
			</p>
			
		</div>
		<div class="slider">
			<img src="images/mushroom.jpg" alt="photo of face in mushroom">
			<img src="images/owl1.jpg" alt="owl image in fungi">
			<img src="images/shadow1.jpg" alt="face in a shadow photo">
			<img src="images/snowshoe.jpg" alt="photo of snowshoeing up Tuckermans Revene">
	    </div>
		<div id="indexfooter">
			<?php include('footer.inc.php'); ?> 
		</div>
	</div>
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
        dots: true
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
