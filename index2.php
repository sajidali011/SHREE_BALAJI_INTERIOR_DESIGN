

   <?php include "navbar.php" ?>


    <!-- Hero Start -->
    <style>
  .hero-bg {
    background-color: #eef4f4; /* Light teal background */
  }
  .text-teal {
    color: #216a62 !important; /* Dark teal for text */
  }
  .bg-teal-box {
    background-color: #216a62;
  }
  .btn-orange {
    background-color: #f06a44;
    color: white;
    border-radius: 25px;
    padding: 10px 30px;
    border: none;
    font-weight: 500;
  }
  .image-container {
    position: relative;
    padding-top: 30px;
    padding-left: 30px;
  }
  .image-backdrop {
    position: absolute;
    top: 0;
    left: 0;
    width: 65%;
    height: 100%;
    z-index: 1;
  }
  .main-img {
    position: relative;
    z-index: 2;
    width: 100%;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
  }
  .form-card {
    background: white;
    padding: 35px;
    border-radius: 12px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.05);
  }
  .form-control-custom {
    border: 1px solid #e0e0e0;
    border-radius: 6px;
    margin-bottom: 18px;
    padding: 12px 15px;
    font-size: 14px;
  }
  .floating-icons {
    position: absolute;
    right: -25px;  /* Icons ko form ke right edge par set karne ke liye */
  bottom: 35px;
    transform: translateY(-50%);
    z-index: 3;
    display: flex;
    flex-direction: column;
    gap: 15px;
    
  }
  
  .icon-circle {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 20px;
    text-decoration: none;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  }
  .icon-call { background-color: #f06a44; }
  .icon-wa { background-color: #25d366; }
  .bottom-feature-icon {
    color: #216a62;
    background: #e4ecec;
    padding: 8px;
    border-radius: 6px;
    font-size: 18px;
  }
  .award-badge {
    border: 1px solid #c8d8d8;
    border-radius: 4px;
    padding: 10px 30px;
    display: inline-block;
  }
</style>

<div class="container-fluid pb-5 hero-bg mb-5 pt-5">
    <div class="container py-5">
        
        <!-- Top Section: Image (Left) & Form (Right) -->
        <div class="row g-5 align-items-center mb-5">
            <!-- Left Side: Image Block -->
            <div class="col-lg-7">
                <div class="image-container">
                    <div class="image-backdrop bg-teal-box"></div>
                    <img class="img-fluid main-img" src="img/hero-slider-1.jpg" alt="Interior">
                </div>
            </div>

            <!-- Right Side: Form Block with Floating Icons -->
            <div class="col-lg-5 position-relative">
                <!-- Chat/Call Icons -->
                <div class="floating-icons d-none d-lg-flex">
                    <a href="#" class="icon-circle icon-call"><i class="fa fa-phone"></i></a>
                    <a href="#" class="icon-circle icon-wa"><i class="fab fa-whatsapp"></i></a>
                </div>

                <!-- Form -->
                <div class="form-card animated fadeIn">
                    <h4 class="mb-4 fw-bold">Book Free Consultation</h4>
                    <form>
                        <input type="text" class="form-control form-control-custom" placeholder="Name">
                        <input type="text" class="form-control form-control-custom" placeholder="Phone">
                        <input type="text" class="form-control form-control-custom" placeholder="Location of Project">
                        <textarea class="form-control form-control-custom" rows="3" placeholder="Requirement"></textarea>
                        <button type="button" class="btn btn-orange mt-2">Get a Quote</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Middle Section: Headings -->
        <div class="text-center mb-5 mt-5 animated slideInUp">
            <h1 class="display-3 fw-bold mb-3" style="color: #1a2a29;">We Make Your <br><span class="text-teal">Home</span> Better</h1>
            <div class="award-badge mt-3">
                <h6 class="mb-0 text-muted fw-normal">An Award Winning Studio Since 1990</h6>
            </div>
        </div>

        <!-- Bottom Section: Features -->
        <div class="row g-4 justify-content-center text-center animated fadeIn">
            <div class="col-md-6 col-lg-3">
                <div class="d-flex align-items-center justify-content-center gap-3">
                    <i class="fas fa-couch bottom-feature-icon"></i>
                    <h6 class="mb-0 fw-normal">Crafted Furniture</h6>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="d-flex align-items-center justify-content-center gap-3">
                    <i class="fas fa-leaf bottom-feature-icon"></i>
                    <h6 class="mb-0 fw-normal">Sustainable Material</h6>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="d-flex align-items-center justify-content-center gap-3">
                    <i class="fas fa-drafting-compass bottom-feature-icon"></i>
                    <h6 class="mb-0 fw-normal">Innovative Architects</h6>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="d-flex align-items-center justify-content-center gap-3">
                    <i class="fas fa-wallet bottom-feature-icon"></i>
                    <h6 class="mb-0 fw-normal">Budget Friendly</h6>
                </div>
            </div>
        </div>

    </div>
</div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid" src="img/about-1.jpg" alt="">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid h-75" src="img/about-2.jpg" alt="">
                            <div class="h-25 d-flex align-items-center text-center bg-primary px-4">
                                <h4 class="text-white lh-base mb-0">Award Winning Studio Since 1990</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-5"><span class="text-uppercase text-primary bg-light px-2">History</span> of Our
                        Creation</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                        amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                        clita duo justo et tempor eirmod magna dolore erat amet</p>
                    <p class="mb-5">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no
                        labore lorem sit. Sanctus clita duo justo et tempor.</p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Award Winning</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Professional Staff</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>24/7 Support</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Fair Prices</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-5">
                        <a class="btn btn-primary px-4 me-2" href="">Read More</a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.1s">
                <h1 class="mb-5">Why People <span class="text-uppercase text-primary bg-light px-2">Choose Us</span></h1>
            </div>
            <div class="row g-5 align-items-center text-center">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-calendar-alt fa-5x text-primary mb-4"></i>
                    <h4>25+ Years Experience</h4>
                    <p class="mb-0">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-tasks fa-5x text-primary mb-4"></i>
                    <h4>Best Interior Design</h4>
                    <p class="mb-0">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-pencil-ruler fa-5x text-primary mb-4"></i>
                    <h4>Innovative Architects</h4>
                    <p class="mb-0">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-user fa-5x text-primary mb-4"></i>
                    <h4>Customer Satisfaction</h4>
                    <p class="mb-0">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-hand-holding-usd fa-5x text-primary mb-4"></i>
                    <h4>Budget Friendly</h4>
                    <p class="mb-0">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-check fa-5x text-primary mb-4"></i>
                    <h4>Sustainable Material</h4>
                    <p class="mb-0">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Project Start -->
    <div class="container-fluid mt-5">
        <div class="container mt-5">
            <div class="row g-0">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column justify-content-center bg-primary h-100 p-5">
                        <h1 class="text-white mb-5">Our Latest <span
                                class="text-uppercase text-primary bg-light px-2">Projects</span></h1>
                        <h4 class="text-white mb-0"><span class="display-1">6</span> of our latest projects</h4>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/project-1.jpg" alt="">
                                <a class="project-overlay text-decoration-none" href="">
                                    <h4 class="text-white">Kitchen</h4>
                                    <small class="text-white">72 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/project-2.jpg" alt="">
                                <a class="project-overlay text-decoration-none" href="">
                                    <h4 class="text-white">Bathroom</h4>
                                    <small class="text-white">67 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.4s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/project-3.jpg" alt="">
                                <a class="project-overlay text-decoration-none" href="">
                                    <h4 class="text-white">Bedroom</h4>
                                    <small class="text-white">53 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/project-4.jpg" alt="">
                                <a class="project-overlay text-decoration-none" href="">
                                    <h4 class="text-white">Living Room</h4>
                                    <small class="text-white">33 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.6s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/project-5.jpg" alt="">
                                <a class="project-overlay text-decoration-none" href="">
                                    <h4 class="text-white">Furniture</h4>
                                    <small class="text-white">87 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/project-6.jpg" alt="">
                                <a class="project-overlay text-decoration-none" href="">
                                    <h4 class="text-white">Rennovation</h4>
                                    <small class="text-white">69 Projects</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->


    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="mb-5">Our Creative <span
                            class="text-uppercase text-primary bg-light px-2">Services</span></h1>
                    <p>Aliqu diam
                        amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                        clita duo justo et tempor eirmod magna dolore erat amet</p>
                    <p class="mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                        amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                        clita duo justo et tempor eirmod magna dolore erat amet</p>
                    <div class="d-flex align-items-center bg-light">
                        <div class="btn-square flex-shrink-0 bg-primary" style="width: 100px; height: 100px;">
                            <i class="fa fa-phone fa-2x text-white"></i>
                        </div>
                        <div class="px-3">
                            <h3>+0123456789</h3>
                            <span>Call us direct 24/7 for get a free consultation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row g-0">
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="service-item h-100 d-flex flex-column justify-content-center bg-primary">
                                <a href="" class="service-img position-relative mb-4">
                                    <img class="img-fluid w-100" src="img/service-1.jpg" alt="">
                                    <h3>Interior Design</h3>
                                </a>
                                <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                    stet diam sed stet lorem.</p>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="service-item h-100 d-flex flex-column justify-content-center bg-light">
                                <a href="" class="service-img position-relative mb-4">
                                    <img class="img-fluid w-100" src="img/service-2.jpg" alt="">
                                    <h3>Implement</h3>
                                </a>
                                <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                    stet diam sed stet lorem.</p>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.6s">
                            <div class="service-item h-100 d-flex flex-column justify-content-center bg-light">
                                <a href="" class="service-img position-relative mb-4">
                                    <img class="img-fluid w-100" src="img/service-3.jpg" alt="">
                                    <h3>Renovation</h3>
                                </a>
                                <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                    stet diam sed stet lorem.</p>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.8s">
                            <div class="service-item h-100 d-flex flex-column justify-content-center bg-primary">
                                <a href="" class="service-img position-relative mb-4">
                                    <img class="img-fluid w-100" src="img/service-4.jpg" alt="">
                                    <h3>Commercial</h3>
                                </a>
                                <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                    stet diam sed stet lorem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Team Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <h1 class="mb-5">Our Professional <span class="text-uppercase text-primary bg-light px-2">Designers</span>
            </h1>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                        <div class="team-overlay">
                            <small class="mb-2">Architect</small>
                            <h4 class="lh-base text-light">Boris Johnson</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                        <div class="team-overlay">
                            <small class="mb-2">Architect</small>
                            <h4 class="lh-base text-light">Donald Pakura</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                        <div class="team-overlay">
                            <small class="mb-2">Architect</small>
                            <h4 class="lh-base text-light">Bradley Gordon</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-4.jpg" alt="">
                        <div class="team-overlay">
                            <small class="mb-2">Architect</small>
                            <h4 class="lh-base text-light">Alexander Bell</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-9">
                    <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.2s">
                        <div class="testimonial-item">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="img/testimonial-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testimonial-text pb-5 pb-md-0">
                                        <h3>Sustainable Material</h3>
                                        <p>Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed
                                            stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna
                                            dolore erat
                                            amet</p>
                                        <h5 class="mb-0">Boris Johnson</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="img/testimonial-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testimonial-text pb-5 pb-md-0">
                                        <h3>Customer Satisfaction</h3>
                                        <p>Clita erat ipsum et lorem et sit, sed
                                            stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna
                                            dolore erat
                                            amet</p>
                                        <h5 class="mb-0">Alexander Bell</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="img/testimonial-3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testimonial-text pb-5 pb-md-0">
                                        <h3>Budget Friendly</h3>
                                        <p>Diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed
                                            stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna
                                            dolore erat
                                            amet</p>
                                        <h5 class="mb-0">Bradley Gordon</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <?php include "footer.php" ?>
</body>

</html>