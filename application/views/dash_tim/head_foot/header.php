<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Tim Startup</title>
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets') ?>/images/favicon.png">
	<link rel="stylesheet" href="<?php echo base_url('assets') ?>/vendor/chartist/css/chartist.min.css">
	<link href="<?php echo base_url('assets') ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="<?php echo base_url('assets') ?>/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/vendor/star-rating/star-rating-svg.css">
	<link href="<?php echo base_url('assets') ?>/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>

<!--*******************
	Preloader start
********************-->
<?php
if (isset($_GET['preload']) && $_GET['preload'] == 1){
	?>
	<div id="preloader">
		<div class="sk-three-bounce">
			<div class="sk-child sk-bounce1"></div>
			<div class="sk-child sk-bounce2"></div>
			<div class="sk-child sk-bounce3"></div>
		</div>
	</div>
<?php } ?>
<!--*******************
	Preloader end
********************-->

<!--**********************************
	Main wrapper start
***********************************-->
<div id="main-wrapper">

	<!--**********************************
		Nav header start
	***********************************-->
	<div class="nav-header">
		<a href="index.html" class="brand-logo">
			<img class="logo-abbr" src="<?php echo base_url('assets') ?>/images/logo.png" alt="">
			<img class="logo-compact" src="<?php echo base_url('assets') ?>/images/logo-text.png" alt="">
			<img class="brand-title" src="<?php echo base_url('assets') ?>/images/logo-text.png" alt="">
		</a>

		<div class="nav-control">
			<div class="hamburger">
				<span class="line"></span><span class="line"></span><span class="line"></span>
			</div>
		</div>
	</div>
	<!--**********************************
		Nav header end
	***********************************-->

	<!--**********************************
		Header start
	***********************************-->
	<div class="header">
		<div class="header-content">
			<nav class="navbar navbar-expand">
				<div class="collapse navbar-collapse justify-content-between">
					<div class="header-left">
						<div class="dashboard_bar">
							Dashboard Tim
						</div>
					</div>
					<ul class="navbar-nav header-right">
						<li class="nav-item dropdown header-profile">
							<a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
								<img src="<?=$this->session->all_userdata()['userdata']['foto']?>" width="20" alt=""/>
								<div class="header-info">
									<span class="text-black"><strong><?=$this->session->all_userdata()['userdata']['nama']?></strong></span>
									<p class="fs-12 mb-0"><?=$this->session->all_userdata()['userdata']['nama_ketua']?></p>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="./app-profile.html" class="dropdown-item ai-icon">
									<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
									<span class="ml-2">Profile </span>
								</a>
								<a href="<?=base_url('C_login/logout')?>" class="dropdown-item ai-icon">
									<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
									<span class="ml-2">Logout </span>
								</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!--**********************************
		Header end ti-comment-alt
	***********************************-->

	<!--**********************************
		Sidebar start
	***********************************-->
	<div class="deznav">
		<div class="deznav-scroll">
			<ul class="metismenu" id="menu">
				<li><a class="has-arrow ai-icon" href="<?=base_url('dashboard-tim')?>" aria-expanded="false">
						<i class="flaticon-381-networking"></i>
						<span class="nav-text">Dashboard</span>
					</a>
				</li>
				<li><a class="has-arrow ai-icon" href="<?=base_url('tasks')?>" aria-expanded="false">
						<i class="flaticon-381-notepad"></i>
						<span class="nav-text">Tasks</span>
					</a>
				</li>
				<li><a class="has-arrow ai-icon" href="<?=base_url('progress')?>" aria-expanded="false">
						<i class="flaticon-381-switch-1"></i>
						<span class="nav-text">Progress</span>
					</a>
				</li>
				<li><a class="has-arrow ai-icon" href="<?=base_url('discussion')?>" aria-expanded="false">
						<i class="flaticon-381-internet"></i>
						<span class="nav-text">Discussion</span>
					</a>
				</li>
				<li><a class="has-arrow ai-icon" href="<?=base_url('materi-news-event')?>" aria-expanded="false">
						<i class="flaticon-381-notebook"></i>
						<span class="nav-text">Materi | News | Event</span>
					</a>
				</li>
			</ul>
			<div class="add-menu-sidebar">
				<img src="<?=base_url('assets')?>/images/calendar.png" alt="" class="mr-3">
				<a href="<?=base_url('create-progress')?>" class="font-w500 mb-0 text-white">Create Progress Plan Now</a>
			</div>
			<div class="copyright">
				<p><strong>Tim-Startup Dashboard</strong> © 2021 All Rights Reserved</p>
				<p>Made with <span class="heart"></span></p>
			</div>
		</div>
	</div>
	<!--**********************************
		Sidebar end
	***********************************-->
