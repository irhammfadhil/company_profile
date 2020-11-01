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
                                    <ul class="icons">
                                        <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                                        <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                                        <li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
                                        <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                                        <li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
                                    </ul>
                                </header>
                            <br>
                            <h2 style="text-align: center;">Our Products</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed ultrices tellus, ornare suscipit urna. Praesent faucibus lorem justo, iaculis tempus est tincidunt sit amet. Nunc a nibh ut nunc tempor aliquam. Etiam turpis erat, porttitor eu nibh non, dictum ornare leo. Curabitur vestibulum, quam suscipit pulvinar scelerisque, nunc ipsum porttitor eros, ac feugiat dolor risus nec lectus. Nullam vitae risus ac diam accumsan pellentesque sit amet vel massa. Nam blandit leo ut urna rhoncus lacinia. Vestibulum a lobortis dui. Duis et ante a ante laoreet consequat. Fusce sagittis facilisis est scelerisque vestibulum. In a diam magna. Phasellus sed nisl enim. Curabitur viverra libero ligula, in blandit enim laoreet ac. Donec consequat, eros at dignissim pretium, risus odio posuere dolor, in faucibus sem leo sed erat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur fringilla augue sit amet vulputate aliquam. </p>
                        <!-- Section -->
                                <section>
                                    <div class="posts">
                                        @foreach($product as $p)
                                        <article>
                                            <a href="#" class="image"><img style="width:400px;height:400px;" src="{{$p->product_img}}" alt="" /></a>
                                            <h3>{{$p->product_name}}</h3>
                                            <p>{{$p->product_desc}}</p>
                                            <p><b style="font-size: 24px;">Rp{{$p->product_price}}</b></p>
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
                                        <li class="icon solid fa-phone">+62 21 8240 9517</li>
                                        <li class="icon solid fa-phone">+62 811 890 135</li>
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