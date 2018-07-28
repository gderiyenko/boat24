<style type="text/css">
	
#overlay {
  position: absolute;
  background: rgba(0,0,0,.6);
  top: 0; left: 0; right: 0; bottom: 0
}

#popup {
  width:60%;
  z-index: 10px;
  background:rgba(255,255,255,0.85);
  border-radius: 8px;
  margin: 20% 20%;
  text-align: center;
  box-sizing: border-box;
  margin-top: 20px;
  position: absolute;
}

#popup h3 {
  color: #05bca9;
  margin: 20px 0 0 0;
  padding: 0;
}

#popup p {
  margin: 15px;
  font-size: 24px;
  padding: 0;
}
</style>

<div id="overlay"></div>
<div id="popup">
	<h3>Good!</h3>
	<p>Your password was changed successful!</p>
</div>

<script>
	setTimeout("location.href = '/lwg';",1500);
</script>