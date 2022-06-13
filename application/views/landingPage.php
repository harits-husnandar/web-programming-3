<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Landing Page - MadameFlowers</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('css/styles.css') ?>" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-light bg-light static-top">
        <div class="container">
            <a class="navbar-brand h1 text-black" href="#!">Madame<span class="text-warning">Flowers</span></a>
            <!-- <a class="btn btn-primary px-5 py-2" href="<?= base_url('index.php/auth/login') ?>">Sign Up</a> -->
            <ul class="na navbar-nav navbar-right">
                <?php if ($this->session->userdata('username')) { ?>
                    <li>
                        <div>Selamat Datang <h5 class="text-primary"><?php echo $this->session->userdata('username') ?></h5>
                        </div>
                    </li>
                <?php } else { ?>
                    <li>
                        <?php echo anchor('auth/login', '<button class="btn btn-primary py-2 px-5">Login</button>'); ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center text-white">
                        <!-- Page heading-->
                        <h1 class="mb-5">Welcome To Madame Flower's</h1>
                        <a class="btn btn-success px-5 py-2" href="<?= base_url('index.php/welcome/explore'); ?>"> Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Icons Grid-->
    <section class="features-icons bg-light text-center">
        <div class="container">
            <h2 class="mb-5">Tentang Kami</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-chat-right-text m-auto text-primary"></i></div>
                        <h3>Contact</h3>
                        <p class="lead mb-0">Whatsapp : 0812-0901-8762</p>
                        <p class="lead mb-0">Instagram : @MadameFlowers</p>
                        <p class="lead mb-0">Facebook : Madame Flowers</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-shop-window m-auto text-primary"></i></div>
                        <h3>Address</h3>
                        <p class="lead mb-0"> Jl. Raya Cikarang - Cibarusah No.168, Cikarang Square, Cikarang Sel., Kabupaten Bekasi, Jawa Barat 17550</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-gift m-auto text-primary"></i></div>
                        <h3>Gift</h3>
                        <p class="lead mb-0">Free kartu ucapan disetiap pemesanan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Image Showcases-->
    <section class="showcase mb-5">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url(<?php echo base_url(); ?>assets/img/bg-sectioncopy3.jpg);"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Hand Bouquet / Bunga Tangan</h2>
                    <p class="lead mb-0">Hand Bouquet biasa digunakan untuk berbagai keperluan seperti hadiah wisuda atau untuk pasangan yang berulang tahun, dan saat hari kasih sayaang. Selain itu Hand Bouquet juga sering digunakan untuk prosesi lempar bunga pada acara pernikahan.</p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 text-white showcase-img" style="background-image: url(<?php echo base_url(); ?>assets/img/bunga2.jpg);"></div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h2>Bunga Meja</h2>
                    <p class="lead mb-0">Bunga meja bisa ditaruh pada meja makan untuk memperhangat dan mempercantik suasana makan malam. Bunga dapat ditaruh pada vas atau pot kecil yang dipenuhi air sehingga terjaga kesegarannya.</p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url(<?php echo base_url(); ?>assets/img/bunga1.jpg);"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Bunga Standing</h2>
                    <p class="lead mb-0">Bunga Standing yang satu ini juga bisa digunakan untuk berbagai acara seperti pernikahan, duka cita ataupun diberikan sebagai ucapan selamat atas keberhasilan seseorang.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials-->
    <!-- <section class="testimonials text-center bg-light">
            <div class="container">
                <h2 class="mb-5">What people are saying...</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-1.jpg" alt="..." />
                            <h5>Margaret E.</h5>
                            <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-2.jpg" alt="..." />
                            <h5>Fred S.</h5>
                            <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-3.jpg" alt="..." />
                            <h5>Sarah W.</h5>
                            <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    <!-- Portfolio-->
    <section class="content-section" id="portfolio">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading text-center">
                <!-- <h3 class="text-secondary mb-0">Products</h3> -->
                <h2 class="mb-5">Best Seller</h2>
            </div>
            <div class="row gx-0">
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">500 Days of Blooming Roses Giant Flowers</div>
                                <p class="mb-0">RP 500.000</p>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?= base_url('assets/img/buket100.png') ?>" alt="..." />
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">Beautiful in White Bouquet</div>
                                <p class="mb-0">Rp 350.000</p>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?= base_url('assets/img/bg-porto3.jpg') ?>" alt="..." />
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">Mixed Flowers With White Roses and gold vase</div>
                                <p class="mb-0">Rp 700.000.</p>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?= base_url('assets/img/bg-porto4.jpg') ?>" alt="..." />
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">Luxury Tulip Bouquet</div>
                                <p class="mb-0">Rp 175.000</p>
                            </div>
                        </div>
                        <img class="img-fluid" src="<?= base_url('assets/img/bg-porto.jpg') ?>" alt="..." />
                    </a>
                </div>
            </div>
            <div class="content-section-heading text-center mt-5">
                <a class="btn btn-success px-5 py-3" href="<?= base_url('index.php/welcome/explore') ?>">see more !</a>
            </div>
        </div>
    </section>
    <!-- Call to Action-->
    <!-- <section class="call-to-action text-white text-center mt-5" id="signup">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <h2 class="mb-4">Ready to get started? Sign up now!</h2>
                        <a class="btn btn-light me-4 mt-5 px-5 py-2" href="#signup">Register</a>
                        <a class="btn btn-primary ms-5 mt-5 px-5 py-2" href="#signup">Sign Up</a>
                    </div>
                </div>
            </div>
        </section> -->
    <!-- Footer-->
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item"><a href="#!">About</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#!">Contact</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">&copy;Madame 2022. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item me-4">
                            <a href="#!"><i class="bi-facebook fs-3"></i></a>
                        </li>
                        <li class="list-inline-item me-4">
                            <a href="#!"><i class="bi-twitter fs-3"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!"><i class="bi-instagram fs-3"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>