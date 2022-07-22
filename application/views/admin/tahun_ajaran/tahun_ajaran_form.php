<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Tahun Ajaran <small>School Academic Year</small></h2>
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
                                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?=site_url('tahun_ajaran/process')?>" method="post">
                                            <span class="section">Tambah Data Tahun Ajaran</span>
                                            </ul>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Tahun Ajaran</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="hidden" name="id" value="<?= $row->id_tahun_ajaran ?>">
                                                    <input type="text" class="form-control"  name="tahun_ajaran" value="<?=$row->tahun_ajaran?>" placeholder="ex: 2021/2022" required />
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align"> Semester*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <select name="semester" class="form-control" required>
                                                        <option value="">- Pilih -</option>
                                                        <option value="Ganjil" <?= $row->semester == 'Ganjil' ? 'selected' : '' ?>>Ganjil</option>
                                                        <option value="Genap" <?= $row->semester == 'Genap' ? 'selected' : '' ?>>Genap</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="form-group row">
                                                <div class="col-md-9 col-sm-9  offset-md-3">
                                                    <a href="<?= site_url('Tahun_Ajaran') ?>" class="btn btn-warning"><i class="fa fa-undo"></i> Cancel</a>
                                                    <button class="btn btn-secondary" type="reset"><i class="fa fa-ban"></i> Reset</button>
                                                    <button type="submit" class="btn btn-primary" name="<?=$page?>"><i class="fa fa-paper-plane"></i> Submit</button>
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
