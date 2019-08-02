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

<body>
<div id="wrapper">
	<div id="facesInFood">
		<?php include('header.inc.php'); ?>
		<div id="lakeImg">  					 <!--change the name of this div-->
			<img src="images/onion21.jpg">
		</div>
		<?php include('nav.inc.php'); ?>
		<div id="slider10title"><h1>We Even See Faces in Food</h1></div>
			
				<?php
				$imagefiles=glob("./images/food/*.{jpg,gif,png,jpeg,JPG,JPEG}", GLOB_BRACE); //store all the image files in an array
				$txtfiles=glob("./images/food/*.txt");  //store all the recipe files in an array

				function getTextFileName(&$txtfiles)  //use & here so it works by reference and actually changes the values
					{
						$txtfiles=substr($txtfiles, 14);  //take off the 1st 14 chars which is the file path
						$dotposition=strpos($txtfiles, '.'); ///find the position of the dot
						$txtfiles=substr($txtfiles, 0, $dotposition);  //return the file name up to the dot
					}
				function getImageFileName(&$imagefiles)  //use & here so it works by reference and actually changes the values
					{
						$imagefiles=substr($imagefiles, 14);  //take off the 1st 23 chars which is the file path
						$dotposition=strpos($imagefiles, '.'); ///find the position of the dot
						$imagefiles=substr($imagefiles, 0, $dotposition);  //return the file name up to the dot
					}
				
				array_walk($txtfiles, 'getTextFileName');  //array walk applies the getTextFileName function to each element of the array and returns the new array
				array_walk($imagefiles, 'getImageFileName');
				
				echo"<div class=\"slider10\">";
					foreach(glob("./images/food/*.{jpg,gif,png,jpeg,JPG,JPEG}", GLOB_BRACE) as $file)  //this changes each image file in the folder to jpgs
						{
							$new_extension='jpg';  //the new extension
							$newfile=substr($file, 0, -strlen(pathinfo($file, PATHINFO_EXTENSION))).$new_extension;  //get the current extension change it to the new extension (jpg). Save it to var newfile
							$newfile=strtolower($newfile);  //lowercase all the strings
							$newfile=str_replace(' ', '', $newfile);  //get rid of all the spaces
							rename($file, $newfile);  //now rename it to the new filename
						}
					foreach($imagefiles as $image)   ////go through the imagefiles array. For each image do...
						{
							$key=array_search($image, $txtfiles);   //this goes through the text files array and searches for the matching image file name. It returns the key to that file. 
							$textfile="./images/food/$txtfiles[$key].txt";  //this assigns the path and filename to the variable 'textfile'
							
								if(in_array($image, $txtfiles))  //if a recipe exists for this image
									{
										$figcaption=file_get_contents($textfile);  //this reads the textfile above and stores the data in figcaption variable
										$figcaption=str_replace('-', '<li>', $figcaption );  //this takes the dash mark - in the txt file and replaces it with a list item. 
										echo"<figure><img src=\"./images/food/$image.jpg\"><figcaption id=\"slider10recipe\">$figcaption</figcaption></figure>";  //the figcaption is the data from the text file read in line 32. This displays the text file with the matching image file
									}
								else
									{
										echo"<figure><img src=\"./images/food/$image.jpg\"><figcaption>$image</figcaption></figure>";
									}
						}
						
				?>
							</div>
	</div>

<?php include('footer.inc.php'); ?>
</body>
</div>
<script src="js/jquery-1.11.2.min.js"></script>
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
	<script>
      $('.slider10').slick({
       fade: true,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: true,
        dots: false,
		adaptiveHeight:false
		
      });
    </script>
<script>
	$(function(){
	  $('a').each(function() {
		if ($(this).prop('href') == window.location.href) {
		  $(this).addClass('current');
		}
	  });
	});
</script>