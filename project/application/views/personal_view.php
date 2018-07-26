<body class="loginPage">
   <div class="modal-header" align="center"> <h2 style="color: #05bca9;">Parsonal datas</h2></div>
		<div class="col-md-6 col-sm-9" align="center"  style="width: 100%;">
        <form method="POST" action="personal/save" accept-charset="utf-8" autocomplete='off' style="color: #fff; font-size: 14px">
	  	<p>	Name: <input type="text" class="form-control input-lg" value="<?php echo $data['fname'];?>" id="name" name="fname">
		</p>
	 	<p>Surname: <input type="text" class="form-control input-lg" value="<?php echo $data['lname'];?>" id="surname"  name="lname">
	    </p>
	    <p>Email: <input type="text" class="form-control input-lg" value="<?php echo $data['email'];?>" name="email"> 
				<span id="validemail"></span>
		</p>
	 	<p>Password: <input type="password" class="form-control input-lg"  value="" name="password" >
	 	 <div>
		<button type="submit" class="btn btn-primary">Save</button>
		</div>
	 		<input value="<?php echo $data['user_id'];?>" name="id" style="visibility: hidden; height : 2pt">
	 	</p>
       
		</form>
    </div>
</body>
