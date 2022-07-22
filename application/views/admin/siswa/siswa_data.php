<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Siswa</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <form class="form-horizontal form-label-left" action="" method="GET">
                                <?php if ($this->fungsi->user_login()->level == 'Admin') { ?>
                                    <div class="input-group">
                                        <select name="pilih_bidang" class="custom-select">
                                            <option value="">Pilih Bidang</option>
                                            <?php foreach ($bidang_keahlian as $key => $data) { ?>
                                                <option value="<?= $data->id_bidang ?>"><?= $data->program_keahlian ?></option>
                                            <?php } ?>
                                        </select>
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-outline-secondary bg-primary text-white"> Pilih</button>
                                        </div>
                                    </div>
                                <?php } ?>
                            </form>

                            <?php if ($this->fungsi->user_login()->level == 'Admin') { ?>
                                <div class="pull-right">
                                    <a href="<?= site_url('Siswa/add') ?>" class="btn btn-primary btn-flat">
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
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Bidang Keahlian</th>
                                                <th style="text-align: center;">Angkatan</th>
                                                <th>Tanggal Lahir</th>
                                                <th style="text-align: center;">Aksi</th>
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
                                                    <td><?= $data->nama_siswa ?></td>
                                                    <td><?= $data->kelas ?></td>
                                                    <td><?= $data->program_keahlian == null ? "Tidak Ada" : $data->program_keahlian; ?></td>
                                                    <td style="text-align: center;"><?= $data->tahun_masuk ?></td>

                                                    <td><?= $data->tanggal_lahir ?></td>
                                                    <td class="text-center" width="160px">
                                                        <!-- <button type="button" class="btn btn-secondary btn-sm">Medium Button</button> -->

                                                        </a> <a href="<?= site_url('Siswa/detail/' . $data->id_siswa) ?>" class="btn btn-info btn-sm">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <?php if ($this->fungsi->user_login()->level == 'Admin') { ?>
                                                            </a> <a href="<?= site_url('Siswa/edit/' . $data->id_siswa) ?>" class="btn btn-success btn-sm">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <a href="<?= site_url('Siswa/del/' . $data->id_siswa) ?>" onclick="return confirm('Apakah Anda yakin?')" class="btn btn-danger btn-sm">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        <?php } ?>
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