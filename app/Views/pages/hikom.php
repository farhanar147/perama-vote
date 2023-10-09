<?= $this->extend('layout/template_user'); ?>

<?= $this->section('content'); ?>
<body class="box">
		<!-- Logo -->
			<div class="d-flex justify-content-center mt-5 paslon">
			   <div class="col col-lg-2">
			   	<img src="/img/hikom.png" class="gallery-item" alt="Gallery3">
			   </div>
			</div> 
			<div class="d-flex justify-content-center">  
			   <div class="hima">
			     <h2>Himpunan Mahasiswa Komunikasi</h2>
			   </div>
			</div>
		<!-- Logo -->
    <?php foreach ($hikom as $k) { ?>
		<!-- satu -->
			<div class="row justify-content-md-center mt-5 paslon" style="--bs-gutter-x: -3.5rem;">
			   <div class="col col-lg-4">
               <h3><?= $k['nama']; ?></h3>
			     <p>"<?= $k['visi']; ?>"</p>
			   </div>
			   <div class="col col-lg-2">
			     <img src="/img/<?= $k['foto']; ?>" class="gallery-item" alt="Gallery3">
			   </div>
			</div>
		<!-- satu -->

		<!-- dua -->
		<div class="container mt-3">
			<div class="col misi">
				<h1>Misi</h1>
				<p>
				<?= $k['misi1']; ?>
				</p>
				<p>
				<?= $k['misi2']; ?>
				</p>
				<p>
				<?= $k['misi3']; ?>
				</p>
				<p>
				<?= $k['misi4']; ?>
				</p>
                <p>
				<?= $k['misi5']; ?>
				</p>
                <p>
				<?= $k['misi6']; ?>
				</p>
                <p>
				<?= $k['misi7']; ?>
				</p>
                <p>
				<?= $k['misi8']; ?>
				</p>
			</div>
		</div>
		<!-- dua -->

		<!-- tiga -->
		<div class="container mt-5 mb-3">	
			<div class="row justify-content-md-center">
			    <div class="col col-lg-5">
			      <div class="program">
			      	<h1>PROGRAM UNGGULAN</h1>
			      </div>
			      <div class="unggulan">
			      	<p><?= $k['program1']; ?></p>
			      </div>
			      <div class="unggulan">
			      	 <p><?= $k['program2']; ?></p>
			      </div>
			      <div class="unggulan">
			      	 <p><?= $k['program3']; ?></p>
			      </div>
			      <div class="unggulan">
			      	<p><?= $k['program4']; ?></p>
			      </div>
				  <div class="unggulan">
			      	<p><?= $k['program5']; ?></p>
			      </div>
			    </div>
			</div>
		</div>	
		<!-- tiga -->

        <?php }; ?>
</body>
<?= $this->endSection(); ?>