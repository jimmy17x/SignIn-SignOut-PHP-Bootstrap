<form  class  = " form-horizontal"  action="reset.php" method="post">
		<div class = "row">
			<label class = "control-label col-lg-4" for= "password">
					<b>Password </b>: 
			</label>
			<div class = "control col-lg-4" >
				<input  class = "form-control" type="text" name="password" required="">
			</div>
		</div>
		<br>
		<div class = "row">
			<label class = "control-label col-lg-4" for= "passconfirm">
					<b>Confrim Password </b>: 
			</label>
			<div class = "control col-lg-4" >
				<input  class = "form-control" type="text" name="passconfirm" required="">
			</div>
		</div>
			
		<br>		
		
		<!-- hidden div to save email and activation code -->
		<div id = "reset_data" style = "display:none">
				<input   name = "code" value  = "<?php echo ($_GET["code"])  ?>" > 
				<input   name = "email" value  = "<?php echo ($_GET["email"])  ?>" > 
		</div> <!--- reset_data-->
		
		
			<input type="submit"  id = "reset" class = "btn btn-primary  col-lg-12" name="submit" value="Reset">
					
		
	</form>