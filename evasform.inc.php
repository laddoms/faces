<div id="wrapper">
	<div id="evasForm">
		<?php include('header.inc.php'); ?>
		<div id="readerspagesimg">
			<img src="images/eva and others/hikingchick21.jpg" alt="photo of lake and mountains">
		</div>
		<?php include('nav.inc.php'); 
		if((isset($_GET['content']))&& ($_GET['content']=='tryagain'))  //this means the get var was passed from portfolio.php and the image did not upload properly
			{
				echo'<p class="error">Your image did not upload properly. Please upload a JPEG, jpg, jpeg, gif, or png type image.
					Or check your file size. Maximum file size allowed is 500kb</p>';
			}
		if((isset($_GET['content']))&& ($_GET['content']=='recipefailure'))  //this means the get var was passed from portfolio.php and the image did not upload properly
			{
				echo'<p class="error">Your recipe did not post. Please try entering it again. Ensure all fields are filled in.</p>';
			}
		if((isset($_GET['content'])) && ($_GET['content']=='success'))
			{
				echo"<script type=\"text/javascript\">alert(\"Eva, your form submission was successful.\")</script>";
													
			}
		?>
		<div id="readersimageform">
			<form method="post" enctype="multipart/form-data" action="evasform.inc.php" name="evasform" id="evasform" onsubmit="return validateSubmitEvas()">
				 <fieldset>
					<legend><h3>Insert a Reader's Image:</h3></legend>	
					<p>Reader's Name:</p>
						<input type="text" name="readersname" id="readersname" size="35" placeholder="enter the reader's name" />
					<p>Post Content:</p>
						<textarea  rows="5" cols="27" name="readerspostcontent"   id="readerspostcontent" ></textarea>
					<p>Image:(maximum file size is 500kb)</p>
						<input type="file" name="readersimage" id="readersimage" >
						<input type="hidden" name="MAX_FILE_SIZE" value="500000" />
						<p><input type="submit" name="submit" value="Insert Reader's Image" ></p>
				</fieldset>
			</form>
		</div>
		<div id="portfolioform">
			<form method="post" enctype="multipart/form-data" action="portfolioform.php" name="portfolioform" id="portfolioform" onsubmit="return validateSubmitPortfolio()">
				<fieldset>
					<legend><h3>Insert a Portfolio or Food Page Image</h3></legend>
					<p>Portfolio Page Section:
						<select name="portfoliosection" id="portfoliosection">
							<option value="" disabled selected="selected">Please Choose a Portfolio Section</option>
							<option value="mountains">Mountains</option>	
							<option value="trees">Trees</option>
							<option value="clouds">Clouds</option>
							<option value="fungi">Fungi</option>
							<option value="leaves">Leaves</option>
							<option value="rocks">Rocks</option>
							<option value="otherimages">Shadows and Other Images</option>
							<option value="food">Food</option>
						</select>
					<p>Image: (maximum file size is 500kb)</p>
						<input type="file" name="portfolioimage" id="portfolioimage" >
						<input type="hidden" name="MAX_FILE_SIZE" value="500000" />
						<p><input type="submit" name="submit" value="Insert Image" ></p>
				</fieldset>
			</form>
		</div>
		<div id="removemountainimageform">
			<form method="post" enctype="multipart/form-data" action="removeform.php" name="removemountainform" id="removemountainform" onsubmit="return validateSubmitMountainRemove()">
				<fieldset>
					<legend><h3>Remove a Mountain Image</h3></legend>
						<select name="imagename" id="imagename">
							<option value="" disabled selected="selected">Select a Mountain Image to Remove</option>
							<?php 
								$files=glob("./images/mountains/*.{jpg,gif,png,jpeg,JPG,JPEG}", GLOB_BRACE);
								foreach($files as $file)   ////go through the imagefiles array. For each image do...
									{
										$filewithoutpath=substr($file, 19); //strip off the path
										echo"<option value=\"$file\">$filewithoutpath</option>";
										
									}
								
							?>
					<p><input type="submit" name="submitRemove" value="Remove Selected Mountain Image"></p>
				</fieldset>
			</form>
		</div>
		<div id="removetreeimageform">
			<form method="post" enctype="multipart/form-data" action="removeform.php" name="removetreeform" id="removetreeform" onsubmit="return validateSubmitRemoveTree()">
				<fieldset>
					<legend><h3>Remove a Tree Image</h3></legend>
						<select name="imagename" id="imagename">
							<option value="" disabled selected="selected">Select a Tree Image to Remove</option>
							<?php 
								$files=glob("./images/trees/*.{jpg,gif,png,jpeg,JPG,JPEG}", GLOB_BRACE);
								foreach($files as $file)   ////go through the imagefiles array. For each image do...
									{
										$filewithoutpath=substr($file, 15); //strip off the path
										echo"<option value=\"$file\">$filewithoutpath</option>";
										
									}
							?>
					<p><input type="submit" name="submitRemove" value="Remove Selected Tree Image"></p>
				</fieldset>
			</form>
		</div>
		<div id="removecloudimageform">
			<form method="post" enctype="multipart/form-data" action="removeform.php" name="removecloudform" id="removecloudform" onsubmit="return validateSubmitRemoveCloud()">
				<fieldset>
					<legend><h3>Remove a Cloud Image</h3></legend>
						<select name="imagename" id="imagename">
							<option value="" disabled selected="selected">Select a Cloud Image to Remove</option>
							<?php 
								$files=glob("./images/clouds/*.{jpg,gif,png,jpeg,JPG,JPEG}", GLOB_BRACE);
								foreach($files as $file)   ////go through the imagefiles array. For each image do...
									{
										$filewithoutpath=substr($file, 16); //strip off the path
										echo"<option value=\"$file\">$filewithoutpath</option>";
										
									}
							?>
					<p><input type="submit" name="submitRemove" value="Remove Selected Cloud Image"></p>
				</fieldset>
			</form>
		</div>
		<div id="removefungiimageform">
			<form method="post" enctype="multipart/form-data" action="removeform.php" name="removefungiform" id="removefungiform" onsubmit="return validateSubmitRemoveFungi()">
				<fieldset>
					<legend><h3>Remove a Fungi Image</h3></legend>
						<select name="imagename" id="imagename">
							<option value="" disabled selected="selected">Select a Fungi Image to Remove</option>
							<?php 
								$files=glob("./images/fungi/*.{jpg,gif,png,jpeg,JPG,JPEG}", GLOB_BRACE);
								foreach($files as $file)   ////go through the imagefiles array. For each image do...
									{
										$filewithoutpath=substr($file, 15); //strip off the path
										echo"<option value=\"$file\">$filewithoutpath</option>";
										
									}
							?>
					<p><input type="submit" name="submitRemove" value="Remove Selected Fungi Image"></p>
				</fieldset>
			</form>
		</div>
		<div id="removeleavesimageform">
			<form method="post" enctype="multipart/form-data" action="removeform.php" name="removeleafform" id="removeleafform" onsubmit="return validateSubmitRemoveLeaf()">
				<fieldset>
					<legend><h3>Remove a Leaf Image</h3></legend>
						<select name="imagename" id="imagename">
							<option value="" disabled selected="selected">Select a Leaf Image to Remove</option>
							<?php 
								$files=glob("./images/leaves/*.{jpg,gif,png,jpeg,JPG,JPEG}", GLOB_BRACE);
								foreach($files as $file)   ////go through the imagefiles array. For each image do...
									{
										$filewithoutpath=substr($file, 16); //strip off the path
										echo"<option value=\"$file\">$filewithoutpath</option>";
										
									}
							?>
					<p><input type="submit" name="submitRemove" value="Remove Selected Leaf Image"></p>
				</fieldset>
			</form>
		</div>
		<div id="removerocksimageform">
			<form method="post" enctype="multipart/form-data" action="removeform.php" name="removerockform" id="removerockform" onsubmit="return validateSubmitRemoveRock()">
				<fieldset>
					<legend><h3>Remove a Rock Image</h3></legend>
						<select name="imagename" id="imagename">
							<option value="" disabled selected="selected">Select a Rock Image to Remove</option>
							<?php 
								$files=glob("./images/rocks/*.{jpg,gif,png,jpeg,JPG,JPEG}", GLOB_BRACE);
								foreach($files as $file)   ////go through the imagefiles array. For each image do...
									{
										$filewithoutpath=substr($file, 15); //strip off the path
										echo"<option value=\"$file\">$filewithoutpath</option>";
										
									}
							?>
					<p><input type="submit" name="submitRemove" value="Remove Selected Rock Image"></p>
				</fieldset>
			</form>
		</div>
		<div id="removeotherimageform">
			<form method="post" enctype="multipart/form-data" action="removeform.php" name="removeotherform" id="removeotherform" onsubmit="return validateSubmitRemoveOther()">
				<fieldset>
					<legend><h3>Remove a Shadow or Other Image</h3></legend>
						<select name="imagename" id="imagename">
							<option value="" disabled selected="selected">Select a Shadow or Other Image to Remove</option>
							<?php 
								$files=glob("./images/otherimages/*.{jpg,gif,png,jpeg,JPG,JPEG}", GLOB_BRACE);
								foreach($files as $file)   ////go through the imagefiles array. For each image do...
									{
										$filewithoutpath=substr($file, 21); //strip off the path
										echo"<option value=\"$file\">$filewithoutpath</option>";
										
									}
							?>
					<p><input type="submit" name="submitRemove" value="Remove Selected Image"></p>
				</fieldset>
			</form>
		</div>
		<div id="removefoodimageform">
			<form method="post" enctype="multipart/form-data" action="removeform.php" name="removefoodform" id="removefoodform" onsubmit="return validateSubmitRemoveFood()">
				<fieldset>
					<legend><h3>Remove a Food Image</h3></legend>
						<select name="imagename" id="imagename">
							<option value="" disabled selected="selected">Select a Food Image to Remove</option>
							<?php 
								$files=glob("./images/food/*.{jpg,gif,png,jpeg,JPG,JPEG}", GLOB_BRACE);
								foreach($files as $file)   ////go through the imagefiles array. For each image do...
									{
										$filewithoutpath=substr($file, 14); //strip off the path
										echo"<option value=\"$file\">$filewithoutpath</option>";
										
									}
							?>
					<p><input type="submit" name="submitRemove" value="Remove Selected Food Image"></p>
				</fieldset>
			</form>
		</div>
		<div id="removehiker">
			<form method="post" enctype="multipart/form-data" action="removehikerform.php" name="removehikerform" id="removehikerform" onsubmit="return validateRemoveHiker()">
				<fieldset>
					<legend><h3>Remove a Hike</h3></legend>
						<select name="imagename" id="imagename">
							<option value="" disabled selected="selected">Select a Hike to Remove</option>
							<?php 
								$files=glob("./images/hikersimages/*.{jpg,gif,png,jpeg,JPG,JPEG}", GLOB_BRACE);
								foreach($files as $file)   ////go through the imagefiles array. For each image do...
									{
										$filewithoutpath=substr($file, 22); //strip off the path
										echo"<option value=\"$file\">$filewithoutpath</option>";
										
									}
							?>
					<p><input type="submit" name="submitRemove" value="Remove Selected Hike"></p>
				</fieldset>
			</form>
		</div>
		<div id="recipeform">
			<form method="post" enctype="multipart/form-data" action="recipeform.php" name="recipeform" id="recipeform" onsubmit="return validateSubmitRecipe()">
				 <fieldset>
					<legend><h3>Insert a New Recipe</h3></legend>	
					<p>Recipe Name:</p>
						<input type="text" name="recipename" id="recipename" size="35" placeholder="enter the recipe name" />
					<p>Ingredients:</p>	
					<p>(precede each ingredient with a dash -)</p>
						<textarea  rows="10" cols="45" name="ingredients"   id="ingredients" ></textarea>
					<p>Directions:</p>
						<textarea rows="10" cols="45" name="directions" id="directions" ></textarea>
					<p>Image:</p>
						<select name="foodimage" id="foodimage">
							<option value="" disabled selected="selected">Please Choose an Image for Your Recipe</option>
							<?php 
								$files=glob("./images/food/*.{jpg,gif,png,jpeg,JPG,JPEG}", GLOB_BRACE);
								foreach($files as $file)   ////go through the imagefiles array. For each image do...
									{
										$filewithoutpath=substr($file, 14); //strip off the path
										echo"<option value=\"$file\">$filewithoutpath</option>";
									}
							?>
						<p><input type="submit" name="submit" value="Insert Recipe" ></p>
				</fieldset>
			</form>
		</div>
		<div id="hikersform">
			<form method="post" enctype="multipart/form-data" action="hikersform.php" name="hikersform" id="hikersform" onsubmit="return validateSubmitAHike()">
				 <fieldset>
					<legend><h3>Insert a Local Hike:</h3></legend>	
					<p>Hike Submitted by:</p>
						<input type="text" name="hikersname" id="hikersname" size="35" placeholder="enter the hiker's name" />
					<p>Name or Location of Hike:</p>
						<input type="text" name="where"   id="where" placeholder="enter the hike location"/>
					<p>Description:</p>
						<textarea rows="10" cols="45" name="description"   id="description"></textarea>
					<p>Image:(maximum file size is 500kb)</p>
						<input type="file" name="image" id="image" >
						<input type="hidden" name="MAX_FILE_SIZE" value="500000" />
						<p><input type="submit" name="submit" value="Insert Hike" ></p>
				</fieldset>
			</form>
		</div>

		<div id="recipeedit">
					<form method="post" enctype="multipart/form-data" action="recipeeditform.php" name="selectrecipe" id="selectrecipe">
						<fieldset>
							<legend><h3>Edit a Recipe:</h3></legend>	
							<select name="imagename" id="imagename">
								<option value=""  selected="selected">Select a recipe to Edit</option>
								<?php 
									$files=glob("./images/food/*.{txt}", GLOB_BRACE);
									foreach($files as $file)   ////go through the imagefiles array. For each image do...
										{
											$filetoshow=substr($file, 14); //strip off the path
											$filetoshow=substr($filetoshow,0, -4);   //strip off the .txt portion of the filetoshow. substr 1st arg is return starting point. 2nd arg is length. neg length starts from the end of the string. 
											echo"<option value=\"$file\">$filetoshow</option>";
										}
								?>
							</select>
							<p><input type="submit" name="submit" value="Edit Recipe" ></p>
						</fieldset>
					</form>
		</div>
		<?php
			
			if($_SERVER['REQUEST_METHOD'] == 'POST') 
				{
					if(isset($_FILES['readersimage']))   ///check to see if reader uploaded something. REMEMBER TO USE $_FILES not $_POST!
						{	
							$allowed=array('image/jpg', 'image/JPG', 'image/PNG', 'image/png', 'image/jpeg', 'image/gif','image/JPEG',);  //the allowed file types
							if(in_array($_FILES['readersimage']['type'], $allowed))  //validates file type
								{
									$readersname=$_POST['readersname'];
									$readerspostcontent=$_POST['readerspostcontent'];
									$error=1;   //declare flag var now and set it to 1 meaning an error exists
									$getname='';  //intialize the var here so you dont get an undefined var error message

											////move it from the temp folder to the readers image folder

									if(move_uploaded_file($_FILES['readersimage']['tmp_name'], "./images/readersimages/{$_FILES['readersimage']['name']}"))  
										//../ brings file into the readers image directory. 
										//Moves the file to the readersimages folder inside the images folder.
										{
											if($_FILES['readersimage']['error']>0)  //check for error codes. A 0 error code indicates no error
												{
													echo'<p class="error">The file could not be uploaded. Please try again.</p>';
													$error=1;   ///flag as error
												}
											else
												{
													$filepath ="./images/readersimages/{$_FILES['readersimage']['name']}"; 									
													$file=strtolower($_FILES['readersimage']['name']);
													$file=str_replace(' ', '', $file);
													function fn_resize($image_resource_id,$width,$height) 
														{
															$target_width =300;  //the ultimate width in px of the newly stored image
															$target_height =300;  //the ultimate height in px of the newly stored image
															$target_layer=imagecreatetruecolor($target_width,$target_height);  //target layer is needed for the next line to form the image
															imagecopyresampled($target_layer,$image_resource_id,0,0,0,0,$target_width,$target_height, $width,$height);  //takes the target layer, the resource id the ultimate width and height and the original width and height and builds a whole new image
															return $target_layer;
														}
													$source_properties = getimagesize($filepath);  //getimagesize returns 7 properties of the image. index 0 is width, 1 is height, 2 is type
																								//3 is height and width in string format. 
													$image_type = $source_properties[2]; //the 2 index in source properties is the type image from the getimagesize function
													if( $image_type == IMAGETYPE_JPEG ) //this creates the image, resizes it, and stores it in the readersimages folder
														{   
															$image_resource_id = imagecreatefromjpeg($filepath); //create an image and return an image identifier 
															$target_layer = fn_resize($image_resource_id,$source_properties[0],$source_properties[1]);  //gets the target layer from the resize function
															imagejpeg($target_layer, $filepath );  //uses the target layer to create a new jpeg image and save it the original file name
														}
													elseif( $image_type == IMAGETYPE_GIF )  
														{  
															$image_resource_id = imagecreatefromgif($filepath);
															$target_layer = fn_resize($image_resource_id,$source_properties[0],$source_properties[1]);
															imagegif($target_layer, $filepath );
														}
													elseif( $image_type == IMAGETYPE_PNG ) 
														{
															$image_resource_id = imagecreatefrompng($filepath); 
															$target_layer = fn_resize($image_resource_id,$source_properties[0],$source_properties[1]);
															imagepng($target_layer, $filepath );
														}
													
     												?><script type="text/javascript">alert("Eva, your portfolio image submission was successful!");</script>
													<?php
												}
											$filename=substr($file, 0,-4);  //the filename var is the name of the file minus the extension
											$textfile = "./images/readersimages/" . $filename . '.txt'; //The filename is the same as the image name + the extension .txt
											
											$datatowritetofile = "Submitted by $readersname. $readerspostcontent ". PHP_EOL; 
												// Write the readers name, and content to the new file created for each image. 
												//Use PHP_EOL to get a newline in the file.
											file_put_contents($textfile, $datatowritetofile, FILE_APPEND);  //1st arg is the file name to write to. 
															//2nd arg is the data to be written. 3rd arg means append data to the bottom of the file
											$textfile=rename($textfile, str_replace(' ', '', $textfile));  //gets rid of any spaces in the textfile name so the textfile name will be the same as the imagefile name used in readers pages. Used to read the file and load the figcaption
											$filepath=strtolower($filepath);
											$filepath=rename($filepath, str_replace(' ', '', $filepath));
										}
								}
							else  //if the file is not an approved image type
								{
									echo'<p class="error">Your image did not upload properly. Please upload a JPEG, jpg, jpeg, gif, or png type image.
										 Or check your file size. Maximum file size allowed is 500kb</p>';
										$error=1;  ///flag as error
								}
							if(file_exists($_FILES['readersimage']['tmp_name']) && is_file($_FILES['readersimage']['tmp_name']))  //make sure it exists and is a file not a folder
								{
									unlink($_FILES['readersimage']['tmp_name']);  //delete the temp file
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