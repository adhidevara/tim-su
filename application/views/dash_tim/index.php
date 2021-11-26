<?php $this->load->view('dash_tim/head_foot/header'); ?>

	<!--**********************************
		Content body start
	***********************************-->
	<div class="content-body">
		<!-- row -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-8 col-xxl-12">
					<div class="row">
						<div class="col-sm-12">
							<div class="card avtivity-card">
								<div class="card-body">
									<div class="media align-items-center">
											<span class="activity-icon bgl-success mr-md-4 mr-3">
												<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 20 20" fill="#27bc48">
												  <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
												</svg>
											</span>
										<div class="media-body">
<!--											--><?php //print_r($getMonthlyProgress); ?>
											<p class="fs-14 mb-2">Progress Bulan Ini <b>(<?=date_format(date_create($getMonthlyProgress[0]->bulan), 'F')?>)</b></p>
											<span class="title text-black font-w600"><?=$getMonthlyProgress[0]->jml_presentase_progress?>% / <small><?=$getMonthlyProgress[0]->jml_presentase_target?>%</small></span>
										</div>
									</div>
									<div class="progress" style="height:5px;">
										<div class="progress-bar bg-success" style="width: <?=$getMonthlyProgress[0]->jml_presentase_progress?>%; height:5px;" role="progressbar">
											<span class="sr-only"><?=$getMonthlyProgress[0]->jml_presentase_progress?>% Complete</span>
										</div>
									</div>
								</div>
								<div class="effect bg-success"></div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card avtivity-card">
								<div class="card-body">
									<div class="media align-items-center">
											<span class="activity-icon bgl-secondary  mr-md-4 mr-3">
												<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 20 20" fill="#a02cfa">
												  <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
												  <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd" />
												</svg>
											</span>
										<div class="media-body">
											<p class="fs-14 mb-2">Semua Jumlah Task</p>
											<span class="title text-black font-w600"><?=$cntAllTask[0]->jmlTask?> Tasks</span>
										</div>
									</div>
									<div class="progress" style="height:5px;">
										<div class="progress-bar bg-secondary" style="width: 100%; height:5px;" role="progressbar">
											<span class="sr-only">100 Tasks</span>
										</div>
									</div>
								</div>
								<div class="effect bg-secondary"></div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card avtivity-card">
								<div class="card-body">
									<div class="media align-items-center">
											<span class="activity-icon bgl-danger mr-md-4 mr-3">
												<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 20 20" fill="#f94687">
												  <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
												  <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
												</svg>
											</span>
										<div class="media-body">
											<p class="fs-14 mb-2">Jumlah Task Selesai</p>
											<span class="title text-black font-w600"><?=$jmlTaskSelesai[0]->jmlTask?> Tasks</span>
										</div>
									</div>
									<div class="progress" style="height:5px;">
										<div class="progress-bar bg-danger" style="width: 100%; height:5px;" role="progressbar">
											<span class="sr-only">23 Tasks Complete</span>
										</div>
									</div>
								</div>
								<div class="effect bg-danger"></div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="card avtivity-card">
								<div class="card-body">
									<div class="media align-items-center">
											<span class="activity-icon bgl-warning  mr-md-4 mr-3">
												<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 20 20" fill="#ffbc11">
												  <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
												</svg>
											</span>
										<div class="media-body">
											<p class="fs-14 mb-2">Jumlah Progress Selesai</p>
											<span class="title text-black font-w600"><?=$getProgressSelesai[0]->jmlProgressSelesai?> Progress</span>
										</div>
									</div>
									<div class="progress" style="height:5px;">
										<div class="progress-bar bg-warning" style="width: 100%; height:5px;" role="progressbar">
											<span class="sr-only">4 Progress Complete</span>
										</div>
									</div>
								</div>
								<div class="effect bg-warning"></div>
							</div>
						</div>
					</div>
				</div>
				<?php if (count($getMyMentor) !== 0){ ?>
				<div class="col-xl-4 col-xxl-12">
					<div class="card overflow-hidden">
						<div class="card-body">
							<div class="text-center">
								<div class="profile-photo">
									<img src="<?=$getMyMentor[0]->foto?>" width="100" class="img-fluid rounded-circle" alt="">
								</div>
								<h3 class="mt-4 mb-1"><?=$getMyMentor[0]->nama?></h3>
								<p class="text-muted">MNTR-<?=$getMyMentor[0]->id_mentor?></p>
								<a class="btn btn-outline-primary btn-rounded mt-3 px-5" href="javascript:void()">My Mentor</a>
							</div>
						</div>

						<div class="card-footer pt-0 pb-0 text-center">
							<div class="row">
								<div class="col-6 pt-3 pb-3 border-right">
									<h3 class="fs-12 mb-1"><?=$getMyMentor[0]->email?></h3><span>Email</span>
								</div>
								<div class="col-6 pt-3 pb-3">
									<h3 class="fs-12 mb-1"><?=$getMyMentor[0]->no_telp?></h3><span>Phone</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				<div class="col-xl-9 col-xxl-12">
					<div class="row">
						<div class="col-xl-12">
							<div class="card featuredMenu">
								<div class="card-header border-0">
									<h4 class="text-black font-w600 fs-20 mb-0">News</h4>
								</div>
								<?php foreach ($getNews as $news){ ?>
								<div class="card-body loadmore-content dz-scroll pt-0" id="FeaturedMenusContent">
									<div class="media mb-4">
										<img src="<?=$news->foto?>" width="85" alt="" class="rounded mr-3">
										<div class="media-body">
											<h5><a href="<?=$news->link?>" class="text-black fs-16"><?=$news->judul?></a></h5>
											<span class="fs-14 text-primary font-w500"><?=$news->author?></span>
										</div>
									</div>
									<ul class="d-flex flex-wrap pb-2 border-bottom mb-3 justify-content-between">
										<li class="mr-3 mb-2"><i class="las la-calendar scale5 mr-3"></i><span class="fs-14 text-black"><?=date_format(date_create($news->created_at), "d F Y")?> </span></li>
										<li class="mb-2"><i class="flaticon-381-newspaper mr-3 scale5 text-warning" aria-hidden="true"></i><span class="fs-14 text-black font-w500">News</span></li>
									</ul>
								</div>
								<?php } ?>
<!--								<div class="card-footer style-1 text-center border-0 pt-0 pb-4">-->
<!--									<a class="text-primary dz-load-more fa fa-chevron-down" id="FeaturedMenus" href="javascript:void(0);" rel="ajax/featured-menu-list.html">-->
<!--									</a>-->
<!--								</div>-->
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-xxl-12">
					<div class="row">
						<div class="col-xl-12">
							<div class="card featuredMenu">
								<div class="card-header border-0">
									<h4 class="text-black font-w600 fs-20 mb-0">Event & Materi</h4>
								</div>
								<div class="card-body loadmore-content dz-scroll pt-0" id="FeaturedMenusContent">
									<?php foreach ($getEvent as $dat){ ?>
									<div class="media mb-4">
										<img src="<?=$dat->foto?>" width="85" alt="" class="rounded mr-3">
										<div class="media-body">
											<h5><a href="#" class="text-black fs-16"><?=$dat->judul?></a></h5>
											<span class="fs-14 text-primary font-w500"><?=$dat->author?></span>
										</div>
									</div>
									<ul class="d-flex flex-wrap pb-2 border-bottom mb-3 justify-content-between">
										<li class="mr-3 mb-2"><i class="las la-calendar scale5 mr-3"></i><span class="fs-14 text-black"><?=date_format(date_create($dat->tanggal), "d F Y")?> </span></li>
										<li class="mb-2"><i class="fa fa-calendar-o mr-3 scale5 text-warning" aria-hidden="true"></i><span class="fs-14 text-black font-w500">Event</span></li>
									</ul>
									<?php } foreach ($getMateri as $datm){ ?>
									<div class="media mb-4">
										<img src="<?=$datm->foto?>" width="85" alt="" class="rounded mr-3">
										<div class="media-body">
											<h5><a href="#" class="text-black fs-16"><?=$datm->judul?></a></h5>
											<span class="fs-14 text-primary font-w500"><?=$datm->author?></span>
										</div>
									</div>
									<ul class="d-flex flex-wrap pb-2 border-bottom mb-3 justify-content-between">
										<li class="mr-3 mb-2"><i class="las la-link scale5 mr-3"></i><span class="fs-14 text-black"><a href="<?=$datm->url?>" target="_blank">View & Download </a></span></li>
										<li class="mb-2"><i class="fa fa-book mr-3 scale5 text-warning" aria-hidden="true"></i><span class="fs-14 text-black font-w500">Materi</span></li>
									</ul>
									<?php } ?>
								</div>
<!--								<div class="card-footer style-1 text-center border-0 pt-0 pb-4">-->
<!--									<a class="text-primary dz-load-more fa fa-chevron-down" id="FeaturedMenus" href="javascript:void(0);" rel="ajax/featured-menu-list.html">-->
<!--									</a>-->
<!--								</div>-->
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

<?php $this->load->view('dash_tim/head_foot/footer'); ?>
