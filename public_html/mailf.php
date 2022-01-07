<!doctype html>
<html lang="nl">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>BeTeR Adviseurs BV</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/swiper/css/swiper.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.html"><img src="img/logo_BA30p.png" alt="" height="118px"></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav justify-content-center">
								<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="index.html#over_anchor">Over</a></li> 
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Diensten</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="dienst1.html">Fiscale advisering</a>
										<li class="nav-item"><a class="nav-link" href="dienst2.html">Jaarrekeningen</a>
										<li class="nav-item"><a class="nav-link" href="dienst3.html">Aangiften</a></li>	
                                    </ul>
								</li> 
                                <li class="nav-item"><a class="nav-link" href="nieuws0.html">Nieuws</a></li>
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Voor klanten</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="https://auth.visionplanner.nl/Account/Login?ReturnUrl=%2Fconnect%2Fauthorize%2Fcallback%3Fclient_id%3Dcloud%26redirect_uri%3Dhttps%253A%252F%252Fcloud.visionplanner.nl%252Fsign-in-callback%26response_type%3Dcode%26scope%3Dopenid%2520profile%2520user_api%26state%3D2944dfbf7eb943d2833fb07b322d1ab8%26code_challenge%3Dl4Q-VzoXkGO7XmNsW1X6rXCu-afknS0m9r3PdnJTOGI%26code_challenge_method%3DS256%26response_mode%3Dquery%26invitationKey" target="_blank">Jaarrekeningen/Visionplanner</a>
										<li class="nav-item"><a class="nav-link" href="https://klantportaal.nextens.nl/login?returnUrl=%2Fapp%2Fapproval%2F03fa0e05-7b7e-479b-a67a-5e5e9f24aff6" target="_blank">Belastingaangiften/Nextens</a>
                                    </ul>
                                </li>
								<li class="nav-item"><a class="nav-link" href="mailf.php">Contact</a></li>
							</ul>

						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        

        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="border_line"></div>
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div class="banner_content">
						<h2>Contact</h2>
						<div class="page_link">
							<a href="index.html">Home</a>
							<a href="mailf.php">Contact</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->            
    

      
        <!--================Contact Area =================-->
        <section class="contact_area p_120">
            <div class="container">

                <div class="row">
                   
                 <!-- contact info -->    
                     <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Nijkerk, Nederland</h6>
                                <p>Wiesja van de Beek&nbsp;</p>
                            </div>   
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Almere, Nederland</h6>
                                <p>Tanno Weijman&nbsp;</p>
                            </div>                         
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <!--===== Encrypted tel nummer =====-->
                                <h6>
                                    <?php include("mailf/mailf_01.php");
                                    echo hide_mob1('06-50671823');
                                    ?>
                                </h6>
                                <p>Tanno Weijman</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6>
                                    <?php include("mailf/mailf_02.php");
                                    echo hide_mob2('06-12135596');
                                    ?>
                                </h6>
                                <p>Wiesja van de Beek</p>
                            </div>                            
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <!--===== Encrypted email =====-->
                                <h6><a href="#">                              
                                    <?php include("mailf/mailf_03.php");
                                    echo hide_email('info@beteradviseurs.nl');
                                    ?></a>
                                </h6>
                                <p>Neem gerust contact met ons op!</p>
                            </div>
                        </div>
                    </div>
                    
                 <!-- contact form -->
                    
                    
 
      
             
      
        <!-- References for the opitional jQuery function to enhance end-user prompts -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/swiper/js/swiper.min.js"></script>
        <script src="js/theme.js"></script>
        
        <script src="js/mailf.js"></script>   
       
        <!-- reCAPTCHA form -->        
        <script src="https://www.google.com/recaptcha/api.js?render=6LfMzKcZAAAAAKMAJQCajs8AZ6ZXGKDG8R121jl2"></script>
        
        <script>
            grecaptcha.ready(function() {
                grecaptcha.execute('6LfMzKcZAAAAAKMAJQCajs8AZ6ZXGKDG8R121jl2', {action: 'homepage'}).then(function(token) {
                   // console.log(token);
                   document.getElementById("token").value = token;
                });
            });
        </script>             
      
                     
                    
                    
                    
                    
                    
                    <div class="col-lg-9">
                        <form class="row contact_form" id="mailf" action="mailf/mailf_process.php" method="post" >                           
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Je naam" required>     
                                </div>
                                <div class="form-group">
                                    <input name="company" type="text" class="form-control" placeholder="Bedrijfsnaam (optioneel)" >     
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" placeholder="E-mail adres" required>
                                </div>                                
                                <div class="form-group">
                                    <input name="phone" type="text" class="form-control" placeholder="Je telefoonnummer (optioneel)" >
                                </div>
                                <div class="form-group">
                                    <input name="subject" type="text" class="form-control" placeholder="Welk onderwerp?" required>
                                </div>                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Geef kort aan waarom je contact zoekt" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="Submit Form" class="btn btn-outline-warning" name="post">Verzenden</button>
                            </div>
                            <div>
                                <!-- hidden reCaptcha token input -->
                                <input type="hidden" id="token" name="token">        
                            </div>
                        </form>
                    </div>                  
                </div>
            </div>
        </section>      
      
        <!--================Contact Area =================-->      
     
        <!--================ start footer Area  =================-->	
        <footer class="footer-area">
            <div class="border_line"></div>
			<div class="container">
				<div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-md-8 footer-text m-0">Bekijk hier onze <a href="index.html">Algemene Voorwaarden</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;© 2020 met toewijding gemaakt door
                    <a href="http://renejansen.in" target="_blank"> renejansen.in</a></p>
                </div>
			</div>
        </footer>
		<!--================ End footer Area  =================-->      
      
  </body>
</html>