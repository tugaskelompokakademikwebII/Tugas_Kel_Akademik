<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Akademik SMA N 1</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('Awal/assets/img/icon.png') }}" rel="icon">
    <link href="{{ asset('Awal/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('Awal/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Awal/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('Awal/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('Awal/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Awal/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Awal/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('Awal/assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Medilab
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header sticky-top">

        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div><!-- End Top Bar -->

        <div class="branding d-flex align-items-center">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center me-auto">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <!-- <img src="assets/img/logo.png" alt=""> -->
                    <h1 class="sitename">SMAN 1</h1>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" class="active">Home<br></a></li>
                        <li><a href="{{ url('home') }}">Data Akademik</a></li>
                        
                        <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Dropdown 1</a></li>
                                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="#">Deep Dropdown 1</a></li>
                                        <li><a href="#">Deep Dropdown 2</a></li>
                                        <li><a href="#">Deep Dropdown 3</a></li>
                                        <li><a href="#">Deep Dropdown 4</a></li>
                                        <li><a href="#">Deep Dropdown 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Dropdown 2</a></li>
                                <li><a href="#">Dropdown 3</a></li>
                                <li><a href="#">Dropdown 4</a></li>
                            </ul>
                        </li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

                <a class="cta-btn d-none d-sm-block" href="#appointment"> Registrasi</a>

            </div>

        </div>

    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section light-background">

            <img src="{{ asset('Awal/assets/img/hero-bg.jpg') }}" alt="" data-aos="fade-in">

            <div class="container position-relative">

                <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
                    <h2>SELAMAT DATANG DI SITUS AKADEMIK SMAN 1</h2>
                    <p>Belajar Bersama Untuk Memajukan Bangsa</p>
                </div><!-- End Welcome -->

                <div class="content row gy-4">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
                            <h3>Mengapa Memilih SMAN 1?</h3>
                            <p>
                              SMAN 1 adalah pilihan tepat untuk pendidikan berkualitas dengan kurikulum yang dirancang untuk mengembangkan intelektual, kreativitas, dan karakter siswa. Didukung oleh tenaga pengajar profesional dan fasilitas modern seperti laboratorium, perpustakaan, ruang multimedia, dan lapangan olahraga, kami menciptakan lingkungan belajar yang nyaman dan inspiratif.
                            </p>
                            <div class="text-center">
                                <a href="#about" class="more-btn"><span>Learn More</span> <i
                                        class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Why Box -->

                   
                    
                </div><!-- End  Content-->

            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">

                <div class="row gy-4 gx-5">

                    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ asset('Awal/assets/img/academy.jpeg') }}" class="img-fluid" alt="">
                        <a href="https://youtu.be/pv648_qOz94?si=axlX3K-TIaxRUYUI"
                            class="glightbox pulsating-play-btn"></a>
                    </div>

                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <h3>Tentang SMAN 1</h3>
                        <p>
                            Dolor iure expedita id fuga asperiores qui sunt consequatur minima. Quidem voluptas
                            deleniti. Sit quia molestiae quia quas qui magnam itaque veritatis dolores. Corrupti totam
                            ut eius incidunt reiciendis veritatis asperiores placeat.
                        </p>
                        <ul>
                            <li>
                                <i class="fa-solid fa-computer"></i>
                                <div>
                                    <h5>Lab Komputer</h5>
                                    <p>Laboratorium komputer merupakan salah satu fasilitas terbaik di SMA. Di sini, siswa dapat belajar dan mengembangkan keterampilan teknologi informasi.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <i class="fa-solid fa-book"></i>
                                <div>
                                    <h5>Perpustakaan Digital</h5>
                                    <p>Perpustakaan adalah fasilitas yang penting dalam mendukung proses belajar mengajar di SMA. Perpustakaan menyediakan koleksi buku teks, referensi, jurnal ilmiah, dan media belajar lainnya yang berguna bagi siswa dan guru.</p>
                                </div>
                            </li>
                            <li>
                                <i class="fa-solid fa-futbol"></i>
                                <div>
                                    <h5>Ruang Seni & Olahraga</h5>
                                    <p>Ruang seni dan olahraga menjadi sarana penting untuk mengembangkan bakat kreativitas dan kebugaran siswa. Ruang seni dilengkapi dengan peralatan seperti alat musik, studio seni, dan media kreatif yang memungkinkan siswa untuk berlatih seni rupa, musik, teater, atau tari. </p>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section light-background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fa-solid fa-chalkboard-teacher"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Guru</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fa-solid fa-book"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Pelajaran</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fa-solid fa-futbol"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Kegiatan Eskul</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fas fa-award"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end=450" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Penghargaan</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Stats Section -->


        <!-- Appointment Section -->
        <section id="appointment" class="appointment section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Registrasi Siswa</h2>
                <p>Silahkan Isi Data Siswa</p>
            </div><!-- End Section Title -->



            <div class="container" data-aos="fade-up" data-aos-delay="100">

                @if (Session::has('pesan'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ Session::get('pesan') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif

                @yield('content')

        </section><!-- /Appointment Section -->

 
     
        <!-- Doctors Section -->
        <section id="doctors" class="doctors section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Guru</h2>
                <p>Guru terbaik di SMAN 1 peraih penghargaan Internasional</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('Awal/assets/img/profilguru1.jpeg') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Dr.Balqis Nabila S.Kom M.Kom M.SI</h4>
                                <span>Kepala Divisi Pendidikan Komputer</span>
                                <p>Peraih Penghargaan  SIGCSE untuk Kontribusi Luar Biasa pada Pendidikan Ilmu Komputer</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('Awal/assets/img/profilguru2.jpeg') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Aprilia Melani S.Pd M.Kom,,Ph.D</h4>
                                <span>Kepala Staff Pendidikan Matematika</span>
                                <p>Peraih Penghargaan Breakthrough Prize in Mathematics</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('Awal/assets/img/profilguru4.jpeg') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Prof.Harist Al S.Pd,B.P.Ed.</h4>
                                <span>Guru Besar Pendidikan Olahraga</span>
                                <p>Peraih Olympic Gold Medal 2027</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('Awal/assets/img/profilguru3.jpeg') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Dr.Ed.D.Desi Nataliana S.Pd M.Kom</h4>
                                <span>Kepala Kelas Internasional</span>
                                <p>Peraih Penghargaan British Council ELTons Awards for Innovation in English Language Teaching</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>

        </section>

      

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
                        <h3>SISWA BERPRESTASI</h3>
                        <p>
                            SMAN 1 telah melahirkan banyak alumni yang tidak hanya berkontribusi di tingkat nasional, tetapi juga di tingkat internasional. Berkat pendidikan berkualitas dan pembinaan yang intensif, para alumni ini berhasil meraih prestasi yang membanggakan di berbagai bidang, seperti akademik, olahraga, seni, dan sains.
                        </p>
                    </div>

                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">

                        <div class="swiper init-swiper">
                            <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">
                                            <img src="{{ asset('Awal/assets/img/siswa1.jpeg') }}"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>Rehan</h3>
                                                <h4>Atlet profesional di cabang olahraga bulu tangkis.</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Pengalaman di SMA Negeri 1 mengajarkan saya disiplin dan semangat untuk terus berjuang. Prestasi ini adalah hasil dari kerja keras dan dedikasi yang ditanamkan selama sekolah.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">
                                            <img src="{{ asset('Awal/assets/img/siswa2.jpeg') }}"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>Salsa Alya</h3>
                                                <h4>Pengajar dan peneliti di bidang bahasa Inggris.</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Di SMA Negeri 1, saya belajar bagaimana mengeksplorasi passion saya dalam Bahasa Inggris. Berkat bimbingan dan pendidikan berkualitas, saya dapat berdedikasi untuk pengajaran dan penelitian bahasa</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">
                                            <img src="{{ asset('Awal/assets/img/siswa4.jpeg') }}"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>Azil Lenior</h3>
                                                <h4>ilmuwan Data terkemuka di bidang ilmu komputer.</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>SMA Negeri 1 telah menjadi fondasi bagi saya untuk mengeksplorasi minat saya dalam ilmu komputer dan membangun keterampilan yang kini membantu saya dalam dunia teknologi yang terus berkembang.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">
                                            <img src="{{ asset('Awal/assets/img/siswa3.jpeg') }}"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>Nurainah Putri</h3>
                                                <h4>Profesor Matematika di universitas ternama.</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Di SMA Negeri 1, saya menemukan minat dan bakat saya dalam matematika. Dedikasi dan bimbingan guru-guru membuat saya dapat melanjutkan studi dan karir di bidang matematika dengan prestasi yang gemilang.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">
                                            <img src="{{ asset('Awal/assets/img/siswa5.jpeg') }}"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>Vin AlFarez</h3>
                                                <h4>Seniman dan desainer grafis profesional.</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>SMA Negeri 1 adalah tempat di mana saya menemukan bakat seni saya dan memulai perjalanan kreatif. Keterampilan dan kepercayaan diri yang saya peroleh di sini membuka pintu untuk karir di dunia seni dan desain.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>

                </div>

            </div>

        </section><!-- /Testimonials Section -->

        <!-- Gallery Section -->
        <section id="gallery" class="gallery section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Gallery</h2>
                <p>Kegiatan Disekolah</p>
            </div><!-- End Section Title -->

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-0">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('Awal/assets/img/belajar1.jpeg') }}" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="{{ asset('Awal/assets/img/belajar1.jpeg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('Awal/assets/img/belajar2.jpeg') }}" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="{{ asset('Awal/assets/img/belajar2.jpeg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('Awal/assets/img/belajar3.jpeg') }}" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="{{ asset('Awal/assets/img/belajar3.jpeg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('Awal/assets/img/belajar4.jpeg') }}" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="{{ asset('Awal/assets/img/belajar4.jpeg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('Awal/assets/img/belajar6.jpeg') }}" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="{{ asset('Awal/assets/img/belajar6.jpeg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('Awal/assets/img/belajar7.jpeg') }}" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="{{ asset('Awal/assets/img/belajar7.jpeg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('Awal/assets/img/belajar8.jpeg') }}" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="{{ asset('Awal/assets/img/belajar8.jpeg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('Awal/assets/img/belaajr1.jpeg') }}" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="{{ asset('Awal/assets/img/belaajr1.jpeg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                </div>

            </div>

        </section><!-- /Gallery Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Silahkan Hubungi Kami Untuk Informasi Lebih Lanjut</p>
            </div><!-- End Section Title -->

            

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Lokasi</h3>
                                <p>JAKARTA INODNESIA</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>62923711123

                                </p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>sman1@gmail.com</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Your Name" required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Your Email" required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer light-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">SMAN 1</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>JAKARTA INONESIA</p>
                        <p>JAKARTA</p>
                        <p class="mt-3"><strong>Contact:</strong> <span>+62923711123</span></p>
                        <p><strong>Email:</strong> <span>sman1@gmail.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Hic solutasetp</h4>
                    <ul>
                        <li><a href="#">Molestiae accusamus iure</a></li>
                        <li><a href="#">Excepturi dignissimos</a></li>
                        <li><a href="#">Suscipit distinctio</a></li>
                        <li><a href="#">Dilecta</a></li>
                        <li><a href="#">Sit quas consectetur</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Nobis illum</h4>
                    <ul>
                        <li><a href="#">Ipsam</a></li>
                        <li><a href="#">Laudantium dolorum</a></li>
                        <li><a href="#">Dinera</a></li>
                        <li><a href="#">Trodelas</a></li>
                        <li><a href="#">Flexo</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Medilab</strong> <span>All Rights Reserved</span>
            </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('Awal') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('Awal') }}/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('Awal') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('Awal') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('Awal') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('Awal') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="{{ asset('Awal') }}/assets/js/main.js"></script>

</body>

</html>
