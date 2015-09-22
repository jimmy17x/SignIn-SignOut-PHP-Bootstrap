<?php
	require_once("../includes/config.php");
	//user id 
	$id = $_SESSION["id"];
	$result = query("SELECT * FROM user WHERE id = ? " , $id);
	
	$img = $result[0]["profilepic"];
	$username = $result[0]["username"];
	$fullname = $result[0]["fullname"];
	$email = $result[0]["email"];
?>

<div class ="area_profile col-lg-4" >
	<img src =  <?php echo ($img);?>>
</div>

<div class = "arena_profile_detail col-lg-8 ">
	<?php 
		echo (
					"<h3>Username : " .$username . "<br>" .
					"Name : " . $fullname . "<br>".
					"Email :" .$email
					."</h3>"
					
				);
	?>
</div>

<div class = "lead text-danger">
	<a href=  "logout.php" > Logout  </a>
</div>