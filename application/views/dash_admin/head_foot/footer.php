<!--**********************************
	Footer start
***********************************-->
<div class="footer">
	<div class="copyright">
		<p>Copyright © Designed &amp; Developed by <a href="/">Tim Startup</a> 2022</p>
	</div>
</div>
<!--**********************************
	Footer end
***********************************-->

<!--**********************************
   Support ticket button start
***********************************-->

<!--**********************************
   Support ticket button end
***********************************-->


</div>
<!--**********************************
	Main wrapper end
***********************************-->

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="<?php echo base_url('assets') ?>/vendor/global/global.min.js"></script>
<script src="<?php echo base_url('assets') ?>/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url('assets') ?>/vendor/chart.js/Chart.bundle.min.js"></script>
<script src="<?php echo base_url('assets') ?>/js/custom.min.js"></script>
<script src="<?php echo base_url('assets') ?>/js/deznav-init.js"></script>
<script src="<?php echo base_url('assets') ?>/vendor/owl-carousel/owl.carousel.js"></script>

<!-- Daterangepicker -->
<!-- momment js is must -->
<script src="<?php echo base_url('assets') ?>/vendor/moment/moment.min.js"></script>
<script src="<?php echo base_url('assets') ?>/vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- clockpicker -->
<script src="<?php echo base_url('assets') ?>/vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
<!-- asColorPicker -->
<script src="<?php echo base_url('assets') ?>/vendor/jquery-asColor/jquery-asColor.min.js"></script>
<script src="<?php echo base_url('assets') ?>/vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
<script src="<?php echo base_url('assets') ?>/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
<!-- Material color picker -->
<script src="<?php echo base_url('assets') ?>/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<!-- pickdate -->
<script src="<?php echo base_url('assets') ?>/vendor/pickadate/picker.js"></script>
<script src="<?php echo base_url('assets') ?>/vendor/pickadate/picker.time.js"></script>
<script src="<?php echo base_url('assets') ?>/vendor/pickadate/picker.date.js"></script>



<!-- Daterangepicker -->
<script src="<?php echo base_url('assets') ?>/js/plugins-init/bs-daterange-picker-init.js"></script>
<!-- Clockpicker init -->
<script src="<?php echo base_url('assets') ?>/js/plugins-init/clock-picker-init.js"></script>
<!-- asColorPicker init -->
<script src="<?php echo base_url('assets') ?>/js/plugins-init/jquery-asColorPicker.init.js"></script>
<!-- Material color picker init -->
<script src="<?php echo base_url('assets') ?>/js/plugins-init/material-date-picker-init.js"></script>
<!-- Pickdate -->
<script src="<?php echo base_url('assets') ?>/js/plugins-init/pickadate-init.js"></script>

<!-- Chart piety plugin files -->
<script src="<?php echo base_url('assets') ?>/vendor/peity/jquery.peity.min.js"></script>

<!-- Apex Chart -->
<script src="<?php echo base_url('assets') ?>/vendor/apexchart/apexchart.js"></script>

<!-- Dashboard 1 -->
<script src="<?php echo base_url('assets') ?>/js/dashboard/dashboard-1.js"></script>

<!-- Circle progress -->
<script src="<?php echo base_url('assets') ?>/vendor/highlightjs/highlight.pack.min.js"></script>

<!-- Rating -->
<script src="<?php echo base_url('assets') ?>/vendor/star-rating/jquery.star-rating-svg.js"></script>
<script>
	function carouselReview(){
		/*  testimonial one function by = owl.carousel.js */
		jQuery('.testimonial-one').owlCarousel({
			loop:true,
			autoplay:true,
			margin:30,
			nav:false,
			dots: false,
			left:true,
			navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
			responsive:{
				0:{
					items:1
				},
				484:{
					items:2
				},
				882:{
					items:3
				},
				1200:{
					items:2
				},

				1540:{
					items:3
				},
				1740:{
					items:4
				}
			}
		})
	}
	jQuery(window).on('load',function(){
		setTimeout(function(){
			carouselReview();
		}, 1000);
	});
</script>
</body>
</html>
