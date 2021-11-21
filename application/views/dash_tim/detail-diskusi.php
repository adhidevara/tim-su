<?php $this->load->view('dash_tim/head_foot/header'); ?>

<!--**********************************
	Content body start
***********************************-->
<div class="content-body">
	<div class="container-fluid">
		<div class="page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?=base_url('discussion')?>">Discussion</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0)"><?=$diskusi[0][0]->judul?></a></li>
			</ol>
		</div>
		<!-- row -->
		<div class="row">
			<div class="col-lg-12">
				<div class="profile card card-body px-3 pt-3 pb-0">
					<div class="profile-head">
						<div class="photo-content">
							<img src="https://www.epigroup.com/wp-content/uploads/2019/03/pic-bn_small-nature-1600x451.jpg" class="cover-photo"></img>
						</div>
						<div class="profile-info">
							<div class="profile-photo">
								<img src="<?=$diskusi[0][0]->foto?>" class="img-fluid rounded-circle" alt="">
							</div>
							<div class="profile-details">
								<div class="profile-name px-3 pt-2">
									<h4 class="text-primary mb-0"><?=$diskusi[0][0]->nama?></h4>
									<p><?=$diskusi[0][0]->role?></p>
								</div>
								<div class="profile-email px-2 pt-2">
									<h4 class="text-muted mb-0"><?=$diskusi[0][0]->email?></h4>
									<p>Email</p>
								</div>
								<div class="dropdown ml-auto">
									<a href="#" class="btn btn-primary light sharp" data-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i> View profile</li>
										<li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i> Add to close friends</li>
										<li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i> Add to group</li>
										<li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i> Block</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-4">
				<div class="card">
					<div class="card-body">

						<div class="profile-news">
							<h5 class="text-primary d-inline">Balasan</h5>
							<?php foreach ($detailDiskusi as $dd){ ?>
							<div class="media pt-3 pb-3">
								<img src="<?=$dd->foto?>" alt="image" class="mr-3 rounded" width="75">
								<div class="media-body">
									<h5 class="m-b-5"><a href="#" class="text-black"><?=$dd->nama?></a></h5>
									<p class="mb-0 text-justify"><?=$dd->isi?></p>
								</div>
								<small>(<?=$dd->role?>)</small>
							</div>
							<small><?=date_format(date_create($dd->created_at), 'd/m/Y H:i')?></small>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-8">
				<div class="card">
					<div class="card-body">
						<div class="post-details">
							<h3 class="mb-2 text-black"><?=$diskusi[0][0]->judul?></h3>
							<ul class="mb-4 post-meta d-flex flex-wrap">
								<li class="post-author mr-3">By <?=$diskusi[0][0]->nama?></li>
								<li class="post-date mr-3"><i class="fa fa-calender"></i><?=date_format(date_create($diskusi[0][0]->created_at), 'd F Y')?></li>
								<li class="post-comment"><i class="fa fa-comments-o"></i> <?=$diskusi[0]['jml']?> balasan</li>
							</ul>

							<p><?=$diskusi[0][0]->isi?></p>

							<div class="comment-respond" id="respond">
								<h4 class="comment-reply-title text-primary mb-3 mt-3" id="reply-title">Tinggalkan Balasan </h4>
								<form class="comment-form" id="commentform" method="post" action="<?=base_url('C_tim/replyDiskusi/'.$diskusi[0][0]->id_diskusi)?>">
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<label for="comment" class="text-black font-w600">Balas</label>
												<textarea rows="8" class="form-control" name="balas" placeholder="Tuliskan balasan..." id="comment"></textarea>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<input type="submit" value="Kirim" class="submit btn btn-primary" id="submit" name="submit">
											</div>
										</div>
									</div>
								</form>
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

<?php $this->load->view('dash_tim/head_foot/footer'); ?>
