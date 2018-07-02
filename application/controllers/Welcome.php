<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 public function __construct() {

			parent::__construct();
			
			$this->load->model('Project_model','',true);
			$this->load->model('Album_model','',true);
			$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->view('index');
	}



	// project_ongoing 
	public function project_ongoing()
	{

		$data['projectData']=$this->Project_model->getProjectData();
		$data['subCat']=array();
		foreach ($data['projectData'] as $proData) {
			array_push($data['subCat'],$this->Project_model->getSubCatData($proData->project_id));
		}

		//var_dump($p_id);
		//$data['subCat']=$this->Project_model->getSubCatData($p_id);
		//var_dump($data);
		$this->load->view('project/project_ongoing',$data);
	}

	// project table page 
	public function project_table_page()
	{
		$this->load->view('project/project_table');
	}

	// project_completed
	public function project_completed()
	{
		$this->load->view('project/project_completed');
	}


	// project full page 
	public function project_full_page()
	{
		$this->load->view('project/project_full_page');
	}


	// About Us page 
	public function aboutUs()
	{
		$this->load->view('aboutUs/aboutUs');
	}


	// Courses page 
	public function achievement()
	{
		$this->load->view('achievement/achievement');
	}

	// Courses page 
	public function courses()
	{
		$this->load->view('courses/courses');
	}


	// Contact Us page 
	public function contactUs()
	{
		$this->load->view('contactUs/contactUs');
	}


	// Gallery page 
	public function gallery()
	{
		//$data['getPhotoID']=$this->Album_model->getPhotoID();
		$data['getPhotoData']=$this->Album_model->getPhoto();
		$data['subCat']=array();
		foreach ($data['getPhotoData'] as $proData) {
			array_push($data['subCat'],$this->Album_model->getSubPhotoData($proData->photo_id));
		}

		$this->load->view('gallery/gallery',$data);
	}
	


	// Vacancies page 
	public function vacancies()
	{
		$this->load->view('vacancies/vacancies');
	}


	// CSR page 
	public function csr()
	{
		$this->load->view('csr/csr');
	}

}
