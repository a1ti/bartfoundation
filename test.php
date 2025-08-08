<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="megakit,business,company,agency,multipurpose,modern,bootstrap4" />
  <meta name="author" content="themefisher.com" />

  <title>Bougainvillea ART FOUNDATION</title>

  <!-- Consolidated CSS Includes -->
  <!-- Bootstrap 5.3.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome 6.5.1 CDN -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css" />

  <!-- Styles for About Section -->
  <style>
    :root {
      --primary-color: #b43d6a;
      --secondary-color: #da3d7a;
      --btn-gradient-start: #b43d6a;
      --btn-gradient-end: #da3d7a;
      --text-white: #ffffff;
      --text-dark: #333333;
      --card-bg: #fff;
      --shadow-color: rgba(0, 0, 0, 0.1);
      --focus-overlay: rgba(0, 0, 0, 0.65);
      --btn-shadow: rgba(255, 81, 186, 0.63);
    }

    /* General Section Styling */
    section.hero-section {
      margin: 0;
      padding: 60px 0;
      color: var(--text-dark);
      position: relative;
    }

    .hero-section::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 0;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      padding: 60px 30px 0;
    }

    .about-readmore-btn {
      background: linear-gradient(135deg, var(--btn-gradient-start), var(--btn-gradient-end));
      color: var(--text-white);
      padding: 10px 25px;
      border: none;
      border-radius: 30px;
      font-size: 1rem;
      font-weight: 500;
      box-shadow: 0 4px 12px var(--btn-shadow);
      transition: all 0.3s ease;
    }

    .about-readmore-btn i {
      margin-left: 8px;
      transition: transform 0.3s ease;
    }

    .about-readmore-btn:hover {
      background: linear-gradient(135deg, var(--btn-gradient-end), var(--btn-gradient-start));
      box-shadow: 0 6px 20px var(--btn-shadow);
      transform: translateY(-2px);
    }

    .about-readmore-btn:hover i {
      transform: translateX(5px);
    }

    .about-carousel-img {
      width: 100%;
      height: 500px;
      object-fit: cover;
      border-radius: 20px;
      border: 4px solid white;
    }

    #aboutCarousel {
      border-radius: 20px;
      overflow: hidden;
    }

    @media (max-width: 768px) {
      .hero-content {
        text-align: center;
        padding: 40px 20px;
      }

      .about-carousel-img {
        height: 300px;
      }
    }

    a span {
      color: #f75757;
    }

    .carousel-control-prev1,
    .carousel-control-next1 {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      z-index: 10;
      width: 50px;
      height: 50px;
      background-color: rgba(242, 85, 85, 0.7);
      border: none;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background-color 0.3s ease;
    }

    .carousel-control-prev1 {
      left: 20px;
    }

    .carousel-control-next1 {
      right: 20px;
    }

    .carousel-control-prev1 i,
    .carousel-control-next1 i {
      color: var(--text-white);
      font-size: 1.5rem;
    }

    .carousel-control-prev1:hover,
    .carousel-control-next1:hover {
      background-color: var(--secondary-color);
    }

    h1.heading {
      margin-bottom: 1.5rem;
      color: var(--secondary-color);
    }

    /* Vision & Mission */
    .custom-card {
      background-color: var(--card-bg);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      height: 100%;
    }

    .custom-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .section.cta {
      position: relative;
      padding: 60px 20px;
      z-index: 1;
      background: #f9f9f9;
    }

    .section.cta h1 {
      position: relative;
      z-index: 2;
      background: none;
      display: inline-block;
      padding: 10px 20px;
      border-radius: 10px;
    }

    /* Core Values */
    .core-values-section {
      background-color: transparent;
      padding: 60px 0;
    }

    .section-title {
      color: var(--primary-color);
      font-size: 2.2rem;
      font-weight: 700;
      margin-bottom: 2rem;
    }

    .value-box {
      background-color: var(--card-bg);
      border-left: 5px solid var(--primary-color);
      transition: all 0.3s ease;
      padding: 25px;
      margin-bottom: 20px;
      height: 100%;
    }

    .value-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px var(--shadow-color);
    }

    .value-title {
      color: var(--secondary-color);
      font-size: 1.25rem;
      font-weight: 600;
      margin-bottom: 0.5rem;
    }

    .value-text {
      color: var(--text-dark);
      font-size: 1rem;
      line-height: 1.6;
    }

    /* Focus Area */
    #focus-area {
      background-color: #f5f5f5;
      padding: 80px 0;
    }

    .custom-btn {
      background: linear-gradient(135deg, var(--btn-gradient-start), var(--btn-gradient-end));
      font-size: 1rem;
      font-weight: 500;
      transition: all 0.3s ease;
      border: none;
      width: 100%;
      height: 90px;
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 12px;
      color: var(--text-white);
      text-decoration: none;
    }

    .custom-btn:hover {
      background: linear-gradient(135deg, var(--btn-gradient-end), var(--btn-gradient-start));
      transform: translateY(-2px);
      box-shadow: 0 6px 20px var(--btn-shadow);
    }

    .custom-btn i {
      margin-left: 8px;
      transition: transform 0.3s ease;
    }

    .custom-btn:hover i {
      transform: translateX(5px);
    }

    .serv {
      background-color: var(--card-bg) !important;
      border-radius: 12px;
      padding: 30px 20px;
      height: 100%;
      transition: all 0.3s ease;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    .serv:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .serv i {
      font-size: 2.5rem;
      margin-bottom: 20px;
      color: var(--primary-color);
    }

    /* Responsive fixes */
    @media (max-width: 768px) {
      .hero-content {
        text-align: center;
        padding: 40px 20px;
      }

      .about-carousel-img {
        height: 300px;
      }

      .hero-content .about-readmore-btn {
        align-self: center;
      }

      .custom-btn {
        height: auto;
        padding: 20px 15px;
      }
    }

    /* Page title section */
    .page-title {
      padding: 100px 0;
      background: linear-gradient(rgba(180, 61, 106, 0.85), rgba(218, 61, 122, 0.85)), url('images/index-page/gallery/baf-1.jpg') center/cover no-repeat;
      color: white;
      text-align: center;
    }

    .page-title h1 {
      font-size: 3rem;
      margin-bottom: 1rem;
    }

    .page-title h5 {
      font-size: 1.5rem;
      margin-bottom: 1.5rem;
    }

    /* Animation classes */
    [data-aos] {
      transition: opacity 0.5s ease, transform 0.5s ease;
    }

    [data-aos="fade-up"] {
      transform: translateY(30px);
      opacity: 0;
    }

    [data-aos="fade-up"].aos-animate {
      transform: translateY(0);
      opacity: 1;
    }

    [data-aos="fade-right"] {
      transform: translateX(-30px);
      opacity: 0;
    }

    [data-aos="fade-right"].aos-animate {
      transform: translateX(0);
      opacity: 1;
    }

    [data-aos="fade-left"] {
      transform: translateX(30px);
      opacity: 0;
    }

    [data-aos="fade-left"].aos-animate {
      transform: translateX(0);
      opacity: 1;
    }

    [data-aos="zoom-in"] {
      transform: scale(0.9);
      opacity: 0;
    }

    [data-aos="zoom-in"].aos-animate {
      transform: scale(1);
      opacity: 1;
    }
  </style>
</head>

<body>
  <!-- Header Start -->
  <header class="navigation bg-light">
    <nav class="navbar navbar-expand-lg navbar-light container">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <h2 class="fw-bold text-danger">Bougainvillea ART FOUNDATION</h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link active" href="#">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Programs</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Gallery</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- Header Close -->

  <div class="main-wrapper">
    <section class="page-title bg-1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="block text-center">
              <h1 class="display-5 fw-bold" data-aos="fade-up">About Bougainvillea Arts Foundation</h1>
              <h5 class="display-5 text-white" data-aos="fade-up">Preserving Heritage. Inspiring Tomorrow.</h5>
              <span class="text-white">
                Bougainvillea Art Foundation is dedicated to celebrating and safeguarding India's rich cultural legacy—tangible and intangible for generations to come.
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section Start -->
    <section id="about" class="hero-section">
      <div class="container">
        <div class="row">
          <!-- Text Content -->
          <div class="col-md-6">
            <div class="hero-content h-100 d-flex flex-column justify-content-start" data-aos="fade-right" data-aos-duration="1200">
              <h1 class="display-5 fw-bold heading mb-4">
                <span>Bougainvillea Art Foundation</span>
              </h1>

              <p class="para mb-3" data-aos="fade-up" data-aos-delay="200">
                The Bougainvillea Art Foundation, founded in 2024, is a non-profit organization that provides a diverse array of consultancy services to various sectors — from concept to commissioning.
              </p>

              <p class="para mb-3" data-aos="fade-up" data-aos-delay="300">
                It is dedicated to preserving and promoting India's vast cultural, historical, and natural heritage — a beautiful tapestry of diverse cultures and traditions.
              </p>

              <p class="para mb-3" data-aos="fade-up" data-aos-delay="400">
                The Foundation is the brainchild of Dr. Kaynat Kazi, credited as India's first female solo traveler. Her vision is to give back to society through this foundation.
              </p>

              <p class="para mb-3" data-aos="fade-up" data-aos-delay="500">
                Bougainvillea also offers expert consultancy services across multiple sectors, while remaining committed to heritage preservation and documentation.
              </p>

              <button class="about-readmore-btn mt-4 align-self-start" data-aos="zoom-in" data-aos-delay="600">
                Read More <i class="fas fa-arrow-right"></i>
              </button>
            </div>
          </div>


          <!-- Carousel -->
          <div class="col-md-6 d-flex align-items-center px-md-5 mt-4 mt-md-0" data-aos="fade-left" data-aos-duration="1200">
            <div id="aboutCarousel" class="carousel slide carousel-fade w-100" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="4"></button>
                <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="5"></button>
                <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="6"></button>
                <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="7"></button>
              </div>

              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="images/index-page/gallery/baf-1.jpg" class="d-block w-100 about-carousel-img" alt="Slide 0" />
                </div>
                <div class="carousel-item">
                  <img src="images/index-page/gallery/baf-3.jpg" class="d-block w-100 about-carousel-img" alt="Slide 1" />
                </div>
                <div class="carousel-item">
                  <img src="images/index-page/gallery/baf-5.jpg" class="d-block w-100 about-carousel-img" alt="Slide 2" />
                </div>
                <div class="carousel-item">
                  <img src="images/index-page/gallery/baf-2.jpg" class="d-block w-100 about-carousel-img" alt="Slide 3" />
                </div>
                <div class="carousel-item">
                  <img src="images/index-page/gallery/baf-6.jpg" class="d-block w-100 about-carousel-img" alt="Slide 4" />
                </div>
                <div class="carousel-item">
                  <img src="images/index-page/gallery/baf-15.jpg" class="d-block w-100 about-carousel-img" alt="Slide 5" />
                </div>
                <div class="carousel-item">
                  <img src="images/index-page/4.jpg" class="d-block w-100 about-carousel-img" alt="Slide 6" />
                </div>
                <div class="carousel-item">
                  <img src="images/index-page/5.jpg" class="d-block w-100 about-carousel-img" alt="Slide 7" />
                </div>
              </div>

              <!-- Custom Carousel Controls -->
              <button class="carousel-control-prev1" type="button" data-bs-target="#aboutCarousel" data-bs-slide="prev">
                <i class="fas fa-chevron-left"></i>
                <span class="visually-hidden">Previous</span>
              </button>

              <button class="carousel-control-next1" type="button" data-bs-target="#aboutCarousel" data-bs-slide="next">
                <i class="fas fa-chevron-right"></i>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Vision & Mission Section -->
    <section class="section cta">
      <div class="container">
        <center>
          <h1 class="display-5 fw-bold heading" data-aos="fade-up">
            <span>Our Vision & Mission</span>
          </h1>
        </center>
        <div class="row justify-content-center mt-5">
          <!-- Vision -->
          <div class="col-lg-6 mb-4" data-aos="fade-right" data-aos-delay="100">
            <div class="cta-item custom-card h-100">
              <div class="d-flex align-items-center mb-3">
                <i class="fas fa-eye fa-2x text-primary me-3"></i>
                <h4 class="mb-0 text-dark">Our Vision</h4>
              </div>
              <p class="text-muted">
                To be a leading force in cultural preservation, creating a vibrant platform that connects communities, inspires creativity, and safeguards India's diverse heritage for the world to experience and cherish.
              </p>
            </div>
          </div>

          <!-- Mission -->
          <div class="col-lg-6 mb-4" data-aos="fade-left" data-aos-delay="200">
            <div class="cta-item custom-card h-100">
              <div class="d-flex align-items-center mb-3">
                <i class="fas fa-bullseye fa-2x text-danger me-3"></i>
                <h4 class="mb-0 text-dark">Our Mission</h4>
              </div>
              <p class="text-muted">
                To preserve, promote, and document India's tangible and intangible heritage, ensuring its continuity for future generations while fostering cultural pride and awareness.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Core Values Section -->
    <section class="core-values-section py-5">
      <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
          <h2 class="section-title">Core Values</h2>
          <p class="text-muted">The guiding principles that shape our work</p>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="value-box">
              <h5 class="value-title">1. Heritage First</h5>
              <p class="value-text">Committed to protecting cultural, historical, and natural treasures.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="value-box">
              <h5 class="value-title">2. Integrity</h5>
              <p class="value-text">Upholding authenticity and ethical practices in all initiatives.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="value-box">
              <h5 class="value-title">3. Inclusivity</h5>
              <p class="value-text">Celebrating diversity across regions, communities, and traditions.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="value-box">
              <h5 class="value-title">4. Innovation</h5>
              <p class="value-text">Blending traditional knowledge with modern approaches for preservation.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
            <div class="value-box">
              <h5 class="value-title">5. Education</h5>
              <p class="value-text">Promoting awareness, understanding, and appreciation of heritage.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
            <div class="value-box">
              <h5 class="value-title">6. Sustainability</h5>
              <p class="value-text">Ensuring our efforts benefit both present and future generations.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Focus Area Section -->
    <section id="focus-area" class="py-5">
      <div class="container">
        <h2 class="text-center fw-bold display-5 mb-5 heading" data-aos="fade-up">
          <span>Our Focus Area</span>
        </h2>

        <div class="row g-4">
          <!-- Focus Area 1 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
            <div class="serv text-center p-4 rounded shadow-sm">
              <i class="fas fa-shield-alt fa-2x mb-3"></i>
              <h4 class="mb-3">Preservation</h4>
              <p>Keeping our history alive by protecting sites, artifacts, traditions, and cultural practices for generations to come.</p>
            </div>
          </div>

          <!-- Focus Area 2 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="serv text-center p-4 rounded shadow-sm">
              <i class="fas fa-graduation-cap fa-2x mb-3"></i>
              <h4 class="mb-3">Education</h4>
              <p>Bringing heritage to life through interactive programs, exhibitions, and community outreach that inspire learning and curiosity.</p>
            </div>
          </div>

          <!-- Focus Area 3 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="serv text-center p-4 rounded shadow-sm">
              <i class="fas fa-leaf fa-2x mb-3"></i>
              <h4 class="mb-3">Conservation</h4>
              <p>Caring for our natural and cultural treasures with sustainable practices that ensure their long-term survival.</p>
            </div>
          </div>

          <!-- Focus Area 4 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="serv text-center p-4 rounded shadow-sm">
              <i class="fas fa-magnifying-glass fa-2x mb-3"></i>
              <h4 class="mb-3">Research & Documentation</h4>
              <p>Uncovering stories of the past through research and archives that deepen our understanding of heritage.</p>
            </div>
          </div>

          <!-- Focus Area 5 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="serv text-center p-4 rounded shadow-sm">
              <i class="fas fa-bullhorn fa-2x mb-3"></i>
              <h4 class="mb-3">Advocacy</h4>
              <p>Giving heritage a voice by promoting policies that protect and celebrate it on local, national, and global stages.</p>
            </div>
          </div>

          <!-- Focus Area 6 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="serv text-center p-4 rounded shadow-sm">
              <i class="fas fa-handshake fa-2x mb-3"></i>
              <h4 class="mb-3">Collaboration</h4>
              <p>Working hand-in-hand with communities, experts, and partners to create impactful heritage initiatives.</p>
            </div>
          </div>

          <!-- Focus Area 7 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="serv text-center p-4 rounded shadow-sm">
              <i class="fas fa-users fa-2x mb-3"></i>
              <h4 class="mb-3">Public Engagement</h4>
              <p>Bringing people together through events, volunteer programs, and outreach that make heritage a shared experience.</p>
            </div>
          </div>

          <!-- Focus Area 8 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="serv text-center p-4 rounded shadow-sm">
              <i class="fas fa-globe-asia fa-2x mb-3"></i>
              <h4 class="mb-3">Sustainable Tourism</h4>
              <p>Encouraging travelers to explore responsibly, ensuring tourism supports and respects local culture and heritage.</p>
            </div>
          </div>

          <!-- Focus Area 9 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="800">
            <div class="d-flex justify-content-center align-items-center h-100">
              <a href="about-us.php" class="btn custom-btn d-flex align-items-center justify-content-center text-white text-decoration-none">
                Read More <i class="fas fa-arrow-right ms-2"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- footer Start -->
    <footer class="footer bg-dark text-white py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h5 class="mb-4">Bougainvillea Art Foundation</h5>
            <p>Preserving India's rich cultural heritage for future generations through education, conservation, and community engagement.</p>
          </div>
          <div class="col-md-4">
            <h5 class="mb-4">Quick Links</h5>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Home</a></li>
              <li><a href="#" class="text-white">About Us</a></li>
              <li><a href="#" class="text-white">Programs</a></li>
              <li><a href="#" class="text-white">Gallery</a></li>
              <li><a href="#" class="text-white">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h5 class="mb-4">Contact Us</h5>
            <p><i class="fas fa-map-marker-alt me-2"></i> 123 Heritage Lane, Mumbai, India</p>
            <p><i class="fas fa-phone me-2"></i> +91 98765 43210</p>
            <p><i class="fas fa-envelope me-2"></i> info@bougainvilleafoundation.org</p>
            <div class="social-icons mt-3">
              <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
              <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
              <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
        <hr class="mt-4">
        <div class="row">
          <div class="col-md-12 text-center">
            <p class="mb-0">&copy; 2024 Bougainvillea Art Foundation. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer End -->
  </div>

  <!-- Essential Scripts -->
  <!-- Bootstrap 5.3.3 JS Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Simple AOS implementation -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Simple scroll animation implementation
      const elements = document.querySelectorAll('[data-aos]');

      function checkScroll() {
        elements.forEach(el => {
          const rect = el.getBoundingClientRect();
          const isVisible = rect.top < window.innerHeight && rect.bottom >= 0;

          if (isVisible && !el.classList.contains('aos-animate')) {
            el.classList.add('aos-animate');
          }
        });
      }

      // Initial check
      checkScroll();

      // Listen for scroll events
      window.addEventListener('scroll', checkScroll);
    });
  </script>
</body>

</html>