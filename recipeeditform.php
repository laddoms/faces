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
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST') 
		{
			if(isset($_POST['imagename']))   ///check to see if reader uploaded something. REMEMBER TO USE $_FILES not $_POST!
				{   
					$filename=$_POST['imagename'];//the imagename is passed in via the evasform select list. 
					$filecontents=file_get_contents($filename); //read in the contents of the recipe text file. Store it in a var. 
					?>
					<form method="post" enctype="multipart/form-data" action="recipeeditsubmitform.php" name="recipeeditform" id="recipeeditform">
						<fieldset>
							<legend><h3>Edit the Recipe Here</h3></legend>	
							<h3>Precede Each Ingredient with a dash - </h3>
							
							<textarea  rows="15" cols="100" name="recipeeditcontent"   id="recipeeditcontent" >
								<?php
									echo$filecontents;
								?>
							</textarea>
							
							<?php echo"<input type=hidden name=filename value=$filename>"; ?>
							<p><input type="submit" name="submit" value="Edit Recipe" ></p>
						</fieldset>
						<?php
						
						
						
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