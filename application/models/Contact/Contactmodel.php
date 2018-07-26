<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactmodel extends CI_Model{


       public function __construct()
        {
                parent::__construct();
                $this->load->database();
		       
        }



        public function insert_info($message,$email,$phone,$name,$Ad_id){
        	  
           
            $sql = "INSERT INTO contactmessage (AdId,Name, PhoneNo, Email, Message) VALUES (?, ?, ?, ?, ?)";
            $this-> db-> query($sql,array($Ad_id,$name,$phone,$email,$message));
           

        	
          return TRUE;

        }


        



        

}
