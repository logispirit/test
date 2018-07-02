<?php
    class Album_model extends CI_model{
  
      public function __construct() {
           parent::__construct();
       }
       
      public function addPhoto($data){
           $result = $this->db->insert("photo_album", $data);
           return $result;
       
       }

      //  public function addproject_sub_cat($data){
      //      $result = $this->db->insert("project_sub_cat", $data);
      //      return $result;
       
      //  }
       public function getPhoto(){
         
            $query = $this->db->get('photo_album');
                return $query->result();
       
       }

      public function getSubPhotoData($id){
           
          
           $query = $this->db->where(array('photo_id'=>$id))
            ->get('photo_album');
            return $query->row();
       
       }
       
      
      
    }    
?>