<?php $this->load->view('head_foot/header'); ?>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
					
					<div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="<?php echo base_url() ?>" class="bg-white rounded py-4 px-3"><img src="<?php echo base_url('assets') ?>/images/logo-full.png" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4 text-white">Daftar account</h4>
                                    <form action="<?php echo base_url('C_login/proRegist') ?>" method="POST">
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Nama Tim</strong></label>
                                            <input type="text" class="form-control" placeholder="Nama Tim" name="nama-tim">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Email Tim</strong></label>
                                            <input type="email" class="form-control" placeholder="hello@example.com" name="email-tim">
                                        </div>
										<div class="form-group">
											<label class="mb-1 text-white"><strong>No Telepon Tim</strong></label>
											<input type="number" class="form-control" placeholder="081234567890" name="notelp-tim">
										</div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input type="password" class="form-control" placeholder="Password" name="password">
                                        </div>
										<div class="form-group">
											<label class="mb-1 text-white"><strong>Ulangi Password</strong></label>
											<input type="password" class="form-control" placeholder="Password" name="re-password">
										</div>
										<div class="form-group">
											<label class="mb-1 text-white"><strong>Nama Ketua</strong></label>
											<input type="text" class="form-control" placeholder="Nama Tim" name="nama-ketua">
										</div>
										<div class="form-group">
											<label class="mb-1 text-white"><strong>Email Ketua</strong></label>
											<input type="email" class="form-control" placeholder="hello@example.com" name="email-ketua">
										</div>
										<div class="form-group">
											<label class="mb-1 text-white"><strong>No Telepon Ketua</strong></label>
											<input type="number" class="form-control" placeholder="081234567890" name="notelp-ketua">
										</div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Daftar</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="text-white">Sudah ada akun? <a class="text-white" href="<?php echo base_url() ?>">Login disini</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $this->load->view('head_foot/footer'); ?>
