<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><?= $show ?> Data Siswa <small>Students</small></h2>
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
                                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?= site_url('siswa/process') ?>" method="post">
                                            <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Data Siswa</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Data Orang Tua/Wali</a>
                                                </li>
                                            </ul>

                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                    <div class="item form-group">
                                                        <label class="col-form-label col-md-3 col-sm-3 label-align">NISN*</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <input type="hidden" name="id" value="<?= $row->id_siswa ?>">
                                                            <input type="text" class="form-control" name="nisn" value="<?= $row->nisn ?>" required />
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="col-form-label col-md-3 col-sm-3 label-align">NIK*</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <input class="form-control" name="nik" type="text" value="<?= $row->nik ?>" required />
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
                                                            <input class="form-control" name="nama_siswa" type="text" value="<?= $row->nama_siswa ?>" required />
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
                                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Kelas*</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <select name="kelas" class="form-control" required>
                                                                <option value="">- Pilih -</option>
                                                                <?php foreach ($kelas->result() as $key => $data) { ?>
                                                                    <option value="<?= $data->id_kelas ?>" <?= $data->id_kelas == $row->id_kelas ? "selected" : null ?>><?= $data->kelas ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Tempat & Tanggal Lahir*</label>
                                                        <div class="col-md-3 col-sm-3">
                                                            <input class="form-control" name="tempat_lahir" type="text" value="<?= $row->tempat_lahir ?>" required />
                                                        </div>
                                                        <div class="col-md-3 col-sm-3">
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
                                                            <textarea class="form-control" name="alamat" type="text" required><?= $row->alamat ?> </textarea>
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
                                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Tahun Masuk*</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <input class="form-control" name="tahun_masuk" type="text" value="<?= $row->tahun_masuk ?>" required />
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Asal Sekolah*</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <input class="form-control" name="asal_sekolah" type="text" value="<?= $row->asal_sekolah ?>" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                    <div class="item form-group">
                                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Ayah*</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <input class="form-control" name="nama_ayah" type="text" value="<?= $row->nama_ayah ?>" required />
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Pendidikan Terakhir Ayah*</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <select name="pend_terakhir_ayah" class="form-control" required>
                                                                <option value="">- Pilih -</option>
                                                                <option value="Tidak Sekolah" <?= $row->pend_terakhir_ayah == 'Tidak Sekolah' ? 'selected' : '' ?>>Tidak Sekolah</option>
                                                                <option value="SD" <?= $row->pend_terakhir_ayah == 'SD' ? 'selected' : '' ?>>SD/Sederajat</option>
                                                                <option value="SMP" <?= $row->pend_terakhir_ayah == 'SMP' ? 'selected' : '' ?>>SMP/Sederajat</option>
                                                                <option value="SMA/SMK" <?= $row->pend_terakhir_ayah == 'SMA/SMK' ? 'selected' : '' ?>>SMA/SMK/Sederajat</option>
                                                                <option value="D1" <?= $row->pend_terakhir_ayah == 'D1' ? 'selected' : '' ?>>D1/Sederajat</option>
                                                                <option value="D2" <?= $row->pend_terakhir_ayah == 'D2' ? 'selected' : '' ?>>D2/Sederajat</option>
                                                                <option value="D3" <?= $row->pend_terakhir_ayah == 'D3' ? 'selected' : '' ?>>D3/Sederajat</option>
                                                                <option value="D4" <?= $row->pend_terakhir_ayah == 'D4' ? 'selected' : '' ?>>D4/Sederajat</option>
                                                                <option value="S1" <?= $row->pend_terakhir_ayah == 'S1' ? 'selected' : '' ?>>S1/Sederajat</option>
                                                                <option value="S2" <?= $row->pend_terakhir_ayah == 'S2' ? 'selected' : '' ?>>S2/Sederajat</option>
                                                                <option value="S3" <?= $row->pend_terakhir_ayah == 'S3' ? 'selected' : '' ?>>S3/Sederajat</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Pekerjaan Ayah*</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <input class="form-control" name="pekerjaan_ayah" type="text" value="<?= $row->pekerjaan_ayah ?>" required />
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Ibu*</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <input class="form-control" name="nama_ibu" type="text" value="<?= $row->nama_ibu ?>" required />
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Pendidikan Terakhir Ibu*</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <select name="pend_terakhir_ibu" class="form-control" required>
                                                                <option value="">- Pilih -</option>
                                                                <option value="Tidak Sekolah" <?= $row->pend_terakhir_ibu == 'Tidak Sekolah' ? 'selected' : '' ?>>Tidak Sekolah</option>
                                                                <option value="SD" <?= $row->pend_terakhir_ibu == 'SD' ? 'selected' : '' ?>>SD/Sederajat</option>
                                                                <option value="SMP" <?= $row->pend_terakhir_ibu == 'SMP' ? 'selected' : '' ?>>SMP/Sederajat</option>
                                                                <option value="SMA/SMK" <?= $row->pend_terakhir_ibu == 'SMA/SMK' ? 'selected' : '' ?>>SMA/SMK/Sederajat</option>
                                                                <option value="D1" <?= $row->pend_terakhir_ibu == 'D1' ? 'selected' : '' ?>>D1/Sederajat</option>
                                                                <option value="D2" <?= $row->pend_terakhir_ibu == 'D2' ? 'selected' : '' ?>>D2/Sederajat</option>
                                                                <option value="D3" <?= $row->pend_terakhir_ibu == 'D3' ? 'selected' : '' ?>>D3/Sederajat</option>
                                                                <option value="D4" <?= $row->pend_terakhir_ibu == 'D4' ? 'selected' : '' ?>>D4/Sederajat</option>
                                                                <option value="S1" <?= $row->pend_terakhir_ibu == 'S1' ? 'selected' : '' ?>>S1/Sederajat</option>
                                                                <option value="S2" <?= $row->pend_terakhir_ibu == 'S2' ? 'selected' : '' ?>>S2/Sederajat</option>
                                                                <option value="S3" <?= $row->pend_terakhir_ibu == 'S3' ? 'selected' : '' ?>>S3/Sederajat</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Pekerjaan Ibu*</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <input class="form-control" name="pekerjaan_ibu" type="text" value="<?= $row->pekerjaan_ibu ?>" required />
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat Orang Tua*</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <textarea class="form-control" name="alamat_orgtua" type="text" required><?= $row->alamat_orgtua ?> </textarea>
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Wali*</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <input class="form-control" name="nama_wali" type="text" value="<?= $row->nama_wali ?>" required />
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Pekerjaan Wali*</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <input class="form-control" name="pekerjaan_wali" type="text" value="<?= $row->pekerjaan_wali ?>" required />
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat Wali*</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <textarea class="form-control" name="alamat_wali" type="text" required><?= $row->alamat_wali ?> </textarea>
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="col-form-label col-md-3 col-sm-3 label-align">No Telp Orang Tua/Wali*</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <input class="form-control" name="no_telp_orgtua" type="text" value="<?= $row->no_telp_orgtua ?>" required />
                                                        </div>
                                                    </div>
                                                    <div class="ln_solid"></div>
                                                    <div class="form-group row">
                                                        <div class="col-md-9 col-sm-9  offset-md-3">
                                                            <a href="<?= site_url('Siswa') ?>" class="btn btn-warning"><i class="fa fa-undo"></i> Cancel</a>
                                                            <button class="btn btn-secondary" type="reset"><i class="fa fa-ban"></i> Reset</button>
                                                            <button type="submit" class="btn btn-primary" name="<?= $page ?>"><i class="fa fa-paper-plane"></i> Submit</button>
                                                        </div>
                                                    </div>
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

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">


    </div>
    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="home-profile">