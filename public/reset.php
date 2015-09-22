<?php
	//controller for resetting password view

	require("../includes/config.php");
	
	if(isset($_GET["code"] ))
	{
		$code = $_GET["code"] ;
		render("reset_t.php" , ["code" => '$code']);
	}
	else if($_SERVER["REQUEST_METHOD"]  == "POST")
	{
		//reset password here
		$password = $_POST["password"];
		$cPass = $_POST["passconfirm"];
		if( strcmp($password , $cPass) == 0  )
		{
			$mailcode = $_POST["code"];
			$email = $_POST["email"];
			
			$result = query("SELECT * FROM user where email = ? " , $email);
			$code = $result[0]["activation_code"];
			
			if($code == $mailcode)
			{
				
				query("UPDATE user set password = ? WHERE email = ? " , md5($password)  , $email);
				render("forgot_t.php" , [ "hidden" => "Password reset complete <br> You may <a href = 'index.php'> login</a> now"]);
				
			
			}
			else
			{
				dump("different activation code" . $mailcode . " n "  . $code );
			}
			
		}
		else
		{
			apologize(" Please confirm yours password again");
			exit;
		}
	}
	else
	{
		redirect("index.php");
	}
?>