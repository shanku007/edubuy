<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-in-form">
						<div class="sign-in-form-top">
							<h1>Reset Password</h1>
						</div>
						<div class="signin">
					<?= form_open('Useraccount/password_validation'); ?>
							<div class="log-input">
								<div class="log-input-left">

								<?php $attrib_password = array(
        'name'          => 'password',
        'id'            => 'password',
        'value'         => '',
        'maxlength'     => '50',
        'size'          => '50',
        'required'      =>  'required',
        'placeholder'   =>  'Password',
        'class'         => 'lock',
        'onfocus' => "this.value => '';",
        'onblur' => "if (this.value == '') {this.value = 'Email address:';}"
        
);         ?>
							<?= form_password($attrib_password); ?>	
							<?=	form_error('password'); ?>
								  
								</div>
								
								<div class="clearfix"> </div>
							</div>





					    <div class="log-input">
								<div class="log-input-left">

								<?php $attrib_conpassword = array(
        'name'          => 'conpass',
        'id'            => 'Confirm password',
        'value'         => '',
        'maxlength'     => '50',
        'size'          => '50',
        'required'      =>  'required',
        'placeholder'   =>  'Confirm Password',
        'class'         => 'lock',
        'onfocus' => "this.value => '';",
        'onblur' => "if (this.value == '') {this.value = 'Email address:';}"
        
);         ?>
							<?= form_password($attrib_conpassword); ?>	
							<?=	form_error('conpass'); ?>
								  
								</div>
								
								<div class="clearfix"> </div>
							</div>

					<?=	form_submit('Submit', 'Log In'); ?>

						</form>	 
			</div>
		</div>
	</div>