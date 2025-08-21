<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Responsive Image Gallery with Popup</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
img {
  margin-top: 8px;
  width: 100%;
  cursor: pointer;
  transition: transform 0.3s;
}
img:hover {
  transform: scale(1.05);
}

/* Section titles */
.gallery-title {
  text-align: center;
  margin-top: 20px;
  margin-bottom: 5px;
  font-size: 24px;
  font-weight: bold;
}
.gallery-subtitle {
  text-align: center;
  margin-bottom: 15px;
  font-size: 14px;
  color: #666;
}

/* Popup styles */
.modal {
  display: none; 
  position: fixed; 
  z-index: 9999; 
  padding-top: 40px; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  background-color: rgba(0,0,0,0.9);
  text-align: center;
}
.modal-content {
  margin: auto;
  display: block;
  max-width: 100%;
  max-height: 80vh; 
  border-radius: 8px;
  object-fit: contain;
  position: relative;
}

/* Close button */
.close {
  position: absolute;
  top: 10px; /* placed a bit higher */
  right: 25px;
  color: #ff4d4d; /* changed to red */
  font-size: 40px;
  font-weight: bold;
  cursor: pointer;
  z-index: 10001;
}
.close:hover { color: #ff9999; }

/* Prev/Next buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%; /* centered vertically */
  transform: translateY(-50%);
  padding: 12px 18px;
  color: #00e6e6; /* changed to teal/cyan */
  font-weight: bold;
  font-size: 40px;
  user-select: none;
  transition: 0.3s;
  z-index: 10001;
  background: rgba(0, 0, 0, 0.4);
  border-radius: 50%;
}
.prev { left: 20px; }
.next { right: 20px; }
.prev:hover, .next:hover { color: #66ffff; background: rgba(0, 0, 0, 0.6); }
</style>
</head>
<body>

<div class="container-fluid">
  <div class="row" >
    
    <!-- Left Part -->
    <div class="col-md-6">
      <h2 class="gallery-title" style="color: #b43d6a;">Media Coverage</h2>
      <p class="gallery-subtitle"><b>Celebrated in the press, Dr. Kaynat Kazi’s work has been featured in leading newspapers and magazines, earning recognition for her impactful contributions.</b></p>
      <div class="row" style="width:100%; height:700px; overflow:auto;">
        <div class="col-md-6">
          <img src="images/media/md1.PNG" alt=" ">
          <img src="images/media/md2.PNG" alt="">
          <img src="images/media/md3.PNG" alt="">
          <img src="images/media/ma7.jpg" alt="">
          <img src="images/media/mc4.jpeg" alt="">
           <img src="images/media/mc6.jpeg" alt="">
            <img src="images/media/mc8.jpeg" alt="">
             <img src="images/media/mc10.jpeg" alt="">
              <img src="images/media/mc12.jpeg" alt="">
               <img src="images/media/mc18.jpeg" alt="">
                
        </div>
        <div class="col-md-6">
          <img src="images/media/md4.PNG" alt="">
          <img src="images/media/mc1.jpeg" alt="">
          <img src="images/media/mc2.jpeg" alt="">
          <img src="images/media/ma13.jpg" alt="">
           <img src="images/media/mc5.jpeg" alt="">
            <img src="images/media/mc7.jpeg" alt="">
             <img src="images/media/mc9.jpeg" alt="">
              <img src="images/media/mc11.jpeg" alt="">
               <img src="images/media/mc17.jpeg" alt="">
                <img src="images/media/mc19.jpeg" alt="">
                 <img src="images/media/mc21.jpeg" alt="">
                 <img src="images/media/mc20.jpeg" alt="">
        </div>
      </div>
    </div>

    <!-- Right Part -->
    <div class="col-md-6">
      <h2 class="gallery-title" style="color: #b43d6a;">Published Article</h2>
      <p class="gallery-subtitle"><b>Articles by Dr. Kaynat Kazi featured in leading 
										national newspapers and magazines, including Dainik Jagran, Navbharat Times (NBT), Prabhat Khabar, 
										Himantar, Patrika, and others.</b></p>
                                        <div style="text-align: center; margin-top: 10px;">
  <a href="https://www.facebook.com/media/set/?set=a.1182346215119590&type=3" 
     style="color: #b43d6a; text-decoration: none; font-weight: bold;">
    Click Here For More
  </a>
</div>

      <div class="row" style="width:100%; height:700px; overflow:auto;">
          <div class="col-md-6">
          <img src="images/media/artical3.jpeg" alt=" ">
          <img src="images/media/artical1.jpeg" alt="">
          <img src="images/media/ma45.jpeg" alt="">
          <img src="images/media/mc14.jpeg" alt="">
          <img src="images/media/ma30.jpg" alt="">
          <img src="images/media/ma32.jpg" alt="">
          <img src="images/media/ma34.jpg" alt="">
          <img src="images/media/ma36.jpg" alt="">
          <img src="images/media/ma38.jpg" alt="">
          <img src="images/media/ma40.jpg" alt="">
          <img src="images/media/ma42.jpg" alt="">
          <img src="images/media/ma44.jpg" alt="">
          <img src="images/media/artical5.jpeg" alt="">
          <img src="images/media/m7.jpg" alt="" >
          <img src="images/media/ma2.jpg" alt="">
          <img src="images/media/ma5.jpg" alt="">
          <img src="images/media/ma8.jpg" alt="">
          <img src="images/media/ma14.jpg" alt="">
          <img src="images/media/ma16.jpg" alt="">
          <img src="images/media/ma18.jpg" alt="">
          <img src="images/media/ma20.jpg" alt="">
          <img src="images/media/ma22.jpg" alt="">
          <img src="images/media/ma27.jpg" alt="">
          <img src="images/media/ma4.jpg" alt="" >
          <img src="images/media/ma10.jpg" alt="" >
          <img src="images/media/ma12.jpg" alt="" >
          <img src="images/media/mc13.jpeg" alt="" >
        </div>
        <div class="col-md-6">
          <img src="images/media/artical2.jpeg" alt="">
          <img src="images/media/artical4.jpeg" alt="">
          <img src="images/media/ma46.jpeg" alt="">
          <img src="images/media/mc15.jpeg" alt="">
          <img src="images/media/ma31.jpg" alt="">
          <img src="images/media/ma33.jpg" alt="">
          <img src="images/media/ma37.jpg" alt="">
          <img src="images/media/ma39.jpg" alt="">
          <img src="images/media/ma41.jpg" alt="">
          <img src="images/media/ma43.jpg" alt="">
          <img src="images/media/m6.jpg" alt="">
           <img src="images/media/m8.jpg" alt="" >
           <img src="images/media/ma3.jpg" alt="">
           <img src="images/media/ma6.jpg" alt="">
           <img src="images/media/ma13.jpg" alt="">
           <img src="images/media/ma15.jpg" alt="">
           <img src="images/media/ma17.jpg" alt="">
           <img src="images/media/ma19.jpg" alt="">
           <img src="images/media/ma21.jpg" alt="">
           <img src="images/media/ma23.jpg" alt="">
           <img src="images/media/ma28.jpg" alt="" >
           <img src="images/media/ma9.jpg" alt="" >
           <img src="images/media/ma11.jpg" alt="" >


        </div>
      </div>
    </div>

  </div>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <a class="prev">&#10094;</a>
  <img class="modal-content" id="img01">
  <a class="next">&#10095;</a>
</div>

<script>
let modal = document.getElementById("myModal");
let modalImg = document.getElementById("img01");
let span = document.getElementsByClassName("close")[0];
let nextBtn = document.querySelector(".next");
let prevBtn = document.querySelector(".prev");

let images = document.querySelectorAll("img");
let currentIndex = 0;

// Open modal
images.forEach((img, index) => {
  if(img.closest('.modal') === null){ // exclude modal image
    img.addEventListener("click", function(){
      modal.style.display = "block";
      modalImg.src = this.src;
      currentIndex = index;
    });
  }
});

// Close modal
span.onclick = function() {
  modal.style.display = "none";
}

// Next image
nextBtn.onclick = function() {
  do {
    currentIndex = (currentIndex + 1) % images.length;
  } while(images[currentIndex].closest('.modal'));
  modalImg.src = images[currentIndex].src;
}

// Previous image
prevBtn.onclick = function() {
  do {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
  } while(images[currentIndex].closest('.modal'));
  modalImg.src = images[currentIndex].src;
}

// Close when clicking outside
modal.onclick = function(e) {
  if (e.target === modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
