<html>
<head>

    <title>Project Table</title>

    <?php $this->load->view('all_style'); ?>  

</head>

<body>
    <div id="wrapper">
     <?php $this->load->view('navBar'); ?>
   
    <div class="panel-body">
        <div class="col-lg-12">
                    <br><br>
                    <h4>&nbsp;&nbsp;Search all Projects</h4>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Serach Projects List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Project Name</th>
                                        <th>Project Started Date </th>
                                        <th>Submission Date</th>
                                        <th>Project Type</th>
                                        <th>Sub Category</th>
                                        <th>Contractor</th>
                                        <th>Location</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                        <?php 

                                        foreach ($projectData as $project) {

                                            echo '
                                            <tr>
                                                <td><a href="www.google.com" >'.$project->ProjectName.'</a></td>
                                                <td>'.$project->ProjectStartedDate.'</td>
                                                <td>'.$project->SubmissionDate.'</td>
                                                <td>'.$project->optionsRadios.'</td>
                                                <td>'.$project->Contractor.'</td>
                                                <td>'.$project->ProjectHandleBy.'</td>
                                                <td>'.$project->Location.'</td>
                                            </tr>
                                            ';
                                        }




                                        ?>
                                    
   
                                   
                                </tbody>
                            </table>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <br><br>
                </div>
    </div>







    <?php $this->load->view('footer'); ?> 

    <?php $this->load->view('all_script'); ?> 



     <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
    </div>   
  
   

</body>
</html>


