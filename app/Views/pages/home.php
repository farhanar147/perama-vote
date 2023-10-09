<?= $this->extend('layout/template_user'); ?>

<?= $this->section('content'); ?>
<body class="box">
		<!-- Tema -->
		<div class="container perama" style="margin-top: 100px; ">
			
			<div class="d-flex justify-content-center">	
				<h1>PERAMA IBN 2021</h1>
			</div>
			<div class="d-flex justify-content-center">	
				<h3>Pemilihan Raya Mahasiswa Institut Bisnis Nusantara</h3>
			</div>
			<div class="d-flex justify-content-center">
				<a href="/pages/biodata" type="button" style="color: #721129;"  class="btn btn-light mx-3">Lihat Daftar Calon</a>
				<a href="/pages/cek_dpt" type="button" style="color: #721129;"  class="btn btn-light mx-3">Cek Status DPT</a>
				<a href="#syarat" type="button" style="color: #721129;"  class="btn btn-light mx-3">Syarat & Ketentuan</a>
			</div>
		</div>
		<!-- Tema -->

		<!-- Slogan -->
		<div class="container" style="margin-top: 150px;">
			<img style="" class="img-fluid mx-auto d-block" src="/img/slogan.png">
		</div>
		<!-- Slogan -->

		<!-- Pengertian -->
		<div class="container mt-2">
			<img style="" class="img-fluid mx-auto d-block" src="/img/arti.png">
		</div>
		<!-- Pengertian -->

		<!-- Peraturan -->
		<div class="container" id="syarat" style="margin-top: 100px;" >
			<img style="" class="img-fluid mx-auto d-block" src="/img/rule.png">
		</div>
		<!-- Peraturan -->

		<!-- Timeline -->
		<div class="container" style="margin-top: 100px;" >
			<img style="" class="img-fluid mx-auto d-block" src="/img/timeline.png">
		</div>
		<!-- Timeline -->

	<!-- Section: Social media -->
	<section class="d-flex justify-content-center" style="margin-top: 100px; margin-bottom: 50px;">
    <!-- Left -->
    <div class="me-2 d-none d-lg-block">
      <span style="color: #ffff; ">Follow Our Social Media :</span>
    </div>
    <!-- Left -->
    <!-- Right -->
    <div class="rounded-pill" style="background-color: #ffff;">
     <a style="text-decoration: none;" href="#" class="mx-4 me-4 text-reset">
        <i class="fab fa-youtube"></i>
      </a>
      <a style="text-decoration: none;" href="#" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>	
      <a style="text-decoration: none;" href="#" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a style="text-decoration: none;" href="#" class="me-4 text-reset">
        <i class="fab fa-tiktok"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->
</body>
<?= $this->endSection(); ?>