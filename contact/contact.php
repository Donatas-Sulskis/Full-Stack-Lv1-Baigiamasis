<pre>
    <?php


    function safe($inp)
    {
        $inp = htmlspecialchars($inp);
        $inp = trim($inp);
        return $inp;
    }

    $success = '../success/success.php';

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
            <img src="./contact-img/AA_TIC_010-1.jpg" alt="Image of a city">
            <h2 style="margin-top: 10px;">Get in touch</h2>
            <p class="contact-p">Office hours are 9am to 5pm on weekdays.
                We are based in Kaunas , Lithuania.


            </p>
        </div>
        <div class="contact-main-photo2">
            <img src="./contact-img/project-planner.png" alt="Image of a pencil" style="width: 40%;">
            <h2 style="margin: 10px 0px">Ready to get started?</h2>
            <p class="contact-p">Please fill out the project planner
                to get a quote based on your project requirements.
                Once submitted, we will get in touch with you
                as soon as possible to provide you with a quote and
                to get started on your project.</p>
        </div>
    </div>
    <?php if (safe(!empty($_POST['inputEmail'])) && safe(isset($_POST['privacyInput']))) : ?>
        <div class="contact-main-container2">
            <div class="contact-main-container-h2">
                <h2 class="contact-main-h2">Your question has been sent!</h2>
            </div>
            <div class="contact-main-form">
                <h1 style="margin-top: 65px;">Thanks you for your question! <br> We will contact you as soon as possible.</h1>
            </div>
        </div>
    <?php else : ?>
        <div class="contact-main-container2">
            <div class="contact-main-container-h2">
                <h2 class="contact-main-h2">Have a question? Please enquire below</h2>
            </div>
            <div class="contact-main-form">
                <form action="contact.php" method="POST">
                    <span class="contact-span">Name</span> <br> <br><input class="input" name="inputName" type="text" autocomplete="off"> <br>
                    <span class="contact-span">Email</span><i style="color:red;">*</i> <br> <br><input class="input" name="inputEmail" type="email" autocomplete="off"> <br>
                    <span class="contact-span">Website</span> <br> <br><input class="input" name="inputWebsite" type="url" autocomplete="off"> <br>
                    <span class="contact-span">Phone</span> <br> <br><input class="input" name="inputPhone" type="tel" autocomplete="off"> <br>
                    <span class="contact-span">Privacy</span><i style="color:red;">*</i> <br> <br>
                    <span class="contact-privacy">By using this form you agree with the storage and handling of your data by this website.
                        Please read our <a href="https://www.random.org/terms/2020-08-01/privacy" target="_blank" class="contact-a"> Privacy Policy </a> for more information on how we handle your data.</span> <br>
                    <br><input class="input-box" name="privacyInput" type="checkbox"> <span class="contact-span"> I agree </span> <br> <br>
                    <?php
                    echo '<p style= "color: red;">Fill in required fields</p>';
                    ?>

                    <button class="button" type="submit">Send</button>
                </form>
            </div>
        </div>
    <?php endif; ?>
</main>

<?php

require('../footer/footer.php')

?>
<script src="../js/main.js"></script>
</body>

</html>