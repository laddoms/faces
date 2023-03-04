<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
		<html lang="en">
		<meta name="description" content="Explore faces in nature. Images of nature, rocks, mountains, clouds, leaves, trees, fungi, shadows, and
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

	
		<?php include('header.inc.php'); ?>
<div id="wrapper">	
	<div id="portfoliosliders">
		<h1 id="slider2title">Faces in Mountains</h1>
			<div class="slider2">
				<?php foreach (glob("./images/mountains/*.{jpg,gif,png,jpeg,JPG,JPEG}", GLOB_BRACE) as $filename)  //this gets all the image files from the readers images folder 
					{   
						$new_extension='jpg';  //the new extension. Save all images as jpegs
						$newfile=substr($filename, 0, -strlen(pathinfo($filename, PATHINFO_EXTENSION))).$new_extension;  //get the current extension change it to the new extension (jpg). Save it to var newfile
						$newfile=strtolower($newfile);  //lowercase all the strings
						$newfile=str_replace(' ', '', $newfile);  //get rid of all the spaces
						rename($filename, $newfile);  //now rename it to the new filename
						echo "<figure><img src=$newfile></figure>";
					}
				?>
			</div>	
			<h1 id="slider3title">Faces in Trees</h1>
			<div class="slider3">
				<?php foreach (glob("./images/trees/*.{jpg,gif,png,jpeg,JPG,JPEG}", GLOB_BRACE) as $filename)  //this gets all the image files from the readers images folder 
					{   
						$new_extension='jpg';  //the new extension. Save all images as jpegs
						$newfile=substr($filename, 0, -strlen(pathinfo($filename, PATHINFO_EXTENSION))).$new_extension;  //get the current extension change it to the new extension (jpg). Save it to var newfile
						$newfile=strtolower($newfile);  //lowercase all the strings
						$newfile=str_replace(' ', '', $newfile);  //get rid of all the spaces
						rename($filename, $newfile);  //now rename it to the new filename
						echo "<figure><img src=$newfile></figure>";
						
					}
					?>
				
			</div>	
			<h1 id="slider4title" >Faces in Clouds</h1>
			<div class="slider4">
				<?php foreach (glob("./images/clouds/*.{jpg,gif,png,jpeg,JPG,JPEG}", GLOB_BRACE) as $filename)  //this gets all the image files from the readers images folder 
					{   
						$new_extension='jpg';  //the new extension. Save all images as jpegs
						$newfile=substr($filename, 0, -strlen(pathinfo($filename, PATHINFO_EXTENSION))).$new_extension;  //get the current extension change it to the new extension (jpg). Save it to var newfile
						$newfile=strtolower($newfile);  //lowercase all the strings
						$newfile=str_replace(' ', '', $newfile);  //get rid of all the spaces
						rename($filename, $newfile);  //now rename it to the new filename
						echo "<figure><img src=$newfile></figure>";
						
					}
					?>
			</div>
		
			<h1 id="slider5title">Interesting Fungi</h1>
			<div class="slider5">
				<?php foreach (glob("./images/fungi/*.{jpg,gif,png,jpeg,JPG,JPEG}", GLOB_BRACE) as $filename)  //this gets all the image files from the readers images folder 
					{   
						$new_extension='jpg';  //the new extension. Save all images as jpegs
						$newfile=substr($filename, 0, -strlen(pathinfo($filename, PATHINFO_EXTENSION))).$new_extension;  //get the current extension change it to the new extension (jpg). Save it to var newfile
						$newfile=strtolower($newfile);  //lowercase all the strings
						$newfile=str_replace(' ', '', $newfile);  //get rid of all the spaces
						rename($filename, $newfile);  //now rename it to the new filename
						echo "<figure><img src=$newfile></figure>";
						
					}
					?>
			</div>	
			<h1 id="slider6title">Faces in Leaves</h1>
			<div class="slider6">
				<?php foreach (glob("./images/leaves/*.{jpg,gif,png,jpeg,JPG,JPEG}", GLOB_BRACE) as $filename)  //this gets all the image files from the readers images folder 
					{   
						$new_extension='jpg';  //the new extension. Save all images as jpegs
						$newfile=substr($filename, 0, -strlen(pathinfo($filename, PATHINFO_EXTENSION))).$new_extension;  //get the current extension change it to the new extension (jpg). Save it to var newfile
						$newfile=strtolower($newfile);  //lowercase all the strings
						$newfile=str_replace(' ', '', $newfile);  //get rid of all the spaces
						rename($filename, $newfile);  //now rename it to the new filename
						echo "<figure><img src=$newfile></figure>";
						
					}
					?>
				
			</div>	
			<h1 id="slider7title">Faces in Rocks</h1>
			<div class="slider7">
				<?php foreach (glob("./images/rocks/*.{jpg,gif,png,jpeg,JPG,JPEG}", GLOB_BRACE) as $filename)  //this gets all the image files from the readers images folder 
					{   
						$new_extension='jpg';  //the new extension. Save all images as jpegs
						$newfile=substr($filename, 0, -strlen(pathinfo($filename, PATHINFO_EXTENSION))).$new_extension;  //get the current extension change it to the new extension (jpg). Save it to var newfile
						$newfile=strtolower($newfile);  //lowercase all the strings
						$newfile=str_replace(' ', '', $newfile);  //get rid of all the spaces
						rename($filename, $newfile);  //now rename it to the new filename
						echo "<figure><img src=$newfile></figure>";
					}
					?>
			</div>	
			<h1 id="slider8title">Shadows and Other Images</h1>
			<div class="slider8">
				<?php foreach (glob("./images/otherimages/*.{jpg,gif,png,jpeg,JPG,JPEG}", GLOB_BRACE) as $filename)  //this gets all the image files from the readers images folder 
					{   
						$new_extension='jpg';  //the new extension. Save all images as jpegs
						$newfile=substr($filename, 0, -strlen(pathinfo($filename, PATHINFO_EXTENSION))).$new_extension;  //get the current extension change it to the new extension (jpg). Save it to var newfile
						$newfile=strtolower($newfile);  //lowercase all the strings
						$newfile=str_replace(' ', '', $newfile);  //get rid of all the spaces
						rename($filename, $newfile);  //now rename it to the new filename
						echo "<figure><img src=$newfile></figure>";
					}
					?>
			</div>	
	</div>
</div>		
<?php include('footer.inc.php'); ?>	
	


<script src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
      <script>
      $('.slider2').slick({
       fade: true,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: true,
        dots: false,
		adaptiveHeight: true,
		cssEase:'linear',
		speed:900,
		
      });
      </script>

      <script>
      $('.slider3').slick({
       fade: true,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: true,
        dots: false,
		adaptiveHeight: true,
		cssEase:'linear',
		speed:900,
		
      });
      </script>
	  <script>
      $('.slider4').slick({
       fade: true,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: true,
        dots: false,
		adaptiveHeight: true,
		cssEase:'linear',
		speed:900,
      });
      </script>	 
	   <script>
      $('.slider5').slick({
      fade: true,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: true,
        dots: false,
		adaptiveHeight: true,
		cssEase:'linear',
		speed:900,
      });
      </script>
	<script>
      $('.slider6').slick({
       fade: true,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: true,
        dots: false,
		adaptiveHeight: true,
		cssEase:'linear',
		speed:900,
      });
      </script>
	<script>
      $('.slider7').slick({
      fade: true,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: true,
        dots: false,
		adaptiveHeight: true,
		cssEase:'linear',
		speed:900,
      });
      </script>
	<script>
      $('.slider8').slick({
       fade: true,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: true,
        dots: false,
		adaptiveHeight: true,
		cssEase:'linear',
		speed:900,
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