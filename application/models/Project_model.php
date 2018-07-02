<?php
    class Project_model extends CI_model{
  
      public function __construct() {
           parent::__construct();
       }
       
      public function addProjectData($data){
           $result = $this->db->insert("project", $data);
           return $result;
       
       }

       public function addproject_sub_cat($data){
           $result = $this->db->insert("project_sub_cat", $data);
           return $result;
       
       }
       public function getProjectData(){
         
            $query = $this->db->get('project');
                return $query->result();
       
       }
       public function getSubCatData($id){
           
          
           $query = $this->db->where(array('project_id'=>$id))
            ->get('project_sub_cat');
            return $query->row();
       
       }
      
      
    }    
?>