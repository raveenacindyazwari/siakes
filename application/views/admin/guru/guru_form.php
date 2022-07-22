<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Guru <small>Teachers</small></h2>
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
                                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?= site_url('guru/process') ?>" method="post">
                                            <span class="section"><?= $show ?> Data Guru</span>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">NIP</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="hidden" name="id" value="<?= $row->id_guru ?>">
                                                    <input type="number" class="form-control" name="nip" value="<?= $row->nip ?>" required />
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Username*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" name="username" type="text" value="<?= $row->username ?>" <?= $page == 'add' ? 'required' : 'disabled' ?> />
                                                </div>
                                            </div>

                                            <?php if ($page == 'add') : ?>
                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Password*</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input class="form-control" name="password" type="password" required />
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Lengkap*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" name="nama_guru" type="text" value="<?= $row->nama_guru ?>" required />
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Tempat Lahir*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" name="tempat_lahir" type="text" value="<?= $row->tempat_lahir ?>" required />
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" name="tanggal_lahir" type="date" value="<?= $row->tanggal_lahir ?>" required />
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <select name="jenis_kelamin" class="form-control" required>
                                                        <option value="">- Pilih -</option>
                                                        <option value="Laki-laki" <?= $row->jenis_kelamin == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                                                        <option value="Perempuan" <?= $row->jenis_kelamin == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" name="alamat" type="text" value="<?= $row->alamat ?>" required />
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Agama*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <select name="agama" class="form-control" required>
                                                        <option value="">- Pilih -</option>
                                                        <option value="Islam" <?= $row->agama == 'Islam' ? 'selected' : '' ?>>Islam</option>
                                                        <option value="Kristen Katolik" <?= $row->agama == 'Kristen Katolik' ? 'selected' : '' ?>>Kristen Katolik</option>
                                                        <option value="Kristen Protestan" <?= $row->agama == 'Kristen Protestan' ? 'selected' : '' ?>>Kristen Protestan</option>
                                                        <option value="Budha" <?= $row->agama == 'Budha' ? 'selected' : '' ?>>Budha</option>
                                                        <option value="Hindu" <?= $row->agama == 'Hindu' ? 'selected' : '' ?>>Hindu</option>
                                                        <option value="Khonghucu" <?= $row->agama == 'Khonghucu' ? 'selected' : '' ?>>Khonghucu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Pendidikan Terakhir*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <select name="pendidikan_terakhir" class="form-control" required>
                                                        <option value="">- Pilih -</option>
                                                        <option value="SMA/SMK" <?= $row->pendidikan_terakhir == 'SMA/SMK' ? 'selected' : '' ?>>SMA/SMK</option>
                                                        <option value="S1" <?= $row->pendidikan_terakhir == 'S1' ? 'selected' : '' ?>>S1</option>
                                                        <option value="S2" <?= $row->pendidikan_terakhir == 'S2' ? 'selected' : '' ?>>S2</option>
                                                        <option value="S3" <?= $row->pendidikan_terakhir == 'S3' ? 'selected' : '' ?>>S3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Bidang Studi*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" name="bidang_studi" type="text" value="<?= $row->bidang_studi ?>" required />
                                                </div>
                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="form-group row">
                                                <div class="col-md-9 col-sm-9  offset-md-3">
                                                    <a href="<?= site_url('Guru') ?>" class="btn btn-warning"><i class="fa fa-undo"></i> Cancel</a>
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