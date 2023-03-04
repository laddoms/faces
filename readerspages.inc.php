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
	<?php include('header.inc.php');
		//include("PHPMailer.php");
	?>
<div id="wrapper" >

		<div id="readersPage">
			<!--img src="images/hikingchick21small.jpg" alt="photo of Eva and friends on a mountain ledge" id="hikingchick21small"-->
			<?php
						
					
	
										/////Display the images and figcaption/////

							echo "<div id=\"slider9title\"><h2>Our Readers' Photos</h2></div>";
							
							function getalttext($filesinfolder)   ////make sure this is not in a loop. If you put this function in a loop php will try to declare it over and over with an error
								{   //this function is only used if there is alternative text stored with the files.
									$textfile = file_get_contents( $filesinfolder);
									$findthis   = 'Alternative Text: ';
									$pos = strpos($textfile, $findthis);
									$alttext = file_get_contents($filesinfolder, NULL, NULL, 58);
									return $alttext;
								}
							
							
						echo"<div class=\"slider9\">";
							
								/*this whole piece of code captures the text file data containing the reader's name and content of the image. And then displays it as a figure		
								caption for each image in the folder. */
						
								$txtfiles=glob("./images/readersimages/*.txt"); //create array of all the text files in the folder
								$imagefiles=glob("./images/readersimages/*.{jpg,gif,png,jpeg,JPG,JPEG,PNG, GIF}", GLOB_BRACE);  //create an array of all the image files in the folder
								
								
								function getFileName(&$files)
									{
										$files=substr($files, 23);  //take off the 1st 23 chars which is the file path
										$dotposition=strpos($files, '.'); ///find the position of the dot
										$files=substr($files, 0, $dotposition);  //return the file name up to the dot
									
									}
								array_walk($txtfiles, 'getFileName'); 

								array_walk($imagefiles, 'getFileName');
								
								
								foreach(glob("./images/readersimages/*.{jpg,gif,png,jpeg,JPG,JPEG}", GLOB_BRACE) as $file)  //this changes each image file in the folder to jpgs. We use the file 'readersimages' since those are the approved images after eva gets the email submission from the reader and inserts the readers file into the readersimages folder
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
											$textfile="./images/readersimages/$txtfiles[$key].txt";  //this assigns the path and filename to the variable 'textfile'
											$figcaption=file_get_contents($textfile);  //this reads the textfile above and stores the data in figcaption variable
											echo"<figure><img src=\"./images/readersimages/$image.jpg\"><figcaption>$figcaption</figcaption></figure>";  //this is how you can 
															//go through the folder and display the image using the variable from the truncated array.
															//the figcaption is the data from the text file read in line 32. This displays the text file with the matching image file
										}
										
								?>
								</div>

							<?php echo"<div class=\"slider11\">";  


									////  this whole div is for cell phone size page only. It will not appear in full size screens...
									/////  This done so cell phone size pages only show 1 slide at a time. 

								/*this whole piece of code captures the text file data containing the reader's name and content of the image. And then displays it as a figure		
								caption for each image in the folder. */
						
								$txtfiles=glob("./images/readersimages/*.txt"); //create array of all the text files in the folder
								$imagefiles=glob("./images/readersimages/*.{jpg,gif,png,jpeg,JPG,JPEG}", GLOB_BRACE);  //create an array of all the image files in the folder
								
								
								function getFileName1(&$files)
									{
										$files=substr($files, 23);  //take off the 1st 23 chars which is the file path
										$dotposition=strpos($files, '.'); ///find the position of the dot
										$files=substr($files, 0, $dotposition);  //return the file name up to the dot
									
									}
								array_walk($txtfiles, 'getFileName1'); 

								array_walk($imagefiles, 'getFileName1');
								
								
								foreach(glob("./images/readersimages/*.{jpg,gif,png,jpeg,JPG,JPEG}", GLOB_BRACE) as $file)  //this changes each image file in the folder to jpgs. We use the file 'readersimages' since those are the approved images after eva gets the email submission from the reader and inserts the readers file into the readersimages folder
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
											$textfile="./images/readersimages/$txtfiles[$key].txt";  //this assigns the path and filename to the variable 'textfile'
											$figcaption=file_get_contents($textfile);  //this reads the textfile above and stores the data in figcaption variable
											echo"<figure><img src=\"./images/readersimages/$image.jpg\"><figcaption>$figcaption</figcaption></figure>";  //this is how you can 
															//go through the folder and display the image using the variable from the truncated array.
															//the figcaption is the data from the text file read in line 32. This displays the text file with the matching image file
										}
										
								?>
								</div>
				<div id="readersPageP">
					<h2>Submit Your Own Face in Nature Photo</h2>	
					<p>
						You too can have fun with faces in nature.<br />
						Submit your photo with a description<br />
						After your submission has been approved <br />
					    it will appear here in our reader's pages.
					</p>
				</div>
				<?php if(isset($_GET['content']) && ($_GET['content']=='success'))
					{
						echo"<script type=text/javascript>alert(\"Thank you for submitting a photo. It will be sent to Eva for approval.\")</script>"; 
					}
				?>
				<div id="readersPageForm">
					<form method="post" enctype="multipart/form-data" action="readerspages.inc.php" name="readersForm" id="readersForm" onsubmit="return validateSubmitReaders()">
						<fieldset>
							<legend><h3>Submit a Photo With Description</h3></legend>	
							<p>Name:</p>
							<p>
								<input type="text" autofocus size="30" name="name" id="name" placeholder="Enter Your Name" value="<?php if(isset($_POST['name']))echo $_POST['name'];?>">
							</p>
							<p>Email:</p>
							<p><input type="text" size="30" name="readersemail" id="readersemail" placeholder="Enter Your Email Address" value="<?php if(isset($_POST['readersemail']))echo $_POST['readersemail'];?>">
							<p>Description of Your Photo:</p>
							<textarea rows="5" cols="25" name="postcontent" id="postcontent"></textarea>
							<input type="hidden" name="MAX_FILE_SIZE" value="500000" />
							<h3>Image:(maximum file size is 500kb) <input type="file" name="image" id="image" ></h3>
							<p><input type="submit" name="submit" value="Submit" ></p>
							<input type="hidden" name="contact" value="contactus">  
						</fieldset>
					</form>
				</div>
			<div id="readerssubmissions">
			<?php
			
			use PHPMailer\PHPMailer\PHPMailer;
			use PHPMailer\PHPMailer\Exception;
							/////get all the information from the POST/////
				if($_SERVER['REQUEST_METHOD'] == 'POST') 
					{
						if(isset($_POST['readersemail']) && isset($_POST['name']) && isset($_POST['postcontent']) && isset($_FILES['image']))
							{
								$readersemail=$_POST['readersemail'];
								//$name=$_POST['name'];
								$error=1;   //declare flag var now and set it to 1 meaning an error exists
								$getname='';  //intialize the var here so you dont get an undefined var error message
							}
								if(isset($_FILES['image']))   ///check to see if reader uploaded something
									{
									$allowed=array('image/JPEG', 'image/JPG', 'image/PNG', 'image/png', 'image/jpeg', 'image/gif', 'image/jpg');  //the allowed file types
									if(in_array($_FILES['image']['type'], $allowed))  //validates file type
										{
											if(move_uploaded_file($_FILES['image']['tmp_name'], "./images/readerssubmissions/{$_FILES['image']['name']}"))  
												//../ brings file into current directory. this has to be changed on the live site to a folder
												//that exists.
												//Moves the file to the readerssubmissions folder inside the images folder.
												{
													if($_FILES['image']['error']>0)  //check for error codes. A 0 error code indicates no error
														{
															echo'<p class="error">The file could not be uploaded. Please try again.</p>';
															$error=1;   ///flag as error
														}
													else
														{
															rename("./images/readerssubmissions/{$_FILES['image']['name']}", "./images/readerssubmissions/$name.{$_FILES['image']['name']}");
																	//function rename returns boolean
															$getname="../faces/images/readerssubmissions/$name.{$_FILES['image']['name']}";
															//$error=0;  //flag as no error
															if(filter_var($readersemail, FILTER_VALIDATE_EMAIL)) 
																{
																	$validatedreadersemail = $_POST['readersemail'];  ///store the readers email address is a var called validatedreadersemail
																	$error=0;   ////flag as no error
																}
															else
																{
																	echo("<p class=\"error\">$readersemail is not a valid email address. Please enter a valid email address.</p>");
																	$error=1;   ///flag as error;
																}
														}
												} 
										}
								else  //if the file is not an approved image type
									{
										echo'<p class="error">Your image did not upload properly. Please upload a JPEG, jpg, jpeg, gif, or png type image.
											 Or check your file size. Maximum file size allowed is 500kb</p>';
											$error=1;  ///flag as error
									}
							}
						if(file_exists($_FILES['image']['tmp_name']) && is_file($_FILES['image']['tmp_name']))
							{
								unlink($_FILES['image']['tmp_name']);  //delete the temp file
							}
								
											/////set up the email send ///////////

						$name=$_POST['name'];
						$postcontent=$_POST['postcontent'];
						$postcontent=htmlspecialchars($postcontent);
						if($error===0)  ///if no errors from above exist send the email to Eva
							{
								$email = new PHPMailer();  ///instantiate a new instance of the phpmailer class
								$email->From      = $validatedreadersemail;   //this has to be in the form of an email address. Add a php email filter to validation.
								$email->FromName  = $name;   ///the from line is a submission from the Readers Pages
								$email->Subject   = 'Image Submitted from a Explore Faces in Nature Reader';   ///subject of the email
								$email->Body      = $postcontent;           //this is ok as a variable
								$email->AddAddress( 'eva@explorefacesinnature.com' );  //this is the 'to' address. Change this to eva's address.
								$file_to_attach = $getname;   ////this has to be path to image. 
								$email->AddAttachment( $file_to_attach , 'Reader\'s Image Submission' );   ///1st arg is the file. 2nd arg is the file name
								if( $email->Send())   ////sends the email
									{
										echo"<script type=\"text/javascript\">alert(\"Your image submission was successful. It will be sent to Eva for approval.\")</script>";
										$_POST=array();
										var_dump($_POST);
										header("Location:readerspages.inc.php?content=success");
									}
								else
									{
										echo'<p class="error">Message failed to send. Please try again.</p>';
									}
							}
					}	?>	
			</div>
		</div>
	</div>
</body>
<?php include('footer.inc.php'); ?>

<script src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
     <script>
		  $('.slider9').slick({
		   infinite: true,
			slidesToScroll: 1,
			slidesToShow: 3
		  });
      </script>
	<script>
		  $('.slider11').slick({
		   infinite: true,
			slidesToScroll: 1,
			slidesToShow: 1
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