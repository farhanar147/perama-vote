<?= $this->extend('layout_pemilih/template'); ?>

<?= $this->section('content'); ?>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" style="background-color: #8e1533;">
                <div class="sidebar-header" style="background-color: #721129;">
                    <div class="tipe">
                    	<img src="/img/user.png">
                    	<p><?= session()->get('nama'); ?></p>
                    	<p>Mahasiswa IBN</p>
                    	<p><?= session()->get('hima'); ?></p>
                    </div>
                </div>

                <ul class="list-unstyled kiri" style="background-color: #8e1533;" >
                    <li>
                        <a href="/pemilih">Dashboard</a>
                    </li>
                     <li>
                        <a href="/pemilih/presma">Calon Presma</a>
                    </li>
                     <li>
                        <a href="/pemilih/ketum_<?= session()->get('hima'); ?>">Calon Ketua HIMA</a>
                    </li>
                    <li>
                        <a href="/pemilih/biodata_<?= session()->get('hima'); ?>">Biodata</a>
                    </li>
                </ul>

                <ul class="list-unstyled CTAs" style="background-color: #8e1533;">
                    <li style="margin-top: 10px;"><a href="/login/logout" class="download" style="color: #8e1533; ">Logout</a></li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

<nav class="navbar navbar-default top" style="">
<div class="container-fluid">

    <div class="navbar-header">
        <button type="button" id="sidebarCollapse" class="navbar-btn">
            <span></span>
            <span></span>
            <span></span>
        </button>

    </div>

<div class="collapse navbar-collapse" style="margin-left: 40px; margin-top: 8px;">
<ul class="list-unstyled lu">
     <li >
       Biodata Presma & Ketum
    </li>
</ul>
</div>
</div>
</nav>

<div class="line"></div>
<h1 style="text-align:center; color: #8E1533;">Calon Presma</h1>
<?php foreach ($presma as $key) { ?>
<div class="row" style="margin-bottom: 10px;">
    <div class="col-md-6">
        <div class="sasa">
        <h2><?= $key['nama']; ?></h2>
        <img src="/img/<?= $key['foto']; ?>" class="img-responsive">
        </div>
    </div>
    <div class="col-md-6" style="background-color: #8E1533; padding: 40px; border-radius: 30px;">
        <label style="color: #fff;">VISI</label>
        <p style="color: #fff;">
        <?= $key['visi']; ?>
        </p>
        <label style="color: #fff;">Misi</label>
        <p style="color: #fff;">
        <?= $key['misi1']; ?>
        </p>
        <p style="color: #fff;">
        <?= $key['misi2']; ?>
        </p>
        <p style="color: #fff;">
        <?= $key['misi3']; ?>
        </p>
        <p style="color: #fff;">
        <?= $key['misi4']; ?>
        </p>
        <p style="color: #fff;">
        <?= $key['misi5']; ?>
        </p>
        <p style="color: #fff;">
        <?= $key['misi6']; ?>
        </p>
        <p style="color: #fff;">
        <?= $key['misi7']; ?>
        </p>
        <p style="color: #fff;">
        <?= $key['misi8']; ?>
        </p>
    </div>
</div>
<?php } ?>

<div class="line"></div>
<h1 style="text-align:center; color: #8E1533;">Calon Ketua Umum</h1>
<?php foreach ($hima as $key) { ?>
<div class="row" style="margin-bottom: 10px;">
    <div class="col-md-6">
        <div class="sasa">
        <h2><?= $key['nama']; ?></h2>
        <img src="/img/<?= $key['foto']; ?>" class="img-responsive">
        </div>
    </div>
    <div class="col-md-6" style="background-color: #8E1533; padding: 40px; border-radius: 30px;">
        <label style="color: #fff;">VISI</label>
        <p style="color: #fff;">
        <?= $key['visi']; ?>
        </p>
        <label style="color: #fff;">Misi</label>
        <p style="color: #fff;">
        <?= $key['misi1']; ?>
        </p>
        <p style="color: #fff;">
        <?= $key['misi2']; ?>
        </p>
        <p style="color: #fff;">
        <?= $key['misi3']; ?>
        </p>
        <p style="color: #fff;">
        <?= $key['misi4']; ?>
        </p>
        <p style="color: #fff;">
        <?= $key['misi5']; ?>
        </p>
        <p style="color: #fff;">
        <?= $key['misi6']; ?>
        </p>
        <p style="color: #fff;">
        <?= $key['misi7']; ?>
        </p>
        <p style="color: #fff;">
        <?= $key['misi8']; ?>
        </p>
    </div>
</div>
<?php } ?>

 
 
</div>
</div>
<?= $this->endSection(); ?>