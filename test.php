<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Testimonial Carousel</title>
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* General card styling */
    .card {
      padding: 10px;
      background: #fff;
      border-radius: 20px;
      transition: all 0.3s ease-in-out;
      border: 2px solid transparent;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      height: 100%;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    /* Card Hover Borders */
    .card.designer-border:hover {
      border: 3px solid #b22485;
      box-shadow: 0 10px 20px rgba(178, 36, 133, 0.3);
    }

    .card.developer-border:hover {
      border: 3px solid #b25a2b;
      box-shadow: 0 10px 20px rgba(178, 90, 43, 0.3);
    }

    .card.gamer-border:hover {
      border: 3px solid #008b0e;
      box-shadow: 0 10px 20px rgba(0, 139, 14, 0.3);
    }

    .card.editor-border:hover {
      border: 3px solid #2b3db2;
      box-shadow: 0 10px 20px rgba(43, 61, 178, 0.3);
    }

    /* Carousel Controls */
    .carousel-control-prev,
    .carousel-control-next {
      background-color: #ff0000;
      border-radius: 50%;
      height: 50px;
      width: 50px;
      top: 50%;
      transform: translateY(-50%);
      opacity: 1;
    }

    .carousel-control-prev:hover,
    .carousel-control-next:hover {
      background-color: #ff3434;
    }

    .carousel-control-prev {
      left: 20px;
    }

    .carousel-control-next {
      right: 20px;
    }

    /* Hide controls on mobile */
    @media (max-width: 576px) {

      .carousel-control-prev,
      .carousel-control-next {
        display: none !important;
      }
    }

    /* Badge Styles */
    .badge {
      color: #5372f0;
      padding: 6px 14px;
      font-size: 0.85rem;
      font-weight: 500;
      margin: 10px 0 15px;
      background: #dde4ff;
      width: fit-content;
      border-radius: 50px;
    }

    .fstimg {
      color: #b22485;
      background: #f7dff5;
    }

    .sndimg {
      color: #b25a2b;
      background: #f7dff5;
    }

    .thrdimg {
      color: #008b0e;
      background: #e1f7df;
    }

    .frthimg {
      color: #2b3db2;
      background: #e4dff7;
    }

    /* Image inside card */
    .gallery-img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 20px 20px 0 0;
    }

    /* Show/hide carousel sections */
    @media (max-width: 576px) {
      .desktop-slide {
        display: none !important;
      }
    }

    @media (min-width: 577px) {
      .mobile-slide {
        display: none !important;
      }
    }
  </style>
</head>

<body>
  <!--  -->
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


  <div class="container my-5">
    <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner desktop-slide">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-md-3">
              <div class="card designer-border">
                <img src="img1.jpg" class="gallery-img" alt="...">
                <div class="card-body">
                  <span class="badge fstimg">Designer</span>
                  <p class="card-text">Card 1</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card developer-border">
                <img src="img2.jpg" class="gallery-img" alt="...">
                <div class="card-body">
                  <span class="badge sndimg">Developer</span>
                  <p class="card-text">Card 2</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card gamer-border">
                <img src="img3.jpg" class="gallery-img" alt="...">
                <div class="card-body">
                  <span class="badge thrdimg">Gamer</span>
                  <p class="card-text">Card 3</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card editor-border">
                <img src="img4.jpg" class="gallery-img" alt="...">
                <div class="card-body">
                  <span class="badge frthimg">Editor</span>
                  <p class="card-text">Card 4</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Repeat for next 4 cards -->
        <div class="carousel-item">
          <div class="row">
            <!-- Card 5 to 8 here -->
          </div>
        </div>
      </div>

      <!-- Mobile view: 1 per slide -->
      <div class="carousel-inner mobile-slide">
        <div class="carousel-item active">
          <div class="card designer-border">
            <img src="img1.jpg" class="gallery-img" alt="...">
            <div class="card-body">
              <span class="badge fstimg">Designer</span>
              <p class="card-text">Card 1</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card developer-border">
            <img src="img2.jpg" class="gallery-img" alt="...">
            <div class="card-body">
              <span class="badge sndimg">Developer</span>
              <p class="card-text">Card 2</p>
            </div>
          </div>
        </div>
        <!-- Repeat for all cards... -->
      </div>

      <!-- Controls (hidden on mobile) -->
      <button class="carousel-control-prev d-none d-md-flex" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next d-none d-md-flex" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>

</body>

</html>