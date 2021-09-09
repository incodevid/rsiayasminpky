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

$qstruktur=mysqli_query($koneksi,"SELECT * FROM tb_struktur");
$dstruktur=mysqli_fetch_assoc($qstruktur);

$qsejarah=mysqli_query($koneksi,"SELECT * FROM tb_sejarah");
$dsejarah=mysqli_fetch_assoc($qsejarah);

$qprofilrs=mysqli_query($koneksi,"SELECT * FROM tb_profil_rs");
$dprofilrs=mysqli_fetch_assoc($qprofilrs);

$qkerjasama=mysqli_query($koneksi,"SELECT * FROM tb_kerjasama");
$dkerjasama=mysqli_fetch_assoc($qkerjasama);

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
    <title>RSIA Yasmin - Kerjasama</title>

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
                                <li><a href="jadwal_dokter">Jadwal Dokter</a></li>
                                <li><a href="tersedia_bed">Ketersediaan Bed</a></li>
                            </ul>
                        </li>
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Profil</a>
                            <ul class="dropdown-menu">
                                <li><a href="visi_misi">Visi Dan Misi</a></li>
                                <li><a href="struktur_organisasi">Struktur Organisasi</a></li>
                                <li><a href="sejarah">Sejarah</a></li>
                                <li><a href="profil_rs">Profil RS</a></li>
                                <li><a href="kerjasama">Kerjasama</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Layanan</a>
                            <ul class="dropdown-menu">
                                <?php
                                $qukat = mysqli_query($koneksi, "SELECT * FROM tb_kategori_layanan ORDER BY id_kategori_layanan DESC");
                                while($datkat=mysqli_fetch_assoc($qukat)){
                                ?>
                                <li><a href="layanan?nm=<?php echo $datkat['nama_kategori']; ?>"><?php echo $datkat['nama_kategori']; ?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="dokter_kami"  >Dokter Kami</a>
                        </li>
                        <li class="dropdown">
                            <a href="galeri"  >Galeri</a>
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
                    <h1>Kerjasama</h1>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Beranda</a></li>
                        <li><a href="#">Profil</a></li>
                        <li class="active">Kerjasama</li>
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
                                <a href="#">
                                    <img src="admin/dist/img/kerjasama/<?php echo $dkerjasama['foto_cover']; ?>" alt="Thumb">
                                    <div class="post-type">
                                        <i class="fas fa-images"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li><center><h2><a href="#">MITRA KERJASAMA</a></h2></center></li>
                                    </ul>
                                </div>
                                                            
                                    <?php echo $dkerjasama['text_kerjasama'];?>
                              
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
                                            <a href="detail_berita?det=<?php echo $dberita['judul_berita']; ?>"><?php echo $dberita['judul_berita']; ?></a>
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
                                            <a href="detail_artikel?detail=<?php echo $dartikel['judul_artikel']; ?>"><?php echo $dartikel['judul_artikel']; ?></a>
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
                                        $qgal = mysqli_query($koneksi,"SELECT * FROM tb_galeri ORDER BY id_galeri DESC LIMIT 6");
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


    <!-- Start MEDIA SOSIAL 
    ============================================= -->
<input class='chatMenu hidden' id='offchatMenu' type='checkbox' />
<label class='chatButton' for='offchatMenu'>
  <svg class='svg-1' viewBox='-2 -2 37 40'><path d='M24,22a1,1,0,0,1-.64-.23L18.84,18H17A8,8,0,0,1,17,2h6a8,8,0,0,1,2,15.74V21a1,1,0,0,1-.58.91A1,1,0,0,1,24,22ZM17,4a6,6,0,0,0,0,12h2.2a1,1,0,0,1,.64.23L23,18.86V16.92a1,1,0,0,1,.86-1A6,6,0,0,0,23,4Z'></path><rect height='2' width='2' x='19' y='9'></rect><rect height='2' width='2' x='14' y='9'></rect><rect height='2' width='2' x='24' y='9'></rect><path d='M8,30a1,1,0,0,1-.42-.09A1,1,0,0,1,7,29V25.74a8,8,0,0,1-1.28-15,1,1,0,1,1,.82,1.82,6,6,0,0,0,1.6,11.4,1,1,0,0,1,.86,1v1.94l3.16-2.63A1,1,0,0,1,12.8,24H15a5.94,5.94,0,0,0,4.29-1.82,1,1,0,0,1,1.44,1.4A8,8,0,0,1,15,26H13.16L8.64,29.77A1,1,0,0,1,8,30Z'></path></svg>
  <svg class='svg-2' viewBox='0 0 512 512'><path d='M278.6 256l68.2-68.2c6.2-6.2 6.2-16.4 0-22.6-6.2-6.2-16.4-6.2-22.6 0L256 233.4l-68.2-68.2c-6.2-6.2-16.4-6.2-22.6 0-3.1 3.1-4.7 7.2-4.7 11.3 0 4.1 1.6 8.2 4.7 11.3l68.2 68.2-68.2 68.2c-3.1 3.1-4.7 7.2-4.7 11.3 0 4.1 1.6 8.2 4.7 11.3 6.2 6.2 16.4 6.2 22.6 0l68.2-68.2 68.2 68.2c6.2 6.2 16.4 6.2 22.6 0 6.2-6.2 6.2-16.4 0-22.6L278.6 256z'></path></svg>
</label>


<div class='chatBox'>
  <div class='chatContent'>
    <div class='chatHeader'>
      <svg viewbox='0 0 32 32'><path d='M24,22a1,1,0,0,1-.64-.23L18.84,18H17A8,8,0,0,1,17,2h6a8,8,0,0,1,2,15.74V21a1,1,0,0,1-.58.91A1,1,0,0,1,24,22ZM17,4a6,6,0,0,0,0,12h2.2a1,1,0,0,1,.64.23L23,18.86V16.92a1,1,0,0,1,.86-1A6,6,0,0,0,23,4Z'></path><rect height='2' width='2' x='19' y='9'></rect><rect height='2' width='2' x='14' y='9'></rect><rect height='2' width='2' x='24' y='9'></rect><path d='M8,30a1,1,0,0,1-.42-.09A1,1,0,0,1,7,29V25.74a8,8,0,0,1-1.28-15,1,1,0,1,1,.82,1.82,6,6,0,0,0,1.6,11.4,1,1,0,0,1,.86,1v1.94l3.16-2.63A1,1,0,0,1,12.8,24H15a5.94,5.94,0,0,0,4.29-1.82,1,1,0,0,1,1.44,1.4A8,8,0,0,1,15,26H13.16L8.64,29.77A1,1,0,0,1,8,30Z'></path></svg>
      <div class='chatTitle'>Media sosial kami, <span>Hubungi kami kapan saja, Admin akan membalas dalam beberapa menit</span></div>
    </div>
    <div class='chatText'>
      <span>Klik tombol gambar dibawah ini...<br>
      
        <?php 
        $qmedsos=mysqli_query($koneksi,"SELECT * FROM tb_medsos");
        while($dmedsos=mysqli_fetch_assoc($qmedsos)){
        ?>
    
            <a href="<?php echo $dmedsos['link_medsos']; ?>" target="_blank">
            <img src="admin/dist/img/medsos/<?php echo $dmedsos['icon_medsos'];?>" style="width: 60px;" >
            </a>
      
        <?php } ?>
       </span>
    </div>
  </div>
</div>

<style>
/* Chatbox Whatsapp */
:root {
  --warna-background: #4dc247;
  --warna-bg-chat: #f0f5fb;
  --warna-icon: #fff;
  --warna-text: #505050;
  --warna-text-alt: #989b9f;
  --lebar-chatbox: 320px;
}
.chatMenu{display:none}
.chatButton{position:fixed;background-color:var(--warna-background);bottom:20px;right:20px;border-radius:50px;z-index:20;overflow:hidden;display:flex;align-items:center;justify-content:center;width:50px;height:50px;-webkit-transition:all .2s ease-out;transition:all .2s ease-out}
.chatButton svg{margin:auto;fill:var(--warna-icon)}
.chatButton svg.svg-2{display:none}
  
.chatBox{position:fixed;bottom:70px;right:20px;width:var(--lebar-chatbox);-webkit-transition:all .2s ease-out;transition:all .2s ease-out;
z-index:21;opacity:0;visibility:hidden;line-height:normal}
.chatContent{border-radius:15px;background-color:#fff;box-shadow:0 5px 15px 0 rgba(0,0,0,.05);overflow:hidden}
.chatHeader{position:relative;display:flex;align-items:center;padding:15px 20px;background-color:var(--warna-background);overflow:hidden}
.chatHeader svg{width:35px;height:35px;flex-shrink:0;fill:var(--warna-icon)}
.chatHeader .chatTitle{padding-right:15px;font-size:14px;color:var(--warna-icon)}
.chatHeader .chatTitle span{font-size:11.5px;display:block;line-height:1.58em}
  
.chatText{display:flex;flex-wrap:wrap;margin:25px 20px;font-size:12px;color:var(--warna-text)}
.chatText span{display:inline-block;margin-right:auto;padding:10px 10px 10px 20px;background-color:var(--warna-bg-chat);border-radius:3px 15px 15px}
.chatText span:after{content:'Just now';margin-right:15px;font-size:9px;color:var(--warna-text-alt)}
.chatText span.typing{margin:15px 0 0 auto;padding:10px 20px 10px 10px;border-radius:15px 3px 15px 15px}
.chatText span.typing:after{display:none}
  
.chatBox .chatStart{display:flex;align-items:center;margin-top:15px;padding:18px 20px;border-radius:10px;background-color:#fff;overflow:hidden;font-size:12px;color:var(--warna-text)}
.chatMenu:checked + .chatButton{-webkit-transform: rotate(360deg);transform: rotate(360deg)}
.chatMenu:checked + .chatButton svg.svg-1{display:none}
.chatMenu:checked + .chatButton svg.svg-2{display:block}
.chatMenu:checked ~ .chatBox{bottom:90px;opacity:1;visibility:visible}
</style>

<!-- END MEDIA SOSIAL  -->

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
                                Jam besuk pengunjung dapat berubah sewaktu-waktu sesuai dengan kebijakan RSIA Yasmin.
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
                                    <a href="layanan?nm=<?php echo $dlay['nama_kategori']; ?>"><i class="fas fa-arrow-right"></i> <?php echo $dlay['nama_kategori']; ?></a>
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
                                        <a href="detail_berita?det=<?php echo $dber1['judul_berita']; ?>"><i class="fas fa-arrow-right"></i> <?php echo $dber1['judul_berita']; ?></a> 
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