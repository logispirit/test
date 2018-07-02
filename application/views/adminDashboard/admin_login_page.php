 <!DOCTYPE html>
 <html>
 <head>
 	<!-- Bootstrap Core CSS -->
 	<link href="<?php echo base_url(); ?>source/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

 	<!-- MetisMenu CSS -->
 	<link href="<?php echo base_url(); ?>source/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

 	<!-- DataTables Responsive CSS -->
 	<link href="<?php echo base_url(); ?>source/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">


 	<!-- Custom CSS -->
 	<link href="<?php echo base_url(); ?>source/dist/css/sb-admin-2.css" rel="stylesheet">

 	<!-- Morris Charts CSS -->
 	<link href="<?php echo base_url(); ?>source/vendor/morrisjs/morris.css" rel="stylesheet">

 	<!-- Custom Fonts -->
 	<link href="<?php echo base_url(); ?>source/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">




 	<title></title>
 </head>
 <body class="login" style= "background: url('<?php echo base_url(); ?>source/img/admin/3.jpg') 
 no-repeat center center fixed; 
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 background-size: cover;" >



 	<div class="panel-body">
        <div class="row">
			<div class="col-md-6 col-md-offset-3"> 
            	<h3 style="color: white;"><i class="fa fa-user"></i> Login to Admin Dashboard</h3><br>
					<div class="panel panel-primary">
                        <div class="panel-heading">
                            Login
                        </div>
                        <div class="panel-body">
                        	<form action="" method="POST">
	                           <div class="form-group">
				                    <label>User Name </label>
				                    <input class="form-control" placeholder="User Name">
				                </div>
				                <div class="form-group">
				                    <label>Password</label>
				                    <input class="form-control" type="password" placeholder="Password">
				                </div>

				                  	<button type="button" class="btn btn-primary btn-lg btn-block">
				                  		Login
				              		</button>
				              	
			                </form>
                			<br><br>
                			<a href="<?php echo base_url(); ?>index.php/Welcome/index" class="text-align-center"><i class="fa fa-home fa-5x"></i>
                			<a href="<?php echo base_url(); ?>index.php/Admin/dashboard"> test</a>
						</div>
                    </div>
				</div>
         </div>
     </div>





 </body>


 <!-- Bootstrap Core JavaScript -->
 <script src="<?php echo base_url(); ?>source/vendor/bootstrap/js/bootstrap.min.js"></script>

 <!-- Metis Menu Plugin JavaScript -->
 <script src="<?php echo base_url(); ?>source/vendor/metisMenu/metisMenu.min.js"></script>

 <!-- Morris Charts JavaScript -->
 <script src="<?php echo base_url(); ?>source/vendor/raphael/raphael.min.js"></script>
 <script src="<?php echo base_url(); ?>source/vendor/morrisjs/morris.min.js"></script>
 <script src="<?php echo base_url(); ?>source/data/morris-data.js"></script>

 <!-- Custom Theme JavaScript -->
 <script src="<?php echo base_url(); ?>source/dist/js/sb-admin-2.js"></script>



 </html>
 