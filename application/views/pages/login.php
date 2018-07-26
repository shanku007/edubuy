
	 <section>
			<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-in-form">
						<div class="sign-in-form-top">
							<h1>Log in</h1>
						</div>
						<div class="signin">
							
							<?= form_open('login/login_validation'); ?>
							<div class="log-input">
								<div class="log-input-left">
								<?php $attrib_id = array(
               'name'          => 'id',
               'id'            => 'id',
               'value'         => set_value('id',''),
               'placeholder'   => 'Enter Your Email ',
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
							<div class="log-input">
								<div class="log-input-left">

								<?php $attrib_password = array(
        'name'          => 'password',
        'id'            => 'password',
        'value'         => '',
        'maxlength'     => '50',
        'size'          => '50',
        'required'      =>  'required',
        'class'         => 'lock',
        'onfocus' => "this.value => '';",
        'onblur' => "if (this.value == '') {this.value = 'Email address:';}"
        
);         ?>
							<?= form_password($attrib_password); ?>	
							<?=	form_error('password'); ?>
								  
								</div>
								
								<div class="clearfix"> </div>
							</div>
							<div class="signin-rit">
								<span class="checkbox1">
									 <label class="checkbox"><input type="checkbox" name="checkbox" checked="">Forgot Password ?</label>
								</span>
								<p><a href="<?= site_url('login/forget_password'); ?>">Click Here</a> </p>
								<div class="clearfix"> </div>
							</div>
							<?=	form_submit('Submit', 'Log In'); ?>

						</form>	 
						</div>
						<div class="new_people">
							<h2>For New People</h2>
							<p>Create your account to manage your Ad's easily</p>
							<a href="<?= site_url('registration'); ?> " >Register Now!</a>
						</div>
					</div>
				</div>
			</div>
		
		<!--footer section start-->
		
			