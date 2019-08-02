<?php
	
			if($_SERVER['REQUEST_METHOD'] == 'POST') 
				{
					if($_POST['recipename']!=='')   ///check to see if reader uploaded something. REMEMBER TO USE $_FILES not $_POST!
						{	
							$recipename=$_POST['recipename'] . "<br />";
							$recipename=ucwords($recipename);
							$ingredients=$_POST['ingredients'];
							$ingredients=nl2br($ingredients) . '<br />'; 
							$ingredients='Ingredients:<br />' . $ingredients;
							$directions=$_POST['directions'];
							$directions=nl2br($directions); 
							$directions='Directions:<br />' . $directions;
							$foodimage=$_POST['foodimage'];  //the food image name will be the name of the text file 
							$foodimagename=substr($foodimage, 14);
							$foodimagename=substr($foodimagename,0, -4); //get the substring. Start at the 0 position. Return all but the last 4 elements
							echo"the image name is $foodimagename <br />";
							$filename ="./images/food/$foodimagename.txt"; 	//the filename is the path to the food folder plus the name of the food it goes with plus .txt
							$datatowritetofile = $recipename . $ingredients . $directions . PHP_EOL; 
							echo"the filename is $filename";
							file_put_contents($filename, $datatowritetofile, FILE_APPEND);
							header("Location:evasform.inc.php?content=success");
							exit();
						}
					else
						{
							header("Location: evasform.inc.php?content=recipefailure"); //redirect back to the evasForm page and pass the var content so an error message displays
							exit();
						}
				}
		