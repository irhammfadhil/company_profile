<!DOCTYPE HTML>
<!--
    Editorial by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>PT Irhamindo Laksono - Contact Us</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body class="is-preload">

        <!-- Wrapper -->
            <div id="wrapper">

                <!-- Main -->
                    <div id="main">
                        <div class="inner">

                            <!-- Header -->
                                <header id="header">
                                    <a href="index.html" class="logo"><strong>PT. Irhamindo Laksono</strong></a>
                                </header>
                            <br>
                            @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                {{ $error }} <br/>
                                @endforeach
                            </div>
                            @endif
                            @if(Session::get('message') == 'Success!')
                              <div class="alert alert-success" role="alert">
                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                  {{Session::get('message')}}
                              </div>
                            @endif
                            <h2 style="text-align: center;">Contact Us</h2>
                            <br>
                            <!-- Form -->
                                                    <form method="post" action="/contact_us">
                                                        {{ csrf_field() }}
                                                        <div class="row gtr-uniform">
                                                            <div class="col-6 col-12-xsmall">
                                                                <input type="text" name="name" id="name" value="" placeholder="Name" />
                                                            </div>
                                                            <div class="col-6 col-12-xsmall">
                                                                <input type="email" name="email" id="email" value="" placeholder="Email (required)" />
                                                            </div>
                                                            <div class="col-6 col-12-xsmall">
                                                                <input type="text" name="phone_number" id="phone_number" value="" placeholder="Phone Number" />
                                                            </div>
                                                            <!-- Break -->
                                                            <div class="col-12">
                                                                <textarea name="message" id="message" placeholder="Enter your message..." rows="6"></textarea>
                                                            </div>
                                                            <!-- Break -->
                                                            <div class="col-12">
                                                                <ul class="actions">
                                                                    <li><input type="submit" value="Send Message" class="primary" /></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </form>
                        </div>
                    </div>

                <!-- Sidebar -->
                    <div id="sidebar">
                        <div class="inner">

                            <!-- Search -->
                                <section id="search" class="alt">
                                    <form method="post" action="#">
                                        <input type="text" name="query" id="query" placeholder="Search" />
                                    </form>
                                </section>

                            <!-- Menu -->
                                <nav id="menu">
                                    <header class="major">
                                        <h2>Menu</h2>
                                    </header>
                                    <ul>
                                        <li><a href="/">Homepage</a></li>
                                        <li><a href="/about_us">About Us</a></li>
                                        <li><a href="/product">Our Products</a></li>
                                        <li><a href="/contact_us"><b>Contact Us</b></a></li>
                                    </ul>
                                </nav>

                            <!-- Section -->
                                <section>
                                    <header class="major">
                                        <h2>Get in touch</h2>
                                    </header>
                                    <ul class="contact">
                                        <li class="icon solid fa-envelope"><a href="#">irhamindo.laksono@gmail.com</a></li>
                                        <li class="icon solid fa-phone">+62 811 890 135</li>
                                        <li class="icon solid fa-phone">+62 21 8240 9517</li>
                                        <li class="icon solid fa-home">Villa Galaxy Jl. Lotus Raya D2/7<br />
                                        Jakasetia, Bekasi Selatan, Bekasi 17147</li>
                                    </ul>
                                </section>

                            <!-- Footer -->
                                <footer id="footer">
                                    <p class="copyright">&copy; 2020 PT Irhamindo Laksono. All rights reserved. Designed by <a href="https://html5up.net">HTML5 UP</a>.</p>
                                </footer>

                        </div>
                    </div>

            </div>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/browser.min.js"></script>
            <script src="assets/js/breakpoints.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

    </body>
</html>