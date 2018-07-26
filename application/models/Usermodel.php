<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermodel extends CI_Model{


       public function __construct()
        {
                parent::__construct();
                $this->load->database();
		       
        }



        public function update_password($password){
          $phone = $this->session->userdata('id');
          
          $data  = array('Password' => $password);
          $this->db->where('PhoneNo',$phone);
          if($this->db->update('userbase', $data)){
          	return TRUE;
          }else{
          	return FALSE;
          }



        }



        public function user_ad($limit,$offset){



          $id = $this->session->userdata('id');
          $sql = "SELECT * from ads where PhoneNo = ? ORDER BY Time DESC limit ".$offset.','.$limit;
          $query = $this->db->query($sql,$id);
          return $query->result_array();
        }


        public function delete_ad($ad_id){
          $id = $this->session->userdata('id');
          if($id){
            $sql = "DELETE FROM ads where AdId = ? AND PhoneNo = ? limit 1";
            $query = $this->db->query($sql,array($ad_id,$id));
            if($query){
              return TRUE;
            }else{
              return FALSE;
            }
          }

        }



        


     }