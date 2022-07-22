<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Guru <small>Teachers - Detail</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="" class="table table-striped table-bordered" style="width:100%" id="table1">
                                        <tbody>
                                            <tr>
                                                <th class="col-sm-4">NIP</th>
                                                <th class="col-sm-8"><?= $row->nip ?></th>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-4">Username</th>
                                                <td class="col-sm-8"><?= $row->username ?></td>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-4">Nama Lengkap</th>
                                                <td class="col-sm-8"><?= $row->nama_guru ?></td>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-4">Tempat, Tanggal Lahir</th>
                                                <td class="col-sm-8"><?= $row->tempat_lahir ?> / <?= $row->tanggal_lahir ?></td>
                                            </tr>
                                            <!-- <tr>
                                                <th class="col-sm-4">Tanggal Lahir</th>
                                                <td class="col-sm-8"><?= $row->tanggal_lahir ?></td>
                                            </tr> -->
                                            <tr>
                                                <th class="col-sm-4">Jenis Kelamin</th>
                                                <td class="col-sm-8"><?= $row->jenis_kelamin ?></td>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-4">Alamat</th>
                                                <td class="col-sm-8"><?= $row->alamat ?></td>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-4">Agama</th>
                                                <td class="col-sm-8"><?= $row->agama ?></td>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-4">Pendidikan Terakhir</th>
                                                <td class="col-sm-8"><?= $row->pendidikan_terakhir ?></td>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-4">Bidang Studi</th>
                                                <td class="col-sm-8"><?= $row->bidang_studi ?></td>
                                            </tr>
                                            <tr>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a href="<?= site_url('Guru') ?>" class="btn btn-warning"><i class="fa fa-undo"></i> Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>