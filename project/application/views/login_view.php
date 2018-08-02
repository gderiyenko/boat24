<style>
/* unvisited link */
a:link {
    color: red;
}

/* mouse over link */
a:hover {
    color: blue;
}
</style>
<body class="loginPage">
    <div class="modal-header" align="center"> <h2 style="color: #05bca9;">Login Form</h2></div>
		<div class="col-md-6 col-sm-9"  align="center" style="width: 100%;">
        <form method="POST" action="" accept-charset="utf-8" >
	 		<input type="text" class="form-control input-lg" value="" name="email" placeholder="Email">
	 		<input type="password" class="form-control input-lg" value="" name="password" placeholder="Password">
        	<div> 
				<button type="submit" class="btn btn-primary" >Login</button>
				<a type="button" href="registration">Registration</a>   
			</div>
		</form>
    </div>
</body>