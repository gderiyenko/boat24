<?php
session_start();

$popupMessageSuccess = false;
if ($_SESSION['msg'] == "OK") {
	$popupMessageSuccess = true;
	$_SESSION['msg'] = null;
}
if ($_SESSION['msg'] == "ERROR") {
	$popupMessageError = true;
	$_SESSION['msg'] = null;
}

?>
<style>
/* unvisited link */
a:link {
    color: red;
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
    	<h2 style="color: #05bca9;">Change password</h2>
    </div>

	<div class="col-md-6 col-sm-9"  align="center" style="width: 100%;">
        <form method="POST" action="/lwg/project/change/save" accept-charset="utf-8">
	 		<input type="password" class="form-control input-lg" value="" name="oldPassword" placeholder="Old password">
	 		<br>
	 		<input type="password" class="form-control input-lg" name="newPassword" pattern=".{6,}" title="Six or more characters" placeholder="New password">
	 		<br>
	 		<input type="password" class="form-control input-lg" name="newPasswordRepeat" pattern=".{6,}" title="Six or more characters" placeholder="Repeat new password">
	 		<br>
        	<div> 
				<button type="submit" class="btn btn-primary" >Change</button>
			</div>
		</form>

			
	</div>

	<!-- success popup -->
	<?php if ($popupMessageSuccess){
		require_once 'modal/change_password_success.php';
	} ?>

	<!-- something went wrong popup -->
	<?php if ($popupMessageError){
		require_once 'modal/change_password_error.php';
	} ?>
	
</div>