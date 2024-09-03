<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>AyoMuncak</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="{{ asset('assets/img/logo.png" alt')}}=""> -->
                <h1 class="sitename">AyoMuncak</h1><span>.</span>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Beranda</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#assistance">Pelayanan</a></li>
                    <li><a href="#favorite">Favorit</a></li>
                    <li><a href="#faq">Tips</a></li>
                    <li><a href="{{ route('jelajah') }}">Jelajah</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a href="index.html#about"></a>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <img src="{{ asset('assets/img/hero-bg.jpg')}}" alt="" data-aos=" fade-in">

            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 data-aos="fade-up" data-aos-delay="100">Selamat datang di AyoMuncak</h2>
                        <p data-aos="fade-up" data-aos-delay="200">Jelajahi Gunung dan Pendakian di Jawa Timur</p>
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4 justify-content-center"> <!-- Menggunakan justify-content-center untuk centering -->
                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <a href="https://kemenparekraf.go.id/profil/profil-lembaga" target="_blank">
                            <img src="{{ asset('assets/img/clients/baparekraf.png')}}" class="img-fluid" alt="">
                        </a>
                    </div><!-- End Client Item -->


                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <a href="https://bdd.kemenparekraf.go.id/" target="_blank">
                            <img src="{{ asset('assets/img/clients/bdd.png')}}" class="img-fluid" alt="" href="https://kemenparekraf.go.id/profil/profil-lembaga">
                        </a>
                    </div><!-- End Client Item -->

                    <div class="col-xl-3 col-md-3 col-6 client-logo">
                        <a href="https://www.dicoding.com/" target="_blank">
                            <img src="{{ asset('assets/img/clients/dicoding.png')}}" class="img-fluid" alt="">
                        </a>
                    </div><!-- End Client Item -->
                </div>
            </div>
        </section><!-- /Clients Section -->


        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-xl-center gy-5">

                    <div class="col-xl-5 content">
                        <h3>Tentang AyoMuncak</h3>
                        <h2>Jelajahi Pegunungan Megah di Jawa Timur bersama AyoMuncak</h2>
                        <p>Selamat datang di AyoMuncak, sumber informasi utama Kamu tentang pegunungan dan jalur pendakian di Jawa Timur. Misi kami adalah memberikan informasi yang terperinci, akurat, dan inspiratif untuk membantu para petualang dan pecinta alam menjelajahi lanskap menakjubkan di wilayah ini.</i>
                    </div>

                    <div class="col-xl-7">
                        <div class="row gy-4 icon-boxes">

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box">
                                    <i class="bi bi-person-walking"></i>
                                    <h3>Petualangan yang Menginspirasi</h3>
                                    <p>Di AyoMuncak, kami percaya bahwa setiap orang harus merasakan keindahan dan sensasi mendaki gunung. Platform kami dirancang untuk memandu Kamu melewati puncak dan jalur menakjubkan di Jawa Timur, menawarkan tip, rute, dan informasi penting untuk membuat perjalanan Kamu aman dan berkesan.</p>
                                </div>
                            </div> <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box">
                                    <i class="bi bi-people-fill"></i>
                                    <h3>Menghubungkan Komunitas</h3>
                                    <p>AyoMuncak bertujuan untuk membangun komunitas pendaki dan pecinta alam yang dapat berbagi pengalaman, tips, dan cerita. Baik Kamu seorang pendaki gunung berpengalaman atau pemula, AyoMuncak adalah tempat untuk terhubung, belajar, dan tumbuh bersama.</p>
                                </div>
                            </div> <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box">
                                    <i class="bi bi-asterisk"></i>
                                    <h3>Mempromosikan Konservasi</h3>
                                    <p>Komitmen kami lebih dari sekedar memberikan informasi. Kami menganjurkan pelestarian keindahan alam Jawa Timur. Dengan mempromosikan praktik pendakian yang bertanggung jawab dan kesadaran lingkungan, kami berupaya melestarikan lanskap megah ini untuk generasi mendatang.</p>
                                </div>
                            </div> <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                                <div class="icon-box">
                                    <i class="bi bi-balloon-heart-fill"></i>
                                    <h3>Semangat untuk Puncak</h3>
                                    <p>AyoMuncak didirikan oleh sekelompok pendaki yang sangat mencintai pegunungan di Jawa Timur. Frustrasi dengan kurangnya sumber daya yang komprehensif, kami memutuskan untuk membuat platform yang menggabungkan pengetahuan kolektif dan semangat kami untuk memberi manfaat bagi sesama petualang..</p>
                                </div>
                            </div> <!-- End Icon Box -->

                        </div>
                    </div>

                </div>
            </div>

        </section><!-- /About Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section">
            <img src="{{ asset('assets/img/stats-bg.jpg')}}" alt="" data-aos=" fade-in">
            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span>{{ $jumlahGunung }}</span>
                            <p>Gunung</p>
                        </div>
                    </div><!-- End Stats Item -->
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span>{{ $gunungTertinggi->ketinggian }} Mdpl</span>
                            <p>Tertinggi</p>
                        </div>
                    </div><!-- End Stats Item -->
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span>{{ $gunungTerendah->ketinggian }} Mdpl</span>
                            <p>Terendah</p>
                        </div>
                    </div><!-- End Stats Item -->
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span>Bromo</span>
                            <p>Favorit</p>
                        </div>
                    </div><!-- End Stats Item -->
                </div>
            </div>
        </section><!-- /Stats Section -->


        <!-- Assistance Section -->
        <section id="assistance" class="assistance section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Pelayanan</h2>
                <p>Bantuan informasi yang bisa Kamu dapatkan dari AyoMuncak</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                            <div>
                                <h4 class="title">Informasi Area</a></h4>
                                <p class="description">Jelajahi detail lengkap tentang berbagai daerah dan jalan setapak di Jawa Timur. Dari gunung populer hingga permata tersembunyi, temukan semua yang perlu Anda ketahui sebelum bertualang.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-geo-alt"></i></div>
                            <div>
                                <h4 class="title">Peta Interaktif</></h4>
                                <p class="description">Bernavigasi dengan mudah menggunakan peta interaktif kami yang menyoroti jalur, landmark, dan tempat menarik. Rencanakan rute Anda dan jelajahi keindahan Jawa Timur dengan percaya diri.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
                            <div>
                                <h4 class="title">Pembaruan Cuaca</a></h4>
                                <p class="description">Tetap terinformasi dengan ramalan cuaca real-time untuk daerah pegunungan di Jawa Timur. Bersiaplah untuk pendakian Anda dengan informasi akurat tentang suhu, curah hujan, dan kondisi cuaca.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-telephone-plus"></i></div>
                            <div>
                                <h4 class="title">Kontak dan Paket Pendakian</a></h4>
                                <p class="description">Temukan dengan mudah informasi kontak pemandu wisata lokal dan agen yang menawarkan paket hiking. Pilih dari beragam paket untuk disesuaikan dengan tingkat pengalaman dan preferensi yang berbeda.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-card-text"></i></div>
                            <div>
                                <h4 class="title">Deskripsi Gunung</a></h4>
                                <p class="description">Dapatkan penjelasan rinci tentang karakteristik masing-masing gunung, termasuk ketinggian, medan, flora, dan fauna. Pahami keunikan puncak Jawa Timur sebelum memulai perjalanan Anda.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-hand-thumbs-up"></i></div>
                            <div>
                                <h4 class="title">Highlight</a></h4>
                                <p class="description">Akses informasi dan sumber daya terperinci untuk merencanakan petualangan hiking Anda secara efektif. Buat keputusan yang tepat dengan bimbingan dan bantuan komprehensif kami.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /assistance Section -->

        <!-- favorite Section -->
        <section id="favorite" class="favorite section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Favorit</h2>
                <p>Di Jawa Timur ada beberapa gunung yang menjadi favorit para pendaki dan wisatawan</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4 align-items-center favorite-item">
                    <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                        <h3>Gunung Semeru</h3>
                        <p>Gunung Semeru merupakan gunung tertinggi di Pulau Jawa dengan ketinggian puncak 3.676 meter di atas permukaan laut. Terletak di Taman Nasional Bromo Tengger Semeru, Semeru terkenal dengan keindahan alamnya yang mempesona dan keberadaan Kawah Jonggring Saloko yang masih aktif. Pendakian ke Semeru menawarkan pengalaman yang menantang bagi para pendaki, dengan pemandangan alam yang spektakuler di sepanjang perjalanan.
                        </p>
                    </div>
                    <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                        <div class="image-stack">
                            <img src="{{ asset('assets/img/favorite-light-1.jpg')}}" alt="" class="stack-front">
                            <img src="{{ asset('assets/img/favorite-light-2.jpg')}}" alt="" class="stack-back">
                        </div>
                    </div>
                </div><!-- favorite Item -->

                <div class="row gy-4 align-items-stretch justify-content-between favorite-item ">
                    <div class="col-lg-6 d-flex align-items-center favorite-img-bg" data-aos="zoom-out">
                        <img src="{{ asset('assets/img/favorite-light-3.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h3>Gunung Bromo</h3>
                        <p>Gunung Bromo merupakan salah satu gunung berapi paling terkenal di Indonesia dan merupakan bagian dari Taman Nasional Bromo Tengger Semeru. Dikenal dengan kawah aktif dan lanskapnya yang ikonik, Bromo menawarkan pemandangan matahari terbit yang sangat populer di kalangan wisatawan. Di sekelilingnya terdapat lautan pasir luas yang memperkuat daya tarik alamnya. Bromo juga menjadi destinasi favorit untuk menikmati keindahan alam dan melihat prosesi budaya khas masyarakat Tengger.</p>
                        <ul>
                            <li><i class="bi bi-check"></i> <span>Kawah Bromo: Kawah dengan aktivitas fumarol yang terkenal dan dapat diakses melalui pendakian yang mudah.</span></li>
                            <li><i class="bi bi-check"></i><span> Lautan Pasir: Area berpasir yang luas di sekitar gunung memberikan pemandangan yang menakjubkan.</span></li>
                            <li><i class="bi bi-check"></i> <span>Bukit Penanjakan : Spot terbaik untuk menyaksikan matahari terbit dengan latar belakang Gunung Bromo dan Semeru.</span></li>
                        </ul>
                    </div>
                </div><!-- favorite Item -->

            </div>
        </section><!-- /favorite Section -->

        <!-- Faq Section -->
        <section id="faq" class="faq section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="content px-xl-5">
                            <h3><strong>Tips</strong></h3>
                            <h3><span>Pendaki </span></h3>
                            <p>
                                Berikut adalah beberapa pertanyaan yang sering diajukan tentang pendakian gunung-gunung di Jawa Timur. Temukan tips dan saran untuk pengalaman pendakian yang aman dan menyenangkan.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                        <div class="faq-container">
                            <div class="faq-item faq-active">
                                <h3><span class="num">1.</span> <span>Bagaimana cara mempersiapkan fisik untuk pendakian?</span></h3>
                                <div class="faq-content">
                                    <p>Latihan fisik secara teratur sebelum mendaki sangat penting. Fokus pada latihan kardio seperti jogging, bersepeda, atau berenang untuk meningkatkan daya tahan tubuh. Latihan kekuatan seperti squats dan lunges juga membantu mempersiapkan otot kaki untuk medan pendakian yang menantang.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3><span class="num">2.</span> <span>Peralatan apa saja yang harus dibawa saat mendaki?</span></h3>
                                <div class="faq-content">
                                    <p>Beberapa peralatan penting yang harus dibawa termasuk sepatu pendakian yang nyaman, pakaian yang sesuai cuaca, jaket tahan angin dan air, tenda, sleeping bag, matras, makanan dan minuman yang cukup, peta atau GPS, senter atau headlamp, dan kotak P3K.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3><span class="num">3.</span> <span>Bagaimana cara menjaga kelestarian alam selama pendakian?</span></h3>
                                <div class="faq-content">
                                    <p>Selalu bawa pulang sampah Anda, hindari mengambil atau merusak flora dan fauna, patuhi jalur pendakian yang telah ditentukan, dan hindari membuat api unggun di area yang tidak diizinkan. Dengan menjaga alam, kita turut serta dalam melestarikan keindahan gunung untuk generasi mendatang.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3><span class="num">4.</span> <span>Apa yang harus dilakukan jika cuaca buruk saat pendakian?</span></h3>
                                <div class="faq-content">
                                    <p>Jika cuaca buruk, seperti hujan lebat atau badai, segera mencari tempat berteduh yang aman. Hindari daerah yang rawan longsor atau banjir. Gunakan pakaian anti air dan tetap tenang. Jika cuaca tidak membaik, pertimbangkan untuk turun gunung demi keselamatan.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>

                    </div>
                </div>

            </div>

        </section><!-- /Faq Section -->


        <!-- Team Section -->
        <section id="team" class="team section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Team</h2>
                <p>Tim Pengembangan Website AyoMuncak</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-5">

                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/team/Yunus.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href="https://www.instagram.com/yunusdwib_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="bi bi-instagram"></i></a>
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=yunusdwibachtiar01@gmail.com" target="_blank"><i class=" bi bi-envelope"></i></a>
                                <a href="http://www.linkedin.com/in/yunus-dwi-bachtiar-1b1a502a2"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Yunus Dwi Bachtiar</h4>
                            <span>Front-End & Back-End</span>
                            <span>Universitas 17 Agustus 1945 Surabaya</span>
                            <p>Santai Tapi Tidak Lalali</p>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/team/zahra.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href="https://www.instagram.com/azzahrahijriah?igsh=MTEwemllb2d4YzUwNw=="><i class="bi bi-instagram"></i></a>
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=azzahrahijriah1@gmail.com" target="_blank"><i class=" bi bi-envelope"></i></a>
                                <a href="https://www.linkedin.com/in/az-zahra-hijriah-7985a6237?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Az Zahra Hijriah</h4>
                            <span>Project Manager & FE-BE</span>
                            <span>Universitas Amikom Yogyakarta</span>
                            <p>"Sometimes It's Okay To Be Sad After We Make Right Decisions"</p>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/team/Adam.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter-x"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Adam Sultonunmubin</h4>
                            <span>UI/UX Designer</span>
                            <span>Universitas 17 Agustus 1945 Surabaya</span>
                            <p>Illum minima ea autem doloremque ipsum quidem quas aspernatur modi ut praesentium vel tque sed facilis at qui</p>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>

        </section><!-- /Team Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
                        <h3>Pengalaman</h3>
                        <p>
                            Ini adalah testimoni pengalaman pendaki di gunung-gunung Jawa Timur.
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
                                @foreach($pengalamans as $item) <!-- Gunakan $pengalamans -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">
                                            <div>
                                                <h3>{{ $item->nama }}</h3>
                                                <h4>{{ $item->gunung->nama }}</h4> <!-- Mengambil nama gunung terkait -->
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>{{ $item->deskripsi }}</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Testimonials Section -->
        </div>
        <div class="swiper-pagination"></div>
        </div>

        </div>

        </div>

        </div>

        </section><!-- /Testimonials Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kontak</h2>
                <p>Kontak Yang Ddapat Dihubungi</p>
            </div><!-- End Section Title -->

            <div class="container d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 w-100 justify-content-center">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="200">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Alamat</h3>
                                    <h9>Universitas Amikom Yogyakarta</h9>
                                    <p>Jl. Ring Road Utara, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>
                                    <h9>Universitas 17 Agustus 1945 Surabaya</h9>
                                    <p>Jl. Semolowaru No.45, Menur Pumpungan, Kec. Sukolilo, Surabaya, Jawa Timur 60118</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="300">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Telepon</h3>
                                    <h9>Az Zahra Hijriah</h9>
                                    <p>+62 851-528-2247</p>
                                    <h9>Yunus Dwi Bachtiar</h9>
                                    <p>+62 856-0822-9550</p>
                                    <h9>Adam Sultonunmubin</h9>
                                    <p>+62 878-6441-1265</p>
                                </div>
                            </div><!-- End Info Item -->
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Contact Section -->


    </main>

    <footer id="footer" class="footer position-relative">

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="sitename">AyoMuncak</strong> <span>All Rights Reserved</span></p>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>