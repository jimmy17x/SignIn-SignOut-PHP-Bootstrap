<section class="login_main col col-lg-12">
	<form  class = "login form-horizontal"  action = "../public/index.php" method = "post">
		<legend>
			<h3>
				<section class = "hone row">
					<div id = "index_main_h1" class = "col-lg-3">
						 <b>Login:</b> 
					 </div>
					 <div class =  "col-lg-9 i_main_h1_right">
					</div>
		       </section> <!--hone-->
				
			</h3>
		</legend>
			<fieldset>
				<section class=" login_user col">
					<label class=" control-label " for="username"> Username
						<span class ="glyphicon glyphicon-user" style="color : #fdfdfb" > : </span>
					</label>
						<div class="controls">
							<input class="form-control  " name="username" placeholder="username" type="text"  required= ""/>
						</div><!-- controls -->
							   
				</section><!-- username row -->
				
                  <section class="login_pass col">
                      <label class="control-label " for="password">Password
                          <span class ="glyphicon glyphicon-star-empty"  style="color : #fdfdfb"> : </span>
                      </label>
						<div class="controls">
							<input class = "form-control col col-lg-7" name = "password" placeholder = "password" type = "password"  required= "">
						</div><!-- form-group password -->
                               
                  </section><!-- password row -->
                          
                   <section class="login_btn col col-md-12">
						<div class = "form-group" >
							<button type = "submit" name = "login" class = "btn btn-primary btn-block"> login </button>
						</div><!-- form-group submit button -->
					</section> <!-- login button -->	
                           
			</fieldset>
	</form><!-- login form-->
	<div> 
		
				<section class = "hone row">
					<div id = "index_main_h1" class = "col-lg-4">
						<a href= "forgot.php" > I forgot my password   </a>
					 </div>
					 <div class =  "col-lg-8 i_main_h1_right">
					</div>
		       </section> <!--hone-->
				
			
	
	</div>
		<section id = "login_fb">
			Or  
			<br>
			<a href="fblogin.php"><img src='../public/img/facebook.png'></img></a> <br>
		</section>	
	
</section><!-- login_main -->
					
					