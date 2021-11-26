<?php $this->load->view('dash_admin/head_foot/header'); ?>
<!-- Modal -->
<div class="modal fade" id="aAddMateri">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Materi</h5>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?=base_url('C_admin/addMateri')?>" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>Judul Materi</label>
						<input type="text" class="form-control" placeholder="Judul" name="judul">
						<input type="hidden" name="id_materi" value="<?=count($materi)+1?>">
					</div>
					<div class="form-group">
						<label>Link Materi</label>
						<input type="text" class="form-control" placeholder="Link Materi" name="url">
					</div>
					<div class="input-group mb-3">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="foto">
							<label class="custom-file-label">Choose file</label>
						</div>
						<div class="input-group-append">
							<span class="input-group-text">Upload Foto Materi</span>
						</div>
					</div>
					<button class="btn btn-primary" type="submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="aAddNews">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add News</h5>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?=base_url('C_admin/addNews')?>" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>Judul News</label>
						<input type="text" class="form-control" placeholder="Judul" name="judul">
						<input type="hidden" name="id_news" value="<?=count($news)+1?>">
					</div>
					<div class="form-group">
						<label>Link News</label>
						<input type="text" class="form-control" placeholder="Link News" name="link">
					</div>
					<div class="input-group mb-3">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="foto">
							<label class="custom-file-label">Choose file</label>
						</div>
						<div class="input-group-append">
							<span class="input-group-text">Upload Foto News</span>
						</div>
					</div>
					<button class="btn btn-primary" type="submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="aAddEvent">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Event</h5>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?=base_url('C_admin/addEvent')?>" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>Judul Event</label>
						<input type="text" class="form-control" placeholder="Judul" name="judul">
						<input type="hidden" name="id_event" value="<?=count($event)+1?>">
					</div>
					<div class="form-group">
						<label>Tanggal Event</label>
						<input type="datetime-local" class="form-control" name="tanggal">
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<textarea type="text" class="form-control" placeholder="Tulis deskripsi" name="deskripsi" rows="10"></textarea>
					</div>
					<div class="input-group mb-3">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="foto">
							<label class="custom-file-label">Choose file</label>
						</div>
						<div class="input-group-append">
							<span class="input-group-text">Upload Foto Event</span>
						</div>
					</div>
					<button class="btn btn-primary" type="submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!--**********************************
            Content body start
***********************************-->
<div class="content-body">
	<div class="container-fluid">
		<div class="page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Materi News Event</a></li>
			</ol>
		</div>
		<!-- row -->
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="email-center-box ml-0 ml-sm-4 ml-sm-0">
							<div role="toolbar" class="toolbar ml-1 ml-sm-0">
								<h1>Materi</h1>

							</div>
							<div class="email-list mt-3">
								<?php foreach ($materi as $ma){ ?>
									<div class="message">
										<div>
											<div class="d-flex message-single">
												<div class="ml-2">
<!--													<button class="border-0 bg-transparent align-middle p-0">-->
<!--														-->
<!--													</button>-->
													<div class="dropdown">
														<?php if ($ma->is_verified == 'verified'){ ?>
														<button type="button" class="btn btn-warning light sharp" data-toggle="dropdown">
															<i class="fa fa-book text-warning" aria-hidden="true"></i>
														</button>
														<?php }else{ ?>
														<button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
															<i class="fa fa-book text-danger" aria-hidden="true"></i>
														</button>
														<?php } ?>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-<?=$ma->id_materi?>">Detail</a>
															<?php if ($ma->is_verified == 'verified'){ ?>
															<a class="dropdown-item" href="<?=base_url('C_admin/deleteMNE/'.$ma->id_materi.'/materi/id_materi')?>">Delete</a>
															<?php }else{ ?>
															<a class="dropdown-item" href="<?=base_url('C_admin/restoreMNE/'.$ma->id_materi.'/materi/id_materi')?>">Restore</a>
															<?php } ?>
														</div>
													</div>
												</div>
												<a href="<?=$ma->url?>" target="_blank" class="col-mail col-mail-2">
													<div class="subject"><?=$ma->judul?></div>
													<div class="date"><?=date_format(date_create($ma->created_at), 'd/m/Y H:i')?></div>
												</a>
											</div>

										</div>
									</div>

									<div class="modal fade" id="modal-<?=$ma->id_materi?>">
										<div class="modal-dialog" role="document">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Detail Materi</h5>
														<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<h1 class="size-2 text-center"><?=$ma->judul?></h1>

														<div class="card text-black bg-white">
															<ul class="list-group list-group-flush">
																<li class="list-group-item d-flex justify-content-center"><a href="<?=$ma->foto?>" target="_blank"><img src="<?=$ma->foto?>" width="300"></a></li>
																<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Tanggal Dibuat :</span><strong><?=date_format(date_create($ma->created_at), 'd F Y')?></strong></li>
																<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Link Materi :</span></li>
																<li class="list-group-item d-flex justify-content-center text-center"><span class="mt-0"><strong><a href="<?=$ma->url?>" target="_blank"><i class="fa fa-link">VISIT SITE</i></a></strong></span></li>
															</ul>
														</div>
														<h1 class="size-2 text-center">Edit Materi</h1>
														<form action="<?=base_url('C_admin/updateMateri/'.$ma->id_materi)?>" method="POST" enctype="multipart/form-data">
															<div class="form-group">
																<label>Judul Materi</label>
																<input type="text" class="form-control" placeholder="Link Materi" name="judul" value="<?=$ma->judul?>">
															</div>
															<div class="form-group">
																<label>Link Materi</label>
																<input type="text" class="form-control" placeholder="Link Materi" name="url" value="<?=$ma->url?>">
															</div>
															<button class="btn btn-primary btn-block" type="submit">Submit</button>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>

								<?php } ?>
							</div>
							<!-- panel -->
							<div class="row mt-4">
								<div class="col-12 pl-3">
									<nav>
										<ul class="pagination pagination-gutter pagination-primary pagination-sm no-bg">
											<li class="page-item page-indicator"><a class="page-link" href="javascript:void()"><i class="la la-angle-left"></i></a></li>
											<li class="page-item "><a class="page-link" href="javascript:void()">1</a></li>
											<li class="page-item active"><a class="page-link" href="javascript:void()">2</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void()">3</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void()">4</a></li>
											<li class="page-item page-indicator"><a class="page-link" href="javascript:void()"><i class="la la-angle-right"></i></a></li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="email-center-box ml-0 ml-sm-4 ml-sm-0">
							<div role="toolbar" class="toolbar ml-1 ml-sm-0">
								<h1>News</h1>
								<div class="btn-group mb-1">
									<button aria-expanded="false" data-toggle="modal" data-target="#aAddNews" class="btn btn-primary px-3 light rounded" type="button"><i class="fa fa-plus"></i> Add News</button>
									<div class="dropdown-menu">
										<a href="javascript: void(0);" class="dropdown-item" data-toggle="modal" data-target="#aAddNews">Add News</a>
									</div>
								</div>
							</div>
							<div class="email-list mt-3">
								<?php foreach ($news as $ma){ ?>
									<div class="message">
										<div>
											<div class="d-flex message-single">
												<div class="ml-2">
<!--													<button class="border-0 bg-transparent align-middle p-0"><i-->
<!--															class="fa fa-newspaper-o text-info" aria-hidden="true"></i></button>-->
													<div class="dropdown">
														<?php if ($ma->is_verified == 'verified'){ ?>
															<button type="button" class="btn btn-info light sharp" data-toggle="dropdown">
																<i class="fa fa-newspaper-o text-info" aria-hidden="true"></i>
															</button>
														<?php }else{ ?>
															<button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
																<i class="fa fa-newspaper-o text-danger" aria-hidden="true"></i>
															</button>
														<?php } ?>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-<?=$ma->id_news?>">Detail</a>
															<?php if ($ma->is_verified == 'verified'){ ?>
																<a class="dropdown-item" href="<?=base_url('C_admin/deleteMNE/'.$ma->id_news.'/news/id_news')?>">Delete</a>
															<?php }else{ ?>
																<a class="dropdown-item" href="<?=base_url('C_admin/restoreMNE/'.$ma->id_news.'/news/id_news')?>">Restore</a>
															<?php } ?>
														</div>
													</div>
												</div>
											</div>
											<a href="<?=$ma->link?>" target="_blank" class="col-mail col-mail-2">
												<div class="subject"><?=$ma->judul?></div>
												<div class="date"><?=date_format(date_create($ma->created_at), 'd/m/Y H:i')?></div>
											</a>
										</div>
									</div>

									<div class="modal fade" id="modal-<?=$ma->id_news?>">
										<div class="modal-dialog" role="document">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Detail News</h5>
														<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<h1 class="size-2 text-center"><?=$ma->judul?></h1>

														<div class="card text-black bg-white">
															<ul class="list-group list-group-flush">
																<li class="list-group-item d-flex justify-content-center"><a href="<?=$ma->foto?>" target="_blank"><img src="<?=$ma->foto?>" width="300"></a></li>
																<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Tanggal Dibuat :</span><strong><?=date_format(date_create($ma->created_at), 'd F Y')?></strong></li>
																<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Link News :</span></li>
																<li class="list-group-item d-flex justify-content-center text-center"><span class="mt-0"><strong><a href="<?=$ma->link?>" target="_blank"><i class="fa fa-link">VISIT NEWS</i></a></strong></span></li>
															</ul>
														</div>
														<h1 class="size-2 text-center">Edit News</h1>
														<form action="<?=base_url('C_admin/updateNews/'.$ma->id_news)?>" method="POST" enctype="multipart/form-data">
															<div class="form-group">
																<label>Judul Materi</label>
																<input type="text" class="form-control" placeholder="Link Materi" name="judul" value="<?=$ma->judul?>">
															</div>
															<div class="form-group">
																<label>Link Materi</label>
																<input type="text" class="form-control" placeholder="Link Materi" name="url" value="<?=$ma->link?>">
															</div>
															<button class="btn btn-primary btn-block" type="submit">Submit</button>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>

								<?php } ?>
							</div>
							<!-- panel -->
							<div class="row mt-4">
								<div class="col-12 pl-3">
									<nav>
										<ul class="pagination pagination-gutter pagination-primary pagination-sm no-bg">
											<li class="page-item page-indicator"><a class="page-link" href="javascript:void()"><i class="la la-angle-left"></i></a></li>
											<li class="page-item "><a class="page-link" href="javascript:void()">1</a></li>
											<li class="page-item active"><a class="page-link" href="javascript:void()">2</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void()">3</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void()">4</a></li>
											<li class="page-item page-indicator"><a class="page-link" href="javascript:void()"><i class="la la-angle-right"></i></a></li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="email-center-box ml-0 ml-sm-4 ml-sm-0">
							<div role="toolbar" class="toolbar ml-1 ml-sm-0">
								<h1>Event</h1>
								<div class="btn-group mb-1">
									<button aria-expanded="false" data-toggle="modal" data-target="#aAddEvent" class="btn btn-primary px-3 light rounded" type="button"><i class="fa fa-plus"></i> Add Event</button>
									<div class="dropdown-menu">
										<a href="javascript: void(0);" class="dropdown-item" data-toggle="modal" data-target="#aAddEvent">Add Event</a>
									</div>
								</div>
							</div>
							<div class="email-list mt-3">
								<?php foreach ($event as $maq){ ?>
									<div class="message">
										<div>
											<div class="d-flex message-single">
												<div class="ml-2">
													<div class="dropdown">
														<?php if ($ma->is_verified == 'verified'){ ?>
															<button type="button" class="btn btn-warning light sharp" data-toggle="dropdown">
																<i class="fa fa-calendar-o text-warning" aria-hidden="true"></i>
															</button>
														<?php }else{ ?>
															<button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
																<i class="fa fa-calendar-o text-danger" aria-hidden="true"></i>
															</button>
														<?php } ?>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalEvent-<?=$maq->id_event?>">Detail</a>
															<?php if ($maq->is_verified == 'verified'){ ?>
																<a class="dropdown-item" href="<?=base_url('C_admin/deleteMNE/'.$maq->id_event.'/events/id_event')?>">Delete</a>
															<?php }else{ ?>
																<a class="dropdown-item" href="<?=base_url('C_admin/restoreMNE/'.$maq->id_event.'/events/id_event')?>">Restore</a>
															<?php } ?>
														</div>
													</div>
												</div>
											</div>
											<a href="#" class="col-mail col-mail-2" data-toggle="modal" data-target="#modalEvent-<?=$maq->id_event?>">
												<div class="subject"><?=$maq->judul?> - <?=date_format(date_create($maq->tanggal), 'd F Y')?></div>
												<div class="date"><?=date_format(date_create($maq->created_at), 'd/m/Y H:i')?></div>
											</a>
										</div>
									</div>

									<div class="modal fade" id="modalEvent-<?=$maq->id_event?>">
										<div class="modal-dialog" role="document">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Detail Event</h5>
														<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<h1 class="size-2 text-center"><?=$maq->judul?></h1>

														<div class="card text-black bg-warning">
															<ul class="list-group list-group-flush">
																<li class="list-group-item d-flex justify-content-center"><a href="<?=$maq->foto?>" target="_blank"><img src="<?=$maq->foto?>" width="300"></a></li>
																<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Tanggal Event :</span><strong><?=date_format(date_create($maq->tanggal), 'd F Y')?></strong></li>
																<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Deskripsi :</span></li>
																<li class="list-group-item d-flex justify-content-between text-justify"><span class="mt-0"><strong><?=$maq->deskripsi?></strong></span></li>
															</ul>
														</div>
														<div class="card text-black bg-warning p-3">
															<h1 class="size-2 text-center">Edit Event</h1>
															<form action="<?=base_url('C_admin/updateEvent/'.$maq->id_event)?>" method="POST" enctype="multipart/form-data">
																<div class="form-group">
																	<label>Judul Event</label>
																	<input type="text" class="form-control" placeholder="Judul" name="judul" value="<?=$maq->judul?>">
																</div>
																<div class="form-group">
																	<label>Tanggal Event</label>
																	<input type="datetime-local" class="form-control" name="tanggal" value="<?=str_replace(' ', 'T', $maq->tanggal)?>">
																</div>
																<div class="form-group">
																	<label>Deskripsi</label>
																	<textarea type="text" class="form-control" placeholder="Tulis deskripsi" name="deskripsi" rows="10"><?=$maq->deskripsi?></textarea>
																</div>
																<button class="btn btn-primary btn-block" type="submit">Submit</button>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								<?php } ?>
							</div>
							<!-- panel -->
							<div class="row mt-4">
								<div class="col-12 pl-3">
									<nav>
										<ul class="pagination pagination-gutter pagination-primary pagination-sm no-bg">
											<li class="page-item page-indicator"><a class="page-link" href="javascript:void()"><i class="la la-angle-left"></i></a></li>
											<li class="page-item "><a class="page-link" href="javascript:void()">1</a></li>
											<li class="page-item active"><a class="page-link" href="javascript:void()">2</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void()">3</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void()">4</a></li>
											<li class="page-item page-indicator"><a class="page-link" href="javascript:void()"><i class="la la-angle-right"></i></a></li>
										</ul>
									</nav>
								</div>
							</div>
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
