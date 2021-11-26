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
									<div class="text-center mb-5">
										<a href="<?php echo base_url() ?>" class="bg-white rounded py-4 px-3"><img src="<?php echo base_url('assets') ?>/images/logo-full.png" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4 text-white">Masuk sebagai :</h4>
                                    <form action="index.html">
                                        <div class="text-center mt-3">
                                            <a href="<?php echo base_url() ?>login?usercontext=<?=md5('tim-su')?>" class="btn bg-white text-primary btn-block">Tim Startup Launchpad</a>
                                        </div>
										<div class="text-center mt-3">
											<a href="<?php echo base_url() ?>login?usercontext=<?=md5('mentor')?>" class="btn bg-white text-primary btn-block">Mentor</a>
										</div>
										<div class="text-center mt-3">
											<a href="<?php echo base_url() ?>login?usercontext=<?=md5('admin')?>" class="btn bg-white text-primary btn-block">Admin</a>
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

<?php $this->load->view('head_foot/footer'); ?>

