<div id="mainview" style="background-color: black; height: 100vh; min-height: 10in;">

    <div class="slideshow" style="width: 100%; height: 100%; overflow: hidden; position: relative;">
        <img class="slideshow-images" src="https://img1.wsimg.com/isteam/stock/3395/:/cr=t:11.02%25,l:0%25,w:100%25,h:77.95%25/rs=w:600,h:300,cg:true/qt=q:80" alt="Slide 1">
        <img class="slideshow-images" src="https://img1.wsimg.com/isteam/stock/3395/:/cr=t:11.02%25,l:0%25,w:100%25,h:77.95%25/rs=w:600,h:300,cg:true/qt=q:80" alt="Slide 2">
        <img class="slideshow-images" src="https://img1.wsimg.com/isteam/stock/3395/:/cr=t:11.02%25,l:0%25,w:100%25,h:77.95%25/rs=w:600,h:300,cg:true/qt=q:80" alt="Slide 3">

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

                    <!-- <img src="https://img1.wsimg.com/isteam/ip/067a4d42-19e8-46d9-9bed-578bf62dd44e/blob-6c0c2e0.png/:/rs=w:536,h:167,cg:true,m/cr=w:536,h:167/qt=q:95" style="background-color: white;" width=100 alt="Slide 1"> -->
            </nav>

            <div class="carousel-container">

                <div class="carousel" style="background-color: green;">
                    
                    <div style="background-color: red; margin-left: 30px; margin-right: 30px; height: 60%;">
                        <div style="margin-top: 10%; display: flex; height: 100%;">
                            <div style="background-color: pink; height: 100%; width: 5%; display: flex; justify-content: center; align-items: center;">
                                <a onclick="next()">
                                    <i class="fas fa-arrow-left" style="font-size: 20px;"></i>
                                </a>
                            </div>

                            <div class="carousel-info" style="position: relative; width: 90%; padding: 20px;">
                                <div class="carousel-slide active">
                                    <div class="title">First Slide Lorem Ipsum</div>

                                    <div class="desc">
                                        Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                                        Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
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

                            <div style="width: 5%; display: flex; justify-content: center; align-items: center;">
                                <a onclick="next()">
                                    <i class="fas fa-arrow-right" style="font-size: 20px;"></i>
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
