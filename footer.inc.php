<footer>
	<div id="footerleft"><br /><br /><br /><br /><br />
		<img src="images/eva and others/evaicon.jpg" alt="photo of face in mushroom">
		<br /><br />
		<p><a href="mailto:eva@explorefacesinnature.com"></p>
		<p><B>Contact Eva via Email at </p>
		<p>eva@explorefacesinnature.com</p></B></a>
		<p>Or via the form on the right</p><br />
		<p style="font-size:.9em;"><b><a href="readerspages.inc.php">Share your nature photos here</p></b></a>
	</div>
	<?php
		if($_SERVER['REQUEST_METHOD']=='POST')
			{
				if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['comments']))
					{
						$email=$_POST['email'];
						$firstname=$_POST['firstname'];	
						$lastname=$_POST['lastname'];
						$message=$_POST['message'];
						$emailmessage="NAME:$firstname . ' ' .$lastname\n\nMessage:$message";
						htmlspecialchars($emailmessage, ENT_QUOTES);
						$message=wordwrap($emailmessage, 70, "\r\n");
						$subject='Contact Form Submission';
						$headers = 'From: Faces Web Contact Form Submission' . "\r\n";
						if(mail('kealeyeva@gmail.com', $subject, $emailmessage, $headers))
							{
								echo"<div id='contactForm'><p><em>Message sent successfully.</p>
									<p>Thank you for submitting the contact form.</p></em></div>";
							}
						else
							{
								echo"<div id='contactForm'>Message failed to send. Please try again.</div>";
							}
						$_POST=array();  //clear out the variables
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
					<input type="text" name="email" size="30" id="email" placeholder="Enter your email address">
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
			<p><a href="portfolio.inc.php">Portfolio</a></p>
			<p><a href="facesinfood.inc.php">Faces in Food</a></p>
			<p><a href="hiking.php">Local Hiking Routes</a></p>
			<p><a href="readerspages.inc.php">Readers' Pages</a></p>
			<p><a href="stories.inc.php">Creative Stories</a></p>
			<p><a href="thestoryofwendy.inc.php">The Story of Wendy</a></p>
			<p><a href="mushroomstory.inc.php">Mushroom's Story</a></p>
			<p><a href="bailey.inc.php">Bailey's Story</a></p>
			<br /><br />
			<p>&copy;2019 Explore Faces in Nature</p>
			<br />
			<!--p style="line-height:1.5em">CONNECT WITH US</p>
			<a href="http://www.facebook.com"><img src="images/facebookicon.jpg"></a>
			<a href="http://www.twitter.com"><img src="images/twittericon.jpg"></a-->
	</div>
	<div id="footercenterright"><img src="images/mushroomsmall.jpg" alt="photo of face in mushroom"height="100" width="100"></div>
</footer>