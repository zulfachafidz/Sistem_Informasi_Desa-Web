<?php 
include 'template/header.php';
include '../db/connection.php';
 ?>
    <!-- header-start -->
        <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area white-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="#">
                                    <img src="../img/logo.png" alt="" width="55rem">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="../index.php">Home</a></li>
                                        <li><a href="galeri.php">Galeri</a></li>
                                        <li><a href="sejarah.php">Sejarah</a></li>
                                        <li><a href="peta.php">Peta Desa</a></li>
                                        <li><a href="loker.php">Loker</a></li>
                                        <li><a  class="active" href="#">Hubungi</a></li>
                                        <li><a href="faq.php">FAQ</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- breadcrumb-start -->
    <section class="breadcrumb breadcrumb_bg banner-bg-1 overlay2 ptb200">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 offset-lg-1">
                        <div class="breadcrumb_iner">
                            <div class="breadcrumb_iner_item">
                                <h2>Hubungi</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-end -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">    
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Masukan dan Saran</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="contact_process.php" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
    
                                        <textarea class="form-control w-100" name="pesan" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Atau Saran'" placeholder=" Masukan Atau Saran"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="nama" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Anda'" placeholder="Nama Anda">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat Email Anda'" placeholder="Alamat Email Anda">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subjek'" placeholder="Masukan Subjek">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">kirim</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Jalan Ajibarang-Gumelar,Rt05 Rw09.</h3>
                                <p>Kec.Gumelar,Kab.Banyumas,Jawa Tengah</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+1 253 565 2365</h3>
                                <p>Sen/Jum 08.00-16.00</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>sakhrulromadoni@gmail.com</h3>
                                <p>Hubungi Kami Jika ada masalah.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
    
    <!-- footer-start -->
    <footer class="footer-area bg-dark">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-3 col-xl-4">
                    <div class="single-footer-widget footer_1">
                        <a href="index.html"> <img src="../img/logo.png" alt="" width="50rem"> </a>
                        <p  class="text-white">Kantor Desa Cihonje <br>
                            Jl.Gumelar-Ajibarang Raya KM 17,Cihonje,Gumelar, Kabupaten Banyumas,Jawa Tengah. <br>53165
                        </p>
                        <div class="social-links">
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xl-3">
                    <div class="single-footer-widget footer_icon">
                        <div class="office-location">
                            <ul>
                                <li>
                                    <strong>Indonesia</strong>
                                    <strong>Jawa Tengah,Indonesia <br>
                                        +62 09897979797</strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <center>
                <small>Copyright by Desa Cihonje &copy;2020 | Tugas PKK Produktif</small>
            </center>
        </div>
    </footer>
        <?php 
        include 'template/footer.php';
         ?>
    <!--end footer-->