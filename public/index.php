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
	
	}
	else 
	{
		//render index template
		render("index_v.php");
	}
	

?>