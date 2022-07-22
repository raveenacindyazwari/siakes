<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Bidang Keahlian <small>Expertise Fields</small></h2>
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
                                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?=site_url('bidang_keahlian/process')?>" method="post">
                                            <span class="section">Tambah Data Bidang keahlian</span>
                                            </ul>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Bidang Keahlian</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="hidden" name="id" value="<?= $row->id_bidang ?>">
                                                    <input type="text" class="form-control"  name="bidang_keahlian" value="<?=$row->bidang_keahlian?>" required />
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align"> Program keahlian*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="text" class="form-control" name="program_keahlian" value="<?=$row->program_keahlian?>" required />
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Kompetensi Keahlian*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" name="kompetensi_keahlian" type="text" value="<?=$row->kompetensi_keahlian?>" required/>
                                                </div>
                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="form-group row">
                                                <div class="col-md-9 col-sm-9  offset-md-3">
                                                    <a href="<?= site_url('Bidang_Keahlian') ?>" class="btn btn-warning"><i class="fa fa-undo"></i> Cancel</a>
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
