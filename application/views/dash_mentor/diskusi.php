<?php $this->load->view('dash_mentor/head_foot/header'); ?>
<!-- Modal -->
<div class="modal fade" id="aAddDiscussion">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Buat Diskusi</h5>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?=base_url('C_mentor/proCreateDiscussion')?>" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>Judul Topik</label>
						<input type="text" class="form-control" placeholder="Judul" name="judul">
					</div>
					<div class="form-group">
						<label>Isi</label>
						<textarea type="text" class="form-control" placeholder="Tulis bahasan anda..." rows="10" name="isi"></textarea>
					</div>
					<button class="btn btn-primary" type="submit">Post</button>
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
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Discussion</a></li>
			</ol>
		</div>
		<!-- row -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-9 col-xxl-8">
					<div class="row">
						<div class="col-xl-12">
							<div class="card">
								<div class="card-header d-block pb-0 border-0">
									<div class="d-sm-flex flex-wrap align-items-center d-block mb-md-3 mb-0">
										<div class="mr-auto pr-3 mb-3">
											<h4 class="text-black fs-20">Discussion</h4>
											<p class="fs-13 mb-0 text-black">Forum diskusi Tim Startup</p>
										</div>
										<div class="input-group mb-3 diet-search mr-4">
											<input type="text" class="form-control" placeholder="Search discussion topics">
											<div class="input-group-append">
												<button class="btn btn-primary" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
											</div>
										</div>
										<a href="javascript:void(0);" class="btn rounded  btn-primary mb-3">
											<svg class="mr-2" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M3.31615 6H14.4744C14.4744 6.53043 14.6882 7.03914 15.0686 7.41421C15.4491 7.78929 15.9651 8 16.5032 8H18.532C19.07 8 19.5861 7.78929 19.9665 7.41421C20.347 7.03914 20.5607 6.53043 20.5607 6H21.5751C21.8442 6 22.1022 5.89464 22.2924 5.70711C22.4827 5.51957 22.5895 5.26522 22.5895 5C22.5895 4.73478 22.4827 4.48043 22.2924 4.29289C22.1022 4.10536 21.8442 4 21.5751 4H20.5607C20.5607 3.46957 20.347 2.96086 19.9665 2.58579C19.5861 2.21071 19.07 2 18.532 2H16.5032C15.9651 2 15.4491 2.21071 15.0686 2.58579C14.6882 2.96086 14.4744 3.46957 14.4744 4H3.31615C3.04711 4 2.7891 4.10536 2.59887 4.29289C2.40863 4.48043 2.30176 4.73478 2.30176 5C2.30176 5.26522 2.40863 5.51957 2.59887 5.70711C2.7891 5.89464 3.04711 6 3.31615 6ZM16.5032 4H18.532V5V6H16.5032V4ZM21.5751 11H12.4456C12.4456 10.4696 12.2319 9.96086 11.8514 9.58579C11.471 9.21071 10.9549 9 10.4169 9H8.38809C7.85002 9 7.334 9.21071 6.95353 9.58579C6.57306 9.96086 6.35931 10.4696 6.35931 11H3.31615C3.04711 11 2.7891 11.1054 2.59887 11.2929C2.40863 11.4804 2.30176 11.7348 2.30176 12C2.30176 12.2652 2.40863 12.5196 2.59887 12.7071C2.7891 12.8946 3.04711 13 3.31615 13H6.35931C6.35931 13.5304 6.57306 14.0391 6.95353 14.4142C7.334 14.7893 7.85002 15 8.38809 15H10.4169C10.9549 15 11.471 14.7893 11.8514 14.4142C12.2319 14.0391 12.4456 13.5304 12.4456 13H21.5751C21.8442 13 22.1022 12.8946 22.2924 12.7071C22.4827 12.5196 22.5895 12.2652 22.5895 12C22.5895 11.7348 22.4827 11.4804 22.2924 11.2929C22.1022 11.1054 21.8442 11 21.5751 11ZM8.38809 13V11H10.4169V12V13H8.38809ZM21.5751 18H18.532C18.532 17.4696 18.3182 16.9609 17.9378 16.5858C17.5573 16.2107 17.0413 16 16.5032 16H14.4744C13.9364 16 13.4203 16.2107 13.0399 16.5858C12.6594 16.9609 12.4456 17.4696 12.4456 18H3.31615C3.04711 18 2.7891 18.1054 2.59887 18.2929C2.40863 18.4804 2.30176 18.7348 2.30176 19C2.30176 19.2652 2.40863 19.5196 2.59887 19.7071C2.7891 19.8946 3.04711 20 3.31615 20H12.4456C12.4456 20.5304 12.6594 21.0391 13.0399 21.4142C13.4203 21.7893 13.9364 22 14.4744 22H16.5032C17.0413 22 17.5573 21.7893 17.9378 21.4142C18.3182 21.0391 18.532 20.5304 18.532 20H21.5751C21.8442 20 22.1022 19.8946 22.2924 19.7071C22.4827 19.5196 22.5895 19.2652 22.5895 19C22.5895 18.7348 22.4827 18.4804 22.2924 18.2929C22.1022 18.1054 21.8442 18 21.5751 18ZM14.4744 20V18H16.5032V19V20H14.4744Z" fill="#fff"></path>
											</svg>Filter
										</a>
									</div>
									<!--								<a href="javascript:void(0)" class="btn btn-warning mr-3 mb-2">Recomended for you</a>-->
									<!--								<a href="javascript:void(0)" class="btn btn-warning light mr-3 mb-2">Salad</a>-->
									<!--								<a href="javascript:void(0)" class="btn btn-warning light mr-3 mb-2">Breakfast</a>-->
									<!--								<a href="javascript:void(0)" class="btn btn-warning light mb-2">Lunch</a>-->
								</div>
								<div class="card-body loadmore-content dz-scroll height750" id="DietMenusContent">
									<?php foreach ($diskusi as $dsk){ ?>
										<div class="media border-bottom mb-3 pb-3 d-lg-flex d-block menu-list">
											<a href="<?=base_url('detail-discussion-mentor/'.$dsk[0]->id_diskusi)?>">
												<img class="rounded mr-3 mb-md-0 mb-3" src="images/menus/5.png" alt="" width="120">
												<svg class="rounded mr-3 mb-md-0 mb-3" xmlns="http://www.w3.org/2000/svg" width="120" viewBox="0 0 20 20" fill="currentColor">
													<path fill-rule="evenodd" d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z" clip-rule="evenodd" />
												</svg>
											</a>
											<div class="media-body col-lg-8 pl-0">
												<h6 class="fs-16 font-w600"><a href="<?=base_url('detail-discussion-mentor/'.$dsk[0]->id_diskusi)?>" class="text-black"><?=$dsk[0]->judul?></a></h6>
												<p class="fs-14"><?=$dsk[0]->isi?></p>
												<div class="d-flex flex-wrap align-items-center">
													<div class="d-flex mb-sm-2 mb-3 pr-3 mr-auto align-items-center">
														<img src="<?=$dsk[0]->foto?>" alt="" width="30" class="rounded-circle mr-2">
														<span class="fs-14 text-black font-w500"><?=$dsk[0]->nama?></span>
													</div>
													<ul class="d-flex flex-wrap mb-sm-0 mb-2">
														<li class="mb-2 mr-4 text-nowrap"><i class="las la-clock scale5 mr-2"></i><span class="fs-14 text-black text-nowrap font-w500"><?=date_format(date_create($dsk[0]->created_at), 'd F Y')?> </span></li>
														<li class="mb-2 mr-4 text-nowrap"><i class="las la-reply-all scale5 mr-2"></i><span class="text-nowrap fs-14 text-black font-w500"><?=$dsk['jml']?> balasan</span></li>
													</ul>
												</div>
											</div>
										</div>
									<?php } ?>
								</div>
								<!--							<div class="card-footer style-1 text-center border-0 pt-0 pb-4">-->
								<!--								<a class="text-primary dz-load-more fa fa-chevron-down" id="DietMenus" href="javascript:void(0);" rel="ajax/food-menu-list.html">-->
								<!--								</a>-->
								<!--							</div>-->
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-xxl-4">
					<div class="row">
						<div class="col-xl-12 col-md-6">
							<div class="card">
								<div class="card-header border-0">
									<div class="mr-auto pr-3">
										<h4 class="text-black fs-20">Buat diskusi</h4>
										<p class="fs-13 mb-0">Buat diskusi untuk membahas hal baru</p>
									</div>
									<a href="javascript:void(0);" data-toggle="modal" data-target="#aAddDiscussion" class="plus-icon text-white rounded bg-primary"><i class="las la-plus scale-2"></i></a>
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
