<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Mata Pelajaran <small>Subjects</small></h2>
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
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?= site_url('Mata_Pelajaran/process') ?>" method="post">
                                            <span class="section"><?= $show ?> Data Mata Pelajaran</span>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Kode Mata Pelajaran</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="hidden" name="id" value="<?= $row->id_mata_pelajaran ?>">
                                                    <input type="text" class="form-control" name="kode_matpel" value="<?= $row->kode_matpel ?>" required />
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Mata Pelajaran</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="hidden" name="id" value="<?= $row->id_mata_pelajaran ?>">
                                                    <input type="text" class="form-control" name="nama_pelajaran" value="<?= $row->nama_pelajaran ?>" required />
                                                </div>
                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="form-group row">
                                                <div class="col-md-9 col-sm-9  offset-md-3">
                                                    <a href="<?= site_url('Mata_Pelajaran') ?>" class="btn btn-warning"><i class="fa fa-undo"></i> Cancel</a>
                                                    <button class="btn btn-secondary" type="reset"><i class="fa fa-ban"></i> Reset</button>
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