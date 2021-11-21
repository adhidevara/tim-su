<?php $this->load->view('dash_mentor/head_foot/header'); ?>

<!--**********************************
	Content body start
***********************************-->
<div class="content-body">
	<div class="container-fluid">
		<div class="page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Review Tasks</a></li>
			</ol>
		</div>
		<div class="row">
			<?php foreach ($tasks as $tk){ ?>
			<div class="col-lg-12 col-xl-6">
				<div class="card">
					<div class="card-body">
						<div class="row m-b-30">
							<div class="col-md-5 col-xxl-12">
								<div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
									<div class="new-arrivals-img-contnent">
										<?php if ($tk->review == "Belum Direview"){ ?>
											<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#0b2a97">
												<path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
												<path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
											</svg>
										<?php } elseif ($tk->review == "Sudah Direview") { ?>
											<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#0b2a97">
												<path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
												<path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
											</svg>
										<?php } elseif ($tk->review == "Belum Dijawab") { ?>
											<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#F94687">
												<path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
												<path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11h4" />
											</svg>
										<?php } elseif ($tk->review == "Revisi") { ?>
											<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#F94687">
												<path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
											</svg>
										<?php } ?>
									</div>
								</div>
							</div>
							<div class="col-md-7 col-xxl-12">
								<div class="new-arrival-content position-relative">
									<h4><a href="ecom-product-detail.html"><?=$tk->judul?></a></h4>
									<div class="comment-review star-rating">
										<!--										<ul>-->
										<!--											<li><i class="fa fa-star"></i></li>-->
										<!--											<li><i class="fa fa-star"></i></li>-->
										<!--											<li><i class="fa fa-star"></i></li>-->
										<!--											<li><i class="fa fa-star-half-empty"></i></li>-->
										<!--											<li><i class="fa fa-star-half-empty"></i></li>-->
										<!--										</ul>-->
										<?php if ($tk->review == "Belum Direview"){ ?>
											<span class="review-text">(Terjawab) / </span><a class="product-review" href="#" data-toggle="modal" data-target="#jawabanModal-<?=$tk->id_task?>">Update Review</a>
										<?php } elseif ($tk->review == "Sudah Direview") { ?>
											<span class="review-text">(Telah Direview) / </span><a class="product-review" href="#" ">Selesai</a>
											<p class="price">DONE</p>
										<?php } elseif ($tk->review == "Belum Dijawab") { ?>
											<span class="review-text">(Perlu Jawaban) / </span><a class="product-review" href="#">Menunggu Jawaban</a>
										<?php } else { ?>
											<span class="review-text">(Perlu Jawaban) / </span><a class="product-review" href="#">Menunggu Jawaban</a>
										<?php } ?>
									</div>

									<?php if ($tk->review == "Belum Direview"){ ?>
										<p>Jawaban: <span class="item"><?=$tk->jawaban?></span> <i class="fa fa-check-circle text-success"></i></p>
										<p>Review: <span class="item">(Belum Direview)</span></p>
										<?php if ($tk->attachment == "#"){ ?>
											<p>Attachment: <span class="item"> <a href="<?=$tk->attachment?>" class="product-review">(None)</a></span></p>
										<?php } else { ?>
											<p>Attachment: <span class="item"> <a href="<?=$tk->attachment?>" target="_blank" class="product-review">View & Download</a> <i class="fa fa-check-circle text-success"></i></span></p>
										<?php } ?>
									<?php } elseif ($tk->review == "Sudah Direview") { ?>
										<p>Jawaban: <span class="item"><?=$tk->jawaban?></span> <i class="fa fa-check-circle text-success"></i></p>
										<p>Review: <span class="item">(<?=$tk->review?>)</span> <i class="fa fa-check-circle text-success"></i></p>
										<?php if ($tk->attachment == "#"){ ?>
											<p>Attachment: <span class="item"> <a href="<?=$tk->attachment?>" class="product-review">(None)</a></span></p>
										<?php } else { ?>
											<p>Attachment: <span class="item"> <a href="<?=$tk->attachment?>" target="_blank" class="product-review">View & Download</a> <i class="fa fa-check-circle text-success"></i></span></p>
										<?php } ?>
									<?php } elseif ($tk->review == "Belum Dijawab") { ?>
										<p>Jawaban: <span class="item">(Tidak Ada)</span> </p>
										<p>Review: <span class="item">(Belum Direview)</span></p>
										<?php if ($tk->attachment == "#"){ ?>
											<p>Attachment: <span class="item"> <a href="<?=$tk->attachment?>" class="product-review">(None)</a></span></p>
										<?php } else { ?>
											<p>Attachment: <span class="item"> <a href="<?=$tk->attachment?>" target="_blank" class="product-review">View & Download</a> <i class="fa fa-check-circle text-success"></i></span></p>
										<?php } ?>
									<?php } else { ?>
										<p>Jawaban: <span class="item"><?=$tk->jawaban?></span> </p>
										<p>Review: <span class="item">(Revisi)</span></p>
										<?php if ($tk->attachment == "#"){ ?>
											<p>Attachment: <span class="item"> <a href="<?=$tk->attachment?>" class="product-review">(None)</a></span></p>
										<?php } else { ?>
											<p>Attachment: <span class="item"> <a href="<?=$tk->attachment?>" target="_blank" class="product-review">View & Download</a> <i class="fa fa-check-circle text-success"></i></span></p>
										<?php } ?>
									<?php } ?>
									<p class="text-content"><?=$tk->deskripsi?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- review -->
			<div class="modal fade" id="jawabanModal-<?=$tk->id_task?>">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Jawaban Anda</h5>
							<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form method="POST" action="<?=base_url('C_mentor/submitTask')?>" enctype="multipart/form-data">
								<div class="text-center mb-4">
									<img class="img-fluid rounded" width="78" src="<?=$this->session->all_userdata()['userdata']['foto']?>" alt="FotoProfil">
									<?=$this->session->all_userdata()['userdata']['nama']?>
								</div>
								<div class="form-group">
									<div class="rating-widget mb-4 text-center">
									</div>
								</div>
								<div class="form-group">
									Pertanyaan :
									<p class="font-weight-bold"><?=$tk->deskripsi?></p>
									Jawaban :
									<p class="font-weight-bold"><?=$tk->jawaban?></p>
									Attachment :
									<?php if ($tk->attachment == "#"){ ?>
									<p class="font-weight-bold"><i>Tidak Ada File di Upload</i></p>
									<?php }else{ ?>
									<br><a href="<?=$tk->attachment?>" class="font-weight-bold"><b>View & Download</b></a>
									<?php } ?><br><br>
									Update Review :
									<select required="0" id="inputState" class="form-control default-select" name="review">
										<option selected value="0">Pilih Status Review...</option>
										<option value="Sudah Direview">Selesai</option>
										<option value="Revisi">Revisi</option>
									</select>
									<input type="hidden" name="id_task" value="<?=$tk->id_task?>">
									<input type="hidden" name="id_mentor" value="<?=$this->session->all_userdata()['userdata']['id_mentor']?>">
									<input type="hidden" name="nama" value="<?=$this->session->all_userdata()['userdata']['nama']?>">
									<input type="hidden" name="tgl" value="<?=date("Y/m/d-His")?>">
								</div>
								<input type="submit" class="btn btn-success btn-block">
							</form>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<!--**********************************
	Content body end
***********************************-->

<?php $this->load->view('dash_mentor/head_foot/footer'); ?>
