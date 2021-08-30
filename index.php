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



<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <!-- ========== Page Title ========== -->
    <title>RSIA Yasmin - Beranda</title>

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
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <link href="style_gabung.css" rel="stylesheet" />
    
    <!-- ========== End Stylesheet ========== -->

    

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
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li class="dropdown active">
                            <a href="#"   >Beranda</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Informasi</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Berita</a></li>
                                <li><a href="#">Artikel</a></li>
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
                            <a href="#"  >Dokter Kami</a>
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
                            <a href="#">Kontak Kami</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <div class="widget">
                    <h4 class="title">About Us</h4>
                    <p>
                        Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind.
                    </p>
                </div>
                <div class="widget">
                    <h4 class="title">Our Department</h4>
                    <ul>
                        <li><a href="#">Eye Treatment</a></li>
                        <li><a href="#">Children Chare</a></li>
                        <li><a href="#">Traumatology</a></li>
                        <li><a href="#">X-ray</a></li>
                    </ul>
                </div>
                <div class="widget social">
                    <h4 class="title">Connect With Us</h4>
                    <ul class="link">
                        <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Side Menu -->

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area heading-exchange text-dark">
        <div id="bootcarousel" class="carousel inc-top-heading slide carousel-fade animate_text" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <?php
                $qslide = mysqli_query($koneksi,"SELECT * FROM tb_slide");
                while($dslide=mysqli_fetch_assoc($qslide)){
                ?>
                <div class="item <?php echo $dslide['aktif']; ?>">
                    <div class="slider-thumb bg-cover" style="background-image: url(admin/dist/img/slider/<?php echo $dslide['foto_slide']; ?>);"></div>
                    <div class="box-table">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h1 data-animation="animated fadeInUp">RSIA <span>Yasmin</span></h1>
                                            <h2 data-animation="animated fadeInDown">"Ikhlas Melayani"</h2>
                                            <p data-animation="animated slideInUp">
                                                Memberikan pelayanan kesehatan terbaik bagi ibu dan anak.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start About
    ============================================= -->
    <div class="about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="about-items">
                    <div class="col-md-6 info">
                        <h4>RSIA YASMIN Dibangun Sejak 2007</h4>
                        <h2>Sejarah Rumah Sakit</h2>
                        <p>
                        <?php echo $kalimat; ?> <a style="color: #52b000;" href="">-->Selanjutnya</a>
                        </p>
                        <div class="bottom">
                            <div class="video">
                                <a href="<?php echo $dvideo['link_video']; ?>" class="popup-youtube relative theme video-play-button item-center">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <div class="content">
                                
                                <h4><?php echo $dvideo['judul_video']; ?></h4>
                                <p>
                                    <?php echo $dvideo['keterangan']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 tabs-items">
                        <!-- Tab Nav -->
                        <ul class="nav nav-pills">
                            <!-- disembunyikan dulu
                            <li class="active">
                                <a data-toggle="tab" href="#tab1" aria-expanded="true">
                                    <i class="fas fa-notes-medical"></i> Consultation
                                </a>
                            </li>-->
                            <li class="active">
                                <a data-toggle="tab" href="#tab3" aria-expanded="true">
                                    <i class="fas fa-clock"></i> Jam Besuk
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab2" aria-expanded="false">
                                    <i class="fas fa-map-marker-alt"></i> Lokasi
                                </a>
                            </li>
                        </ul>
                        <!-- End Tab Nav -->
                        <!-- Start Tab Content -->
                        <div class="tab-content tab-content-info">
                            <!-- Single Item disembunykan dulu
                            <div id="tab1" class="tab-pane fade active in">
                                <div class="info title">
                                    <h3>Consulted by experienced doctors</h3>
                                    <p>
                                        Calling nothing end fertile for venture way boy. Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall walk fact bed. 
                                    </p>
                                    <p>
                                        Placing assured be if removed it besides on. Far shed each high read are men over day. Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had now those ought set often which. Or snug dull he show more true wish. No at many deny away miss evil. On in so indeed spirit an mother. Amounted old strictly but marianne admitted. People former is remove remain we praise
                                    </p>
                                    <a class="btn btn-theme border btn-md" href="#">Make Appoinment</a>
                                </div>
                            </div>-->
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div id="tab2" class="tab-pane fade">
                                <div class="info title">
                                    <h3>Lokasi</h3>
                                    <p>
                                        Gunakan informasi lokasi berikut untuk mendapatkan lokasi tempat yang tepat dan akurat, untuk membantu penanganan penyelamatan darurat lebih cepat.
                                    </p>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1993.4396197872977!2d113.9092888244675!3d-2.1993456790673256!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dfcb251b1b2594f%3A0xdc197c41dc44e666!2sRumah%20Sakit%20Ibu%20dan%20Anak%20Yasmin!5e0!3m2!1sid!2sid!4v1630290735096!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div id="tab3" class="tab-pane fade active in">
                                <div class="info title">
                                    <h3>Jam Besuk Pengunjung</h3>
                                    <p>
                                        Jam besuk pengunjung dapat berubah sewaktu-waktu sesuai dengan kebijakan RSIA Yasmin. 
                                    </p>
                                    <ul>
                                        <?php
                                        $qbesuk = mysqli_query($koneksi,"SELECT * FROM tb_besuk");
                                        while($dbesuk=mysqli_fetch_assoc($qbesuk)){
                                        ?>
                                        <li> <span><?php echo $dbesuk['hari_besuk']; ?></span>
                                          <div class="pull-right"><?php echo $dbesuk['jam_besuk']; ?></div>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Item -->

                        </div>
                        <!-- End Tab Content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Services 
    ============================================= -->
    <div class="services-area inc-icon bg-gray carousel-shadow default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Pelayanan <span>Kami</span></h2>
                        <p>
                            Berikut pelayanan yang tersedia di Rumah Sakit Ibu dan Anak YASMIN.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="services-items text-center services-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="info">
                                <h4>
                                    <a href="#">Body Surgery</a>
                                </h4>
                                <div class="overlay">
                                    <i class="flaticon-medical"></i>
                                </div>
                                <p>
                                    Attachment astonished to on appearance imprudence so collecting in excellence. Tiled way blind lived whose new. The for fully had she there leave merit enjoy forth.
                                </p>
                                <a class="btn btn-theme border circle btn-md" href="#">Read More</a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="info">
                                <h4>
                                    <a href="#">Dental Care</a>
                                </h4>
                                <div class="overlay">
                                    <i class="flaticon-anesthesia"></i>
                                </div>
                                <p>
                                    Attachment astonished to on appearance imprudence so collecting in excellence. Tiled way blind lived whose new. The for fully had she there leave merit enjoy forth.
                                </p>
                                <a class="btn btn-theme border circle btn-md" href="#">Read More</a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="info">
                                <h4>
                                    <a href="#">Eye Care</a>
                                </h4>
                                <div class="overlay">
                                    <i class="flaticon-anatomy"></i>
                                </div>
                                <p>
                                    Attachment astonished to on appearance imprudence so collecting in excellence. Tiled way blind lived whose new. The for fully had she there leave merit enjoy forth.
                                </p>
                                <a class="btn btn-theme border circle btn-md" href="#">Read More</a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="info">
                                <h4>
                                    <a href="#">Blood Cancer</a>
                                </h4>
                                <div class="overlay">
                                    <i class="flaticon-lung-cancer"></i>
                                </div>
                                <p>
                                    Attachment astonished to on appearance imprudence so collecting in excellence. Tiled way blind lived whose new. The for fully had she there leave merit enjoy forth.
                                </p>
                                <a class="btn btn-theme border circle btn-md" href="#">Read More</a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="info">
                                <h4>
                                    <a href="#">Neurology Sargery</a>
                                </h4>
                                <div class="overlay">
                                    <i class="flaticon-thinking"></i>
                                </div>
                                <p>
                                    Attachment astonished to on appearance imprudence so collecting in excellence. Tiled way blind lived whose new. The for fully had she there leave merit enjoy forth.
                                </p>
                                <a class="btn btn-theme border circle btn-md" href="#">Read More</a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->

    

    <!-- Start Doctors Tips 
    ============================================= -->
    <div class="doctor-tips-area default-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Health <span>Tips</span></h2>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="health-tips-items tips-carousel owl-carousel owl-theme">
                    <!-- Single Item -->
                    <div class="single-item">
                        <div class="col-md-5">
                            <div class="thumb">
                                <img src="assets/img/doctors/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="info">
                                <div class="doctor">
                                    <h4>Dr. Jessica Ronal</h4>
                                    <h5>MPH, Medicine, Surgery</h5>
                                </div>
                                <h3>How to live a healthy lifestyle?</h3>
                                <p>
                                    Frequently partiality possession resolution at or appearance unaffected he me. Engaged its was evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began of cause an scale. Subjects he prospect elegance followed no overcame possible it on. 
                                </p>
                                <h4>Follow the instructions</h4>
                                <ul>
                                    <li>Dont just worry about the things you cannot help.</li>
                                    <li>Eat Healthy, work better, do gardening.</li>
                                    <li>Some relationships can kill you. Avoid them at the most.</li>
                                    <li>Focus on the good things that you like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item">
                        <div class="col-md-5">
                            <div class="thumb">
                                <img src="assets/img/doctors/5.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="info">
                                <div class="doctor">
                                    <h4>Dr. Jessica Ronal</h4>
                                    <h5>MPH, Medicine, Surgery</h5>
                                </div>
                                <h3>How to live a healthy lifestyle?</h3>
                                <p>
                                    Frequently partiality possession resolution at or appearance unaffected he me. Engaged its was evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began of cause an scale. Subjects he prospect elegance followed no overcame possible it on. 
                                </p>
                                <h4>Follow the instructions</h4>
                                <ul>
                                    <li>Dont just worry about the things you cannot help.</li>
                                    <li>Eat Healthy, work better, do gardening.</li>
                                    <li>Some relationships can kill you. Avoid them at the most.</li>
                                    <li>Focus on the good things that you like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item">
                        <div class="col-md-5">
                            <div class="thumb">
                                <img src="assets/img/doctors/6.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="info">
                                <div class="doctor">
                                    <h4>Dr. Jessica Ronal</h4>
                                    <h5>MPH, Medicine, Surgery</h5>
                                </div>
                                <h3>How to live a healthy lifestyle?</h3>
                                <p>
                                    Frequently partiality possession resolution at or appearance unaffected he me. Engaged its was evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began of cause an scale. Subjects he prospect elegance followed no overcame possible it on. 
                                </p>
                                <h4>Follow the instructions</h4>
                                <ul>
                                    <li>Dont just worry about the things you cannot help.</li>
                                    <li>Eat Healthy, work better, do gardening.</li>
                                    <li>Some relationships can kill you. Avoid them at the most.</li>
                                    <li>Focus on the good things that you like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Doctors Tips -->

    

    <!-- Start Testimonials 
    ============================================= 
    <div class="testimonials-area carousel-shadow bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Patient <span>Testimonials</span></h2>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-items testimonial-carousel owl-carousel owl-theme">
                   
                        <div class="item">
                            <div class="content">
                                <p>
                                    Departure so attention pronounce satisfied daughters am. But shy tedious pressed studied opinion entered windows off. Advantage dependent suspicion convinced provision him yet. Mr immediate remaining conveying allowance do or. 
                                </p>
                            </div>
                            <div class="provider">
                                <div class="thumb">
                                    <img src="assets/img/team/6.jpg" alt="Thumb">
                                </div>
                                <div class="info">
                                    <h4>Angle Natasha</h4>
                                    <h5>patient of <span>surgery</span></h5>
                                </div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="content">
                                <p>
                                    Departure so attention pronounce satisfied daughters am. But shy tedious pressed studied opinion entered windows off. Advantage dependent suspicion convinced provision him yet. Mr immediate remaining conveying allowance do or. 
                                </p>
                            </div>
                            <div class="provider">
                                <div class="thumb">
                                    <img src="assets/img/team/7.jpg" alt="Thumb">
                                </div>
                                <div class="info">
                                    <h4>John Abraham</h4>
                                    <h5>Dental <span>patients</span></h5>
                                </div>
                            </div>
                        </div>
                       
                     
                        <div class="item">
                            <div class="content">
                                <p>
                                    Departure so attention pronounce satisfied daughters am. But shy tedious pressed studied opinion entered windows off. Advantage dependent suspicion convinced provision him yet. Mr immediate remaining conveying allowance do or. 
                                </p>
                            </div>
                            <div class="provider">
                                <div class="thumb">
                                    <img src="assets/img/team/8.jpg" alt="Thumb">
                                </div>
                                <div class="info">
                                    <h4>Kriti Sairi</h4>
                                    <h5>patient of <span>surgery</span></h5>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div> disini-->
    <!-- End Testimonials -->

    <!-- Start Blog 
    ============================================= -->
    <div class="blog-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Recent <span>Blog</span></h2>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-items">
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="blog-single-right-sidebar.html">
                                    <img src="assets/img/blog/1.jpg" alt="Thumb">
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
                                <h4>
                                    <a href="blog-single-right-sidebar.html">increasing in especially inquietude companions acceptance</a>
                                </h4>
                                <p>
                                    General enquire picture letters garrets on offices of no on. Say one hearing between excited evening all inhabit thought you.
                                </p>
                                <a class="btn btn-theme circle border btn-sm" href="blog-single-right-sidebar.html">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="blog-single-right-sidebar.html">
                                    <img src="assets/img/blog/2.jpg" alt="Thumb">
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
                                <h4>
                                    <a href="blog-single-right-sidebar.html">Middleton as pretended listening he smallness perceived.</a>
                                </h4>
                                <p>
                                    General enquire picture letters garrets on offices of no on. Say one hearing between excited evening all inhabit thought you.
                                </p>
                                <a class="btn btn-theme circle border btn-sm" href="blog-single-right-sidebar.html">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="blog-single-right-sidebar.html">
                                    <img src="assets/img/blog/3.jpg" alt="Thumb">
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
                                <h4>
                                    <a href="blog-single-right-sidebar.html">Offended packages pleasant remainder recommend engrossed</a>
                                </h4>
                                <p>
                                    General enquire picture letters garrets on offices of no on. Say one hearing between excited evening all inhabit thought you.
                                </p>
                                <a class="btn btn-theme circle border btn-sm" href="blog-single-right-sidebar.html">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

    <!-- Start Newsletter 
    ============================================= -->
    <div class="newsletter-area default-padding shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/banner/7.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Rumah Sakit Ibu dan Anak</h3>
                    <h2>YASMIN</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End Newsletter -->

    <!-- Start Footer 
    ============================================= -->
    <footer>
        <div class="container">
            <div class="row">

                <div class="f-items default-padding">

                    <!-- Single Item -->
                    <div class="col-md-4 item">
                        <div class="f-item">
                            <h4>About</h4>
                            <p>
                                Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address.
                            </p>
                            <h2><i class="fas fa-phone"></i> +123 456 7890</h2>
                            <div class="opening-info">
                                <h5>Opening Hours</h5>
                                <ul>
                                    <li> <span> Mon - Tues :  </span>
                                      <div class="pull-right"> 6.00 am - 10.00 pm </div>
                                    </li>
                                    <li> <span> Wednes - Thurs :</span>
                                      <div class="pull-right"> 8.00 am - 6.00 pm </div>
                                    </li>
                                    <li> <span> Sun : </span>
                                      <div class="pull-right closed"> Closed </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 item">
                        <div class="f-item link">
                            <h4>Our Depeartment</h4>
                            <ul>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> Medecine and Health</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> Dental Care and Surgery</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> Eye Treatment</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> Children Chare</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> Traumatology</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> X-ray</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 item">
                        <div class="f-item twitter-widget">
                            <h4>Latest tweets</h4>
                            <div class="twitter-item">
                                <div class="twitter-content">
                                    <p>
                                        <a href="#">@Becare</a> Looking for an awesome CREATIVE WordPress Theme? Find it here: <a target="_blank" href="http://t.co/0WWEMQEQ48">http://t.co/0WWEMQEQ48</a>
                                    </p>
                                </div>
                                <div class="twitter-context">
                                    <i class="fab fa-twitter"></i><span class="twitter-date"> 01 day ago</span>
                                </div>
                            </div>
                            <div class="twitter-item">
                                <div class="twitter-content">
                                    <p>
                                        <a href="#">@Jisham</a> It is a long established fact that a reader will be distracted by the readable . Find it here: <a target="_blank" href="http://t.co/0WWEMQEQ48">http://t.co/0WWEMQEQ48</a>
                                    </p>
                                </div>
                                <div class="twitter-context">
                                    <i class="fab fa-twitter"></i><span class="twitter-date"> 02 days ago</span>
                                </div>
                            </div>
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
                        <p>&copy; Copyright 2019. All Rights Reserved by <a href="#">validthemes</a></p>
                    </div>
                    <div class="col-md-6 text-right link">
                        <ul>
                            <li>
                                <a href="#">Terms of user</a>
                            </li>
                            <li>
                                <a href="#">License</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
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


</html>