<style>
	.col-sm-9 {
	    width: 100%;
	    padding: 0 40%;
	}
	input {
		width: 100%;
	}
	.custom-file-upload {
		color: white;
	}
	#fileToUpload {
		margin: 10px 10%;
	}
</style>

<div class="loginPage">


	<h3><i><font color='red'>
		<?php if(!empty($_SESSION['data'])) {
			echo $_SESSION['data'];
			$_SESSION['data'] = null;
		} ?></font> </i></h3>  
		
	<div class="modal-header" align="center"> 
		<h2 style="color: #05bca9;">Registration Form</h2> 
	</div>

		<div class="col-md-6 col-sm-9"  align="center" style="width: 100%;">
		    <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="registration/check" accept-charset="utf-8">
				
		  			<input type="text" class="form-control input-lg" value="" id="name" name="fname" placeholder="Name" required>
					<span id="validname"></span><br>

		 			<input type="text" class="form-control input-lg" value="" id="surname"  name="lname" placeholder="Surname" required>
					<span id="validsurname"></span><br>

		 			<input type="email" class="form-control input-lg" id='email' value="" name="email" placeholder="Email" required> 
					<span id="validemail"></span><br>

		 			<input type="password" class="form-control input-lg" id='password' pattern=".{6,}" title="Six or more characters" name="password" placeholder="Password" required> 
					<span id="validpassword"></span><br>

		  			<input type="password" class="form-control input-lg" id="password2" pattern=".{6,}" title="Six or more characters" name="password2" placeholder="Confirm password" required>
					<span id="validpassword2"></span><br>

					<label class="custom-file-upload">
						Add your CV file:
						<input type="file" name="file" size="60" id="fileToUpload"/><br>
					</label>

					<input type="submit" align="right" class="btn btn-primary" value="Done">
			</form>
		</div>
</div>	