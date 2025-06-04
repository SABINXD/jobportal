<?php
require_once 'assets/php/function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />

  <title>Get Any job everywhere in nepal | Rojgar Nepal</title>
</head>

<body>

  <nav>
    <div class="nav__header">
      <div class="nav__logo">
        <a href="#" class="logo">RojGar<span>Nepal</span></a>
      </div>
      <div class="nav__menu__btn" id="menu-btn">
        <i class="ri-menu-line"></i>
      </div>
    </div>
    <ul class="nav__links" id="nav-links">
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#job">Jobs</a></li>
      <li><a href="#service">Services</a></li>
      <li><a href="#client">Client</a></li>
      <?php
      if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
      ?>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle"><img src="assets/img/google.png" alt=""> <i class="ri-arrow-drop-down-line"></i></a>
          <ul class="dropdown-menu">

            <li><a href="?edit">Edit Profile</a></li>
            <li><a href="?logout">Logout</a></li>
          </ul>
        </li>
      <?php
      } else {
      ?>
        <li><button class="btn"><a style="color: white; font-weight: bold;" href="?signup">Register</a></button></li>
      <?php
      }
      ?>
    </ul>
  </nav>
  <header class="section__container header__container" id="home">
    <img src="assets/img/google.png" alt="header" />
    <img src="assets/img/twitter.png" alt="header" />
    <img src="assets/img/amazon.png" alt="header" />
    <img src="assets/img/figma.png" alt="header" />
    <img src="assets/img/linkedin.png" alt="header" />
    <img src="assets/img/microsoft.png" alt="header" />
    <h2>
      <img src="assets/img/bag.png" alt="bag" />
      No.1 Job Hunt Website
    </h2>
    <h1>Search, Apply &<br />Get Your <span>Dream Job</span></h1>
    <p>
      Your future starts here. Discover countless opportunities, take action
      by applying to jobs that match your skills and aspirations, and
      transform your career.
    </p>
    <div class="header__btns">
      <button class="btn">Browse Jobs</button>
      <a href="#">
        <span><i class="ri-play-fill"></i></span>
        How It Works?
      </a>
    </div>
  </header>

  <section class="steps" id="about">
    <div class="section__container steps__container">
      <h2 class="section__header">
        Get Hired in 4 <span>Quick Easy Steps</span>
      </h2>
      <p class="section__description">
        Follow Our Simple, Step-by-Step Guide to Quickly Land Your Dream Job
        and Start Your New Career Journey.
      </p>
      <div class="steps__grid">
        <div class="steps__card">
          <span><i class="ri-user-fill"></i></span>
          <h4>Create an Account</h4>
          <p>
            Sign up with just a few clicks to unlock exclusive access to a
            world of job opportunities and landing your dream job. It's quick,
            easy, and completely free.
          </p>
        </div>
        <div class="steps__card">
          <span><i class="ri-search-fill"></i></span>
          <h4>Search Job</h4>
          <p>
            Dive into our job database tailored to match your skills and
            preferences. With our advanced search filters, finding the perfect
            job has never been easier.
          </p>
        </div>
        <div class="steps__card">
          <span><i class="ri-file-paper-fill"></i></span>
          <h4>Upload CV/Resume</h4>
          <p>
            Showcase your experience by uploading your CV or resume. Let
            employers know why you're the perfect candidate for their job
            openings.
          </p>
        </div>
        <div class="steps__card">
          <span><i class="ri-briefcase-fill"></i></span>
          <h4>Get Job</h4>
          <p>
            Take the final step towards your new career. Get ready to embark
            on your professional journey and secure the job you've been
            dreaming of.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="section__container explore__container">
    <h2 class="section__header">
      <span>Job Categories</span> Available on Our Platform
    </h2>
    <p class="section__description">
      Explore Various Job Categories and Find Opportunities in Your Desired Field
    </p>
    <div class="explore__grid">

      <div class="explore__card">
        <span></span>
        <h4>MicroSoft</h4>
        <p>10 Jobs</p>
      </div>
      <div class="explore__card">
        <span></span>
        <h4>MicroSoft</h4>
        <p>10 Jobs</p>
      </div>
      <div class="explore__card">
        <span></span>
        <h4>MicroSoft</h4>
        <p>10 Jobs</p>
      </div>
      <div class="explore__card">
        <span></span>
        <h4>MicroSoft</h4>
        <p>10 Jobs</p>
      </div>
      <div class="explore__card">
        <span></span>
        <h4>MicroSoft</h4>
        <p>10 Jobs</p>
      </div>
      <div class="explore__card">
        <span></span>
        <h4>MicroSoft</h4>
        <p>10 Jobs</p>
      </div>
      <div class="explore__card">
        <span></span>
        <h4>MicroSoft</h4>
        <p>10 Jobs</p>
      </div>
      <div class="explore__card">
        <span></span>
        <h4>MicroSoft</h4>
        <p>10 Jobs</p>
      </div>

    </div>
    <div class="explore__btn">
      <button class="btn">View All Categories</button>
    </div>
  </section>

  <section class="section__container job__container" id="job">
    <h2 class="section__header"><span>Latest & Top</span> Job Openings</h2>
    <p class="section__description">
      Discover Exciting New Opportunities and High-Demand Positions Available
      Now in Top Industries and Companies
    </p>

    <div class="job__grid">



      <div class="job__card">
        <div class="job__card__header">
          <img src="assets/img/figma.png" />
          <div>
            <h5>Micorsoft</h5>
            <h6>Nepal</h6>
          </div>
        </div>
        <h4>Prooject Manger</h4>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi unde aut optio quidem doloremque maxime impedit a, accusamus perferendis nemo recusandae vel reiciendis.</p>
        <div class="job__card__footer">
          <span>Full Time</span>
          <span>Remote</span>
          <span>RS 50000</span>
        </div>

      </div>
      <div class="job__card">
        <div class="job__card__header">
          <img src="assets/img/amazon.png" />
          <div>
            <h5>Micorsoft</h5>
            <h6>Nepal</h6>
          </div>
        </div>
        <h4>Prooject Manger</h4>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi unde aut optio quidem doloremque maxime impedit a, accusamus perferendis nemo recusandae vel reiciendis.</p>
        <div class="job__card__footer">
          <span>Full Time</span>
          <span>Remote</span>
          <span>RS 50000</span>
        </div>

      </div>
      <div class="job__card">
        <div class="job__card__header">
          <img src="assets/img/google.png" />
          <div>
            <h5>Micorsoft</h5>
            <h6>Nepal</h6>
          </div>
        </div>
        <h4>Prooject Manger</h4>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi unde aut optio quidem doloremque maxime impedit a, accusamus perferendis nemo recusandae vel reiciendis.</p>
        <div class="job__card__footer">
          <span>Full Time</span>
          <span>Remote</span>
          <span>RS 50000</span>
        </div>

      </div>
      <div class="job__card">
        <div class="job__card__header">
          <img src="assets/img/google.png" />
          <div>
            <h5>Micorsoft</h5>
            <h6>Nepal</h6>
          </div>
        </div>
        <h4>Prooject Manger</h4>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi unde aut optio quidem doloremque maxime impedit a, accusamus perferendis nemo recusandae vel reiciendis.</p>
        <div class="job__card__footer">
          <span>Full Time</span>
          <span>Remote</span>
          <span>RS 50000</span>
        </div>

      </div>
      <div class="job__card">
        <div class="job__card__header">
          <img src="assets/img/microsoft.png" />
          <div>
            <h5>Micorsoft</h5>
            <h6>Nepal</h6>
          </div>
        </div>
        <h4>Prooject Manger</h4>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi unde aut optio quidem doloremque maxime impedit a, accusamus perferendis nemo recusandae vel reiciendis.</p>
        <div class="job__card__footer">
          <span>Full Time</span>
          <span>Remote</span>
          <span>RS 50000</span>
        </div>

      </div>
      <div class="job__card">
        <div class="job__card__header">
          <img src="assets/img/amazon.png" />
          <div>
            <h5>Micorsoft</h5>
            <h6>Nepal</h6>
          </div>
        </div>
        <h4>Prooject Manger</h4>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi unde aut optio quidem doloremque maxime impedit a, accusamus perferendis nemo recusandae vel reiciendis.</p>
        <div class="job__card__footer">
          <span>Full Time</span>
          <span>Remote</span>
          <span>RS 50000</span>
        </div>

      </div>

    </div>
  </section>
  <div id="jobFormContainer" style="display: none;"></div>

  <section class="section__container offer__container" id="service">
    <h2 class="section__header">What We <span>Offer</span></h2>
    <p class="section__description">
      Explore the Benefits and Services We Provide to Enhance Your Job Search
      and Career Success
    </p>
    <div class="offer__grid">
      <div class="offer__card">
        <img src="assets/img/offer-1.jpg" alt="offer" />
        <div class="offer__details">
          <span>01</span>
          <div>
            <h4>Job Recommendation</h4>
            <p>
              Personalized job matches tailored to your skills and preferences
            </p>
          </div>
        </div>
      </div>
      <div class="offer__card">
        <img src="assets/img/offer-2.jpg" alt="offer" />
        <div class="offer__details">
          <span>02</span>
          <div>
            <h4>Create & Build Portfolio</h4>
            <p>Showcase your expertise with professional portfolio design</p>
          </div>
        </div>
      </div>
      <div class="offer__card">
        <img src="assets/img/offer-3.jpg" alt="offer" />
        <div class="offer__details">
          <span>03</span>
          <div>
            <h4>Career Consultation</h4>
            <p>Receive expert advice to navigate your career path</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section__container client__container" id="client">
    <h2 class="section__header">What Our <span>Client Say</span></h2>
    <p class="section__description">
      Read Testimonials and Success Stories from Our Satisfied Job Seekers and
      Employers to See How We Make a Difference
    </p>
    <!-- Slider main container -->
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <div class="client__card">
            <img src="assets/img/client-1.jpg" alt="client" />
            <p>
              Searching for a job can be overwhelming, but this platform made
              it simple and efficient. I uploaded my resume, applied to a few
              positions, and soon enough, I was hired! Thank you for helping
              me kickstart my career!
            </p>
            <div class="client__ratings">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
            </div>
            <h4>Sarah Patel</h4>
            <h5>Graphic Designer</h5>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="client__card">
            <img src="assets/img/client-2.jpg" alt="client" />
            <p>
              As a recent graduate, I was unsure where to start my job search.
              This website guided me through the process step by step. From
              creating my profile to receiving job offers, everything was
              seamless. I'm now happily employed thanks to this platform!
            </p>
            <div class="client__ratings">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-half-fill"></i></span>
            </div>
            <h4>Michael Brown</h4>
            <h5>Recent Graduate</h5>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="client__card">
            <img src="assets/img/client-3.jpg" alt="client" />
            <p>
              Creating an account was a breeze, and I was amazed by the number
              of job opportunities available. Thanks to this website, I found
              the perfect position that aligned perfectly with my career
              goals.
            </p>
            <div class="client__ratings">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
            </div>
            <h4>David Smith</h4>
            <h5>Software Engineer</h5>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="section__container footer__container">
      <div class="footer__col">
        <div class="footer__logo">
          <a href="#" class="logo">Job<span>Hunt</span></a>
        </div>
        <p>
          Our platform is designed to help you find the perfect job and
          achieve your professional dreams.
        </p>
      </div>
      <div class="footer__col">
        <h4>Quick Links</h4>
        <ul class="footer__links">
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Jobs</a></li>
          <li><a href="#">Testimonials</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
      <div class="footer__col">
        <h4>Follow Us</h4>
        <ul class="footer__links">
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Instagram</a></li>
          <li><a href="#">LinkedIn</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Youtube</a></li>
        </ul>
      </div>
      <div class="footer__col">
        <h4>Contact Us</h4>
        <ul class="footer__links">
          <li>
            <a href="#">
              <span><i class="ri-phone-fill"></i></span> +91 234 56788
            </a>
          </li>
          <li>
            <a href="#">
              <span><i class="ri-map-pin-2-fill"></i></span> 123 Main Street,
              Anytown, USA
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="footer__bar">
      Copyright © 2024 Web Design Mastery. All rights reserved.
    </div>
  </footer>
  <div id="ball" class="ball"></div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>