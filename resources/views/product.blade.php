<!DOCTYPE HTML>
<!--
    Editorial by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>PT Irhamindo Laksono - Our Products</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
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
                                </header>
                            <br>
                            <h2 style="text-align: center;">Our Products</h2>
                            <p>Copper(II) sulfate, also known as copper sulphate, are the inorganic compounds with the chemical formula CuSO4(H2O)x, where x can range from 0 to 5. The pentahydrate (x = 5) is the most common form. Copper Sulphate use in micro-nutirents as nutrients for plant's growth, also use for fertilizer. It is also used in Poultry & Cattle Feed as mineral and industrial use. </p>

                            <h3>General Technical Specification</h3>

                            <table class="table table-sm">
                              <thead>
                                <tr>
                                  <th scope="col">Parameters</th>
                                  <th scope="col">Results</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Product Name</td>
                                  <td><b>Copper Sulphate Pentahydrate</b></td>
                                </tr>
                                <tr>
                                  <td>Purity</td>
                                  <td>min 99.00%</td>
                                </tr>
                                <tr>
                                  <td>Copper</td>
                                  <td>min 24.50%</td>
                                </tr>
                                <tr>
                                  <td>Packing</td>
                                  <td>25 or 50 kg / P.P woven bag</td>
                                </tr>
                              </tbody>
                            </table>
                            <br>
                            <p>We produce two types of copper sulphate</p>
                        <!-- Section -->
                                <section>
                                    <div class="posts">
                                        @foreach($product as $p)
                                        <article>
                                            <a href="#" class="image"><img style="width:400px;height:400px;" src="{{$p->product_img}}" alt="" /></a>
                                            <h3>{{$p->product_name}}</h3>
                                            <p>{{$p->product_desc}}</p>
                                            <p><b style="font-size: 24px;">Call For Price</b></p>
                                            <ul class="actions">
                                                <li><a href="{{$p->product_technical_spec}}" class="button">Download Technical Spec</a></li>
                                            </ul>
                                        </article>
                                        @endforeach
                                    </div>
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
                                        <li><a href="/">Homepage</a></li>
                                        <li><a href="/about_us">About Us</a></li>
                                        <li><a href="/product"><b>Our Products</b></a></li>
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