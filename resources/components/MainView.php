<div id="mainview" style="background-color: black; height: 100vh; min-height: 10in;">

    <div class="slideshow" style="width: 100%; height: 100%; overflow: hidden; position: relative;">
        <video width="640" height="360" autoplay loop muted playsinline>
            <source src="background_video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div style="position: absolute; z-index: 1; width: 100%;">

            <nav class="navbar">

                <div class="nav-container" style="z-index: 1;">
                    <ul>
                        <li>Home</li>
                        <li>About</li>
                        <li style="transform: scale(2.8)">
                            <img src="resources/images/icon.png" width=200 alt="Slide 1"/>
                        </li>
                        <li>Contact Us</li>
                        <li>Admissions</li>
                    </ul>
                </div>

                <div class="nav-container-mobile" style="z-index: 1;">
                    <div style="position: absolute; padding: 40px;">
                        <i class="fas fa-bars" style="color: white; font-size: 30px;"></i>
                    </div>

                    <div style="display: flex; justify-content: center; transform: scale(2)">
                        <img src="resources/images/icon.png" width=200 alt="Slide 1"/>
                    </div>
                </div>

            </nav>

            <div class="carousel-container">

                <div class="carousel">
                    
                    <div class="carousel-card-container">
                        <div class="carousel-card">
                            <div class="carousel-prev">
                                <a onclick="next()">
                                    <i class="fas fa-arrow-circle-left" style="font-size: 20px; color: gray;"></i>
                                </a>
                            </div>

                            <div class="carousel-info">
                                <div class="carousel-slide active">
                                    <div class="title">Top Residential Sales Last 5 Years</div>

                                    <div class="desc">
                                        We helped nearly 90 clients in 2021, and closed 28.5 million in sales! 

                                        Our team works hard everyday to grow and learn, so that we may continue to excel in our market. 
                                        Our clients deserve our best, & we want to make sure our best is better every year.
                                    </div>
                                </div>
                                <div class="carousel-slide">
                                    <div class="title">Don't Just List it...</div>

                                    <div class="desc">
                                        Get it SOLD! We exhaust every avenue to ensure our listings are at the fingertips of every possible buyer, getting you top dollar for your home.
                                    </div>
                                </div>
                                <div class="carousel-slide">
                                    <div class="title">Guide to Buyers</div>

                                    <div class="desc">
                                        Nobody knows the market like we do. Enjoy having a pro at your service. Market analysis, upgrades lists, contractors on speed dial, & more!
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-next">
                                <a onclick="next()">
                                    <i class="fas fa-arrow-circle-right" style="font-size: 20px; color: gray;"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="carousel-images">
                    <img src="https://img1.wsimg.com/isteam/ip/067a4d42-19e8-46d9-9bed-578bf62dd44e/4787%20E%20Beacon%20Ridge-41.jpg-SMALL.JPG/:/rs=w:984,h:656" alt="Image 1">
                    <img src="https://img1.wsimg.com/isteam/ip/067a4d42-19e8-46d9-9bed-578bf62dd44e/5570%20Ailanto-14.jpg-SMALL.JPG/:/cr=t:0%25,l:0.05%25,w:99.9%25,h:99.9%25/rs=w:984,h:655" alt="Image 2">
                </div>

            </div>

        </div>

    </div>

</div>

<script>
    const slides = document.querySelectorAll('.carousel-slide');
    let current = 0;

    function showNextSlide() {
        slides[current].classList.remove('active');
        current = (current + 1) % slides.length;
        slides[current].classList.add('active');
    }

    function next(){
        showNextSlide()
    }

</script>
