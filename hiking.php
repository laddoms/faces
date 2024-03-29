<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
		<html lang="en">
		<meta name="description" content="Explore faces in nature. Images of nature, rocks, mountains, clouds, leaves, trees, fungi, shadows, and
		other things that have hidden faces in them" />
		<meta name="keywords" content="Faces in nature. Images of mountains, rocks, trees, leaves, faces, clouds, fungi, shadows, snow. Nature
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
<body>
<?php include('header.inc.php'); ?>
<div id="wrapper">	
<div id="hikingpage">	<img src="images/hikingchick21small.jpg" alt="panorama of a ridgeline" id="hikingchick21smallImg">
	<div id="hikingleft">


		<?php if(isset($_GET['content']) && ($_GET['content']=='success'))
				{
					echo"<script type=text/javascript>alert(\"Thank you for submitting a hike. It will be sent to Eva for approval.\")</script>"; 
				}
		
		?>
			<form method="post" enctype="multipart/form-data" action="hiking.php" name="hikingForm" id="hikingForm" onsubmit="return validateSubmitHiking()" >
				<fieldset>
						<legend><h3>Submit Your Own Favorite Hikes</h3></legend>	
						<p>Name:</p>
							<p><input type="text" autofocus size="25" name="name" id="name" placeholder="Enter Your Name" value="<?php if(isset($_POST['name']))echo $_POST['name'];?>">
						</p>
						<p>Email:</p>
							<p><input type="text" size="25" name="hikersemail" id="hikersemail" placeholder="Enter Your Email Address" value="<?php if(isset($_POST['hikersemail']))echo $_POST['hikersemail'];?>">
						</p>
						<p>Hike Location:</p>
							<p><input type="text" size="25" name="location" id="location" placeholder="Enter The Location of Your Hike" value="<?php if(isset($_POST['location']))echo $_POST['location'];?>">
						</p>
						<p>Description of Your Hike:</p>
						<textarea rows="7" cols="30" name="description" id="description"></textarea>
						<input type="hidden" name="MAX_FILE_SIZE" value="500000" />
						<h3>Image:(maximum file size is 500kb) <input type="file" name="image" id="image" ></h3>
						<p><input type="submit" name="submit" value="Submit" ></p>
						<input type="hidden" name="contact" value="Submit">  
					</fieldset>
			</form>
	</div>
			<?php
				//require('PHPMailer.php');
				//require('Exception.php');
				use PHPMailer\PHPMailer\PHPMailer;
				use PHPMailer\PHPMailer\Exception;


							/////get all the information from the POST/////


				if($_SERVER['REQUEST_METHOD'] == 'POST') 
					{
						$hikersemail=$_POST['hikersemail'];
						$name=$_POST['name'];
						$error=1;   //declare flag var now and set it to 1 meaning an error exists
						$getname='';  //intialize the var here so you dont get an undefined var error message
						if(isset($_FILES['image']))   ///check to see if reader uploaded something
							{
								$allowed=array('image/JPEG', 'image/JPG', 'image/PNG', 'image/png', 'image/jpeg', 'image/gif', 'image/jpg');  //the allowed file types
								if(in_array($_FILES['image']['type'], $allowed))  //validates file type
									{
										if(move_uploaded_file($_FILES['image']['tmp_name'], "./images/hikerssubmissions/{$_FILES['image']['name']}"))  
											//../ brings file into current directory. this has to be changed on the live site to a folder
											//that exists. Remember to create the new folders on the live site (hikerssubmissions and hikersimages).
											//Moves the file to the hikerssubmissions folder inside the images folder. Hikerssubmissions is only a holding folder until eva approves the submission
											{
												if($_FILES['image']['error']>0)  //check for error codes. A 0 error code indicates no error
													{
														echo"<script type=text/javascript>alert(\"The file could not be uploaded. Please try again.\")</script>"; 
														$error=1;   ///flag as error
													}
												else
													{
														rename("./images/hikerssubmissions/{$_FILES['image']['name']}", "./images/hikerssubmissions/$name.{$_FILES['image']['name']}");
																//function rename returns boolean
														$getname="./images/hikerssubmissions/$name.{$_FILES['image']['name']}";
														//$error=0;  //flag as no error
														if(filter_var($hikersemail, FILTER_VALIDATE_EMAIL)) 
															{
																$validatedhikersemail = $_POST['hikersemail'];  ///store the hikers email address is a var called validatedhikersemail
																$error=0;   ////flag as no error
															}
														else
															{
																echo"<script type=text/javascript>alert(\"Please enter a valid email address.\")</script>"; 
																$error=1;   ///flag as error;
															}
													}
											} 
									}
								else  //if the file is not an approved image type
									{
										echo"<script type=text/javascript>alert(\"Your image did not upload properly. Please upload a JPEG, jpg, jpeg, gif, or png type image.
											 Or check your file size. Maximum file size allowed is 500kb.\")</script>"; 
											$error=1;  ///flag as error
									}
							}
						if(file_exists($_FILES['image']['tmp_name']) && is_file($_FILES['image']['tmp_name']))
							{
								unlink($_FILES['image']['tmp_name']);  //delete the temp file
							}
								
											/////set up the email send ///////////

						$name=$_POST['name'];
						$description=$_POST['description'];
						$location=$_POST['location'];
						$description=htmlspecialchars($description);
						if($error===0)  ///if no errors from above exist send the email to Eva
							{
								$email = new PHPMailer();  ///instantiate a new instance of the phpmailer class
								$email->From      = $validatedhikersemail;   //this has to be in the form of an email address. Add a php email filter to validation.
								$email->FromName  = $name;   ///the from line is a submission from the hikers Pages
								$email->Subject   = 'Hike Submitted from a Explore Faces in Nature Hiker';   ///subject of the email
								$email->Body      = $description . $location;           //this is ok as a variable
								$email->AddAddress( 'eva@explorefacesinnature.com' );  //this is the 'to' address. Remember to change this to evas email address!
								$file_to_attach = $getname;   ////this has to be path to image. see this var above.
								$email->AddAttachment( $file_to_attach , 'Hiker\'s Image Submission' );   ///1st arg is the file. 2nd arg is the file name
								if( $email->Send())   ////sends the email
									{
										echo"<script type=\"text/javascript\">alert(\"Your hike submission was successful. It will be sent to Eva for approval.\")</script>";
										$_POST=array();
										//var_dump($_POST);
										//header("Location:hiking.php?content=success");
									}
								else
									{
										echo"<script type=text/javascript>alert(\"The message failed to send. Please try again.\")</script>"; 
									}
							}
						else	
							{
								echo"<script type=text/javascript>alert(\"The message failed to send. Please try again.\")</script>"; 
							}
					}
	
										/////Display the images and figcaption/////


					/*this whole piece of code captures the text file data containing the reader's name and content of the image. And then displays it as a figure		
					caption for each image in the folder. */

					$txtfiles=glob("./images/hikersimages/*.txt"); //create array of all the text files in the folder. The folder 'hikersimages' is used to store already approved submissions. Not yet approved submissions are stored in the folder 'hikerssubmissions'. Eva must first approve of the image then insert it into the hikersimages folder via evasform.php
					$imagefiles=glob("./images/hikersimages/*.{jpg,gif,png,jpeg,JPG,JPEG}", GLOB_BRACE);  //create an array of all the image files in the folder
								
					function getTextFileName(&$txtfiles)  //use & here so it works by reference and actually changes the values
						{
							$txtfiles=substr($txtfiles, 22);  //take off the 1st 22 chars which is the file path
							$dotposition=strpos($txtfiles, '.'); ///find the position of the dot
							$txtfiles=substr($txtfiles, 0, $dotposition);  //return the file name up to the dot
						}
							
					function getImageFileName(&$imagefiles)  //use & here so it works by reference and actually changes the values
						{
							$imagefiles=substr($imagefiles, 22);  //take off the 1st 22 chars which is the file path
							$dotposition=strpos($imagefiles, '.'); ///find the position of the dot
							$imagefiles=substr($imagefiles, 0, $dotposition);  //return the file name up to the dot
						}
								
					array_walk($txtfiles, 'getTextFileName');  //array walk applies the getTextFileName function to each element of the array and returns the new array
					array_walk($imagefiles, 'getImageFileName');
					foreach(glob("./images/hikersimages/*.{jpg,gif,png,jpeg,JPG,JPEG}", GLOB_BRACE) as $file)  //this changes each image file in the folder to jpgs
						{
							$new_extension='jpg';  //the new extension
							$newfile=substr($file, 0, -strlen(pathinfo($file, PATHINFO_EXTENSION))).$new_extension;  //get the current extension change it to the new extension (jpg). Save it to var newfile
							rename($file, $newfile);  //now rename it to the new filename
						}
		
		
		echo"<div id=\"hikingright\">";
			echo"<h2>Local Hikes Submitted by our Readers</h2><br />";
			foreach($imagefiles as $image)   ////go through the imagefiles array. For each image do...
				{
					$key=array_search($image, $txtfiles);   //this goes through the text files array and searches for the matching image file name. It returns the key to that file. 
					$textfile="./images/hikersimages/$txtfiles[$key].txt";  //this assigns the path and filename to the variable 'textfile'
					$figcaption=ucwords($txtfiles[$key]);
					echo"<a href=\"/readerhikes.php?content=$txtfiles[$key]&image=$image\"><figure><img src=\"./images/hikersimages/$image.jpg\" width=\"290\" height=\"180\"><figcaption>$figcaption</figcaption></figure></a>";  
						//this is how you can go through the folder and display the image using the variable from the truncated array.
						//the figcaption is the data from the text file read in line 32. This displays the text file with the matching image file
				}
				?>
		</div>
	</div>
		

</div>

</body>

	<?php include('footer.inc.php'); ?>



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