<?php
include_once('header.php');

$code = $_GET['module'];
		// $code = "Legal-Governance";
       $con = new mysqli('localhost','root', '', 'new_taap');

	   $pre_stmt = "SELECT * FROM technical_areas WHERE code = '".$code."'";
	   $stmt = $con->query($pre_stmt);
		 $rows = $stmt->fetch_assoc();
		
?>

		<!-- Start Page Title Area -->
		<div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<h2><?php echo $rows['title']; ?></h2>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		        		<!-- Start Consulting Services Area -->
		<section class="consulting-services-area pt-5 pb-70">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10">
			<p><?php echo $rows['details']; ?>
			</p>

			<p>
				Call us on <a class="text-danger" href="tel:+1-(514)-321-4477">+256 (775) 72-5074</a> or email us at <a class="text-danger" href="mailto:hello@aels.co.ug">hello@aels.co.ug</a> for more details
			</p>
						</div>
		</div>
               
                </div>
		</section>
		<!-- End Consulting Services Area -->
<?php
include_once('footer.php');
?>