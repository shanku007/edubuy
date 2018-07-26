<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginmodel extends CI_Model{


       public function __construct()
        {
                parent::__construct();
                $this->load->database();
		       
        }



        public function is_registered($id){
          $sql = "SELECT * FROM userbase WHERE email = ?";
         $query = $this->db->query($sql, array($id));
            if($query->num_rows()>0){
       	              	return TRUE;
       	              } 

       	    else{
       	              	return FALSE;
       	           }  
        }




        public function checkuser($id,$password){
           $sql = "SELECT * FROM userbase WHERE email = ? AND Active  = ?";
           $query = $this->db->query($sql, array($id,1));

       	     if($query->num_rows()){
                    if(password_verify($password,$query->row()->Password)){
                         
                         return $query->row()->PhoneNo;
                       }else{

                      return FALSE;
                    }

       	     }
             else{

       	     	return FALSE;
       	     }


        }




        public function update_reset_code($email,$reset_code){

        $data = array('PasswordReset' => $reset_code);


          
          $this->db->where('email', $email);
          if($this->db->update('userbase', $data)){
             $retrieve = $this->db->where('email',$email)
                               ->get('userbase');
             return $retrieve->row()->PhoneNo;

          }
          else{
                
                return FALSE;
          }

        }



       public function reset_password($phone,$code){
        $this->load->helper('string');
        $sql = "SELECT * FROM userbase WHERE PhoneNo = ? AND PasswordReset = ? AND Active = ?";
       $query = $this->db->query($sql, array($phone,$code,1));
        if($query->num_rows()){
          $reset_code = random_string('md5',32);
          $data = array('PasswordReset' => $reset_code);
          $this->db->where('PhoneNo',$phone);
          $this->db->update('userbase', $data);
          return TRUE;
        }else{
          return FALSE;
        }

       }





    }