                        <script>
                              

                              $(document).ready(function() {
                                        var url = "<?= $this->uri->segment(1) ?>";
                                        if(url == "Postad"){
                                        $(".sellbutton").css("display","none");
                                    }
                                    });


                            </script>



	<!-- Submit Ad -->
	
	<div class="submit-ad main-grid-border">
		<div class="container">
			<?php echo $error; ?>
			<h2 class="head">Post an Ad</h2>


			<div class="post-ad-form">
			<?= form_open_multipart('postad/upload'); ?>
        
					<label>Category <span>*</span></label>
					  <select class="" name="category" require="required">
						<optgroup label="Mobiles">
													<option selected style="display:none;color:#eee;" value="" >Select Categoy</option>
													<option value="1">Mobiles Phone</option>
													<option value="2">Tablets</option>
													<option value="3">Accessories</option>
													
						</optgroup>


                       
					    <optgroup label="Electronics and Appliances">
													
													<option value="4">Computers & Accessories</option>
                                                    <option value="5">Tv-Video-Audio</option>
                                                    <option value="6">Cameras & Accessories</option>
                                                    <option value="7">Games and Entertainment</option>
                                                    <option value="8">Fridge-AC-Washing Machine</option>
                                                    <option value="9">Kitchen and other Appliances</option>
					
					    </optgroup>



					     <optgroup label="Stationarys">
													
	                                            <option value="10">Drafter and Sheet Holder</option>
                                                    <option value="11">Calculator</option>
                                                    <option value="12">Lab Coat</option>
                                                    <option value="27">Notes</option>
                                                   
					
					     </optgroup>




					     <optgroup label="Transportation">
													
													<option value="13">MotorCycles</option>
                                                    <option value="14">Scooters</option>
                                                    <option value="15">Bicycles</option>
                                                    <option value="16">Cars</option>
                                                    <option value="17">Spare Parts</option>
                                                   
					
					    </optgroup>




					     <optgroup label="Furnitures">
													
													<option value="18">Sofa and Dining</option>
                                                    <option value="19">Beds and Wardrobes</option>
                                                    <option value="20">Home Decor and Garden</option>
                                                    <option value="21">Other Household item</option>
                                                    
					
					    </optgroup>






					     <optgroup label="Books Sports and Hobbies">
													
													<option value="22">Books and Magazines</option>
                                                    <option value="23">Sports Equipment</option>
                                                    <option value="24">Gym and Fitness</option>
                                                    <option value="25">Musical Instrument</option>
                                                    <option value="26">Other Hobbies</option>
                                                   
					
					    </optgroup>
					  </select>
					  <?= form_error('category'); ?>

				<div class="clearfix"></div>





			<div class="tooltip_modified">
			  <label>Ad Title <span>*</span></label>
					<?php $title_attribute = array(
        'name'          => 'title',
        'id'            => 'title',
        'value'         => set_value('title',''),
        'maxlength'     => '100',
        'size'          => '80',
        'class'         => 'phone',
        'type'          => 'text',
        'required'      => 'required',
        'placeholder'   => 'Enter a title for your Ad'     
); ?>
        <?= form_input($title_attribute); ?>
         
					
              <div class="tooltiptext_modified">
              	<strong>Want to get your Ad noticed?</strong>
              	<ul>
                <li>Give an attractive title to your Ad. </li>
                <li>Think of words that people will think while searching for your Ad. </li>
                <li>Do not use CAPITAL letter and symbols in your title.</li>
              	</ul>
              </div>
		  </div>
	    <?= form_error('title'); ?>
		     <div class="clearfix"></div>









          <div class="tooltip_modified">
					<label>Ad Description <span>*</span></label>
					<?php $description_attribute = array(
        'name'          => 'description',
        'id'            => 'description',
        'value'         => set_value('description',''),
        'maxlength'     => '1000',
        'size'          => '1000',
        'class'         => 'mess',
        'required'      => 'required',
        'placeholder'   => 'Include the brand, model, age and any included accessories '     
); ?>
        <?= form_textarea($description_attribute); ?>
         
					
                    <div class="tooltiptext_modified">
                    	<strong>Item with good description sell faster!</strong>
              	<ul>
                <li>Include the brand, model, age and any other accessories.</li>
                <li>Mention the condition, features and reason of selling.</li>
                <li>If item is still under warranty mention it.</li>
              	</ul>
                    </div>
		          </div>
		<?= form_error('description'); ?>
					<div class="clearfix"></div>



		<div class="tooltip_modified">
					<label>Price<span>*</span></label>
					<?php $price_attribute = array(
        'name'          => 'price',
        'id'            => 'price',
        'value'         => set_value('price',''),
        'placeholder'   => 'Enter a reasonable price',
        'type'          => 'number',
        'required'      => 'required',
        'class'         => 'price' 
); ?>
        <?= form_input($price_attribute); ?>
        
					
                    <div class="tooltiptext_modified">
                    	<strong>Really want to to sell your item</strong>
              	<ul>
                <li>Demand for a reasonable price.</li>
                <li>Don't try to inflate the price. </li>
               
              	</ul>
                    </div>
		          </div>
		 <?= form_error('price'); ?>
					<div class="clearfix"></div>





	
				<div class="upload-ad-photos">
				<div class="tooltip_image">
				<label>Photos for your ad :</label>	
				 
					<div class="photos-upload-view">
						<input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="40960000" />

						<div>
							<input type="file"  id="fileselect" name="images[]" multiple="multiple" />
							<button type="button" onClick="document.getElementById('fileselect').click()" class="btn btn-success btn-file">Upload Images</button>
							
							<div id="filedrag">or drop files here</div>
						</div>
						<div id="messages">
						<p>Status Messages</p>

						</div>
						</div>
						 <div class="tooltiptext_modified">
                    	<strong>Ad's with image sell faster!</strong>
              	<ul>
                <li>Upload three images of product from suitable angles.</li>
                <li>Size of image should be less than 1MB.</li>
                <li>Upload real image to build trust.</li>
               

               
              	</ul>
                    </div>

					<div class="clearfix"></div>
						<script src="<?= base_url('js/filedrag.js'); ?>"></script>
                </div>
            </div>



				
				

					<div class="personal-details">
<div class="tooltip_modified">					
						<label>Your Name <span>*</span></label>
						<?php $name_attribute = array(
        'name'          => 'name',
        'id'            => 'name',
        'value'         => set_value('name',''),
        'maxlength'     => '15',
        'size'          => '15',
        'class'         => 'name',
        'type'          => 'text',
        'required'      => 'required',
             
); ?>
        <?= form_input($name_attribute); ?>
        
						

<div class="tooltiptext_modified">
	<ul>
                <li>Use your real name to build trust.</li>
                <li>Donot use number and symbols in your name.</li>
               
              	</ul>
</div>
</div>
 <?= form_error('name'); ?>
						<div class="clearfix"></div>









<div class="college_selecter">
<label>Your College<span>*</span> </label>
 <?= $this->mylib->collegeselect(); ?>
					 <?= form_error('col_name'); ?>
</div>









<div class="tooltip_modified">

						<label>Your Mobile No <span>*</span></label>

	<?php $phone_attribute = array(
        'name'          => 'phone',
        'id'            => 'phone',
        'value'         => set_value('phone',''),
        'maxlength'     => '10',
        'size'          => '10',
        'class'         => 'phone',
        'type'          => 'tel',
        'required'      => 'required',
             
); ?>
        <?= form_input($phone_attribute); ?>
        
  <div class="tooltiptext_modified">

  	
              	<ul>
                <li>Your Phone no. will be visible to public.</li>
                <li>Your Phone no. will not be shared with anyone.</li>
                <li>Your Phone no. will be encypted before saving it to database.</li>
               
              	</ul>
  </div>
</div>
 <?= form_error('phone'); ?>
						<div class="clearfix"></div>






<div class="tooltip_modified">
						<label>Your Email Address<span>*</span></label>
						<?php $email_attribute = array(
        'name'          => 'email',
        'id'            => 'email',
        'value'         => set_value('email',''),
        'maxlength'     => '30',
        'size'          => '30',
        'class'         => 'email',
        'type'          => 'text',
        'required'      => 'required',
             
); ?>
        <?= form_input($email_attribute); ?>
        

						

<div class="tooltiptext_modified">
	
              	<ul>
                <li>Your email will be verified.</li>
                <li>Your Ad would not be visible to public unless you verify your email. </li>
                <li>Please register to avoid email verification.</li>
               
              	</ul>
</div>
</div>
         <?= form_error('email'); ?>
						<div class="clearfix"></div>

						
  
						<p class="post-terms">By clicking <strong>post Button</strong> you accept our <a href="<?= site_url('home/re_direct/terms'); ?>" target="_blank">Terms of Use </a> and <a href="<?= site_url('home/re_direct/privacy'); ?>" target="_blank">Privacy Policy</a></p>
				<?= form_submit('Submit','Post'); ?>
										
					<div class="clearfix"></div>
					</form>
					</div>
			</div>
		</div>	
	</div>
	<!-- // Submit Ad -->



	