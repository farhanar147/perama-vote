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
                <ul class="list-unstyled li">
                    <li>
                        Hi, <?= session()->get('nama'); ?>
                    </li>
                     <li>
                        Selamat datang di E - Voting BPPU 2021
                    </li>
                </ul>
                </div>
                </div>
                </nav>

                <div class="line"></div>

                <h2>Yuk simak cara memilihnya!</h2>

                <div class="line"></div>
                
                <h4>Calon Presiden Mahasiswa <strong>BEM</strong></h4>
                <ul>
                	<li>Klik sidebar di sebelah kiri halaman</li>
                	<li>Klik Calon Presiden Mahasiswa untuk melihat daftar calon</li>
                	<li>Pilih Calon yang diingingkan</li>
                	<li>Klik <strong>Vote</strong></li>
                </ul>

                <div class="line"></div>

                <h4>Calon Ketua Umum <strong>HIMA</strong></h4>
                <ul>
                	<li>Klik sidebar di sebelah kiri halaman</li>
                	<li>Klik Calon Ketua Umum untuk melihat daftar calon</li>
                	<li>Pilih Calon yang diingingkan</li>
                	<li>Klik <strong>Vote</strong></li>
                </ul>
            </div>
        </div>
<?= $this->endSection(); ?>