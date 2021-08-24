<?php
error_reporting(0);
include "config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Login | RSIA Yasmin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page" style="background-image: url('dist/img/bg-login.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: 100% ;">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="login" class="h1"><b>RSIA</b> YASMIN</a>
    </div>
    <?php
error_reporting(0);

if (isset($_POST['blogin'])){
$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);
$login=mysqli_query($koneksi,"SELECT * FROM tb_akun WHERE username='$username' and password='$password'");
$ketemu=mysqli_num_rows($login);
$r=mysqli_fetch_assoc($login);
// Apabila nama_admin dan password ditemukan
if ($ketemu > 0){
session_start();
$_SESSION['id_akun']      = $r['id_akun'];
$_SESSION['username']     = $r['username'];
$_SESSION['password']     = $r['password'];
$_SESSION['nama_akun']    = $r['nama_akun'];
$_SESSION['level_akses']  = $r['level_akses'];
 echo "<script>alert('Login Sukses!');document.location='index' </script> ";
}
else{
    
    ?>
            
      <div class="alert alert-danger alert-dismissible" id="pesan">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-times"></i> Gagal!</h5>
      Username atau Password Salah!.
      </div>
                
<?php
}

if($ketemu > 0){
write_log($_POST['nama_akun']." Sukses login . . ");
}else{
write_log($_POST['nama_akun']." Gagal Login..");
}


}
?>
    <div class="card-body">
      <p class="login-box-msg">Login untuk masuk sistem Administrator</p>

      <form  method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- /.col -->
          <div class="col-6">
            <button id="pindah" class="btn btn-danger btn-block">Batal</button>
          </div>
          <div class="col-6">
            <button type="submit" name="blogin" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

     
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>



<script type="text/javascript">
  $("#pindah").click(function()
{
    document.location.href = '../index';
});
</script>

<script>
  $('#pesan').fadeIn('slow').delay(3000).fadeOut('slow');
</script>

</body>
</html>
