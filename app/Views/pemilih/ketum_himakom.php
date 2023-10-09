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
                    <li style="margin-top: 8px;"><a href="/login/logout" class="download" style="color: #8e1533; ">Logout</a></li>
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
                        Calon Ketua Umum 
                    </li>
                </ul>
                </div>
                </div>
                </nav>

               

                <div class="line"></div>
                <?php if (!empty($validation->getError('nim_pemilih'))) { ?>
                     <div class="alert alert-danger" role="alert"> <?= $validation->getError('nim_pemilih'); ?></div>
                <?php    } ?>
               
                   <?php  if (session()->getFlashdata('pesan')) {  ?>
                       
                       <div class="alert alert-success" role="alert">Selamat Anda sudah memilih , Terimakasih atas partisipasinya.</div>
                       
                       <?php } ;?>
                    
                  
                <div class="row">
                    <?php foreach ($hima as $k) { ?>
                    <div class="col-md-4 col-xs-12">
                        <h3 style="text-align: center;"><?= $k['nama']; ?></h3>
                        <img src="/img/<?= $k['foto']; ?>" class="img-responsive">
                        <form action="/pemilih/vote_himakom" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="nim_pemilih" value="<?= session()->get('nim'); ?>">
                        <input type="hidden" name="nim_ketum" value="<?= $k['nim']; ?>">
                        <input type="hidden" name="nama_ketum" value="<?= $k['nama']; ?>">
                        <input type="hidden" name="hima"  value="<?= session()->get('hima');?>">
                        <button type="submit" onclick="return confirm('Apakah Anda yakin?');"  class="btn btn-success" style="margin-left: 35%; margin-top: 5px;">VOTE</button>
                    </form>
                    </div>
                <?php }; ?>
                </div>
            </div>
        </div>
        <?= $this->endSection(); ?>