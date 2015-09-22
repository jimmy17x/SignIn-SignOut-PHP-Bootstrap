<section class = "index_main">
	<div  class = "index_main_content row">
		<div id = "index_main_head">
			<h1>
				<b> Reset password  for  <?php echo ($_GET["email"]); ?></b> <br>
			 </h1>
			<h3>
			<legend> Enter new password</legend>
			</h3>
			
			<div id = "hidden_forgot" class = " lead text-danger">
				<?php 
					if(isset($hidden) )
					{ 
						echo ( $hidden);
			} ?>
				
			</div>
		</div>
		
		<section class = "forgot col col-lg-12">
			<?php  include_once("../snippets/reset_s.php")?>
		</section> <!-- forgot -->
	
		
	</div>
	
</section> <!-- index_main -->