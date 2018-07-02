<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add New Project for Onging</title>

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
                        <h1 class="page-header">Add New Project for Onging</h1>

                        <div class="col-md-9 col-md-offset-1">
                        <form action="<?php echo base_url(); ?>index.php/Project_controller/addProject" enctype="multipart/form-data" method="post" accept-charset="utf-8" method="POST">
							<div class="form-group">
	                            <label>Project Name</label>
	                            <input class="form-control" placeholder="Enter the project name" name="ProjectName" required="">
	                        </div>
	                        <div class="form-group">
	                            <label>Project Started Date</label>
	                            <input class="form-control" type="Date" name="ProjectStartedDate" required="">
	                        </div>
	                        <div class="form-group">
	                            <label>Submission Date</label>
	                            <input class="form-control" type="Date" name="SubmissionDate" required="">
	                        </div>






                         <!--    radio button data -->
                            <div class="col-lg-6">
	                        <div class="form-group">
                                <br>
	                            <label>Select Project Type </label>
	                            <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="Traffic&TransportaionEngineering" checked>Traffic & Transportaion Engineering
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="Highway&HighwayStructuralEngineering">Highway & Highway Structural Engineering
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="Hydrology&GeotechnicalEngineering"> Hydrology & Geotechnical Engineering
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="EnvironmentalEngineering"> Environmental Engineering
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="Social&ResettlementStudies"> Social & Resettlement Studies
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="DataCollectionSurvey"> Data Collection Survey
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="Miscellaneous"> Miscellaneous
                                    </label>
                                </div>
	                        </div>
                             </div>





                            <!--  checkbox data -->
                             <div class="col-lg-6">
                             <div class="form-group">
                                <br>
                                <label>Sub Category </label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="Proposal" name="Proposal">Proposal 
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="PreFeasibilty" name="PreFeasibilty">Pre-Feasibilty
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="Feasibilty" name="Feasibilty">Feasibilty
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="DetailedDesign" name="DetailedDesign">Detailed Design
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="PostEvaluation" name="PostEvaluation">Post Evaluation
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="DataCollection" name="DataCollection">Data Collection
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="Highway" name="Highway">Highway
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="Structural" name="Structural">Structural
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="Hydrology" name="Hydrology">Hydrology 
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="Geotechnical" name="Geotechnical">Geotechnical 
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="Social" name="Social">Social 
                                    </label>
                                </div>
                            </div>
                            </div>




	                        <div class="form-group">
                                <br>
	                            <label>Contractor</label>
	                            <input class="form-control" placeholder="Contractor" name="Contractor" required="">
	                        </div>
                            <div class="form-group">
                                <label>Project Handle By</label>
                                <input class="form-control" placeholder="Project Handle By" name="ProjectHandleBy" required="">
                            </div>
                            <div class="form-group">
                                <label>Location</label>
                                <input class="form-control" placeholder="Location" name="Location" required="">
                            </div>
	                        <div class="form-group">
                                <label>Add Image</label><br>
                                <small>Select one photo</small><br>
                                <input type="file" name="photo1" required="">
                            </div>
	                        <div class="form-group">
	                            <label>Discription (20 chars min, 500 max) :</label>
	                            <textarea class="form-control" rows="3" name="Discription"></textarea>
	                        </div>
	                       
	                        <button type="submit" class="btn btn-success btn-lg btn-block">Submit New Project</button>
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
