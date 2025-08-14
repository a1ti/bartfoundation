<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
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

<div class="main-wrapper " style="background-image:url('images/bg/43584.jpg')">
<section class="page-title bg-1" style="padding: 50px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
        <h1 class="text-capitalize mb-4 text-lg">Published Work</h1>
          <span class="text-white">“Celebrating India’s Heritage Through Knowledge and Creativity.”</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- section Counter Start -->
<section class="section counter " style="background: black; padding-bottom: 15px; padding-top: 15px;">
	<div class="container">
		<div class="row justify-content-center">
            <div class="cta-item bg-white p-3 rounded">
                    <div class="row">
                        <!-- Left: Awards List -->
                        <div class="col-lg-8">
                            <div class="row">
                                <!-- Repeat awards as before -->
                                 <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                                    <h1 class="text-capitalize mb-0 ">Published Books</h1>
									<p><b style="color: black;">Bringing India’s Cultural Treasures to Print</b>
										We publish meticulously researched books that showcase the depth and diversity of India’s heritage. These works serve as valuable resources for scholars, students, and culture enthusiasts.
									</p>

                                  <h2 class="text-capitalize  ">What We Offer:</h2>
								  <p style="margin-bottom: 0rem;"><i class="fas fa-hand-point-right text-warning mr-2"></i>
									<b style="color: black;">Heritage & Art Books:</b> Covering traditional art forms, architecture, and cultural practices.
								   </p>
								   <p style="margin-bottom: 0rem;"><i class="fas fa-hand-point-right text-warning mr-2"></i>
									<b style="color: black;">Research-Based Publications: </b>In-depth studies of India’s tangible and intangible heritage.
								   </p>
								   <p style="margin-bottom: 0rem;"><i class="fas fa-hand-point-right text-warning mr-2"></i>
									<b style="color: black;">Curated Collections: </b>Beautifully designed books for libraries and collectors.
								   </p>
								    
									<h3>Visual Element:</h3>
									<p>Showcase book cover gallery in a grid format with clickable previews and “Learn More” options.</p>

                                </div>
                            </div>
                        </div>

                       <!-- Right: Carousel -->
                        <div class="col-lg-4 carousel-fade">
                            <div id="awardCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner rounded shadow-sm">
                                    <div class="carousel-item active">
                                        <img src="images/bookcover/Morena Coffe table book-1.jpeg" class="d-block w-100" 
										alt="Morena Coffe table book-1">
                                    </div>
									<div class="carousel-item">
                                        <img src="images/bookcover/Aglad Valley-cultural mapping-IGNCA-kaynat Qazi.png" class="d-block w-100" 
										alt="Aglad Valley-cultural mapping-IGNCA-kaynat Qazi">
                                    </div>
									<div class="carousel-item">
                                        <img src="images/bookcover/Monastries of Bodhgaya-Bodhgaya ke vihar-Kaynat Kazi (1).jpeg" class="d-block w-100" alt="Monastries of Bodhgaya-Bodhgaya ke vihar-Kaynat Kazi (1)">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/bookcover/Bhadraj coffee table book.jpeg" class="d-block w-100" alt="Bhadraj coffee table book">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/bookcover/Bodhgaya ke vihar-Kaynat Kazi.jpeg" class="d-block w-100" alt="Bodhgaya ke vihar-Kaynat Kazi">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/bookcover/Boganvelia by Dr Kaynat Kazi.jpeg" class="d-block w-100" alt="Boganvelia by Dr Kaynat Kazi">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/bookcover/Book-Rahagiri 2.0 by Dr. Kaynat Kazi.jpeg" class="d-block w-100" alt="Book-Rahagiri 2.0 by Dr. Kaynat Kazi">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/bookcover/Devgarh by Dr Kaynat Kazi.jpeg" class="d-block w-100" alt="Devgarh by Dr Kaynat Kazi">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/bookcover/Krishna sobti ka sahity aur samaj.jpg" class="d-block w-100" alt="Krishna sobti ka sahity aur samaj">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/bookcover/Modi Aur Bhartiya Muslman Book by Dr. Kaynat Kazi.jpg" class="d-block w-100" alt="Modi Aur Bhartiya Muslman Book by Dr. Kaynat Kazi">
                                    </div>
                                    <!-- Add more images as needed -->
                                </div>
                                    <a class="carousel-control-prev" href="#awardCarousel" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#awardCarousel" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    </a>
                            </div>  
                        </div>   
            </div>            
		</div>
	</div>
</section>

<section class="section counter " style="background: black; padding-bottom: 15px; padding-top: 15px;">
	<div class="container">
		<div class="row justify-content-center">
            <div class="cta-item bg-white p-3 rounded">
                    <div class="row">
                        <!-- Left: Awards List -->
                        <div class="col-lg-12">
                            <div class="row">
                                <!-- Repeat awards as before -->
                                 <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                                    <h1 class="text-capitalize mb-0 ">E-Books & Coffee Table Books</h1>
									<p><b style="color: black;">Digital Access to Timeless Heritage</b>
										 We create visually stunning e-books and coffee table books that combine breathtaking imagery with compelling narratives. These publications make India’s heritage accessible to a global audience at the click of a button.
									</p>

                                  <h2 class="text-capitalize  ">Highlights:</h2>
								  <p style="margin-bottom: 0rem;"><i class="fas fa-hand-point-right text-warning mr-2"></i>
									<b style="color: black;">Interactive Design:</b>Enhanced visuals, easy navigation.
								   </p>
								   <p style="margin-bottom: 0rem;"><i class="fas fa-hand-point-right text-warning mr-2"></i>
									<b style="color: black;">Cultural Narratives:</b>Capturing traditions, festivals, crafts, and architecture.
								   </p>
								   <p style="margin-bottom: 0rem;"><i class="fas fa-hand-point-right text-warning mr-2"></i>
									<b style="color: black;">Perfect for Gifting & Collecting: </b>Elegant designs ideal for coffee tables and cultural showcases.
								   </p>
								    
									    <h3>Visual Element:</h3>
									<p>Display a few sample pages with a flipbook preview or download link.</p>

                                  
</body>
</html>