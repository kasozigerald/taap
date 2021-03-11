<?php
$statusMsg = '';
$msgClass = '';
if(isset($_POST['submit'])){
    // Get the submitted form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Check whether submitted data is not empty
    if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
            $msgClass = 'errordiv';
        }else{

            $htmlContent = '<h2>TAAP Contact Request</h2>
                <h4>Name: </h4><p>'.$name.'</p>
                <h4>Email: </h4><p>'.$email.'</p>
                <h4>Phome: </h4><p>'.$phone.'</p>
                <h4>Subject: </h4><p>'.$subject.'</p>
                <h4>Message: </h4><p>'.$message.'</p>';

   require 'PHPMailerAutoload.php';
// require 'crudentials.php';

$mail = new PHPMailer;

// $mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'ssl://smtp.googlemail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'geracodes49@gmail.com';                 // SMTP username
$mail->Password = '3c$1000b@49';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom($_POST["email"]);
$mail->addAddress('mail@dreamhomesgypsumdesigns.com');     // Add a recipient
$mail->addReplyTo($_POST["email"]);

$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body    = $htmlContent;
// $mail->AltBody = $_POST["message"];
            
            // Send email
            if($mail->send()){
                $statusMsg = 'Your contact request has been submitted successfully !';
                $msgClass = 'succdiv';
            }else{
                $statusMsg = 'Your contact request submission failed, please try again.'.$mail->ErrorInfo;
                $msgClass = 'errordiv';
            }
        }
    }else{
        $statusMsg = 'Please fill all the fields.';
        $msgClass = 'errordiv';
    }
}
?>

<!doctype html>
<html lang="zxx">
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS --> 
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!-- Owl Theme Default CSS --> 
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		<!-- Owl Carousel CSS --> 
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<!-- Owl Magnific CSS --> 
		<link rel="stylesheet" href="assets/css/magnific-popup.css">
		<!-- Animate CSS --> 
		<link rel="stylesheet" href="assets/css/animate.css">
		<!-- Boxicons CSS --> 
		<link rel="stylesheet" href="assets/css/boxicons.min.css"> 
		<!-- Flaticon CSS --> 
		<link rel="stylesheet" href="assets/css/flaticon.css">
		<!-- Odometer CSS-->
		<link rel="stylesheet" href="assets/css/odometer.css">
		<!-- Style CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="assets/css/responsive.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="assets/img/consulting/favicon.png">
		<!-- Title -->
		<title>AELS TAAP</title>
    </head>

    <body id="home" data-spy="scroll" data-offset="70" class="consulting-body-color">
		
		<!-- Start Navbar Area -->
        <nav class="navbar navbar-expand-lg consulting-navbar">
           	<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<img src="assets/img/consulting/logo.jpg" alt="image">
				</a>

				<button class="navbar-toggler menu-icon" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav m-auto">
						<li class="nav-item">
							<a class="nav-link" href="#home">Home</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#challenge">The Challenge</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#solution">Solution</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#about">About Us</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#benefits">Benefits</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#testimonial">Testimonials</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#team">Team</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#faq">FAQs</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#contact">Contact</a>
						</li>
					</ul>

					<div class="other-option">
						<i class="bx bxs-phone-call"></i>
						<a href="tel:+1-(514)-321-4477">+256 (775) 72-5074</a>
					</div>
				</div>
		   	</div>
        </nav>
		<!-- End Navbar Area -->
		
		<!-- Start Consulting Banner Area -->
		<section class="consulting-banner-area">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="container-fluid">
						<div class="row align-items-center">
							<div class="col-md-7">
								<div class="consulting-banner-content">
									<h1>AELS Technical Assistance And Acceleration Program - AELS TAAP</h1>
									<p>TAAP is focused on building both internal organizational capability and offer project support for <span style="color:#f5e942; font-size: 2.3rem;">Entrepreneurs</span>  and <span style="color:#f5e942; font-size: 2.3rem;">Enterprise Support Organizations<span style="font-size: 2rem;">-ESOs or intermediaries</span></span>  in Uganda.</p>
								</div>	
					            <!-- Form submission status -->
                                <div class="response text-danger mt-3 p-3"></div>
							</div>
		
							<div class="col-md-5">
								<div class="consulting-banner-img">
									<img class="height: auto" src="assets/img/consulting/pt3.jpeg" alt="Image">

									<div class="video-button">
										<a href="https://www.youtube.com/watch?v=TdSA7gkVYU0" class="video-btn popup-youtube">
											<i class="bx bx-play"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="shape-1">
				<img src="assets/img/consulting/shape.png" alt="Image">
			</div>
			<div class="shape-2">
				<img src="assets/img/consulting/shape-2.png" alt="Image">
			</div>
		</section>
		<!-- End Consulting Banner Area -->

        		<!-- Start Consulting Services Area -->
		<section id="challenge" class="consulting-services-area pt-100 pb-70">
			<div class="container">
				<div class="row justify-content-center pb-100">
					<div class="col-md-10">
					<h2 class="text-center">The Challenge</h2>
			<p>Whereas development partners, venture capitalists (VCs) and angle investers are available globally to direct and tackle the problems in Uganda and Africa as a whole, there is a gap of institutional readiness to absorb the funding and also ensure delivery of the IMPACT as promised on a sustainable scale.</p><p> The VCs and ESOs have disbursed approximately USD 100M (this value is promised to double with more funders coming on board) to over 100 startups and intermediaries in the market to support job creation, skills development and financial inclusion but there is very little to show for this investiment.</p><p>
			It is documented that most of the sub guarantees do not have well defined and sustainable business capabilities to deliver the outcomes as promised to the VCs, create 3 million jobs, support 1000 startups and provide financial services to 10 million Village Loan Schems.</p><p>
			These challenges are organizational, systematic, process, technological and people orientated. However, we are also aware that the current funding model does not provide for Technical Assistance to the recipients hence leaving them exposed and unable to deliver on the mandate of the ESOs. This problem persists and holds back the growth and revolution in solving sector based problems such as youth unemployment, outdated
			education systems, lack of access to micro insurance, Financial inclusion, environment, limited food sustainability through smart agriculture, fragmented access to energy,	deprivation of media and information, gender and human rights among others.</p><p>There is therefore need to build and provide robust Technical Assistance and Acceletration Programs that will ensure sustainability of the ecosystem, continuity of disruptive youth led startups that are built on sound systems and can scale. Its therefore important that the funding to Entrepreneur and Enterprise Support Organizations (ESOs) is accompanied with Technical Assistance to guarantee delivery and sustainability.
             </p>
			</div>
		</div>
				
				

                <div class="section-title seo-title" id="solution">
                	<div class="row justify-content-center">
                		<div class="col-12">
                    <h3 class="text-danger">TAAP is designed as the launch-pin intervention to the Entrepreneur and Enterprise Support Organizations (ESOs). </h3>
                    <h5 class="text-dark">Our Technical Areas</h5>
                </div>
            </div>
                </div> 
                <div class="row">

					<div class="col-lg-4 col-sm-6">
				<a href="technical_areas.php?module=People-Organisational-Capability" class="single-consulting-services bg-2">
							<h4>People and  Organizational Capability</h4>
							<p>Leadership determines how far the dream, vision and aspirations of the entity are
fulfilled. The need to coach, mentor and support the founder to find and develop the
requisite skills and capabilities in the team is paramount.</p>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6">
						<a href="technical_areas.php?module=Legal-Governance" class="single-consulting-services bg-1">
							<h4>Legal & Governance</h4>
							<p>Our focus is to support the founders and funders to ensure that the legal identity of
							the entity is established and protected in accordance with the local and international
							law.
							</p>
						</a>
					</div>

					<div class="col-lg-4 col-sm-6">
						<a href="technical_areas.php?module=Business-Strategy-Development" class="single-consulting-services bg-3">
							<h4>Business Strategy and Development</h4>
							<p>The ability of the ESOs to deliver the impact that the funder/investor is looking for must be embedded in the strategy and work plans of the business.</p>
						</a>
					</div>

					<div class="col-lg-4 col-sm-6">
						<a href="technical_areas.php?module=Data-Analysis-Reporting" class="single-consulting-services bg-4">
							<h4>Data Analysis and Reporting</h4>
							<p>Data collection, measurement, traceability and reporting are either underestimated
or it's over hyped, whichever way one wants to look at, there is a need to streamline
data collection, data analysis and reporting to ease the work of tracing the impact
generated by the investment.</p>
						</a>
					</div>

					<div class="col-lg-4 col-sm-6">
						<a href="technical_areas.php?module=Grant-Writting-Fundraising" class="single-consulting-services bg-5">
							<h4>Grant Writting and Fundraising</h4>
							<p>The specialty of writing winning proposals that generate adequate funding for the
ESOs is limited. Under TAAP we have honed this skill with our specialists to give
technical Grant Writing skills training but also provide technical reviews of the
proposals in line with the funding guidelines of the funder.</p>
						</a>
					</div>

					<div class="col-lg-4 col-sm-6">
						<a href="technical_areas.php?module=Finance-Budget-Management" class="single-consulting-services bg-6">
							<h4>Finance and Budget Management</h4>
							<p>There is a need to strengthen the ability of the ESOs to manage the resources so
entrusted to them to deliver the greatest impact. We provide in depth Financial
management and budget controls advisory services and support to ensure
compliance and value in the delivery of the services.</p>
						</a>
					</div>

					<div class="col-lg-4 col-sm-6">
						<a href="technical_areas.php?module=Marketing-Communication" class="single-consulting-services bg-6">
							<h4>Marketing and Communication</h4>
							<p>The Marketing and communication expertise ensures that the developed products
and services must be presented to the public and customers and deliver business
value. But most importantly is for the players with the ESOs to communicate
powerfully the impact of their work and the Dollar Value of Transformation (DVoT).</p>
						</a>
					</div>

					<div class="col-lg-4 col-sm-6">
						<a href="technical_areas.php?module=Project-Management-Systems-Optimisation" class="single-consulting-services bg-6">
							<h4>Project Management & Systems Optimisation</h4>
							<p>Several ESOs have fewer employees, and they largely are consumed with the
delivery of the vision and purpose, rendering the focus on systematic project
management impossible. TAAP specialists have the experience and depth to scope,
define, source, manage and roll out any project management activities in the
ESO.</p>
						</a>
					</div>

					<div class="col-lg-4 col-sm-6">
						<a href="technical_areas.php?module=Supply-Chain-Management" class="single-consulting-services bg-6">
							<h4>Supply Chain Management</h4>
							<p>The complexity of global sourcing and management of the vendors and multiple
suppliers given the disrupted global supply chain. There is definitely a need for
expertise to source and manage not only global vendors but also to provide an end
to end intervention in the ESO to support the startup organizations with Route to
Market solutions</p>
						</a>
					</div>

					<div class="col-lg-4 col-sm-6">
						<a href="technical_areas.php?module=Tax-Advisory-Services" class="single-consulting-services bg-6">
							<h4>Tax Advisory Services</h4>
							<p>Sustainable ESOs must operate within the confines of the law and in several
incidents, there is confusion in how to treat certain aspects of funding for purposes
of taxation. The Tax Advisory Specialty will ensure that adequate tax audits and
advisory services are given in a timely manner to safeguard both the funder and the
recipient. With our expertise we ensure that only the optimal and legal tax is paid.
</p>
						</a>
					</div>

					<div class="col-lg-4 col-sm-6">
						<a href="technical_areas.php?module=Partnership-Onboarding" class="single-consulting-services bg-6">
							<h4>Partnership Onboarding</h4>
							<p>One of the challenges of the ESOs is finding credible partners to channel funds to and
ensure that enough effort is being done to deliver the impact to scale at the earliest time
possible.
Through our offerings we shall recruit, assess and train these would partners and create
a pool from which continuous programmatic interventions can be leveraged.
</p>
						</a>
					</div>

					<div class="col-lg-12 col-sm-12">
								<!-- Start Get In Touch Area -->
		<section class="get-in-touch-area consulting-get-in-touch-area ptb-100">
			<div class="container">
				<div class="row justify-content-center">

					<div class="col-lg-4 text-center">
						<div class="get-in-touch-btn">
							<a href="signup.php" class="default-btn py-4">
								<h3>SIGNUP FOR TAAP</h3>
							</a>
						</div>
					</div>

					<div class="col-lg-4 text-center">
						<div class="get-in-touch-btn">
							<a href="become-partner.php" class="default-btn py-4">
								<h3>BECOME A PARTNER</h3>
							</a>
						</div>
					</div>

					<div class="col-lg-4 text-center">
						<div class="get-in-touch-btn">
							<a href="consultants.php" class="default-btn py-4">
								<h3>JOIN OUR TEAM</h3>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Get In Touch Area -->
					</div>
				</div>
			</div>

			<div class="shape">
				<img src="assets/img/consulting/shape-3.png" alt="Image">
			</div>
		</section>
		<!-- End Consulting Services Area -->

		<!-- Start Consulting Area -->
		<section id="about" class="consulting-about-area pt-70 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="consulting-about-content">
							<span class="text-dark">What is TAAP</span>
							<h3>TAAP-Technical Assistance and Acceleration Program Initiative
							</h3>
															
							<p class="use-mb">TAAP is a team of specialists that focuses on delivering value across the organizational
										value chain in the Funding Organization, The recipient, and the Partner organizations in
										the ecosystem.
										We use tried and tested models, systems, processes, and functional expertise to
										cocreate sustainable interventions and solutions. We quadruple the value spend per
										dollar through organization, people, processes and systems augmentation and
										establishment.
                                 </p>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="consulting-about-img">
							<img src="assets/img/consulting/abt.jpeg" alt="Image">

							<div class="shape">
								<img src="assets/img/consulting/shape.png" alt="Image">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Consulting Area -->

		<!-- Start Consultancy Area -->
		<section id="benefits" class="consultancy-area ptb-100">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-5">
						<div class="consultancy-content">
							<div class="consultancy-slider owl-theme owl-carousel">
								<div class="consultancy-item">
									<span>Benefits of TAAP</span>
									<h3>Leadership Growth</h3>
									<p>You will posess a team of liberated leaders capable of inventing new solutions and approaches that your organization needs.</p>
								</div>
	
								<div class="consultancy-item">
									<span>Benefits of TAAP</span>
									<h3>Funding Growth</h3>
									<p>We promise that you will never put a hold on any compaign on grounds of luck of fund. This program will give top notch skills to make your fund raising compaigns successful</p>
								</div>
	
								<div class="consultancy-item">
									<span>Benefits of TAAP</span>
									<h3>Sustainable partnership</h3>
									<p>Through our offerings we shall recruit, assess and train partners and would be partners and create a pool from which continuous programmatic interventions can be leveraged.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-7">
						<div class="project-slider owl-theme owl-carousel">
							<div class="project-item">
								<a href="#" target="blank">
									<img src="assets/img/consulting/project/pt1.jpeg" alt="Image">
								</a>
							</div>

							<div class="project-item">
								<a href="#" target="blank">
									<img src="assets/img/consulting/project/pt2.jpeg" alt="Image">
								</a>
							</div>

							<div class="project-item">
								<a href="#" target="blank">
									<img src="assets/img/consulting/project/pt3.jpeg" alt="Image">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Consultancy Area -->

		<!-- Start Testimonial Area -->
		<section class="consulting-testimonial-area pb-100" id="testimonial">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="testimonial-title">
							<span class="text-dark">Testimonial</span>
							<h2>What reputable business owners and managers say about TAAP</h2>
						</div>
	
						<div class="consulting-testimonial-slider owl-theme owl-carousel">
							<div class="row align-items-center">
								<div class="col-lg-6">
									<div class="testimonial-img">
										<img src="assets/img/consulting/testimonial/ptc.jpg" alt="Image">
									</div>
								</div>

								<div class="col-lg-6 my-4">
									<div class="testimonial-content p-3">
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa repellendus alias libero dolor aspernatur incidunt omnis veritatis ipsa fuga labore excepturi iste illum quos,.</p>
			
										<h3>Ritah Mondo</h3>
										<span>President @ Mondo Group</span>
									</div>
								</div>
							</div>

							<div class="row align-items-center">
								<div class="col-lg-6">
									<div class="testimonial-img">
										<img src="assets/img/consulting/testimonial/ptc.jpg" alt="Image">
									</div>
								</div>

								<div class="col-lg-6 my-4">
									<div class="testimonial-content p-3">
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa repellendus alias libero dolor
										<h3>Nakaleme Joyce</h3>
										<span>CEO @ Red Tokens </span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Testimonial Area -->

		<!-- Start Team Area -->
		<section class="team-area consulting-team-area pt-100 pb-70" id="team">
			<div class="container">
				<div class="section-title consulting-title">
					<h2>TAAP Initiative Instructors</h2>
					<p>Drawing from our rich staff at AELS, we have put up the best team of experts with a reputation you can trust.</p>
				</div>

				<div class="row">
					<div class="col-lg-4 col-sm-6">
						<div class="single-team">
							<img src="assets/img/consulting/team/pt3.jpeg" alt="Image">

							<div class="team-content">
								<h3>Patrick Ngolobe</h3>
								<span>CEO @ AELS</span>

								<ul>
									<li>
										<a href="#" target="_blank">
											<i class="bx bxl-twitter"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i class="bx bxl-linkedin"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6">
						<div class="single-team">
							<img src="assets/img/consulting/team/pt2.jpeg" alt="Image">

							<div class="team-content">
								<h3>Prisca Aine</h3>
								<span>Human Resource Specialist</span>

								<ul>
									<li>
										<a href="#" target="_blank">
											<i class="bx bxl-twitter"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i class="bx bxl-linkedin"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
						<div class="single-team">
							<img src="assets/img/consulting/team/pt1.jpeg" alt="Image">

							<div class="team-content">
								<h3>Nasozi Geraldine</h3>
								<span>Business Development Expert</span>

								<ul>
									<li>
										<a href="#" target="_blank">
											<i class="bx bxl-twitter"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i class="bx bxl-linkedin"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Team Area -->
        <!-- Start About Us Area -->
		<section id="faq" class="seo-about-area ptb-100">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-lg-4">
						<div class="about-img">
							<img src="assets/img/consulting/faq.jpeg" alt="Image">
						</div>
					</div>

					<div class="col-lg-8">
						<div class="about-content">
							<span>FAQ</span>
                            <h2>Several business owners and managers are interested in TAAP and this is what they ask..</h2>
                            
                            <p>If your question is not answered, send us an email through the contact form below. We shall get back to you as soon as possible.</p>
                            
                            <div class="faq-accordion">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title active" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            What are the price arrangement for this program?
                                        </a>
            
                                        <div class="accordion-content show">
                                            <p>Prices range for different organisations since each organisation has unique requirements. Send us an email to get a quotation that fits your requirements!</p>
                                        </div>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            How long will this program last?
                                        </a>
            
                                        <div class="accordion-content">
                                            <p>This intervention is for 48months</p>
                                        </div>
                                    </li>
            
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            Do you guarantee a money refund if am not satisfied?
                                        </a>
            
                                        <div class="accordion-content">
                                            <p>We promise a 100% guarant satisfaction, but in case you prove that you have not been helped, you can claim your money back.</p>
                                        </div>
                                    </li>
            
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            Can my team study online?
                                        </a>
            
                                        <div class="accordion-content">
                                            <p>TAAP classes will be conducted at at your work place or our company premises, online classes will be introduced soon after</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <!-- End About Us Area -->


		<!-- Start Contact Area -->
		<section id="contact" class="contact-area consulting-contact-area pt-100 pb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="contact-info">
							<h3>Contact us</h3>
							<p>Don't hesitate to get in touch with us, we will be glad to discuss more about TAAP with you. Fill the form and let's get started!</p>
								
							<ul class="address">
								<li class="location">
									<span>Address</span>
									Keneth Dale Drive, Kira Road <br> Kamwokya
								</li>
								<li>
									<span>Email</span>
									<a href="mailto:hello@aels.co.ug">hello@aels.co.ug</a>
								</li>
								<li>
									<span>Phone</span>
									<a href="tel:+256-(775)-725-074">+256-(775)-725-074</a>
									<a href="tel:+256-(775)-725-074">+256-(775)-725-074</a>
								</li>
							</ul>
						</div>
					</div>

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
									<div class="col">
					            <!-- Form submission status -->
                                 <div class="response"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<input type="text" name="name" id="name" class="form-control" required placeholder="Name">
										</div>
									</div>
			
									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<input type="email" name="email" id="email" class="form-control" required placeholder="Email address">
										</div>
									</div>
			
									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control" name="phone" id="phone" required placeholder="Phone number">
											
										</div>
									</div>
			
									<div class="col-lg-6 col-sm-6">
										<select class="form-control" id="subject" name="subject" required>
											<option>Chose a Subject</option>
											<option value="TAAP quotation">Request a Quote</option>
											<option value="SignUp for TAAP">SignUp for TAAP</option>
											<option value="TAAP Inquiry">TAAP Inquiry</option>
											<option value="TAAP Reachout">Other Needs</option>
										</select>
									</div>
			
									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<textarea name="message" class="form-control" id="message" cols="30" rows="8" required placeholder="Your Message"></textarea>
										</div>
									</div>
			
									<div class="col-lg-12 col-md-12">
										<button type="submit" name="submit" class="btn default-btn saas-btn">
											Send message
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

		<!-- Start Footer Area -->
		<section class="footer-area consulting-footer-area pt-100 pb-70">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-3 col-md-6 text-center">
						<div class="single-footer-widget">
							<a href="#">
								<img src="assets/img/consulting/logo.jpg" alt="Image">
							</a>

							<p>Accelerating Impact Actualization</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 text-center border-right border-left">
						<div class="single-footer-widget">
							<h3>Social Accounts</h3>
							<p>Follow us on social media to stay updated with the program.</p>

							<div class="social-area">
								<ul>
									<li>
										<a href="#" target="_blank">
											<i class="bx bxl-twitter"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i class="bx bxl-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i class="bx bxl-linkedin"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 text-center">
						<div class="single-footer-widget">
							<h3>Need to learn more about AELS?</h3>
							<p><a href="https://www.aels.co.ug" class="text-warning lead">Visit Our Website</a> </p>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Footer Area -->

		<!-- Start Copy Right Area -->
		<div class="copy-right consulting-copy-right">
			<div class="container">
				<p>Copyright @<?php echo date('Y'); ?> AELS. Designed <a href="https://redtokens.ug/" target="blank">Red Tokens Solutions</a></p>
			</div>
		</div>
		<!-- End Copy Right Area -->
		
		<!-- Start Go Top Area -->
		<div class="go-top consulting-go-top">
			<i class="bx bx-chevrons-up"></i>
			<i class="bx bx-chevrons-up"></i>
		</div>
		<!-- End Go Top Area -->


        <!-- Jquery-3.5.1.Slim.Min.JS -->
        <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
        <!-- Popper JS -->
        <script src="assets/js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Wow JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Owl Carousel JS -->
		<script src="assets/js/owl.carousel.js"></script>
        <!-- Owl Carousel JS -->
		<script src="assets/js/carousel-thumbs.js"></script>
        <!-- Owl Magnific JS -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<!-- Parallax JS --> 
		<script src="assets/js/parallax.min.js"></script>
		<!-- Appear JS --> 
        <script src="assets/js/jquery.appear.js"></script>
		<!-- Odometer JS --> 
		<script src="assets/js/odometer.min.js"></script>
		<!-- Form Validator JS -->
		<script src="assets/js/form-validator.min.js"></script>
		<!-- Contact JS -->
		<script src="assets/js/contact-form-script.js"></script>
		<!-- Ajaxchimp JS -->
		<script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Custom JS -->
		<script src="assets/js/custom.js"></script>


    </body>
</html>