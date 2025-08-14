<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="megakit,business,company,agency,multipurpose,modern,bootstrap4">
  
  <meta name="author" content="themefisher.com">

  <title>Contact</title>

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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const toggleLinks = document.querySelectorAll(".toggle-more");

        toggleLinks.forEach(function (link) {
            link.addEventListener("click", function () {
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

    /* Optional: Resize image on very small screens but keep it on top-right */
    @media (max-width: 576px) {
        .founder-img {
            width: 200px;
            height: 200px;
        }
    }
</style>

</head>

<body >

<!-- Header Start --> 
<?php include('menu.php'); ?>
<!-- Header Close --> 

 <div class="main-wrapper" style="background-image:url('images/bg/43584.jpg')">
      <section class="page-title bg-1">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block text-center">
                <span class="text-white">Contact Us</span>
                <h1 class="text-capitalize mb-4 text-lg">Get in Touch</h1>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- contact form start -->
      <section class="contact-form-wrap section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
              <form
                id="contact-form"
                class="contact__form"
                method="post"
                action="mail.php"
              >
                <!-- form message -->
                <div class="row">
                  <div class="col-12">
                    <div
                      class="alert alert-success contact__msg"
                      style="display: none"
                      role="alert"
                    >
                      Your message was sent successfully.
                    </div>
                  </div>
                </div>
                <!-- end message -->
                <span class="text-color">Send a message</span>
                <h3 class="text-md mb-4">Contact Form</h3>
                <div class="form-group">
                  <input
                    name="name"
                    type="text"
                    class="form-control"
                    placeholder="Your Name"
                  />
                </div>
                <div class="form-group">
                  <input
                    name="email"
                    type="email"
                    class="form-control"
                    placeholder="Email Address"
                  />
                </div>
                <div class="form-group-2 mb-4">
                  <textarea
                    name="message"
                    class="form-control"
                    rows="4"
                    placeholder="Your Message"
                  ></textarea>
                </div>
                <button class="btn btn-main" name="submit" type="submit">
                  Send Message
                </button>
              </form>
            </div>

            <div class="col-lg-5 col-sm-12 ">
              <div class="contact-content pl-lg-5 mt-5 mt-lg-0 cta-item bg-white p-3 rounded">
                <h2 class="mb-5 mt-2">
                  Don’t Hesitate to contact with us for any kind of information
                </h2>

                <ul class="address-block list-unstyled">
                  <li>
                    <i class="ti-direction mr-3"></i>Bougainvillea Art Foundation <br>
                MG17 D, 3RD Floor,<br>
                Eldeco Mystic Greens,<br>
                Sector-Omicron-1,<br>
                Greater Noida <br>
                District Gautam Bhuddha Nagar <br>
                Uttar Pradesh, India, 201310
                  </li>
                  <li><i class="ti-email mr-3"></i>kaynatkazi@gmail.com</li>
                  <li><i class="ti-mobile mr-3"></i> +91 98765 43210</li>
                </ul>

                <ul class="social-icons list-inline mt-5">
                  <li class="list-inline-item">
                    <a href="http://www.themefisher.com"
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="http://www.themefisher.com"
                      ><i class="fab fa-twitter"></i
                    ></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="http://www.themefisher.com"
                      ><i class="fab fa-linkedin-in"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </section>
</div>

<!--  Section Services End -->
<!-- Section Testimonial Start -->
<!--  <section class="section testimonial bg-gray">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<span class="h6 text-color">Clients testimonial</span>
					<h2 class="mt-3 content-title">Check what's our clients say about us</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="testimonial-wrap">
			<div class="testimonial-item position-relative">
				<i class="ti-quote-left text-color"></i>

				<div class="testimonial-item-content">
					<p class="testimonial-text">Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae numquam corrupti facilis blanditiis.</p>

					<div class="testimonial-author">
						<h5 class="mb-0 text-capitalize">Thomas Johnson</h5>
						<p>Excutive Director,themefisher</p>
					</div>
				</div>
			</div>
			<div class="testimonial-item position-relative">
				<i class="ti-quote-left text-color"></i>

				<div class="testimonial-item-content">
					<p class="testimonial-text">Consectetur adipisicing elit. Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae .</p>

					<div class="testimonial-author">
						<h5 class="mb-0 text-capitalize">Mickel hussy</h5>
						<p>Excutive Director,themefisher</p>
					</div>
				</div>
			</div>
			<div class="testimonial-item position-relative">
				<i class="ti-quote-left text-color"></i>

				<div class="testimonial-item-content">
					<p class="testimonial-text">Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae numquam corrupti.</p>

					<div class="testimonial-author">
						<h5 class="mb-0 text-capitalize">James Watson</h5>
						<p>Excutive Director,themefisher</p>
					</div>
				</div>
			</div>
			<div class="testimonial-item position-relative">
				<i class="ti-quote-left text-color"></i>

				<div class="testimonial-item-content">
					<p class="testimonial-text">Consectetur adipisicing elit. Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae .</p>

					<div class="testimonial-author">
						<h5 class="mb-0 text-capitalize">Mickel hussy</h5>
						<p>Excutive Director,themefisher</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>  -->
<!-- Section Testimonial End -->

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