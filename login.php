<?php include('include/head.php'); ?>    
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-7 col-md-12 col-sm-12 px-0">
				<div class="image-wrapper"> <img src="img/login-vector.png" alt=""> </div>
			</div>
			<div class="col-lg-5 col-md-12 col-sm-12 px-0">
				<div class="form-wrapper-main d-flex align-items-center fo-flx-js-center">
					<div class="form-wrapper form-wrapper-login logo_log text-center">
						<div class=" text-center"> <img src="img/logo-main.png" alt=""> </div>
						<h6 class="mt-4 mb-4 dark ">Please login to your account using your 
                        valid credentials</h6>
						<form action="/action_page.php">
							<div class="mb-3 mt-3">
								<input type="email" class="form-control shadow-cs form-control-lg" id="exampleFormControlInput1" placeholder="Enter Email / Mobile">
								<div class="error-msg"> Invalid Email / Mobile </div>
							</div>
							<div class=" po-inp mb-3">
								<input type="password" class="form-control shadow-cs form-control-lg" id="pwd" placeholder="Enter Password" name="pswd">
								<div class="error-msg"> Password is required </div> <img class="min-icon" src="img/lo-eye.svg" alt=""> </div> <a href="forgotpassword.php">Forgot Password?</a> </form>
						<button type="submit" class="btn btn-primary w-100 mt-3">Login</button>
					</div>
					<!-- <div class="copyright">
                    <h6>© 2022 CommerzNxt.com</h6>
                </div> --></div>
			</div>
		</div>
	</div>
    
	<?php include('include/footer.php'); ?>