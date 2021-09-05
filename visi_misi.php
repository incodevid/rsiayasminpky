<?php
error_reporting(0);
include'config.php';

$qkontak = mysqli_query($koneksi,"SELECT * FROM tb_kontak");
$datkon = mysqli_fetch_assoc($qkontak);


$qvideo=mysqli_query($koneksi,"SELECT * FROM tb_video_profil");
$dvideo=mysqli_fetch_assoc($qvideo);

$qvisi=mysqli_query($koneksi,"SELECT * FROM tb_visi");
$dvisi=mysqli_fetch_assoc($qvisi);

$qmisi=mysqli_query($koneksi,"SELECT * FROM tb_misi");
$dmisi=mysqli_fetch_assoc($qmisi);

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
    <title>RSIA Yasmin - Visi Dan Misi</title>

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

.gradient-color{background:#ffffff;background:-webkit-linear-gradient(315deg, #ffffff, #0074da);background:linear-gradient(135deg, #ffffff, #52b000)}
.sidebar-item.social-sidebar li.pinterest a {
    background: #52b000 none repeat scroll 0 0;
}
    </style>

    <script pagespeed_no_defer>//<![CDATA[
            (function() {
                var d = function(b) {
                    var a = window;
                    if (a.addEventListener)
                        a.addEventListener("load", b, !1);
                    else if (a.attachEvent)
                        a.attachEvent("onload", b);
                    else {
                        var c = a.onload;
                        a.onload = function() {
                            b.call(this);
                            c && c.call(this)
                        }
                    }
                };
                window.pagespeed = window.pagespeed || {};
                var p = window.pagespeed, q = function() {
                    this.a = !0
                };
                q.prototype.c = function(b) {
                    b = parseInt(b.substring(0, b.indexOf(" ")), 10);
                    return!isNaN(b) && b <= Date.now()
                };
                q.prototype.hasExpired = q.prototype.c;
                q.prototype.b = function(b) {
                    return b.substring(b.indexOf(" ", b.indexOf(" ") + 1) + 1)
                };
                q.prototype.getData = q.prototype.b;
                q.prototype.d = function(b) {
                    var a = document.getElementsByTagName("script"), a = a[a.length - 1];
                    a.parentNode.replaceChild(b, a)
                };
                q.prototype.replaceLastScript = q.prototype.d;
                q.prototype.e = function(b) {
                    var a = window.localStorage.getItem("pagespeed_lsc_url:" + b), c = document.createElement(a ? "style" : "link");
                    a && !this.c(a) ? (c.type = "text/css", c.appendChild(document.createTextNode(this.b(a)))) : (c.rel = "stylesheet", c.href = b, this.a = !0);
                    this.d(c)
                };
                q.prototype.inlineCss = q.prototype.e;
                q.prototype.f = function(b, a) {
                    var c = window.localStorage.getItem("pagespeed_lsc_url:" + b + " pagespeed_lsc_hash:" + a), f = document.createElement("img");
                    c && !this.c(c) ? f.src = this.b(c) : (f.src = b, this.a = !0);
                    for (var c = 2, k = arguments.length; c < k; ++c) {
                        var g = arguments[c].indexOf("=");
                        f.setAttribute(arguments[c].substring(0, g), arguments[c].substring(g + 1))
                    }
                    this.d(f)
                };
                q.prototype.inlineImg = q.prototype.f;
                var r = function(b, a, c, f) {
                    a = document.getElementsByTagName(a);
                    for (var k = 0, g = a.length; k < g; ++k) {
                        var e = a[k], m = e.getAttribute("pagespeed_lsc_hash"), h = e.getAttribute("pagespeed_lsc_url");
                        if (m && h) {
                            h = "pagespeed_lsc_url:" + h;
                            c && (h += " pagespeed_lsc_hash:" + m);
                            var l = e.getAttribute("pagespeed_lsc_expiry"), l = l ? (new Date(l)).getTime() : "", e = f(e);
                            if (!e) {
                                var n = window.localStorage.getItem(h);
                                n && (e = b.b(n))
                            }
                            e && (window.localStorage.setItem(h, l + " " + m + " " + e), b.a = !0)
                        }
                    }
                }, s = function(b) {
                    r(b, "img", !0, function(a) {
                        return a.src
                    });
                    r(b, "style", !1, function(a) {
                        return a.firstChild ? a.firstChild.nodeValue : null
                    })
                };
                p.g = function() {
                    if (window.localStorage) {
                        var b = new q;
                        p.localStorageCache = b;
                        d(function() {
                            s(b)
                        });
                        d(function() {
                            if (b.a) {
                                for (var a = [], c = [], f = 0, k = Date.now(), g = 0, e = window.localStorage.length; g < e; ++g) {
                                    var m = window.localStorage.key(g);
                                    if (!m.indexOf("pagespeed_lsc_url:")) {
                                        var h = window.localStorage.getItem(m), l = h.indexOf(" "), n = parseInt(h.substring(0, l), 10);
                                        if (!isNaN(n))
                                            if (n <= k) {
                                                a.push(m);
                                                continue
                                            } else if (n < f || 0 == f)
                                                f = n;
                                        c.push(h.substring(l + 1, h.indexOf(" ", l + 1)))
                                    }
                                }
                                k = "";
                                f && (k = "; expires=" + (new Date(f)).toUTCString());
                                document.cookie = "_GPSLSC=" + c.join("!") + k;
                                g = 0;
                                for (e = a.length; g < e; ++g)
                                    window.localStorage.removeItem(a[g]);
                                b.a = !1
                            }
                        })
                    }
                };
                p.localStorageCacheInit = p.g;
            })();
            pagespeed.localStorageCacheInit();
            //]]></script>

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
                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Informasi</a>
                            <ul class="dropdown-menu">
                                <li><a href="berita">Berita</a></li>
                                <li><a href="artikel">Artikel</a></li>
                            </ul>
                        </li>
                        <li class="dropdown active">
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

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url(assets/img/banner/8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Visi Dan Misi</h1>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Beranda</a></li>
                        <li><a href="#">Profil</a></li>
                        <li class="active">Visi Dan Misi</li>
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
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li><center><h2><a href="#">VISI DAN MISI</a></h2></center></li>
                                    </ul>
                                </div>
                                <h3>
                                    <center><a href="#">VISI</a></center>
                                </h3>
                            
                                    <center><?php echo $dvisi['text_visi'];?></center>
                                <br>
                                <br>
                                <br>
                                <br>
                                <h3>
                                    <center><a href="#">MISI</a></center>
                                </h3>
                            
                                    <center><?php echo $dmisi['text_misi'];?></center>
                            </div>
                     
                         
                        </div>
                        <!-- End Single Item -->
                   

                        
                        

                       

                    </div>
                    <!-- Start Sidebar -->
                    <div class="sidebar col-md-4">
                        <aside>
                            <div class="sidebar-item search">
                                <div class="title">
                                    <h4>Pencarian</h4>
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
                                    <h4>Album Galeri</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <?php 
                                        $qalbum = mysqli_query($koneksi,"SELECT *,COUNT(a.id_galeri) AS jml_galeri FROM tb_galeri a RIGHT JOIN tb_album b ON a.id_album=b.id_album GROUP BY b.`id_album` ORDER BY b.id_album  DESC;");
                                        while($dalbum=mysqli_fetch_assoc($qalbum)){
                                        ?>
                                        <li>
                                            <a href="#"><?php echo $dalbum['nama_album']; ?> <span><?php echo $dalbum['jml_galeri']; ?></span></a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item recent-post">
                                <div class="title">
                                    <h4>Berita Terbaru</h4>
                                </div>
                                <ul>

                                    <?php
                                    $qberita=mysqli_query($koneksi,"SELECT * FROM tb_berita ORDER BY id_berita DESC");
                                    while($dberita=mysqli_fetch_assoc($qberita)){
                                    $tglar = strtotime($dberita['tgl_upload']);
                                    ?>
                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="admin/dist/img/berita/<?php echo $dberita['foto_berita_cover']; ?>" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="#"><?php echo $dberita['judul_berita']; ?></a>
                                            <div class="meta-title">
                                                <span class="post-date"><?php echo date('d/m/Y | H:i:s',$tglar),' WIB'; ?></span> - By <a href="#">Admin</a>
                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>


                                </ul>
                            </div>
                            <div class="sidebar-item recent-post">
                                <div class="title">
                                    <h4>Artikel</h4>
                                </div>
                                <ul>

                                    <?php
                                    $qartikel=mysqli_query($koneksi,"SELECT * FROM tb_artikel ORDER BY id_artikel DESC");
                                    while($dartikel=mysqli_fetch_assoc($qartikel)){
                                    $tglar = strtotime($dartikel['tgl_upload']);
                                    ?>
                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="admin/dist/img/artikel/<?php echo $dartikel['foto_artikel_cover']; ?>" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="#"><?php echo $dartikel['judul_artikel']; ?></a>
                                            <div class="meta-title">
                                                <span class="post-date"><?php echo date('d/m/Y | H:i:s',$tglar),' WIB'; ?></span> - By <a href="#">Admin</a>
                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>


                                </ul>
                            </div>
                            <div class="sidebar-item gallery">
                                <div class="title">
                                    <h4>Galleri</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>

                                        <!--LIMIT 6-->
                                        <?php 
                                        $qgal = mysqli_query($koneksi,"SELECT * FROM tb_galeri ORDER BY id_galeri DESC");
                                        while($dgal=mysqli_fetch_assoc($qgal)){
                                        ?>
                                        <li>
                                            <a href="#">
                                                <img src="admin/dist/img/galeri/<?php echo $dgal['file_foto']; ?>" alt="thumb">
                                            </a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item social-sidebar">
                                <div class="title">
                                    <h4>Ikuti Media Sosial Kami</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>

                                        <?php 
                                        $qmedsos=mysqli_query($koneksi,"SELECT * FROM tb_medsos");
                                        while($dmedsos=mysqli_fetch_assoc($qmedsos)){
                                        ?>
                                        <center>
                                        <li class="pinterest" >
                                            <a href="<?php echo $dmedsos['link_medsos']; ?>" target="_blank">
                                            <img src="admin/dist/img/medsos/<?php echo $dmedsos['icon_medsos'];?>" style="width: 90px;" >
                                            </a>
                                        </li>
                                        </center>
                                        <?php } ?>

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


</html>