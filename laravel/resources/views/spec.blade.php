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
    <title>PT Irhamindo Laksono - Product Specification</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="assets/hehe/css/bootstrap.css" rel="stylesheet">
    <link href="assets/hehe/css/fontawesome-all.css" rel="stylesheet">
    <link href="assets/hehe/css/swiper.css" rel="stylesheet">
	<link href="assets/hehe/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/hehe/css/style.css" rel="stylesheet">
	
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
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top" style="background-color: #0288d1;">
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
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->


    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="/#services">Product</a><i class="fa fa-angle-double-right"></i><span>Product Specification</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->

    <br>

    <h2 class="text-center">{{$query[0]->product_name}}</h2>
    <!-- Terms Content -->
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <table class="table">
                            <tr>
                                <th scope="col">Purity</th>
                                <td>min. {{$query[0]->purity}}%</td>
                            </tr>
                            <tr>
                                <th scope="col">{{$query[0]->product_element}} ({{$query[0]->product_element_symbol}}) content</th>
                                <td>min. {{$query[0]->element_purity}}%</td>
                            </tr>
                            <tr>
                                <th scope="col">Packaging</th>
                                <td>{{$query[0]->packaging}}</td>
                            </tr>
                        </table>
                                                <!--
                        <h3>Limitations Of Liability</h3>
                        <p>Aria also automatically collects and receives certain information from your computer or mobile device, including the activities you perform on our Website, the Platforms, and the Applications, the type of hardware and software you are using (for example, your operating system or browser), and information obtained from cookies. For example, each time you visit the Website or otherwise use the Services, we automatically collect your IP address, browser and device type, access times, the web page from which you came, the regions from which you navigate the web page, and the web page(s) you access (as applicable).</p>
                        <p>When you first register for a Aria account, and when you use the Services, we collect some <a class="green" href="#your-link">Personal Information</a> about you such as:</p>
                        <ul class="list-unstyled li-space-lg indent">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">The geographic area where you use your computer and mobile devices</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Your full name, username, and email address and other contact details</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">A unique Aria user ID (an alphanumeric string) which is assigned to you upon registration</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Other optional information as part of your account profile</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Your IP Address and, when applicable, timestamp related to your consent and confirmation of consent</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Other information submitted by you or your organizational representatives via various methods</div>
                            </li>
                        </ul>-->
                    </div> <!-- end of text-container -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic -->
    <!-- end of terms content -->
    <!-- Scripts -->
    <script src="assets/hehe/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
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