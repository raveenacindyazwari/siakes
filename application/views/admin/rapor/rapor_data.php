<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>
        <?php if ($this->fungsi->user_login()->level == 'Admin') { ?>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Tambah Data Jadwal Pelajaran <small>Lesson Schedule</small></h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <?php $this->view('messages') ?>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="x_panel">
                                        <div class="x_content">
                                            <form class="form-horizontal form-label-left" action="<?= site_url('Jadwal_Pelajaran/process') ?>" method="post">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12 form-group">
                                                        <label><strong>Kelas*</strong></label>
                                                        <input type="hidden" name="id" value="">
                                                        <select name="kelas" class="form-control">
                                                            <option value="">- Pilih -</option>
                                                            <?php foreach ($kelas as $key => $data) { ?>
                                                                <option value="<?= $data->id_kelas ?>"><?= $data->kelas ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 form-group">
                                                        <label><strong>Guru*</strong></label>
                                                        <select name="guru" class="form-control" id="guru">
                                                            <option value="">- Pilih -</option>
                                                            <?php foreach ($guru as $key => $data) { ?>
                                                                <option value="<?= $data->id_guru ?>"><?= $data->nama_guru ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 form-group">
                                                        <label><strong>Hari*</strong></label>
                                                        <select name="hari" class="form-control">
                                                            <option value="">- Pilih -</option>
                                                            <option value="Senin">Senin</option>
                                                            <option value="Selasa">Selasa</option>
                                                            <option value="Rabu">Rabu</option>
                                                            <option value="Kamis">Kamis</option>
                                                            <option value="Jumat">Jumat</option>
                                                            <option value="Sabtu">Sabtu</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 form-group">
                                                        <label><strong>Bidang Keahlian*</strong></label>
                                                        <select name="keahlian" class="form-control">
                                                            <option value="">- Pilih -</option>
                                                            <?php foreach ($bidang_keahlian as $key => $data) { ?>
                                                                <option value="<?= $data->id_bidang ?>"><?= $data->program_keahlian ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 form-group">
                                                        <label><strong>Mata Pelajaran*</strong></label>
                                                        <select name="mata_pelajaran" class="form-control">
                                                            <option value="">- Pilih -</option>
                                                            <?php foreach ($mata_pelajaran as $key => $data) { ?>
                                                                <option value="<?= $data->id_mata_pelajaran ?>"><?= $data->nama_pelajaran ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 form-group">
                                                        <label><strong>Tahun Ajaran*</strong></label>
                                                        <select name="tahun_ajaran" class="form-control">
                                                            <option value="">- Pilih -</option>
                                                            <?php foreach ($tahun_ajaran as $key => $data) { ?>
                                                                <option value="<?= $data->id_tahun_ajaran ?>"><?= $data->tahun_ajaran ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3 col-sm-12 form-group">
                                                        <label><strong>Jam Mulai*</strong></label>
                                                        <input type="time" name="jam_mulai" class="form-control" placeholder="ex: 09.00">
                                                    </div>
                                                    <div class="col-md-3 col-sm-12 form-group">
                                                        <label><strong>Jam Selesai*</strong></label>
                                                        <input type="time" name="jam_selesai" class="form-control" placeholder="ex: 10.00">
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 form-group">
                                                        <label><strong>Keterangan</strong></label>
                                                        <input type="text" name="keterangan" class="form-control" placeholder="ex: Istirahat">
                                                    </div>
                                                </div>
                                                </br>
                                                <div class="ln_solid"></div>
                                                <div class="form-group row">
                                                    <div class="col-md-9 col-sm-9">
                                                        <div class="pull-left">
                                                            <button class="btn btn-secondary" type="reset"><i class="fa fa-ban"></i> Reset</button>
                                                            <button type="submit" class="btn btn-primary" name="add"><i class="fa fa-paper-plane"></i> Submit</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                        <ul class="nav navbar-right panel_toolbox">
                            <!-- <div class="pull-right">
                                <a href="<?= site_url('Jadwal_Pelajaran/add') ?>" class="btn btn-primary btn-flat">
                                    <i class="fa fa-plus"></i> Tambah
                                </a>
                            </div> -->
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table class="table table-striped table-bordered" id="table1">

                                        <?php if ($this->fungsi->user_login()->level == 'Guru') { ?>
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;">No</th>
                                                    <th style="text-align: center;">Mata pelajaran</th>
                                                    <th style="text-align: center;">Program Keahlian</th>
                                                    <th style="text-align: center;">Guru</th>
                                                    <th style="text-align: center;">Kelas</th>
                                                    <?php if ($this->fungsi->user_login()->level == 'Guru') { ?>
                                                        <th style="text-align: center;">Aksi</th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($tampil->result() as $key => $data) {
                                                ?>
                                                    <tr>
                                                        <td><?= $no++ ?>.</td>
                                                        <td><?= $data->nama_pelajaran == null ? "" : $data->nama_pelajaran; ?></td>
                                                        <td><?= $data->program_keahlian == null ? "" : $data->program_keahlian; ?></td>
                                                        <td><?= $data->nama_guru == null ? "" : $data->nama_guru; ?></td>
                                                        <td class="text-center"><?= $data->kelas == null ? "" : $data->kelas; ?></td>

                                                        <td class="text-center" width="160px">

                                                            </a> <a href="<?= site_url('Rapor/detail/' . $data->id_jadwal) ?>" class="btn btn-success btn-sm">
                                                                <i class="fa fa-eye"></i>
                                                            </a>

                                                        </td>

                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        <?php } else if ($this->fungsi->user_login()->level == 'Siswa') { ?>
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;">No</th>
                                                    <th style="text-align: center;">Mata Pelajaran</th>
                                                    <th style="text-align: center;">Pengetahuan</th>
                                                    <th style="text-align: center;">Keterampilan</th>
                                                    <th style="text-align: center;">Nilai Akhir</th>
                                                    <th style="text-align: center;">Predikat</th>


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
                                                        <td><?= $data->namaPelajaran == null ? "" : $data->namaPelajaran; ?></td>
                                                        <td><?= $data->nilai_pengetahuan == null ? "" : $data->nilai_pengetahuan; ?></td>
                                                        <td><?= $data->nilai_keterampilan == null ? "" : $data->nilai_keterampilan; ?></td>

                                                        <td><?= $nilai_akhir == null ? "0" : $nilai_akhir; ?></td>

                                                        <td><?php if ($nilai_akhir >= 92 && $nilai_akhir <= 100) {
                                                                echo "A";
                                                            } else if ($nilai_akhir >= 88 && $nilai_akhir < 92) {
                                                                echo "B";
                                                            } else if ($nilai_akhir >= 80 && $nilai_akhir < 88) {
                                                                echo "C";
                                                            } else {
                                                                echo "D";
                                                            }
                                                            ?></td>


                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        <?php } ?>
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