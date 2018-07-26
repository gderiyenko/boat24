<html xmlns="http://www.w3.org/1999/xhtml">
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
   <link rel="stylesheet" href="../../../css/base.css">  
   <link rel="stylesheet" href="../../../css/main.css">
   <link rel="stylesheet" href="../../../css/vendor.css">     

   <!-- script
   ================================================== -->
	<script src="../../../js/modernizr.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">
	<style type="text/css">
		body,td,th {
			font-size: 1em;
		}
    </style>
</head>
<body>
	<div style="background-image: url(/images/intro-bg.jpg);
	    background-repeat: no-repeat;
	    width: auto;
	    height: auto;">
		  
		<nav style="background: #14171c; width: 100%; height: 70px">
			<div id="main-nav-wrap" style="position: unset;">
				<ul class="main-navigation" style="padding: 0 0 0 80%;">
					<?php if(!empty($_SESSION['check'])) {?>
						<li class="first active"><a href="/">Main page</a></li>
						<li><a href="/project/personal">Personal</a></li>
						<li class="last"><a href="/project/login/close">Logout</a></li>
					<?php } else { ?>
						<li class="first active"><a href="/">Main page</a></li>
						<li><a href="/project/login">Login</a></li>
						<li class="last"><a href="/project/registration">Registration</a></li>
					<?php }?>
				</ul>
			</div>
		</nav>
		<br class="clearfix"/>
			<div id="content">
				<div class="box">
					<?php include 'application/views/'.$content_view; ?>
				</div>
				<br class="clearfix" />
			</div>
			<br class="clearfix" />
	</div>
</body>
</html>