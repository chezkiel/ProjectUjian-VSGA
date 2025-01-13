<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <nav class="py-2 bg-body-tertiary border-bottom">
        <div class="container d-flex flex-wrap">
            <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
                <img src="../image/logo.png" alt="" width="70" height="70">
                <div class="title">
                    <h1>Akuma Motorcycle Club</h1>
                </div>
            </a>
        </div>
    </nav>

    <!-- Header -->
    <header class="py-3 navigation text-bg-dark">
        <div class="container d-flex flex-wrap justify-content-center">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="../index.php" class="nav-link link-body-emphasis px-2 text-white">Home</a></li>
                <li class="nav-item"><a href="profile.php" class="nav-link link-body-emphasis px-2 active" aria-current="page">Profile</a></li>
                <li class="nav-item"><a href="visimisi.php" class="nav-link link-body-emphasis px-2 text-white">Visi dan Misi</a></li>
                <li class="nav-item"><a href="produk.php" class="nav-link link-body-emphasis px-2 text-white">Produk Kami</a></li>
                <li class="nav-item"><a href="kontak.php" class="nav-link link-body-emphasis px-2 text-white">Kontak Kami</a></li>
                <li class="nav-item"><a href="aboutus.php" class="nav-link link-body-emphasis px-2 text-white">About us</a></li>
            </ul>
        </div>
    </header>

    <!-- header -->

    <div class="content">
        <!-- sidebar -->
        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="artikel.php" class="nav-link text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                            <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z" />
                            <path d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z" />
                        </svg>
                        Artikel
                    </a>
                </li>
                <li><a href="event.php" class="nav-link text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-event" viewBox="0 0 16 16">
                            <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                        </svg>
                        Event
                    </a>
                </li>
                <li><a href="galerifoto.php" class="nav-link text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
                            <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                            <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1z" />
                        </svg>
                        Galery Foto
                    </a>
                </li>
                <li><a href="klien.php" class="nav-link text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                        </svg>
                        Klien Kami
                    </a>
                </li>
                <li><a href="#" class="nav-link text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z" />
                            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                        </svg>
                        Login
                    </a>
                </li>
                <li><a href="#" class="nav-link text-white" style="margin-left: 50px;" data-bs-toggle="modal" data-bs-target="#modalLogin">Sign in</a></li>
                <li><a href="#" class="nav-link text-white" style="margin-left: 50px;" data-bs-toggle="modal" data-bs-target="#modalSingup">Sign up</a></li>
            </ul>
            <hr>
        </div>
        <!-- sidebar -->

        <!-- main-content -->
        <div class="my-5">
            <div class="p-5 text-center bg-body-tertiary">
                <div class="container py-5">
                    <h1 class="text-body-emphasis">Our Profile</h1>
                </div>
                <hr class="featurette-divider">
                <div class="container py-5">
                    <h1 class="text-body-emphasis">Akuma Experience</h1>
                    <p class="col-lg-8 mx-auto lead">
                        Since its inception in 1978, Akuma Motor Club has built a storied legacy in the motorcycle world. Over the decades, our club has grown from a small group of enthusiasts to a prominent and respected organization with a nationwide presence. Our extensive experience includes:
                    </p>
                    <ul class="mx-auto lead">
                        <li>Decades of Touring: Organizing and leading countless touring events across Japan, allowing members to experience the country’s diverse landscapes and cultures.</li>
                        <li>Safety Training: Offering comprehensive riding safety and skill training sessions, contributing to the development of responsible and skilled motorcyclists.</li>
                        <li>Community Engagement: Actively participating in various social and charitable initiatives, including disaster relief efforts, environmental conservation projects, and community outreach programs.</li>
                        <li>Cultural Impact: Playing a significant role in promoting motorcycling as a positive and thrilling activity, influencing both the industry and community.</li>
                    </ul>
                </div>
                <hr class="featurette-divider">
                <div class="container py-5">
                    <h1 class="text-body-emphasis">Akuma Advantages</h1>
                    <ul class="mx-auto lead">
                        <li>Rich Legacy: With over four decades of history, Akuma Motor Club is deeply rooted in the motorcycle culture of Japan. Our long-standing presence and tradition of excellence set us apart in the motorcycling community.</li>
                        <li>Strong Community: Our club is known for its supportive and inclusive environment. Members benefit from a strong sense of brotherhood and a network of like-minded individuals who share a passion for motorcycling.</li>
                        <li>Comprehensive Training: We offer thorough riding training and safety programs, ensuring that our members are well-prepared and confident on the road. Our commitment to safety is a cornerstone of our operations.</li>
                        <li>Diverse Adventures: Our regular touring events allow members to explore Japan’s scenic routes and cultural landmarks, creating memorable experiences and fostering a sense of adventure.</li>
                    </ul>
                </div>
                <hr class="featurette-divider">
                <div class="container py-5">
                    <h1 class="text-body-emphasis">What else we have</h1>
                    <ul class="mx-auto lead">
                    Akuma Motor Club provides a select range of products and services specifically designed to cater to the needs of motorcycle enthusiasts. Our offerings focus on enhancing the riding experience while fostering a strong community spirit among our members.
                    </ul>
                </div>
                <hr class="featurette-divider">
            </div>
        </div>
        <!-- main-content -->
    </div>
    <!-- footer -->

    <!-- footer -->

    <?php
        include '../include/modals.php'
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>