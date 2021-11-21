<?php $this->load->view('dash_mentor/head_foot/header'); ?>
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
				<form action="<?=base_url('C_mentor/addMateri')?>" method="POST" enctype="multipart/form-data">
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
								<div class="btn-group mb-1">
									<button aria-expanded="false" data-toggle="dropdown" class="btn btn-primary px-3 light dropdown-toggle" type="button">More <span
											class="caret"></span>
									</button>
									<div class="dropdown-menu">
										<a href="javascript: void(0);" class="dropdown-item" data-toggle="modal" data-target="#aAddMateri">Add Materi</a>
									</div>
								</div>
							</div>
							<div class="email-list mt-3">
								<?php foreach ($materi as $ma){ ?>
								<div class="message">
									<div>
										<div class="d-flex message-single">
											<div class="ml-2">
												<button class="border-0 bg-transparent align-middle p-0"><i
														class="fa fa-book text-warning" aria-hidden="true"></i></button>
											</div>
										</div>
										<a href="<?=$ma->url?>" target="_blank" class="col-mail col-mail-2">
											<div class="subject"><?=$ma->judul?></div>
											<div class="date"><?=date_format(date_create($ma->created_at), 'd/m/Y H:i')?></div>
										</a>
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
<!--								<div class="btn-group mb-1">-->
<!--									<button aria-expanded="false" data-toggle="dropdown" class="btn btn-primary px-3 light dropdown-toggle" type="button">More <span-->
<!--											class="caret"></span>-->
<!--									</button>-->
<!--									<div class="dropdown-menu"> <a href="javascript: void(0);" class="dropdown-item">Mark as Unread</a> <a href="javascript: void(0);" class="dropdown-item">Add to Tasks</a>-->
<!--										<a href="javascript: void(0);" class="dropdown-item">Add Star</a> <a href="javascript: void(0);" class="dropdown-item">Mute</a>-->
<!--									</div>-->
<!--								</div>-->
							</div>
							<div class="email-list mt-3">
								<?php foreach ($news as $ma){ ?>
									<div class="message">
										<div>
											<div class="d-flex message-single">
												<div class="ml-2">
													<button class="border-0 bg-transparent align-middle p-0"><i
															class="fa fa-newspaper-o text-info" aria-hidden="true"></i></button>
												</div>
											</div>
											<a href="<?=$ma->link?>" target="_blank" class="col-mail col-mail-2">
												<div class="subject"><?=$ma->judul?></div>
												<div class="date"><?=date_format(date_create($ma->created_at), 'd/m/Y H:i')?></div>
											</a>
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
<!--								<div class="btn-group mb-1">-->
<!--									<button aria-expanded="false" data-toggle="dropdown" class="btn btn-primary px-3 light dropdown-toggle" type="button">More <span-->
<!--											class="caret"></span>-->
<!--									</button>-->
<!--									<div class="dropdown-menu"> <a href="javascript: void(0);" class="dropdown-item">Mark as Unread</a> <a href="javascript: void(0);" class="dropdown-item">Add to Tasks</a>-->
<!--										<a href="javascript: void(0);" class="dropdown-item">Add Star</a> <a href="javascript: void(0);" class="dropdown-item">Mute</a>-->
<!--									</div>-->
<!--								</div>-->
							</div>
							<div class="email-list mt-3">
								<?php foreach ($event as $ma){ ?>
									<div class="message">
										<div>
											<div class="d-flex message-single">
												<div class="ml-2">
													<button class="border-0 bg-transparent align-middle p-0"><i
															class="fa fa-calendar-o text-warning" aria-hidden="true"></i></button>
												</div>
											</div>
											<a href="#" class="col-mail col-mail-2" data-toggle="modal" data-target="#modal-<?=$ma->id_event?>">
												<div class="subject"><?=$ma->judul?> - <?=date_format(date_create($ma->tanggal), 'd F Y')?></div>
												<div class="date"><?=date_format(date_create($ma->created_at), 'd/m/Y H:i')?></div>
											</a>
										</div>
									</div>
									<div class="modal fade" id="modal-<?=$ma->id_event?>">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Detail Progress</h5>
												<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<h1 class="size-2 text-center"><?=$ma->judul?></h1>

												<div class="card text-black bg-warning">
													<ul class="list-group list-group-flush">
														<li class="list-group-item d-flex justify-content-center"><a href="<?=$ma->foto?>" target="_blank"><img src="<?=$ma->foto?>" width="300"></a></li>
														<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Tanggal Event :</span><strong><?=date_format(date_create($ma->tanggal), 'd F Y')?></strong></li>
														<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Deskripsi :</span></li>
														<li class="list-group-item d-flex justify-content-between text-justify"><span class="mt-0"><strong><?=$ma->deskripsi?></strong></span></li>
													</ul>
												</div>
												<button class="btn btn-warning btn-block" data-dismiss="modal">Tutup</button>
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

<?php $this->load->view('dash_mentor/head_foot/footer'); ?>
