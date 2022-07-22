<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Pengguna <small>Users</small></h2>
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
                                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="" method="post">
                                            <span class="section">Edit Data User</span>
                                            </ul>
                                            <div class="item form-group <?= form_error('nama') ? 'has-error' : null ?>">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Lengkap*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="hidden" name="id_user" value="<?= $row->id_user ?>">
                                                    <input type="text" name="nama" value="<?= $this->input->post('nama') ?? $row->nama ?>" class=" form-control">
                                                    <?= form_error('nama') ?>
                                                </div>
                                            </div>
                                            <div class="item form-group <?= form_error('username') ? 'has-error' : null ?>">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align"> Username*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="text" name="username" value="<?= $this->input->post('username') ?? $row->username ?>" class=" form-control">
                                                    <?= form_error('username') ?>
                                                </div>
                                            </div>
                                            <div class="item form-group <?= form_error('password') ? 'has-error' : null ?>">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align"> Password <br><small>(Password biarkan kosong jika tidak diganti)</small></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="password" name="password" value="<?= $this->input->post('password') ?>" class=" form-control" placeholder="">
                                                    <?= form_error('password') ?>
                                                </div>
                                            </div>
                                            <div class="item form-group <?= form_error('passconf') ? 'has-error' : null ?>">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align"> Konfirmasi Password</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="password" name="passconf" value="<?= $this->input->post('passconf') ?>" class=" form-control">
                                                    <?= form_error('passconf') ?>
                                                </div>
                                            </div>
                                            <div class="item form-group <?= form_error('level') ? 'has-error' : null ?>">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Level *</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <select name="level" class=" form-control">
                                                        <?php $level = $this->input->post('level') ? $this->input->post('level') : $row->level ?>
                                                        <option value="Admin">Admin</option>
                                                        <option value="Guru" <?= $level == 'Guru' ? 'selected' : null ?>>Guru</option>
                                                        <option value="Kepala Sekolah" <?= $level == 'Kepala Sekolah' ? "selected" : null ?>>Kepala Sekolah</option>
                                                        <option value="Bendahara" <?= $level == 'Bendahara' ? "selected" : null ?>>Bendahara</option>
                                                        <!-- <option value="Siswa" <?= $level == 'Siswa' ? "selected" : null ?>>Siswa</option> -->
                                                    </select>
                                                    <?= form_error('level') ?>
                                                </div>
                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="form-group row">
                                                <div class="col-md-9 col-sm-9  offset-md-3">
                                                    <a href="<?= site_url('User') ?>" class="btn btn-warning"><i class="fa fa-undo"></i> Cancel</a>
                                                    <button class="btn btn-secondary" type="reset"><i class="fa fa-ban"></i> Reset</button>
                                                    <button type="submit" class="btn btn-primary"> <i class="fa fa-paper-plane"></i> Submit</button>
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