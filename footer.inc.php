<footer>
	<div id="footerleft"><br /><br /><br /><br /><br />
		<img src="images/evaicon.jpg" alt="photo of eva">
		<br /><br />
		<p><a href="mailto:eva@explorefacesinnature.com"></p>
		<p><B>Contact Eva via Email at </p>
		<p>eva@explorefacesinnature.com</p></B></a>
		<p>Or via the form</p><br />
		<p><b><a href="readerspages.inc.php">Share your nature photos here</p></b></a>
	</div>
	<?php
		/*require('PHPMailer.php');
		require('Exception.php');*/
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;
		if($_SERVER['REQUEST_METHOD']=='POST')
			{
				if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['message']))
					{
						$error=1;   //declare flag var now and set it to 1 meaning an error exists
						$email=$_POST['email'];
						$firstname=$_POST['firstname'];	
						$lastname=$_POST['lastname'];
						$message=$_POST['message'];
						$message=htmlspecialchars($message);
						$emailmessage="NAME:$firstname $lastname\n\nMessage:$message";
						if(filter_var($email, FILTER_VALIDATE_EMAIL)) 
							{
								$validatedreadersemail = $_POST['email'];  ///store the readers email address is a var called validatedreadersemail
								$error=0;   ////flag as no error
							}
						else
							{
								echo"<script type=text/javascript>alert(\"enter a valid email address.\")</script>"; 
								$error=1;   ///flag as error;
								$validatedreadersemail='';
							}
						if($error===0)  ///if no errors from above exist send the email to Laurie
							{
								$email = new PHPMailer();  ///instantiate a new instance of the phpmailer class
								$email->From      = $validatedreadersemail;   //this has to be in the form of an email address. Add a php email filter to validation.
								$email->FromName  = $firstname . $lastname;   ///the from line is a submission from the Readers Pages
								$email->Subject   = 'Submission from a Faces in Nature Reader';   ///subject of the email
								$email->Body      = $emailmessage;           //this is ok as a variable
								$email->AddAddress( 'eva@explorefacesinnature.com' );  //this is the 'to' address.
								if($email->Send())   ////sends the email
									{
										$_POST=array();
										echo"<script type=text/javascript>alert(\"Thank you for contacting Eva.\")</script>"; 
									}
								else
									{
										echo"<script type=text/javascript>alert(\"Your message did not send. Please try again.\")</script>"; 
									}
							 }
						 else	
							 {
								echo"<script type=text/javascript>alert(\" NOT valid email address.\")</script>"; 
							 }
					}
				
						
			}
	?>	
	<form method="post" name="footerForm" id="footerForm" onsubmit="return validateSubmit()">
			<div id="footercenter">
				<p>First Name:</p>
				<p>
					<input type="text" size="22" name="firstname" id="firstname" placeholder="Enter your first name">
				</p>
				<p>Last Name:</p>
				<p>
					<input type="text" size="22" name="lastname" id="lastname" placeholder="Enter your last name">
				</p>
				<p>Email Address:</p>
				<p>
					<input type="text" name="email" size="27" id="email" placeholder="Enter your email address">
				</p>
				<p>Message:</p>
				<p>
					<textarea rows="5" cols="27" name="message" id="message" placeholder="Enter your message"></textarea>
					<input type="submit" name="submit" value="Contact Us" >
				</p>
				<input type="hidden" name="contact" value="contactus">  
			</div>
		</form>
		<script src="js/jsfunctions.js"></script> 
	<div id="footerright">
			<p style="margin-left:3px;"><b>SITE MAP</p></b>
			<p><a href="index.php">Home</a></p>
			<p><a href="donna.php">Meet Donna</a></p>
			<p><a href="portfolio.inc.php">Portfolio</a></p>
			<p><a href="facesinfood.inc.php">Faces in Food</a></p>
			<p><a href="hiking.php">Local Hiking Routes</a></p>
			<p><a href="readerspages.inc.php">Readers' Photos</a></p>
			<p><a href="book.inc.php">Books</a></p>
			<p><a href="stories.inc.php">Creative Stories</a></p>
			<p><a href="thestoryofwendy.inc.php">The Story of Wendy</a></p>
			<p><a href="mushroomstory.inc.php">Fred the Mushroom</a></p>
			<p><a href="bailey.inc.php">Bailey's New Beginning</a></p>
			<p><a href="contact.inc.php">Contact</a></p>
			
			<p>&copy;2020 Explore Faces in Nature</p>
			<br />
			<!--p style="line-height:1.5em">CONNECT WITH US</p>
			<a href="http://www.facebook.com"><img src="images/facebookicon.jpg"></a>
			<a href="http://www.twitter.com"><img src="images/twittericon.jpg"></a-->
	</div>
	<div id="footercenterright"><img src="images/mushroomsmall.jpg" alt="photo of face in mushroom"height="100" width="100"></div>
</footer>