function validateSubmit()
	{
		var err=0;

		var firstname = document.getElementById("firstname").value;
		var lastname =  document.getElementById("lastname").value;
		var email =  document.getElementById("email").value;
		var message =  document.getElementById("message").value;
		if (document.footerForm.firstname.value=="") 
			{	
				err=1;
				alert( "Please enter your first name" );
			}
		if (document.footerForm.lastname.value=="")
			{
				err=1;
				alert( "Please enter your last name" );
			}
		if(document.getElementById('email').value==0) 
			{
				err=1;
				alert("please provide your email address");
			}  
		if( document.footerForm.message.value == "" )
			{
				alert( "Please provide a message" );
				err=1;
			}  
		if (err==0) 
			{
				var alertMessage = "Please Confirm: First Name: " + firstname + "\nLast Name: " + lastname +  "\nEmail Address: "
				+ email + "\nMessage: " + message;
				if(confirm(alertMessage)==true)
					{
						alert("Thank you for contacting us on " + Date());
						firstname=undefined;
						//document.getElementById("footerForm").reset(); 
					}	
				else 	
					{
						alert("Ok. Please edit the form fields.");
						document.getElementById('firstname').value='Some Value';
					}
				return true;
			} 
	}
function validateSubmitReaders()
	{
		var err=0;

		if (document.readersForm.name.value=="") 
			{	
				err=1;
				alert( "Please enter your name" );
			}

		if( document.readersForm.readersemail.value == "" )
			{
				alert( "Please provide your email address" );
				err=1;
			}  
		if(document.readersForm.postcontent.value == "")
			{
				alert( "Please enter the reader's post content" );
				err=1;
			}  
		if(document.getElementById("image").value == "")
			{
				alert("Please select an image to submit. For all other communications please use the contact me form in the footer or email Eva.");
				err=1;
			}
	

		if(err==0) 
			{   
				var name = document.getElementById("name").value;
				var readersemail =  document.getElementById("readersemail").value;
				var postcontent =  document.getElementById("postcontent").value;	
				var image = document.getElementById("image").value;
				var filepath = image;  //gets the path to the file
				var filenameWithExtension = filepath.replace(/^.*[\\\/]/, '');  //uses reg expression to get rid of any information before the filename
				var alertMessage = "Please Confirm: Name: " + name + "\nEmail Address: "+ readersemail + "\nPost Content:" + postcontent
									+ "\nImage:" + filenameWithExtension;
				var answer = confirm(alertMessage);  //display a confirm box with the alert message built above
				if(answer)  //if the user selects 'ok'
					{
						alert("Thank you for contacting us on " + Date());  //display a thank you message and a date/time stamp
						
						return true;  //end the function here
					}
				else 	
					{
						alert("Ok. Please edit the form fields.");
						
						return false; 
					}
			} 
		 //document.getElementById("readersForm").reset();
	}
function validateSubmitEvas()
	{
		var err=0;

		if (document.evasform.readersname.value=="") 
			{	
				err=1;
				alert( "Please enter the reader's name" );
			}

		if(document.evasform.readerspostcontent.value == "")
			{
				alert( "Please enter the reader's post content" );
				err=1;
			}  
		
		if(document.evasform.readersimage.value == "")
			{
				alert("Please select a reader's image.");
				err=1;
			}
		if(err==0) 
			{   
				var readersname = document.getElementById("readersname").value;
				var readerspostcontent =  document.getElementById("readerspostcontent").value;
				var readersimage = document.getElementById("readersimage").value;
				var filepath = readersimage;  //gets the path to the file
				var filenameWithExtension = filepath.replace(/^.*[\\\/]/, '');  //uses reg expression to get rid of any information before the filename
				var alertMessage = "Please Confirm:  Reader's Name: " + readersname + "\nReader's Post Content: " + readerspostcontent +  "\nImage:" + filenameWithExtension;
				var answer = confirm(alertMessage);  //display a confirm box with the alert message built above
				if(answer)  //if the user selects 'ok'
					{
						//alert("Thank you for contacting us on " + Date());  //display a thank you message and a date/time stamp
						//document.getElementById("readersForm").reset();   //clear out the form fields
						return true;  //end the function here
					}
				else 	
					{
						alert("Ok. Please edit the form fields.");
						//document.getElementById('name').value='Some Value';
						return false; 
					}
				//console.log(filenameWithExtension); this isnt working for some reason
				return true;
			} 
	}

function validateSubmitPortfolio()
	{
		var err=0;

		if ((document.portfolioform.portfoliosection.value=="") || (document.portfolioform.portfoliosection.value=="Select the section for the image"))
			{	
				err=1;
				alert( "Please select a portfolio section" );
			}

		if(document.portfolioform.portfolioimage.value == "")
			{
				alert( "Please select an image" );
				err=1;
			}  
		
		if(err==0) 
			{   
				var portfoliosection = document.getElementById("portfoliosection").value;
				var portfolioimage =  document.getElementById("portfolioimage").value;
				var filepath = portfolioimage;  //gets the path to the file
				var filenameWithExtension = filepath.replace(/^.*[\\\/]/, '');  //uses reg expression to get rid of any information before the filename
				var alertMessage = "Please Confirm:  Portfolio Section: " + portfoliosection + "\nImage:" + filenameWithExtension;
				var answer = confirm(alertMessage);  //display a confirm box with the alert message built above
				if(answer)  //if the user selects 'ok'
					{
						return true;  //end the function here
					}
				else 	
					{
						alert("Ok. Please edit the form fields.");
						return false; 
					}
				return true;
			} 
	}

function validateSubmitRemoveRock()
	{
		var err=0;

		if (document.removerockform.imagename.value=='') //uses jquery to see if any of the radio buttons are selected. 
			{
				err=1;
				alert( "Please select an image to remove" );
				return false; 
			}
		if(err==0) 
			{   
				var imagename =  document.removerockform.imagename.value;   //use querySelector to get the value of a radio button
				var filepath = imagename;  //gets the path to the file
				var filenameWithExtension = filepath.replace(/^.*[\\\/]/, ''); //uses reg expression to get rid of any information before the filename
				var alertMessage = "Please Confirm:  Image Name: " + filenameWithExtension;
				var answer = confirm(alertMessage);  //display a confirm box with the alert message built above
				if(answer)  //if the user selects 'ok'
					{
						return true;  //end the function here
					}
				else 	
					{
						alert("Ok. Please chose an image to remove.");
						return false; 
					}
				//return true;
			}
	}
function validateSubmitMountainRemove()
	{
		var err=0;

		if (document.removemountainform.imagename.value=='') //uses jquery to see if any of the radio buttons are selected. 
			{
				err=1;
				alert( "Please select an image to remove" );
				return false; 
			}
		if(err==0) 
			{   
				var imagename =  document.removemountainform.imagename.value;   //use querySelector to get the value of a radio button
				var filepath = imagename;  //gets the path to the file
				var filenameWithExtension = filepath.replace(/^.*[\\\/]/, ''); //uses reg expression to get rid of any information before the filename
				var alertMessage = "Please Confirm:  Image Name: " + filenameWithExtension;
				var answer = confirm(alertMessage);  //display a confirm box with the alert message built above
				if(answer)  //if the user selects 'ok'
					{
						return true;  //end the function here
					}
				else 	
					{
						alert("Ok. Please chose an image to remove.");
						return false; 
					}
				//return true;
			}
	}
function validateSubmitRemoveCloud()
	{
		var err=0;

		if (document.removecloudform.imagename.value=='') //uses jquery to see if any of the radio buttons are selected. 
			{
				err=1;
				alert( "Please select an image to remove" );
				return false; 
			}
		if(err==0) 
			{   
				var imagename =  document.removecloudform.imagename.value;   //use querySelector to get the value of a radio button
				var filepath = imagename;  //gets the path to the file
				var filenameWithExtension = filepath.replace(/^.*[\\\/]/, ''); //uses reg expression to get rid of any information before the filename
				var alertMessage = "Please Confirm:  Image Name: " + filenameWithExtension;
				var answer = confirm(alertMessage);  //display a confirm box with the alert message built above
				if(answer)  //if the user selects 'ok'
					{
						return true;  //end the function here
					}
				else 	
					{
						alert("Ok. Please chose an image to remove.");
						return false; 
					}
				//return true;
			}
	}
function validateSubmitRemoveFungi()
	{
		var err=0;

		if (document.removefungiform.imagename.value=='') //uses jquery to see if any of the radio buttons are selected. 
			{
				err=1;
				alert( "Please select an image to remove" );
				return false; 
			}
		if(err==0) 
			{   
				var imagename =  document.removefungiform.imagename.value;   //use querySelector to get the value of a radio button
				var filepath = imagename;  //gets the path to the file
				var filenameWithExtension = filepath.replace(/^.*[\\\/]/, ''); //uses reg expression to get rid of any information before the filename
				var alertMessage = "Please Confirm:  Image Name: " + filenameWithExtension;
				var answer = confirm(alertMessage);  //display a confirm box with the alert message built above
				if(answer)  //if the user selects 'ok'
					{
						return true;  //end the function here
					}
				else 	
					{
						alert("Ok. Please chose an image to remove.");
						return false; 
					}
				//return true;
			}
	}
function validateSubmitRemoveLeaf()
	{
		var err=0;

		if (document.removeleafform.imagename.value=='') //uses jquery to see if any of the radio buttons are selected. 
			{
				err=1;
				alert( "Please select an image to remove" );
				return false; 
			}
		if(err==0) 
			{   
				var imagename =  document.removeleafform.imagename.value;   //use querySelector to get the value of a radio button
				var filepath = imagename;  //gets the path to the file
				var filenameWithExtension = filepath.replace(/^.*[\\\/]/, ''); //uses reg expression to get rid of any information before the filename
				var alertMessage = "Please Confirm:  Image Name: " + filenameWithExtension;
				var answer = confirm(alertMessage);  //display a confirm box with the alert message built above
				if(answer)  //if the user selects 'ok'
					{
						return true;  //end the function here
					}
				else 	
					{
						alert("Ok. Please chose an image to remove.");
						return false; 
					}
				//return true;
			}
	}
function validateSubmitRemoveOther()
	{
		var err=0;

		if (document.removeotherform.imagename.value=='') //uses jquery to see if any of the radio buttons are selected. 
			{
				err=1;
				alert( "Please select an image to remove" );
				return false; 
			}
		if(err==0) 
			{   
				var imagename =  document.removeotherform.imagename.value;   //use querySelector to get the value of a radio button
				var filepath = imagename;  //gets the path to the file
				var filenameWithExtension = filepath.replace(/^.*[\\\/]/, ''); //uses reg expression to get rid of any information before the filename
				var alertMessage = "Please Confirm:  Image Name: " + filenameWithExtension;
				var answer = confirm(alertMessage);  //display a confirm box with the alert message built above
				if(answer)  //if the user selects 'ok'
					{
						return true;  //end the function here
					}
				else 	
					{
						alert("Ok. Please chose an image to remove.");
						return false; 
					}
				//return true;
			}
	}
function validateSubmitRemoveFood()
	{
		var err=0;

		if (document.removefoodform.imagename.value=='') //uses jquery to see if any of the radio buttons are selected. 
			{
				err=1;
				alert( "Please select an image to remove" );
				return false; 
			}
		if(err==0) 
			{   
				var imagename =  document.removefoodform.imagename.value;   //use querySelector to get the value of a radio button
				var filepath = imagename;  //gets the path to the file
				var filenameWithExtension = filepath.replace(/^.*[\\\/]/, ''); //uses reg expression to get rid of any information before the filename
				var alertMessage = "Please Confirm:  Image Name: " + filenameWithExtension;
				var answer = confirm(alertMessage);  //display a confirm box with the alert message built above
				if(answer)  //if the user selects 'ok'
					{
						return true;  //end the function here
					}
				else 	
					{
						alert("Ok. Please chose an image to remove.");
						return false; 
					}
				//return true;
			}
	}
function validateSubmitRemoveTree()
	{
		var err=0;

		if (document.removetreeform.imagename.value=='') //uses jquery to see if any of the radio buttons are selected. 
			{
				err=1;
				alert( "Please select an image to remove" );
				return false; 
			}
		if(err==0) 
			{   
				var imagename =  document.removetreeform.imagename.value;   //use querySelector to get the value of a radio button
				var filepath = imagename;  //gets the path to the file
				var filenameWithExtension = filepath.replace(/^.*[\\\/]/, ''); //uses reg expression to get rid of any information before the filename
				var alertMessage = "Please Confirm:  Image Name: " + filenameWithExtension;
				var answer = confirm(alertMessage);  //display a confirm box with the alert message built above
				if(answer)  //if the user selects 'ok'
					{
						return true;  //end the function here
					}
				else 	
					{
						alert("Ok. Please chose an image to remove.");
						return false; 
					}
				//return true;
			}
	}
function validateRemoveHiker()
	{
		var err=0;

		if (document.removehikerform.imagename.value=='') //uses jquery to see if any of the radio buttons are selected. 
			{
				err=1;
				alert( "Please select a hike" );
				return false; 
			}
		if(err==0) 
			{   
				var imagename =  document.removehikerform.imagename.value;   //use querySelector to get the value of a radio button
				var filepath = imagename;  //gets the path to the file
				var filenameWithExtension = filepath.replace(/^.*[\\\/]/, ''); //uses reg expression to get rid of any information before the filename
				var alertMessage = "Please Confirm:  Image Name: " + filenameWithExtension;
				var answer = confirm(alertMessage);  //display a confirm box with the alert message built above
				if(answer)  //if the user selects 'ok'
					{
						return true;  //end the function here
					}
				else 	
					{
						alert("Ok. Please chose a hike.");
						return false; 
					}
				//return true;
			}
	}

function validateSubmitRecipe()
	{
		var err=0;
		if (document.recipeform.recipename.value=="")
			{	
				alert( "Please select a recipe name" );
				err=1;
			}
		if(document.recipeform.ingredients.value == "")
			{
				alert( "Please insert the ingredients" );
				err=1;
			}  
		if(document.recipeform.directions.value == "")
			{
				alert( "Please insert the directions" );
				err=1;
			}  
		if(document.recipeform.foodimage.value=="")
			{
				alert("please select an image that corresponds to your recipe");
				err=1;
			}
		if(err==0) 
			{   
				var recipename = document.recipeform.recipename.value;
				var ingredients =  document.recipeform.ingredients.value;
				var directions =  document.recipeform.directions.value;
				var foodimage=document.recipeform.foodimage.value;
				var filepath = foodimage;  //gets the path to the file
				var filenameWithExtension = filepath.replace(/^.*[\\\/]/, '');  //uses reg expression to get rid of any information before the filename
				var alertMessage = "Please Confirm:  Recipe Name: " + recipename + "\nIngredients:" + ingredients + "\nDirections:" + directions + "\nFood Image:" + filenameWithExtension;
				var answer = confirm(alertMessage);  //display a confirm box with the alert message built above
				if(answer)  //if the user selects 'ok'
					{
						return true;  //end the function here
					}
				else 	
					{
						alert("Ok. Please edit the form fields.");
						return false; 
					}
				//return true;
			} 
	}

function validateSubmitHiking()
	{
		var err=0;

		if (document.hikingForm.name.value=="") 
			{	
				err=1;
				alert( "Please enter your name" );
			}

		if( document.hikingForm.hikersemail.value == "" )
			{
				alert( "Please provide your email address" );
				err=1;
			}  
		if(document.hikingForm.description.value == "")
			{
				alert( "Please enter the description of your hike" );
				err=1;
			}  
		if(document.hikingForm.location.value == "")
			{
				alert( "Please enter the location name" );
				err=1;
			}  
		if(document.getElementById("image").value == "")
			{
				alert("Please select an image to submit. For all other communications please use the contact me form in the footer or email Eva.");
				err=1;
			}
	

		if(err==0) 
			{   
				var name = document.getElementById("name").value;
				var hikersemail =  document.getElementById("hikersemail").value;
				var description =  document.getElementById("description").value;	
				var image = document.getElementById("image").value;
				var filepath = image;  //gets the path to the file
				var location = document.getElementById("location").value;
				var filenameWithExtension = filepath.replace(/^.*[\\\/]/, '');  //uses reg expression to get rid of any information before the filename
				var alertMessage = "Please Confirm: Name: " + name + "\nEmail Address: "+ hikersemail + "\nHike Description:" + description + "\nHike Location:" +
					location + "\nImage:" + filenameWithExtension;
				var answer = confirm(alertMessage);  //display a confirm box with the alert message built above
				if(answer)  //if the user selects 'ok'
					{
						alert("Thank you for submitting a hike on " + Date());  //display a thank you message and a date/time stamp
						
						return true;  //end the function here
					}
				else 	
					{
						alert("Ok. Please edit the form fields.");
						
						return false; 
					}
			} 
		 //document.getElementById("readersForm").reset();
	}
function validateSubmitAHike()
	{
		var err=0;

		if (document.hikersform.hikersname.value=="") 
			{	
				err=1;
				alert( "Please enter the hiker's name" );
			}

		if(document.hikersform.description.value == "")
			{
				alert( "Please enter the description of your hike" );
				err=1;
			}  
		if(document.getElementById("where").value == "")
			{
				alert( "Please enter the hike name or location" );
				err=1;
			}  
		if(document.hikersform.image.value == "")
			{
				alert("Please select an image to submit.");
				err=1;
			}
	

		if(err==0) 
			{   
				var hikersname = document.getElementById("hikersname").value;
				var description =  document.getElementById("description").value;	
				var image = document.hikersform.image.value;
				var filepath = image;  //gets the path to the file
				var where = document.getElementById("where").value;
				var filenameWithExtension = filepath.replace(/^.*[\\\/]/, '');  //uses reg expression to get rid of any information before the filename
				var alertMessage = "Please Confirm: Hiker's Name: " + hikersname  + "\nHike Description: " + description + "\nLocation: " +
					where + "\nImage: " + filenameWithExtension;
				var answer = confirm(alertMessage);  //display a confirm box with the alert message built above
				if(answer)  //if the user selects 'ok'
					{
						alert("Thank you for submitting a hike on " + Date());  //display a thank you message and a date/time stamp
						
						return true;  //end the function here
					}
				else 	
					{
						alert("Ok. Please edit the form fields.");
						
						return false; 
					}
			} 
		
	}


	




	