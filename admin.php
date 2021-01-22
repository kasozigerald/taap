<?php
session_start();
if(!isset($_SESSION['user_id'])){
	header("Location: login.php");
	
}

//include_once('db.php');
$con = new mysqli('localhost','root', '', 'new_taap');

	if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $code = $_POST['code'];
    $summary = $_POST['summary'];
    $details = $_POST['details'];

	$stmt = "INSERT INTO technical_areas(title,code,summary,details)
	 VALUES('$title','$code','$summary','$details')";

	 if($con->query($stmt)){

	 	$statusMsg = 'Module has been submitted successfully!';
	 }else{

       $statusMsg = 'Module failed to submit, please try again! '.mysqli_error($con);
  }


}
include_once('header.php');
?>

		<!-- Start Page Title Area -->
		<div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<h2>Welcome to TAAP admin panel</h2>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		        		<!-- Start Consulting Services Area -->
		<section class="consulting-services-area pt-100 pb-70">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10">
			<h4>Fill the form to create technical area modules</h4>
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
							<form action="" method="post" autocomplete="on">
								    <?php if(!empty($statusMsg)){ ?>
        <p class="alert alert-warning alert-dismissible statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?>
        	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
        </p>
    <?php } ?>
	<div class="row">

		<div class="col-lg-12 col-sm-12">
			<div class="form-group">
				<input type="text" name="title" id="title" required class="form-control" placeholder="Module Title">
			</div>
		</div>

		<div class="col-lg-12 col-sm-12">
			<div class="form-group">
				<select name="code" id="code" required class="form-control">
					<option value="">Chose module code name</option>
					<option value="People-Organisational-Capability">People-Organisational-Capability</option>
					<option value="LegalGovernance">Legal-Governance</option>
					<option value="Business-Strategy-Development">Business-Strategy-Development</option>
					<option value="Data-Analysis-Reporting">Data-Analysis-Reporting</option>
					<option value="Grant-Writting-Fundraising">Grant-Writting-Fundraising</option>
					<option value="Finance-Budget-Management">Finance-Budget-Management</option>
					<option value="Marketing-Communication">Marketing-Communication</option>
					<option value="Project-Management-Systems-Optimisation">Project-Management-Systems-Optimisation</option>
					<option value="Supply-Chain-Management">Supply-Chain-Management</option>
					<option value="Tax-Advisory-Services">Tax-Advisory-Services</option>
					<option value="Partnership-Onboarding">Partnership-Onboarding</option>					
				</select>
			</div>
		</div>

		<div class="col-lg-12 col-sm-12">
			<div class="form-group">
				<input type="text" name="summary" id="summary" class="form-control" required  placeholder="Module description">
			</div>
		</div>

		<div class="col-lg-12 col-md-12">
			<div class="form-group">
				<label>Details</label>
				<textarea name="details" class="form-control" id="summernote" cols="30" rows="8"></textarea>
			</div>
		</div>

		<div class="col-lg-12 col-md-12">
			<button type="submit" name="submit" class="default-btn">
				Create
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

 <script>

    $(document).ready(function() {
        //$('#summernote').summernote();
        CKEDITOR.replace( 'summernote' );
        $('.select_group').select2();
    });

  </script>