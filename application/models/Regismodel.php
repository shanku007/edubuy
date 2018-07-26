<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regismodel extends CI_Model {


       public function __construct()
        {
                parent::__construct();
                $this->load->database();
		       
        }


   

       public function email_check($email){

        $sql = "SELECT * FROM userbase WHERE email = ?";

       

       	              if($this->db->query($sql, array($email))->num_rows()>0){
       	              	return FALSE;
       	              } 

       	              else{
       	              	return TRUE;
       	              }  
      


       }



       public function phone_check($phone){
        $sql = "SELECT * FROM userbase WHERE PhoneNo = ?";
        
       

       	              if($this->db->query($sql, array($phone))->num_rows()>0){
       	              	return FALSE;
       	              } 

       	              else{
       	              	return TRUE;
       	              }  
       
                     }




       public function insert_value($name,$college,$email,$phone,$password){
        $sql = "INSERT INTO userbase (UserName, email, PhoneNo, Password, College_id) VALUES (?, ?, ?, ?, ?)";
          $this-> db-> query($sql,array($name,$email,$phone,$password,$college));
          
        
            $sql = "SELECT * FROM userbase WHERE email = ?";
           $query = $this->db->query($sql, array($email));
          
              
           return $query->result_array();


       
       }








       public function remove($phone){

       	$this->db->delete('userbase', array('PhoneNo' => $phone));



       }




       public function update($phone,$code){

       	
        $sql = "SELECT Timestamp FROM userbase WHERE PhoneNo = ?";
        $query=$this->db->query($sql, array($phone));
       	



           
        if($query->num_rows()>0){
        foreach ($query->result() as $row)
                {
            $timestamp = md5((string)$row->Timestamp);

         }

     }else{

     	return FALSE;
     }

           if($code==$timestamp){

           	$data = array(
           		'Active' => 1);

           	$this->db->where('Phoneno', $phone);
           if($this->db->update('userbase', $data)){
           	return TRUE;
           }  else{

           	 FALSE;
           }

           }   else{

           	FALSE;
           }


       	
       }




}

?>