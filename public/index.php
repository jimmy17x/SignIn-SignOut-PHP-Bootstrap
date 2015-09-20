<?php
	//controller for index view

	//include configurations
	 //configurations
	 require("../includes/config.php");
	
	//if the user is already has  a login session render home page
	if(isset($_SESSION["id"]))
	{
		//render("index_v.php");
		//exit;
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
				$result = query("INSERT INTO  user (fullname , username , password , email) VALUES (? , ? , ? , ? )" , $_POST["fullname"] , $_POST["username"],md5( $password)   ,  $_POST["email"] ) ;
				if( $result === false )
				{
					apologize(" <h1>That username or email is already registered</h1>  <br> Please try other combination") ;
					exit ; 
				}
				
				//get the rows of id just added in database
				$rows = query( "SELECT LAST_INSERT_ID() AS  id " );
				
				//get the id number 
				$id = $rows[0]["id"] ;
				//start a session for new id 
				$_SESSION["id"] = $id ; 	
			//make  folder for userdata of this id
				mkdir("../public/img/user/$id" ,0777 );	
				
					// upload profile pic
					//logo image saving directory
				$target_dir = "../public/img/user/".$id."/";
				//profile pic  path with unique image names
				$target_file_path = $target_dir .time(). basename($_FILES["profilePic"]["name"]);
				
				if (move_uploaded_file($_FILES["profilePic"]["tmp_name"], $target_file_path)) 
				{
					//add logo path to user info row in db
					query("UPDATE user SET  profilePic = ?  WHERE id = ?" , $target_file_path, $id);
					dump("regoistration succxfull");
				 
				} 
				else 
				{
						apologize("Oooppsss  error uploading yours profile pic...please try again");
						exit;
				}
				
				
	
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