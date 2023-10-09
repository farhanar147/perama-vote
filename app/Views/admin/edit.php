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
                        Hi, <?= session()->get('nama'); ?>
                    </li>
                     <li>
                        Selamat datang di Dashboard Admin
                    </li>
                </ul>
                </div>
                </div>
                </nav>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h2>Form edit data</h2>
                            <form class="form-horizontal" method="post" action="/admin/update/<?= $pemilih['id_pemilih']; ?>">
                            <?= csrf_field(); ?>
                                <div class="form-group">
                                    <label for="nama" class="col-sm-2 control-label">Nama</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $pemilih['nama']; ?>">
                                    <?php if ($validation->hasError('nama')) { ?>
                                      <p style="color :#b5334f;"><?= $validation->getError('nama'); ?></p>
                                    <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nim" class="col-sm-2 control-label">NIM</label>
                                    <div class="col-sm-10">
                                    <input type="number" class="form-control" id="nim" name="nim" value="<?= $pemilih['nim']; ?>">
                                    <?php if ($validation->hasError('nim')) { ?>
                                      <p style="color :#b5334f;"><?= $validation->getError('nim'); ?></p>
                                    <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $pemilih['tanggal_lahir']; ?>">
                                    <?php if ($validation->hasError('tanggal_lahir')) { ?>
                                      <p style="color :#b5334f;"><?= $validation->getError('tanggal_lahir'); ?></p>
                                    <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="hima" class="col-sm-2 control-label">HIMA</label>
                                    <div class="col-sm-10">
                                    <select class="form-control" name ="hima" value="<?= $pemilih['hima']; ?>">
                                        <option <?php if( $pemilih['hima']=='himakom'){echo "selected"; } ?> value="himakom">HIMAKOM</option>
                                        <option <?php if( $pemilih['hima']=='hikom'){echo "selected"; } ?> value="hikom">HIKOM</option>
                                        <option <?php if( $pemilih['hima']=='himen'){echo "selected"; } ?> value="himen">HIMEN</option>
                                        <option <?php if( $pemilih['hima']=='himak'){echo "selected"; } ?> value="himak">HIMAK</option>
                                        <option <?php if( $pemilih['hima']=='elsa'){echo "selected"; } ?> value="elsa">ELSA</option>
                                    </select>
                                    <?php if ($validation->hasError('hima')) { ?>
                                      <p style="color :#b5334f;"><?= $validation->getError('hima'); ?></p>
                                    <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="status" class="col-sm-2 control-label">Status</label>
                                    <div class="col-sm-10">
                                    <select class="form-control" name ="status" value="<?= $pemilih['status']; ?>">
                                        <option value="active">Active</option>
                                        <option value="non-active">Non-Active</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-info">Edit</button>
                                    </div>
                                </div>
                                </form>
                        </div>   
                    </div>
                </div>
               
                
            </div>
        </div>
<?= $this->endSection(); ?>