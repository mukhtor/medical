<?php

/** @var \yii\web\View $this */

/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AdminAsset;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
    <html lang="zxx">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title>Xorazm Tibbiyot Markazi</title>
        <?php $this->head() ?>
    </head>
    <body id="top">
    <?php $this->beginBody() ?>

    <header>
        <div class="header-top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="top-bar-info list-inline-item pl-0 mb-0">
                            <li class="list-inline-item"><a href="mailto:support@gmail.com"><i
                                            class="icofont-support-faq mr-2"></i>support@novena.com</a></li>
                            <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Address Ta-134/A, New
                                York, USA
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                            <a href="tel:+23-345-67890">
                                <span>Call Now : </span>
                                <span class="h4">823-4565-13456</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navigation" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="style/images/logo.png" alt="" class="img-fluid">
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
                        aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icofont-navigation-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarmain">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="department.html">Department
                                </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown02">
                                <li><a class="dropdown-item" href="department.html">Departments</a></li>
                                <li><a class="dropdown-item" href="department-single.html">Department Single</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctors </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown03">
                                <li><a class="dropdown-item" href="doctor.html">Doctors</a></li>
                                <li><a class="dropdown-item" href="doctor-single.html">Doctor Single</a></li>
                                <li><a class="dropdown-item" href="appoinment.html">Appoinment</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="blog-sidebar.html" id="dropdown05"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown05">
                                <li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>

                                <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <!-- Slider Start -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-7">
                    <div class="block">
                        <div class="divider mb-3"></div>
                        <span class="text-uppercase text-sm letter-spacing ">Total Health care solution</span>
                        <h1 class="mb-3 mt-3">Your most trusted health partner</h1>

                        <p class="mb-4 pr-5">A repudiandae ipsam labore ipsa voluptatum quidem quae laudantium quisquam
                            aperiam maiores sunt fugit, deserunt rem suscipit placeat.</p>
                        <div class="btn-container ">
                            <a href="appoinment.html" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">Make
                                appoinment <i class="icofont-simple-right ml-2  "></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-block d-lg-flex">
                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-surgeon-alt"></i>
                            </div>
                            <span>24 Hours Service</span>
                            <h4 class="mb-3">Online Appoinment</h4>
                            <p class="mb-4">Get ALl time support for emergency.We have introduced the principle of
                                family medicine.</p>
                            <a href="appoinment.html" class="btn btn-main btn-round-full">Make a appoinment</a>
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-ui-clock"></i>
                            </div>
                            <span>Timing schedule</span>
                            <h4 class="mb-3">Working Hours</h4>
                            <ul class="w-hours list-unstyled">
                                <li class="d-flex justify-content-between">Sun - Wed : <span>8:00 - 17:00</span></li>
                                <li class="d-flex justify-content-between">Thu - Fri : <span>9:00 - 17:00</span></li>
                                <li class="d-flex justify-content-between">Sat - sun : <span>10:00 - 17:00</span></li>
                            </ul>
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-support"></i>
                            </div>
                            <span>Emegency Cases</span>
                            <h4 class="mb-3">1-800-700-6200</h4>
                            <p>Get ALl time support for emergency.We have introduced the principle of family
                                medicine.Get Conneted with us for any urgency .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img">
                        <img src="style/images/about/img-1.jpg" alt="" class="img-fluid">
                        <img src="style/images/about/img-2.jpg" alt="" class="img-fluid mt-4">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img mt-4 mt-lg-0">
                        <img src="style/images/about/img-3.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-content pl-4 mt-4 mt-lg-0">
                        <h2 class="title-color">Personal care <br>&amp; healthy living</h2>
                        <p class="mt-4 mb-5">We provide best leading medicle service Nulla perferendis veniam deleniti
                            ipsum officia dolores repellat laudantium obcaecati neque.</p>

                        <a href="service.html" class="btn btn-main-2 btn-round-full btn-icon">Services<i
                                    class="icofont-simple-right ml-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-section ">
        <div class="container">
            <div class="cta position-relative">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-doctor"></i>
                            <span class="h3">58</span>k
                            <p>Happy People</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-flag"></i>
                            <span class="h3">700</span>+
                            <p>Surgery Comepleted</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-badge"></i>
                            <span class="h3">40</span>+
                            <p>Expert Doctors</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-globe"></i>
                            <span class="h3">20</span>
                            <p>Worldwide Branch</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section service gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <h2>Award winning patient care</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt
                            molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-laboratory text-lg"></i>
                            <h4 class="mt-3 mb-3">Laboratory services</h4>
                        </div>

                        <div class="content">
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-heart-beat-alt text-lg"></i>
                            <h4 class="mt-3 mb-3">Heart Disease</h4>
                        </div>
                        <div class="content">
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-tooth text-lg"></i>
                            <h4 class="mt-3 mb-3">Dental Care</h4>
                        </div>
                        <div class="content">
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-crutch text-lg"></i>
                            <h4 class="mt-3 mb-3">Body Surgery</h4>
                        </div>

                        <div class="content">
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-brain-alt text-lg"></i>
                            <h4 class="mt-3 mb-3">Neurology Sargery</h4>
                        </div>
                        <div class="content">
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-dna-alt-1 text-lg"></i>
                            <h4 class="mt-3 mb-3">Gynecology</h4>
                        </div>
                        <div class="content">
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section appoinment">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 ">
                    <div class="appoinment-content">
                        <img src="style/images/about/img-3.jpg" alt="" class="img-fluid">
                        <div class="emergency">
                            <h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i>+23 345 67980</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 ">
                    <div class="appoinment-wrap mt-5 mt-lg-0">
                        <h2 class="mb-2 title-color">Book appoinment</h2>
                        <p class="mb-4">Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui
                            velit . Iste dolorum atque similique praesentium soluta.</p>
                        <form id="#" class="appoinment-form" method="post" action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Choose Department</option>
                                            <option>Software Design</option>
                                            <option>Development cycle</option>
                                            <option>Software Development</option>
                                            <option>Maintenance</option>
                                            <option>Process Query</option>
                                            <option>Cost and Duration</option>
                                            <option>Modal Delivery</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect2">
                                            <option>Select Doctors</option>
                                            <option>Software Design</option>
                                            <option>Development cycle</option>
                                            <option>Software Development</option>
                                            <option>Maintenance</option>
                                            <option>Process Query</option>
                                            <option>Cost and Duration</option>
                                            <option>Modal Delivery</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="date" id="date" type="text" class="form-control"
                                               placeholder="dd/mm/yyyy">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="time" id="time" type="text" class="form-control"
                                               placeholder="Time">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="name" id="name" type="text" class="form-control"
                                               placeholder="Full Name">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="phone" id="phone" type="Number" class="form-control"
                                               placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-2 mb-4">
                                <textarea name="message" id="message" class="form-control" rows="6"
                                          placeholder="Your Message"></textarea>
                            </div>

                            <a class="btn btn-main btn-round-full" href="appoinment.html">Make Appoinment <i
                                        class="icofont-simple-right ml-2  "></i></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section testimonial-2 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <h2>We served over 5000+ Patients</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt
                            molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 testimonial-wrap-2 slick-initialized slick-slider slick-dotted">
                    <div class="slick-list draggable">
                        <div class="slick-track"
                             style="opacity: 1; width: 6660px; transform: translate3d(-2220px, 0px, 0px);">
                            <div class="testimonial-block style-2 gray-bg slick-slide slick-cloned"
                                 data-slick-index="-2" aria-hidden="true" tabindex="-1" style="width: 547px;">
                                <div class="testimonial-thumb">
                                    <img src="style/images/team/test-thumb4.jpg" alt="" class="img-fluid">
                                </div>

                                <div class="client-info">
                                    <h4>Nice Environment!</h4>
                                    <span>Partho Sarothi</span>
                                    <p class="mt-4">
                                        They provide great service facilty consectetur adipisicing elit. Itaque rem,
                                        praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit
                                        placeat.
                                    </p>
                                </div>
                                <i class="icofont-quote-right"></i>
                            </div>
                            <div class="testimonial-block style-2 gray-bg slick-slide slick-cloned"
                                 data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 547px;">
                                <div class="testimonial-thumb">
                                    <img src="style/images/team/test-thumb1.jpg" alt="" class="img-fluid">
                                </div>

                                <div class="client-info">
                                    <h4>Modern Service!</h4>
                                    <span>Kolis Mullar</span>
                                    <p>
                                        They provide great service facilty consectetur adipisicing elit. Itaque rem,
                                        praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit
                                        placeat.
                                    </p>
                                </div>
                                <i class="icofont-quote-right"></i>
                            </div>
                            <div class="testimonial-block style-2 gray-bg slick-slide" data-slick-index="0"
                                 aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide10"
                                 aria-describedby="slick-slide-control10" style="width: 547px;">
                                <i class="icofont-quote-right"></i>

                                <div class="testimonial-thumb">
                                    <img src="style/images/team/test-thumb1.jpg" alt="" class="img-fluid">
                                </div>

                                <div class="client-info ">
                                    <h4>Amazing service!</h4>
                                    <span>John Partho</span>
                                    <p>
                                        They provide great service facilty consectetur adipisicing elit. Itaque rem,
                                        praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit
                                        placeat.
                                    </p>
                                </div>
                            </div>
                            <div class="testimonial-block style-2 gray-bg slick-slide" data-slick-index="1"
                                 aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide11"
                                 style="width: 547px;">
                                <div class="testimonial-thumb">
                                    <img src="style/images/team/test-thumb2.jpg" alt="" class="img-fluid">
                                </div>

                                <div class="client-info">
                                    <h4>Expert doctors!</h4>
                                    <span>Mullar Sarth</span>
                                    <p>
                                        They provide great service facilty consectetur adipisicing elit. Itaque rem,
                                        praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit
                                        placeat.
                                    </p>
                                </div>

                                <i class="icofont-quote-right"></i>
                            </div>
                            <div class="testimonial-block style-2 gray-bg slick-slide slick-current slick-active"
                                 data-slick-index="2" aria-hidden="false" tabindex="0" role="tabpanel"
                                 id="slick-slide12" aria-describedby="slick-slide-control11" style="width: 547px;">
                                <div class="testimonial-thumb">
                                    <img src="style/images/team/test-thumb3.jpg" alt="" class="img-fluid">
                                </div>

                                <div class="client-info">
                                    <h4>Good Support!</h4>
                                    <span>Kolis Mullar</span>
                                    <p>
                                        They provide great service facilty consectetur adipisicing elit. Itaque rem,
                                        praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit
                                        placeat.
                                    </p>
                                </div>

                                <i class="icofont-quote-right"></i>
                            </div>
                            <div class="testimonial-block style-2 gray-bg slick-slide slick-active" data-slick-index="3"
                                 aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide13"
                                 style="width: 547px;">
                                <div class="testimonial-thumb">
                                    <img src="style/images/team/test-thumb4.jpg" alt="" class="img-fluid">
                                </div>

                                <div class="client-info">
                                    <h4>Nice Environment!</h4>
                                    <span>Partho Sarothi</span>
                                    <p class="mt-4">
                                        They provide great service facilty consectetur adipisicing elit. Itaque rem,
                                        praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit
                                        placeat.
                                    </p>
                                </div>
                                <i class="icofont-quote-right"></i>
                            </div>
                            <div class="testimonial-block style-2 gray-bg slick-slide" data-slick-index="4"
                                 aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide14"
                                 aria-describedby="slick-slide-control12" style="width: 547px;">
                                <div class="testimonial-thumb">
                                    <img src="style/images/team/test-thumb1.jpg" alt="" class="img-fluid">
                                </div>

                                <div class="client-info">
                                    <h4>Modern Service!</h4>
                                    <span>Kolis Mullar</span>
                                    <p>
                                        They provide great service facilty consectetur adipisicing elit. Itaque rem,
                                        praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit
                                        placeat.
                                    </p>
                                </div>
                                <i class="icofont-quote-right"></i>
                            </div>
                            <div class="testimonial-block style-2 gray-bg slick-slide slick-cloned" data-slick-index="5"
                                 aria-hidden="true" tabindex="-1" style="width: 547px;">
                                <i class="icofont-quote-right"></i>

                                <div class="testimonial-thumb">
                                    <img src="style/images/team/test-thumb1.jpg" alt="" class="img-fluid">
                                </div>

                                <div class="client-info ">
                                    <h4>Amazing service!</h4>
                                    <span>John Partho</span>
                                    <p>
                                        They provide great service facilty consectetur adipisicing elit. Itaque rem,
                                        praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit
                                        placeat.
                                    </p>
                                </div>
                            </div>
                            <div class="testimonial-block style-2 gray-bg slick-slide slick-cloned" data-slick-index="6"
                                 aria-hidden="true" tabindex="-1" style="width: 547px;">
                                <div class="testimonial-thumb">
                                    <img src="style/images/team/test-thumb2.jpg" alt="" class="img-fluid">
                                </div>

                                <div class="client-info">
                                    <h4>Expert doctors!</h4>
                                    <span>Mullar Sarth</span>
                                    <p>
                                        They provide great service facilty consectetur adipisicing elit. Itaque rem,
                                        praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit
                                        placeat.
                                    </p>
                                </div>

                                <i class="icofont-quote-right"></i>
                            </div>
                            <div class="testimonial-block style-2 gray-bg slick-slide slick-cloned" data-slick-index="7"
                                 aria-hidden="true" tabindex="-1" style="width: 547px;">
                                <div class="testimonial-thumb">
                                    <img src="style/images/team/test-thumb3.jpg" alt="" class="img-fluid">
                                </div>

                                <div class="client-info">
                                    <h4>Good Support!</h4>
                                    <span>Kolis Mullar</span>
                                    <p>
                                        They provide great service facilty consectetur adipisicing elit. Itaque rem,
                                        praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit
                                        placeat.
                                    </p>
                                </div>

                                <i class="icofont-quote-right"></i>
                            </div>
                            <div class="testimonial-block style-2 gray-bg slick-slide slick-cloned" data-slick-index="8"
                                 aria-hidden="true" tabindex="-1" style="width: 547px;">
                                <div class="testimonial-thumb">
                                    <img src="style/images/team/test-thumb4.jpg" alt="" class="img-fluid">
                                </div>

                                <div class="client-info">
                                    <h4>Nice Environment!</h4>
                                    <span>Partho Sarothi</span>
                                    <p class="mt-4">
                                        They provide great service facilty consectetur adipisicing elit. Itaque rem,
                                        praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit
                                        placeat.
                                    </p>
                                </div>
                                <i class="icofont-quote-right"></i>
                            </div>
                            <div class="testimonial-block style-2 gray-bg slick-slide slick-cloned" data-slick-index="9"
                                 aria-hidden="true" tabindex="-1" style="width: 547px;">
                                <div class="testimonial-thumb">
                                    <img src="style/images/team/test-thumb1.jpg" alt="" class="img-fluid">
                                </div>

                                <div class="client-info">
                                    <h4>Modern Service!</h4>
                                    <span>Kolis Mullar</span>
                                    <p>
                                        They provide great service facilty consectetur adipisicing elit. Itaque rem,
                                        praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit
                                        placeat.
                                    </p>
                                </div>
                                <i class="icofont-quote-right"></i>
                            </div>
                        </div>
                    </div>


                    <ul class="slick-dots" style="" role="tablist">
                        <li class="" role="presentation">
                            <button type="button" role="tab" id="slick-slide-control10" aria-controls="slick-slide10"
                                    aria-label="1 of 3" tabindex="-1">1
                            </button>
                        </li>
                        <li role="presentation" class="slick-active">
                            <button type="button" role="tab" id="slick-slide-control11" aria-controls="slick-slide12"
                                    aria-label="2 of 3" tabindex="-1">2
                            </button>
                        </li>
                        <li role="presentation">
                            <button type="button" role="tab" id="slick-slide-control12" aria-controls="slick-slide14"
                                    aria-label="3 of 3" tabindex="0" aria-selected="true">3
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section clients">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <h2>Partners who support us</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt
                            molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row clients-logo slick-initialized slick-slider">
                <div class="slick-list draggable">
                    <div class="slick-track"
                         style="opacity: 1; width: 4940px; transform: translate3d(-1900px, 0px, 0px);">
                        <div class="col-lg-2 slick-slide slick-cloned" data-slick-index="-6" aria-hidden="true"
                             tabindex="-1" style="width: 190px;">
                            <div class="client-thumb">
                                <img src="style/images/about/5.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 slick-slide slick-cloned" data-slick-index="-5" aria-hidden="true"
                             tabindex="-1" style="width: 190px;">
                            <div class="client-thumb">
                                <img src="style/images/about/6.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true"
                             tabindex="-1" style="width: 190px;">
                            <div class="client-thumb">
                                <img src="style/images/about/3.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true"
                             tabindex="-1" style="width: 190px;">
                            <div class="client-thumb">
                                <img src="style/images/about/4.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true"
                             tabindex="-1" style="width: 190px;">
                            <div class="client-thumb">
                                <img src="style/images/about/5.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true"
                             tabindex="-1" style="width: 190px;">
                            <div class="client-thumb">
                                <img src="style/images/about/6.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1"
                             style="width: 190px;">
                            <div class="client-thumb">
                                <img src="style/images/about/1.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1"
                             style="width: 190px;">
                            <div class="client-thumb">
                                <img src="style/images/about/2.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1"
                             style="width: 190px;">
                            <div class="client-thumb">
                                <img src="style/images/about/3.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1"
                             style="width: 190px;">
                            <div class="client-thumb">
                                <img src="style/images/about/4.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 slick-slide slick-active" data-slick-index="4" aria-hidden="false"
                             tabindex="-1" style="width: 190px;">
                            <div class="client-thumb">
                                <img src="style/images/about/5.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 slick-slide slick-active" data-slick-index="5" aria-hidden="false"
                             tabindex="-1" style="width: 190px;">
                            <div class="client-thumb">
                                <img src="style/images/about/6.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 slick-slide slick-current slick-active" data-slick-index="6"
                             aria-hidden="false" tabindex="0" style="width: 190px;">
                            <div class="client-thumb">
                                <img src="style/images/about/3.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 slick-slide slick-active" data-slick-index="7" aria-hidden="false"
                             tabindex="0" style="width: 190px;">
                            <div class="client-thumb">
                                <img src="style/images/about/4.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 slick-slide slick-active" data-slick-index="8" aria-hidden="false"
                             tabindex="0" style="width: 190px;">
                            <div class="client-thumb">
                                <img src="style/images/about/5.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 slick-slide slick-active" data-slick-index="9" aria-hidden="false"
                             tabindex="0" style="width: 190px;">
                            <div class="client-thumb">
                                <img src="style/images/about/6.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 slick-slide slick-cloned" data-slick-index="10" aria-hidden="true"
                             tabindex="-1" style="width: 190px;">
                            <div class="client-thumb">
                                <img src="style/images/about/1.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 slick-slide slick-cloned" data-slick-index="11" aria-hidden="true"
                             tabindex="-1" style="width: 190px;">
                            <div class="client-thumb">
                                <img src="style/images/about/2.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 slick-slide slick-cloned" data-slick-index="12" aria-hidden="true"
                             tabindex="-1" style="width: 190px;">
                            <div class="client-thumb">
                                <img src="style/images/about/3.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 slick-slide slick-cloned" data-slick-index="13" aria-hidden="true"
                             tabindex="-1" style="width: 190px;">
                            <div class="client-thumb">
                                <img src="style/images/about/4.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 slick-slide slick-cloned" data-slick-index="14" aria-hidden="true"
                             tabindex="-1" style="width: 190px;">
                            <div class="client-thumb">
                                <img src="style/images/about/5.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 slick-slide slick-cloned" data-slick-index="15" aria-hidden="true"
                             tabindex="-1" style="width: 190px;">
                            <div class="client-thumb">
                                <img src="style/images/about/6.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 slick-slide slick-cloned" data-slick-index="16" aria-hidden="true"
                             tabindex="-1" style="width: 190px;">
                            <div class="client-thumb">
                                <img src="style/images/about/3.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 slick-slide slick-cloned" data-slick-index="17" aria-hidden="true"
                             tabindex="-1" style="width: 190px;">
                            <div class="client-thumb">
                                <img src="style/images/about/4.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 slick-slide slick-cloned" data-slick-index="18" aria-hidden="true"
                             tabindex="-1" style="width: 190px;">
                            <div class="client-thumb">
                                <img src="style/images/about/5.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 slick-slide slick-cloned" data-slick-index="19" aria-hidden="true"
                             tabindex="-1" style="width: 190px;">
                            <div class="client-thumb">
                                <img src="style/images/about/6.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer Start -->
    <footer class="footer section gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mr-auto col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <div class="logo mb-4">
                            <img src="style/images/logo.png" alt="" class="img-fluid">
                        </div>
                        <p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur
                            veritatis eveniet distinctio possimus.</p>

                        <ul class="list-inline footer-socials mt-4">
                            <li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i
                                            class="icofont-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/themefisher"><i
                                            class="icofont-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i
                                            class="icofont-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Department</h4>
                        <div class="divider mb-4"></div>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="#">Surgery </a></li>
                            <li><a href="#">Wome's Health</a></li>
                            <li><a href="#">Radiology</a></li>
                            <li><a href="#">Cardioc</a></li>
                            <li><a href="#">Medicine</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Support</h4>
                        <div class="divider mb-4"></div>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Company Support </a></li>
                            <li><a href="#">FAQuestions</a></li>
                            <li><a href="#">Company Licence</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget-contact mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Get in Touch</h4>
                        <div class="divider mb-4"></div>

                        <div class="footer-contact-block mb-4">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-email mr-3"></i>
                                <span class="h6 mb-0">Support Available for 24/7</span>
                            </div>
                            <h4 class="mt-2"><a href="tel:+23-345-67890">Support@email.com</a></h4>
                        </div>

                        <div class="footer-contact-block">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-support mr-3"></i>
                                <span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
                            </div>
                            <h4 class="mt-2"><a href="tel:+23-345-67890">+23-456-6588</a></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-btm py-4 mt-5">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="copyright">
                            © Copyright Reserved to <span class="text-color">Novena</span> by <a
                                    href="https://themefisher.com/" target="_blank">Themefisher</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="subscribe-form text-lg-right mt-5 mt-lg-0">
                            <form action="#" class="subscribe">
                                <input type="text" class="form-control" placeholder="Your Email address">
                                <a href="#" class="btn btn-main-2 btn-round-full">Subscribe</a>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <a class="backtop js-scroll-trigger" href="#top">
                            <i class="icofont-long-arrow-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="copyright text-lg-center">
                Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a>
            </div>
        </div>
    </footer>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();