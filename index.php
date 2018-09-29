 <?php
 require 'header.php';
 ?>
<form action="homePage.php" >
 	<div class="modal" id="my"  style="margin-top: 150px;" role="dialog" >
	<div class="modal-dialog modal-lg">
		<div class="modal-content">

			<div class="modal-header">
			<center><span style="color:#85C1E9;font-size: 25px;">Sign in</span></center>
			</div>
			
			<div class="modal-body form-group">
       			<div class="input-group"><span class="input-group-addon">
       				<i class="glyphicon glyphicon-user "></i></span>
       			<input type="email" name="mail" class="form-control" placeholder="Your Email-Id" required>
       			</div><br>
       		<div class="input-group">
       			<span class="input-group-addon">
       				<i class="glyphicon glyphicon-lock"></i>
       			</span>
       			<input type="password" class="form-control" name="pswd" placeholder="Password" required>
       		</div>
       			<br>
       			<input type="submit" value="Sign In" class="btn btn-info btn-block" name="sub">
           </div>

	      <div class="modal-footer">
	      	<label style="color: grey;">Not a User?</label>
	        <a href="#" id="submitdata"  type="button" class="btn btn-primary btn-md">Sign up</a>

	      </div>
			
		</div>
		
	</div>
	
</div> 

</form>	

<form>
	<div class="modal" style="margin-top: 150px;" role="dialog" id="sample">
		<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">

				<center><span style="color:#85C1E9;font-size: 25px;">Sign Up</span></center>
				<a href="#" id="dismiss" data-dismiss="modal" class="close pull-right">&times;</a>
			</div>

			<div class="modal-body form-group">
				<input type="text" name="txtname" placeholder="Your name" class="form-control" required=""><br>
				<input type="email" name="txtmail" placeholder="Email-Id" class="form-control" required=""><br>
				<input type="text" name="txtregnumber" placeholder="Register number"  class="form-control">
			</div>	
			<div class="modal-footer">
				<input type="submit" name="submit" value="Submit" class="btn-info">
				
			</div>
		</div>
			
		</div>
		
	</div>
</form>



<?php
require 'footer.php';
?>
