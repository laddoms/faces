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

		if(document.readersForm.postTitle.value == "") 
			{
				err=1;
				alert("please provide your a title for your post");
			}  

		if( document.readersForm.readersemail.value == "" )
			{
				alert( "Please provide your email address" );
				err=1;
			}  
		if(document.readersForm.postContent.value == "")
			{
				alert("please provide some content for your post");
				err=1;
			}

		if(err==0) 
			{   
				var name = document.getElementById("name").value;
				var posttitle =  document.getElementById("postTitle").value;
				var postContent =  document.getElementById("postContent").value;	
				var readersemail =  document.getElementById("readersemail").value;
				var alertMessage = "Please Confirm: Name: " + name + "\nEmail Address: "+ readersemail + "\nPost Title: " + posttitle + "\nPost Content:" + postContent;
				var answer = confirm(alertMessage);  //display a confirm box with the alert message built above
				if(answer)  //if the user selects 'ok'
					{
						alert("Thank you for contacting us on " + Date());  //display a thank you message and a date/time stamp
						document.getElementById("myForm").reset();   //clear out the form fields
						return true;  //end the function here
					}
				else 	
					{
						alert("Ok. Please edit the form fields.");
						document.getElementById('name').value='Some Value';
						return false; 
					}
				return true;
			} 
	}


	




	