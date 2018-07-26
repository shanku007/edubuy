<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adsmodel extends CI_Model{


       public function __construct()
        {
                parent::__construct();
                $this->load->database();
		       
        }





        public function singleAd($Ad_id){

        	 $sql = "SELECT * FROM ads WHERE AdId = ?";
             $query = $this->db->query($sql, array($Ad_id));
             $view = ($query->row()-> Views) + 1;
             $data =  array('Views'  => $view);
        	 $this->db->where('AdId',$Ad_id)
        	          ->update('ads',$data);
       
    		 return $query->result_array();
      
        }

        public function no_of_ads_category(){

            $sql = "CREATE OR REPLACE VIEW ads_number AS
                    SELECT count(AdId)
                    FROM ads GROUP BY Maincategory";
            $this->db->query($sql);
            $sql_new = "SELECT * FROM ads_number";
            $query = $this->db->query($sql_new);
            return $query->result_array();
        }

 }