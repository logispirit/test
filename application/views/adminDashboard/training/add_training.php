<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add New Training</title>

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
                        <h1 class="page-header">Add New Training</h1>

                        <div class="col-md-9 col-md-offset-1">
                        <form action="#" enctype="multipart/form-data" method="post" accept-charset="utf-8" method="POST">
							<div class="form-group">
                                <label>Photo</label>
                                <input type="file">
                            </div>
	                        <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div> 

                             <button type="submit" class="btn btn-success btn-lg btn-block">Submit Vacncies</button>
                            <br><br><br><br>              

                        </form>
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


