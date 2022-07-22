<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Dashboard</h3>
			</div>
			<div class="title_right">

			</div>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12  ">
				<div class="x_panel">
				
					<div class="x_content">

						<?php if ($this->session->userdata('level') == 'Admin' || $this->session->userdata('level') == 'Kepala Sekolah') { ?>
							<div class="card-deck">
								<div class="card text-white bg-primary mb-3">
									<div class="card-header text-center" style="font-size: 20px;">Siswa</div>
									<div class="card-body">
										<div class="row">
											<div class="col-6">
												<h5 class="card-title">Laki - Laki</h5>
												<p class="card-text"><?= $siswa_l->row()->jumlah; ?> Orang</p>
											</div>
											<div class="col-6">
												<h5 class="card-title">Perempuan</h5>
												<p class="card-text"><?= $siswa_p->row()->jumlah; ?> Orang</p>
											</div>
										</div>
									</div>
								</div>

								<div class="card text-white bg-primary mb-3">
									<div class="card-header text-center" style="font-size: 20px;">Guru</div>
									<div class="card-body">
										<div class="row">
											<div class="col-6">
												<h5 class="card-title">Laki - Laki</h5>
												<p class="card-text"><?= $guru_l->row()->jumlah; ?> Orang</p>
											</div>
											<div class="col-6">
												<h5 class="card-title">Perempuan</h5>
												<p class="card-text"><?= $guru_p->row()->jumlah; ?> Orang</p>
											</div>
										</div>
									</div>
								</div>

								<div class="card text-white bg-primary mb-3">
									<div class="card-header text-center" style="font-size: 20px;">Alumni</div>
									<div class="card-body">
										<div class="row">
											<div class="col-6">
												<h5 class="card-title">Laki - Laki</h5>
												<p class="card-text"><?= $alumni_l->row()->jumlah; ?> Orang</p>
											</div>
											<div class="col-6">
												<h5 class="card-title">Perempuan</h5>
												<p class="card-text"><?= $alumni_p->row()->jumlah; ?> Orang </p>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>

						

						<?php
						$profile = $this->fungsi->user_login();
						if ($this->session->userdata('level') == 'Siswa') { ?>

							<div class="col-md-3 col-sm-3  profile_left">
								<div class="profile_img">
									<div id="crop-avatar">
										<!-- Current avatar -->
										<img class="img-responsive avatar-view" src="<?= base_url('assets/gambar/siswa/') . $profile->gambar ?>" alt="Avatar" title="Change the avatar" width="250">
									</div>
								</div>

							</div>
							<div class="offset-1 col-md-8 col-sm-8 ">


								<div class="card-box table-responsive">
									<table id="" class="table table-striped table-bordered" style="width:100%" id="table1">
										<tbody>
											<tr>
												<th class="col-sm-4">NISN</th>
												<th class="col-sm-8"><?= $profile->nisn ?></th>
											</tr>
											<tr>
												<th class="col-sm-4">Program Keahlian</th>
												<td class="col-sm-8"><?= $profile->program_keahlian ?></td>
											</tr>
											<tr>
												<th class="col-sm-4">Nama Lengkap</th>
												<td class="col-sm-8"><?= $profile->nama_siswa ?></td>
											</tr>
											<tr>
												<th class="col-sm-4">Tempat Tanggal Lahir</th>
												<td class="col-sm-8"><?= $profile->tempat_lahir . ' / ' . $profile->tanggal_lahir ?></td>
											</tr>
											<tr>
												<th class="col-sm-4">Alamat</th>
												<td class="col-sm-8"><?= $profile->alamat ?></td>
											</tr>
											<tr>
												<th class="col-sm-4">Jenis Kelamin</th>
												<td class="col-sm-8"><?= $profile->jenis_kelamin ?></td>
											</tr>
											<tr>
												<th class="col-sm-4">Agama</th>
												<td class="col-sm-8"><?= $profile->agama ?></td>
											</tr>
										</tbody>
									</table>

								</div>
							</div>
						<?php } ?>

						<?php
						if ($this->session->userdata('level') == 'Guru') { ?>

							<div class="col-md-3 col-sm-3  profile_left">
								<div class="profile_img">
									<div id="crop-avatar">
										<!-- Current avatar -->
										<img class="img-responsive avatar-view" src="<?= base_url('assets/gambar/guru/') . $profile->gambar ?>" alt="Avatar" title="Change the avatar" width="250">
									</div>
								</div>

							</div>
							<div class="offset-1 col-md-8 col-sm-8 ">


								<div class="card-box table-responsive">
									<table id="" class="table table-striped table-bordered" style="width:100%" id="table1">
										<tbody>
											<tr>
												<th class="col-sm-4">NIP</th>
												<th class="col-sm-8"><?= $profile->nip ?></th>
											</tr>
											<tr>
												<th class="col-sm-4">Bidang Studi</th>
												<td class="col-sm-8"><?= $profile->bidang_studi ?></td>
											</tr>
											<tr>
												<th class="col-sm-4">Nama Lengkap</th>
												<td class="col-sm-8"><?= $profile->nama_guru ?></td>
											</tr>
											<tr>
												<th class="col-sm-4">Tempat Tanggal Lahir</th>
												<td class="col-sm-8"><?= $profile->tempat_lahir . ' / ' . $profile->tanggal_lahir ?></td>
											</tr>
											<tr>
												<th class="col-sm-4">Alamat</th>
												<td class="col-sm-8"><?= $profile->alamat ?></td>
											</tr>
											<tr>
												<th class="col-sm-4">Jenis Kelamin</th>
												<td class="col-sm-8"><?= $profile->jenis_kelamin ?></td>
											</tr>
											<tr>
												<th class="col-sm-4">Agama</th>
												<td class="col-sm-8"><?= $profile->agama ?></td>
											</tr>
										</tbody>
									</table>

								</div>
							</div>
						<?php } ?>


					</div>
				</div>
			</div>
		</div>
	</div>
</div>