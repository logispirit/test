<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_controller extends CI_Controller {


	public function __construct() {

			parent::__construct();
			
			$this->load->model('Project_model','',true);
			$this->load->helper(array('form', 'url'));
	}


	public function addProject(){
		// var_dump($this->input->post());
		$ProjectName=$this->input->post('ProjectName');
		$ProjectStartedDate=$this->input->post('ProjectStartedDate');
		$SubmissionDate=$this->input->post('SubmissionDate');

			$str_two ='0123456789';
        	$str_two= str_shuffle($str_two);
        	$project_id=substr($str_two,0,7);

		
		$optionsRadios=$this->input->post('optionsRadios'); // radio button data set


		$Proposal=$this->input->post('Proposal'); //checkbox data set
		$PreFeasibilty=$this->input->post('PreFeasibilty');
		$Feasibilty=$this->input->post('Feasibilty');
		$DetailedDesign=$this->input->post('DetailedDesign');
		$PostEvaluation=$this->input->post('PostEvaluation');
		$DataCollection=$this->input->post('DataCollection');
		$Highway=$this->input->post('Highway');
		$Structural=$this->input->post('Structural');
		$Hydrology=$this->input->post('Hydrology');
		$Geotechnical=$this->input->post('Geotechnical');
		$Social=$this->input->post('Social');


		$Contractor=$this->input->post('Contractor');
		$ProjectHandleBy=$this->input->post('ProjectHandleBy');
		$Location=$this->input->post('Location');

		$Discription=$this->input->post('Discription');




		//photo upload code
		$str ='qazwsxedcrfvtgbyhnujmikolpQAZWSXEDCRFVTGBYHNUJMIKOLP1234567890@#';
   		$str= str_shuffle($str);
    	$upload_location= substr($str,0,10);

        //$structure = 'uploads/';
        //$structure =$structure.$land_title;
        $structure = 'uploads/';
        $structure =$structure.$upload_location;
		if (!mkdir($structure, 0, true)) {
		die('Failed to create folders...');
		}


        $config['upload_path']          = $structure;
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 50000;
        $config['max_width']            = 10240;
        $config['max_height']           = 10240;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('photo1'))
        {
                $error = array('error' => $this->upload->display_errors());

                //$this->load->view('upload_form', $error);
				//echo "not insder";
        }
        else
        {
                $photo_data = array('upload_data' => $this->upload->data());
				//echo "insder";
				// $this->load->view('upload_success', $data);
        }

        $photo1='';
		$photo1=$photo_data['upload_data']['file_name'];
		$path=$structure.'/';
		$photo1=$path.$photo1;










		//check box data 
		if($this->input->post('Proposal')){

			$data1 = array(
				'project_id' =>$project_id ,
				'sub_name' =>"Proposal" , 
			);

			$result1= $this->Project_model->addproject_sub_cat($data1);
			
		}
		if($this->input->post('PreFeasibilty')){

			$data1 = array(
				'project_id' =>$project_id ,
				'sub_name' =>"Pre-Feasibilty" , 
			);

			$result1= $this->Project_model->addproject_sub_cat($data1);
			
		}
		if($this->input->post('Feasibilty')){

			$data1 = array(
				'project_id' =>$project_id ,
				'sub_name' =>"Feasibilty" , 
			);

			$result1= $this->Project_model->addproject_sub_cat($data1);
			
		}
		if($this->input->post('DetailedDesign')){

			$data1 = array(
				'project_id' =>$project_id ,
				'sub_name' =>"Detailed Design" , 
			);

			$result1= $this->Project_model->addproject_sub_cat($data1);
			
		}
		if($this->input->post('Post_Evaluation')){

			$data1 = array(
				'project_id' =>$project_id ,
				'sub_name' =>"Post Evaluation" , 
			);

			$result1= $this->Project_model->addproject_sub_cat($data1);
			
		}
		if($this->input->post('DataCollection')){

			$data1 = array(
				'project_id' =>$project_id ,
				'sub_name' =>"Data Collection" , 
			);

			$result1= $this->Project_model->addproject_sub_cat($data1);
			
		}
		if($this->input->post('Highway')){

			$data1 = array(
				'project_id' =>$project_id ,
				'sub_name' =>"Highway" , 
			);

			$result1= $this->Project_model->addproject_sub_cat($data1);
			
		}
		if($this->input->post('Structural')){

			$data1 = array(
				'project_id' =>$project_id ,
				'sub_name' =>"Structural" , 
			);

			$result1= $this->Project_model->addproject_sub_cat($data1);
			
		}
		if($this->input->post('Hydrology')){

			$data1 = array(
				'project_id' =>$project_id ,
				'sub_name' =>"Hydrology" , 
			);

			$result1= $this->Project_model->addproject_sub_cat($data1);
			
		}
		if($this->input->post('Geotechnical')){

			$data1 = array(
				'project_id' =>$project_id ,
				'sub_name' =>"Geotechnical" , 
			);

			$result= $this->Project_model->addproject_sub_cat($data1);
			
		}
		if($this->input->post('Social')){

			$data1 = array(
				'project_id' =>$project_id ,
				'sub_name' =>"Social" , 
			);

			$result1= $this->Project_model->addproject_sub_cat($data1);

			
		}









//array data pass to database table
		$project_data=array(
			"project_id" => $project_id,
			"ProjectName" => $ProjectName,
			"ProjectStartedDate" => $ProjectStartedDate,
			"SubmissionDate" => $SubmissionDate,
			"optionsRadios" => $optionsRadios,
			"Contractor" => $Contractor,
			"ProjectHandleBy" => $ProjectHandleBy,
			"Location" => $Location,
			"Discription" => $Discription,
			"photo1" => $photo1,
		);



		$result22= $this->Project_model->addProjectData($project_data);


	}



}
