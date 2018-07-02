<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gallary</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>source/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>source/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>source/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>source/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>source/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>source/vendor/engine1/style.css" />
    <script type="text/javascript" src="<?php echo base_url(); ?>source/vendor/engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->

   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="wrapper">
     <?php $this->load->view('navBar'); ?>




    <div class="panel-body">
        <h3><i class="fa fa-file-image-o "></i> Our Company Gallary</h3><br>
          <div class="row">

<!-- 
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="#" targrt="_blank">
                <img src="#" alt="Lights" style="width:100%">
                <div class="caption">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula </p>
                </div>
              </a>
            </div>
          </div> -->




            <?php 

            //$idmax=max($getPhotoID->photo_id);
            $idmax=max($getPhotoData)->photo_id;
            //var_dump($idmax);
            foreach ($getPhotoData as $photo) {

              
              if($photo->photo_id>($idmax-4)){

                echo '
                <div class="col-md-4">
                  <div class="thumbnail">
                    <a href="#" targrt="_blank">
                    <img src="'.base_url().$photo->album_photo.'" alt="Loading" style="height:30%">
                  <div class="caption">
                    <p>'.$photo->Discription.'</p>
                   </div>
                    </a>
                  </div>
                </div>
             
                ';}
            }
            ?>


        </div>
    </div>






    <?php $this->load->view('footer'); ?> 
    </div>   
    <!-- /#wrapper -->

    <!-- jQuery -->
   <!-- <script src="../vendor/jquery/jquery.min.js"></script>  -->

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

   

</body>
</html>


