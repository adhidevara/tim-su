<?php $this->load->view('dash_tim/head_foot/header'); ?>

<!--**********************************
	Content body start
***********************************-->

<div class="content-body">
	<div class="container-fluid">
		<div class="page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?=base_url('progress')?>">Progress</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Create Progress</a></li>
			</ol>
		</div>
		<!-- row -->
		<div class="row">

			<div class="col-xl-6 col-lg-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Form Create Progress</h4>
					</div>
					<div class="card-body">
						<div class="basic-form">
							<form action="<?=base_url('C_tim/proCreateProgress')?>" method="POST" enctype="multipart/form-data">

								<div class="form-row">
									<div class="form-group col-md-12">
										<label>Judul Progress</label>
										<input required type="text" class="form-control" placeholder="Pengembangan Aplikasi..." name="judul">
									</div>
									<div class="form-group col-md-6">
										<label>Bulan</label>
										<select required="0" id="inputState" class="form-control default-select" name="bulan">
											<option selected value="0">Pilih Bulan...</option>
											<?php
											for($m=1; $m<=12; $m++){
												echo '<option value="'.date('Y-'.$m.'-d H:i:s').'">'.date('F', mktime(0, 0, 0, $m)).'</option>';
											}
											?>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label>Minggu Ke</label>
										<select required="0" id="inputState" class="form-control default-select" name="minggu_ke">
											<option selected value="0">Pilih Minggu...</option>
											<?php for($mg=1;$mg<=4;$mg++) {
												echo '<option value="'.$mg.'">'.$mg.'</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="form-row">
									<label>Presentase Target</label>
									<div class="input-group col-md-12">
										<input required type="number" class="form-control" name="presentase_target" placeholder="Masukkan persentase (%)">
										<div class="input-group-append">
											<span class="input-group-text">%</span>
										</div>
									</div>
									<label>Deskripsi Progress</label>
									<div class="input-group col-md-12">
										<textarea required class="form-control" name="deskripsi" rows="10" placeholder="Tulis Deskripsi...."></textarea>
									</div>
								</div>

								<button type="submit" class="btn btn-primary mt-3">Submit</button>
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

<?php $this->load->view('dash_tim/head_foot/footer'); ?>
