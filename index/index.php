<?php
$page = 'home';
require('../header/header.php')

?>



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