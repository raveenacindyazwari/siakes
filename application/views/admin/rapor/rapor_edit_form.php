<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Edit Data Rapor <small>Lesson Schedule</small></h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <?php $this->view('messages') ?>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="x_panel">
                                    <div class="x_content">
                                        <form class="form-horizontal form-label-left" action="<?= site_url('Rapor/process') ?>" method="post">
                                            <div class="row">
                                                <input type="hidden" name="id_rapor" value="<?= $row->id_rapor ?>">

                                                <div class="col-md-6 col-sm-12 form-group">
                                                    <label><strong>Nama Siswa</strong></label>
                                                    <input type="text" name="nama_siswa" class="form-control" value="<?= $row->namaSiswa ?>" disabled>
                                                </div>

                                                <div class="col-md-6 col-sm-12 form-group">
                                                    <label><strong>Nilai Pengetahuan</strong></label>
                                                    <input type="number" min="0" max="100" name="nilai_pengetahuan" class="form-control" value="<?= $row->nilai_pengetahuan ?>">
                                                </div>

                                                <div class="col-md-6 col-sm-12 form-group">
                                                    <label><strong>Nilai Keterampilan</strong></label>
                                                    <input type="number" min="0" max="100" name="nilai_keterampilan" class="form-control" value="<?= $row->nilai_keterampilan ?>">
                                                </div>

                                                <!-- <div class="col-md-6 col-sm-12 form-group">
                                                    <label><strong>Nilai Akhir</strong></label>
                                                    <input type="number" name="nilai_akhir" class="form-control" value="<?= $row->nilai_akhir ?>">
                                                </div>

                                                <div class="col-md-6 col-sm-12 form-group">
                                                    <label><strong>Nilai Predikat</strong></label>
                                                    <input type="text" name="nilai_predikat" class="form-control" value="<?= $row->nilai_predikat ?>"> -->
                                            </div>
                                    </div>
                                    </br>
                                    <div class="ln_solid"></div>
                                    <div class="form-group row">
                                        <div class="col-md-9 col-sm-9">
                                            <div class="pull-left">
                                                <a href="<?= site_url('Rapor') ?>" class="btn btn-warning"><i class="fa fa-undo"></i> Cancel</a>
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