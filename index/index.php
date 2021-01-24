<?php
$page = 'home';
require('../header/header.php')

?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio</title>
  <link rel="stylesheet" href="../stilius/style.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/0903a224ee.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav>
      <div class="logo">
          <img src="../header/images.png" alt="Image of codeacademy" class="img-logo" />
      </div>

      <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
      </a>

      <div class="nav-links">
          <ol>
              <li>
                  <a class=" nav-item <?php if ($page === 'home') echo 'home' ?>" href="../index/index.php"> Home</a>
              </li>
              <li>
                  <a class="nav-item <?php if ($page === 'portfolio') echo 'home' ?>" href="../portfolio/portfolio.php">Portfolio</a>
              </li>
              <li>
                  <a class="nav-item <?php if ($page === 'service') echo 'home' ?>" href="../services/service.php">Services</a>
              </li>
              <li>
                  <a class="nav-item <?php if ($page === 'about') echo 'home' ?>" href="../about/about.php">About</a>
              </li>
              <li>
                  <a class="nav-item <?php if ($page === 'resources') echo 'home' ?>" href="../resources/resources.php">Resources</a>
              </li>
              <li>
                  <a class="nav-item <?php if ($page === 'tutorials') echo 'home' ?>" href="../tutorials/tutorials.php">Tutorials</a>
              </li>
              <li>
                  <a class="nav-item <?php if ($page === 'contact') echo 'home' ?>" href="../contact/contact.php">Contact</a>
              </li>
          </ol>
      </div>



      </a>
      </div>
  </nav>
  <h1>
      Freelance Web Designer & Developer based in Kaunas, Lithuania. <br />
      Highly inexperienced in designing & developing custom websites.
  </h1>



<header>
  <div class="header-container">
    <img class="header-img" src="./index-img/responsive.png" alt="Image of computer,tablet,phone" />
  </div>
  <div class="header-text">
    <p class="header-p">
      Fully responsive, <br>
      custom designed <br>
      Wordpress <span class="header-span">CMS</span>
      websites.
    </p>
    <br />
    <br />
    <br />
    <br />
    <a href="#" class="header-btn">View portfolio
      <i class="fas fa-chevron-circle-right" id="main-arrow"></i>
    </a>
  </div>
</header>
<main class="home-main">
  <div class="web-design">
    <img src="./index-img/home1.png" alt="Image of pencil and a brush" style="width: 45%; margin: 20px" />
    <h2>Website Design</h2>
    <p>
      Our approach to website design is to create
      a website that strengthens your company’s
      brand while ensuring ease of use and
      simplicity for your audience.
    </p>
    <a href="" class="web-button">Learn more
      <i class="fas fa-chevron-circle-right"></i>
    </a>
  </div>
  <div class="custom">
    <img src="./index-img/home2.png" alt="Wordpress logo" style="width: 45%; margin: 20px" />
    <h2>Custom WordPress Theme Development</h2>
    <p>
      Wordpress CMS is a user-friendly
      administrative area allowing you to easily
      edit your website's content.
    </p>
    <a href="" class="web-button">Learn more
      <i class="fas fa-chevron-circle-right"></i>
    </a>
  </div>
  <div class="wordpress">
    <img src="./index-img/home3.png" alt="Image of a folder with a ribbon" style="width: 45%; margin: 20px" />
    <h2>Wordpress Training & Tutoring</h2>
    <p>
      We offer customised WordPress training to
      ensure you are confident in updating and
      maintaining your WordPress website.
    </p>
    <a href="" class="web-button">Learn more
      <i class="fas fa-chevron-circle-right"></i>
    </a>
  </div>
</main>

<?php

require('../footer/footer.php')

?>

<script src="../js/main.js"></script>
</body>

</html>