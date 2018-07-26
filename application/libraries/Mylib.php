<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');

class Mylib{


	public function categories_name($category_id){
		$categoryname = array('Mobiles Phone','Tablets','Mobile Acessories','Computers & Accessories','Tv-Video-Audio','Cameras & Accessories','Games and Entertainment','Fridge-AC-Washing Machine','Kitchen and other Appliances','Drafter and Sheet Holder','Calculator','Lab Coat','MotorCycles','Scooters','Bicycles','Cars','Spare Parts','Sofa and Dining','Beds and Wardrobes','Home Decor and Garden','Other Household item','Books and Magazines','Sports Equipment','Gym and Fitness','Musical Instrument','Other Hobbies','Notes');
		$categoryId = $category_id - 1;
		echo $categoryname[$categoryId];
	}


	public function timeago($time) { 
     $time_ago = strtotime($time);
     
    $cur_time   = time();
    $time_elapsed   = $cur_time - $time_ago;
    $seconds    = $time_elapsed ;
    $minutes    = round($time_elapsed / 60 );
    $hours      = round($time_elapsed / 3600);
    $days       = round($time_elapsed / 86400 );
    $weeks      = round($time_elapsed / 604800);
    $months     = round($time_elapsed / 2600640 );
    $years      = round($time_elapsed / 31207680 );
    // Seconds
    if($seconds <= 60){
        return "just now";
    }
    //Minutes
    else if($minutes <=60){
        if($minutes==1){
            return "one minute ago";
        }
        else{
            return "$minutes minutes ago";
        }
    }
    //Hours
    else if($hours <=24){
        if($hours==1){
            return "an hour ago";
        }else{
            return "$hours hrs ago";
        }
    }
    //Days
    else if($days <= 7){
        if($days==1){
            return "yesterday";
        }else{
            return "$days days ago";
        }
    }
    //Weeks
    else if($weeks <= 4.3){
        if($weeks==1){
            return "a week ago";
        }else{
            return "$weeks weeks ago";
        }
    }
    //Months
    else if($months <=12){
        if($months==1){
            return "a month ago";
        }else{
            return "$months months ago";
        }
    }
    //Years
    else{
        if($years==1){
            return "one year ago";
        }else{
            return "$years years ago";
        }
    }
   }

//For echoing main category on the single page

   public function category($cat_id){

   	if($cat_id<4){
   		return 'Mobiles';
   	}
   	if($cat_id>=4 AND $cat_id <10){
   		return 'Electronics and Appliances' ;
   	}
   	if($cat_id>=10 AND $cat_id <13){
   		return 'Stationary';
   	}
   	if($cat_id >=13 AND $cat_id < 18){
   		return 'Transportation';
   	}
   	if($cat_id>=18 AND $cat_id <22){
   		return 'Furnitures';
   	}
   	if($cat_id>=22 AND $cat_id<27) {
   		return 'Books Sports and Hobbies';
   	}

   }


//For adding the main category while posting Ad
   public function main_category($cat_id){

    if($cat_id<4){
      return 1;
    }
    if($cat_id>=4 AND $cat_id <10){
      return 2 ;
    }
    if($cat_id>=10 AND $cat_id <13){
      return 3;
    }
    if($cat_id >=13 AND $cat_id < 18){
      return 4;
    }
    if($cat_id>=18 AND $cat_id <22){
      return 5;
    }
    if($cat_id>=22 AND $cat_id<27) {
      return 6;
    }

   }


//for echoing link on the single Ad
   public function category_link($cat_id){

   $link = ['Mobiles/1','Eletronics-Appliances/2','Stationary/3','Transportation/4','Furnitures/5','Books-Hobby-Sports/6'];

   $cat_id = $cat_id - 1;
    echo site_url($link[$cat_id]);



   }







   public function college_name($college_id){
     
     $college = array('Bhagwan Parashuram Institute of Technology','Bharti Vidyapeeth\'s College of Engineering','Ambedkar Institute of Advanced Studies','Amity School of Engg  & Technology ','BM Institute of Engineering & technology','Ch Brahm Prakash Govt Engineering College','Delhi Institute of Tool Engineering','Delhi Technical Campus','GB Pant Govt Engineering College','Guru Tegh Bahadur  Institute of Technology','IIMR Institute of Technology and Management','HMR Institute of Technology  and Management','JIMS Engineering Management  Technical Campus','Maharaja Agrasen Institute  of Technology','Maharaja Surajmal Institute of Technology','Mahavir Swami Institute of Technology','Northern India Engineering College','National Power Training Institute','Bhagwan Mahavir College of Engineering & Management','Acharya Narendra Dev College','Aditi Mahavidyalaya','Ahilya Bai College of Nursing','Amar Jyoti Institute of Physiotherapy','Atma Ram Sanatan Dharam College','Aryabhatta College','Ayurvedic & Unani Tibbia College','Bhagini Nivedita College','Bharati College','Bhaskaracharya College of Applied Sciences','Bhim Rao Ambedkar College','Chacha Nehru Bal Chikitsalaya','College of Art','College of Nursing at Army Hospital (R & R)','College of Vocational Studies','Daulat Ram College','Deen Dayal Upadhyaya College','Delhi College of Arts & Commerce','Delhi Institute of Pharmaceutical Sciences & Research','Deshbandhu College','Durga Bai Deshmukh College of Special Education','Dyal Singh College','Dyal Singh College (Evening)','Gargi College','Hans Raj College','Hindu College','Holy Family College of Nursing','Indira Gandhi Institute of Physical Education & Sports Sciences','Indraprastha College for Women','Institute of Home Economics','Janki Devi Memorial College','Jesus & Mary College','Kalindi College','Kamala Nehru College','Keshav Mahavidyalaya','Kirori Mal College','Lady Hardinge Medical College','Lady Irwin College','Lady Shri Ram College for Women','Lakshmibai College','Maharaja Agrasen College','Maharshi Valmiki College of Education','Maitreyi College','Mata Sundri College for Women','Maulana Azad Institute of Dental Sciences','Maulana Azad Medical College','Miranda House','Motilal Nehru College','Motilal Nehru College (Evening)','Nehru Homoeopathic Medical College & Hospital','Netaji Subhas Institute of Technology','P.G.D.A.V. College','Pt. Deendayal Upadhyaya Institute of Physically Handicapped','P.G.D.A.V. College (Evening)','Rajdhani College','Rajkumari Amrit Kaur College of Nursing','Ram Lal Anand College','Ramanujan College','Ramjas College','Satyawati College','Satyawati College (Evening)','School of Open Learning','Shaheed Bhagat Singh College (Evening)','Shaheed Rajguru College of Applied Sciences for Women','Shaheed Sukhdev College of Business Studies','Shivaji College','Shri Ram College of Commerce','Shyam Lal College','Shyam Lal College (Evening)','Shyama Prasad Mukherji College for Women','Sri Aurobindo College','Sri Aurobindo College (Evening)','Sri Guru Gobind Singh College of Commerce','Sri Guru Nanak Dev Khalsa College','Sri Guru Teg Bahadur Khalsa College','   Sri Venkateswara College','St. Stephen\'s College','Swami Shraddhanand College','University College of Medical Sciences & Guru Teg Bahadur Hospital','Vallabhbhai Patel Chest Institute','Vivekananda College','Zakir Husain Delhi College','Zakir Husain Post Graduate Evening College');

     echo $college[$college_id-1];

   }

   public function collegeselect(){

   ?><select name="col_name" class="selectpicker show-tick" data-live-search="true" required="required" id="college_id">
            <option value = "">ALL COLLEGES</option>
            <optgroup label="Popular Colleges">
                          <option selected style="display:none;color:#eee;" value="" >Select Your College</option>

                          <option value="1">  
Bhagwan Parashuram Institute of Technology</option>
                          <option value="2">  
Bharti Vidyapeeth's College of Engineering</option>
                          
                        </optgroup>


                       <optgroup label="More Colleges">
             <optgroup label="Guru Gobind Singh Indraprashtha University">
                          
                            

                            <?php for($i=0;$i<=18;$i++){ ?>
                <option value="<?= $i+1; ?>"><?= $this->college_name($i+1); ?> 

                </option>

              <?php } ?>
          
              </optgroup>



              <optgroup label="Delhi University"> 
               <?php for($i=19;$i<=101;$i++){ ?>
                <option value="<?= $i+1; ?>"><?= $this->college_name($i+1); ?> 

                </option>

              <?php } ?>


                
              </optgroup>

              </optgroup>
          </select>



          <?php

   }


   public function message($data){
   
    ?>  <div class="alert alert-<?php echo $data['class']; ?>">
                          <button type="button" class="close" data-dismiss="alert">&times;</button> 
                          <?php echo $data['message']; ?>
                          </div>

    <?php 

   }

   
   






	
}