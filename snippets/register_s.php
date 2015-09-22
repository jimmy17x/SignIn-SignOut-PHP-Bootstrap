<section class="registration_main col col-lg-12">
	<form  class = "registration form-horizontal"  action = "../public/index.php" method = "post"  enctype="multipart/form-data">
		<legend><h2><b>Register</b></h2></legend>
			<fieldset>
				<section class=" registration_user col">
					<label class=" control-label " for="username"> Username
					</label>
						<div class="controls">
							<input class="form-control" name="username" placeholder="username" type="text" required= ""/>
					</div><!-- controls -->
							   
				</section><!-- username row -->
				
				<section class=" registration_full_name col">
					<label class=" control-label " for="fullname"> Full Name
					</label>
						<div class="controls">
							<input class="form-control  " name="fullname" placeholder="fullname" type="text" required= ""/>
						</div><!-- controls -->
							   
				</section><!-- fullname row -->
				
				<section class=" registration_email col">
					<label class=" control-label " for="email"> Email
					</label>
						<div class="controls">
							<input class="form-control  " name="email" placeholder="email" type="email" required= ""/>
						</div><!-- controls -->
							   
				</section><!-- email row -->
				
                  <section class="registration_pass col">
                      <label class="control-label " for="password">Password
                         
                      </label>
						<div class="controls">
							<input class = "form-control col col-lg-7" name = "password" placeholder = "password" type = "password"  required= "">
						</div><!-- form-group password -->
                               
                  </section><!-- password row -->
				  
				  <section class="registration_pass_confirm col">
                      <label class="control-label " for="passconfirm">Confirm Password
                      </label>
						<div class="controls">
							<input class = "form-control col col-lg-7" name = "passconfirm" placeholder = "password" type = "password"  required= "">
						</div><!-- form-group password -->
                               
                  </section><!-- password confirm row -->
				  
				  <div class= " col profile " enctype="multipart/form-data">
				    <label class="control-label " for="passconfirm">Profile Pic
                     </label>
					<div class="controls">
						<input id = "profilePic" class  = "form-control col col-lg-7" style = "padding:0px" type="file" name="profilePic"   required= "" />
					</div><!-- form-group password -->
				</div><!-- profile-->
                          
                   <section class="registration_btn col col-md-12">
						<div class = "form-group" >
							<button type = "submit" name = "registration" class = "btn btn-danger btn-block"> Register </button>
						</div><!-- form-group submit button -->
					</section> <!-- registration button -->
					
					
			</fieldset>
	</form><!-- registration form -->
	<!-- 
			<section id = "login_fb">
				Or  
				<br>
				<a href="#"><img src='../public/img/facebookr.png'></img></a> <br>
			</section> 
			-->
                           
</section><!-- registration_main -->
					
					