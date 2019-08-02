
						/*  get rid of all this after you get phpmailer working
						$message="NAME:$name\n\nComments:$postcontent\n\nTitle:$posttitle\n\nEmail Address:$readersemail\n\nImage:$image";
						htmlspecialchars($message, ENT_QUOTES);
						$message=wordwrap($message, 70, "\r\n");
						$subject='Faces Reader\'s Image Submission';
						$headers = 'From: Faces Web Image Submission Form' . "\r\n";
						if(mail('addoms@comcast.net', $subject, $message, $headers))
							{
								echo"<div id='readersPageForm'><p><em>Message sent successfully.</p>
								<p>Thank you for submitting your image.</p></em></div>";
							}
						else
							{
								echo"<div id='readersPageForm'>Message failed to send. Please try again.</div>";
							}*/   //get rid of the above remarked out old code if you get phpmailer to work
						//