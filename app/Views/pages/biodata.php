<?= $this->extend('layout/template_user'); ?>

<?= $this->section('content'); ?>
<body class="box">
		<!-- Tema -->
		<div class="container calon" style="margin-top: 30px; ">
			
			<div class="d-flex justify-content-center" style="font-size: 50px;">	
				<h1 >DAFTAR CALON PRESIDEN MAHASISWA</h1>
			</div>
			<div class="d-flex justify-content-center">	
				<h3>Pilih salah satu calon untuk melihat lebih lanjut.</h3>
			</div>
		</div>
		    <section class="gallery">
				<div class="container-lg">
					<div class="row  row-cols-1 row-cols-sm-2 row-cols-md-3 paslon">
                        <?php foreach ($presma as $k) { ?>
						<div class="col">
							<h1><?= $k['no_urut']; ?></h1>
						<a href="/pages/presma/<?= $k['id_presma']; ?>"><img src="/img/<?= $k['foto']; ?>" class="gallery-item" alt="Gallery1"></a>
							<h3><?= $k['nama']; ?></h3>
						</div>
                        <?php }; ?>
				</div>
			</section>
				
			<div class="container calon" style=" ">
			
			<div class="d-flex justify-content-center" style="font-size: 50px;">	
				<h1 style="font-size: 40px;">DAFTAR CALON KETUA UMUM HIMPUNAN MAHASISWA</h1>
			</div>
			<div class="d-flex justify-content-center">	
				<h3>Pilih logo hima untuk melihat lebih lanjut.</h3>
			</div>
		</div>
		    <section class="gallery" style="min-height: 34vh!important; ">
				<div class="container-lg">
					<div class="row gy-3 row-cols-3 row-cols-sm-4 row-cols-md-5 paslon">
						<div class="col">
						<a href="/pages/himen"><img src="/img/himen.png" class="gallery-item" alt="Gallery1"></a>
						</div>

						<div class="col">
						<a href="/pages/himak"><img src="/img/himak.png" class="gallery-item" alt="Gallery2"></a>
						</div>

						<div class="col">
						<a href="/pages/hikom"><img src="/img/hikom.png" class="gallery-item" alt="Gallery3"></a>
						</div>

						<div class="col">
						<a href="/pages/himakom"><img src="/img/himakom.png" class="gallery-item" alt="Gallery3"></a>
						</div>

						<div class="col">
						<a href="/pages/elsa"><img src="/img/elsa.png" class="gallery-item" alt="Gallery3"></a>
						</div>
					</div>
				</div>
			</section>
				
</body>
<?= $this->endSection(); ?>