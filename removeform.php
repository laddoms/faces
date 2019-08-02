<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST') 
		{
			if(isset($_POST['imagename']))   ///check to see if reader uploaded something. REMEMBER TO USE $_FILES not $_POST!
				{
					$filetodelete=$_POST['imagename']; //get the file and path and store it in this var
					$position = strrpos($filetodelete, '/');  //find the position of the last slant
					$filename=substr($filetodelete, ($position+1));
					if(file_exists($filetodelete) && is_file($filetodelete))  //make sure it exists and is a file not a folder
						{
							$filetodelete=rename($filetodelete, "./images/deletedphotos/$filename"); /// brings file to the deleted photos repository 
							header("Location:evasform.inc.php?content=success");
							exit();
						}
							
				}
			else  //if the file did not delete
						{
							exit();
						}
		}
?>
					
											