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
									<a href="<?=base_url()?>"><svg xmlns="http://www.w3.org/2000/svg" style="width: 45px;" fill="none" viewBox="0 0 24 24" stroke="white">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
									</svg></a>
<!--									<svg xmlns="http://www.w3.org/2000/svg" style="width: 45px;" viewBox="0 0 20 20" fill="white">-->
<!--										<path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />-->
<!--									</svg>-->
									<div class="text-center mb-3">
										<a href="index.html"><img src="<?php echo base_url('assets') ?>/images/logo-full.png" alt=""></a>
									</div>
									<?php if ($usercontext == md5('tim-su')){ ?>
									<h4 class="text-center mb-4 text-white">Masuk ke akun <b>TIM-SU</b></h4>
									<?php } elseif ($usercontext == md5('mentor')){ ?>
									<h4 class="text-center mb-4 text-white">Masuk ke akun <b>Mentor</b></h4>
									<?php } elseif ($usercontext == md5('admin')){ ?>
									<h4 class="text-center mb-4 text-white">Masuk ke akun <b>Admin</b></h4>
									<?php } ?>
                                    <form action="<?php echo base_url('C_login/proLogin') ?>" method="POST">
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control" placeholder="hello@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control" placeholder="Password">
											<input type="hidden" name="role" value="<?php echo $_GET['usercontext'] ?>">
                                        </div>
<!--                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">-->
<!--                                            <div class="form-group">-->
<!--                                               <div class="custom-control custom-checkbox ml-1 text-white">-->
<!--													<input type="checkbox" class="custom-control-input" id="basic_checkbox_1">-->
<!--													<label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>-->
<!--												</div>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <a class="text-white" href="page-forgot-password.html">Forgot Password?</a>-->
<!--                                            </div>-->
<!--                                        </div>-->
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Login</button>
                                        </div>
                                    </form>
									<?php if ($usercontext == md5('tim-su')){ ?>
                                    <div class="new-account mt-3">
                                        <p class="text-white">Belum punya akun? <a class="text-white" href="<?php echo base_url('register') ?>">Daftar disini</a></p>
                                    </div>
									<?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $this->load->view('head_foot/footer'); ?>
