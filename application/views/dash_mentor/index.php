<?php $this->load->view('dash_mentor/head_foot/header'); ?>

	<!--**********************************
		Content body start
	***********************************-->
	<div class="content-body">
		<!-- row -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-8 col-xxl-12">
					<div class="row">
						<a href="<?=base_url('pick-tim')?>" class="col-sm-12">
							<div class="card avtivity-card">
								<div class="card-body">
									<div class="media align-items-center">
											<span class="activity-icon bgl-success mr-md-4 mr-3">
												<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 20 20" fill="#27bc48">
												  <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
												</svg>
											</span>
										<div class="media-body">
											<p class="fs-14 mb-2">Total Tim Yang di Mentori</p>
											<span class="title text-black font-w600"><?=$getJmlTim?> Tim</span>
										</div>
									</div>
									<div class="progress" style="height:5px;">
										<div class="progress-bar bg-success" style="width: 100%; height:5px;" role="progressbar">
											<span class="sr-only"></span>
										</div>
									</div>
								</div>
								<div class="effect bg-success"></div>
							</div>
						</a>
						<a href="<?=base_url('review-tasks')?>" class="col-sm-6">
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
											<p class="fs-14 mb-2">Jumlah Task Perlu di Review</p>
											<span class="title text-black font-w600"><?=$getTaskUnreviewed?> Tasks</span>
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
						</a>
						<a href="<?=base_url('review-tasks')?>" class="col-sm-6">
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
											<p class="fs-14 mb-2">Jumlah Task Selesai di Review</p>
											<span class="title text-black font-w600"><?=$getTaskReviewed?> Tasks</span>
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
						</a>
						<a href="<?=base_url('cek-progress')?>" class="col-sm-6">
							<div class="card avtivity-card">
								<div class="card-body">
									<div class="media align-items-center">
											<span class="activity-icon bgl-warning  mr-md-4 mr-3">
												<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 20 20" fill="#ffbc11">
												  <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
												</svg>
											</span>
										<div class="media-body">
											<p class="fs-14 mb-2">Jumlah Progress Perlu di Cek</p>
											<span class="title text-black font-w600"><?=$getProgressNeedChecked?> Progress</span>
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
						</a>
						<a href="<?=base_url('cek-progress')?>" class="col-sm-6">
							<div class="card avtivity-card">
								<div class="card-body">
									<div class="media align-items-center">
											<span class="activity-icon bgl-info  mr-md-4 mr-3">
												<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 20 20" fill="#1ea7c5">
												  <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
												</svg>
											</span>
										<div class="media-body">
											<p class="fs-14 mb-2">Jumlah Progress Telah di Cek</p>
											<span class="title text-black font-w600"><?=$getProgressChecked?> Progress</span>
										</div>
									</div>
									<div class="progress" style="height:5px;">
										<div class="progress-bar bg-info" style="width: 100%; height:5px;" role="progressbar">
											<span class="sr-only">4 Progress Complete</span>
										</div>
									</div>
								</div>
								<div class="effect bg-info"></div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-xl-4 col-xxl-12">
					<div class="card">
						<div class="card-body p-4">
							<h4 class="card-intro-title mb-4">Tim yang di Mentori</h4>
							<div class="bootstrap-carousel">
								<div data-ride="carousel" class="carousel slide" id="carouselExampleCaptions">
									<ol class="carousel-indicators">
										<?php $i=0; foreach ($getTim as $gt){ if ($gt == $getTim[0]){ ?>
										<li class="active" data-slide-to="0" data-target="#carouselExampleCaptions"></li>
										<?php }else{ $i += 1; ?>
										<li class="" data-slide-to="<?=$i?>" data-target="#carouselExampleCaptions"></li>
										<?php }} ?>
									</ol>
									<div class="carousel-inner">
										<?php foreach ($getTim as $gt){ if ($gt == $getTim[0]){ ?>
										<div class="carousel-item active">
										<?php }else{ ?>
										<div class="carousel-item">
										<?php } ?>
											<img class="d-block w-100" src="<?=$gt->foto?>" alt="">
											<div class="carousel-caption d-none d-md-block">
												<h5><?=$gt->nama?></h5>
												<p><?=$gt->email?> - <?=$gt->nama_ketua?> (<?=$gt->email_ketua?>)</p>
											</div>
										</div>
										<?php } ?>
									</div><a data-slide="prev" href="#carouselExampleCaptions" class="carousel-control-prev"><span
											class="carousel-control-prev-icon"></span> <span
											class="sr-only">Previous</span>
									</a><a data-slide="next" href="#carouselExampleCaptions" class="carousel-control-next"><span
											class="carousel-control-next-icon"></span> <span
											class="sr-only">Next</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>

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
								<div class="card-body loadmore-content height750 dz-scroll pt-0" id="FeaturedMenusContent">
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

<?php $this->load->view('dash_mentor/head_foot/footer'); ?>
