<?php $this->load->view('dash_mentor/head_foot/header'); ?>

<!--**********************************
            Content body start
***********************************-->
<div class="content-body">
	<div class="container-fluid">
		<div class="page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Progress</a></li>
			</ol>
		</div>
		<!-- row -->
		<div class="row">
			<div class="col-xl-4 col-lg-12">
				<div class="card">
					<div class="card-header border-0 pb-0">
						<h4 class="card-title">Belum di Cek</h4>
					</div>
					<div class="card-body pb-0">
						<div class="widget-media">
							<ul class="timeline">
								<li>
									<?php foreach ($progress as $pro){ if($pro['status'] == "belum dicek"){ ?>
										<div href="#" data-toggle="modal" data-target="#modal-<?=$pro['id_progresses']?>" class="col-xl-12 col-lg-6 col-sm-6">
											<div class="widget-stat card bg-danger">
												<div class="card-body p-4">
													<div class="media">
														<span class="mr-3">
															<i class="la la-tasks"></i>
														</span>
														<div class="media-body text-white">
															<p class="mb-1"><?=$pro['judul']?></p>
															<h3 class="text-white"><?=$pro['presentase_progress']?>%</h3>
															<div class="progress mb-2 bg-primary">
																<div class="progress-bar progress-animated bg-light" style="width: <?=$pro['presentase_progress']?>%"></div>
															</div>
															<small>Target Progress <?=$pro['presentase_target']?>%</small>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="modal-<?=$pro['id_progresses']?>">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Detail Progress</h5>
														<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<h1 class="size-2 text-center"><?=$pro['judul']?></h1>
														<div class="card text-white bg-danger">
															<ul class="list-group list-group-flush">
																<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Tanggal dibuat :</span><strong><?=date_format(date_create($pro['created_at']), 'd/m/Y H:i')?></strong></li>
																<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Bulan :</span><strong><?=date_format(date_create($pro['bulan']), 'F')?></strong></li>
																<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Minggu Ke :</span><strong><?=$pro['minggu_ke']?></strong></li>
																<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Deskripsi :</span></li>
																<li class="list-group-item d-flex justify-content-between text-justify"><span class="mt-0"><strong><?=$pro['deskripsi']?></strong></span></li>
																<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Catatan Tim :</span></li>
																<li class="list-group-item d-flex justify-content-between text-justify"><span class="mt-0"><strong><?=$pro['note_tim']?></strong></span></li>
																<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Catatan Mentor :</span></li>
																<li class="list-group-item d-flex justify-content-between text-justify"><span class="mt-0"><strong><?=$pro['note_mentor']?></strong></span></li>
															</ul>
														</div>
														<button class="btn btn-danger btn-block" data-dismiss="modal">Tutup</button>
													</div>
												</div>
											</div>
										</div>
									<?php }} ?>
								</li>
							</ul>
						</div>
					</div>
					<div class="chart-wrapper">
						<canvas id="chart_widget_9"></canvas>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-12">
				<div class="card">
					<div class="card-header border-0 pb-0">
						<h4 class="card-title">Sedang di Cek</h4>
					</div>
					<div class="card-body pb-0">
						<div class="widget-media">
							<ul class="timeline">
								<li>
									<?php foreach ($progress as $pro){ if($pro['status'] == "sedang dicek"){ ?>
										<div href="#" data-toggle="modal" data-target="#modal-<?=$pro['id_progresses']?>" class="col-xl-12 col-lg-6 col-sm-6">
											<div class="widget-stat card bg-warning">
												<div class="card-body p-4">
													<div class="media">
														<span class="mr-3">
															<i class="la la-tasks"></i>
														</span>
														<div class="media-body text-white">
															<p class="mb-1"><?=$pro['judul']?></p>
															<h3 class="text-white"><?=$pro['presentase_progress']?>%</h3>
															<div class="progress mb-2 bg-primary">
																<div class="progress-bar progress-animated bg-light" style="width: <?=$pro['presentase_progress']?>%"></div>
															</div>
															<small>Target Progress <?=$pro['presentase_target']?>%</small>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="modal-<?=$pro['id_progresses']?>">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Detail Progress</h5>
														<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<h1 class="size-2 text-center"><?=$pro['judul']?></h1>
														<div class="card text-white bg-warning">
															<ul class="list-group list-group-flush">
																<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Tanggal dibuat :</span><strong><?=date_format(date_create($pro['created_at']), 'd/m/Y H:i')?></strong></li>
																<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Bulan :</span><strong><?=date_format(date_create($pro['bulan']), 'F')?></strong></li>
																<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Minggu Ke :</span><strong><?=$pro['minggu_ke']?></strong></li>
																<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Deskripsi :</span></li>
																<li class="list-group-item d-flex justify-content-between text-justify"><span class="mt-0"><strong><?=$pro['deskripsi']?></strong></span></li>
																<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Catatan Tim :</span></li>
																<li class="list-group-item d-flex justify-content-between text-justify"><span class="mt-0"><strong><?=$pro['note_tim']?></strong></span></li>
																<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Catatan Mentor :</span></li>
																<li class="list-group-item d-flex justify-content-between text-justify"><span class="mt-0"><strong><?=$pro['note_mentor']?></strong></span></li>
															</ul>
														</div>
														<form method="POST" action="<?=base_url('C_mentor/updateProgress/'.$pro['id_progresses'])?>" enctype="multipart/form-data">
															<div class="card text-white bg-warning p-4">
																<label>Status Progress</label>
<!--																<div class="input-group col-md-12">-->
<!--																	<input required type="number" class="form-control" name="presentase_progress" placeholder="Masukkan persentase (%)" value="--><?//=$pro['presentase_progress']?><!--">-->
<!--																	<div class="input-group-append">-->
<!--																		<span class="input-group-text">%</span>-->
<!--																	</div>-->
<!--																</div>-->
																<select required="0" id="inputState" class="form-control default-select" name="status">
																	<option selected value="0">Pilih Status...</option>
																	<option value="sudah dicek">Selesai</option>
																	<option value="belum dicek">Recheck</option>
																</select>
																<label class="mt-3">Catatan Mentor</label>
																<textarea name="note_mentor" placeholder="Tulis Catatan..." class="rounded p-3" rows="5"><?=$pro['note_mentor']?></textarea>
															</div>
															<button class="btn btn-warning btn-block" type="submit">Submit</button>
														</form>
													</div>
												</div>
											</div>
										</div>
									<?php }} ?>
								</li>
							</ul>
						</div>
					</div>
					<div class="chart-wrapper">
						<canvas id="chart_widget_9"></canvas>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-12">
				<div class="card">
					<div class="card-header border-0 pb-0">
						<h4 class="card-title">Sudah di Cek</h4>
					</div>
					<div class="card-body pb-0">
						<div class="widget-media">
							<ul class="timeline">
								<li>
									<?php foreach ($progress as $pro){ if($pro['status'] == "sudah dicek"){ ?>
										<div href="#" data-toggle="modal" data-target="#modal-<?=$pro['id_progresses']?>" class="col-xl-12 col-lg-6 col-sm-6">
											<div class="widget-stat card bg-blue-light">
												<div class="card-body p-4">
													<div class="media">
														<span class="mr-3">
															<i class="la la-tasks"></i>
														</span>
														<div class="media-body text-white">
															<p class="mb-1"><?=$pro['judul']?></p>
															<h3 class="text-white"><?=$pro['presentase_progress']?>%</h3>
															<div class="progress mb-2 bg-primary">
																<div class="progress-bar progress-animated bg-light" style="width: <?=$pro['presentase_progress']?>%"></div>
															</div>
															<small>Target Progress <?=$pro['presentase_target']?>%</small>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="modal-<?=$pro['id_progresses']?>">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Detail Progress</h5>
														<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<h1 class="size-2 text-center"><?=$pro['judul']?></h1>
														<div class="card text-white bg-blue-light">
															<ul class="list-group list-group-flush">
																<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Tanggal dibuat :</span><strong><?=$pro['created_at']?></strong></li>
																<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Bulan :</span><strong><?=date_format(date_create($pro['bulan']), 'F')?></strong></li>
																<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Minggu Ke :</span><strong><?=$pro['minggu_ke']?></strong></li>
																<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Deskripsi :</span></li>
																<li class="list-group-item d-flex justify-content-between text-justify"><span class="mt-0"><strong><?=$pro['deskripsi']?></strong></span></li>
																<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Catatan Tim :</span></li>
																<li class="list-group-item d-flex justify-content-between text-justify"><span class="mt-0"><strong><?=$pro['note_tim']?></strong></span></li>
																<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Catatan Mentor :</span></li>
																<li class="list-group-item d-flex justify-content-between text-justify"><span class="mt-0"><strong><?=$pro['note_mentor']?></strong></span></li>
															</ul>
														</div>
														<form method="POST" action="<?=base_url('C_mentor/updateProgress/'.$pro['id_progresses'])?>" enctype="multipart/form-data">
															<div class="card text-white bg-blue-light p-4">
																<label>Status Progress</label>
																<!--																<div class="input-group col-md-12">-->
																<!--																	<input required type="number" class="form-control" name="presentase_progress" placeholder="Masukkan persentase (%)" value="--><?//=$pro['presentase_progress']?><!--">-->
																<!--																	<div class="input-group-append">-->
																<!--																		<span class="input-group-text">%</span>-->
																<!--																	</div>-->
																<!--																</div>-->
																<select required="0" id="inputState" class="form-control default-select" name="status">
																	<option selected value="0">Pilih Status...</option>
																	<option value="sedang dicek">Sedang Di Cek</option>
																	<option value="belum dicek">Recheck</option>
																</select>
																<label class="mt-3">Catatan Mentor</label>
																<textarea name="note_mentor" placeholder="Tulis Catatan..." class="rounded p-3" rows="5"><?=$pro['note_mentor']?></textarea>
															</div>
															<button class="btn bg-blue-light text-white btn-block" type="submit">Submit</button>
														</form>
													</div>
												</div>
											</div>
										</div>
									<?php }} ?>
								</li>
							</ul>
						</div>
					</div>
					<div class="chart-wrapper">
						<canvas id="chart_widget_10"></canvas>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!--**********************************
	Content body end
***********************************-->

<?php $this->load->view('dash_mentor/head_foot/footer'); ?>
