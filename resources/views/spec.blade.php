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
    <title>PT Trikarya Berkah Abadi - Product Specification</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">

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
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top" style="background-color: #acaeb0; height: 80px;">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="">
            <img src="{{asset('logo-only.png')}}" class="img-fluid gambar-hp" alt="alternative" media="(max-width: 800px)">
            <img src="{{asset('logo.png')}}" class="img-fluid gambar-pc" alt="alternative" media="(min-width: 800px)">
        </a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/#header">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/#intro">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/#division">DIVISION</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/#contact">CONTACT</a>
                </li>
            </ul>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->


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

    <h2 class="text-center">{{$query->product_name}}</h2>
    <!-- Terms Content -->
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <table class="table">
                            <tr>
                                <th scope="col">Purity</th>
                                <td>min. {{$query->purity}}%</td>
                            </tr>
                            <tr>
                                <th scope="col">{{$query->product_element}} ({{$query->product_element_symbol}}) content</th>
                                <td>min. {{$query->element_purity}}%</td>
                            </tr>
                            <tr>
                                <th scope="col">Packaging</th>
                                <td>{{$query->packaging}}</td>
                            </tr>
                        </table>
                    </div> <!-- end of text-container -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic -->
    <div class="slider">
        <h2 class="text-center">Application
        </h2>
        <br>
        @if($id == 11 || $id == 12)
        <div class="row">
            <div class="col-lg-12">

                <!-- Card Slider -->
                <div class="slider-container">
                    <div class="swiper-container card-slider">
                        <div class="swiper-wrapper">

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img style="display: block; margin-left: auto; margin-right: auto; width: 170px; height: 170px;" src="{{asset('images/poultry feed.jpg')}}" alt="alternative">
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
                                    <img style="display: block; margin-left: auto; margin-right: auto; width: 170px; height: 170px;" src="{{asset('images/copper-wire-113249_1920.jpg')}}" alt="alternative">
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
                                    <img style="display: block; margin-left: auto; margin-right: auto; width: 170px; height: 170px;" src="{{asset('images/Palm-oil-Indonesia-e1566559194709.jpg')}}" alt="alternative">
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
                                    <img style="display: block; margin-left: auto; margin-right: auto; width: 170px; height: 170px;" src="{{asset('images/water-1018808_1920.jpg')}}" alt="alternative">
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
        @else
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
        @endif
    </div>
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
        <div class="container" style="background-image: url(" gunung.jpg");">
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
        .slider {
            padding-top: 6.375rem;
            padding-bottom: 6.5rem;
        }

        .slider h2 {
            margin-bottom: 0.75rem;
            text-align: center;
        }

        .slider .slider-container {
            position: relative;
        }

        .slider .swiper-container {
            position: static;
            width: 90%;
            text-align: center;
        }

        .slider .swiper-button-prev:focus,
        .slider .swiper-button-next:focus {
            /* even if you can't see it chrome you can see it on mobile device */
            outline: none;
        }

        .slider .swiper-button-prev {
            left: -0.5rem;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2028%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23787976'%2F%3E%3C%2Fsvg%3E");
            background-size: 1.125rem 1.75rem;
        }

        .slider .swiper-button-next {
            right: -0.5rem;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2028%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23787976'%2F%3E%3C%2Fsvg%3E");
            background-size: 1.125rem 1.75rem;
        }

        .slider .card {
            position: relative;
            border: none;
            background-color: transparent;
            max-width: 100%;
            max-height: 100%;
        }

        .slider .card-image {
            width: 6rem;
            height: 6rem;
            margin-right: auto;
            margin-bottom: 0.25rem;
            margin-left: auto;
            border-radius: 50%;
        }

        .slider .card .card-body {
            padding-bottom: 0;
        }

        .slider .testimonial-text {
            margin-bottom: 0.625rem;
        }

        .slider .testimonial-author {
            color: #484a46;
        }
    </style>

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