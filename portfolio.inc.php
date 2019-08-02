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
		<link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
		<meta http-equiv="content-type" content="text/html;charset=uts-8" />
		<title>Explore Faces in Nature</title>
		<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    	<link href="styling.css" type="text/css" rel="stylesheet" />
</head>
<div id="wrapper">
	
		<?php include('header.inc.php'); ?>
		<div id="portfolioImg">
			<img src="images/snowshoe1.jpg" alt="photo of child climbing tree">
		</div>
		<?php include('nav.inc.php'); ?>
		<div id="portfoliosliders">
			<div id="slider2title"><h1>Faces in Mountains</h1></div>
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
			
		</div>	
			<div id="slider3title"><h1>Faces in Trees</h1></div>
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
			<div id="slider4title"><h1>Faces in Clouds</h1></div>
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
			<div id="slider5title"><h1>Interesting Fungi</h1></div>
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
			<div id="slider6title"><h1>Faces in Leaves</h1></div>
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
			<div id="slider7title"><h1>Faces in Rocks</h1></div>
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
			<div id="slider8title"><h1>Shadows and Other Images</h1></div>
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
		
	
	<?php include('footer.inc.php'); ?>
</div>

<script src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
      <script>
      $('.slider2').slick({
       fade: true,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: true,
        dots: false
		
      });
      </script>

      <script>
      $('.slider3').slick({
       fade: true,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: true,
        dots: false
		
      });
      </script>
	  <script>
      $('.slider4').slick({
       fade: true,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: true,
        dots: false,
		adaptiveHeight: true
      });
      </script>	 
	   <script>
      $('.slider5').slick({
       fade: true,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: true,
        dots: false,
		adaptiveHeight: true
      });
      </script>
	<script>
      $('.slider6').slick({
       fade: true,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: true,
        dots: false,
		adaptiveHeight: true
      });
      </script>
	<script>
      $('.slider7').slick({
       fade: true,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: true,
        dots: false,
		adaptiveHeight: true
      });
      </script>
	<script>
      $('.slider8').slick({
       fade: true,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: true,
        dots: false,
		adaptiveHeight: true
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