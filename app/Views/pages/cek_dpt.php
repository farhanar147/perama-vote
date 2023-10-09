<?= $this->extend('layout/template_user'); ?>

<?= $this->section('content'); ?>
<body class="">
			<div class="box perama" style="padding-top: 50px;">
			<div class="d-flex justify-content-center">
				<h3>CEK STATUS DAFTAR PEMILIH TETAP</h3>
			</div>
			<form action="/login/cek_dpt" method="post">
				<?= csrf_field(); ?>
			   <div class="d-flex justify-content-center">
				<div class="col-6" style="margin-bottom: 230px; margin-top:40px;">
					<div style="padding-bottom: 30px; ">
						<div class="row g-2">
						  <label style="color: #fff; font-size: 18px; font-weight: bold;"  class="col-sm-3 col-form-label">Cek Status DPT : </label>
						  <div class="col-md">
						    <div class="form-floating">
						      <input type="number" name="nim" class="form-control" id="floatingInputGrid">
						      <label for="floatingInputGrid">Nomor Induk Mahasiswa</label>
						    </div>
						  </div>
						  <div class="col-md">
						    <div class="form-floating">
						     <input type="date" name="tanggal_lahir" class="form-control" id="floatingInputGrid">
						      <label for="floatingSelectGrid">Tanggal Lahir</label>
						    </div>
					      </div>
					</div>
				</div>
				<div class="d-flex justify-content-center mb-2">
					  	<button type="submit" style="font-weight: bold; color: #721129;" class="btn btn-light">Cek</button>
				</div>
				</form>
				<?php if(session()->getFlashdata('benar')) { ?>
					<div class="alert alert-info" role="alert">
						<?= session()->getFlashdata('benar');
						session_destroy(); ?>
						
					</div>
					<?php	}else if(session()->getFlashdata('salah')) { ?>
					<div class="alert alert-warning" role="alert">
						<?= session()->getFlashdata('salah'); 
						session_destroy();?>
						
					</div>	
					<?php	} ?>
				
			</div>
		</div>			
	</div>
</body>
<?= $this->endSection(); ?>