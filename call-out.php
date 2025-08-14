<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.a {
  position: fixed;
  bottom: 35px;
  left: 20px;
  max-width: 450px;
  width: 90%;
  background: #555;
  color: white;
  border-radius: 6px;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0,0,0,0.2);
  transition: opacity 0.3s ease, transform 0.3s ease;
}

.b {
  padding: 15px;
  font-size: 20px;
  font-weight: bold;
  background: #444;
}

.c {
  background-color: #ccc;
  color: black;
  padding: 0;
  position: relative;
}

/* Slider container */
.slider {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.slides {
  display: flex;
  transition: transform 0.5s ease-in-out;
}

.slides img {
  width: 100%;
  flex-shrink: 0;
  height: 200px;
  object-fit: cover;
  display: block;
}

/* Arrow buttons */
.prev, .next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0,0,0,0.5);
  color: white;
  padding: 8px;
  border-radius: 50%;
  cursor: pointer;
  font-size: 18px;
  user-select: none;
}

.prev:hover, .next:hover {
  background: rgba(0,0,0,0.8);
}

.prev { left: 10px; }
.next { right: 10px; }

.d {
  position: absolute;
  top: 10px;
  right: 15px;
  color: white;
  font-size: 24px;
  cursor: pointer;
}

.d:hover {
  color: lightgrey;
}

/* Mobile adjustments */
@media (max-width: 600px) {
  .a {
    left: 10px;
    bottom: 20px;
    width: calc(100% - 20px);
  }
}
/* Slider container */
.slider {
  position: relative;
  overflow: hidden;
  width: 100%;
  height: 250px; /* fixed height for consistent display */
}

/* Slides wrapper */
.slides {
  display: flex;
  transition: transform 0.5s ease-in-out;
}

/* Images inside slides */
.slides img {
  width: 100%;
  height: 250px;  /* match slider height */
  object-fit: cover; /* crop to fit without stretching */
  flex-shrink: 0;
  border-radius: 6px; /* optional rounded corners */
}

/* Navigation arrows */
.prev, .next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0, 0, 0, 0.5);
  color: white;
  padding: 8px;
  border-radius: 50%;
  cursor: pointer;
}

.prev { left: 10px; }
.next { right: 10px; }

</style>
</head>
<body>

<div class="a" id="callout" style="z-index:99">
  <div class="b">Journey </div>
  <span class="d" onclick="closeBox()">×</span>
  <div class="c">
    <div class="slider" style="height:auto">
      <div class="slides" id="slides">
        <!-- Clone of last slide (for smooth loop) -->
        
        <img src="images/team/Dr6.jpeg" alt="Slide 1" >
        <img src="images/lectures/lecture1.jpg" alt="Slide 2" >
        <img src="images/team/dr10.jpeg" alt="Slide 3" >
        <img src="images/lectures/lecture2.jpeg" alt="Slide 4">
        <img src="images/team/Dr3.jpeg" alt="Slide 4">

       
      </div>
      <span class="prev" onclick="moveSlide(-1)">❮</span>
      <span class="next" onclick="moveSlide(1)">❯</span>
    </div>
  </div>
</div>

<script>
let currentIndex = 1; // Start from first real slide
const slides = document.getElementById("slides");
const slideImages = slides.querySelectorAll("img");
const totalSlides = slideImages.length;
const slideWidth = 100; // percentage width per slide

slides.style.transform = `translateX(-${currentIndex * slideWidth}%)`;

function moveSlide(step) {
  if (currentIndex >= totalSlides - 1 && step === 1) return; // avoid skipping
  if (currentIndex <= 0 && step === -1) return;

  currentIndex += step;
  slides.style.transition = "transform 0.5s ease-in-out";
  slides.style.transform = `translateX(-${currentIndex * slideWidth}%)`;
}

// Smooth infinite loop logic
slides.addEventListener("transitionend", () => {
  if (currentIndex === totalSlides - 1) {
    slides.style.transition = "none";
    currentIndex = 1; // real first slide
    slides.style.transform = `translateX(-${currentIndex * slideWidth}%)`;
  }
  if (currentIndex === 0) {
    slides.style.transition = "none";
    currentIndex = totalSlides - 2; // real last slide
    slides.style.transform = `translateX(-${currentIndex * slideWidth}%)`;
  }
});

// Auto-slide every 3 seconds
setInterval(() => {
  moveSlide(1);
}, 3000);

function closeBox() {
  const box = document.getElementById("callout");
  box.style.opacity = "0";
  box.style.transform = "translateY(20px)";
  setTimeout(() => box.style.display = "none", 300);
}
</script>

</body>
</html>
