
	 <section>
			<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-up">
						<h1>Create an account</h1>
						<p class="creating">Create an account for free and manage all your Ads easily</h2>

<!-- Start of form -->

<!-- for name -->
						<?= form_open('registration/registration_verification'); ?>


						<div class="sign-u">
							<div class="sign-up1">
								<h4>Name* :</h4>
							</div>
							<div class="sign-up2">

    <?php $attrib_name = array(
        'name'          => 'name',
        'id'            => 'name',
        'value'         => set_value('name'),
        'maxlength'     => '50',
        'size'          => '50',
        'required'      =>  'required'
        
);  ?>       
                  <?=  form_input($attrib_name); ?>
                  <?=	form_error('name'); ?>


     


							</div>

							
							<div class="clearfix"> </div>
						</div>


<!-- for University -->
                      <div class="sign-u">
							<div class="sign-up1">
								<h4>College* :</h4>
							</div>
							<div class="sign-up2">
                            <?= $this->mylib->collegeselect(); ?>

                            <?= form_error('col_name'); ?>
                      </div>
                    
							<div class="clearfix"> </div>
						</div>

















<!-- for email -->
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Email Address* :</h4>
							</div>
							<div class="sign-up2">

							<?php $attrib_email = array(
        'name'          => 'email',
        'id'            => 'email_id',
        'placeholder'   => 'eg:edubuy@edubuy.com',
        'maxlength'     => '50',
        'size'          => '50',
        'required'      =>  'required',
        'value'         =>  set_value('email')
        
);         ?>
								
									<?= form_input($attrib_email);  ?>
							        <?=	form_error('email'); ?>
							</div>
							
							<div class="clearfix"> </div>
						</div>



<!--For Phone No. -->
<div class="sign-u">
							<div class="sign-up1">
								<h4>Phone No.* :</h4>
							</div>
							<div class="sign-up2">

							<?php $attrib_phone = array(
        'name'          => 'phone',
        'id'            => 'phone',
        
        'maxlength'     => '10',
        'size'          => '10',
        'required'      =>  'required',
        'value'         =>  set_value('phone')
       
        
);         ?>
								
									<?= form_input($attrib_phone);  ?>
							        <?=	form_error('phone'); ?>  
							</div>
							
							<div class="clearfix"> </div>
						</div>
<!-- for password -->

						<div class="sign-u">
							<div class="sign-up1">
								<h4>Password* :</h4>
							</div>
							<div class="sign-up2">
								<?php $attrib_password = array(
        'name'          => 'password',
        'id'            => 'password',
        'value'         => '',
        'maxlength'     => '50',
        'size'          => '50',
        'required'      =>  'required'
        
);         ?>
							<?= form_password($attrib_password); ?>	
							<?=	form_error('password'); ?>
							</div>
							
							<div class="clearfix"> </div>
						</div>


<!-- for password confirmation -->
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Confirm Password* :</h4>
							</div>
							<div class="sign-up2">
								
									<?php $attrib_conpassword = array(
        'name'          => 'conpass',
        'id'            => 'conpass',
        'value'         => '',
        'maxlength'     => '20',
        'size'          => '50',
        'required'      =>  'required'
        
);         ?>
							<?=	form_password($attrib_conpassword); ?>	
							<?php echo form_error('conpass'); ?>	
							</div>
							
							<div class="clearfix"> </div>
						</div>


<!--For Submit and Reset -->
						<div class="sub_home">
							<div class="sub_home_left">
							<?php 
							$attributes_reset = array(
        'class' => 'reset_class'

    
        
);

				?>
								
								<?= form_reset('Reset','Reset',$attributes_reset); ?>
									
								

							</div>
							<div class="sub_home_right">
							
							<?=	form_submit('Submit', 'Create'); ?>
							
							</div>



							<div class="clearfix"> </div>
						</div>

 <?=form_close(); ?>

					</div>
				</div>
			</div>
		<!--footer section start-->
		