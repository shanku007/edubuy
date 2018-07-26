<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maincategorymodel extends CI_Model{


       public function __construct()
        {
                parent::__construct();
                $this->load->database();

		       
        }



        public function all_classified($cat,$search,$limit,$offset){

            $sort    = $this->session->userdata('sort');
            $college = $this->session->userdata('college');
            $min     = $this->session->userdata('min');
            $max     = $this->session->userdata('max');
            
            if($sort==3){
              unset($_SESSION['sort']);
            }
            
              if($min==NULL){
              $min = 0;
             }
             if($max == NULL){
              $max = 100000000000000;
             }
            
             

            if($search!=NULL){

              if($sort AND $college AND ($min OR $max)){

              if($sort==1){
              $sql = "SELECT * FROM ads WHERE Maincategory = ? AND  AdTitle LIKE ?  AND College_id = ? AND Status=? AND PRICE BETWEEN ? AND ? ORDER BY Price ASC, Time DESC limit ".$offset.','.$limit;
              $query = $this->db->query($sql,array($cat,'%'.$search.'%',$college,'1',$min,$max));
              return $query->result_array();

                   }else{
              $sql = "SELECT * FROM ads WHERE Maincategory = ? AND AdTitle LIKE ?  AND College_id = ? AND Status=? AND PRICE BETWEEN ? AND ? ORDER BY Price DESC, Time DESC limit ".$offset.','.$limit;
              $query = $this->db->query($sql,array($cat,'%'.$search.'%',$college,'1',$min,$max));
              return $query->result_array();

                   }
             

            }

            if($sort AND $college){
              if($sort==1){
              $sql = "SELECT * FROM ads WHERE Maincategory = ? AND AdTitle LIKE ? AND Status=? AND College_id = ?  ORDER BY Price ASC, Time DESC limit ".$offset.','.$limit;
              $query = $this->db->query($sql,array($cat,'%'.$search.'%','1',$college));
              return $query->result_array();
                  }else{
                        

              $sql = "SELECT * FROM ads WHERE Maincategory = ? AND  AdTitle LIKE ? AND Status=? AND College_id = ?  ORDER BY Price DESC, Time DESC limit ".$offset.','.$limit;
              $query = $this->db->query($sql,array($cat,'%'.$search.'%','1',$college));
              return $query->result_array();
                  }

            }

            if($college AND ($min OR $max)){
             
              $sql = "SELECT * FROM ads WHERE Maincategory = ? AND AdTitle LIKE ? AND College_id = ? AND Status=? AND PRICE BETWEEN ? AND ? limit ".$offset.','.$limit;
              $query = $this->db->query($sql,array($cat,'%'.$search.'%',$college,'1',$min,$max));
              return $query->result_array();
             

            }


            if($sort AND ($min OR $max)){
              if($sort==1){
              $sql = "SELECT * FROM ads WHERE Maincategory = ? AND AdTitle LIKE ? AND Status=? AND PRICE BETWEEN ? AND ? ORDER BY Price ASC, Time DESC limit ".$offset.','.$limit;
              $query = $this->db->query($sql,array($cat,'%'.$search.'%','1',$min,$max));
              return $query->result_array();
                  }else{
                        

              $sql = "SELECT * FROM ads WHERE Maincategory = ? AND  AdTitle LIKE ? AND Status=? AND PRICE BETWEEN ? AND ?  ORDER BY Price DESC, Time DESC limit ".$offset.','.$limit;
              $query = $this->db->query($sql,array($cat,'%'.$search.'%','1',$min,$max));
              return $query->result_array();
                  }

            }


            if($college){
              
              $sql = "SELECT * FROM ads WHERE Maincategory = ? AND AdTitle LIKE ? AND Status=? AND College_id = ? limit ".$offset.','.$limit;
              $query = $this->db->query($sql,array($cat,'%'.$search.'%','1',$college));
              return $query->result_array();

            }

            if($min OR $max){
            

             $sorting = $this->mylib->sorting($sort);
              $sql = "SELECT * FROM ads WHERE Maincategory = ? AND  AdTitle LIKE ? AND Status=? AND PRICE BETWEEN ? AND ? limit ".$offset.','.$limit;
              $query = $this->db->query($sql,array($cat,'%'.$search.'%','1',$min,$max));
              return $query->result_array();

            }

            if($sort){

              if($sort==1){
              $sql = "SELECT * FROM ads WHERE Maincategory = ? AND AdTitle LIKE ? AND Status=? ORDER BY Price ASC, Time DESC limit ".$offset.','.$limit;
              $query = $this->db->query($sql,'1',array($cat,'%'.$search.'%','1'));
              return $query->result_array();
                 }else{

               $sql = "SELECT * FROM ads WHERE Maincategory = ? AND  AdTitle LIKE ? AND Status=? ORDER BY Price DESC, Time DESC limit ".$offset.','.$limit;
              $query = $this->db->query($sql,array($cat,'%'.$search.'%','1'));
              return $query->result_array();


                 }


            }
            

            $sql = "SELECT * FROM ads WHERE Maincategory = ? AND  AdTitle LIKE ? AND Status = ? ORDER BY Time DESC limit ".$offset.','.$limit;
            $query = $this->db->query($sql,array($cat,'%'.$search.'%','1'));
            return $query->result_array();

            }else{
            
            if($sort AND $college AND ($min OR $max)){

              if($sort==1){
              $sql = "SELECT * FROM ads WHERE Maincategory = ? AND College_id = ? AND Status=? AND PRICE BETWEEN ? AND ? ORDER BY Price ASC, Time DESC limit ".$offset.','.$limit;
              $query = $this->db->query($sql,array($cat,$college,'1',$min,$max));
              return $query->result_array();
                   }else{
              $sql = "SELECT * FROM ads WHERE Maincategory = ? AND College_id = ? AND Status=? AND PRICE BETWEEN ? AND ? ORDER BY Price DESC, Time DESC limit ".$offset.','.$limit;
              $query = $this->db->query($sql,array($cat,$college,'1',$min,$max));
              return $query->result_array();

                   }
             

            }

            if($sort AND $college){
              if($sort==1){
              $sql = "SELECT * FROM ads WHERE Maincategory = ? AND  Status=? AND College_id = ?  ORDER BY Price ASC, Time DESC limit ".$offset.','.$limit;
              $query = $this->db->query($sql,array($cat,'1',$college));
              return $query->result_array();
                  }else{
                        

              $sql = "SELECT * FROM ads WHERE Maincategory = ? AND Status=? AND College_id = ?  ORDER BY Price DESC, Time DESC limit ".$offset.','.$limit;
              $query = $this->db->query($sql,array($cat,'1',$college));
              return $query->result_array();
                  }

            }

            if($college AND ($min OR $max)){
             
              $sql = "SELECT * FROM ads WHERE Maincategory = ? AND College_id = ? AND Status=? AND PRICE BETWEEN ? AND ? ORDER BY Time DESC limit ".$offset.','.$limit;
              $query = $this->db->query($sql,array($cat,$college,'1',$min,$max));
              return $query->result_array();
             

            }

            if($sort AND ($min OR $max)){
              if($sort==1){
              $sql = "SELECT * FROM ads WHERE Maincategory = ? AND Status=? AND PRICE BETWEEN ? AND ? ORDER BY Price ASC, Time DESC limit ".$offset.','.$limit;
              $query = $this->db->query($sql,array($cat,'1',$min,$max));
              return $query->result_array();
                  }else{
                        

              $sql = "SELECT * FROM ads WHERE Maincategory = ? AND Status=? AND PRICE BETWEEN ? AND ?  ORDER BY Price DESC, Time DESC limit ".$offset.','.$limit;
              $query = $this->db->query($sql,array($cat,'1',$min,$max));
              return $query->result_array();
                  }

            }


            if($college){
              
              $sql = "SELECT * FROM ads WHERE Maincategory = ? AND Status=? AND College_id = ? ORDER BY Time DESC limit ".$offset.','.$limit;
              $query = $this->db->query($sql,array($cat,'1',$college));
              return $query->result_array();

            }

            if($min OR $max){
            

             
              $sql = "SELECT * FROM ads WHERE Maincategory = ? AND PRICE BETWEEN ? AND ? AND Status=? ORDER BY Time DESC limit ".$offset.','.$limit;
              $query = $this->db->query($sql,array($cat,$min,$max,'1'));
              return $query->result_array();

            }

            if($sort){

              if($sort==1){
              $sql = "SELECT * FROM ads WHERE Maincategory = ? AND  Status=? ORDER BY Price ASC, Time DESC limit ".$offset.','.$limit;
              $query = $this->db->query($sql,array($cat,'1'));
              return $query->result_array();
                 }else{

               $sql = "SELECT * FROM ads WHERE Maincategory = ? AND Status=? ORDER BY Price DESC, Time DESC limit ".$offset.','.$limit;
              $query = $this->db->query($sql,array($cat,'1'));
              return $query->result_array();


                 }


            }
            

            

          }
            
        }




    }

    ?>