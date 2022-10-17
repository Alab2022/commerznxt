<?php include('include/head.php'); ?>    
	<div class="container-fluid login">
        <div class="row">
			<div class="col-lg-7 col-md-12 col-sm-12 px-0">
				<div class="image-wrapper"> <img src="img/login-vector.png" alt=""> </div>
			</div>
			<div class="col-lg-5 col-md-12 col-sm-12 px-0">
				<div class="form-wrapper-main d-flex align-items-center fo-flx-js-center">
					<div class="form-wrapper form-wrapper-login logo_log text-center"> <img src="img/logo-main.png" alt="">
						<h5 class="title mt-4">Forgot Password?</h5>
						<h6 class="mt-4 mb-4 dark">A Verification code will be send to your
                        registered Email / Mobile</h6>
						<form action="/action_page.php">
							<div class="mb-3 mt-3">
								<input type="email" class="form-control shadow-cs form-control-lg" id="email" placeholder="Enter Email / Mobile" name="email">
								<div class="error-msg"> Invalid Email / Mobile </div>
							</div>
						</form> <a href="verification.html" class="btn btn-primary w-100 mt-3">Send Verification Code</a>
						<div class="mt-3"> <a href="login.php">Back to Login?</a> </div>
						<div class="success-msg">
							<h6>Verification code has been sent</h6> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
    
	<?php include('include/footer.php'); ?>