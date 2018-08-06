<?php 
	$message = $_SESSION['msg'];
	$_SESSION['msg'] = null;
?>

<style>
/* unvisited link */
a, a:visited {
    font-size: 16px;
    color: #05bca9;
}

/* mouse over link */
a:hover {
    color: blue;
}
.col-sm-9 {
    width: 100%;
    padding: 0 40%;
}
input {
	width: 100%;
}
</style>
<div class="loginPage">

    <div class="modal-header" align="center">
    	<h2 style="color: #05bca9;">Login Form</h2>
  
	    <h3><i><font color='red'>
			<?php if(!empty($message)) {
				echo $message;
			} ?></font> </i></h3>  
	</div>
	<div class="col-md-6 col-sm-9"  align="center" style="width: 100%;">
        <form class="form-horizontal" method="POST" action="" accept-charset="utf-8" >
	 		<input type="text" class="form-control input-lg" value="" name="email" placeholder="Email">
	 		<br>
	 		<input type="password" class="form-control input-lg" value="" name="password" placeholder="Password">
	 		<br>
        	<div> 
				<button type="submit" class="btn btn-primary" >Login</button>
				<a type="button" href="registration">Registration</a>   
			</div>
		</form>
    </div>

</div>