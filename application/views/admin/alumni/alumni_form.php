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
                                                    <input list="data_siswa" class="form-control" type="text" name="nisn" id="nisn" value="<?= $row->nisn ?>" placeholder="nisn / nama" onchange="return autofill();">
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Siswa*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="text" name="nama_siswa" id="nama_siswa" value="<?= $row->nama_alumni ?>" class="form-control">
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
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="text" name="alamat" id="alamat" class="form-control">
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Orang Tua Wali</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="text" name="nama_orgtua" id="nama_orgtua" value="" class="form-control">
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
                                                    <input class="form-control" value="" name="tahun_lulus" id="tahun_lulus" type="text" required />
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">keterangan*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" value="" name="keterangan" id="keterangan" type="text" required />
                                                </div>
                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="form-group row">
                                                <div class="col-md-9 col-sm-9  offset-md-3">
                                                    <a href="<?= site_url('Alumni') ?>" class="btn btn-warning"><i class="fa fa-undo"></i> Cancel</a>
                                                    <button class="btn btn-secondary" type="reset"><i class="fa fa-ban"></i> Reset</button>
                                                    <button type="submit" class="btn btn-primary" name="add"><i class="fa fa-paper-plane"></i> Submit</button>
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
<datalist id="data_siswa">
    <?php
    foreach ($record->result() as $b) {
        echo "<option value='$b->nisn'>$b->nama_siswa</option>";
    }
    ?>
</datalist>
<script>
    function autofill() {
        var nisn = document.getElementById('nisn').value;
        $.ajax({
            url: "<?php echo base_url(); ?>Alumni/cari",
            data: '&nisn=' + nisn,
            success: function(data) {
                var hasil = JSON.parse(data);

                $.each(hasil, function(key, val) {

                    document.getElementById('nisn').value = val.nisn;
                    document.getElementById('nama_siswa').value = val.nama_siswa;
                    document.getElementById('alamat').value = val.alamat;
                    document.getElementById('nama_orgtua').value = val.nama_orgtua;

                });
            }
        });

    }
</script>