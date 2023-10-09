<?= $this->extend('layout_pemilih/template'); ?>

<?= $this->section('content'); ?>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" style="background-color: #8e1533;">
                <div class="sidebar-header" style="background-color: #721129;">
                    <div class="tipe">
                    	<img src="/img/user.png">
                    	<p><?= session()->get('nama'); ?></p>
                    	<p><?= session()->get('jabatan'); ?></p>
                    </div>
                </div>

                <ul class="list-unstyled kiri" style="background-color: #8e1533;" >
                    <li>
                        <a href="/admin">Dashboard</a>
                    </li>
                    <li>
                        <a href="/admin/pemilih">Pemilih</a>
                    </li>
                    <li>
                    <a href="#presma" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Presma</a>
                    <ul class="collapse list-unstyled" id="presma">
                        <li>
                            <a href="/admin/presma">Calon Presma</a>
                        </li>
                        <li>
                            <a href="/admin/misi_presma">Misi</a>
                        </li>
                        <li>
                            <a href="/admin/program_presma">Program</a>
                        </li>
                    </ul>
                    </li>
                    <li>
                    <a href="#ketum" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Ketum</a>
                    <ul class="collapse list-unstyled" id="ketum">
                        <li>
                            <a href="/admin/ketum">Calon Ketum</a>
                        </li>
                        <li>
                            <a href="/admin/misi_ketum">Misi</a>
                        </li>
                        <li>
                            <a href="/admin/program_ketum">Program</a>
                        </li>
                    </ul>
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
                        Pemilih
                    </li>
                </ul>
                </div>
                </div>
                </nav>
            <div class="col-md-12">
                <h2>Pemilih </h2>   
                <?php  if (session()->getFlashdata('pesan')) {  ?>
                      <div class="alert alert-success" role="alert"><?= session()->getFlashdata('pesan'); ?></div>
                 <?php } ;?>
                <a href="/admin/create" class="btn btn-info">Tambah Data</a> 
                <br>
                <br>     
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Tanggal Lahir</th>
                        <th>HIMA</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <?php foreach ($pemilih as $key) { ?>
                    <tbody>
                    <tr>
                        <td>#</td>
                        <td><?= $key['nama']; ?></td>
                        <td><?= $key['nim']; ?></td>
                        <td><?= $key['tanggal_lahir']; ?></td>
                        <td><?= $key['hima']; ?></td>
                        <td><?= $key['status']; ?></td>
                        <td>
                            <a href="/admin/delete/<?= $key['id_pemilih']; ?>" onclick="return confirm('apakah anda yakin?');" class="btn btn-danger mx-2" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                            <a href="/admin/edit/<?= $key['id_pemilih']; ?>" class="btn btn-warning" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                        </td>
                    </tr>
                    </tbody>
                    <?php }  ?>
                </table>
            </div>
                
            </div>
        </div>
<?= $this->endSection(); ?>