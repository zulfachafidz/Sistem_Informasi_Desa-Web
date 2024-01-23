<?php 
include 'template/header.php';
include '../db/connection.php';
$id = $_GET['id'];
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
                                        <li><a href="#">Galeri</a></li>
                                        <li><a href="sejarah.php">Sejarah</a></li>
                                        <li><a href="peta.php">Peta Desa</a></li>
                                        <li><a class="active"  href="loker.php">Loker</a></li>
                                        <li><a href="hubungi.php">Hubungi</a></li>
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
                            <h2>Lowongan Pekerjaan Di Desa Cihonje</h2>
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
                    $sql = "SELECT * FROM pendaftar WHERE id_loker=$id ";
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
            <div class="card border-primary" style="max-width: 65rem;">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="../img/upload/<?php echo $row['ktp'] ?>" class="card-img">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Orang Yang Mendaftar</h5>
                    <hr>
                    <strong>
                        <table>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td>:</td>
                                <td><?php echo $row['nama']; ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><?php echo $row['email']; ?></td>
                            </tr>
                            <tr>
                                <td>No Telepon</td>
                                <td>:</td>
                                <td><?php echo $row['no_tlp']; ?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><?php echo $row['alamat']; ?></td>
                            </tr>
                            <tr>
                                <td>KTP</td>
                                <td>:</td>
                                <td><a href="../img/upload/<?php echo $row['ktp']; ?>"><u><?php echo $row['ktp']; ?></u></a></td>
                            </tr>
                            <tr>
                                <td>KK</td>
                                <td>:</td>
                                <td><a href="../img/upload/<?php echo $row['kk']; ?>"><u><?php echo $row['kk']; ?></u></a></td>
                            </tr>
                            <tr>
                                <td>Surat Pengajuan</td>
                                <td>:</td>
                                <td><a href="../img/upload/<?php echo $row['pengajuan']; ?>"><u><?php echo $row['pengajuan']; ?></u></a></td>
                            </tr>
                        </table>
                        <hr>
                    </strong>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <?php 
        }
            }else{
            ?>
            <div class="alert alert-danger text-center" role="alert" style="width: 100%"><strong class="te">Tidak ada Yang Mendaftar</strong></div>
        <?php
        } 
        ?>
    </div>
    <!-- about end -->

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