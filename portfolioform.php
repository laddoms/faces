<div id="wrapper">
	<div id="evasForm">
		<?php include('header.inc.php'); ?>
		<div id="readerspagesimg">
			<img src="images/eva and others/hikingchick21.jpg" alt="photo of lake and mountains">
		</div>
		<?php include('nav.inc.php'); ?>
<?php
			
			if($_SERVER['REQUEST_METHOD'] == 'POST') 
				{
					if(isset($_FILES['portfolioimage']))   ///check to see if reader uploaded something. REMEMBER TO USE $_FILES not $_POST!
						{
							$allowed=array('image/jpg', 'image/JPG', 'image/PNG', 'image/png', 'image/jpeg', 'image/JPEG','image/gif');  //the allowed file types
							if(in_array($_FILES['portfolioimage']['type'], $allowed))  //validates file type
								{
									$portfoliosection=$_POST['portfoliosection'];  //get the section that the image is supposed to go in (which folder)
									$error=1;   //declare flag var now and set it to 1 meaning an error exists
									
											////move it from the temp folder to the readers image folder
									if(move_uploaded_file($_FILES['portfolioimage']['tmp_name'], "./images/$portfoliosection/{$_FILES['portfolioimage']['name']}"))  
										/// brings file into the appropriate folder based on which portfoliosection it is supposed to go in. 
										
										{
											if($_FILES['portfolioimage']['error']>0)  //check for error codes. A 0 error code indicates no error
												{
													echo'<p class="error">The file could not be uploaded. Please try again.</p>';
													$error=1;   ///flag as error
												}
											else
												{
													function fn_resize($image_resource_id,$width,$height) 
														{
															$target_width =400;  //the ultimate width in px of the newly stored image
															$target_height =400;  //the ultimate height in px of the newly stored image
															$target_layer=imagecreatetruecolor($target_width,$target_height);  //target layer is needed for the next line to form the image
															imagecopyresampled($target_layer,$image_resource_id,0,0,0,0,$target_width,$target_height, $width,$height);  //takes the target layer, the resource id the ultimate width and height and the original width and height and builds a whole new image
															return $target_layer;
														}
													$filepath ="./images/$portfoliosection/{$_FILES['portfolioimage']['name']}"; 
													$filepath=strtolower($filepath);
													echo"<p>$filepath</p>";
													$file=$_FILES['portfolioimage']['name'];
													$source_properties = getimagesize($filepath);  //getimagesize returns 7 properties of the image. index 0 is width, 1 is height, 2 is type
																								//3 is height and width in string format. 
													$image_type = $source_properties[2]; //the 2 index in source properties is the type image from the getimagesize function
													if( $image_type == IMAGETYPE_JPEG ) //this creates the image, resizes it, and stores it in the readersimages folder
														{   
															$image_resource_id = imagecreatefromjpeg($filepath); //create an image and return an image identifier 
															$target_layer = fn_resize($image_resource_id,$source_properties[0],$source_properties[1]);  //gets the target layer from the resize function
															imagejpeg($target_layer, $filepath );  //uses the target layer to create a new jpeg image and save it the original file name
															$filepath=rename($filepath, str_replace(' ', '', $filepath));  //gets rid of any empty spaces in the file name because glob function wont load them with a space
														    
														}
													elseif( $image_type == IMAGETYPE_GIF )  
														{  
															$image_resource_id = imagecreatefromgif($filepath);
															$target_layer = fn_resize($image_resource_id,$source_properties[0],$source_properties[1]);
															imagegif($target_layer, $filepath );
															$filepath=rename($filepath, str_replace(' ', '', $filepath));
														}
													elseif( $image_type == IMAGETYPE_PNG ) 
														{
															$image_resource_id = imagecreatefrompng($filepath); 
															$target_layer = fn_resize($image_resource_id,$source_properties[0],$source_properties[1]);
															imagepng($target_layer, $filepath );
															$filepath=rename($filepath, str_replace(' ', '', $filepath));
														}
     												
														
												}
											if(file_exists($_FILES['portfolioimage']['tmp_name']) && is_file($_FILES['portfolioimage']['tmp_name']))  //make sure it exists and is a file not a folder
												{
													unlink($_FILES['portfolioimage']['tmp_name']);  //delete the temp file
												}
											
													 
											header("Location:evasform.inc.php?content=success");
											exit();
										}
									
								}
							else  //if the file is not an approved image type
								{
									header("Location: evasform.inc.php?content=tryagain"); //redirect back to the evasForm page and pass the var content so an error message displays
									exit();
								}
							
							
						}
							
				}
include('footer.inc.php'); ?> 
	</div>
</div>
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