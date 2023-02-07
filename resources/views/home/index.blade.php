<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Kampoeng Harapan</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/magnific-popup.css">

        <link href="css/aos.css" rel="stylesheet">
        <link href="css/galery.css" rel="stylesheet">

        <link href="css/templatemo-nomad-force.css" rel="stylesheet">
        

    </head>
    
    <body>
        
        <main>

            <section class="hero" id="hero">
<!--                <div class="heroText">
                    <h1 class="text-white mt-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="800">
                        Kampoeng Harapan
                    </h1>

                    <p class="text-secondary-white-color" data-aos="fade-up" data-aos-delay="1000">
                        rasakan keindahan, keunikan dan cita rasa khas <strong class="custom-underline">BEGAGANLIMO</strong>
                    </p>
                </div>
-->
                <div class="videoWrapper">
                    <video autoplay="" loop="" muted="" class="custom-video" volume =20 poster="videos/3.jpg">
                        <source src="videos/3.mp4" type="video/mp4">

                        Your browser does not support the video tag.
                    </video>
                </div>

                <div class="overlay"></div>
            </section>

            <nav class="navbar navbar-expand-lg bg-light shadow-lg">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <strong>Kampoeng Harapan</strong>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#hero">Beranda</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#about">Tentang Kami</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#portfolio">Potensi Desa</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#news">Berita & Acara</a>
                            </li>


                        </ul>
                    </div>
                </div>
            </nav>

            <section class="section-padding pb-0" id="about">
                <div class="container mb-5 pb-lg-5">
                    <div class="row">
                        <div class="col-12 "align="center">
                            <h2 class="mb-3" data-aos="fade-up">Tentang Kami</h2>
                        </div>

                        <div class="col-lg-6 col-12 mt-3 mb-lg-5">
                        @foreach ($tentang as $item)
                        <p class= align="justify" class="me-4" data-aos="fade-up">{{$item->deskripsi}}</p>
                        @endforeach
                            {{-- <p align="justify" class="me-4" data-aos="fade-up" data-aos-delay="300">Kami adalah sekelompok mahasiswa yang tergabung dalam <a rel="nofollow" href="https://www.instagram.com/gerdusosialundika/" target="_blank">Gerakan Peduli Sosial</a> yang saat ini sedang melaksanakan Program Penguatan Kapasitas Organisasi Kemahasiswaan di Begaganlimo. <br><br>Kami berkolaborasi dengan maysarakat dan perangkat desa Begaganlimo dalam memanfaatkan dan mengembangkan potensi desa guna meningkatkan kesejahteraan desa Begaganlimo.</p> --}}
                        </div>
                        <div class="col-lg-6 col-12 mt-lg-3 mb-lg-5">                            
                            <img src="images/news/Pembentukan-Unit.jpg" alt=""align="right">
                            {{-- <p align="justify" data-aos="fade-up" data-aos-delay="500">Kami berfokus pada industri rumahan, budaya, dan edukasi. kegiatan kami diantaranya adalah pembentukan sebuah unit yang nantinya bertugas untuk memasarkan produk khas begaganlimo, penanaman 100 pohon dan edukasi pada anak-anak.</p> --}}
                        </div>

                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-12 p-0">      
                            <img src="images/portfolio/wisata1.jpg" class="img-fluid about-image" alt="">
                        </div>

                        <div class="col-lg-3 col-12 bg-dark">  
                            <div class="d-flex flex-column flex-wrap justify-content-center h-100 py-5 px-4 pt-lg-4 pb-lg-0">
                                <h3 class="text-white mb-3" data-aos="fade-up">Pencapaian.</h3>

                                <p class="text-secondary-white-color" data-aos="fade-up">Selama beberapa bulan yang telah kami jalankan, kami mendapatkan begitu banyak hasil diantaranya.</p>

                                <div class="mt-3 custom-links">
                                    
                                    <a href="#news" class="text-white custom-link" data-aos="zoom-in" data-aos-delay="100">Lebih lanjut</a>


                                </div>

                            </div>
                        </div>

                        <div class="col-lg-6 col-12 p-0">  
                            <section id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/people/Penyerahan-TIM-PPK-2.jpg" class="img-fluid team-image" alt="">

                                        <div class="team-thumb bg-warning">
                                            <h3 class="text-white mb-0">Krisna Gardiawan.</h3>

                                            <p class="text-secondary-white-color mb-0">Ketua Tim</p>
                                        </div>
                                    </div>
                                    
                                    
<!--
                                    <div class="carousel-item">
                                        <img src="images/people/project-leder-with-disabilities-looking-front-sitting-immobilized-wheelchair-business-office-room.jpg" class="img-fluid team-image" alt="">

                                        <div class="team-thumb bg-primary">
                                            <h3 class="text-white mb-0">Morgan S.</h3>

                                            <p class="text-secondary-white-color mb-0">CEO & Investor</p>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="images/people/asia-business-woman-feeling-happy-smiling-looking-camera-while-relax-home-office.jpg" class="img-fluid team-image" alt="">

                                        <div class="team-thumb bg-success">
                                            <h3 class="text-white mb-0">Naomi W.</h3>

                                            <p class="text-secondary-white-color mb-0">Art Director</p>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="images/people/happy-african-american-professional-manager-smiling-looking-camera-headshot-portrait.jpg" class="img-fluid team-image" alt="">

                                        <div class="team-thumb bg-info">
                                            <h3 class="text-white mb-0">Robinson H.</h3>

                                            <p class="text-secondary-white-color mb-0">Sales & Marketing</p>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="images/people/working-business-lady.jpg" class="img-fluid team-image" alt="">

                                        <div class="team-thumb bg-danger">
                                            <h3 class="text-white mb-0">Jane M.</h3>

                                            <p class="text-secondary-white-color mb-0">Project Management</p>

                                        </div>
                                    </div>
-->
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                                      <span class="visually-hidden">Previous</span>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>

                                      <span class="visually-hidden">Next</span>
                                </button>

                            </section>

                        </div>
                    </div>
                </div>
            </section>
            
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-5 text-center" data-aos="fade-up">Potensi Desa</h2>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="portfolio-thumb mb-5" data-aos="fade-up">
                                <a href="images/portfolio/kemasan.jpg" class="image-popup">
                                    <img src="images/portfolio/kemasan.jpg" class="img-fluid portfolio-image" alt="">
                                </a>

                                <div class="portfolio-info">                     
                                    <h4 class="portfolio-title mb-0">Produk</h4>

                                    <p class="text-danger">Keripik</p>
                                </div>
                            </div> 

                            <div class="portfolio-thumb" data-aos="fade-up">
                                <a href="images/portfolio/Semarak-dirgahayu-2.4.jpg" class="image-popup">
                                    <img src="images/portfolio/Semarak-dirgahayu-2.4.jpg" class="img-fluid portfolio-image" alt="">
                                </a>

                                <div class="portfolio-info">                     
                                    <h4 class="portfolio-title mb-0">Budaya</h4>

                                    <p class="text-success">Ujung</p>
                                </div>
                            </div> 
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="portfolio-thumb mt-5 mt-lg-0 mb-5" data-aos="fade-up">
                                <a href="images/portfolio/corp2.jpg" class="image-popup">
                                    <img src="images/portfolio/corp2.jpg" class="img-fluid portfolio-image" alt="">
                                </a>

                                <div class="portfolio-info">                     
                                    <h4 class="portfolio-title mb-0">Wisata</h4>

                                    <p class="text-warning">Begagan</p>
                                </div>
                            </div> 

                            <div class="portfolio-thumb" data-aos="fade-up">
                                <a href="images/portfolio/durien.jpg" class="image-popup">
                                    <img src="images/portfolio/durien.jpg" class="img-fluid portfolio-image" alt="">
                                </a>

                                <div class="portfolio-info">                     
                                    <h4 class="portfolio-title mb-0">Hasil Bumi</h4>

                                    <p class="text-info">Durian</p>
                                </div>
                            </div> 
                        </div>

                    </div>
                </div>
            </section>

            
            <main id="main" data-aos="fade" data-aos-delay="1500" >

                <!-- ======= Gallery Section ======= -->
                <section id="gallery" class="gallery">
                  <div class="container-fluid">
                    <h1 align="center">Berita dan acara</h1>
                    <div class="row gy-4 justify-content-center">
                      <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                          <img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt="">
                          <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-1.jpg" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      </div><!-- End Gallery Item -->
                      <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                          <img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt="">
                          <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-2.jpg" title="Gallery 2" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      </div><!-- End Gallery Item -->
                      <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                          <img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt="">
                          <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-3.jpg" title="Gallery 3" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      </div><!-- End Gallery Item -->
                     
                        <div class="gallery-item h-100">
                          <img src="assets/img/gallery/gallery-14.jpg" class="img-fluid" alt="">
                          <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-14.jpg" title="Gallery 14" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      
                      {{-- <a class="btn btn-primary" href="#" role="button">Link</a> --}}
                      <a class="btn btn-primary" href="#" role="button">Lihat Lebih Banyak</a>
                    </div>
            
                  </div>
                </section><!-- End Gallery Section -->
            
              </main><!-- End #main -->

            <section class="google-map md-5 mt-5" >
                <iframe src="https://maps.google.com/maps?q=balai%20desa%20begaganlimo&t=&z=13&ie=UTF8&iwloc=&output=embed" class="map-iframe" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </section>


        </main>

        <footer id="footer" class="bg-dark text-white py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <h4 class="font-rubik font-size-20 text-white" >Kampoeng Harapan</h4>
                        @foreach ($contact as $item)
                        <p class="font-rale font-size-14 text-white-50 pb-1">{{$item->deskripsi}}</p>
                        @endforeach                      
                    </div>
                    <div class="col-lg-1 col-12">
                    </div>
        <!--            <div class="col-lg-4 col-12">
                        <form class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Email *">
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
                            </div>
                        </form>
                        <p class="font-size-14 font-rale text-white-50">Subscribe untuk mendapatkan informasi, perkembangan dan penawaran dari kami.</p>
                    </div>
        -->
                    <div class="col-lg-3 col-12">
                        <h4 class="font-rubik font-size-20 text-white ">Tentang Kami</h4>
                        <div class="d-flex flex-column flex-wrap">
                            <a href="#about" class="font-rale font-size-14 text-white-50 pb-1">PPK Gerdu</a>
                            <a href="https://www.instagram.com/gerdusosialundika/" class="font-rale font-size-14 text-white-50 pb-1">Gerdu Sosial</a>
                            <a href="https://www.dinamika.ac.id/" class="font-rale font-size-14 text-white-50 pb-1">Universitas Dinamika</a>
                            <a href="https://begaganlimo-mjkkab.desa.id/" class="font-rale font-size-14 text-white-50 pb-1">Begaganlimo</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-12">
                        <h4 class="font-rubik font-size-20 text-white ">Kontak</h4>
                        <div class="d-flex flex-column flex-wrap">
                            <a href="https://www.instagram.com/gerdusosialundika/" class="font-rale font-size-14 text-white-50 pb-1">Instagram</a>
                            <a href="#hero" class="font-rale font-size-14 text-white-50 pb-1">Website</a>
            
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="copyright text-center bg-dark text-white py-2">
            <p class="font-rale font-size-14">&copy; Copyrights 2022. Desain By <a href="#" class="color-second">Gerdu Sosial</a></p>
        </div>
        
        
       

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <script src="js/scrollspy.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="assets/js/main.js"></script>
        

    </body>
</html>