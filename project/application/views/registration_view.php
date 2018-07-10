<h3><i><font color='red'><?php if(!empty($_SESSION['data'])) echo $_SESSION['data']; ?></font> </i></h3>  
<div class="modal-header" align="center"> <h2>Registration Form</h2> </div>
       	<div class="col-md-3"></div>
		<div class="col-md-6" align="left">
        <form class="form-horizontal" method="POST" action="registration/check" accept-charset="utf-8">
	  		
			<div class="col-sm-9">
	  			<input type="text" class="form-control input-lg" value="" id="name" name="fname" placeholder="Name" required>
				<span id="validname"></span><br>
			</div>
	 	
			<div class="col-sm-9">	
	 			<input type="text" class="form-control input-lg" value="" id="surname"  name="lname" placeholder="Surname" required>
				<span id="validsurname"></span><br>
			</div>
			
			<div class="col-sm-9">	
	 			<input type="email" class="form-control input-lg" id='email' value="" name="email" placeholder="Email" required> 
				<span id="validemail"></span><br>
			</div>
			
	 		<div class="col-sm-9">	
	 			<input type="password" class="form-control input-lg" id='password' value="" name="password" placeholder="Password" required> 
				<span id="validpassword"></span><br>
			</div>
			
			<div class="col-sm-9">	
	  			<input type="password" class="form-control input-lg" id="password2" value="" name="password2" placeholder="Confirm password" required>
				<span id="validpassword2"></span><br>
	 		</div>	
			<div class="col-sm-9">	
		<input type="submit" align="right" class="btn btn-primary" value="Done">
		</div>
      </div>
		
		</form>
		
	</div>
	