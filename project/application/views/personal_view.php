<div class="loginPage">
   <div class="modal-header" align="center"> <h2 style="color: #05bca9;">Parsonal datas</h2></div>
		<div class="col-md-6 col-sm-9" align="center"  style="width: 100%;">
		<div class="row">
	  		<h3 style="color: white;display:inline;" nowrap>Name: </h3><h4 style="color: #05bca9;display:inline;"><?php echo $data['fname'];?></h4>
	  	</div>
	  	<div class="row">
	  		<h3 style="color: white;display:inline;" nowrap>Surname: </h3><h4 style="color: #05bca9;display:inline;"><?php echo $data['lname'];?></h4>
	  	</div>
	  	<div class="row">
	  		<h3 style="color: white;display:inline;" nowrap>Email: </h3><h4 style="color: #05bca9;display:inline;"><?php echo $data['email'];?></h4>
	  	</div>
	  	<div class="row">
	  		<h3 style="color: white;display:inline;" nowrap>Your CV file: </h3>
	  		<a href="/lwg/project/personal/downloadCV">link</a>
	  	</div>
    </div>
</div>
