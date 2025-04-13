<div class="information-container">
    <div>
        <!-- Sections -->
        <div class="information-card">
            <div class="information-card-image">
                <div>
                    <img src='https://img1.wsimg.com/isteam/stock/3395/:/cr=t:11.02%25,l:0%25,w:100%25,h:77.95%25/rs=w:600,h:300,cg:true/qt=q:80' width=100% />
                </div>
            </div>
            <div class="information-card-details">
                <div>
                    Top Residential Sales Last 5 Years
                    We helped nearly 90 clients in 2021, and closed 28.5 million in sales! 

                    Our team works hard everyday to grow and learn, so that we may continue to excel in our market. 
                    Our clients deserve our best, & we want to make sure our best is better every year.
                </div>
            </div>
        </div>

        <div>

            <div class="simple-slideshow" style="width: 500px; height: 500px; overflow: hidden; position: relative;">
                <img src="https://img1.wsimg.com/isteam/stock/3395/:/cr=t:11.02%25,l:0%25,w:100%25,h:77.95%25/rs=w:600,h:300,cg:true/qt=q:80" alt="Slide 1">
                <img src="https://img1.wsimg.com/isteam/stock/3395/:/cr=t:11.02%25,l:0%25,w:100%25,h:77.95%25/rs=w:600,h:300,cg:true/qt=q:80" alt="Slide 2">
                <img src="https://img1.wsimg.com/isteam/stock/3395/:/cr=t:11.02%25,l:0%25,w:100%25,h:77.95%25/rs=w:600,h:300,cg:true/qt=q:80" alt="Slide 3">
            </div>

        </div>

        <div>

            <button onclick="prev()">prev</button>

            <div class="carousel-info" style="position: relative;">
                <div class="carousel-slide active">this is the first slide</div>
                <div class="carousel-slide"> this is the 2nd slide</div>
                <div class="carousel-slide">this is the 3rd slide</div>
            </div>

            <button>next</button>

        </div>
    </div>
</div>


<style>
    .simple-slideshow img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0;
        animation: fadeSlideshow 9s infinite, zoomEffect 6s ease-in-out infinite;
        filter: blur(2px) brightness(60%);
    }

    .simple-slideshow img:nth-child(1) {
        animation-delay: 0s;
    }
    .simple-slideshow img:nth-child(2) {
        animation-delay: 3s;
    }
    .simple-slideshow img:nth-child(3) {
        animation-delay: 6s;
    }

    @keyframes fadeSlideshow {
        0% { opacity: 0; }
        10% { opacity: 1; }
        30% { opacity: 1; }
        40% { opacity: 0; }
        100% { opacity: 0; }
    }

    @keyframes zoomEffect {
        0% {
            transform: scale(1) translate(0, 0);
        }
        50% {
            transform: scale(1.05) translate(-2%, -2%);
        }
        100% {
            transform: scale(1) translate(0, 0);
        }
    }

    .carousel-info .carousel-slide{
        position: absolute;
        opacity: 0;
    }

    .carousel-slide.active {
        opacity: 1;
        z-index: 1;
        animation: fadeInOut 6s ease-in-out infinite;
    }

    @keyframes fadeInOut {
        0%   { opacity: 0; }
        100%  { opacity: 1; }
    }

</style>

<script>
  const slides = document.querySelectorAll('.carousel-slide');
  let current = 0;

  function showNextSlide() {
    slides[current].classList.remove('active');
    current = (current + 1) % slides.length;
    slides[current].classList.add('active');
  }

  // Auto-play every 3 seconds
//   setInterval(showNextSlide, 3000);

  function prev(){
    showNextSlide()
  }
</script>
