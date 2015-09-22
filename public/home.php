<?php
	require("../includes/config.php");
	if(isset($_SESSION["id"]))
	{
		render("home_t.php");
	}else 
	{
		redirect("index.php");
	}	
	
?>