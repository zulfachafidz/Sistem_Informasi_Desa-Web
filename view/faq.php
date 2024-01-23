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
                                        <li><a href="../">Home</a></li>
                                        <li><a href="galeri.php">Galeri</a></li>
                                        <li><a href="sejarah.php">Sejarah</a></li>
                                        <li><a href="peta.php">Peta Desa</a></li>
                                        <li><a href="loker.php">Loker</a></li>
                                        <li><a href="hubungi.php">Hubungi</a></li>
                                        <li><a class="active" href="#">FAQ</a></li>
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
                            <h2>FAQ</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->

    <!-- faq-area-start -->
    <div class="faq-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Apa itu Desa Cihonje?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Cihonje adalah desa di kecamatan gumelar,Banyumas,Jawa Tengah.Desa Cihonje Mempunyai 18 RW dengan beberapa Grumbul.Grumbul dalam masyarakat BAnyumas merupalan wilayah kecil yang terdiri dari satu atau beberapa RW. Sebagian Desa Cihonje memiliki topografi wilayah berupa perbukitan dengan aliran Kali tajum yang membelah desa dan bertemu dengan Sungai Penaruban didekat Drumbul Cihonje..
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Bagaimana kehidupan sosialnya?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion"
                                style="">
                                <div class="card-body">
                                    Desa Cihonje cukup tentram karena toleransi, ramah tamah dan instansi pemerintah Desa Cihonje yang tergolong bagus. Keamanan dan ketertiban Masyarakat Desa Cihonje amat baik karena pemuda pemudi Desa ini mempuyai Wadah perkumpulan. Desa Cihonje bekerja sama dengan unsur beberapa elemen antara lain Koramin14/Dim 0701 dan Polsek Gumelar roda pemerintahan.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Sejarah Desa cihonje?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion" style="">
                                <div class="card-body">
                                    Desa Cihonje pertama kali didiami melintas balik ke era tahun 1800-an dimana ada perajurit dakam perang Diponegoro yang ikut berperang di Batavia dan kemudian tertinggal dari dari pasukan serta memutuskan untuk tinggal didesa ini. Sejarah dalam versi lain menceritakan bahwa nenek moyang warga Cihonje berasal dari daerah Gumelem, Kecamatan Susukan, Kabupaten Banjarnegara.
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- faq-area-start -->
    
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