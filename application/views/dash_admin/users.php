<?php $this->load->view('dash_admin/head_foot/header'); ?>

<!--**********************************
	Content body start
***********************************-->
<div class="content-body">
	<div class="container-fluid">
		<div class="page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Users</a></li>
			</ol>
		</div>
		<div class="row">

			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Tims</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-responsive-md">
								<thead>
								<tr>
									<th>ID Tim</th>
									<th>Tanggal Daftar</th>
									<th>Nama Tim</th>
									<th>Email</th>
									<th>No.Telp</th>
									<th>Nama Ketua</th>
									<th>Email Ketua</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody>
								<?php foreach ($getTim as $t){ ?>
									<tr>
										<td><strong>TIM-<?=$t->id_tim?></strong></td>
										<td><?=date_format(date_create($t->created_at), "d F Y")?></td>
										<td><?=$t->nama?></td>
										<td><?=$t->email?></td>
										<td><?=$t->notelp?></td>
										<td><?=$t->nama_ketua?></td>
										<td><?=$t->email_ketua?></td>
										<td>
											<?php if ($t->is_verified == 'verified'){ ?>
												<div class="d-flex align-items-center text-capitalize"><i class="fa fa-circle text-success mr-1"></i> Aktif</div>
											<?php }else{ ?>
												<div class="d-flex align-items-center text-capitalize"><i class="fa fa-circle text-danger mr-1"></i> Nonaktif</div>
											<?php } ?>
										</td>
										<td>
											<div class="d-flex">
												<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1" data-toggle="modal" data-target="#timsModal-<?=$t->id_tim?>"><i class="fa fa-pencil"></i></a>
												<?php if ($t->is_verified == 'verified'){ ?>
													<a href="<?=base_url('C_admin/isUnverif/'.$t->id_tim.'/tims')?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-ban"></i></a>
												<?php }else{ ?>
													<a href="<?=base_url('C_admin/isVerif/'.$t->id_tim.'/tims')?>" class="btn btn-success shadow btn-xs sharp"><i class="fa fa-check"></i></a>
												<?php } ?>
											</div>
										</td>
									</tr>
									<div class="modal fade" id="timsModal-<?=$t->id_tim?>">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Detail Progress</h5>
													<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<h1 class="size-2 text-center"><?=$t->nama?></h1>
													<div class="card text-white bg-danger">
														<ul class="list-group list-group-flush">
															<li class="list-group-item d-flex justify-content-center"><a href="<?=$t->foto?>" target="_blank"><img src="<?=$t->foto?>" width="300"></a></li>
															<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Deskripsi Tim :</span></li>
															<li class="list-group-item d-flex justify-content-between text-justify"><span class="mt-0"><strong><?=$t->intro?></strong></span></li>
														</ul>
													</div>
													<button class="btn btn-danger btn-block" data-dismiss="modal">Tutup</button>
												</div>
											</div>
										</div>
									</div>

								<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Mentors</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-responsive-md">
								<thead>
								<tr>
									<th>ID Mentor</th>
									<th>Tanggal Daftar</th>
									<th>Nama Mentor</th>
									<th>Email</th>
									<th>No.Telp</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody>
								<?php foreach ($getMentor as $t){ ?>
									<tr>
										<td><strong>MNTR-<?=$t->id_mentor?></strong></td>
										<td><?=date_format(date_create($t->created_at), "d F Y")?></td>
										<td><?=$t->nama?></td>
										<td><?=$t->email?></td>
										<td><?=$t->no_telp?></td>
										<td>
											<?php if ($t->is_verified == 'verified'){ ?>
												<div class="d-flex align-items-center text-capitalize"><i class="fa fa-circle text-success mr-1"></i> Aktif</div>
											<?php }else{ ?>
												<div class="d-flex align-items-center text-capitalize"><i class="fa fa-circle text-danger mr-1"></i> Nonaktif</div>
											<?php } ?>
										</td>
										<td>
											<div class="d-flex">
												<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1" data-toggle="modal" data-target="#mentorsModal-<?=$t->id_mentor?>"><i class="fa fa-pencil"></i></a>
												<?php if ($t->is_verified == 'verified'){ ?>
													<a href="<?=base_url('C_admin/isUnverif/'.$t->id_mentor.'/mentors')?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-ban"></i></a>
												<?php }else{ ?>
													<a href="<?=base_url('C_admin/isVerif/'.$t->id_mentor.'/mentors')?>" class="btn btn-success shadow btn-xs sharp"><i class="fa fa-check"></i></a>
												<?php } ?>
											</div>
										</td>
									</tr>
									<div class="modal fade" id="mentorsModal-<?=$t->id_mentor?>">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Detail Progress</h5>
													<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<h1 class="size-2 text-center"><?=$t->nama?></h1>
													<div class="card text-white bg-danger">
														<ul class="list-group list-group-flush">
															<li class="list-group-item d-flex justify-content-center"><a href="<?=$t->foto?>" target="_blank"><img src="<?=$t->foto?>" width="300"></a></li>
														</ul>
													</div>
													<button class="btn btn-danger btn-block" data-dismiss="modal">Tutup</button>
												</div>
											</div>
										</div>
									</div>

								<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!--**********************************
	Content body end
***********************************-->

<?php $this->load->view('dash_admin/head_foot/footer'); ?>
