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
                                        <li><a class="active" href="#">Loker</a></li>
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


    <!--================Blog Area =================-->





    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">

                    <?php
                      // query SQL menampilkan data dari table tbl_biodata 
                      $sql = "SELECT * FROM loker";
                      // tampung data (dalam array) kedalam variable $biodata
                      $query = mysqli_query($connection, $sql);
                          if (mysqli_num_rows($query) > 0) {
                        // jika ada looping untuk membaca seluruh data
                        // dan tampilkan kedalam tabel
                          while ($row = mysqli_fetch_assoc($query)) {
                          // tampilkan data kedalam table 
                        ?>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="../img/upload/<?php echo $row['foto']; ?>">
                                <div class="blog_item_date">
                                    <h3><?php echo $row['tgl'] ?></h3>
                                    <p><?php echo $row['bln'] ?></p>
                                </div>
                            </div>
                            <div class="blog_details">
                                <div class="d-inline-block">
                                    <span>Nama Perusahaan:</span>
                                    <h2><?php echo $row['nm_perusahaan'] ?></h2>
                                </div>
                                <br>
                                <div class="d-inline-block">
                                    <span>Syarat Dan Ketentuan:</span>
                                    <h3><?php echo $row['syarat'] ?></h3>
                                </div>
                                <br>
                                <div class="d-inline-block">
                                    <span>Jenis Usaha</span>
                                    <h3><?php echo $row['jenis_usaha'] ?></h3>
                                </div>
                                <br>
                                    <a href="tampil_daftar.php?id=<?php echo $row['id'] ?>"><i class="btn btn-primary btn-sm"> <?php echo $row['pendaftar'] ?> Pendaftar</i></a>
                                    <a href="mendaftar.php?id=<?php echo $row['id']; ?>"><i class="btn btn-success btn-sm">Mendaftar</i></a>
                            </div>
                        </article>
                <?php 
                  }
                    }else{
                    ?>
                    <div class="alert alert-danger text-center" role="alert" style="width: 100%"><strong class="te">Tidak ada Lowongan Pekerjaan</strong></div>
                    <?php
                } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
    <!--- form tambah loker----->
    <div class="container">
        <hr>
        <h2 class="alert alert-info text-center">Tambah Lowongan Pekerjaan</h2>
        <hr>
        <form action="proses.php" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label>Nama Usaha</label>
                <input type="hidden" name="daftar" value="0">
                <input type="teks" class="form-control" name="nm_usaha" placeholder="Nama Usaha Anda" required="">
            </div>
            <div class="form-group col-md-6">
                <label>Jenis Usaha</label>
                <input type="text" class="form-control" name="jenis_usaha" placeholder="Jenis Usaha" required="">
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label>Syarat dan Ketentuan</label>
                        <textarea class="form-control" name="syarat" cols="135" rows="10" placeholder=" Syarat dan Ketentuan" required=""></textarea>
                        <small style="color: red;">Menggunakan tanda hubung koma(,)</small>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-12">
                <label>Alamat Perusahaan</label>
                <input type="text" class="form-control" name="alamat" placeholder="Alamat Usaha" required="">
            </div> 
                <div class="form-group col-md-12">
                <label>Foto Perusahaan</label>
                <input type="file" class="form-control" name="foto" required="">
            </div>
            <button type="submit" class="btn btn-success btn-sm mb-2">Tambahkan</button>
        </div>
    </form>
    </div>
    <!-- end --->
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