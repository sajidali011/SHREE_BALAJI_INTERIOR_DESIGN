 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>iSTUDIO - Interior Design Website Template Free</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Space+Grotesk&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
 
 <!-- Navbar Start -->
<div class="container-fluid sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light custom-navbar">

            <!-- Logo -->
            <a href="index.php" class="navbar-brand site1-logo-wrapper">
                <img src="img/SB_1.png" alt="Shri Bala Ji" class="site1-logo">
            </a>

            <!-- Mobile Toggle Button -->
            <button type="button"
                    class="navbar-toggler ms-auto"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation -->
            <div class="collapse navbar-collapse" id="navbarCollapse">

                <div class="navbar-nav ms-auto">

                    <a href="index.php" class="nav-item nav-link">
                        Home
                    </a>

                    <a href="about.php" class="nav-item nav-link">
                        About
                    </a>

                    <a href="service.php" class="nav-item nav-link">
                        Services
                    </a>

                    <a href="project.php" class="nav-item nav-link active">
                        Projects
                    </a>

                    <!-- Dropdown -->
                    <div class="nav-item dropdown">

                        <a href="#"
                           class="nav-link dropdown-toggle"
                           data-bs-toggle="dropdown">
                            Pages
                        </a>

                        <div class="dropdown-menu bg-light mt-2">

                            <a href="feature.php" class="dropdown-item">
                                Features
                            </a>

                            <a href="team.php" class="dropdown-item">
                                Our Team
                            </a>

                            <a href="testimonial.php" class="dropdown-item">
                                Testimonial
                            </a>

                            <a href="404.php" class="dropdown-item">
                                404 Page
                            </a>

                        </div>

                    </div>

                    <a href="contact.php" class="nav-item nav-link">
                        Contact
                    </a>

                </div>

            </div>

        </nav>
    </div>
</div>
<!-- Navbar End -->


<style>

/* =====================================
   NAVBAR
===================================== */

.custom-navbar {
    height: 80px;
    min-height: 80px;
    position: relative;

    /* White background remove */
    background: transparent !important;

    border-bottom: 2px solid rgba(255, 255, 255, 0.8);

    /* Logo ko cut hone se rokega */
    overflow: visible !important;
}


/* =====================================
   LOGO
===================================== */

.site1-logo-wrapper {
    width: 180px;
    height: 80px;

    display: flex;
    align-items: center;

    position: relative;
    z-index: 1050;

    padding: 0;
    margin: 0;

    /* Logo cut nahi hoga */
    overflow: visible !important;
}

.site1-logo {
    width: 120px;
    height: 100px;

    object-fit: contain;
    display: block;

    position: relative;
    z-index: 1051;
}


/* =====================================
   NAV LINKS
===================================== */

.custom-navbar .navbar-nav {
    align-items: center;
}

.custom-navbar .nav-link {
    padding: 25px 15px;
}


/* =====================================
   TOGGLE BUTTON
===================================== */

.custom-navbar .navbar-toggler {
    z-index: 1100;

    border: 2px solid #555;

    padding: 8px 10px;

    background: transparent;
}

.custom-navbar .navbar-toggler:focus {
    box-shadow: none;
}


/* =====================================
   MOBILE
===================================== */

@media (max-width: 991.98px) {

    .custom-navbar {
        height: 80px;
        min-height: 80px;

        /* IMPORTANT */
        background: transparent !important;

        position: relative;

        /* Logo/toggler ko upar align karne ke liye */
        display: flex;
        align-items: flex-start;

        overflow: visible !important;
    }


    /* Logo — chhota aur upar */

    .site1-logo-wrapper {
        width: 110px;
        height: 80px;

        align-items: flex-start;

        margin-top: 6px;

        overflow: visible !important;
    }

    .site1-logo {
        width: 85px;
        height: 70px;

        object-fit: contain;

        position: relative;
        z-index: 1051;
    }


    /* Toggle — upar align */

    .custom-navbar .navbar-toggler {
        margin-right: 5px;
        margin-top: 6px;

        background: transparent;

        position: relative;
        z-index: 1100;

        align-self: flex-start;
    }


    /* Mobile Menu */

    .custom-navbar .navbar-collapse {
        position: absolute;

        top: 80px;
        left: 0;
        right: 0;

        width: 100%;

        /* Menu open hone par white background */
        background: #ffffff;

        padding: 15px 20px;

        border-top: 1px solid #eeeeee;
        border-bottom: 1px solid #eeeeee;

        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.10);

        z-index: 1000;
    }


    /* Mobile Links */

    .custom-navbar .navbar-nav {
        width: 100%;
        align-items: stretch;
    }

    .custom-navbar .nav-link {
        padding: 12px 10px;
        color: #111 !important;

        border-bottom: 1px solid #eeeeee;
    }


    /* Dropdown */

    .custom-navbar .dropdown-menu {
        position: static !important;

        width: 100%;

        margin: 0 !important;

        border: none;

        box-shadow: none;

        background: #f8f8f8 !important;
    }

    .custom-navbar .dropdown-item {
        padding: 10px 20px;
    }
}


/* =====================================
   SMALL MOBILE
===================================== */

@media (max-width: 575.98px) {

    .custom-navbar {
        height: 75px;
        min-height: 75px;

        background: transparent !important;

        overflow: visible !important;
    }

    .site1-logo-wrapper {
        width: 95px;
        height: 75px;

        margin-top: 4px;

        overflow: visible !important;
    }

    .site1-logo {
        width: 75px;
        height: 62px;

        object-fit: contain;
    }

    .custom-navbar .navbar-toggler {
        margin-top: 4px;
    }

    .custom-navbar .navbar-collapse {
        top: 75px;
    }
}

</style>