<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <!-- SEO Meta Tags -->
    <meta name="description" content="PT. Trikarya Berkah Abadi are a supplier of high-quality chemicals and raw materials serving a diverse range of industries. Our commitment to quality and customer satisfaction is what sets us apart from the competition." />
    <meta name="keywords" content="pt trikarya berkah abadi, trikarya berkah abadi, supplier bahan kimia bekasi, supplier bahan kimia jakarta, supplier bahan kimia jabodetabek, copper sulphate bekasi, cuso4 bekasi, copper sulphate jakarta, cuso4 jakarta, copper sulphate jabodetabek, cuso4 jabodetabek, ferrous sulphate bekasi, feso4 bekasi, ferrous sulphate jakarta, feso4 jakarta, ferrous sulphate jabodetabek, feso4 jabodetabek" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://www.trikaryaberkahabadi.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Website resmi PT. Trikarya Berkah Abadi">
    <meta property="og:description" content="PT. Trikarya Berkah Abadi are a supplier of high-quality chemicals and raw materials serving a diverse range of industries. Our commitment to quality and customer satisfaction is what sets us apart from the competition.">
    <meta property="og:image" content="">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="www.trikaryaberkahabadi.com">
    <meta property="twitter:url" content="https://www.trikaryaberkahabadi.com/">
    <meta name="twitter:title" content="Website Resmi PT. Trikarya Berkah Abadi">
    <meta name="twitter:description" content="PT. Trikarya Berkah Abadi are a supplier of high-quality chemicals and raw materials serving a diverse range of industries. Our commitment to quality and customer satisfaction is what sets us apart from the competition.">
    <meta name="twitter:image" content="">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-77GR0NDYNB"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-77GR0NDYNB');
    </script>

    <!-- Website Title -->
    <title>PT Trikarya Berkah Abadi</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">

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
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
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
        var background = ["images/passage-4654260_1920.jpg", "images/light-bulb-5244001_1920.jpg", "handshake.jpg"];
        $(function() {
            var i = -1;
            console.log(i);
            $("#header").css("background", "linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url(" + background[i] + ") center center no-repeat");
            $('#header').css("background-size", "cover");
            $('#header').css("max-width", "100%");
            $('#header').css("height", "auto");
            $('#header').css("object-fit", "cover");
            setInterval(function() {
                i++;
                console.log(i);
                $("#header").css("background", "linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url(" + background[i] + ") center center no-repeat");
                $('#header').css("background-size", "cover");
                $('#header').css("max-width", "100%");
                $('#header').css("height", "auto");
                $('#header').css("object-fit", "cover");
                if (i == background.length - 1) {
                    i = -1;
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
        <a class="navbar-brand logo-image" href=""><img src="{{asset('logo.png')}}" class="img-fluid" alt="alternative"></a>

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
                    <a class="nav-link page-scroll" href="#applications">USECASES</a>
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
                        <div class="text-container fade-in-text">
                            <h2 style="color: white;" class="fade-in-text">Welcome to</h2>
                            <h1 class="fade-in-text">PT. TRIKARYA BERKAH ABADI</h1>
                            <p class="p-heading p-large fade-in-text">Your Reliable Partner</p>
                            <a class="btn-solid-lg page-scroll fade-in-text" href="#intro">LEARN MORE</a>
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
                        <p>PT. Trikarya Berkah Abadi is located in Bekasi West Java. We were founded in 2023. We are a supplier of high-quality chemicals and raw materials serving a diverse range of industries. Our commitment to quality and customer satisfaction is what sets us apart from the competition.</p>
                        <p>At our company, we understand that our customers have unique needs and requirements, which is why we offer a wide range of products that can be tailored to fit any application. Whether you need bulk quantities of raw materials or specialized chemicals for a specific process, we've got you covered.</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/the-periodic-table-4273681_1920.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div>
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
                        <span class="fa-stack text-center">
                            <img src="images/vision.svg" style="width: 100px; height:100px;"></img>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Our Vision</h4>
                            <p>Become the leading chemical supplier and IT services provider in Indonesia.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack text-center">
                            <img src="images/mission.svg" style="width: 100px; height:100px;"></img>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Our Mission</h4>
                            <p>Become a reliable local chemical supplier and IT services provider in Indonesia.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack text-center">
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

    <!-- Intro -->
    <div id="intro" class="basic-1">
        <div class="container">
            <h2 class="section-title text-center">OUR DIVISION</h2>
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center">
                    <a href="/#applications"><img src="kimia.png" style="width: 25%; height: auto;" class="img-fluid text-center"></a>
                    <br>
                    <a href="/#applications" style="text-decoration: none;">
                        <h4 class="card-title">Chemical Division</h4>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 text-center">
                    <img src="computer.png" style="width: 25%; height: auto;" class="img-fluid text-center">
                    <br>
                    <h4 class="card-title">Information Technology Division</h4>
                </div>
                <!-- end of card -->
            </div>
        </div>
    </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->

    <!-- Testimonials -->
    <div id="applications" class="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title">USE CASES</h2>
                    <br>
                    <h3 class="p-heading">Our Product has extensive range of uses in industry as shown below</h3>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <h2 class="section-title">Copper Sulphate</h2>
            <br>
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
            <hr>
            <h2 class="section-title">Ferrous Sulphate</h2>
            <br>
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img style="display: block; margin-left: auto; margin-right: auto; width: 170px; height: 170px;" src="{{asset('fertilizer.png')}}" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-author">Fertilizer</div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img style="display: block; margin-left: auto; margin-right: auto; width: 170px; height: 170px;" src="{{asset('batik.png')}}" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-author">Batik Colouring</div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img style="display: block; margin-left: auto; margin-right: auto; width: 170px; height: 170px;" src="{{asset('animal.png')}}" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-author">Animal Skin Tanning</div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img style="display: block; margin-left: auto; margin-right: auto; width: 170px; height: 170px;" src="{{asset('cement.png')}}" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-author">Reductor in Cement Industry</div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img style="display: block; margin-left: auto; margin-right: auto; width: 170px; height: 170px;" src="{{asset('chicken.png')}}" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-author">Poultry Feed</div>
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
                            <li><i class="fas fa-envelope"></i><a href="mailto:inquiry@trikaryaberkahabadi.com">inquiry@trikaryaberkahabadi.com</a></li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <form method="post" action="/contact_us">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" name="name" class="form-control-input" id="name" value="" placeholder="Name" required />
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
                        <h4>Our Commitment</h4>
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
                    <p class="p-small">Copyright © {{date('Y')}} PT. Trikarya Berkah Abadi. All Rights Reserved</p>
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

    <style>
        .fade-in-text {
            animation: fadeIn 5s;
            -webkit-animation: fadeIn 5s;
            -moz-animation: fadeIn 5s;
            -o-animation: fadeIn 5s;
            -ms-animation: fadeIn 5s;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-moz-keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-o-keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-ms-keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
    </style>

</body>

</html>