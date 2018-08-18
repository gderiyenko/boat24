<style type="text/css">
	.row {
		margin: 0;
		text-align: left;
	}

	.card {
		border-radius: 5px;
		background-color: white;
	    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.6);
	    transition: 0.3s;
	    overflow: auto;
	    width: 30%;
    	margin-left: 35%;
	}

	.content {
		overflow: auto;
	    padding: 12px 16px;
	}
</style>
<div class="loginPage">
	<div class="card">
		<div class="content">
		   <div class="modal-header" align="center"> <h2 style="color: #05bca9; text-align: left;">Parsonal datas</h2></div>
				<div class="col-md-6 col-sm-9" align="center"  style="padding: 0;
			    text-align: left;
			    width: 100%;">
				<div class="row">
			  		<h3 style="color: black;display:inline;" nowrap>Name: </h3><h4 style="color: #05bca9;display:inline;"><?php echo $data['fname'];?></h4>
			  	</div>
			  	<div class="row">
			  		<h3 style="color: black;display:inline;" nowrap>Surname: </h3><h4 style="color: #05bca9;display:inline;"><?php echo $data['lname'];?></h4>
			  	</div>
			  	<div class="row">
			  		<h3 style="color: black;display:inline;" nowrap>Email: </h3><h4 style="color: #05bca9;display:inline;"><?php echo $data['email'];?></h4>
			  	</div>
			  	<div class="row">
			  		<h3 style="color: black;display:inline;" nowrap>Your CV file: </h3>
			  		<?php 
			  		if (!empty($data['filename_CV'])) { 
			  			echo '<a href="/lwg/project/personal/downloadCV" style="font-size: 13px;">'. $data['uploaded_filename_CV'] .'</a>';
			  		} else {
			  			echo '<strong><p style="display: inline; font-size: 14px; color: #98999a;">Missing</p></strong>';
			  		}?>
			  	</div>
			  	<a class="button stroke" href="/lwg/project/personal/edit" title="" style="margin-left: 74%;
				    color: black;
				    border-color: black;
				    padding: 0;
				    width: 24%;">Edit</a>
		    </div>
		</div>
	</div>
</div>
