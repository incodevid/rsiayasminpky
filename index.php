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
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

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

.gradient-color{background:#ffffff;background:-webkit-linear-gradient(315deg, #ffffff, #0074da);background:linear-gradient(135deg, #ffffff, #52b000)}
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
                        <li class="dropdown active">
                            <a href="index"   >Beranda</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Informasi</a>
                            <ul class="dropdown-menu">
                                <li><a href="berita">Berita</a></li>
                                <li><a href="artikel">Artikel</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Profil</a>
                            <ul class="dropdown-menu">
                                <li><a href="visi_misi">Visi Dan Misi</a></li>
                                <li><a href="struktur_organisasi">Struktur Organisasi</a></li>
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
                      
                        <?php echo $kalimat; ?> <a style="color: #52b000;" href="">-->Selanjutnya</a>
                     
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
                        <?php 
                        $qlayan = mysqli_query($koneksi,"SELECT * FROM tb_layanan a INNER JOIN tb_kategori_layanan b ON a.id_kategori_layanan=b.id_kategori_layanan ORDER BY a.id_layanan DESC");
                        while($dlayan=mysqli_fetch_assoc($qlayan)){
                        $teks_layan = substr($dlayan['deskripsi_layanan'], 0, 300);
                        ?>
                        <div class="item">
                            <div class="info">
                                <h4>
                                    <a href="#"><?php echo $dlayan['nama_layanan']; ?></a>
                                </h4>
                                <div class="overlay">
                                    <!--<i class="flaticon-medical"></i>-->
                                    <img src="admin/dist/img/layanan/<?php echo $dlayan['foto_layanan']; ?>" style="border-radius: 4%;border-color: white;" >
                                </div>
                                <p>
                                    <?php echo $teks_layan; ?><a style="color: #52b000;">. . .</a>
                                </p>
                                <a class="btn btn-theme border circle btn-md" href="#">Read More</a>
                            </div>
                        </div>
                        <?php } ?>
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
                        <h2>Dokter <span>Kami</span></h2>
                        <p>
                            Dokter Kami Siap Melayani Anda.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="health-tips-items tips-carousel owl-carousel owl-theme">
                    
                    <!-- Single Item -->
                    <?php
                    $qdok = mysqli_query($koneksi,"SELECT * FROM tb_dokter_kami a INNER JOIN tb_kategori_dokter b ON a.id_kategori_dokter=b.id_kategori_dokter ORDER BY a.id_dokter_kami DESC");
                    while($datdok=mysqli_fetch_assoc($qdok)){
                    ?>
                    <div class="single-item">
                        <div class="col-md-5">
                            <div class="thumb">
                                <img src="admin/dist/img/foto_dokter/<?php echo $datdok['foto_dokter']; ?>"  alt="">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="info">
                                <div class="doctor">
                                    <h4><?php echo $datdok['nama_dokter']; ?></h4>
                                    <h5><?php echo $datdok['nama_kategori']; ?></h5>
                                </div>
                                <h3>Tentang dokter <?php echo $datdok['nama_dokter']; ?></h3>
                                <p>
                                    <?php echo $datdok['profil_dokter']; ?> 
                                </p>
                                <h4>Tips menjalani gaya hidup sehat?</h4>
                                <ul>
                                    <?php
                                    $array = explode(',', $datdok['tips_gaya_sehat']);
                                    $total = count($array);
                                    for ($i=0; $i < $total ; $i++) {
                                    echo "
                                    <li>$array[$i]</li>
                                    ";
                                    }
                                    ?>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
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
                        <h2>Berita <span>Terbaru</span></h2>
                        <p>
                            Sekilas informasi berita tentang RS Kami.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-items">

                    <?php
                    $qber = mysqli_query($koneksi,"SELECT * FROM tb_berita ORDER BY id_berita DESC LIMIT 3");
                    while($dber=mysqli_fetch_assoc($qber)){
                    $teks_ber = substr($dber['isi_berita'], 0, 500);
                    $tgl = strtotime($dber['tgl_upload']);
                    ?>
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="admin/dist/img/berita/<?php echo $dber['foto_berita_cover']; ?>" alt="Thumb">
                                    <div class="post-type">
                                        <i class="fas fa-images"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li><a href="#">Admin</a></li>
                                        <li><?php echo date('d/m/Y | H:i:s',$tgl),' WIB'; ?></li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#"><?php echo $dber['judul_berita']; ?></a>
                                </h4>
                                <p>
                                    <?php echo $teks_ber; ?><a style="color: #52b000;">. . .</a>
                                </p>
                                <a class="btn btn-theme circle border btn-sm" href="#">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <?php } ?>
                    
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
                            <h4>Kontak Kami</h4>
                            <p>
                                
                            </p>
                            <h3><i class="fas fa-envelope"></i> <?php echo $datkon['email']; ?></h3>
                            <h3><i class="fas fa-phone"></i> <?php echo $datkon['fax_telp']; ?></h3>
                            <div class="opening-info">
                                <h5>Jam Besuk</h5>
                                <ul>
                                <?php
                                $qbesuk = mysqli_query($koneksi,"SELECT * FROM tb_besuk");
                                while($dbesuk=mysqli_fetch_assoc($qbesuk)){
                                ?>
                                    <li> <span> <?php echo $dbesuk['hari_besuk']; ?> : </span>
                                      <div class="pull-right closed"> <?php echo $dbesuk['jam_besuk']; ?> </div>
                                    </li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 item">
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
                    <div class="col-md-4 item">
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


</html>