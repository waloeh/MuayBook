<body class="hold-transition skin-blue layout-top-nav">
	<div class="wrapper">
		<!-- Full Width Column -->
		<div class="content-wrapper">
			<div class="container">
				<br>
				<img src="<?php echo base_url(); ?>assets/img/muaybook.png" alt="Muay Book" width="80">
				<!-- Content Header (Page header) -->
				<section class="content-header">
				</section>

				<!-- Main content -->
				<section class="content">

					<div class="error-page">
						<h2 class="headline text-red">500</h2>

						<div class="error-content">
							<h3><i class="fa fa-warning text-red"></i> <?php echo $title; ?></h3>

							<form class="search-form">
								<div class="input-group">

									<div class="input-group-btn">
										<a href="<?php echo base_url('login') ?>" type="submit" class="btn btn-danger btn-flat"><i class="fa fa-close"></i> Go Back!</a>
									</div>
								</div>
								<!-- /.input-group -->
							</form>
						</div>
					</div>
					<!-- /.error-page -->

				</section>
				<!-- /.content -->
			</div>
			<!-- /.container -->
		</div>
		<!-- /.content-wrapper -->
	</div>