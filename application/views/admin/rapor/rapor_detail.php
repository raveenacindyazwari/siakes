<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>
        <?php if ($this->fungsi->user_login()->level == 'Guru') { ?>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Data Rapor <small>Lesson Schedule</small></h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <?php $this->view('messages') ?>
                            <div class="clearfix"></div>
                            <h6>
                                <strong>Mata Pelajaran :</strong> <?= $tampil->row()->nama_pelajaran ?>
                            </h6>
                            <h6><strong>Program Keahlian :</strong> <?= $tampil->row()->program_keahlian ?></h6>
                            <h6><strong>Guru :</strong> <?= $tampil->row()->nama_guru ?></h6>
                            <h6><strong>Kelas :</strong> <?= $tampil->row()->kelas ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Rapor <small>Lesson Schedule</small></h2>

                        <?php if ($tampil->row()->idWali === $this->fungsi->user_login()->id_guru) { ?>
                            <ul class="nav navbar-right panel_toolbox">
                                <div class="pull-right">
                                    <a href="<?= site_url('Rapor/add/') ?><?= $tampil->row()->id_jadwal ?>/<?= $tampil->row()->id_kelas ?>" class="btn btn-primary btn-flat">
                                        <i class="fa fa-plus"></i> Tambah
                                    </a>
                                </div>
                            </ul>
                        <?php } ?>


                        <div class="clearfix"></div>
                    </div>



                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table class="table table-striped table-bordered" id="table1">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">No</th>
                                                <th style="text-align: center;">Nama Siswa</th>
                                                <th style="text-align: center;">Pengetahuan</th>
                                                <th style="text-align: center;">Keterampilan</th>
                                                <th style="text-align: center;">Nilai Akhir</th>
                                                <th style="text-align: center;">Predikat</th>

                                                <?php if ($this->fungsi->user_login()->level == 'Guru') { ?>
                                                    <th style="text-align: center;">Aksi</th>
                                                <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($rapor as $key => $data) {
                                                $nilai_akhir = ($data->nilai_pengetahuan + $data->nilai_keterampilan) / 2;

                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?>.</td>
                                                    <td><?= $data->namaSiswa == null ? "" : $data->namaSiswa; ?></td>
                                                    <td><?= $data->nilai_pengetahuan == null ? "" : $data->nilai_pengetahuan; ?></td>
                                                    <td><?= $data->nilai_keterampilan == null ? "" : $data->nilai_keterampilan; ?></td>

                                                    <td><?= $nilai_akhir == null ? "0" : $nilai_akhir; ?></td>
                                                    </td>
                                                    <td>
                                                        <?php if ($nilai_akhir >= 92 && $nilai_akhir <= 100) {
                                                            echo "A";
                                                        } else if ($nilai_akhir >= 88 && $nilai_akhir < 92) {
                                                            echo "B";
                                                        } else if ($nilai_akhir >= 80 && $nilai_akhir < 88) {
                                                            echo "C";
                                                        } else {
                                                            echo "D";
                                                        }
                                                        ?>

                                                    </td>
                                                    <?php if ($this->fungsi->user_login()->level == 'Guru') { ?>
                                                        <td>
                                                            </a> <a href="<?= site_url('Rapor/edit/' . $data->id_rapor) ?>" class="btn btn-success btn-sm">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <a href="<?= site_url('Rapor/del/' . $data->id_rapor) ?>" onclick="return confirm('Apakah Anda yakin?')" class="btn btn-danger btn-sm">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </td>
                                                    <?php } ?>
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