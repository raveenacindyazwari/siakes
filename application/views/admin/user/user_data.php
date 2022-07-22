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
                            <div class="pull-right">
                                <a href="<?= site_url('User/add') ?>" class="btn btn-primary btn-flat">
                                    <i class="fa fa-plus"></i> Tambah
                                </a>
                            </div>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <?php $this->view('messages') ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%" id="table1">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th style="text-align: center;">Nama</th>
                                                <th>Username</th>
                                                <th>Level</th>
                                                <th style="text-align: center;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $no = 1;
                                            foreach ($row->result() as $key => $data) {
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?>.</td>
                                                    <td style="text-align: center;"><?= $data->nama ?></td>
                                                    <td><?= $data->username ?></td>
                                                    <td><?= $data->level ?></td>

                                                    <td class="text-center" width="160px">
                                                        <?php if ($data->level == 'Admin') { ?>
                                                            <a href="<?= site_url('User/edit/' . $data->id_user) ?>" class="btn btn-success btn-sm">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                        <?php } else { ?>
                                                            <form action="<?= site_url('User/del') ?>" method="post">
                                                                <a href="<?= site_url('User/edit/' . $data->id_user) ?>" class="btn btn-success btn-sm">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>

                                                                <input type="hidden" name="id_user" value="<?= $data->id_user ?>">
                                                                <button onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger btn-sm">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>

                                                            </form>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>