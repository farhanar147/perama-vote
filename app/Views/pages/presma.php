<?= $this->extend('layout/template_user'); ?>

<?= $this->section('content'); ?>
<body class="box">
		<!-- satu -->
			<div class="row justify-content-md-center mt-5 paslon" style="--bs-gutter-x: -3.5rem;">
			   <div class="col col-lg-4">
			     <h3><?= $presma['nama']; ?></h3>
			     <p>"<?= $presma['visi']; ?>"</p>
			   </div>
			   <div class="col col-lg-2">
			     <img src="/img/<?= $presma['foto']; ?>" class="gallery-item" alt="Gallery3">
			   </div>
			</div>
		<!-- satu -->

		<!-- dua -->
		<div class="container mt-3">
			<div class="col misi">
				<h1>Misi</h1>   
				<p><?= $misi['misi1']; ?></p>
                <p><?= $misi['misi2']; ?></p>
				<p><?= $misi['misi3']; ?></p>
				<p><?= $misi['misi4']; ?></p>
				<p><?= $misi['misi5']; ?></p>
				<p><?= $misi['misi6']; ?></p>
				<p><?= $misi['misi7']; ?></p>
				<p><?= $misi['misi8']; ?></p>
            </div>
		</div>
		<!-- dua -->

		<!-- tiga -->
		<div class="container mt-5" style="margin-bottom: 9rem !important;">	
			<div class="row justify-content-md-center">
			    <div class="col col-lg-5">
			      <div class="program">
			      	<h1>PROGRAM UNGGULAN</h1>
			      </div>
			      <div class="unggulan">
			      	<p><?= $program['program1']; ?></p>
			      </div>
			      <div class="unggulan">
			      	 <p><?= $program['program2']; ?></p>
			      </div>
			      <div class="unggulan">
			      	 <p><?= $program['program3']; ?></p>
			      </div>
			      <div class="unggulan">
			      	<p><?= $program['program4']; ?></p>
			      </div>
				  <div class="unggulan">
			      	<p><?= $program['program5']; ?></p>
			      </div>
			    </div>
			</div>
		</div>	
		<!-- tiga -->
</body>
<?= $this->endSection(); ?>