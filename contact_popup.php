<style type="text/css">
	
#overlay {
  position: absolute;
  z-index: 10;
  background: rgba(0,0,0,.6);
  top: 0; left: 0; right: 0; bottom: 0
}

#popup {
  margin: 20%;
  width:60%;
  z-index: 10;
  background:rgba(255,255,255,0.85);
  border-radius: 8px;
  text-align: center;
  box-sizing: border-box;
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

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    margin: 10px 20px 0 0;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>

<div id="overlay"></div>
<div id="popup">
	<span class="close">&times;</span>
	<p>We will contact you shortly.</p>
</div>

<script>
// Get the modal
var modal = document.getElementById('overlay');
var modalcontent = document.getElementById('popup');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
    modalcontent.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        modalcontent.style.display = "none";
    }
}
</script>