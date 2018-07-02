<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">MHEC Admin Dashboard</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                   <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-home fa-2x"> Visit Site</i> 
                    </a>
                </li>
            </ul>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                   <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw fa-2x"></i> <i class="fa fa-caret-down fa-2x"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->





            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li class="active">
                            <a href="#"><i class="fa fa-database"></i> Project<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a class="active" href="<?php echo base_url(); ?>index.php/Admin/showProject"><i class="fa fa-bars"></i> Show All Projects</a>
                                </li>
                                <li>
                                    <a class="active" href="<?php echo base_url(); ?>index.php/Admin/addProjectOnging"><i class="fa fa-plus-square"></i> Add For Onging Project</a>
                                </li>
                                <li>
                                    <a class="active" href="<?php echo base_url(); ?>index.php/Admin/addProjectCompleted"><i class="fa fa-plus-square"></i> Add For Completed</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/Admin/editProject"><i class="fa fa-edit"></i> Edit Project</a>
                                </li>
                            </ul>
                        </li>
                     

                        <li>
                            <a href="#"><i class="fa fa-image"></i> Gallery<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a class="active" href="#"><i class="fa fa-bars"></i> Show All Images</a>
                                </li>
                                <li>
                                    <a class="active" href="<?php echo base_url(); ?>index.php/Admin/addPhoto"><i class="fa fa-plus-square"></i> Add Images</a>
                                </li>
                                <li>
                                    <a href="#####"><i class="fa fa-edit"></i> Edit Images</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-user"></i> About Us<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a class="active" href="<?php echo base_url(); ?>index.php/Admin/addProject"><i class="fa fa-bars"></i> Show All Members</a>
                                </li>
                                <li>
                                    <a class="active" href="####"><i class="fa fa-plus-square"></i> Add Member</a>
                                </li>
                                <li>
                                    <a href="#####"><i class="fa fa-edit"></i> Edit Member</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="<?php echo base_url(); ?>index.php/Admin/addVacancies"></i> <i class="fa fa-plus-square"></i> Add Vacansies</a>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="<?php echo base_url(); ?>index.php/Admin/addCsr"></i> <i class="fa fa-plus-square"></i> Add CSR</span></a>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="<?php echo base_url(); ?>index.php/Admin/addTraining"></i> <i class="fa fa-plus-square"></i> Add Training</span></a>
                            <!-- /.nav-second-level -->
                        </li>



                       
                            <small>Copyright © 2018 </small><br>
                            <small> Designed by MHEC IT</small>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>