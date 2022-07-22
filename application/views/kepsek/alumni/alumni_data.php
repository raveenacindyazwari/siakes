<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Alumni <small>Alumni</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                        <?php if ($this->fungsi->user_login()->level == 'Admin') { ?>
                            <div class="pull-right">
                                <a href="<?= site_url('Alumni/add') ?>" class="btn btn-primary btn-flat">
                                    <i class="fa fa-plus"></i> Tambah
                                </a>
                            </div>
                        <?php } ?>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                    <?php $this->view('messages') ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%" id="table1">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NISN</th>
                                                <th>Nama Lengkap</th>
                                                <th style="text-align: center;">Tahun Lulus</th>
                                                <th>Program Keahlian</th>
                                                <th>keterangan</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                                $no = 1;
                                                foreach ($row->result() as $key => $data) {
                                                ?>
                                                 <tr>
                                                    <td><?= $no++ ?>.</td>
                                                    <td><?= $data->nisn ?></td>
                                                    <td><?= $data->nama_alumni ?></td>
                                                    <td style="text-align: center;"><?= $data->tahun_lulus ?></td>
                                                    <td><?= $data->program_keahlian == null ? "Tidak Ada" : $data->program_keahlian; ?></td>
                                                    <td><?= $data->keterangan ?></td>
                                                    <td class="text-center" width="160px">
                                                       
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