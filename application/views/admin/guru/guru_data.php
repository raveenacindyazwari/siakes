<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Guru <small>Teachers</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <div class="pull-right">
                                <a href="<?= site_url('Guru/add') ?>" class="btn btn-primary btn-flat">
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
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th>Bidang Studi</th>
                                                <th>Tanggal Lahir</th>
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
                                                    <td><?= $data->nip ?></td>
                                                    <td><?= $data->nama_guru ?></td>
                                                    <td><?= $data->bidang_studi ?></td>
                                                    <td><?= $data->tanggal_lahir ?></td>
                                                    <td class="text-center" width="160px">
                                                        </a> <a href="<?= site_url('Guru/detail/' . $data->id_guru)?>" class="btn btn-info btn-sm">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        </a> <a href="<?= site_url('Guru/edit/' . $data->id_guru) ?>" class="btn btn-success btn-sm">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a href="<?= site_url('Guru/del/' . $data->id_guru) ?>" onclick="return confirm('Apakah Anda yakin?')" class="btn btn-danger btn-sm">
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