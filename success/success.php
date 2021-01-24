<pre>
    <?php

    function safe($inp)
    {
        $inp = htmlspecialchars($inp);
        $inp = trim($inp);
        return $inp;
    }

    ?>
</pre>



<?php

$page = 'contact';

require('../header/header.php');

?>


<header>
</header>
<main class="contact-main">
    <div class="contact-main-container1">
        <div class="contact-main-photo">
            <img src="./success-img/AA_TIC_010-1.jpg" alt="">
            <h2 style="margin-top: 10px;">Get in touch</h2>
            <p class="contact-p">Office hours are 9am to 5pm on weekdays.
                We are based in Kaunas , Lithuania.


            </p>
        </div>
        <div class="contact-main-photo2">
            <img src="./success-img/project-planner.png" alt="" style="width: 40%;">
            <h2 style="margin: 10px 0px">Ready to get started?</h2>
            <p class="contact-p">Please fill out the project planner
                to get a quote based on your project requirements.
                Once submitted, we will get in touch with you
                as soon as possible to provide you with a quote and
                to get started on your project.</p>
        </div>
    </div>
    <div class="contact-main-container2">
        <div class="contact-main-container-h2">
            <h2 class="contact-main-h2">Your question has been sent!</h2>
        </div>
        <div class="contact-main-form">
            <h1 style="margin-top: 65px;">Thanks you for your question! <br> We will contact you as soon as possible.</h1>
        </div>
    </div>
</main>

<?php

require('../footer/footer.php')

?>
<script src="../js/main.js"></script>
</body>

</html>