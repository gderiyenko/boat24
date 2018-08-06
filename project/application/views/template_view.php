<?php

   session_start();
   if (!empty($_SESSION['check'])){
   	$liitu = true;
   } else {
   	$liitu = false;
   }
?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>LWG</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="/lwg/css/base.css">  
   <link rel="stylesheet" href="/lwg/css/main.css">
   <link rel="stylesheet" href="/lwg/css/vendor.css">
   <!-- <link rel="stylesheet" href="../project/css/bootstrap.css">       -->

   <!-- script
   ================================================== -->
	<script src="/lwg/js/modernizr.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="/lwg/image/png" href="favicon.png">
	
</head>


	<style type="text/css">
		body,td,th {
			font-size: 1em;
		}
		.margin-header {
			margin-top: 66px;
		}
		.loginPage {
			overflow: auto;
			padding-top: 4%;
		}
	</style>

	<script type="text/javascript">
	   function showSubmenu() {
	      //alert(document.getElementById('submenu').style.display);
	      if (document.getElementById('submenu').style.display == "none"){
	         document.getElementById("submenu").style.display = "block";
	      } else {
	         document.getElementById("submenu").style.display = "none";
	      }
	   }
	</script>

<body id="top">

	<!-- header 
   ================================================== -->
   <header class="sticky">
      <div class="logo">
         <a href="/lwg/#intro" style="position: fixed;
          top: -97%;
          left: -13%;">LWG</a>
      </div>
   	<div class="row" style="width: 80%;
       max-width: auto; 
       margin: 0 0 0 16%;">

	   	<nav id="main-nav-wrap">
			<ul class="main-navigation menu">
				<li class="current"><a href="/lwg/#intro" title="">Kodu</a></li>
				<li><a href="/lwg/#process" title="">Meist</a></li>
				<li><a href="/lwg/#features" title="">Teenused</a></li>
				<li><a href="/lwg/#pricing" title="">Pricing</a></li>
				<li><a href="/lwg/#faq" title="">KKK</a></li>
				<?php if ($liitu) { ?>
				   <li class="highlight with-sep" onclick ="showSubmenu()" style="margin: 0 10px; cursor: pointer;">
                 <div class="username">
                    <?php echo $_SESSION['fname'] . " " . $_SESSION['lname'];?>
                 </div>
              </li>
					   <ul id="submenu" class="submenu" style="display:none;margin: 66px 0 0 0;position:fixed;top:0;right:0;left:auto;padding: 0 1% 0 0;">
                     <li style="height: auto;"><a href="/lwg/project/personal">Personal Data</a></li>
                     <li style="height: auto;"><a href="/lwg/project/change">Change Password</a></li>
                     <li style="height: auto;"><a href="/lwg/project/login/close">Log Out</a></li>
                 </ul>
				   
				<?php } else { ?>
              <li class="highlight with-sep"><a href="/lwg/project/registration" title="">Liitu</a></li>   
					<li class="highlight with-sep"><a href="/lwg/project/login" title="">Log in</a></li>	
				<?php }?>
				<!--
			    <li class="highlight with-sep"><a href="rus.html" title=""><img class="flag" src="images/rus.png" alt="est"></a></li>
				<li><a class="smoothscroll"  href="index.html" title=""><img class="flag" src="images/est.png" alt="est"></a></li>					
				<li class="smoothscroll"><a href="eng.html" title=""><img class="flag" src="images/uk.png" alt="est"></a></li>
				-->				
			</ul>
		</nav>
		<a class="menu-toggle" href="#"><span>Menu</span></a>
   	</div>   	
   	
   </header> <!-- /header -->
	<!--
		<nav style="background: #14171c; width: 100%; height: 70px; position: fixed;">
				<ul class="main-navigation" style="padding: 0 0 0 72%; width: 100%;">
					<?php //if(!empty($_SESSION['check'])) {?>
						<li style="width: 32%"><a href="/lwg">Main page</a></li>
						<li style="width: 32%"><a href="/lwg/project/personal">Personal</a></li>
						<li style="width: 32%"><a href="/lwg/project/login/close">Logout</a></li>
					<?php// } else { ?>
						<li style="width: 32%"><a href="/lwg">Main page</a></li>
						<li style="width: 32%"><a href="/lwg/project/login">Login</a></li>
						<li style="width: 32%"><a href="/lwg/project/registration">Registration</a></li>
					<?php //}?>
				</ul>
		</nav>
	-->
	<div class="margin-header">
		<?php include 'application/views/'.$content_view; ?>
	</div>

	   <!-- footer
   ================================================== -->


   <footer>

   	<div class="footer-main">
         <img src="/lwg/images/logo.png" style="
          width: 3%;
          min-width: 50px;
          position: relative;
          display: inline-block;
          top: -69px;"> 
   		<div class="row" style="display: inline-block; max-width: none;">  

	      	<div class="col-four tab-full mob-full footer-info" style="padding: 0 0;">            

	            <!--<div class="footer-logo"></div>-->
                  
                  <span class='icon'></span>
                  <p style="
                     position: relative;
                     color: white;
                     display:inline-block;">Live Ware Group</p>

	            <p style="
                     position: relative;">
		        	Pikk 39-8<br>
            	Tallinn, Estonia<br>
		        	info@lwg.ee &nbsp; +123-456-789
		        	</p>

		      </div> <!-- /footer-info -->

	      	<div class="col-two tab-1-3 mob-1-2 site-links">

	      		<h4>Lehe lingid</h4>

	      		<ul>
	      			<li><a class="smoothscroll" href="#process">Meist</a></li>
						
						<li><a class="smoothscroll" href="#faq">KKK</a></li>
						
						
					</ul>

	      	</div> <!-- /site-links -->  

	      	<div class="col-two tab-1-3 mob-1-2 social-links">

	      		<h4>Social</h4>

	      		<ul>
	      			
						<li><a href="#">Facebook</a></li>
						
						
						<li><a href="#">Skype</a></li>
					</ul>
	      	           	
	      	</div> <!-- /social --> 

	      	<div class="col-four tab-1-3 mob-full footer-subscribe">
	      		<h4>Kontakteeru täna</h4>
               <ul>
	      		   <li><a href="test.php">Kontakteeru kohe</a></li>
               </ul>
	      	</div> <!-- /subscribe -->         

	      </div> <!-- /row -->

   	</div> <!-- /footer-main -->


      <div class="footer-bottom">

      	<div class="row">

      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>© Copyright LWG 2018.</span> '
		         	<a href="http://www.Styleshout.com" rel="author">Styleshout</a>
			         	
		         </div>

		         <div id="go-top" style="display: block;">
		            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon ion-android-arrow-up"></i></a>
		         </div>         
	      	</div>

      	</div> <!-- /footer-bottom -->     	

      </div>

   </footer> 
</html>