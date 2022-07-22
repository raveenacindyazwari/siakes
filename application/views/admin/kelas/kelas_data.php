<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Kelas <small>Classes</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <div class="pull-right">
                                <a href="<?= site_url('Kelas/add') ?>" class="btn btn-primary btn-flat">
                                    <i class="fa fa-plus"></i> Tambah
                                </a>
                            </div>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%" id="table1">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kelas</th>
                                                <th>Program Keahlian</th>
                                                <th>Tahun Ajaran</th>
                                                <th>Wali Kelas</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $no = 1;
                                            foreach ($row->result() as $key => $data) {
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?>.</td>
                                                    <td><?= $data->kelas ?></td>
                                                    <td><?= $data->program_keahlian == null ? "Tidak Ada" : $data->program_keahlian; ?></td>
                                                    <td><?= $data->tahun_ajaran == null ? "Tidak Ada" : $data->tahun_ajaran; ?></td>
                                                    <td><?= $data->nama_guru == null ? "Tidak Ada" : $data->nama_guru; ?></td>

                                                    <td class="text-center" width="160px">
                                                        </a> <a href="<?= site_url('Kelas/detail/'. $data->id_kelas)?>" class="btn btn-info btn-sm">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        </a> <a href="<?= site_url('Kelas/edit/' . $data->id_kelas) ?>" class="btn btn-success btn-sm">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a href="<?= site_url('Kelas/del/' . $data->id_kelas) ?>" onclick="return confirm('Apakah Anda yakin?')" class="btn btn-danger btn-sm">
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