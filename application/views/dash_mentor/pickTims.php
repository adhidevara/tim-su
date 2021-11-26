<?php $this->load->view('dash_mentor/head_foot/header'); ?>

<!--**********************************
	Content body start
***********************************-->
<div class="content-body">
	<div class="container-fluid">
		<div class="page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?=base_url('dashboard-mentor')?>">Dashboard</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Pick Tim</a></li>
			</ol>
		</div>
		<div class="page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Tim Yang di Mentori</a></li>
			</ol>
		</div>
		<div class="row">
			<?php foreach ($myTim as $at){ ?>
				<div class="col-lg-12 col-xl-6">
					<div class="card">
						<div class="card-body">
							<div class="row m-b-30">
								<div class="col-md-5 col-xxl-12">
									<div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
										<div class="new-arrivals-img-contnent">
											<img class="img-fluid" src="<?=$at->foto?>" alt="">
										</div>
									</div>
								</div>
								<div class="col-md-7 col-xxl-12">
									<div class="new-arrival-content position-relative">
										<h4><a href="ecom-product-detail.html"><?=$at->nama?></a> <i class="fa fa-check-circle text-success"></i></h4>
										<p>Email: <span class="item"> <?=$at->email?></span></p>
										<p>No.Telp: <span class="item"><?=$at->notelp?></span> </p>
										<p>Ketua: <span class="item"><?=$at->nama_ketua?> (<?=$at->email_ketua." / ".$at->notelp_ketua?>)</span></p>
										<p class="text-content"><?=$at->intro?></p>
										<a href="<?=base_url('C_mentor/unPickTim/'.$at->id_tim)?>" class="btn btn-danger btn-block mt-3">Unpick Tim</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			<!-- review -->
			<div class="modal fade" id="reviewModal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Review</h5>
							<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form>
								<div class="text-center mb-4">
									<img class="img-fluid rounded" width="78" src="./images/avatar/1.jpg" alt="DexignZone">
								</div>
								<div class="form-group">
									<div class="rating-widget mb-4 text-center">
										<!-- Rating Stars Box -->
										<div class="rating-stars">
											<ul id="stars">
												<li class="star" title="Poor" data-value="1">
													<i class="fa fa-star fa-fw"></i>
												</li>
												<li class="star" title="Fair" data-value="2">
													<i class="fa fa-star fa-fw"></i>
												</li>
												<li class="star" title="Good" data-value="3">
													<i class="fa fa-star fa-fw"></i>
												</li>
												<li class="star" title="Excellent" data-value="4">
													<i class="fa fa-star fa-fw"></i>
												</li>
												<li class="star" title="WOW!!!" data-value="5">
													<i class="fa fa-star fa-fw"></i>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="form-group">
									<textarea class="form-control" placeholder="Comment" rows="5"></textarea>
								</div>
								<button class="btn btn-success btn-block">RATE</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Tim Lainnya</a></li>
			</ol>
		</div>
		<div class="row">
			<?php foreach ($allTim as $at){ ?>
			<div class="col-lg-12 col-xl-6">
				<div class="card">
					<div class="card-body">
						<div class="row m-b-30">
							<div class="col-md-5 col-xxl-12">
								<div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
									<div class="new-arrivals-img-contnent">
										<img class="img-fluid" src="<?=$at->foto?>" alt="">
									</div>
								</div>
							</div>
							<div class="col-md-7 col-xxl-12">
								<div class="new-arrival-content position-relative">
									<h4><a href="ecom-product-detail.html"><?=$at->nama?></a> <i class="fa fa-check-circle text-success"></i></h4>
									<p>Email: <span class="item"> <?=$at->email?></span></p>
									<p>No.Telp: <span class="item"><?=$at->notelp?></span> </p>
									<p>Ketua: <span class="item"><?=$at->nama_ketua?> (<?=$at->email_ketua." / ".$at->notelp_ketua?>)</span></p>
									<p class="text-content"><?=$at->intro?></p>
									<a href="<?=base_url('C_mentor/pickTim/'.$at->id_tim)?>" class="btn btn-primary btn-block mt-3">Pick Tim</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
			<!-- review -->
			<div class="modal fade" id="reviewModal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Review</h5>
							<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form>
								<div class="text-center mb-4">
									<img class="img-fluid rounded" width="78" src="./images/avatar/1.jpg" alt="DexignZone">
								</div>
								<div class="form-group">
									<div class="rating-widget mb-4 text-center">
										<!-- Rating Stars Box -->
										<div class="rating-stars">
											<ul id="stars">
												<li class="star" title="Poor" data-value="1">
													<i class="fa fa-star fa-fw"></i>
												</li>
												<li class="star" title="Fair" data-value="2">
													<i class="fa fa-star fa-fw"></i>
												</li>
												<li class="star" title="Good" data-value="3">
													<i class="fa fa-star fa-fw"></i>
												</li>
												<li class="star" title="Excellent" data-value="4">
													<i class="fa fa-star fa-fw"></i>
												</li>
												<li class="star" title="WOW!!!" data-value="5">
													<i class="fa fa-star fa-fw"></i>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="form-group">
									<textarea class="form-control" placeholder="Comment" rows="5"></textarea>
								</div>
								<button class="btn btn-success btn-block">RATE</button>
							</form>
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
