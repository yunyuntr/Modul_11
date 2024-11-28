<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Wahyudi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    @vite('resources/sass/app.scss')
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg bg-white">
        <div class="container py-2 px-4">
            <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end bg-white" id="offcanvasNavbar">
                <div class="offcanvas-header pb-0 px-4">
                    <h5 class="offcanvas-title text-black" id="offcanvasNavbarLabel">Bootstrap</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body pt-0 px-4">
                    <ul class="navbar-nav d-flex flex-row justify-content-around w-50">
                        <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="#works" class="nav-link">Works</a></li>
                        <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Profil -->
    <div class="mt-5" id="home">
        <div class="container py-5 px-4">
            <div class="row">
                <div class="col-md-7 order-md-1">
                    <h3 class="mt-4 display-5 profile1">My Profile</h3>
                    <h1 class="mt-4 display-5 profile2">Wahyudi Tri Susanto</h1>
                    <p class="fs-5 mt-3 profile1">Hi!! Im Wahyudi, 3rd Semester Student Of Information Systems Telkom
                        University Surabaya. Have Experience In Ui Design For 1 Year, Participated In Many Competitions
                        Related To Application Design And Infographics.</p>
                </div>
                <div class="col-md-5 order-md-2">
                    <img class="img-fluid half-circle" src="{{ Vite::asset('/resources/Images/profil.jpg') }}"
                        alt="main logo">
                </div>
            </div>
        </div>
    </div>

    <!-- works -->
    <div class="container py-5 px-4 bg-white" id="works">
        <h2 class="display-5 mb-4 profile1">My Works</h2>
        <div class="row">
            <div class="col-lg-6">
                <a href="#" class="work-box">
                    <img class="work-image" src="{{ Vite::asset('/resources/Images/infografis.png') }}"
                        alt="Infografis">
                    <div class="work-description">
                        <h4>Infografis</h4>
                        <p>Binus University Infografic Competition</p>
                    </div>
                </a>
                <a href="#" class="work-box">
                    <img class="work-image" src="{{ Vite::asset('/resources/Images/pim.jpg') }}" alt="PIM">
                    <div class="work-description">
                        <h4>PIM</h4>
                        <p>UI desain SUN (Skill Up Now)</p>
                    </div>
                </a>
                <a href="#" class="work-box">
                    <img class="work-image" src="{{ Vite::asset('/resources/Images/innovillage.png') }}"
                        alt="UI Innovillage">
                    <div class="work-description">
                        <h4>UI Innovillage</h4>
                        <p>UI desain mitra fullobster (sisi mitra)</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <div class="what-can-i-do">
                    <h3>Apa yang Saya Bisa</h3>
                    <p>Saya ahli dalam menggambarkan keinginan Anda mengenai desain UI sebuah aplikasi. Dapat
                        menggambarkan sekaligus mengalurkan semua dari desain UI bergantung pada keinginan Anda.</p>
                    <a href="#" class="btn-works">My Portofolio</a>
                </div>
            </div>
        </div>
    </div>

    <!-- About -->
    <div id="bs-themes">
        <!-- Container -->
        <div class="container py-5 px-4" id="about">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="shall-we d-flex justify-content-center align-items-center">Shall<br>we?</h1><br>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-left flex-column tertarik">
                    <p class="email-me">Saya dapat bekerja dalam bahasa Indonesia dan English.<br> UI desain profesional
                        dengan segudang pengalaman, dan portofolio.<br> Ingin bekerja bersama?</p>
                    <a href="#" class="btn">Email me</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="container py-4 bg-white" id="contact">
        <div class="row text-center">
            <div class="col">
                <a href="#home" class="nav-link-lower">Home</a>
            </div>
            <div class="col">
                <a href="#works" class="nav-link-lower">Works</a>
            </div>
            <div class="col">
                <a href="#about" class="nav-link-lower">About</a>
            </div>
            <div class="col">
                <a href="#contact" class="nav-link-lower">Contact</a>
            </div>
        </div>

        <div class="row text-center mt-4">
            <div class="col">
                <a href="https://www.facebook.com" target="_blank" class="nav-link-lower">Facebook</a>
            </div>
            <div class="col">
                <a href="https://www.twitter.com" target="_blank" class="nav-link-lower">Twitter</a>
            </div>
            <div class="col">
                <a href="https://www.instagram.com" target="_blank" class="nav-link-lower">Instagram</a>
            </div>
            <div class="col">
                <a href="https://www.linkedin.com" target="_blank" class="nav-link-lower">LinkedIn</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
