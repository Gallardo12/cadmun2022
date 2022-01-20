<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>CADMUN 2022 - Home</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


    <!-- Favicons -->
    <link href="assets/img/CADMUN_transparent_logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Restaurantly - v3.7.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <style>
        .dropdown-menu {
            width: 100%;
        }

        .scrollable-menu {
            height: auto;
            max-height: 350px;
            overflow-x: hidden;
        }

    </style>

    <!--for flipcard-->
    <style>
        .card-block .btn-outline-primary {
            width: 100%;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            bottom: 0;
            left: 0;
            position: absolute;
        }

        .card {
            margin: 20px 0;
        }

        /* Flip Cards CSS */
        .card-container {
            perspective: 700px;
        }

        .card-flip {
            position: relative;
            width: 100%;
            transform-style: preserve-3d;
            height: auto;
            transition: all 0.5s ease-out;
            background: dimgrey;
            border: none;
        }

        .card-flip div {
            backface-visibility: hidden;
            transform-style: preserve-3d;
            height: 100%;
            width: 100%;
            border: none;
        }

        .card-flip .front {
            position: relative;
            z-index: 1;
        }

        .card-flip .back {
            position: absolute;
            z-index: 0;
            transform: rotateY(-180deg);
        }

        .card-container:hover .card-flip {
            transform: rotateY(180deg);
        }

    </style>


</head>

<body>

    <!-- ======= Top Bar ======= -->
    <!--div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">



      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>En</li>
          <li><a href="#">De</a></li>
        </ul>
      </div>
    </div>
  </div-->

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-cente">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0"><a href="/">CADMUN 2022</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="/" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="/">Home</a></li>
                    <li><a class="nav-link scrollto" href="registration.html">Registration</a></li>
                    <li><a class="nav-link scrollto" href="index.html#about">About</a></li>
                    <li><a class="nav-link scrollto" href="index.html#menu">Secretariat</a></li>
                    <li><a class="nav-link scrollto" href="/schedule">Schedule</a></li>
                    <li><a class="nav-link scrollto" href="faq.html">FAQ</a></li>
                    <li><a class="nav-link scrollto" href="index.html#gallery">Gallery</a></li>
                    <li class="dropdown"><a href="#"><span>Committes</span> <i class="bi bi-chevron-down"></i></a>
                        <ul class="dropdown-menu scrollable-menu">
                            <li><a href="ga.html">GA</a></li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                            <li><a href="#">Drop Down 14</a></li>
                        </ul>
                    </li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <a href="#contact" class="book-a-table-btn scrollto d-none d-lg-flex">Contact Us</a>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Welcome to <span>CADMUN 2022</span></h1>
                    <h2>To be more creative</h2>

                    <div class="btns">
                        <a href="#about" class="btn-menu animated fadeInUp scrollto">Starts here</a>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative"
                    data-aos="zoom-in" data-aos-delay="200">
                    <a href="https://www.youtube.com/watch?v=OUU0pZadvbc" class="glightbox play-btn"></a>
                </div>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                        <div class="about-img">
                            <img src="assets/img/cadmun.jpg" alt="CADMUN">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3 style="color: #42cbf5;">CADMUN</h3>
                        <p class="fst-italic" style="color: #42cbf5;">
                            Colegio Americano de Durango Model United Nations
                        </p>
                        <p>
                            "Model United Nations" (MUN) is a conference that imitates the United Nations and related
                            international
                            organizations, based on its operating methods and deliberative principles, and convenes
                            around hot issues
                            in the world. The young students acted as diplomats of various countries and participated in
                            the "United
                            Nations Conference". Students are familiar with the operation of the United Nations and
                            understand major
                            international events in the world by personally experiencing the process of the United
                            Nations conference,
                            such as expounding opinions, policy debates, voting, and making resolutions.
                        </p>
                    </div>
                </div>
                <br>
                <br>
                <div class="container why-us" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Why CADMUN?</h2>
                        <p>Know more about CADMUN</p>
                    </div>

                    <div class="row">

                        <div class="col-lg-4">
                            <div class="box" data-aos="zoom-in" data-aos-delay="100">
                                <span style="text-align: center;">American School of Durango</span>

                                <p style="text-align: center;">The ASD is a bilingual and multicultural educational
                                    institution that has
                                    offered the best teaching standards through a rigorous academic program for more
                                    than a decade. ASD
                                    students have participated as part of their program in United Nations simulations
                                    both nationally and
                                    internationally.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 mt-lg-0">
                            <div class="box" data-aos="zoom-in" data-aos-delay="200">
                                <span style="text-align: center;">Activity</span>

                                <p style="text-align: center;">During this activity, the participants develop leadership
                                    skills and
                                    public speaking skills by exposing the positions of their delegations, but above
                                    all, they become
                                    aware of the problems of the world that surrounds them.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 mt-lg-0">
                            <div class="box" data-aos="zoom-in" data-aos-delay="300">
                                <span style="text-align: center;">Experience</span>

                                <p style="text-align: center;">Year after year CADMUN invites students from bilingual
                                    schools both
                                    locally and nationally to be part of this experience. The secretariat of CADMUN has
                                    programmed a first
                                    level conference with a special guest in order to raise awareness and motivate
                                    participants on a
                                    specific topic.</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section><!-- End About Section -->



        <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Staffs</h2>
                    <p>Meet Our Team</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img img-fluid"
                                    alt="">
                                <h3>Aldo Peña</h3>
                                <h4>Secretary General</h4>
                            </div>
                        </div><!-- End testimonial item for 1 -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img img-fluid"
                                    alt="">
                                <h3>Rebekah Garza</h3>
                                <h4>Vice-Secreatry General</h4>
                            </div>
                        </div><!-- End testimonial item for 2 -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img img-fluid"
                                    alt="">
                                <h3>Pablo Galindo</h3>
                                <h4>Director of Finance</h4>
                            </div>
                        </div><!-- End testimonial item for 3 -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img img-fluid"
                                    alt="">
                                <h3>Taeyang Kim</h3>
                                <h4>Director of Technology</h4>
                            </div>
                        </div><!-- End testimonial item for 4 -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img img-fluid"
                                    alt="">
                                <h3>Sofia Santiesteban</h3>
                                <h4>Co-Director of Chairs</h4>
                            </div>
                        </div><!-- End testimonial item for 5 -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-6.jpg" class="testimonial-img img-fluid"
                                    alt="">
                                <h3>Stephanie Garcia</h3>
                                <h4>Co-Director of Chairs</h4>
                            </div>
                        </div><!-- End testimonial item for 6 -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-7.jpg" class="testimonial-img img-fluid"
                                    alt="">
                                <h3>Hannia Celeste</h3>
                                <h4>Co-Director of Logistics</h4>
                            </div>
                        </div><!-- End testimonial item for 7 -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-8.jpg" class="testimonial-img img-fluid"
                                    alt="">
                                <h3>Ana Lucia Ayala</h3>
                                <h4>Co-Director of Logistics</h4>
                            </div>
                        </div><!-- End testimonial item for 8 -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-9.jpg" class="testimonial-img img-fluid"
                                    alt="">
                                <h3>Danna Tiaré</h3>
                                <h4>Co-Director of Delegates</h4>
                            </div>
                        </div><!-- End testimonial item for 9 -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-10.jpg" class="testimonial-img img-fluid"
                                    alt="">
                                <h3>Ninfa Arroyo</h3>
                                <h4>Co-Director of Delegates</h4>
                            </div>
                        </div><!-- End testimonial item for 10 -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-11.jpg" class="testimonial-img img-fluid"
                                    alt="">
                                <h3>Jimena Salgado</h3>
                                <h4>Co-Director of Marketing</h4>
                            </div>
                        </div><!-- End testimonial item for 11 -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-12.jpg" class="testimonial-img img-fluid"
                                    alt="">
                                <h3>Natalia Sahagun</h3>
                                <h4>Co-Director of Marketing</h4>
                            </div>
                        </div><!-- End testimonial item for 12 -->

                    </div>
                    <br><br>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Menu Section -->

        <!-- ======= Specials Section ======= -->
        <section id="specials" class="specials">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Committes</h2>
                    <p>Check Our Committes</p>
                </div>


                <div class="row">
                    <p style="font-size: large;">During the simulation, the students become delegates of the UN
                        representing a
                        country and they debate by following a parliamentary procedure in order to reach solutions in a
                        peaceful
                        and collective way. CADMUN as well as other Models of United Nations is divided into committees
                        to aboard
                        a range of different issues on a global level. This year we have included 3 fantasy committees!
                        <br> <br>

                        This year we have 5 color divisions for the committees, each color division has a grade range
                        from 6th
                        grade of elementary to college years:</p>
                </div>


                <p style="font-size: 30px; text-align: center; background-color:#ef42f5; ">PINK DIVISION (6TH GRADE)</p>
                <p style="font-size: 30px; text-align: center; background-color:#eff542; color: black; ">YELLOW DIVISION
                    (7TH
                    GRADE - 9TH GRADE)</p>
                <p style="font-size: 30px; text-align: center; background-color:#f02b2b; "> RED DIVISION (7TH GRADE -
                    10TH
                    GRADE)</p>
                <p style="font-size: 30px; text-align: center; background-color:#224ff2 "> BLUE DIVISION (9TH GRADE -
                    12TH
                    GRADE)</p>
                <p style="font-size: 30px; text-align: center; background-color:#9c05ed"> PURPLE DIVISION (10TH GRADE -
                    COLLEGE)</p>

                <br><br>

                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-4 card-container">
                            <div class="card card-flip">
                                <div class="front card-block">
                                    <!-- To add FontAwesome Icons use Unicode characters and to set size use font-size instead of fa-*x because when calculating the height (see js), the size of the icon is not calculated if using classes -->
                                    <br>
                                    <h4 class="card-title" style="color: black;">General Assembly</h4>
                                    <img src="assets/img/GA.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="back card-block">
                                    <p style="position: absolute; top: 100px;">
                                        The General Assembly is the main deliberative, policymaking and representative
                                        organ of the United
                                        Nations
                                    </p>
                                    <a href="#" class="btn btn-outline-primary"
                                        style="background-color: dodgerblue; color: white;">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card-container">
                            <div class="card card-flip">
                                <div class="front card-block">
                                    <!-- To add FontAwesome Icons use Unicode characters and to set size use font-size instead of fa-*x because when calculating the height (see js), the size of the icon is not calculated if using classes -->
                                    <br>
                                    <h4 class="card-title" style="color: black;">General Assembly</h4>
                                    <img src="assets/img/GA.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="back card-block">
                                    <p style="position: absolute; top: 100px;">
                                        The General Assembly is the main deliberative, policymaking and representative
                                        organ of the United
                                        Nations
                                    </p>
                                    <a href="#" class="btn btn-outline-primary"
                                        style="background-color: dodgerblue; color: white;">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card-container">
                            <div class="card card-flip">
                                <div class="front card-block">
                                    <!-- To add FontAwesome Icons use Unicode characters and to set size use font-size instead of fa-*x because when calculating the height (see js), the size of the icon is not calculated if using classes -->
                                    <br>
                                    <h4 class="card-title" style="color: black;">General Assembly</h4>
                                    <img src="assets/img/GA.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="back card-block">
                                    <p style="position: absolute; top: 100px;">
                                        The General Assembly is the main deliberative, policymaking and representative
                                        organ of the United
                                        Nations
                                    </p>
                                    <a href="#" class="btn btn-outline-primary"
                                        style="background-color: dodgerblue; color: white;">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card-container">
                            <div class="card card-flip">
                                <div class="front card-block">
                                    <!-- To add FontAwesome Icons use Unicode characters and to set size use font-size instead of fa-*x because when calculating the height (see js), the size of the icon is not calculated if using classes -->
                                    <br>
                                    <h4 class="card-title" style="color: black;">General Assembly</h4>
                                    <img src="assets/img/GA.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="back card-block">
                                    <p style="position: absolute; top: 100px;">
                                        The General Assembly is the main deliberative, policymaking and representative
                                        organ of the United
                                        Nations
                                    </p>
                                    <a href="#" class="btn btn-outline-primary"
                                        style="background-color: dodgerblue; color: white;">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card-container">
                            <div class="card card-flip">
                                <div class="front card-block">
                                    <!-- To add FontAwesome Icons use Unicode characters and to set size use font-size instead of fa-*x because when calculating the height (see js), the size of the icon is not calculated if using classes -->
                                    <br>
                                    <h4 class="card-title" style="color: black;">General Assembly</h4>
                                    <img src="assets/img/GA.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="back card-block">
                                    <p style="position: absolute; top: 100px;">
                                        The General Assembly is the main deliberative, policymaking and representative
                                        organ of the United
                                        Nations
                                    </p>
                                    <a href="#" class="btn btn-outline-primary"
                                        style="background-color: dodgerblue; color: white;">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card-container">
                            <div class="card card-flip">
                                <div class="front card-block">
                                    <!-- To add FontAwesome Icons use Unicode characters and to set size use font-size instead of fa-*x because when calculating the height (see js), the size of the icon is not calculated if using classes -->
                                    <br>
                                    <h4 class="card-title" style="color: black;">General Assembly</h4>
                                    <img src="assets/img/GA.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="back card-block">
                                    <p style="position: absolute; top: 100px;">
                                        The General Assembly is the main deliberative, policymaking and representative
                                        organ of the United
                                        Nations
                                    </p>
                                    <a href="#" class="btn btn-outline-primary"
                                        style="background-color: dodgerblue; color: white;">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card-container">
                            <div class="card card-flip">
                                <div class="front card-block">
                                    <!-- To add FontAwesome Icons use Unicode characters and to set size use font-size instead of fa-*x because when calculating the height (see js), the size of the icon is not calculated if using classes -->
                                    <br>
                                    <h4 class="card-title" style="color: black;">General Assembly</h4>
                                    <img src="assets/img/GA.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="back card-block">
                                    <p style="position: absolute; top: 100px;">
                                        The General Assembly is the main deliberative, policymaking and representative
                                        organ of the United
                                        Nations
                                    </p>
                                    <a href="#" class="btn btn-outline-primary"
                                        style="background-color: dodgerblue; color: white;">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card-container">
                            <div class="card card-flip">
                                <div class="front card-block">
                                    <!-- To add FontAwesome Icons use Unicode characters and to set size use font-size instead of fa-*x because when calculating the height (see js), the size of the icon is not calculated if using classes -->
                                    <br>
                                    <h4 class="card-title" style="color: black;">General Assembly</h4>
                                    <img src="assets/img/GA.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="back card-block">
                                    <p style="position: absolute; top: 100px;">
                                        The General Assembly is the main deliberative, policymaking and representative
                                        organ of the United
                                        Nations
                                    </p>
                                    <a href="#" class="btn btn-outline-primary"
                                        style="background-color: dodgerblue; color: white;">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card-container">
                            <div class="card card-flip">
                                <div class="front card-block">
                                    <!-- To add FontAwesome Icons use Unicode characters and to set size use font-size instead of fa-*x because when calculating the height (see js), the size of the icon is not calculated if using classes -->
                                    <br>
                                    <h4 class="card-title" style="color: black;">General Assembly</h4>
                                    <img src="assets/img/GA.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="back card-block">
                                    <p style="position: absolute; top: 100px;">
                                        The General Assembly is the main deliberative, policymaking and representative
                                        organ of the United
                                        Nations
                                    </p>
                                    <a href="#" class="btn btn-outline-primary"
                                        style="background-color: dodgerblue; color: white;">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card-container">
                            <div class="card card-flip">
                                <div class="front card-block">
                                    <!-- To add FontAwesome Icons use Unicode characters and to set size use font-size instead of fa-*x because when calculating the height (see js), the size of the icon is not calculated if using classes -->
                                    <br>
                                    <h4 class="card-title" style="color: black;">General Assembly</h4>
                                    <img src="assets/img/GA.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="back card-block">
                                    <p style="position: absolute; top: 100px;">
                                        The General Assembly is the main deliberative, policymaking and representative
                                        organ of the United
                                        Nations
                                    </p>
                                    <a href="#" class="btn btn-outline-primary"
                                        style="background-color: dodgerblue; color: white;">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card-container">
                            <div class="card card-flip">
                                <div class="front card-block">
                                    <!-- To add FontAwesome Icons use Unicode characters and to set size use font-size instead of fa-*x because when calculating the height (see js), the size of the icon is not calculated if using classes -->
                                    <br>
                                    <h4 class="card-title" style="color: black;">General Assembly</h4>
                                    <img src="assets/img/GA.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="back card-block">
                                    <p style="position: absolute; top: 100px;">
                                        The General Assembly is the main deliberative, policymaking and representative
                                        organ of the United
                                        Nations
                                    </p>
                                    <a href="#" class="btn btn-outline-primary"
                                        style="background-color: dodgerblue; color: white;">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card-container">
                            <div class="card card-flip">
                                <div class="front card-block">
                                    <!-- To add FontAwesome Icons use Unicode characters and to set size use font-size instead of fa-*x because when calculating the height (see js), the size of the icon is not calculated if using classes -->
                                    <br>
                                    <h4 class="card-title" style="color: black;">General Assembly</h4>
                                    <img src="assets/img/GA.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="back card-block">
                                    <p style="position: absolute; top: 100px;">
                                        The General Assembly is the main deliberative, policymaking and representative
                                        organ of the United
                                        Nations
                                    </p>
                                    <a href="#" class="btn btn-outline-primary"
                                        style="background-color: dodgerblue; color: white;">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card-container">
                            <div class="card card-flip">
                                <div class="front card-block">
                                    <!-- To add FontAwesome Icons use Unicode characters and to set size use font-size instead of fa-*x because when calculating the height (see js), the size of the icon is not calculated if using classes -->
                                    <br>
                                    <h4 class="card-title" style="color: black;">General Assembly</h4>
                                    <img src="assets/img/GA.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="back card-block">
                                    <p style="position: absolute; top: 100px;">
                                        The General Assembly is the main deliberative, policymaking and representative
                                        organ of the United
                                        Nations
                                    </p>
                                    <a href="#" class="btn btn-outline-primary"
                                        style="background-color: dodgerblue; color: white;">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card-container">
                            <div class="card card-flip">
                                <div class="front card-block">
                                    <!-- To add FontAwesome Icons use Unicode characters and to set size use font-size instead of fa-*x because when calculating the height (see js), the size of the icon is not calculated if using classes -->
                                    <br>
                                    <h4 class="card-title" style="color: black;">General Assembly</h4>
                                    <img src="assets/img/GA.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="back card-block">
                                    <p style="position: absolute; top: 100px;">
                                        The General Assembly is the main deliberative, policymaking and representative
                                        organ of the United
                                        Nations
                                    </p>
                                    <a href="#" class="btn btn-outline-primary"
                                        style="background-color: dodgerblue; color: white;">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Specials Section -->

        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Events</h2>
                    <p>Check Our Events</p>
                </div>

                <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="assets/img/event-party.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>Delegate Party</h3>
                                    <div class="price">
                                        <p><span>1st day</span></p>
                                    </div>
                                    <p class="fst-italic" style="font-size: larger;">
                                        CADMUN is made up of various events. Dedegate debate is just one of them. In
                                        addition, we also
                                        provide parties. <br>
                                        <br>
                                        Party activities can have the following meanings: <br>
                                        <br>
                                        Recognize and learn social communication skills, etiquette and other social
                                        common sense will be
                                        exercised during events and parties and recognize and learn the ability to be
                                        independent.

                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="assets/img/event-game.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>Games</h3>
                                    <div class="price">
                                        <p><span>3rd day</span></p>
                                    </div>
                                    <p class="fst-italic" style="font-size: larger;">
                                        Game shows provide entertainment and pastime. The history of game shows is as
                                        old as the origins of
                                        radio and television broadcasting.
                                        <br><br>
                                        But CADMUN's gameshow is more unique. We have integrated knowledge related to
                                        CADMUN into mini
                                        games. Not only can you enjoy watching, but you can also learn from it.
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="assets/img/event-dinner.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>Dinner</h3>
                                    <div class="price">
                                        <p><span>2nd day</span></p>
                                    </div>
                                    <p class="fst-italic" style="font-size: larger;">
                                        Our dinner party is a very classic event.
                                        <br><br>
                                        Dinner parties are not only a good way to build friendships, but also one of the
                                        best ways to
                                        maintain friendships.
                                        <br><br>
                                        During the dinner party, mini games will be provided to enable delegates to
                                        enjoy a better
                                        atmosphere.
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Events Section -->



        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">

            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Gallery</h2>
                    <p>Some photos from CADMUN</p>
                </div>
            </div>

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-0">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Gallery Section -->


        <!-- ======= Contact Section ======= -->
        @include('sweetalert::alert')
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </div>
            </div>

            <div class="container" data-aos="fade-up">

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Tec Milenio #201, El Nayar, 34194 Durango, Dgo.</p>
                            </div>

                            <div class="open-hours">
                                <i class="bi bi-clock"></i>
                                <h4>Open Hours:</h4>
                                <p>
                                    Monday-Friday:<br>
                                    07:30 AM – 15:30 PM
                                </p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>secretariat@cadmun.org</p>
                                <p>advisor@cadmun.org</p>
                                <p>secretary.general@cadmun.orgg</p>
                                <p>vice.secretary.general@cadmun.org</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 mt-5 mt-lg-0">
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <form action="" method="post" action="{{ route('contact.store') }}" id="contact-form"
                            role="form" class="php-email-form">

                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Name</label>
                                    <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}"
                                        name="name" id="name">

                                    <!-- Error -->
                                    @if ($errors->has('name'))
                                    <div class="error">
                                        {{ $errors->first('name') }}
                                    </div>
                                    @endif
                                </div>

                                <div class="form-group col-md-6 mt-3 mt-md-0">
                                    <label>Email</label>
                                    <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}"
                                        name="email" id="email">

                                    @if ($errors->has('email'))
                                    <div class="error">
                                        {{ $errors->first('email') }}
                                    </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group mt-3">
                                <label>Subject</label>
                                <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}"
                                    name="subject" id="subject">

                                @if ($errors->has('subject'))
                                <div class="error">
                                    {{ $errors->first('subject') }}
                                </div>
                                @endif
                            </div>

                            <div class="form-group mt-3">
                                <label>Message</label>
                                <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}"
                                    name="message" id="message" rows="8"></textarea>

                                @if ($errors->has('message'))
                                <div class="error">
                                    {{ $errors->first('message') }}
                                </div>
                                @endif
                            </div>

                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>

                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" style="padding-top:30px;">
                <iframe style="border:0; width: 100%; height: 350px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2577.7276845678975!2d-104.6658752156166!3d23.97961823067113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bc7f2c3ad6fe9%3A0x3060412e9e5b29cd!2sColegio%20Americano%20Campus%20Campestre!5e0!3m2!1sen!2smx!4v1642019858246!5m2!1sen!2smx"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>About Us</h3>
                            <p>
                                Colegio Americano de Durango
                                <br> Model United Nations
                            </p>
                            <div class="social-links mt-3">
                                <a href="https://www.facebook.com/cadmun.asd/" target="_blank" class="facebook"><i
                                        class="bx bxl-facebook"></i></a>
                                <a href="https://www.instagram.com/cadmun/" target="_blank" class="instagram"><i
                                        class="bx bxl-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h3>Contact Us</h3>
                        <p>
                            Address: <br>
                            Av. Tec Milenio #201, El Nayar, 34194, Victoria de Durango, Durango, Mexico
                        </p>
                        <p>
                            Telephpne: <br>
                            +52 618 000 0000 <br>
                            +52 618 000 0000
                        </p>
                        <p>
                            email: <br>
                            secretariat@cadmun.org <br>
                            advisor@cadmun.org <br>
                            secretary.general@cadmun.org <br>
                            vice.secretary.general@cadmun.org
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="registration.html">Registration</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#menu">Secretariat</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="schedule.html">Schedule</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#events">Events</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">FAQ</a></li>
                        </ul>
                    </div>



                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Restaurantly</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <!--script src="assets/vendor/php-email-form/validate.js"></!--script-->

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <!--for flipcard-->
    <script>
        $(document).ready(function () {
            var front = document.getElementsByClassName("front");
            var back = document.getElementsByClassName("back");

            var highest = 0;
            var absoluteSide = "";

            for (var i = 0; i < front.length; i++) {
                if (front[i].offsetHeight > back[i].offsetHeight) {
                    if (front[i].offsetHeight > highest) {
                        highest = front[i].offsetHeight;
                        absoluteSide = ".front";
                    }
                } else if (back[i].offsetHeight > highest) {
                    highest = back[i].offsetHeight;
                    absoluteSide = ".back";
                }
            }
            $(".front").css("height", highest);
            $(".back").css("height", highest);
            $(absoluteSide).css("position", "absolute");
        });

    </script>

</body>
