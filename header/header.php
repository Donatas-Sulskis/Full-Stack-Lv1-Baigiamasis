<!DOCTYPE html>
<html lang="en">

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
    <script>

    </script>