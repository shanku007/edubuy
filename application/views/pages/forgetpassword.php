<div class="container">
   <div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-in-form">
						<div class="sign-in-form-top">
							<h1>Recover your Account Password</h1>
						</div>
             <div class="signin">
             <p class="text-primary">
                   Enter Your Email Id 
                   </p>
							
							<?= form_open('login/recover_validation'); ?>
							<div class="log-input">
								<div class="log-input-left">
								<?php $attrib_id = array(
               'name'          => 'id',
               'id'            => 'email',
               'value'         => set_value('id',''),
               'placeholder'   => 'Enter Your Email',
               'maxlength'     => '50',
               'size'          => '50',
               'required'      =>  'required',
               'class'         => 'user'
        
);  ?>       
                  <?=  form_input($attrib_id); ?>
                  <?=	form_error('id'); ?>
								   
								</div>
								
								<div class="clearfix"> </div>
							</div>
							
							<?=	form_submit('Submit', 'Submit'); ?>

						</form>	 
						</div>

						<div class="clearfix"> </div>
						<p><a href="<?= site_url('login'); ?>"><i class="fa fa-arrow-left" aria-hidden="true"></i> Cancel and go back to Login page</a></p> 
			</div>
		</div>
	</div>
</div>





</div>
	