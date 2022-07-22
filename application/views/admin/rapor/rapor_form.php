<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Rapor <small>Rapor</small></h2>
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
                                        <form autocomplete="off" action="<?= site_url('rapor/process') ?>" method="post">
                                            <span class="section"><?= $show ?> Data Rapor</span>

                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Siswa*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="hidden" name="id" value="">
                                                    <input list="data_siswa" class="form-control" type="text" name="nisn" id="nisn" value="<?= $row->nisn ?>" placeholder="nisn / nama" onchange="return autofill();">
                                                </div>
                                            </div>
                                            <input type="hidden" name="nama_siswa" id="nama_siswa" value="<?= $row->nama_siswa ?>" class="form-control">
                                            <input type="hidden" name="id_siswa" id="id_siswa" value="<?= $row->id_siswa ?>" class="form-control">
                                            <input type="hidden" name="id_jadwal_pelajaran" value="<?= $jadwal_pelajaran->row()->id_jadwal ?>">

                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Nilai Pengetahuan*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="number" min="0" max="100" name="nilai_pengetahuan" id="nilai_pengetahuan" value="<?= $row->nilai_pengetahuan ?>" class="form-control">
                                                </div>
                                            </div>

                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Nilai Keterampilan*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="number" min="0" max="100" name="nilai_keterampilan" id="nilai_keterampilan" value="<?= $row->nilai_keterampilan ?>" class="form-control">
                                                </div>
                                            </div>

                                            <!-- <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Nilai Akhir*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="number" name="nilai_akhir" id="nilai_akhir" value="<?= $row->nilai_akhir ?>" class="form-control">
                                                </div>
                                            </div>

                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Nilai Predikat*</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="text" name="nilai_predikat" id="nilai_predikat" value="<?= $row->nilai_predikat ?>" class="form-control">
                                                </div>
                                            </div> -->

                                            <div class="ln_solid"></div>
                                            <div class="form-group row">
                                                <div class="col-md-9 col-sm-9  offset-md-3">
                                                    <a href="<?= site_url('Rapor/detail/') . $jadwal_pelajaran->row()->id_jadwal ?>" class="btn btn-warning"><i class="fa fa-undo"></i> Cancel</a>
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
                    document.getElementById('id_siswa').value = val.id_siswa;

                });
            }
        });

    }
</script>