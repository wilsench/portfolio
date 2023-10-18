<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    {{-- MDB Bootstrap --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />
    {{-- Animate CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ URL::asset('css/stylesheet.css') }}">
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- Poppins --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <title>{{ $title }}</title>
</head>

<body>
    <div class="portfolio">
        <div class="navbar shadow-0 d-flex justify-content-between">
            <div class="start">
                <p class="fs-5 mb-0">CHIA WILSEN</p>
            </div>
            <div class="end">
                <div class="nav-menu">
                    <a href="#hero">Home</a>
                    <a href="#about">About</a>
                    <a href="#projects">Projects</a>
                    <a href="#contact" class="contact">Contact</a>
                </div>
            </div>
        </div>
        <section id="hero">
            <div class="start">
                <div class="text-hero">
                    <h1 style="font-weight: 600">Halo! Saya</h1>
                    <h1 class="text-orange">Chia Wilsen</h1>
                    <h4 class="mb-4">Selamat datang di Website Portfolio saya, disinilah semuanya dimulai...</h4>
                    <a href="#about" class="button-orange">Mulai Sekarang <i class="fas fa-arrow-right pt-2"></i></a>
                </div>
                <div class="sosmed">
                    <p class="fs-5">My Social Media :</p>
                    <div class="link d-flex gap-3">
                        <a href="https://instagram.com/chwlsn_" target="_blank"><i
                                class="fab fa-instagram fs-2"></i></a>
                        <a href="#"><i class="fab fa-twitter fs-2"></i></a>
                        <a href="https://instagram.com/chwlsn_" target="_blank"><i class="fab fa-linkedin fs-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="end">
                <img class="animate__animated animate__slideInRight" src="{{ URL::asset('images/assets/hero.svg') }}"
                    height="100%" alt="">
            </div>
        </section>
        <section id="about">
            <div class="start">
                <img src="{{ URL::asset('images/assets/about.svg') }}" alt="">
            </div>
            <div class="end">
                <div class="title">
                    <h1 class="text-white">About <span>Me</span></h1>
                </div>
                <div class="desc text-white">
                    <p>Saat ini saya sedang menempuh perkuliahan di Politeknik Negeri Jakarta jurusan Teknik Informatika
                        & Komputer. dan saya pernah atau memiliki pengalaman bekerja sebagai IT Teams (UI UX Designer,
                        Junior FullStack PHP Web Developer, IT Supports) disebuah perusahaan yang bergerak dibidang
                        kesehatan.
                    </p>
                </div>
            </div>
        </section>
        <section id="projects">
            <div class="title">
                <h1>PROJECTS</h1>
            </div>
            <div class="content">
                <div class="content-start">
                    <div class="start">
                        <h1>UI/<span class="text-orange">UX</span></h1>
                        <p>Beberapa UI/UX Design saya membuat Aplikasi di Perusahaan tempat saya bekerja</p>
                    </div>
                    <div class="end">
                        <div id="carouselUI" class="carousel slide shadow" data-mdb-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-mdb-interval="3000">
                                    <img src="{{ URL::asset('images/UI/ui_1.png') }}" height="550px"
                                        class="d-block w-100" style="object-fit: cover; object-position: 0% 0%" />
                                </div>
                                @for ($i = 2; $i <= 8; $i++)
                                    <div class="carousel-item" data-mdb-interval="2000">
                                        <img src="{{ URL::asset('images/UI/ui_') . $i . '.png' }}" height="550px"
                                            class="d-block w-100" style="object-fit: cover; object-position: 0% 0%" />
                                    </div>
                                @endfor
                            </div>
                            <button class="carousel-control-prev" data-mdb-target="#carouselUI" type="button"
                                data-mdb-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" data-mdb-target="#carouselUI" type="button"
                                data-mdb-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="content-end">
                    <div class="start">
                        <div id="carouselWeb" class="carousel slide shadow" data-mdb-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-mdb-interval="3000">
                                    <img src="{{ URL::asset('images/UI/ui_1.png') }}" height="550px"
                                        class="d-block w-100" style="object-fit: cover; object-position: 0% 0%" />
                                </div>
                                @for ($i = 2; $i <= 8; $i++)
                                    <div class="carousel-item" data-mdb-interval="2000">
                                        <img src="{{ URL::asset('images/UI/ui_') . $i . '.png' }}" height="550px"
                                            class="d-block w-100" style="object-fit: cover; object-position: 0% 0%" />
                                    </div>
                                @endfor
                            </div>
                            <button class="carousel-control-prev" data-mdb-target="#carouselWeb" type="button"
                                data-mdb-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" data-mdb-target="#carouselWeb" type="button"
                                data-mdb-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="end">
                        <h1>Web <span class="text-orange">Development</span></h1>
                        <p>Mendevelop Website/aplikasi berbasis website yang dibutuhkan Perusahaan. Sebagai contoh
                            adalah website disamping yang merupakan website pembuatan formulir sesuai keinginan seperti
                            Google Forms</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
            <div class="start">
                <div class="title">
                    <h1>CONTACTS</h1>
                </div>
                <div class="desc">
                    <p>You can contact me by :</p>
                </div>
            </div>
            <div class="end">
                <a target="_blank" href="https://instagram.com/chwlsn_" class="instagram_button shadow">
                    <img src="{{ URL::asset('images/logos/instagram.png') }}" alt="">
                    <span style="color: #C5296F" class="ms-2">DM me on Instagram</span>
                </a>
                <a target="_blank" href="https://wa.me/62881024922527" class="whatsapp_button">
                    <img src="{{ URL::asset('images/logos/whatsapp.png') }}" alt="">
                    <span class="text-white ms-2">Text me on WhatsApp</span>
                </a>
                <a target="_blank" href="https://instagram.com/chwlsn_" class="linkedin_button">
                    <img src="{{ URL::asset('images/logos/linkedin.png') }}" alt="">
                    <span class="text-white ms-2">Connect with me with LinkedIn</span>
                </a>
            </div>
        </section>
        <section id="footer"></section>
    </div>
    {{-- MDB --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
</body>

</html>
