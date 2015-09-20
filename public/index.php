<?php
	//controller for index view

	//include configurations
	 //configurations
	 require("../includes/config.php");
	
	//if the user is already has  a login session render home page
	if(isset($_SESSION["id"]))
	{
		render("home_v.php");
		exit;
	}
	
	// check post or get request method
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		//if user requested login
		if(isset($_POST["login"]))
		{
			dump("login");
		}
		else if (isset($_POST["registration"])) // else if user requested resgisteration
		{
			$password = $_POST["password"];
			$cPass = $_POST["passconfirm"];
			
			if( strcmp($password , $cPass) == 0  )
			{
				dump("equal pass");
			}
			else 
			{
				apologize("<h3>Password and Confirm password mismatch</h3>  <br> Please confirm password again");
			}
			
			
			
			
		}
	}
	else 
	{
		//render index template
		render("index_v.php");
	}
	

?>