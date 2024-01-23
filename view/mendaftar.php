<?php 
include 'template/header.php';
include '../db/connection.php';
$id = $_GET["id"];
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
                                        <li><a href="galeri">Galeri</a></li>
                                        <li><a href="sejarah.php">Sejarah</a></li>
                                        <li><a href="peta.php">Peta Desa</a></li>
                                        <li><a class="active" href="loker.php">Loker</a></li>
                                        <li><a href="hubunggi.php">Hubungi</a></li>
                                        <li><a href="view/hubungi.php">FAQ</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="search_input" id="search_input_box">
                        <div class="container ">
                            <form class="d-flex justify-content-between search-inner">
                                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                                <button type="submit" class="btn"></button>
                                <span class="fa fa-close" id="close_search" title="Close Search"></span>
                            </form>
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
                            <h2>Pendataran Lowongan Pekerjaan</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->

    <!-- about start -->

        <?php
            // query SQL menampilkan data dari table tbl_biodata 
            $sql = "SELECT * FROM loker WHERE id=$id";
            // tampung data (dalam array) kedalam variable $biodata
            $query = mysqli_query($connection, $sql);
            if (mysqli_num_rows($query) > 0) {
            // jika ada looping untuk membaca seluruh data
            // dan tampilkan kedalam tabel
            while ($row = mysqli_fetch_assoc($query)) {
            // tampilkan data kedalam table 
        ?>

    <div class="about-area section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-md-12 col-lg-6">
                    <div class="about-thumb">
                        <img src="../img/upload/<?php echo $row['foto'] ?>" alt="">
                    </div>
                </div>
                <div class="col-xl-5 col-md-12 col-lg-6">
                    <div class="section-title mb-65 p-0">
                        <h3><?php echo $row['nm_perusahaan'] ?></h3>
                        <p class="para-text">
                            <?php echo $row['syarat'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
        }
            }else{
    ?>
    <div class="alert alert-danger text-center" role="alert" style="width: 100%"><strong class="te">Tidak ada Lowongan Pekerjaan</strong></div>
                    <?php
            } 
    ?>
    
    <!-- about end -->

    <!---form pendaftaran--->
    <div class="container">
        <div class="alert alert-info text-center">FORM PENDAFTARAN</div>
        <form action="proses_daftar.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap Anda" required="">
                </div>
            <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email Anda" required="">
            </div>
            <div class="form-group">
                    <label>Nomor Telfon</label>
                    <input type="text" class="form-control" name="no_tlp" placeholder="Nomor Telfon Anda" required="">
            </div>
            <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat Anda" required="">
            </div>
            <div class="form-row">
                    <div class="form-group col-md-4">
                    <label>Foto Ktp</label>
                    <input type="file" name="ktp" class="form-control" required="">
            </div>
            <div class="form-group col-md-4">
                <label>Foto KK</label>
                <input type="file" name="kk" class="form-control" required="">
            </div>
            <div class="form-group col-md-4">
                <label>Surat Pengajuan</label>
                <input type="file" name="pengajuan" class="form-control" required="">
            </div>
            </div>
          <a href="tambah.php?id=<?php echo $id ?>"><button type="submit" class="btn btn-primary mb-2">Daftar</button></a>
        </form>
    </div>
    <!-- footer-start -->
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