<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homemodel extends CI_Model{


       public function __construct()
        {
                parent::__construct();
                $this->load->database();
		       
        }


        public function index_Ads($limitstart,$limitend){

           $query = $this->db->where('Status',1)
                             ->order_by('Time', 'DESC')
                             ->limit($limitstart,$limitend)
                             ->get('ads');
                            
          
           
          
              
           return $query->result();
        }



       }