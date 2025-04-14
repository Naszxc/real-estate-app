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
                                    <div class="title">First Slide Lorem Ipsum</div>

                                    <div class="desc">
                                        Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                                        Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                                    </div>
                                </div>
                                <div class="carousel-slide">
                                    <div class="title">Second Slide Lorem Ipsum</div>

                                    <div class="desc">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</div>
                                </div>
                                <div class="carousel-slide">
                                    <div class="title">Third Slide Lorem Ipsum</div>

                                    <div class="desc">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</div>
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
                    <img src="https://img1.wsimg.com/isteam/stock/12792/:/rs=w:365,h:365,cg:true,m/cr=w:365,h:365/qt=q:56" alt="Image 1">
                    <img src="https://img1.wsimg.com/isteam/stock/kayaJdA/:/rs=w:365,h:365,cg:true,m/cr=w:365,h:365/qt=q:56" alt="Image 2">
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
