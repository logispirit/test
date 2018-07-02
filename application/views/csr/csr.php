<html>
<head>


    <title>CSR</title>

    <?php $this->load->view('all_style'); ?>  

</head>

<body>
    <div id="wrapper">
     <?php $this->load->view('navBar'); ?>




    <div class="panel-body">
        <h3><i class="fa fa-file-image-o "></i> Our CSR Project</h3><br>
          <div class="row">
            <div class="col-lg-12">

     
        <div class="col-lg-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Name
                </div>
                <div class="panel-body">
                    <a href="<?php echo base_url(); ?>index.php/Welcome/project_full_page" target="_blank">
                    <img class="img-thumbnail" width="100%" src="<?php echo base_url(); ?>source/img/csr/csr.jpg"></a>
                </div>
                <div class="panel-footer">
                    <p>Discription</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Name
                </div>
                <div class="panel-body">
                    <a href="<?php echo base_url(); ?>index.php/Welcome/project_full_page" target="_blank">
                    <img class="img-thumbnail" width="100%" src="<?php echo base_url(); ?>source/img/csr/csr.jpg"></a>
                </div>
                <div class="panel-footer">
                    <p>Discription</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Name
                </div>
                <div class="panel-body">
                    <a href="<?php echo base_url(); ?>index.php/Welcome/project_full_page" target="_blank">
                    <img class="img-thumbnail" width="100%" src="<?php echo base_url(); ?>source/img/csr/csr.jpg"></a>
                </div>
                <div class="panel-footer">
                    <p>Discription</p>
                </div>
            </div>
        </div>




         </div>
        </div>
    </div>






    <?php $this->load->view('footer'); ?> 
    </div>   
    <!-- /#wrapper -->

    <?php $this->load->view('all_script'); ?> 

   

</body>
</html>


