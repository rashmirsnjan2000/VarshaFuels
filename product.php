<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Products</title>
    <link rel="icon" href="images/varshafuelslogo.png" type="image/x-icon">


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <style>
    .loader-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1000;
    }

    /* Spinner animation */
    .loader {
        border: 8px solid #f3f3f3;
        border-top: 8px solid #3498db;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        animation: spin 1s linear infinite;
    }

    /* Keyframes for the spinning effect */
    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
    </style>

</head>

<body class="sub_page">

    <div class="loader-container" id="loader">
        <div class="loader"></div>
    </div>

    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="header_top">
                <div class="container-fluid header_top_container">
                    <div class="lang_box dropdown">

                        <img src="images/varshafuelslogo.png" alt="" style="width: 120px;">
                    </div>
                    <div class="contact_nav">
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true" style="color: #02205C; margin-top: -1px;"></i>
                            <span>
                                Call : +91 9937250005
                            </span>
                        </a>
                        <a href="">
                            <i class="fa fa-envelope" aria-hidden="true" style="color: #02205C; margin-top: -1px;"></i>
                            <span>
                                Email : varshafuels.bpcl@gmail.com
                            </span>
                        </a>

                    </div>
                    <div class="social_box">
                        <a href="https://www.facebook.com/varshafuels">
                            <i class="fa fa-facebook" aria-hidden="true" style="color: #02205C;" title="facebook"></i>
                        </a>
                        <a href="https://x.com/varshafuels">
                            <i class="fa fa-twitter" aria-hidden="true" style="color: #02205C;" title="twitter"></i>
                        </a>
                        <a href="https://www.instagram.com/varshafuels/">
                            <i class="fa fa-instagram" aria-hidden="true" style="color: #02205C;" title="instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header_bottom">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container ">
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class=""> </span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav  ">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="about.php"> About Us</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="product.php">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="gallery.php">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="order.php">Order Here</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact Us</a>
                                </li>

                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- end header section -->
    </div>


    <!-- project section -->

    <section class="project_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Products
                </h2>
                <p>
                    As a trusted Bharat Petroleum Corporation Limited (BPCL) dealer, Varsha Fuels specializes in
                    providing
                    high-quality petroleum products tailored to meet the diverse needs of its customers in Bhadrak Town,
                    Odisha.
                    Our primary products include:
                </p>
            </div>
            <div class="carousel-wrap ">
                <div class="filter_box">
                    <h6>
                        Category filter
                    </h6>
                    <nav class="owl-filter-bar">
                        <a href="#" class="item active" data-owl-filter="*">All</a>
                        <a href="#" class="item" data-owl-filter=".painting">Petrol</a>
                        <a href="#" class="item" data-owl-filter=".reconstruction">Diesel</a>
                        <a href="#" class="item" data-owl-filter=".repair">Lubricant</a>
                        <!-- <a href="#" class="item" data-owl-filter=".residential">Residential </a>
            <a href="#" class="item" data-owl-filter=".styling">Styling </a> -->
                    </nav>
                </div>

                <div class="owl-carousel project_carousel">
                    <div class="item painting">
                        <div class="box">
                            <div class="img-box">
                                <img src="images/petrol 1.jpg" alt="" />
                                <!-- <a href="" class="pin_link">
                  <i class="fa fa-link" aria-hidden="true"></i>
                </a> -->
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Petrol
                                </h5>
                                <p>
                                    Known for its reliability and consistent performance, BPCL's PETROL & SPEED (
                                    Premium ) is
                                    refined to power a wide range of vehicles efficiently, ensuring smooth and powerful
                                    drives for our
                                    customers.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item reconstruction">
                        <div class="box">
                            <div class="img-box">
                                <img src="images/images (1).jfif" alt="" />
                                <!-- <a href="" class="pin_link">
                  <i class="fa fa-link" aria-hidden="true"></i>
                </a> -->
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Diesel
                                </h5>
                                <p>
                                    Essential for commercial vehicles, heavy machinery, and other diesel engines, our
                                    diesel meets
                                    BPCL's rigorous quality standards, delivering optimal performance, fuel efficiency,
                                    and engine
                                    longevity.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item repair">
                        <div class="box">
                            <div class="img-box">
                                <img src="images/Lubricant.jpg" alt="" />
                                <!-- <a href="" class="pin_link">
                  <i class="fa fa-link" aria-hidden="true"></i>
                </a> -->
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Lubricant Oil (Mak Lubricants)
                                </h5>
                                <p>
                                    We offer a variety of Mak lubricants designed to reduce engine wear
                                    and improve fuel efficiency. Our lubricant oils ensure vehicles and machinery
                                    perform at their best,
                                    even in demanding conditions.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- end project section -->

    <!-- info section -->
    <section class="info_section ">

        <div class="container">
            <div class="contact_nav">
                <a href="">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>
                        Call : +91 9937250005
                    </span>
                </a>
                <a href="">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>
                        Email : varshafuels.bpcl@gmail.com
                    </span>
                </a>
                <a href="">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span>
                        Location : BPCL Retail Outlet Naripur, Bhadrak town, Bhadrak, Odisha 756100
                    </span>
                </a>
            </div>

            <div class="info_top ">
                <div class="row info_main_row">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="info_links">
                            <h4>
                                QUICK LINKS
                            </h4>
                            <div class="info_links_menu">
                                <a class="" href="index.php">Home <span class="sr-only">(current)</span></a>
                                <!-- <a class="" href="service.html">Services</a> -->
                                <a class="" href="about.php"> About</a>
                                <a class="" href="product.php">Products</a>
                                <a class="" href="gallery.php">Gallery</a>
                                <a class="" href="contact.php">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 mx-auto">
                        <div class="info_post">
                            <h5>
                                FACEBOOK FEEDS
                            </h5>
                            <div class="post_box">
                                <div class="img-box">
                                    <img src="images/gallery1.jpg" alt="">
                                </div>
                                <div class="img-box">
                                    <img src="images/gallery2.jpg" alt="">
                                </div>
                                <div class="img-box">
                                    <img src="images/gallery3.jpg" alt="">
                                </div>
                                <div class="img-box">
                                    <img src="images/gallery4.jpg" alt="">
                                </div>
                                <div class="img-box">
                                    <img src="images/gallery5.jpg" alt="">
                                </div>
                                <div class="img-box">
                                    <img src="images/gallery6.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info_form">
                            <h4>
                                SIGN UP TO OUR NEWSLETTER
                            </h4>
                            <form action="">
                                <input type="text" placeholder="Enter Your Email" />
                                <button type="submit">
                                    Subscribe
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info_bottom">
                <div class="row">
                    <div class="col-md-2">
                        <div class="info_logo">
                            <a href="">
                                <img src="images/varshafuelslogo.png" alt="" style="width: 120px;">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="social_box">
                            <a href="https://www.facebook.com/varshafuels">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="https://x.com/varshafuels">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <!-- <i class="fa fa-linkedin" aria-hidden="true"></i> -->
                            </a>
                            <a href="https://www.instagram.com/varshafuels/">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end info_section -->

    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="#">Varshafuels</a>
            </p>
        </div>
    </footer>
    <!-- footer section -->

    <script>
    // pageloder
    // Hide loader and show main content when the page fully loads
    window.addEventListener("load", function() {
        const loader = document.getElementById("loader");
        const content = document.getElementById("content");

        // Fade out loader
        loader.style.opacity = 0;
        loader.style.transition = "opacity 0.5s";

        // After fade-out, hide loader and show content
        setTimeout(() => {
            loader.style.display = "none";
            content.style.display = "block";
        }, 500);
    });
    // pageloder
    </script>

    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!--  OwlCarousel 2 - Filter -->
    <script src="https://huynhhuynh.github.io/owlcarousel2-filter/dist/owlcarousel2-filter.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

</body>

</html>