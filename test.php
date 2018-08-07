<?php

   session_start();
   if (!empty($_SESSION['check'])){
    $liitu = true;
    $formName = $_SESSION['fname'] . " " .  $_SESSION['lname'];
    $formEmail = $_SESSION['email'];
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
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">     

   <!-- script
   ================================================== -->
  <script src="js/modernizr.js"></script>

   <!-- favicons
  ================================================== -->
  <link rel="icon" type="image/png" href="favicon.png">
  <style type="text/css">
  body,td,th {
  font-size: 1em;
}
    </style>
</head>
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
   <header>
      <div class="logo">
         <a href="#intro" style="position: fixed;
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

  <!-- intro section
   ================================================== -->
   <section id="intro">

    <div class="shadow-overlay"></div>

    <div class="intro-content">
      <div class="row">

        <div class="col-twelve">

          <!-- <div class='video-link'> 
            <a href="#video-popup"><img src="images/play-button.png" alt=""></a>
          </div>-->
          <h3>Contact Form</h3>


          <div class="container" style="left: 0;">  
            <form id="contact" action="/lwg/project/main/subscription" method="post">
              <h3>Quick Contact</h3>
              <h4>Contact us today, and get reply with in 24 hours!</h4>
              <fieldset>
                <input placeholder="Your name" type="text" tabindex="1" name="name" value="<?php echo $formName; ?>" required autofocus>
              </fieldset>
              <fieldset>
                <input placeholder="Your Email Address" type="email" name="email" value="<?php echo $formEmail; ?>" tabindex="2" required>
              </fieldset>
              <fieldset>
                <input placeholder="Your Phone Number" type="tel" name="phone" tabindex="3" required>
              </fieldset>
              <fieldset>
                <textarea placeholder="Type your Message Here...." tabindex="5" name="message" required></textarea>
              </fieldset>
              <fieldset>
                <button name="submit" type="submit" id="contact-submit" name="post_data" data-submit="...Sending">Submit</button>
                
              </fieldset>
            </form>
          </div> 
        </div>          
      </div> 
    </div>

    <!-- Modal Popup
     ========================================================= -->

  

   </section> <!-- /intro -->


   <!-- Process Section
   ================================================== -->
       


   <!-- features Section
   ================================================== -->
  <!-- /features -->
  

  <!-- pricing
   ================================================== -->

    <!-- /pricing --> 


   <!-- Testimonials Section
   ================================================== -->
    <!-- /testimonials -->


   <!-- faq
   ================================================== -->
    <!-- /faq --> 

   <!-- cta
   ================================================== -->
   <section id="cta">

    <div class="row cta-content">

      <div class="col-twelve">

        <h1 class="h01">Alusta juba täna töötaja otsimisega.</h1>

        <p class="lead"></p>

      <!--  <ul class="stores">
          <li class="app-store">
            <a href="#" class="button round large" title="">
              <i class="icon ion-social-apple"></i>App Store
            </a>
          </li>
          <li class="play-store">
            <a href="#" class="button round large" title="">
              <i class="icon ion-social-android"></i>Play Store</a>
            </li>
          <li class="windows-store">
            <a href="#" class="button round large" title="">
              <i class="icon ion-social-windows"></i>Win Store</a>
            </li>
        </ul> -->

      </div>

    </div> <!-- /cta-content -->

   </section> <!-- /cta -->


   <!-- footer
   ================================================== -->
   <footer>

    <div class="footer-main">
         <img src="images/logo.png" style="
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

   <div id="preloader"> 
      <div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-1.11.3.min.js"></script>
   <script src="js/jquery-migrate-1.2.1.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>