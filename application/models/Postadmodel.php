<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postadmodel extends CI_Model{


       public function __construct()
        {
                parent::__construct();
                $this->load->database();
		       
        }



        public function insert_info($title,$description,$col_name,$email,$phone,$name,$price,$category,$Ad_id,$status){
        	  
            $main_category = $this->mylib->main_category($category);
            if($category==27){
              $main_category = 3;  
            }
            $sql = "INSERT INTO ads (AdId, Maincategory, Category, AdTitle, AdDescription, College_id, Price, Name, PhoneNo, Email, Status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $this-> db-> query($sql,array($Ad_id, $main_category, $category,$title,$description,$col_name,$price,$name,$phone,$email,$status));
           

        	
          return TRUE;

        }


        public function update_image($image_name,$i,$Ad_id){

                $data = array('Image'.($i+1) => $image_name);
                $this->db->where('AdId',$Ad_id);
                if($this->db->update('ads',$data)){
                        return TRUE;
                }else{
                    return FALSE;
                }
                
        }



        public function Ad_update($Ad_id){
        	$data = array('Status'  => 1);
        	 $this->db->where('AdId',$Ad_id);

             if($this->db->update('ads',$data)){
             	return TRUE;
             }else{
             	return FALSE;
             }
        }

}
