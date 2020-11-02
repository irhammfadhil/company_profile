<!DOCTYPE HTML>
<!--
    Editorial by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Editorial by HTML5 UP</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="assets/css/main.css" />
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
                                    <ul class="icons">
                                        <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                                        <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                                        <li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
                                        <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                                        <li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
                                    </ul>
                                </header>
                                <br>
                                <h2 style="text-align:center;">Welcome to</h1>
                                <h1 style="text-align:center;"> PT. IRHAMINDO LAKSONO</h1>
                                <h2 style="text-align:center; font-size: 30px;">Your Reliable Chemical Partner </h2>
                            <!-- Banner -->
                                <section id="banner">
                                    <div class="content">
                                        <p>PT. Irhamindo Laksono has the quality products you need with best price you want. We’ve been serving the industries in all over Indonesia since 1999 and take pride in our reputation as the one of the area’s premium suppliers. Let us know what products you’re looking for, and we’ll be happy to supply them to you in no time whatsoever.</p>
                                        <ul class="actions">
                                            <li><a href="/about_us" class="button big">Learn More</a></li>
                                        </ul>
                                    </div>
                                    <div class="w3-content w3-display-container">
                                      <img class="mySlides" src="images/pic01.jpg" style="width:100%">
                                      <img class="mySlides" src="images/pic02.jpg" style="width:100%">
                                      <img class="mySlides" src="images/pic03.jpg" style="width:100%">
                                      <img class="mySlides" src="images/pic04.jpg" style="width:100%">

                                      <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                                      <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                                    </div>

                                    <script>
                                    var slideIndex = 1;
                                    showDivs(slideIndex);

                                    function plusDivs(n) {
                                      showDivs(slideIndex += n);
                                    }

                                    function showDivs(n) {
                                      var i;
                                      var x = document.getElementsByClassName("mySlides");
                                      if (n > x.length) {slideIndex = 1}
                                      if (n < 1) {slideIndex = x.length}
                                      for (i = 0; i < x.length; i++) {
                                        x[i].style.display = "none";  
                                      }
                                      x[slideIndex-1].style.display = "block";  
                                    }
                                    </script>
                                </section>
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
                                        <li><a href="/"><b>Home Page</b></a></li>
                                        <li><a href="/about_us">About Us</a></li>
                                        <li><a href="/product">Our Products</a></li>
                                        <li><a href="/contact_us">Contact Us</a></li>
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
                                        <li class="icon solid fa-home">1234 Somewhere Road #8254<br />
                                        Nashville, TN 00000-0000</li>
                                    </ul>
                                </section>

                            <!-- Footer -->
                                <footer id="footer">
                                    <p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
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