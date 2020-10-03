<!DOCTYPE HTML>
<!--
    Editorial by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Inquiry Lists</title>
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
                                    <h2><strong>Inquiry List</strong></h2>
                                </header>
                        <!-- Section -->
                                <section>
                                                <!-- Table -->
                                                    <div class="table-wrapper">
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Email</th>
                                                                    <th>Phone number</th>
                                                                    <th>Message</th>
                                                                    <th>Status</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($inquiry as $i)
                                                                <tr>
                                                                    <td>{{$i->contact_us_name}}</td>
                                                                    <td>{{$i->contact_us_email}}</td>
                                                                    <td>{{$i->contact_us_phone}}</td>
                                                                    <td>{{$i->contact_us_msg}}</td>
                                                                    @if ($i->contact_us_status == 0)
                                                                    <td>Not Answered</td>
                                                                    @else
                                                                    <td>Answered</td>
                                                                    @endif
                                                                    @if ($i->contact_us_status == 0)
                                                                    <td>
                                                                        <form method="POST" action="contact_us_list/done/{{$i->contact_us_id}}">
                                                                            @csrf
                                                                            <ul class="actions">
                                                                                <li><button type="submit" class="button primary">Mark as answered</button></li>
                                                                            </ul>
                                                                        </form>
                                                                    </td>
                                                                    @else
                                                                    <td></td>
                                                                    @endif
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <p>Last updated at {{ date('Y-m-d H:i:s') }}</p>
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
                                        <li><a href="/">Admininstrator Dashboard</a></li>
                                        <li><a href="/product_list">Product List</a></li>
                                        <li><a href="/contact_us_list"><b>Inquiry List</b></a></li>
                                    </ul>
                                </nav>

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