<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="megakit,business,company,agency,multipurpose,modern,bootstrap4">

	<meta name="author" content="themefisher.com">

	<title>Our Team </title>

	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
	<!-- Icon Font Css -->
	<link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
	<link rel="stylesheet" href="plugins/fontawesome/css/all.css">
	<link rel="stylesheet" href="plugins/magnific-popup/dist/magnific-popup.css">
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
	<link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const toggleLinks = document.querySelectorAll(".toggle-more");

			toggleLinks.forEach(function(link) {
				link.addEventListener("click", function() {
					const content = this.previousElementSibling;
					if (content.style.display === "none" || content.style.display === "") {
						content.style.display = "block";
						this.innerText = "Show less";
					} else {
						content.style.display = "none";
						this.innerText = "More...";
					}
				});
			});
		});
	</script>
	<style>
		.founder-img {
			width: 300px;
			height: 300px;
			object-fit: cover;
			border-radius: 50%;
			float: right;
			margin: 0 0 10px 20px;
		}

		/* Clear floats in parent */
		.about-item::after {
			content: "";
			display: table;
			clear: both;
		}

		/* Responsive for mobile: center image, stack content */
		@media (max-width: 768px) {
			.founder-img {
				float: none;
				display: block;
				margin: 0 auto 20px auto;
				width: 200px;
				height: 200px;
			}

			.about-item {
				text-align: center;
			}

			.about-item p {
				text-align: justify;
			}
		}
	</style>
</head>

<body>

	<!-- Header Start -->
	<?php include('menu.php'); ?>
	<!-- Header Close -->

	<div class="main-wrapper " style="background-image:url('images/bg/43584.jpg')">
		<section class="   bg-1 text-success" style="padding: 35px 0;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block text-center">
							<h1 class="text-capitalize mb-4 text-lg text-white">Team - Meet the Visionaries</h1>

						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- Section About Start -->
		<section class="section about-2 position-relative">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="about-item pr-3 mb-5 mb-lg-0 cta-item bg-white p-5 rounded" style="position: relative; overflow: hidden;">

							<!-- Floated Profile Image -->
							<img src="images/team/founder.jpeg" alt="Dr. Kaynat Kazi" class="founder-img img-fluid">

							<span class="h6 text-color">Founders</span>
							<h2 class="mt-3 mb-4 content-title">Dr. Kaynat Kazi</h2>

							<p>Dr. Kaynat Kazi is a passionate traveler, author, photographer, and storyteller who brings cultures to life through her words and lens. In 2012, she founded Rahagiri, India’s first Hindi travel photography blog, inspiring thousands to explore the world in their own language.</p>

							<p>Over the years, Kaynat has journeyed across 300,000 kilometers, documenting diverse landscapes, traditions, and heritage. Her debut solo exhibition, “Colors of India,” showcased the vibrant soul of the country—its festivals, handicrafts, and cultural treasures.</p>

							<p>A prolific writer, she has authored 13 books, countless articles, and academic contributions during her decade-long career as a researcher at renowned institutions like Shiv Nadar University and the University of Petroleum and Energy Studies.</p>

							<p>Celebrating India’s cultural legacy through UNESCO World Heritage Sites, traditions, and preservation efforts for over a decade, Kaynat continues her mission as a Distinguished Fellow at the Viksit Bharat Fellowship 2025, working on a coffee table book and documenting India’s cultural heritage. She has also been a three-time Fellow at IGNCA and currently leads the Bougainvillea Art Foundation, promoting art and heritage through creative initiatives.</p>

							<!--  <a href="Dr.Kaynat-Kazi.php" class="btn btn-main btn-round-full" target="_blank">Read More</a> -->
							<a href="Dr.Kaynat-Kazi.php" class="toggle-more  btn btn-main btn-round-full" target="_blank" style="color: white; font-weight: bold; font-size: 1.1rem;"> Read More</a>
						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- section Counter Start -->
		<section class="section counter bg-team">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="about-item pr-3 mb-5 mb-lg-0 cta-item bg-white p-5 rounded">
							<!-- Floated Profile Image -->
							<img src="images/team/cofounder.jpg" alt="Mrs.Aliya Rafat " class="founder-img img-fluid">

							<span class="h6 text-color">Co-Founder</span>
							<h2 class="mt-3 mb-4 position-relative content-title" style="color: black;">Mrs.Aliya Rafat Shadma</h2>
							<p style="color: black;">Mrs. Aliya Rafat Shadma is a trailblazer in the legal fraternity and a passionate advocate for justice. With nearly 30 years of experience as a senior lawyer, she has built a distinguished career by breaking barriers and challenging societal norms.</p>

							<p style="color: black;">A respected member of the Firozabad Bar Association, Mrs. Shadma specializes in women’s and children’s rights, dedicating her expertise to creating safer and fairer spaces for the vulnerable. Her relentless pursuit of equality and empowerment reflects in every initiative she undertakes.</p>
							<div class="more-content" style="display: none;">
								<p style="color: black;">
									As the Co-Founder of Bougainvillea Art Foundation, she brings deep legal insight and an unyielding commitment to social change, shaping the Foundation’s mission to preserve culture while fostering inclusivity and empowerment.
								</p>
							</div>
							<a href="javascript:void(0);" class="toggle-more  btn btn-main btn-round-full" style="color: white; font-weight: bold; font-size: 1.1rem;">Read More</a>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- section Counter End  -->
		<!--  Section Services Start -->
		<section class="section team  ">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-7 text-center" style="margin-top: -60px; margin-bottom: -50px;">
						<div class="section-title">
							<h2 class="mt-1 content-title text-black">Our Advisors</h2>
							<span class="h6 text-color">“Guided by Wisdom, Driven by Vision.”</span>
						</div>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-12 col-md-12 mb-3">
						<div class="about-item pr-3 mb-5 mb-lg-0 cta-item bg-white p-5 rounded">
							<img src="images/blog/drkrishan.png" alt="Dr Krishan " class="founder-img img-fluid">
							<div class="card-body mt-1">
								<div class="blog-item-meta">
									<p class="text-black">“Illuminating the wisdom of India’s ancient sciences.”<span class="ml-2 mr-2"></span></p>
								</div>

								<h3 class="mt- mb-2 lh-36  text-black">
									Dr. Krishan “Jugnu”
								</h3>
								<p class="text-black">Renowned Indologist, Scholar & Author
									Dr. Krishan “Jugnu” is an eminent Indologist and astronomer who has devoted over 36 years to preserving and reviving ancient Sanskrit treatises of scientific and technological significance. His pioneering research underscores India’s rich intellectual heritage, establishing Sanskrit as the primary language of ancient technical literature.
								</p>
								<div class="more-content" style="display: none;">
									<p style="color: black;">He has translated, edited, and published over 200 scholarly works, spanning engineering, architecture, astrology, and arts. Dr. Jugnu’s contributions include curating rare manuscripts and creating the most extensive collection featured in the online “Bibliography on Vaastu Shastra Literature” by Alexis Sornin.</p>

									<p style="color: black;">His influence is global—his work has inspired international scholars, including translations of Vaastu Shastra into Russian. His writings are integrated into university and Gurukul curricula and translated into multiple Indian languages, ensuring broad accessibility.</p>

									<p style="color: black;">Through his unwavering dedication, Dr. Krishan Jugnu continues to illuminate the depth and relevance of India’s ancient knowledge systems for future generations.</p>

								</div>

								<a href="javascript:void(0);" class="toggle-more  btn btn-main btn-round-full" style="color: white; font-weight: bold; font-size: 1.1rem;">Read More</a>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12 mb-3">
						<div class="about-item pr-3 mb-5 mb-lg-0 cta-item bg-white p-5 rounded">
							<img src="images/blog/nidhi2.png" alt="Nidhi " class="founder-img img-fluid">

							<div class="card-body mt-1">
								<div class="blog-item-meta">
									<a class="text-black">“Dedicated to empowering women’s health with care and compassion.”<span class="ml-2 mr-2"></span></a>
								</div>

								<h3 class="mt-2 mb-2 lh-36">
									<p class="text-black">Dr. Nidhi Pandey Dixit</p>
								</h3>
								<h6 class="text-black">MS (Obstetrics & Gynecology), MBBS
									Gynecologist | Obstetrician | Laparoscopic Surgeon | 20+ Years of Experience
								</h6>
								<p class="text-black">Dr. Nidhi Pandey Dixit is a leading gynecologist and obstetrician with more than two decades of expertise in women’s health. She specializes in high-risk pregnancy care, advocates natural childbirth, and offers advanced options such as painless delivery, ensuring safety and comfort for her patients.
								</p>

								<div class="more-content" style="display: none;">
									<p style="color: black;">An expert in both obstetric and gynecological surgeries, Dr. Nidhi is highly skilled in procedures such as hysterectomy, laparoscopic surgery, myomectomy, and TLH. Her evidence-based and personalized approach to PCOS and PCOD management has earned her widespread trust.</p>

									<p style="color: black;">Beyond clinical excellence, she is deeply committed to health awareness in rural communities, offering free counseling and treatment when needed. Known as a gynecologist with a golden heart, she blends compassion with cutting-edge care at her clinic in Avas Vikas Colony, Agra.</p>

								</div>

								<a href="javascript:void(0);" class="toggle-more  btn btn-main btn-round-full" style="color: white; font-weight: bold; font-size: 1.1rem;">Read More</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>

		<section class="section team bg-team ">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-7 text-center">
						<div class="section-title">
							<h2 class="mt-3 content-title text-white">Our Volunteers</h2>
							<span class="text-white">
								<p style="font-size: 20px; color:white;">“The heart of our mission lies in the dedication of individuals who believe in creating meaningful change.”</p>
							</span>
						</div>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6 mb-5">
						<div class="card bg-transparent border-0">
							<img src="images/blog/shalvi.png" alt="" class="img-fluid rounded" />

							<div class="card-body mt-2">
								<div class="blog-item-meta">
									<p class="text-white">“Spreading joy through communication & compassion.”<span class="ml-2 mr-2"></span></p>
								</div>

								<h3 class="mt-3 mb-4 lh-36  text-white">
									Shalvi Dutta
								</h3>
								<p class="text-white">Communication Specialist
									Shalvi Dutta is an experienced communications professional with over a decade in news and electronic media. A dedicated practitioner of Nichiren Daishonin’s Buddhism, she believes in unlocking the inherent potential within every individual. Her mission is to alleviate suffering and spread joy, making her a guiding force of positivity within the Foundation.

								</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 mb-5">
						<div class="card border-0 bg-transparent">
							<img src="images/blog/nandni.png" alt="" class="img-fluid rounded" />

							<div class="card-body mt-2">
								<div class="blog-item-meta">
									<a class="text-white">“Championing menstrual health & women’s dignity.”<span class="ml-2 mr-2"></span></a>
								</div>

								<h3 class="mt-3 mb-4 lh-36">
									<p class="text-white">Nandini Rai</p>
								</h3>
								<p class="text-white">Menstrupedia Certified | Co-Founder, Zzwick Hygiene Pvt. Ltd.
									Nandini Rai is a passionate menstrual hygiene activist and entrepreneur. As the Director of PadforHer and Co-Founder of Zzwick Hygiene Pvt. Ltd., she works to break taboos through education and empowerment workshops. Her advocacy for menstrual health continues to impact countless lives by promoting dignity and awareness.
								</p>

							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mb-5">
						<div class="card border-0 bg-transparent">
							<img src="images/blog/rohit.png" alt="" class="img-fluid rounded" />

							<div class="card-body mt-2">
								<div class="blog-item-meta">
									<a class="text-white">“Empowering health through nutrition & balance.”<span class="ml-2 mr-2"></span></a>
								</div>

								<h3 class="mt-3 mb-4 lh-36">
									<p class="text-white">Rohit Prasad</p>
								</h3>

								<p class="text-white">Certified Naturopathic Practitioner & Nutritionist
									Rohit Prasad specializes in exercise, obesity, and weight management, helping individuals adopt sustainable lifestyle habits. He emphasizes that healthy weight loss is gradual and rooted in proper nutrition. His approach empowers people to achieve holistic health and prevent lifestyle-related diseases.

								</p>

							</div>
						</div>
					</div>

				</div>


			</div>
	</div>
	</section>
	<!-- footer Start -->
	<?php include('footer.php'); ?>
	<!-- footer End -->

	</div>

	<!-- 
    Essential Scripts
    =====================================-->


	<!-- Main jQuery -->
	<script src="plugins/jquery/jquery.js"></script>
	<script src="js/contact.js"></script>
	<!-- Bootstrap 4.3.1 -->
	<script src="plugins/bootstrap/js/popper.js"></script>
	<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--  Magnific Popup-->
	<script src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
	<!-- Slick Slider -->
	<script src="plugins/slick-carousel/slick/slick.min.js"></script>
	<!-- Counterup -->
	<script src="plugins/counterup/jquery.waypoints.min.js"></script>
	<script src="plugins/counterup/jquery.counterup.min.js"></script>

	<!-- Google Map -->
	<script src="plugins/google-map/map.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

	<script src="js/script.js"></script>

</body>

</html>