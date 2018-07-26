<?php
session_start();
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

<body id="top">



	<!-- header 
   ================================================== -->
   <header>

   	<div class="row">

   		<div class="logo">
	         <a href="index.html">LWG</a>
	      </div>

	   	<nav id="main-nav-wrap">
				<ul class="main-navigation menu">
					<li class="current"><a class="smoothscroll"  href="#intro" title="">Kodu</a></li>
					<li><a class="smoothscroll"  href="#process" title="">Meist</a></li>
				  <li><a class="smoothscroll"  href="#features" title="">Teenused</a></li>
					<li><a class="smoothscroll"  href="#pricing" title="">Pricing</a></li>
					<li><a class="smoothscroll"  href="#faq" title="">KKK</a></li>
					<?php if(!empty($_SESSION['check'])) {?>
					   <li class="highlight with-sep"><a href="#" title=""><?php echo $_SESSION['fname'];?></a>
					   <ul class="submenu">
                         <li><a href=/project/personal>Personal Data</a></li>
                         <li><a href=#>Change Password</a></li>
                         <li><a href=/project/login/close>Log Out</a></li>
                        </ul>
					   </li>
					<?php } else { ?>
					<li class="highlight with-sep"><a href="/project/login" title="">Liitu</a></li>	
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

	   			<h5>Teretulemast  LWG .</h5>
	   			<h1>Otsid Personali?<br>Meie aitame Sind</h1>

	   			<a class="button stroke smoothscroll" href="#process" title="">Uuri lÄhemalt</a>

	   		</div>  
   			
   		</div>   		 		
   	</div> 

   	<!-- Modal Popup
	   ========================================================= -->

      <div id="video-popup" class="popup-modal mfp-hide">

		   <div class="fluid-video-wrapper">
            <iframe src="http://player.vimeo.com/video/14592941?title=0&amp;byline=0&amp;portrait=0&amp;color=faec09" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
         </div>		     

         <a class="close-popup">Sulge</a>         

	   </div> <!-- /video-popup -->  	 	

   </section> <!-- /intro -->


   <!-- Process Section
   ================================================== -->
   <section id="process">  

   	<div class="row section-intro">
   		<div class="col-twelve with-bottom-line">

   			<h5>Meist</h5>
   			<h1>Kes me oleme</h1>

   			<p class="lead">Live Ware Group OÜ on 100% eesti kapitalil põhinev ettevõte, kelle põhi tegevusalaks  on kvalifitseeritud  tööjõu vahendamine Ukrainast ning Valgevenest  eesti tööturule.
Varasemalt omame samalaadset kogemust Soome ja Taani tööturult, millest lähtudes tekkis ka soov aidata Eesti ettevõtjaid leida omale sobivat kvalifitseeritud tööjõudu .
</p>

   		</div>   		
   	</div>

   <!--/	<div class="row process-content">

   		<div class="left-side">

   			<div class="item" data-item="1">

   				<h5>Sign Up</h5>

   				<p>Lorem ipsum Cupidatat nostrud non cupidatat ut dolor id eiusmod non minim aute consectetur incididunt tempor irure aute consequat quis voluptate.</p>
   					
   			</div>

   			<div class="item" data-item="2">

	   			<h5>Upload</h5>

	   			<p>Lorem ipsum Cupidatat nostrud non cupidatat ut dolor id eiusmod non minim aute consectetur incididunt tempor irure aute consequat quis voluptate.</p>
   					
   			</div>
   				
   		</div> 
   		
   		<div class="right-side">
   				
   			<div class="item" data-item="3">

   				<h5>Create</h5>

   				<p>Lorem ipsum Cupidatat nostrud non cupidatat ut dolor id eiusmod non minim aute consectetur incididunt tempor irure aute consequat quis voluptate.</p>
   					
   			</div>

   			<div class="item" data-item="4">

   				<h5>Publish</h5>

   				<p>Lorem ipsum Cupidatat nostrud non cupidatat ut dolor id eiusmod non minim aute consectetur incididunt tempor irure aute consequat quis voluptate.</p>
   					
   			</div>

   		</div> 

   		<div class="image-part"></div>  			

   	</div> --> <!-- /process-content --> 

   </section>    


   <!-- features Section
   ================================================== -->
	<section id="features">

		<div class="row section-intro">
   		<div class="col-twelve with-bottom-line">

   			<h5>Teenused</h5>
   			<h1>Meie eesmärgid.</h1>

   			<p class="lead">Meie eesmärgiks on otsida tööandjale sobivad ja usaldusväärsed töötaja(d) ja seda teha nii, et mõlemad osapooled oleksid rahul.</p>

   		</div>   		
   	</div>

   	<div class="row features-content">

   		<div class="features-list block-1-3 block-s-1-2 block-tab-full group">

	      	<div class="bgrid feature">	

	      		<span class="icon"><i class="icon-window"></i></span>            

	            <div class="service-content">	

	            	 <h3 class="h05">Esiteks</h3>

		            <p>teostame tööandjaga vakantse töökoha üksikasjad(nõutav haridus, nõutavad oskused , keelenõuded, töökogemus jne )
.
	         		</p>
	         		
	         	</div> 	         	 

				</div> <!-- /bgrid -->

				<div class="bgrid feature">	

					<span class="icon"><i class="icon-eye"></i></span>                          

	            <div class="service-content">	
	            	<h3 class="h05">Teiseks</h3>  

		            <p>selekteerime esmaste cv põhjal välja valiku sobivad ja mitte sobivad.
Suhtleme kanditaatidega nii kirjalikult kui ka telefoni teel , saadame tagasi side nii sobivatele knaditaatitele kui mitte valituks osutunutele.Vastame kanditaatideel tööga seotud küsimustele .

	         		</p>

	         		
	            </div>	                          

			   </div> <!-- /bgrid -->

			   <div class="bgrid feature">

			   	<span class="icon"><i class="icon-paint-brush"></i></span>		            

	            <div class="service-content">
	            	<h3 class="h05">Kolmandaks</h3>

		            <p>Väljavalitud kanditaatitega lepime tööandja esindajaga kokku vestluse aja kas üle Skype või muu interneti suhtlus kanali.
	        			</p> 

	        			
	            </div> 	            	               

			   </div> <!-- /bgrid -->

				<div class="bgrid feature">

					<span class="icon"><i class="icon-file"></i></span>	              

	            <div class="service-content">
	            	<h3 class="h05">Elamine eestis </h3>

		            <p>Vajadusel otsime töötajale elamis pinna ning aitame paberi vormistamisel.
	         		</p> 

	         		
	            </div>                

				</div> <!-- /bgrid -->

			   <div class="bgrid feature">

			   	<span class="icon"><i class="icon-layers"></i></span>	            

	            <div class="service-content">	
	            	<h3 class="h05">veel midagi </h3>

		            <p>Oleme oma töös nõudlikud tööle võetavate töötajate eriala, hariduse ja muude oskuste suhtes ning anname endast kõik, et töötaja vastaks tööandja kõikvõimalikele (eri)soovidele. 
	        			</p> 

	        			
	            </div>	               

			   </div> <!-- /bgrid -->

			   <div class="bgrid feature">

			   	<span class="icon"><i class="icon-gift"></i></span>	   	           

	            <div class="service-content">
	            	 <h3 class="h05">Eesmärk</h3>

		            <p>
Märgatav aja ning raha kokkuhoid
Meie kaudu leiate vajadusel kiiresti sobiva spetsialisti nõutud ametikohale
Seega jääb teil rohkem aega oma põhitegevuseks.

	        			</p> 
	        			
	            </div>	               

			   </div> <!-- /bgrid -->

	      </div> <!-- features-list -->
   		
   	</div> <!-- features-content -->
		
	</section> <!-- /features -->
	

	<!-- pricing
   ================================================== -->

   <section id="pricing">

   	<div class="row section-intro">
   		<div class="col-twelve with-bottom-line">

   			<h5>Teenuse paketid</h5>
   			<h1>Vali sobicv teenuse paket.</h1>

   			<p class="lead">Pakume paindliku sobivat teenuste pakette leidmnaks seda mida soovite .</p>

   		</div>   		
   	</div>

   	<div class="row pricing-content">

         <div class="pricing-tables block-1-4 group">

            <div class="bgrid"> 

            	<div class="price-block">

            		<div class="top-part">

	            		<h3 class="plan-title">Töötaja</h3>
		               <p class="plan-price">&euro;<sup></sup>1200</p>
		               <p class="price-month">Ühekordne tasu</p>
		               <p class="price-meta">Ettemaks</p>

	            	</div>                

	               <div class="bottom-part">

	            		<ul class="features">
		                  <li><strong>Töötaja</strong> Leiame Teile antud vladkonnas sobiva inimese</li>
		                  <li><strong>Tellija</strong> Saadame CV otse edasi Tellkijale</li>		                  

		               </ul>

		               <a class="button large" href="">Alusta siit</a>

	            	</div>

            	</div>           	
                        
			   </div> <!-- /price-block -->

            <div class="bgrid">

            	<div class="price-block primary">

            		<div class="top-part" data-info="recommended">

	            		<h3 class="plan-title">Töötaja PLUSS</h3>
		               <p class="plan-price"><sup></sup></p>
		             
							<p class="price-meta">Billed Annually.</p>

	            	</div>               

	               <div class="bottom-part">

	            		<ul class="features">
		                  <li><strong>Töötaja</strong> Teostame testid vastavalt </li>
		                  		                  
		                  <li><strong>Tellija</strong> Tellija poolt etteantud kriteeriumite täitmine</li>		                  
		                  
		               </ul>

		               <a class="button large" href="">Alusta Siit</a>

	            	</div>
            		
            	</div>            	                 

			  </div> <!-- /price-block -->

        

         </div> <!-- /pricing-tables --> 

      </div> <!-- /pricing-content --> 

   </section> <!-- /pricing --> 


   <!-- Testimonials Section
   ================================================== -->
    <!-- /testimonials -->


   <!-- faq
   ================================================== -->
   <section id="faq">

   	<div class="row section-intro">
   		<div class="col-twelve with-bottom-line">

   			<h5>KKK</h5>
   			<h1>Korduma Kippivad Küsimused.</h1>

   			<p class="lead">Siin võiks ka olle mingi läbu .</p>

   		</div>   		
   	</div>

   	<div class="row faq-content">

   		<div class="q-and-a block-1-2 block-tab-full group">

   			<div class="bgrid">

   				<h3>Kas LWG tegutseb seaduslikult  ?</h3>

   				<p>aga loomulikult.</p>

   			</div>

   			<div class="bgrid">

   				<h3>Kuidas saada endale kvaliteetset töötajat?</h3>

   				<p>Pöörduge meie poole .</p>

   			</div>

   			<div class="bgrid">

   				<h3>Mis siis saab kui ma enam ei soovi töötajat?</h3>

   				<p>Sellesk sobiv vahend on koondamine.</p>

   			</div>

   			<div class="bgrid">

   				<h3>Kui kiiresti inimene tööle tuleb ?</h3>

   				<p>Hakkab järgmine päev tulema.</p>

   			</div>

   			<div class="bgrid">

   				<h3>Kas keegi vastudab?</h3>

   				<p>Meie vastutame.</p>

   			</div>

   			<div class="bgrid">

   				<h3>Olete sõbralik firma?</h3>

   				<p>Väga.</p>

   			</div>

   		</div> <!-- /q-and-a --> 
   		
   	</div> <!-- /faq-content --> 

   	<div class="row section-ads">

		   <div class="col-twelve">	

		     	<div class="ad-content">

		     		<h2 class="h01"><a href="test.html">Kui oled otsustanud.</a></h2>

			      <p class="lead">
			     Kas teil on probleem tööjõu leidmisega? Tule ja proovi LWG töötotsimise teenuseid 				
					</p>

					<div class="action">
			         <a class="button large round" href="test.html">Kontakteeru täna </a>
		        	</div>

		     	</div>			      

			</div>

		</div> <!-- /section-ads --> 


   </section> <!-- /faq --> 

   <!-- cta
   ================================================== -->
   <section id="cta">

   	<div class="row cta-content">

   		<div class="col-twelve">

   			<h1 class="h01">Alusta juba täna töötaja otsimisega.</h1>

   			<p class="lead"></p>

   		<!--	<ul class="stores">
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

   		<div class="row">  

	      	<div class="col-four tab-full mob-full footer-info">            

	            <div class="footer-logo"></div>

	            <p>
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

	      		<h4>Subscribe</h4>

	      		<p>Keep yourself updated. Subscribe to our newsletter.</p>

	      		<div class="subscribe-form">
	      			<form action="https://boat24.us18.list-manage.com/subscribe/post?u=85d226b4423794c63b5dd5fb7&amp;id=513b15116d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="sisesta E-mail ja vajuta enter" required=""> 
		   				<label for="mc-email" class="subscribe-message"></label>
					</form>
	      		</div>	   	      		
	      	           	
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