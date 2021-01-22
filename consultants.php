<?php
include_once('email.php');
include_once('header.php');
?>

		<!-- Start Page Title Area -->
		<div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<h2>Join the TAAP's Consultants Team</h2>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		        		<!-- Start Consulting Services Area -->
		<section class="consulting-services-area pt-100 pb-70">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10">
			<h4>Are you looking for an opportunity to share your expertise in business?</h4>
			<p>We have a wide range of career opportunities for the professional business consultants, senior business managers and everyone in between. Our recruiters work hard to seek experience with a diversity of skills and backgrounds so that we are positioned to be more creative, more agile, more empathetic, and more effective in our work.</p>
			<p>
			Fill the form below to get started with our recruiting process, we will be delighted to help you share your knowledge and expertise for the cause of African business development.
			</p>

			<p>
				For questions about TAAP Initiative related opportunities, call us on <a class="text-danger" href="tel:+1-(514)-321-4477">+256 (775) 72-5074</a> or email us at <a class="text-danger" href="mailto:hello@aels.co.ug">hello@aels.co.ug</a>
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
							<form action="" method="post" autocomplete="off">
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
		<input type="hidden" name="subject" value="Join Team">

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
				<input type="text" name="linkedin" id="linkedin" class="form-control" required  placeholder="Linkedin link">
			</div>
		</div>

		<div class="col-lg-6 col-sm-6">
			<div class="form-group">
				<input type="text" name="speciality" id="speciality" class="form-control" required  placeholder="Your Speciality">
			</div>
		</div>

		<div class="col-lg-6 col-sm-6">
			<div class="form-group">
				<input type="text" name="industry" id="industry" class="form-control" required  placeholder="Industry you work in">
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