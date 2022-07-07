<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css')?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css')?>">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?= base_url()?>index.php/home/register" class="h1"><b>Wisata</b>Depok</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <?= form_open('login/registerauth')?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="nama" value="<?= set_value('nama') ?>">
          <?= form_error('nama','<small class="text-danger pl-3">', '</small>'); ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="UserName" name="username" value="<?= set_value('username') ?>">
          <?= form_error('username','<small class="text-danger pl-3">', '</small>'); ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" value="<?= set_value('email') ?>">
          <?= form_error('email','<small class="text-danger pl-3">', '</small>'); ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" value="<?= set_value('password') ?>">
          <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
        <?= form_close();?>

      <div class="social-auth-links text-center">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>

      <a href="<?= base_url()?>index.php/home/login" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?= base_url('plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('dist/js/adminlte.min.js')?>"></script>
<script>
	<?php if ($this->session->flashdata('success')): ?>
		let isi = <?= json_encode($this->session->flashdata('success'))?>;
		Swal.fire({
		position: 'top-end',
		icon: 'success',
		title: 'Berhasil',
		text: isi,
		showConfirmButton: 'Oke',
		timer: 2500
		})
	<?php endif;?>	

	<?php if ($this->session->flashdata('error')): ?>
		let isi = <?= json_encode($this->session->flashdata('error'))?>;
		Swal.fire({
		position: 'top-end',
		icon: 'error',
		title: 'Something Wrong',
		text: isi,
		showConfirmButton: 'Oke',
		timer: 2500
		})
	<?php endif;?>

	function konfirmasi(){
		let id = document.getElementById('hapus');
		let href = id.getAttribute('href');
		Swal.fire({
		title: 'Apakah Anda Yakin Ingin Mengahpus Data ini?',
		text: "Data Akan Dihapus permanen",
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, Hapus Data Ini!'
		}).then((result) => {
		if (result.value) {
			window.location.href = href;
		}
		})
	}

</script>
</body>
</html>
