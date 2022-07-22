<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Mata Pelajaran <small>Subjects</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <div class="pull-right">
                                <a href="<?= site_url('Mata_Pelajaran/add') ?>" class="btn btn-primary btn-flat">
                                    <i class="fa fa-plus"></i> Tambah
                                </a>
                            </div>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                    <?php $this->view('messages') ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table class="table table-striped table-bordered" id="table1">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Mata pelajaran</th>
                                                <th>Nama Mata Pelajaran</th>
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
                                                    <td><?= $data->kode_matpel ?></td>
                                                    <td><?= $data->nama_pelajaran?></td>
                                                    <td class="text-center" width="160px">
                                                        </a> <a href="<?= site_url('Mata_Pelajaran/edit/' . $data->id_mata_pelajaran) ?>" class="btn btn-success btn-sm">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a href="<?= site_url('Mata_Pelajaran/del/' . $data->id_mata_pelajaran) ?>" onclick="return confirm('Apakah Anda yakin?')" class="btn btn-danger btn-sm">
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