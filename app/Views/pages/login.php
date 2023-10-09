<?= $this->extend('layout/template_user'); ?>

<?= $this->section('content'); ?>
<body>
   <div class="box perama" style="padding-top: 50px;">
			<div class="d-flex justify-content-center">
				<h3>LOGIN PERAMA IBN</h3>
			</div>
		<form action="/login/cek_login" method="post">
		<?= csrf_field(); ?>		
		<div class="d-flex justify-content-center">
			<div class="col-4  red-one" style="margin-bottom: 70px; margin-top:40px;">
				<div style="padding: 50px 40px 50px 40px; ">
				<div class="alert alert-info" role="alert">
					Akun Demo </br>
					<span>akun1 = NIM:1991051004|tgl:2000-11-08</span></br>
					<span>akun2 = NIM:1991061003|tgl:2001-10-18</span>
				</div>
				<?php if (session()->getFlashdata('pesan')) { ?>
					<div class="alert alert-danger" role="alert">
						<?= session()->getFlashdata('pesan'); ?>
					</div>
					<?php	} ?>
					<form>
					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Nomor Induk Mahasiswa</label>
					    <input type="number" name="nim" class="form-control" >
					  </div>
					  <div class="mb-3">
					    <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
					    <input type="date" name="tanggal_lahir" class="form-control">
					  </div>
					  <div class="d-flex justify-content-center">
					  	<button type="submit" class="btn btn-light" style="color: #721129;">Login</button>
					  </div>
					</form>
				</div>
			</div>
		</div>
		</form>
    </div>
</body>
<?= $this->endSection(); ?>