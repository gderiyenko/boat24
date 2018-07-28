<?php
session_start();

$popupMessageSuccess = false;
if ($_SESSION['message'] == "OK") {
	$popupMessageSuccess = true;
	$_SESSION['message'] = null;
}

?>

<body class="loginPage">
    <div class="modal-header" align="center"> <h2 style="color: #05bca9;">Change password</h2></div>
	<div class="col-md-6 col-sm-9"  align="center" style="width: 100%;">
        <form method="POST" action="/lwg/project/change/save" accept-charset="utf-8">
	 		<input type="password" class="form-control input-lg" value="" name="oldPassword" placeholder="Old password">
	 		<input type="password" class="form-control input-lg" value="" name="newPassword" placeholder="New password">
	 		<input type="password" class="form-control input-lg" value="" name="newPasswordRepeat" placeholder="Repeat new password">
        	<div> 
				<button type="submit" class="btn btn-primary" >Change</button>
			</div>
		</form>

			
	</div>
	<?php if ($popupMessageSuccess){
		require_once 'modal/change_password_success.php';
	} ?>
	
</body>