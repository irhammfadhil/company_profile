<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>PT Irhamindo Laksono</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="assets/hehe/css/bootstrap.css" rel="stylesheet">
    <link href="assets/hehe/css/fontawesome-all.css" rel="stylesheet">
    <link href="assets/hehe/css/swiper.css" rel="stylesheet">
	<link href="assets/hehe/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/hehe/css/style.css" rel="stylesheet">
    
    <style>
        body {
        font-family: Arial, Helvetica, sans-serif;
        }

        .flip-card {
        background-color: transparent;
        width: 300px;
        height: 300px;
        perspective: 1000px;
        }

        .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }

        .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
        }

        .flip-card-front, .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        }

        .flip-card-front {
        background-color: #bbb;
        color: black;
        }

        .flip-card-back {
        background-color: #2980b9;
        color: white;
        transform: rotateY(180deg);
        }
    </style>

	<script src="assets/hehe/js/jquery.min.js"></script>

    <script>
        console.log("hehe");
        var background = ["images/passage-4654260_1920.jpg", "images/light-bulb-5244001_1920.jpg", "assets/hehe/images/handshake-3298455_1920.jpg"];
        $(function() {
            var i=-1;
            console.log(i);
            $("#header").css("background","linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url(" + background[i] + ") center center no-repeat");
            $('#header').css("background-size", "cover");
            $('#header').css("max-width", "100%");
            $('#header').css("height", "auto");
            $('#header').css("object-fit", "cover");
            setInterval(function() {
                i++;
                console.log(i);
                $("#header").css("background","linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url(" + background[i] + ") center center no-repeat");
                $('#header').css("background-size", "cover");
                $('#header').css("max-width", "100%");
                $('#header').css("height", "auto");
                $('#header').css("object-fit", "cover");
                if (i ==  background.length-1) {
                    i=-1;
                }
            }, 5000);
        });
    </script>
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img src="images/LOGO.png" alt="alternative"></a>
        <p style="font-size: 30px; color: #ffffff;">PT. IRHAMINDO LAKSONO</p>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#intro">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#applications">APPLICATIONS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">PRODUCT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">CONTACT</a>
                </li>
            </ul>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h2 style="color: white;">Welcome to</h2>
                            <h1>PT. IRHAMINDO LAKSONO</h1>
                            <p class="p-heading p-large">Your Reliable Chemical Partner</p>
                            <a class="btn-solid-lg page-scroll" href="#intro">LEARN MORE</a>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Intro -->
    <div id="intro" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title">ABOUT</div>
                        <h2>We committed to provide good quality, good service and best delivery product</h2>
                        <p>PT. Irhamindo Laksono is located in Bekasi West Java. We were founded in 1999. We produce copper sulphate which are used for copper galvanizing industry, Poultry Feed, Mining, Water Treatment, fertilizers, etc.</p>
                        <p>Copper Sulphate provided by us are processed as per the industry set norms under the most suitable condition. Our team member only uses quality assured chemical compound to ensure the copper sulphate production.</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/the-periodic-table-4273681_1920.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->

    <!-- Description -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack" style="text-align: center;">
                            <img src="images/vision.svg" style="width: 100px; height:100px;"></img>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Our Vision</h4>
                            <p>Become the leading copper sulphate manufacturer in Indonesia.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <img src="images/mission.svg" style="width: 100px; height:100px;"></img>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Our Mission</h4>
                            <p>Become a reliable local copper sulphate manufacture for Indonesia industry.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                        <img src="images/value.svg" style="width: 100px; height:100px;"></img>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Our Values</h4>
                            <ul>
                            	<li>Safety & Wellness</li>
                            	<li>Honesty & Integrity</li>
                            	<li>Customer Focus</li>
                            	<li>Innovation</li>
                            	<li>Sustainability</li>
                            	<li>Respect</li>
                            </ul>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of description -->

    <!-- Testimonials -->
    <div id="applications" class="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title">Applications</h2>
                    <br>
                    <h3 class="p-heading">Copper sulphate has extensive range of uses in industry as shown below</h3>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img style="display: block; margin-left: auto; margin-right: auto; width: 170px; height: 170px;" src="images/poultry feed.jpg" alt="alternative">
                                        <div class="card-body">
                                        	<div class="testimonial-author">Poultry Feed</div>
                                            <div class="testimonial-text">Addition of copper sulphate increase growth response and improved food conversion in broilers maintained under commercial conditions.</div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img style="display: block; margin-left: auto; margin-right: auto; width: 170px; height: 170px;" src="images/copper-wire-113249_1920.jpg" alt="alternative">
                                        <div class="card-body">
                                        	<div class="testimonial-author">Electroplating</div>
                                            <div class="testimonial-text">Copper sulfate allows the electroplating technician to harness the elemental copper within the copper sulfate . </div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img style="display: block; margin-left: auto; margin-right: auto; width: 170px; height: 170px;" src="images/Palm-oil-Indonesia-e1566559194709.jpg" alt="alternative">
                                        <div class="card-body">
                                        	<div class="testimonial-author">Oil Palm Production</div>
                                            <div class="testimonial-text">Copper sulphate fertilizer can be used to balance the elements needed and increase the production of oil palm. The addition of copper sulphate used for chlorophyll formers, catalysts in physiological processes, activate the enzyme cytochrome oxidase, butyric acid phenolase, as well as lactase for physiological reactions, etc in oil palm production.</div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img style="display: block; margin-left: auto; margin-right: auto; width: 170px; height: 170px;" src="images/water-1018808_1920.jpg" alt="alternative">
                                        <div class="card-body">
                                        	<div class="testimonial-author">Water purifier</div>
                                            <div class="testimonial-text">Copper Sulphate is used for water purifier in swimming pool. It also gives a bluish color to the water. So that the pool will look more beautiful. </div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                            
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of sliedr-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider -->
    <!-- end of testimonials -->
    
    <!-- Services -->
    <div id="services" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">PRODUCTS</div>
                    <h2>Select Our Product<br> That Meets Your Needs</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        
            <div class="row">
                <p><b>Click the picture for more information.</b></p>
                <br>
                <div class="col-lg-12">
                    @foreach($product as $p)
                    <!-- Card -->
                    <div class="card">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="{{$p->product_img}}" alt="Avatar" style="width:300px;height:300px;">
                                </div>
                                <div class="flip-card-back">
                                    <br>
                                    <br>
                                    <h1 style="font-size: 18pt; color: white;">{{$p->product_name}}</h1>
                                    <br> 
                                    <p style="color: white;">{{$p->product_desc}}</p> 
                                    <a class="btn btn-primary" style="background-color: #dddddd; color: black;" href="specs?id={{$p->product_id}}" role="button">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="{{$p->product_img}}" alt="alternative" style=" object-fit: cover;">
                        </div>
                    </div>-->
                    <!-- end of card -->
                    @endforeach

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of services -->

    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">CONTACT</div>
                        <h2>Get In Touch Using The Form</h2>
                        <p>We are happy to answer your sales question. Fill out the form and we'll be in touch as soon as possible.</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="address"><i class="fas fa-map-marker-alt"></i>Villa Galaxy, Jalan Lotus Raya D2/7, Bekasi, West Java, Indonesia 17147</li>
                            <li><i class="fas fa-phone"></i><a href="tel:0811890135">+62 811 890 135</a></li>
                            <li><i class="fas fa-envelope"></i><a href="mailto:irham.mfadhil@gmail.com">irhamindo.laksono@gmail.com</a></li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    
                    <!-- Contact Form -->
                    <!--
                    <form id="contactForm" data-toggle="validator" data-focus="false" method="post" action="/contact_us">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="name" required>
                            <label class="label-control" for="cname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="email" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="phone_number" required>
                            <label class="label-control" for="cemail">Phone Number</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="message" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>I agree with Aria's stated <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms Conditions</a> 
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    -->
                    
                                                    <form method="post" action="/contact_us">
                                                        {{ csrf_field() }}
                                                            <div class="form-group">
                                                                <input type="text" name="name" class="form-control-input" id="name" value="" placeholder="Name"  required />
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="email" name="email" class="form-control-input" id="email" value="" placeholder="Email (required)" />
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="phone_number" class="form-control-input" id="phone_number" value="" placeholder="Phone Number" />
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <textarea name="message" class="form-control-textarea" id="message" placeholder="Enter your message..."></textarea>
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <button type="submit" class="form-control-submit-button">SEND MESSAGE</button>
                                                            </div>
                                                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-container about">
                        <h4>PT. Irhamindo Laksono Commitment</h4>
                        <p class="white">We realized that our clients are our partners and we committed to help them achieve their objectives.</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Links</h4>
                        <ul class="list-unstyled li-space-lg white">
                            <li>
                                <a class="white" href="/privacy-policy">Privacy Policy</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 PT. Irhamindo Laksono</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->

        <!-- Scripts -->
    <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="assets/hehe/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="assets/hehe/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="assets/hehe/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="assets/hehe/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="assets/hehe/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="assets/hehe/js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="assets/hehe/js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="assets/hehe/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="assets/hehe/js/scripts.js"></script> <!-- Custom scripts -->
    
</body>
</html>