<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Alumni <small>Alumnuses</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <?php $this->view('messages') ?>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="x_panel">
                                    <div class="x_content">
                                        <form autocomplete="off" action="<?= site_url('alumni/process') ?>" method="post">
                                            <span class="section"><?= $show ?> Data Alumni</span>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">NISN*</label>
                                                <div class="col-md-6 col-sm-6">
                                                <input type="hidden" name="id" value="<?= $row->id_alumni ?>">
                                                    <input list="data_siswa" class="form-control" type="text" name="nisn" id="nisn" value="<?=$row->nisn?>" placeholder="nisn / nama" onchange="return autofill();">
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Siswa*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="text" name="nama_siswa" id="nama_siswa" value="<?=$row->nama_alumni?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Bidang Keahlian*</label>
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
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Tahun Lulus*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" value="<?=$row->tahun_lulus?>" name="tahun_lulus" id="tahun_lulus" type="text" required />
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">keterangan*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" value="<?=$row->keterangan?>" name="keterangan" id="keterangan" type="text" required />
                                                </div>
                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="form-group row">
                                                <div class="col-md-9 col-sm-9  offset-md-3">
                                                    <a href="<?= site_url('Alumni') ?>" class="btn btn-warning"><i class="fa fa-undo"></i> Cancel</a>
                                                    <button class="btn btn-secondary" type="reset"><i class="fa fa-ban"></i> Reset</button>
                                                    <button type="submit" class="btn btn-primary" name="edit"><i class="fa fa-paper-plane"></i> Submit</button>
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
