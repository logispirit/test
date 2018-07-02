<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Album_controller extends CI_Controller {


	public function __construct() {

			parent::__construct();
			
			$this->load->model('Album_model','',true);
			$this->load->helper(array('form', 'url'));
	}


	public function addPhoto(){
		// var_dump($this->input->post());
	

		// 		$str_two ='0123456789';
	  	//   	$str_two= str_shuffle($str_two);
	  	//   	$photo_id=substr($str_two,0,7);




		$Description=$this->input->post('Description');




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







	//array data pass to database table
		$add_photo=array(
			// "photo_id" => $photo_id,
			"Discription" => $Description,
			"album_photo" => $photo1,
		);



		$result22= $this->Album_model->addPhoto($add_photo);


	}



}
