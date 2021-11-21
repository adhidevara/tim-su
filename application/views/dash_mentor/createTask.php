<?php $this->load->view('dash_mentor/head_foot/header'); ?>

<!--**********************************
	Content body start
***********************************-->

<div class="content-body">
	<div class="container-fluid">
		<div class="page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?=base_url('progress')?>">Review Tasks</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Create Task</a></li>
			</ol>
		</div>
		<!-- row -->
		<div class="row">

			<div class="col-xl-6 col-lg-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Form Create Task</h4>
					</div>
					<div class="card-body">
						<div class="basic-form">
							<form action="<?=base_url('C_mentor/proCreateTask')?>" method="POST" enctype="multipart/form-data">

								<div class="form-row">
									<div class="form-group col-md-12">
										<label>Tugas Untuk Tim</label>
										<select required="0" id="inputState" class="form-control default-select" name="id_tim">
											<option selected value="0">Pilih Tim...</option>
											<?php foreach ($tim as $tm){ ?>
												<option value="<?=$tm->id_tim?>"><?=$tm->nama?> - <?=$tm->nama_ketua?></option>
											<?php } ?>
										</select>
									</div>
									<div class="form-group col-md-12">
										<label>Judul Task</label>
										<input required type="text" class="form-control" placeholder="Tugas 1..." name="judul">
									</div>
								</div>
								<div class="form-row">
									<label>Deskripsi Task</label>
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

<?php $this->load->view('dash_mentor/head_foot/footer'); ?>
