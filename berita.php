<?php
error_reporting(0);
include'config.php';

$qkontak = mysqli_query($koneksi,"SELECT * FROM tb_kontak");
$datkon = mysqli_fetch_assoc($qkontak);


$qvideo=mysqli_query($koneksi,"SELECT * FROM tb_video_profil");
$dvideo=mysqli_fetch_assoc($qvideo);

$qsejarah=mysqli_query($koneksi,"SELECT * FROM tb_sejarah");
$dsejarah=mysqli_fetch_assoc($qsejarah);
$kalimat = substr($dsejarah['text_sejarah'], 0, 700);

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from webhunt.store/themeforest/medihub/blog-right-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Jun 2021 05:05:04 GMT -->
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MediHub - Medical & Health Template">

    <!-- ========== Page Title ========== -->
    <title>RSIA Yasmin - Berita</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/logo-yasmin.jpg" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600,700,800" rel="stylesheet">

    <style type="text/css">
    .pre-loader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 10000
}
.pre-loader .preloader-3 {
   
  position: relative;
  animation: rotate 1s infinite linear;
  border: 2px solid rgba(255, 255, 255, .25);
  width: 90px;
  height: 90px;
  border-radius: 999px;
  margin: 300px auto;

}

.pre-loader .preloader-3 span {
    
 
  position: absolute;
  width: 90px;
  height: 90px;
  border: 2px solid transparent;
  border-top: 2px solid #fff;
  top: -2px;
  left: -2px;
  border-radius: 999px;
  
  
}

@keyframes rotate {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

.gradient-color{background:#000428;background:-webkit-linear-gradient(315deg, #000428, #0074da);background:linear-gradient(135deg, #000428, #52b000)}
    </style>

</head>

<body onload="startclock()">

    <!-- Start PreLoader Section-->
    <div class="pre-loader gradient-color">
        <div class="preloader-3">
            <span></span>
        </div>
    </div>
    <!-- End PreLoader Section-->

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area inline inc-border">
        <div class="container">
            <div class="row">
                <div class="col-md-8 address-info text-left">
                    <div class="info box">
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i> <?php echo substr($datkon['alamat'],0,30) ?>
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i> <?php echo $datkon['email']; ?>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i> <?php echo $datkon['fax_telp']; ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 bar-btn text-right">
                    <a href="#"><span id="date"></span>, <span id="clock"></span> WIB</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation 
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                    </ul>
                </div> disini-->        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index">
                        <img src="assets/img/logo-yasmin1.png" class="logo" alt="Logo">
                    </a>
                    <a class="navbar-brand" href="index">
                        <img src="assets/img/logo-kars1.png" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li class="dropdown ">
                            <a href="index"   >Beranda</a>
                        </li>
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Informasi</a>
                            <ul class="dropdown-menu">
                                <li><a href="berita">Berita</a></li>
                                <li><a href="artikel">Artikel</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Profil</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Visi Dan Misi</a></li>
                                <li><a href="#">Struktur Organisasi</a></li>
                                <li><a href="#">Sejarah</a></li>
                                <li><a href="#">Profil RS</a></li>
                                <li><a href="#">Kerjasama</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Layanan</a>
                            <ul class="dropdown-menu">
                                <?php
                                $qukat = mysqli_query($koneksi, "SELECT * FROM tb_kategori_layanan ORDER BY id_kategori_layanan DESC");
                                while($datkat=mysqli_fetch_assoc($qukat)){
                                ?>
                                <li><a href="#"><?php echo $datkat['nama_kategori']; ?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="dokter_kami"  >Dokter Kami</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Galeri</a>
                            <ul class="dropdown-menu">
                                <?php
                                $qukat = mysqli_query($koneksi, "SELECT * FROM tb_album ORDER BY id_album DESC");
                                while($datkat=mysqli_fetch_assoc($qukat)){
                                ?>
                                <li><a href="#"><?php echo $datkat['nama_album']; ?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li>
                            <a href="kontak">Kontak Kami</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

            <!-- Start Side Menu -->
            
            <!-- End Side Menu -->

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url(assets/img/banner/8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Berita</h1>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Beranda</a></li>
                        <li><a href="#">Informasi</a></li>
                        <li class="active">Berita</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog right-sidebar default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-8">
                        <!-- Single Item -->
                        <div class="single-item item">
                            <div class="thumb">
                                <a href="blog-single-right-sidebar.html">
                                    <img src="assets/img/blog/v1.jpg" alt="Thumb">
                                    <div class="post-type">
                                        <i class="fas fa-images"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li><a href="#">Admin</a></li>
                                        <li>15 June, 2019</li>
                                    </ul>
                                </div>
                                <h3>
                                    <a href="blog-single-right-sidebar.html">increasing in companions acceptance</a>
                                </h3>
                                <p>
                                    General enquire picture letters garrets on offices of no on. Say one hearing between excited evening all inhabit thought you. Ecstatic followed handsome drawings entirely mrs one yet outweigh. Of acceptance insipidity remarkably is invitation.
                                </p>
                                <a class="btn btn-theme circle border btn-sm" href="blog-single-right-sidebar.html">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="single-item item">
                            <div class="thumb">
                                <a href="blog-single-right-sidebar.html">
                                    <img src="assets/img/blog/v2.jpg" alt="Thumb">
                                    <div class="post-type">
                                        <i class="fas fa-video"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li><a href="#">Admin</a></li>
                                        <li>17 Auguest, 2019</li>
                                    </ul>
                                </div>
                                <h3>
                                    <a href="blog-single-right-sidebar.html">Middleton as pretended listening he smallness perceived.</a>
                                </h3>
                                <p>
                                    General enquire picture letters garrets on offices of no on. Say one hearing between excited evening all inhabit thought you. Ecstatic followed handsome drawings entirely mrs one yet outweigh. Of acceptance insipidity remarkably is invitation.
                                </p>
                                <a class="btn btn-theme circle border btn-sm" href="blog-single-right-sidebar.html">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="single-item item">
                            <div class="thumb">
                                <a href="blog-single-right-sidebar.html">
                                    <img src="assets/img/blog/v3.jpg" alt="Thumb">
                                    <div class="post-type">
                                        <i class="fas fa-image"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li><a href="#">Admin</a></li>
                                        <li>25 September, 2019</li>
                                    </ul>
                                </div>
                                <h3>
                                    <a href="blog-single-right-sidebar.html">Offended two packages recommend</a>
                                </h3>
                                <p>
                                    General enquire picture letters garrets on offices of no on. Say one hearing between excited evening all inhabit thought you. Ecstatic followed handsome drawings entirely mrs one yet outweigh. Of acceptance insipidity remarkably is invitation.
                                </p>
                                <a class="btn btn-theme circle border btn-sm" href="blog-single-right-sidebar.html">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        
                        <!-- Pagination -->
                        <div class="row">
                            <div class="col-md-12 pagi-area">
                                <nav aria-label="navigation">
                                    <ul class="pagination">
                                        <li><a href="#"><i class="fas fa-long-arrow-alt-left"></i></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Start Sidebar -->
                    <div class="sidebar col-md-4">
                        <aside>
                            <div class="sidebar-item search">
                                <div class="title">
                                    <h4>Search</h4>
                                </div>
                                <div class="sidebar-info">
                                    <form>
                                        <input type="text" class="form-control">
                                        <input type="submit" value="search">
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-item category">
                                <div class="title">
                                    <h4>category list</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li>
                                            <a href="#">national <span>69</span></a>
                                        </li>
                                        <li>
                                            <a href="#">national <span>25</span></a>
                                        </li>
                                        <li>
                                            <a href="#">sports <span>18</span></a>
                                        </li>
                                        <li>
                                            <a href="#">megazine <span>37</span></a>
                                        </li>
                                        <li>
                                            <a href="#">health <span>12</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item recent-post">
                                <div class="title">
                                    <h4>Recent Post</h4>
                                </div>
                                <ul>
                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="assets/img/gallery/77.jpg" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="#">Participate in staff meetingness manage dedicated</a>
                                            <div class="meta-title">
                                                <span class="post-date">12 Feb, 2018</span> - By <a href="#">Author</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="assets/img/gallery/55.jpg" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="#">Future Plan & Strategy for Consutruction </a>
                                            <div class="meta-title">
                                                <span class="post-date">12 Feb, 2018</span> - By <a href="#">Author</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="assets/img/gallery/88.jpg" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="#">Melancholy particular devonshire alteration</a>
                                            <div class="meta-title">
                                                <span class="post-date">12 Feb, 2018</span> - By <a href="#">Author</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-item archives">
                                <div class="title">
                                    <h4>Archives</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li><a href="#">Aug 2018</a></li>
                                        <li><a href="#">Sept 2018</a></li>
                                        <li><a href="#">Nov 2018</a></li>
                                        <li><a href="#">Dec 2018</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item gallery">
                                <div class="title">
                                    <h4>Gallery</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/gallery/11.jpg" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/gallery/33.jpg" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/gallery/44.jpg" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/gallery/55.jpg" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/gallery/66.jpg" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/gallery/55.jpg" alt="thumb">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item social-sidebar">
                                <div class="title">
                                    <h4>follow us</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li class="facebook">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="pinterest">
                                            <a href="#">
                                                <i class="fab fa-pinterest"></i>
                                            </a>
                                        </li>
                                        <li class="g-plus">
                                            <a href="#">
                                                <i class="fab fa-google-plus-g"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item tags">
                                <div class="title">
                                    <h4>tags</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li><a href="#">Medical</a>
                                        </li>
                                        <li><a href="#">Health</a>
                                        </li>
                                        <li><a href="#">Patient</a>
                                        </li>
                                        <li><a href="#">Doctor</a>
                                        </li>
                                        <li><a href="#">Hospital</a>
                                        </li>
                                        <li><a href="#">Happy</a>
                                        </li>
                                        <li><a href="#">Children</a>
                                        </li>
                                        <li><a href="#">science</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="f-items default-padding">

                    <!-- Single Item -->
                    <div class="col-md-3 col-sm-6 equal-height item">
                        <div class="f-item">
                            <h4>Jam Besuk</h4>
                            <p>
                                Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address.
                            </p>
                            <div class="opening-info">
                                <h5>Opening Hours</h5>
                                <ul>
                                   <?php
                                $qbesuk = mysqli_query($koneksi,"SELECT * FROM tb_besuk");
                                while($dbesuk=mysqli_fetch_assoc($qbesuk)){
                                ?>
                                    <li> <span> <?php echo $dbesuk['hari_besuk']; ?> : </span>
                                      <div class="pull-right closed"> <a style="font-size: 10px;"><?php echo $dbesuk['jam_besuk']; ?></a> </div>
                                    </li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-3 col-sm-6 equal-height item">
                        <div class="f-item link">
                            <h4>Layanan Kami</h4>
                            <ul>

                                <?php  
                                $qlay=mysqli_query($koneksi,"SELECT * FROM tb_kategori_layanan ORDER BY id_kategori_layanan DESC LIMIT 5");
                                while($dlay=mysqli_fetch_assoc($qlay)){
                                ?>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> <?php echo $dlay['nama_kategori']; ?></a>
                                </li>
                                <?php } ?>

                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-3 col-sm-6 equal-height item">
                        <div class="f-item twitter-widget">
                            <h4>Terbaru</h4>
                            
                            <?php  
                            $qber1=mysqli_query($koneksi,"SELECT * FROM tb_berita ORDER BY id_berita DESC LIMIT 5");
                            while($dber1=mysqli_fetch_assoc($qber1)){
                            $tgl1 = strtotime($dber1['tgl_upload']);
                            ?>
                            <div class="twitter-item">
                                <div class="twitter-content">
                                    <p>
                                        <a href="#"><i class="fas fa-arrow-right"></i> <?php echo $dber1['judul_berita']; ?></a> 
                                    </p>
                                </div>
                                <div class="twitter-context">
                                    <i class="fas fa-clock"></i><span class="twitter-date"> <?php echo date('d/m/Y | H:i:s',$tgl1),' WIB'; ?></span>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-3 col-sm-6 equal-height item">
                        <div class="f-item contact">
                            <h4>Kontak Kami</h4>
                            <ul>
                                <li>
                                    <i class="fas fa-phone"></i> 
                                    <p>Phone <span><?php echo $datkon['fax_telp']; ?></span></p>
                                </li>
                                <li>
                                    <i class="fas fa-envelope"></i> 
                                    <p>Email <span><a href="mailto:<?php echo $datkon['email']; ?>"><?php echo $datkon['email']; ?></a></span></p>
                                </li>
                                <li>
                                    <i class="fas fa-map"></i> 
                                    <p>Alamat <span><?php echo $datkon['alamat']; ?></span></p>
                                </li>
                            </ul>
                            <h5>Lokasi Rumah Sakit</h5>
                            <form action="#">
                                <div class="input-group stylish-input-group">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1993.4396197872977!2d113.9092888244675!3d-2.1993456790673256!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dfcb251b1b2594f%3A0xdc197c41dc44e666!2sRumah%20Sakit%20Ibu%20dan%20Anak%20Yasmin!5e0!3m2!1sid!2sid!4v1630290735096!5m2!1sid!2sid" style="width:auto;" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom bg-dark text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; Copyright 2011-<?php echo date('Y') ?>. All Rights Reserved by <a href="#">IT-RSIA YASMIN</a></p>
                    </div>
                    <div class="col-md-6 text-right link">
                        <ul>
                            <li>
                                <marquee scrollamount="9" width="600">
                                <a href="#">RSIA YASMIN "Ikhlas Melayani" Memberikan pelayanan kesehatan terbaik bagi ibu dan anak.</a>
                                </marquee>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/equal-height.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/YTPlayer.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>

    <script src="js/jam.js" ></script>
    <script type="text/javascript">
        var e=$(window);
        e.on("load",function(){
            $(".pre-loader").fadeOut("slow"),AOS.refresh()
        })
    </script>

</body>

<!-- Mirrored from webhunt.store/themeforest/medihub/blog-right-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Jun 2021 05:05:04 GMT -->
</html>