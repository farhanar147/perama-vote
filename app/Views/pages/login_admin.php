<?= $this->extend('layout/template_user'); ?>

<?= $this->section('content'); ?>
<body>
   <div class="box perama" style="padding-top: 50px;">
			<div class="d-flex justify-content-center">
				<h3>LOGIN ADMIN</h3>
			</div>
		<form action="/login/admin_login" method="post">
		<?= csrf_field(); ?>		
		<div class="d-flex justify-content-center">
			<div class="col-4  red-one" style="margin-bottom: 70px; margin-top:40px;">
				<div style="padding: 50px 40px 50px 40px; ">
				<div class="alert alert-info" role="alert">
					Akun Demo = user : farhan | pw : 1234
				</div>
				<?php if (session()->getFlashdata('pesan')) { ?>
					<div class="alert alert-danger" role="alert">
						<?= session()->getFlashdata('pesan'); ?>
					</div>
					<?php	} ?>
					<form>
					  <div class="mb-3">
					    <label for="user" class="form-label">Username</label>
					    <input type="text" name="username" class="form-control" >
					  </div>
					  <div class="mb-3">
					    <label for="password" class="form-label">Password</label>
					    <input type="password" name="password" class="form-control">
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