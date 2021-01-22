<?php
include_once('email.php');
include_once('header.php');
?>

		<!-- Start Page Title Area -->
		<div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<h2>Fill the form to signup for TAAP!</h2>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		        		<!-- Start Consulting Services Area -->
		<section class="consulting-services-area pt-100 pb-70">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10">
			<h4>The signup process</h4>
			<p>Provide a few information about yourself through the form below and we shall start on you registration confirmation and start finding a solution for your enterprise. Its' that easy!
			   </p>
						</div>
		</div>
               
                </div>
		</section>
		<!-- End Consulting Services Area -->

		<!-- Start Contact Area -->
		<section id="contact" class="contact-area consulting-contact-area pt-70 pb-100">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="contact-form">
							<form action="" method="post">
								    <?php if(!empty($statusMsg)){ ?>
        <p class="alert alert-warning alert-dismissible statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?>
        	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
        </p>
    <?php } ?>
	<div class="row">
		<div class="col-lg-6 col-sm-6">
			<div class="form-group">
				<input type="text" name="name" id="name" class="form-control" required placeholder="Name">
			</div>
		</div>
		<input type="hidden" name="subject" value="Signup">

		<div class="col-lg-6 col-sm-6">
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control" required placeholder="Email address">
			</div>
		</div>

		<div class="col-lg-6 col-sm-6">
			<div class="form-group">
				<input type="text" name="phone" id="phone" required class="form-control" placeholder="Phone number">
			</div>
		</div>

		<div class="col-lg-6 col-sm-6">
			<div class="form-group">
				<input type="text" name="company" id="company" class="form-control" required placeholder="Organisation">
			</div>
		</div>

		<div class="col-lg-6 col-sm-6">
			<div class="form-group">
				<input type="text" name="job_title" id="job_title" class="form-control" required  placeholder="Job title">
			</div>
		</div>

		<div class="col-lg-6 col-sm-6">
			<div class="form-group">
				<input type="text" name="country" id="country" class="form-control" required placeholder="Country">
			</div>
		</div>

		<div class="col-lg-12 col-md-12">
			<div class="form-group">
				<textarea name="message" class="form-control" id="message" cols="30" rows="8" required placeholder="Describe your need in a few words"></textarea>
			</div>
		</div>

		<div class="col-lg-12 col-md-12">
			<button type="submit" name="submit" class="default-btn">
				Signup
			</button>
			<div class="clearfix"></div>
		</div>
	</div>
</form>
</div>
</div>
</div>
</div>

			<div class="shape">
				<img src="assets/img/consulting/shape-4.png" alt="Image">
			</div>
		</section>
		<!-- End Contact Area -->

		<?php
include_once('footer.php');
?>