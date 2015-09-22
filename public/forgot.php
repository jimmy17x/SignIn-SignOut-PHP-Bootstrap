<?php
	// controller for forgot password view
	 require("../includes/config.php");
	 
	 
	if (isset($_SERVER["id"]))
	{
		//if user is already sign in , redirect to home page
		//redirect("home.php");
	}
	else if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		// the user has entered and email address for resetting password

		
		if($_POST['submit']=='Reset')
		{
			$email=$_POST['email'];
			$result= query( "SELECT COUNT(*)  as count FROM  user WHERE email = ? " , $email);
			
			// if the email exist in data base then send reset password mail
			if($result[0]['count'] == 1 )
			{
				
				$code=rand(100,999); // md5 or other encryption technique should be used 
				
				$message="<b> Activation link is: http://localhost/foodpost/public/reset.php?email=$email&code=$code </b>";
				$message .= "<h1>This is headline.</h1>";
				
				 $subject = "This is subject";
				 
				 $message = "This is HTML message.";
				 $header = "From:abc@somedomain.com \r\n";
				 $header .= "Cc:afgh@somedomain.com \r\n";
				 $header .= "MIME-Version: 1.0\r\n";
				 $header .= "Content-type: text/html\r\n";
				 
				 $retval = mail ($email,$subject,$message,$header);
				 
				 if( $retval == true )
				 {
					// set the activation code value to check later while resetting password
					query("UPDATE user SET activation_code = ? WHERE email = ? " , $code , $email);
					
					render("forgot_t.php" , [ "hidden" =>  "Email sent successfully <br>Check yours mail box to reset password" ]);
				 }
				 else
				 {
					dump("Email not sent");
					
				}
				
			}
			else
			{
				//user doest exist
				render("forgot_t.php" , [ "hidden" =>  "No user exist with this email 
						<br>
						Please try again."]  );
			}
		}

	}
	else
	{
		render("forgot_t.php");
	}

?>