<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">

                        <h2>Daftar Siswa di Kelas <?= $row->kelas ?><small>Classes</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <div class="pull-right">
                                <a href="<?= site_url('Kelas') ?>" class="btn btn-warning btn-flat">
                                    <i class="fa fa-refresh"></i> Kembali
                                </a>
                            </div>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="" class="table" style="width:100%">
                                        <tbody>
                                            <tr>
                                                <th class="col-sm-3">Kelas</th>
                                                <th class="col-sm-9">: <?= $row->kelas ?></th>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-3">Program Keahlian</th>
                                                <td class="col-sm-9">: <?= $row->program_keahlian ?></td>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-3">Tahun Ajaran</th>
                                                <td class="col-sm-9">: <?= $row->tahun_ajaran ?></td>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-3">Wali Kelas</th>
                                                <td class="col-sm-9">: <?= $row->nama_guru == null ? "Belum Ada" : $row->nama_guru; ?></td>
                                            </tr>
                                            <tr>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">


                                <div class="x_content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card-box table-responsive">
                                                <table class="table table-striped table-bordered" id="table1">
                                                    <thead>
                                                        <tr>
                                                            <th style="text-align: center;">No</th>
                                                            <th style="text-align: center;">Nama</th>
                                                            <th style="text-align: center;">NISN</th>
                                                            <th style="text-align: center;">Program Keahlian</th>
                                                            <th style="text-align: center;">Jenis Kelamin</th>
                                                            <th style="text-align: center;">Alamat</th>
                                                            <th style="text-align: center;">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $no = 1;
                                                        foreach ($siswa->result() as $key => $data) {
                                                        ?>
                                                            <tr>
                                                                <td><?= $no ?>.</td>
                                                                <td><?= $data->nama_siswa ?></td>
                                                                <td><?= $data->nisn ?></td>
                                                                <td><?= $data->program_keahlian ?></td>
                                                                <td><?= $data->jenis_kelamin ?></td>
                                                                <td><?= $data->alamat ?></td>
                                                                <td class="text-center" width="160px">

                                                                    <a href="" onclick="return confirm('Apakah Anda yakin?')" class="btn btn-danger btn-sm">
                                                                        <i class="fa fa-trash"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        <?php
                                                        }
                                                        ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>