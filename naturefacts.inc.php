<head>	
		<html lang="en">
		<meta name="description" content="Explore faces in nature. Images of nature, rocks, mountains, clouds, leaves, trees, fungi, shadows, and
		other things that have hidden faces in them" />
		<meta name="keywords" content="Faces in nature. Images of mountians, rocks, trees, leaves, faces, clouds, fungi, shadows, snow. Nature
		facts. Oak trees. Shadows. Clouds. Snow. The story of Wendy the tree. The story of Mr Mushroom." />
		<meta name="author" content="Laurie Addoms, Eva Keeley">
		<meta name="google-site-verification" content="SgSoecd7wlU8s7ZpugWhIgYAJd5VMNL3RKI4zTEtUl8" />
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta name=viewport content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
		<meta http-equiv="content-type" content="text/html;charset=uts-8" />
		<title>Explore Faces in Nature</title>
		<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    	<link href="styling.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div id="wrapper">
	<?php include('header.inc.php'); ?>
	<div id="nature">
		<img src="images/rocksbackground1.jpg" alt="image of zion nat park">
	</div>
	<div id="naturefacts">
		<div id="oldoaktreeImg"></div>
		<div id="oaktreesP">
			<h1 id="oaktreeh1">Oak Trees</h1>
			<p>Oak trees can live to be quite old, up to 200 years!</p>
			<p>Did you know they can drink up to 50 gallons of water a day from the soil! If the tree does not get
			   enough water and nutrients, the leaves will turn yellow and the tree will stop growing.
			</p>
			<p>Trees don’t live forever. During a tree’s life it can be stressed by a virus, fungus, birds, animals, fire,
			   lack of water or extreme weather.
			</p>
			<p>Many animals build their home in trees. Can you think of what animals build their home in a tree?
			</p><br /><br /><br />
		</div>
	
		<div id="cloudImg"></div><br />
		<div id="cloudsP">
			<h1 id="cloudsh1">Clouds</h1>
			<p>A cloud is a large group of tiny water droplets that we can see in the air. Clouds can contain millions 
				of tons of water. There are different types of clouds, which form many different shapes.
			</p>
			<p>Some clouds look puffy like cotton balls. Or some look like whipped cream piled high. Others are flat, 
				like layered sheets, and some are wispy and thin, appearing high in the sky. Watch out! 
				If you spot a dragon in the sky, don’t look away, because the wind may blow the cloud away quicker 
				than you can blink an eye!
			</p>
		</div>
		<div id="shadowImg"></div>
		<div id="shadowsP">
			<h1 id="shadowsh1">Shadows</h1>
			<p>A shadow is made when an object blocks the light. You can make shadows with your body and other objects. 
			   Shadows only show the shape of an object, it does not show colors or details.
			</p>
			<p>Your shadow is longest in 
			   the early morning, and in the late afternoon. At noon, when the sun is overhead there is little or no 
			   shadow at all.
			</p>
			<p>If the source of the light is moving, the shadow moves with it, because the light rays 
			   keep changing the direction in which they fall on the object.
			</p>
		</div>
		<div id="snowImg"></div><br /><br /><br />
		<div id="snowP">
			<h1 id="snowh1">Snow</h1>
			<p>Did you know snow is a form of precipitation? Other forms of precipitation are rain, hail, 
			   and sleet. Snow forms when water vapors in the atmosphere freeze into ice crystals.
			</p>
			<p>Who loves to play in the snow? I do. When I see the snow falling from the sky, I want to run outside 
			   and play in it! You can make snow angels, forts, and everyones favorite, a snowman. As long as the snow is sticky,
			   you can make anything you want. Sometimes you may see an image in the snow, like our cranky friend here 
			   showing his teeth. No wonder why he is so cranky people are stomping on his head!
			</p><br />
		</div>

	</div>
</div>
	<?php include('nav.inc.php'); ?>
	
	
	
</body>
<?php include('footer.inc.php'); ?>
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
