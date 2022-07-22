<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Kelas <small>Classes</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="x_panel">
                                    <div class="x_content">
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?= site_url('Kelas/process') ?>" method="post">
                                            <span class="section"><?= $show ?> Data Kelas</span>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Kelas</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="hidden" name="id" value="<?= $row->id_kelas ?>">
                                                    <input type="text" class="form-control" name="kelas" value="<?= $row->kelas ?>" required />
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Program keahlian*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <select name="keahlian" class="form-control" required>
                                                        <option value="">- Pilih -</option>
                                                        <?php foreach ($bidang->result() as $key => $data) { ?>
                                                            <option value="<?= $data->id_bidang ?>" <?= $data->id_bidang == $row->id_bidang ? "selected" : null ?>><?= $data->program_keahlian ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Tahun ajaran*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <select name="tahun_ajaran" class="form-control" required>
                                                        <option value="">- Pilih -</option>
                                                        <?php foreach ($tahun_ajaran->result() as $key => $data) { ?>
                                                            <option value="<?= $data->id_tahun_ajaran ?>" <?= $data->id_tahun_ajaran == $row->id_tahun_ajaran ? "selected" : null ?>><?= $data->tahun_ajaran ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Wali Kelas*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <select name="wali_kelas" class="form-control" required>
                                                        <option value="">- Pilih -</option>
                                                        <?php foreach ($guru->result() as $key => $data) { ?>
                                                            <option value="<?= $data->id_guru ?>" <?= $data->id_guru == $row->id_guru ? "selected" : null ?>><?= $data->nama_guru ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="form-group row">
                                                <div class="col-md-9 col-sm-9  offset-md-3">
                                                    <a href="<?= site_url('Kelas') ?>" class="btn btn-warning"><i class="fa fa-undo"></i> Cancel</a>
                                                    <button class="btn btn-secondary" type="reset"><span class="docs-tooltip" data-toggle="tooltip" title="reset data"><i class="fa fa-ban"></i> Reset</button>
                                                    <button type="submit" class="btn btn-primary" name="<?= $page ?>"><i class="fa fa-paper-plane"></i> Submit</button>
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