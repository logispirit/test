<!-- start NAV bar -->
<link rel="stylesheet" href="<?php echo base_url(); ?>source/vendor/fontawesomeAnimation/font-awesome-animation.min.css">

        <nav class="navbar navbar-default" role="navigation" id="nav_bar" style="">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="<?php echo base_url(); ?>index.php/Welcome/index">
           <img src="<?php echo base_url(); ?>source/img/logo_old.png" style="margin-left: 5px; margin-top: -10px;" height="60px"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li>
                <span 
                style="text-shadow: 0 0 1.5px #000000; 
                        margin-top:0px; 
                        padding-top: 20px; 
                        margin-left: 5px; 
                        font-size: 33px;">
                        Master Hellie’s Engineering Consultants (Pvt.) Ltd
                </span>

              </li>
              <!-- <li><a href="#">Link</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  <li class="divider"></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li> -->
            </ul>
            <!-- <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form> -->
            <ul class="nav navbar-nav navbar-right"  style="background-color:rgba( 193, 201, 210 ,1);  border-radius: 10px; font-size: 13px; font-weight: bold; color: white important!;"> 
                <li >
                  <a href="<?php echo base_url(); ?>index.php/Welcome/index">Home <i class="fa fa-home" style="color:rgb(15, 91, 176);"></i></a>
                </li>
                
                <li class="dropdown">
                  <a href="<?php echo base_url(); ?>index.php/Welcome/project" class="dropdown-toggle" data-toggle="dropdown">Projects<b class="caret"></b>
                  </a>

                  <ul class="dropdown-menu" style="background-color:rgba( 193, 201, 210 ,1);">
                    <li>
                    <a href="<?php echo base_url(); ?>index.php/Welcome/project_ongoing">Ongoing Projects</a>
                    </li>
                    <li><a href="<?php echo base_url(); ?>index.php/Welcome/project_completed">Colmpleted</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/Welcome/project_table_page">Project List</a></li>
                    
                  </ul>
                </li>




                <li>
                  <a href="<?php echo base_url(); ?>index.php/Welcome/vacancies">Vacancies
                  <i class="fa fa-bell faa-tada animated " style="color:rgb(15, 91, 176);"></i></a>
                </li>
                <li>
                  <a href="<?php echo base_url(); ?>index.php/Welcome/courses">Training
                  <i class="fa fa-bell faa-tada animated" style="color:rgb(15, 91, 176);"></i>
                  </a>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b>
                  </a>

                  <ul class="dropdown-menu" style="background-color:rgba( 193, 201, 210 ,1);">
                    <!-- <li><a href="#">Clients</a></li> -->
                    <li><a href="<?php echo base_url(); ?>index.php/Welcome/aboutUs">About Us</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/Welcome/gallery">Gallery</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/Welcome/achievement">Achievement</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/Welcome/contactUs">Contact Us</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/Welcome/csr">CSR</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url(); ?>index.php/Admin/index" target="_blank">Admin Page</a></li>
                  </ul>
                </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </nav>
        <!-- End Nav Bar -->


