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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">

    <!-- Leafletjs -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>

<body class="blog-details-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <h1 class="sitename">AyoMuncak</h1><span>.</span>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('beranda') }}">Beranda</a></li>
                    <li><a href="{{ route('jelajah') }}">Jelajah</a></li>
                    <li><a href="#content">Deskripsi</a></li>
                    <li><a href="#blog-comments">Pengalaman</a></li>
                    <li><a href="#tour-information">Informasi</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>


            <a href="index.html#about"></a>

        </div>
    </header>

    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1><a href="{{ route('gunung.show', $gunung->id) }}">{{ $gunung->nama }}</a></h1>
                            <p class="mb-0">Detail Gunung {{ $gunung->nama }} dirancang untuk memberikan informasi yang lebih mendetail mengenai gunung {{ $gunung->nama }}, seperti tinggi, lokasi geografis, deskripsi, dan informasi terkait lainnya. .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Page Title -->

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 mx-auto"> <!-- Tambahkan kelas mx-auto di sini -->

                    <!-- Blog Details Section -->
                    <div id="blog-details" class="blog-details section">
                        <div class="container">

                            <article class="article">

                                <div class="post-img text-center">
                                    <a href="{{ route('gunung.show', $gunung->id) }}">
                                        <img src="{{ asset('storage/' . $gunung->gambar) }}" alt="{{ $gunung->nama }}" class="img-fluid">
                                    </a>
                                </div>

                                <h2 class="title text-left" id="content">Deskripsi</h2>
                                <p class="post-category">{{ $gunung->ketinggian }} Mdpl</p>
                                <div class="post-meta">
                                    <p class="post"> {{ $gunung->rating}}
                                        @for ($i = 1; $i <= 5; $i++) @if ($gunung->rating >= $i)
                                            <i class="fas fa-star"></i>
                                            @elseif ($gunung->rating >= $i - 0.5)
                                            <i class="fas fa-star-half-alt"></i>
                                            @else
                                            <i class="far fa-star"></i>
                                            @endif
                                            @endfor
                                    </p>
                                </div>

                                <div class="meta-top text-center">
                                    <ul>
                                        <li class="d-flex align-items-center justify-content-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2024-06-06">6 Juni, 2022</time></a></li>
                                        <li class="d-flex align-items-center justify-content-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li>
                                    </ul>
                                </div><!-- End meta top -->

                                <div class="content text-left">
                                    <p>{{ $gunung->deskripsi }}</p>
                                </div>

                                <h2 class="title text-left">Lokasi</h2>
                                <div id="map" style="height:400px;"></div>

                                <h2 class="title text-left">Jalur Pendakian</h2>
                                <ul class="custom-list">
                                    @php
                                    $jalurArray = explode(',', $gunung->jalur);
                                    @endphp
                                    @foreach($jalurArray as $jalur)
                                    <li><i class="bi bi-check-circle custom-icon"></i> <span>{{ trim($jalur) }}</span></li>
                                    @endforeach
                                </ul>
                            </article>

                        </div>
                    </div><!-- /Blog Details Section -->

                </div>
            </div>
        </div>

        </div><!-- End post content -->
        </article>
        </div>
        </div><!-- /Blog Details Section -->


        <!-- Blog Comments Section -->
        <section id="blog-comments" class="blog-comments section">
            <div class="container">
                <h4 class="comments-count">{{ count($pengalaman) }} Pengalaman</h4>

                @foreach($pengalaman as $exp)
                <div id="comment-{{ $exp->id_pengalaman }}" class="comment">
                    <div class="d-flex">
                        <div class="comment-img"><i class="bi bi-person-check" style="font-size: 2rem;"></i></div>
                        <div>
                            <h5><a href="">{{ $exp->nama }}</a></h5>
                            <time datetime="{{ $exp->tanggal }}">{{ $exp->tanggal }}</time>
                            <p>{{ $exp->deskripsi }}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </section>


        <!-- Comment Form Section -->
        <section id="comment-form" class="comment-form section">
            <div class="container">
                <form action="{{ route('pengalaman.store', $gunung->id) }}" method="POST">
                    @csrf
                    <h4>Isi Pengalaman</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input name="nama" type="text" class="form-control" placeholder="Nama Kamu*">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-group">
                            <textarea name="deskripsi" class="form-control" placeholder="Deskripsikan Pengalaman Kamu*"></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </section><!-- /Comment Form Section -->

        <!-- Tour Information Section -->
        <section id="tour-information" class="blog-comments section">
            <div class="container">
                <h4 class="comments-count">{{ count($tour) }} Informasi Tour</h4>

                @foreach($tour as $t)
                <div id="comment-{{ $t->id_tour }}" class="comment">
                    <div class="d-flex">
                        <div class="comment-img"><i class="bi bi-person-walking" style="font-size: 2rem;"></i></div>
                        <div>
                            <h5>{{ $t->nama }}</h5>
                            <p>Nomor HP: {{ $t->nohp }}</p>
                            <p>Email: {{ $t->email }}</p>
                            <p>Instagram: {{ $t->instagram }}</p>
                            <p>Facebook: {{ $t->facebook }}</p>
                            <p>TikTok: {{ $t->tiktok }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <!-- Form untuk Menambahkan Informasi Tour -->
        <section id="comment-form" class="comment-form section">
            <div class="container">
                <form action="{{ route('tour.store', $gunung->id) }}" method="POST">
                    @csrf
                    <h4>Tambahkan Informasi Tour</h4>
                    <p>Jika tidak ada cukup diisi (-)</p>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input name="nama" type="text" class="form-control" placeholder="Nama*" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="nohp" type="text" class="form-control" placeholder="Nomor HP*" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input name="email" type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="instagram" type="text" class="form-control" placeholder="Instagram">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input name="facebook" type="text" class="form-control" placeholder="Facebook">
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="tiktok" type="text" class="form-control" placeholder="Tiktok">
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                </form>
            </div>
        </section><!-- /Form untuk Menambahkan Informasi Tour -->
        </div>

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
    <script src="{{ asset('assets/js/main.js')}}"></script>

    <!-- Leafletjs -->
    <script>
        var map;
        var latitude = <?php echo json_encode($gunung->latitude); ?>;
        var longitude = <?php echo json_encode($gunung->longitude); ?>;

        map = L.map('map').setView([latitude, longitude], 13);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([latitude, longitude]).addTo(map)
            .bindPopup('{{ $gunung->nama }}<br>{{ $gunung->ketinggian }} mdpl') // Menampilkan nama dan ketinggian gunung dari model Gunung
            .openPopup();
    </script>



</body>

</html>