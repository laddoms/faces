<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST') 
		{
			
			if(isset($_POST['recipeeditcontent']))   ///check to see if reader uploaded something. REMEMBER TO USE $_FILES not $_POST!
				{   

					$contents = $_POST['recipeeditcontent'];
					$filename=$_POST['filename'];
					file_put_contents($filename, $contents);
					header("Location:evasform.inc.php?content=success");
					exit();
				}
			else
				{
					echo"please fill out the edit form and submit it";
				}
		}