<?php
include_once('email.php');
include_once('header.php');
?>

		<!-- Start Page Title Area -->
		<div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<h2>Partner with TAAP initiative</h2>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		        		<!-- Start Consulting Services Area -->
		<section class="consulting-services-area pt-100 pb-70">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10">
			<h4>Become a partner</h4>
			<p>We know that it takes combined effort to propel fundamental growth, we take this opportunity to invite your helping hand on this quest of enterprenuer and ESO empowerment. You or your company will work hand in hand with our staff on specified facets of this development, from proposal development through project implementation and or most importantly funding.</p>
			<p>It is in our intentions to maintain a lasting partnership that extends beyond the life of this project. If that goal aligns with yours, please fill out this form below and lets discuss more!</p>
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
				<input type="text" name="name" id="name" class="form-control" required placeholder="Full Name">
			</div>
		</div>
		<input type="hidden" name="subject" value="Partner Request">

		<div class="col-lg-6 col-sm-6">
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control" required placeholder="Email address">
			</div>
		</div>

		<div class="col-lg-6 col-sm-6">
			<div class="form-group">
				<input type="text" name="phone" id="phone_number" required class="form-control" placeholder="Phone number">
			</div>
		</div>

		<div class="col-lg-6 col-sm-6">
			<div class="form-group">
				<input type="text" name="country" id="country" class="form-control" required placeholder="Country">
			</div>
		</div>

		<div class="col-lg-6 col-sm-6">
			<div class="form-group">
				<select name="entity" id="entity" class="form-control" required>
					<option>Chose type of entity</option>
					<option value="Individual">Individual</option>
					<option value="Organisation">Organisation</option>
				</select>
			</div>
		</div>

		<div class="col-lg-6 col-sm-6">
			<div class="form-group">
				<input type="text" name="company" id="company" class="form-control" placeholder="Organisation Name">
			</div>
		</div>

		<div class="col-lg-6 col-sm-6">
			<div class="form-group">
				<input type="text" name="website" id="website" class="form-control" placeholder="Your website link">
			</div>
		</div>

		<div class="col-lg-6 col-sm-6">
			<div class="form-group">
				<select name="partnership" id="partnership" class="form-control" required>
					<option>Desired type of partnership</option>
					<option value="Monetory Funding">Monetory Funding</option>
					<option value="Consultation">Consultation</option>
					<option value="Human Resource">Human Resource</option>
					<option value="I will chose later">Chose Later</option>
				</select>
			</div>
		</div>

		<div class="col-lg-12 col-md-12">
			<button type="submit" name="submit" class="default-btn">
				Submit
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