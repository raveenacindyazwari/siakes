<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Edit Data Jadwal Pelajaran <small>Lesson Schedule</small></h2>
                       
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
                                                    <input type="hidden" name="id" value="<?= $row->id_jadwal?>">
                                                    <select name="kelas" class="form-control">
                                                        <option value="">- Pilih -</option>
                                                        <?php foreach ($kelas as $key => $data) { ?>
                                                            <option value="<?= $data->id_kelas ?>"<?= $data->id_kelas == $row->id_kelas ? "selected" : null ?>><?= $data->kelas ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 col-sm-12 form-group">
                                                    <label><strong>Guru*</strong></label>
                                                    <select name="guru" class="form-control" id="guru">
                                                        <option value="">- Pilih -</option>
                                                        <?php foreach ($guru as $key => $data) { ?>
                                                            <option value="<?= $data->id_guru ?>"<?= $data->id_guru == $row->id_guru ? "selected" : null ?>><?= $data->nama_guru ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 col-sm-12 form-group">
                                                    <label><strong>Hari*</strong></label>
                                                    <select name="hari" class="form-control">
                                                        <option value="">- Pilih -</option>
                                                        <option value="Senin"<?= $row->hari == 'Senin' ? 'selected' : '' ?>>Senin</option>
                                                        <option value="Selasa"<?= $row->hari == 'Selasa' ? 'selected' : '' ?>>Selasa</option>
                                                        <option value="Rabu"<?= $row->hari == 'Rabu' ? 'selected' : '' ?>>Rabu</option>
                                                        <option value="Kamis"<?= $row->hari == 'Kamis' ? 'selected' : '' ?>>Kamis</option>
                                                        <option value="Jumat"<?= $row->hari == 'Jumat' ? 'selected' : '' ?>>Jumat</option>
                                                        <option value="Sabtu"<?= $row->hari == 'Sabtu' ? 'selected' : '' ?>>Sabtu</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 col-sm-12 form-group">
                                                    <label><strong>Bidang Keahlian*</strong></label>
                                                    <select name="keahlian" class="form-control">
                                                        <option value="">- Pilih -</option>
                                                        <?php foreach ($bidang_keahlian as $key => $data) { ?>
                                                            <option value="<?= $data->id_bidang ?>" <?= $data->id_bidang == $row->id_bidang ? "selected" : null ?>><?= $data->program_keahlian ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 col-sm-12 form-group">
                                                    <label><strong>Mata Pelajaran*</strong></label>
                                                    <select name="mata_pelajaran" class="form-control">
                                                        <option value="">- Pilih -</option>
                                                        <?php foreach ($mata_pelajaran as $key => $data) { ?>
                                                            <option value="<?= $data->id_mata_pelajaran ?>"<?= $data->id_mata_pelajaran == $row->id_mata_pelajaran ? "selected" : null ?>><?= $data->nama_pelajaran ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 col-sm-12 form-group">
                                                    <label><strong>Tahun Ajaran*</strong></label>
                                                    <select name="tahun_ajaran" class="form-control">
                                                        <option value="">- Pilih -</option>
                                                        <?php foreach ($tahun_ajaran as $key => $data) { ?>
                                                            <option value="<?= $data->id_tahun_ajaran ?>"<?= $data->id_tahun_ajaran == $row->id_tahun_ajaran ? "selected" : null ?>><?= $data->tahun_ajaran ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 col-sm-12 form-group">
                                                    <label><strong>Jam Mulai*</strong></label>
                                                    <input type="time" name="jam_mulai" class="form-control" value="<?= $row->jam_mulai ?>">
                                                </div>
                                                <div class="col-md-3 col-sm-12 form-group">
                                                    <label><strong>Jam Selesai*</strong></label>
                                                    <input type="time" name="jam_selesai" class="form-control" value="<?= $row->jam_selesai?>">
                                                </div>
                                                <div class="col-md-6 col-sm-12 form-group">
                                                    <label><strong>Keterangan</strong></label>
                                                    <input type="text" name="keterangan" class="form-control" value="<?= $row->keterangan ?>" placeholder="ex: Istirahat">
                                                </div>
                                            </div>
                                            </br>
                                            <div class="ln_solid"></div>
                                            <div class="form-group row">
                                                <div class="col-md-9 col-sm-9">
                                                    <div class="pull-left">
                                                    <a href="<?= site_url('Jadwal_Pelajaran') ?>" class="btn btn-warning"><i class="fa fa-undo"></i> Cancel</a>
                                                        <button class="btn btn-secondary" type="reset"><i class="fa fa-ban"></i> Reset</button>
                                                        <button type="submit" class="btn btn-primary" name="edit"><i class="fa fa-paper-plane"></i> Submit</button>
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
    </div>
</div>