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
   <link rel="stylesheet" href="/lwg/css/base.css">  
   <link rel="stylesheet" href="/lwg/css/main.css">
   <link rel="stylesheet" href="/lwg/css/vendor.css">
   <!-- <link rel="stylesheet" href="../project/css/bootstrap.css">       -->

   <!-- script
   ================================================== -->
	<script src="/lwg/js/modernizr.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">
	<style type="text/css">
		body,td,th {
			font-size: 1em;
		}

		.main-navigation li a {
			font-family: "raleway-heavy", sans-serif;
			color: #98999a;
			font-size: 11.5px;
		    text-transform: uppercase;
		    letter-spacing: 1.5px;
		    position: absolute;
		    top: 0;
		    right: 30px;
		}
		.loginPage {
			padding-top: 10%;
		}
    </style>
</head>
<body>
		  
		<nav style="background: #14171c; width: 100%; height: 70px; position: fixed;">
				<ul class="main-navigation" style="padding: 0 0 0 72%; width: 100%;">
					<?php if(!empty($_SESSION['check'])) {?>
						<li style="width: 32%"><a href="/lwg">Main page</a></li>
						<li style="width: 32%"><a href="/lwg/project/personal">Personal</a></li>
						<li style="width: 32%"><a href="/lwg/project/login/close">Logout</a></li>
					<?php } else { ?>
						<li class="first active"><a href="/lwg">Main page</a></li>
						<li><a href="/lwg/project/login">Login</a></li>
						<li class="last"><a href="/lwg/project/registration">Registration</a></li>
					<?php }?>
				</ul>
		</nav>
		<?php include 'application/views/'.$content_view; ?>
</html>