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
        var background = ["bahan-kimia.jpg", "handshake.jpg", "banner-pc.jpg"];
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
        <img src="{{asset('logo-only.png')}}" class="img-fluid gambar-hp" style="width: 10%; height: auto;" alt="alternative" media="(max-width: 800px)">
        <img src="{{asset('logo.png')}}" class="img-fluid gambar-pc" style="width: 40%; height: auto;" alt="alternative" media="(min-width: 800px)">

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
                    <a class="nav-link page-scroll" href="#division">DIVISION</a>
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
                            <h1 id="typing" style="display:inline; color: #2060a9;"></h1>
                            <h1 id="typing-innovation" style="display:inline; color: #e0b300;"></h1>
                            <p class="p-heading p-large fade-in-text">Your Reliable Partner</p>
                            <a class="btn-solid-lg page-scroll fade-in-text" style="background-color: #2060a9; color: #ffffff;" href="#intro">LEARN MORE</a>
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
                        <p>Welcome to our company!<br><br>
                            PT. Trikarya Berkah Abadi is located in Bekasi West Java. We are doing business in the field of chemical distributor and information & technology.</p>
                        <p>Our commitment to quality and customer satisfaction is what sets us apart from the competition.</p>
                        <p>At our company, we understand that our customers have unique needs and requirements, which is why we offer a wide range of products that can be tailored to fit any application.</p>
                        <p>You can explore our products and services below! Please do not hesitate to contact us if you have any specific requirements, as we are ready to meet your needs.
                        </p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container" style="box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22); margin-top: 5vh;">
                        <img class="img-fluid" src="images/the-periodic-table-4273681_1920.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div>
    </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->

    <div id="division" class="basic-1" style="background-color: #EEF5FF;">
        <div class="container">
            <div class="section-title text-center">OUR VISION</div>
            <br>
            <div class="row gy-4">

                <div class="col-lg-4 col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative text-center">
                        <img src="images/vision.svg" style="width: 25%; height: auto;" class="img-fluid text-center">
                        <br>
                        <h3>Vision</h3>
                        <p>Become the leading chemical supplier and IT services provider in Indonesia.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative text-center">
                        <img src="images/mission.svg" style="width: 25%; height: auto;" class="img-fluid text-center">
                        <br>
                        <h3>Our Mission</h3>
                        <p>Become a reliable local chemical supplier and IT services provider in Indonesia.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative text-center">
                        <img src="images/value.svg" style="width: 25%; height: auto;" class="img-fluid text-center">
                        <br>
                        <h3>Our Value</h3>
                        <p>Safety & Wellness</p>
                        <p>Honesty & Integrity</p>
                        <p>Customer Focus</p>
                        <p>Innovation</p>
                        <p>Sustainability</p>
                        <p>Respect</p>
                    </div>
                </div><!-- End Service Item -->

            </div>
        </div>
    </div> <!-- end of container -->


    <!-- Intro -->
    <div id="division" class="basic-1" style="background-color: #ffffff;">
        <div class="container">
            <h2 class="section-title text-center">OUR DIVISION</h2>
            <br>
            <div class="row gy-4">

                <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative text-center" style="background-color: #EEF5FF;">
                        <img src="kimia.png" style="width: 25%; height: auto;" class="img-fluid text-center">
                        <br>
                        <h3>Chemical Division</h3>
                        <p>We are a leading chemical distributor company that specializes in sourcing and supplying high-quality chemicals to a wide range of industries. Recently we are main distributor of Copper sulphate and Ferrous Sulphate.</p>
                        <a href="https://chemicals.trikaryaberkahabadi.com" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative text-center" style="background-color: #EEF5FF;">
                        <img src="computer.png" style="width: 25%; height: auto;" class="img-fluid text-center">
                        <h3>Information Technology Division</h3>
                        <p>We also offer an IT services as your needs, such as mobile and web development, information system development, and many more.</p>
                        <a href="#" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

            </div>
        </div>
    </div> <!-- end of container -->

    <!-- end of testimonials -->

    <!-- Contact -->
    <div id="contact" class="form-2" style="background-color: #EEF5FF;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">CONTACT</div>
                        <h2>Get In Touch Using The Form</h2>
                        <p>We are happy to answer your sales question. Fill out the form and we'll be in touch as soon as possible.</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="address"><i class="fas fa-map-marker-alt"></i>Villa Galaxy, Jalan Lotus Raya D2/7, Bekasi, West Java, Indonesia 17147</li>
                            <i class="fas fa-phone"></i><a href="tel:62811890135">+62 811 890 135</a>
                            <i class="fas fa-envelope"></i><a href="mailto:inquiry@trikaryaberkahabadi.com">inquiry@trikaryaberkahabadi.com</a>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <form method="post" action="/contact_us">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input style="box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);" type="text" name="name" class="form-control-input" id="name" value="" placeholder="Name" required />
                        </div>
                        <div class="form-group">
                            <input style="box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);" type="email" name="email" class="form-control-input" id="email" value="" placeholder="Email (required)" />
                        </div>
                        <div class="form-group">
                            <input style="box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);" type="text" name="phone_number" class="form-control-input" id="phone_number" value="" placeholder="Phone Number" />
                        </div>

                        <div class="form-group">
                            <textarea style="box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);" name="message" class="form-control-textarea" id="message" placeholder="Enter your message..."></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button" style="background-color: #113448; color: #ffffff;">SEND MESSAGE</button>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->

    <!-- Footer -->
    {{--<div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-container about text-center">

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-5">
                    <h4 style="font-size: 80%;">Our Commitment</h4>
                    <p class="white" style="font-size: 80%;">We realized that our clients are our partners and we committed to help them achieve their objectives.</p>
                </div>
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
    </div> <!-- end of footer -->--}}
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <img src="{{asset('logo.png')}}" class="img-fluid" style="width: 50%; height: auto;">
                    <br><br>
                    <p class="p-small">Copyright © {{date('Y')}} PT. Trikarya Berkah Abadi. All Rights Reserved</p>
                    <br>
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
        @media only screen and (max-width: 500px) {
            .navbar-brand {
                margin-right: -5rem;
            }

            .gambar-pc {
                display: none;
            }

            .gambar-hp {
                display: block;
            }
        }

        @media only screen and (min-width: 500px) {
            .gambar-pc {
                display: block;
            }

            .gambar-hp {
                display: none;
            }
        }

        .gambar-produk {
            overflow: hidden;
        }

        .card-img-top:hover {
            transform: scale(1.2);
        }

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
    <style>
        .post-item {
            /*box-shadow: 0px 2px 20px rgba(0, 0, 0, 0.06);*/
            transition: 0.3s;
            background: #c3c3c3;
        }

        .post-item .post-img img {
            transition: 0.5s;
        }

        .post-item .post-date {
            position: absolute;
            right: 0;
            bottom: 0;
            background-color: var(--color-primary);
            color: #fff;
            text-transform: uppercase;
            font-size: 13px;
            padding: 6px 12px;
            font-weight: 500;
        }

        .post-item .post-content {
            padding: 30px;
        }

        .post-item .post-title {
            font-size: 24px;
            color: var(--color-secondary);
            font-weight: 700;
            transition: 0.3s;
            margin-bottom: 15px;
        }

        .post-item .meta i {
            font-size: 16px;
            color: var(--color-primary);
        }

        .post-item .meta span {
            font-size: 15px;
            color: #838893;
        }

        .post-item hr {
            color: #888;
            margin: 20px 0;
        }

        .post-item .readmore {
            display: flex;
            align-items: center;
            font-weight: 600;
            line-height: 1;
            transition: 0.3s;
            color: #838893;
        }

        .post-item .readmore i {
            line-height: 0;
            margin-left: 6px;
            font-size: 16px;
        }

        .post-item:hover .post-title,
        .post-item:hover .readmore {
            color: var(--color-primary);
        }

        .post-item:hover .post-img img {
            transform: scale(1.1);
        }

        .btn-get-started {
            font-family: var(--font-primary);
            font-weight: 500;
            font-size: 16px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 12px 40px;
            border-radius: 50px;
            transition: 0.5s;
            margin: 10px;
            color: #000000;
            border: 2px solid var(--color-primary);
        }

        .btn-get-started:hover {
            background: var(--color-primary);
        }

        .service-item {
            padding: 40px;
            background: #fff;
            height: 100%;
            box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
        }

        .service-item .icon {
            width: 48px;
            height: 48px;
            position: relative;
            margin-bottom: 50px;
        }

        .service-item .icon i {
            color: #3385c6;
            font-size: 40px;
            transition: ease-in-out 0.3s;
            z-index: 2;
            position: relative;
            line-height: 1.8;
        }

        .service-item .icon:before {
            position: absolute;
            content: "";
            height: 100%;
            width: 100%;
            background: #f0f1f2;
            border-radius: 50px;
            z-index: 1;
            top: 10px;
            right: -15px;
            transition: 0.3s;
        }

        .service-item h3 {
            color: var(--color-default);
            font-weight: 700;
            margin: 0 0 20px 0;
            padding-bottom: 8px;
            font-size: 22px;
            position: relative;
            display: inline-block;
            border-bottom: 4px solid #a0d2fa;
            transition: 0.3s;
        }

        .service-item p {
            line-height: 24px;
            font-size: 14px;
            margin-bottom: 0;
        }

        .service-item .readmore {
            margin-top: 15px;
            display: inline-block;
            color: #3385c6;
        }

        .service-item:hover .icon:before {
            background: #3385c6;
        }

        .service-item:hover h3 {
            border-color: #3385c6;
        }
    </style>
    <script>
        var text = 'PT TRIKARYA BERKAH ABADI ';
        var txt_innovation = '';
        var chars = text.split('');
        var chars_innovation = txt_innovation.split('');
        var container = document.getElementById("typing");
        var container_innovation = document.getElementById("typing-innovation");
        var i = 0,
            j = 0;
        var added = 0;
        setInterval(function() {
            if (i < chars.length) {
                container.innerHTML += chars[i++];
            } else if (i == chars.length && j < chars_innovation.length) {
                container_innovation.innerHTML += chars_innovation[j++];
            } else {
                i = 0;
                j = 0;
                container.innerHTML = ' ';
                container_innovation.innerHTML = ' ';
            }
        }, 400);
    </script>

</body>

</html>