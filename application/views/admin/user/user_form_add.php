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
                                            <span class="section">Tambah Data User</span>
                                            </ul>
                                            <div class="item form-group <?= form_error('nama') ? 'has-error' : null ?>">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Lengkap*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="text" name="nama" value="<?= set_value('nama') ?>" class=" form-control" required="required">
                                                    <?= form_error('nama') ?>
                                                </div>
                                            </div>
                                            <div class="item form-group <?= form_error('username') ? 'has-error' : null ?>">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align"> Username*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="text" name="username" value="<?= set_value('username') ?>" class=" form-control">
                                                    <?= form_error('username') ?>
                                                </div>
                                            </div>
                                            <div class="item form-group <?= form_error('password') ? 'has-error' : null ?>">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align"> Password*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="password" name="password" value="<?= set_value('password') ?>" class=" form-control">
                                                    <?= form_error('password') ?>
                                                </div>
                                            </div>
                                            <div class="item form-group <?= form_error('passconf') ? 'has-error' : null ?>">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align"> Konfirmasi Password*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="password" name="passconf" value="<?= set_value('passconf') ?>" class=" form-control">
                                                    <?= form_error('passconf') ?>
                                                </div>
                                            </div>
                                            <div class="item form-group <?= form_error('level') ? 'has-error' : null ?>">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Level *</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <select name="level" class=" form-control">
                                                        <option value="">- Pilih -</option>
                                                        <option value="Admin" <?= set_value('level') == 'Admin' ? "selected" : null ?>>Admin</option>
                                                        <option value="Guru" <?= set_value('level') == 'Guru' ? "selected" : null ?>>Guru</option>
                                                        <option value="Kepala Sekolah" <?= set_value('level') == 'Kepala Sekolah' ? "selected" : null ?>>Kepala Sekolah</option>
                                                        <option value="Bendahara" <?= set_value('level') == 'Bendahara' ? "selected" : null ?>>Bendahara</option>
                                                        <!-- <option value="Siswa" <?= set_value('level') == 'Siswa' ? "selected" : null ?>>Siswa</option> -->
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