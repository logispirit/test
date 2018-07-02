
<!DOCTYPE html>
<html lang="en">

<head>


	<title>Edit Project </title>

    <!-- style -->
    <?php $this->load->view('adminDashboard/admin_all_style'); ?>


</head>

<body>

	<div id="wrapper">

		<!-- Navigation -->
		<?php $this->load->view('adminDashboard/admin_nav_bar'); ?>

		<!-- Page Content -->
		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Edit Project </h1>


						<div class="col-lg-12"><br>
							<h2>Projects of Our Company</h2>
							<div class="col-lg-4">
								<div class="panel panel-info">
									<div class="panel-heading">
										Project Name
									</div>
									<div class="panel-body">
										<a href="<?php echo base_url(); ?>index.php/Welcome/project_full_page" target="_blank">
											<img class="img-thumbnail" width="100%" src="<?php echo base_url(); ?>source/img/project/project1.jpg"></a>
										</div>
										<div class="panel-footer">
											<strong>Client : </strong><span>#########</span><br>
											<strong>Consultant : </strong><span>#########</span><br>
											<strong>Contractor : </strong><span>#########</span><br>
											<strong>Funding Agency : </strong><span>#########</span><br>
											<strong>Location : </strong><span>#########</span><br>
											<strong>Date : </strong><span>#########</span><br>
											<strong>Deteils : </strong><span>#########</span><br>
										</div>
										<div class="panel-footer">
											<button type="button" class="btn btn-success"> <i class="fa fa-edit"></i> Edit</button>

				                            <button type="button" class="btn btn-danger pull-right"> <i class="fa fa-trash"></i> Delete</button>
				                        </div>
									</div>
								</div>



								<div class="col-lg-4">
									<div class="panel panel-info">
										<div class="panel-heading">
											Project Name
										</div>
										<div class="panel-body">
											<a href="<?php echo base_url(); ?>index.php/Welcome/project_full_page" target="_blank">
												<img class="img-thumbnail" width="100%" src="<?php echo base_url(); ?>source/img/project/project1.jpg"></a>
											</div>
											<div class="panel-footer">
												<strong>Client : </strong><span>#########</span><br>
												<strong>Consultant : </strong><span>#########</span><br>
												<strong>Contractor : </strong><span>#########</span><br>
												<strong>Funding Agency : </strong><span>#########</span><br>
												<strong>Location : </strong><span>#########</span><br>
												<strong>Date : </strong><span>#########</span><br>
												<strong>Deteils : </strong><span>#########</span><br>
											</div>
											<div class="panel-footer">
												<button type="button" class="btn btn-success"> <i class="fa fa-edit"></i> Edit</button>

					                            <button type="button" class="btn btn-danger pull-right"> <i class="fa fa-trash"></i> Delete</button>
					                        </div>
										</div>
									</div>




									<div class="col-lg-4">
										<div class="panel panel-info">
											<div class="panel-heading">
												Project Name
											</div>
											<div class="panel-body">
												<a href="<?php echo base_url(); ?>index.php/Welcome/project_full_page" target="_blank">
													<img class="img-thumbnail" width="100%" src="<?php echo base_url(); ?>source/img/project/project1.jpg"></a>
												</div>
												<div class="panel-footer">
													<strong>Client : </strong><span>#########</span><br>
													<strong>Consultant : </strong><span>#########</span><br>
													<strong>Contractor : </strong><span>#########</span><br>
													<strong>Funding Agency : </strong><span>#########</span><br>
													<strong>Location : </strong><span>#########</span><br>
													<strong>Date : </strong><span>#########</span><br>
													<strong>Deteils : </strong><span>#########</span><br>
												</div>
												<div class="panel-footer">
													<button type="button" class="btn btn-success"> <i class="fa fa-edit"></i> Edit</button>

						                            <button type="button" class="btn btn-danger pull-right"> <i class="fa fa-trash"></i> Delete</button>
						                        </div>
											</div>
										</div>

									</div>



								</div>
								<!-- /.col-lg-12 -->
							</div>
							<!-- /.row -->
						</div>
						<!-- /.container-fluid -->
					</div>
					<!-- /#page-wrapper -->

				</div>
				<!-- /#wrapper -->

    <!-- script -->
    <?php $this->load->view('adminDashboard/admin_all_script'); ?>


			</body>

			</html>
