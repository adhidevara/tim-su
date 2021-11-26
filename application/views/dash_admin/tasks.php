<?php $this->load->view('dash_admin/head_foot/header'); ?>

<!--**********************************
	Content body start
***********************************-->
<div class="content-body">
	<div class="container-fluid">
		<div class="page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Kelola Tasks</a></li>
			</ol>
		</div>
		<div class="row">
			
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Tasks</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-responsive-md">
								<thead>
									<tr>
										<th>ID Task</th>
										<th>Tanggal</th>
										<th>Tim</th>
										<th>Mentor</th>
										<th>Judul</th>
										<th>Review</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($tasks as $t){ ?>
									<tr>
										<td><strong>TSK-<?=$t->id_task?></strong></td>
										<td><?=date_format(date_create($t->created_at), "d F Y")?></td>
										<td><div class="d-flex align-items-center"><img src="<?=$t->foto_tim?>" class="rounded-lg mr-2" width="24" alt=""/> <span class="w-space-no"><?=$t->nama_tim?></span></div></td>
										<td><div class="d-flex align-items-center"><img src="<?=$t->foto_mentor?>" class="rounded-lg mr-2" width="24" alt=""/> <span class="w-space-no"><?=$t->nama_mentor?></span></div></td>
										<td><?=$t->judul?></td>
										<td>
											<?php if ($t->review == "Sudah Direview"){ ?>
											<div class="d-flex align-items-center"><i class="fa fa-circle text-success mr-1 text-capitalize"></i> <?=$t->review?></div>
											<?php }else if ($t->review == "Belum Direview"){ ?>
											<div class="d-flex align-items-center"><i class="fa fa-circle text-warning mr-1 text-capitalize"></i> <?=$t->review?></div>
											<?php }else if($t->review == "Belum Dijawab"){ ?>
											<div class="d-flex align-items-center"><i class="fa fa-circle text-info mr-1 text-capitalize"></i> <?=$t->review?></div>
											<?php }else{ ?>
											<div class="d-flex align-items-center"><i class="fa fa-circle text-danger mr-1 text-capitalize"></i> <?=$t->review?></div>
											<?php } ?>
										</td>
									</tr>
									<!-- review -->
									<div class="modal fade" id="taskModal-<?=$t->id_task?>">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Detail Task</h5>
													<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<h1 class="size-2 text-center"><?=$t->judul?></h1>
													<div class="card text-white bg-danger">
														<ul class="list-group list-group-flush">
															<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Attachment</span>
																<?php if ($t->attachment == "#"){ ?>
																	<strong><a href="#" class="text-white">None</a></strong>
																<?php }else{ ?>
																	<strong><a href="<?=$t->attachment?>" class="text-white">View & Download</a></strong>
																<?php } ?>
															</li>

															<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Deskripsi :</span></li>
															<li class="list-group-item d-flex justify-content-between text-justify"><span class="mt-0">
															<strong><?=$t->deskripsi?></strong></span>
															</li>

															<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Jawaban :</span></li>
															<li class="list-group-item d-flex justify-content-between text-justify"><span class="mt-0">
															<strong><?=$t->jawaban?></strong></span>
															</li>
														</ul>
													</div>
													<form method="POST" action="<?=base_url('C_admin/updateTaskStatus/'.$t->id_task)?>" enctype="multipart/form-data">
														<div class="card text-white bg-danger p-4">
															<label>Status Task</label>
															<select id="inputState" class="form-control" name="review">
																<option selected value="0"><?=$t->review?></option>
																<option value="Belum Dijawab">Belum di Jawab</option>
																<option value="Belum Direview">Belum di Review</option>
																<option value="Sudah Direview">Sudah di Review</option>
																<option value="Revisi">Revisi</option>
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
