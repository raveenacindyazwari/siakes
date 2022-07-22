<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Siswa <small>Students - Detail</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="" class="table table-striped table-bordered" style="width:100%" id="table1">
                                        <tbody>
                                            <tr>
                                                <th class="col-sm-4">NISN</th>
                                                <th class="col-sm-8"><?= $row->nisn ?></th>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-4">Username</th>
                                                <td class="col-sm-8"><?= $row->username ?></td>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-4">Nama Lengkap</th>
                                                <td class="col-sm-8"><?= $row->nama_siswa ?></td>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-4">NIK</th>
                                                <td class="col-sm-8"><?= $row->nik ?></td>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-4">Asal Sekolah</th>
                                                <td class="col-sm-8"><?= $row->asal_sekolah ?></td>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-4">Tahun Masuk</th>
                                                <td class="col-sm-8"><?= $row->tahun_masuk ?></td>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-4">Kelas</th>
                                                <td class="col-sm-8"><?= $row->kelas ?></td>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-4">Bidang Keahlian</th>
                                                <td class="col-sm-8"><?= $row->program_keahlian == null ? "Tidak Ada" : $row->program_keahlian; ?></td>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-4">Tempat Tanggal Lahir</th>
                                                <td class="col-sm-8"><?= $row->tempat_lahir ?> / <?= $row->tanggal_lahir ?></td>
                                            </tr>
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
                                                <th class="col-sm-4">Nama Ayah</th>
                                                <td class="col-sm-8"><?= $row->nama_ayah ?></td>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-4">Pendidikan Terakhir Ayah</th>
                                                <td class="col-sm-8"><?= $row->pend_terakhir_ayah ?></td>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-4">Pekerjaan Ayah</th>
                                                <td class="col-sm-8"><?= $row->pekerjaan_ayah ?></td>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-4">Nama Ibu</th>
                                                <td class="col-sm-8"><?= $row->nama_ibu ?></td>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-4">Pendidikan Terakhir Ibu</th>
                                                <td class="col-sm-8"><?= $row->pend_terakhir_ibu ?></td>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-4">Pekerjaan Ibu</th>
                                                <td class="col-sm-8"><?= $row->pekerjaan_ibu ?></td>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-4">Alamat Orangtua</th>
                                                <td class="col-sm-8"><?= $row->alamat_orgtua ?></td>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-4">Nama Wali</th>
                                                <td class="col-sm-8"><?= $row->nama_wali ?></td>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-4">Pekerjaan Wali</th>
                                                <td class="col-sm-8"><?= $row->pekerjaan_wali ?></td>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-4">Alamat Wali</th>
                                                <td class="col-sm-8"><?= $row->alamat_wali ?></td>
                                            </tr>
                                            <tr>
                                                <th class="col-sm-4">No Telpon Orangtua Wali</th>
                                                <td class="col-sm-8"><?= $row->no_telp_orgtua ?></td>
                                            </tr>
                                            <tr>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a href="<?= site_url('Siswa') ?>" class="btn btn-warning"><i class="fa fa-undo"></i> Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>