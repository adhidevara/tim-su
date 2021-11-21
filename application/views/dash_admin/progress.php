<?php $this->load->view('dash_admin/head_foot/header'); ?>

<!--**********************************
	Content body start
***********************************-->
<div class="content-body">
	<div class="container-fluid">
		<div class="page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Kelola Progress</a></li>
			</ol>
		</div>
		<div class="row">

			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Progress</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-responsive-md">
								<thead>
								<tr>
									<th>ID Progress</th>
									<th>Tanggal</th>
									<th>Presentase Progress</th>
									<th>Presentase Target</th>
									<th>Judul</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody>
								<?php foreach ($progress as $t){ ?>
									<tr>
										<td><strong>PRG-<?=$t->id_progresses?></strong></td>
										<td><?=date_format(date_create($t->created_at), "d F Y")?></td>
										<td>
											<div class="progress bgl-danger">
												<div class="progress-bar bg-danger" style="width: <?=$t->presentase_progress?>%;" role="progressbar"><span class="sr-only"><?=$t->presentase_progress?>% Complete</span>
												</div>
											</div>
											<span class="badge badge-danger light"><?=$t->presentase_progress?>%</span>
										</td>
										<td><span class="badge badge-primary light"><?=$t->presentase_target?>%</span></td>
										<td><?=$t->judul?></td>
										<td>
											<?php if ($t->status == "sudah dicek"){ ?>
												<div class="d-flex align-items-center text-capitalize"><i class="fa fa-circle text-success mr-1"></i> <?=$t->status?></div>
											<?php }else if ($t->status == "sedang dicek"){ ?>
												<div class="d-flex align-items-center text-capitalize"><i class="fa fa-circle text-warning mr-1"></i> <?=$t->status?></div>
											<?php }else if($t->status == "belum dicek"){ ?>
												<div class="d-flex align-items-center text-capitalize"><i class="fa fa-circle text-danger mr-1"></i> <?=$t->status?></div>
											<?php } ?>
										</td>
										<td>
											<div class="d-flex">
												<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1" data-toggle="modal" data-target="#progresskModal-<?=$t->id_progresses?>"><i class="fa fa-pencil"></i></a>
												<?php if ($t->is_verified == 1){ ?>
													<a href="<?=base_url('C_admin/isUnverif/'.$t->id_progresses.'/progresses')?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-ban"></i></a>
												<?php }else{ ?>
												<a href="<?=base_url('C_admin/isVerif/'.$t->id_progresses.'/progresses')?>" class="btn btn-success shadow btn-xs sharp"><i class="fa fa-check"></i></a>
												<?php } ?>
											</div>
										</td>
									</tr>
									<div class="modal fade" id="progresskModal-<?=$t->id_progresses?>">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Detail Progress</h5>
													<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<h1 class="size-2 text-center"><?=$t->judul?></h1>
													<div class="card text-white bg-danger">
														<ul class="list-group list-group-flush">
															<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Bulan</span>
																<strong><a href="#" class="text-white"><?=date_format(date_create($t->bulan), "F")?></a></strong>
															</li>

															<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Minggu Ke</span>
																<strong><a href="#" class="text-white"><?=$t->minggu_ke?></a></strong>
															</li>

															<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Tim</span>
																<strong><div class="d-flex align-items-center"><img src="<?=$t->foto_tim?>" class="rounded-lg mr-2" width="24" alt=""/> <span class="w-space-no"><?=$t->nama_tim?></span></div></strong>
															</li>

															<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Tim</span>
																<strong><div class="d-flex align-items-center"><img src="<?=$t->foto_mentor?>" class="rounded-lg mr-2" width="24" alt=""/> <span class="w-space-no"><?=$t->nama_mentor?></span></div></strong>
															</li>

															<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Deskripsi :</span></li>
															<li class="list-group-item d-flex justify-content-between text-justify"><span class="mt-0">
															<strong><?=$t->deskripsi?></strong></span>
															</li>
														</ul>
													</div>
													<form method="POST" action="<?=base_url('C_admin/updateProgressStatus/'.$t->id_progresses)?>" enctype="multipart/form-data">
														<div class="card text-white bg-danger p-4">
															<label>Status Task</label>
															<select id="inputState" class="form-control" name="status">
																<option selected value="0" class="text-capitalize"><?=$t->status?></option>
																<option value="sedang dicek">Sedang di Cek</option>
																<option value="belum dicek">Belum di Cek</option>
																<option value="Sudah dicek">Sudah di Cek</option>
															</select>
														</div>
														<button class="btn btn-danger btn-block" type="submit">Submit</button>
													</form>
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
