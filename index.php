<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Authentic Store</title>

        <!-- CSS FILES -->    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">                    
        <link href="css/bootstrap.min.css" rel="stylesheet">
        

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/tooplate-crispy-kitchen.css" rel="stylesheet">
        



    </head>
    
    <body>
        
        <nav class="navbar navbar-expand-lg bg-white shadow-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <a class="navbar-brand" href="index.php">
                    Authentic Store
                </a>

                <div class="d-lg-none">
                    <button type="button" class="custom-btn btn btn-danger" data-bs-toggle="modal" data-bs-target="#BookingModal">Pemesanan</button>
                </div>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Story</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="menu.html">Produk</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Login</a>
                        </li>
                    </ul>
                </div>

                <div class="d-none d-lg-block">
                    <button type="button" class="custom-btn btn btn-danger" data-bs-toggle="modal" data-bs-target="#BookingModal">Pemesanan</button>
                </div>

            </div>
        </nav>

        <main>

            <section class="hero">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-12 m-auto">
                            <div class="heroText">

                                <h1 class="text-white mb-lg-5 mb-3">Authentic Store Bandung, Sukajadi</h1>

                                <div class="c-reviews my-3 d-flex flex-wrap align-items-center">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <h4 class="text-white mb-0 me-3">4.4/5</h4>

                                        <div class="reviews-stars">
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                        </div>
                                    </div>

                                    <p class="text-white w-100">From <strong>1,206+</strong> Customer Reviews</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 col-12">
                            <div id="carouselExampleCaptions" class="carousel carousel-fade hero-carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="carousel-image-wrap">
                                            <img src="images/slide/123.jpg" class="img-fluid carousel-image" alt="">
                                        </div>
                                        
                                        <div class="carousel-caption">
                                            <span class="text-white">
                                                <i class="bi-geo-alt me-2"></i>
                                                Bandung, Sukajadi
                                            </span>

                                            <h4 class="hero-text">Tas Rotan</h4>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="carousel-image-wrap">
                                            <img src="images/slide/Kue-Khas-Bengkulu-Cucur-Ringgit.jpg" class="img-fluid carousel-image" alt="">
                                        </div>
                                        
                                        <div class="carousel-caption">
                                            <div class="d-flex align-items-center">
                                                <h4 class="hero-text">Kue Cucur</h4>

                                                <span class="price-tag ms-4"><small>Rp</small>30.000</span>
                                            </div>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <h5 class="reviews-text mb-0 me-3">3.8/5</h5>

                                                <div class="reviews-stars">
                                                    <i class="bi-star-fill reviews-icon"></i>
                                                    <i class="bi-star-fill reviews-icon"></i>
                                                    <i class="bi-star-fill reviews-icon"></i>
                                                    <i class="bi-star reviews-icon"></i>
                                                    <i class="bi-star reviews-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="carousel-image-wrap">
                                            <img src="images/slide/mochi-sukabumi.jpg" class="img-fluid carousel-image" alt="">
                                        </div>
                                        
                                        <div class="carousel-caption">
                                            <div class="d-flex align-items-center">
                                                <h4 class="hero-text">Kue Mochi</h4>

                                                <span class="price-tag ms-4"><small>Rp</small>35.000</span>
                                            </div>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <h5 class="reviews-text mb-0 me-3">4.2/5</h5>

                                                <div class="reviews-stars">
                                                    <i class="bi-star-fill reviews-icon"></i>
                                                    <i class="bi-star-fill reviews-icon"></i>
                                                    <i class="bi-star-fill reviews-icon"></i>
                                                    <i class="bi-star-fill reviews-icon"></i>
                                                    <i class="bi-star reviews-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="video-wrap">
                    <video autoplay="" loop="" muted="" class="custom-video" poster="">
                        <source src="video/batik-yogya.webm" type="video/mp4">
                        	Your browser does not support the video tag.
                    	</video>
                </div>

                <div class="overlay"></div>
            </section>

            <section class="menu section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="text-center mb-lg-5 mb-4">Kerajinan & Makanan Kering Khas Daerah</h2>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="menu-thumb">
                                <div class="menu-image-wrap">
                                    <img src="images/breakfast/123.jpg" class="img-fluid menu-image" alt="">

                                    <span class="menu-tag bg-warning">Kerajinan</span>
                                </div>

                                <div class="menu-info d-flex flex-wrap align-items-center">
                                    <h4 class="mb-0">Tas Rotan</h4>

                                    <span class="price-tag bg-white shadow-lg ms-4"><small>Rp</small>75.000</span>

                                    <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                        <h6 class="reviews-text mb-0 me-3">4.3/5</h6>

                                        <div class="reviews-stars">
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                        </div>

                                        <p class="reviews-text mb-0 ms-4">40 Reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="menu-thumb">
                                <div class="menu-image-wrap">
                                    <img src="images/lunch/fromandroid-ba33188ff3b212f94501886690864a6c.jpg" class="img-fluid menu-image" alt="">

                                    <span class="menu-tag bg-warning">Makanan</span>
                                </div>

                                <div class="menu-info d-flex flex-wrap align-items-center">
                                    <h4 class="mb-0">Kue Keukarah Khas Aceh</h4>

                                    <span class="price-tag bg-white shadow-lg ms-4"><small>Rp</small>30.000</span>

                                    <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                        <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                        <div class="reviews-stars">
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                        </div>

                                        <p class="reviews-text mb-0 ms-4">50 Reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="menu-thumb">
                                <div class="menu-image-wrap">
                                    <img src="images/dinner/mochi-sukabumi.jpg" class="img-fluid menu-image" alt="">

                                    <span class="menu-tag bg-warning">Makanan</span>
                                </div>

                                <div class="menu-info d-flex flex-wrap align-items-center">
                                    <h4 class="mb-0">Kue Mochi Khas Sukabumi</h4>

                                    <span class="price-tag bg-white shadow-lg ms-4"><small>Rp</small>30.000</span>

                                    <del class="ms-4"><small>Rp</small>50.000</del>

                                    <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                        <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                        <div class="reviews-stars">
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                        </div>

                                        <p class="reviews-text mb-0 ms-4">86 Reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="menu-thumb">
                                <div class="menu-image-wrap">
                                    <img src="images/dinner/picsart-05-21-060241-890a8084abd13a189f5eab5a3580d63a.jpg" class="img-fluid menu-image" alt="">

                                    <span class="menu-tag bg-warning">Makanan</span>
                                </div>

                                <div class="menu-info d-flex flex-wrap align-items-center">
                                    <h4 class="mb-0">Kue Semprong</h4>

                                    <span class="price-tag bg-white shadow-lg ms-4"><small>Rp</small>30.000</span>

                                    <del class="ms-4"><small>Rp</small>50.000</del>

                                    <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                        <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                        <div class="reviews-stars">
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                        </div>

                                        <p class="reviews-text mb-0 ms-4">44 Reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="menu-thumb">
                                <div class="menu-image-wrap">
                                    <img src="images/breakfast/540799_67ec99eb-2c07-4bf3-be99-3d736a094ebc_1280_960.jpg" class="img-fluid menu-image" alt="">

                                    <span class="menu-tag bg-warning">Kerajinan</span>
                                </div>

                                <div class="menu-info d-flex flex-wrap align-items-center">
                                    <h4 class="mb-0">Tas Rajut Rotan</h4>

                                    <span class="price-tag bg-white shadow-lg ms-4"><small>Rp</small>90.000</span>

                                    <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                        <h6 class="reviews-text mb-0 me-3">4.3/5</h6>

                                        <div class="reviews-stars">
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                        </div>

                                        <p class="reviews-text mb-0 ms-4">102 Reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="menu-thumb">
                                <div class="menu-image-wrap">
                                    <img src="images/lunch/Rambat kerajinan kalimantan tengah.png" class="img-fluid menu-image" alt="">

                                    <span class="menu-tag bg-warning">Kerajinan</span>
                                </div>

                                <div class="menu-info d-flex flex-wrap align-items-center">
                                    <h4 class="mb-0">Tas Khas Kalimantan Tengah</h4>

                                    <span class="price-tag bg-white shadow-lg ms-4"><small>Rp</small>90.000</span>

                                    <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                        <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                        <div class="reviews-stars">
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                        </div>

                                        <p class="reviews-text mb-0 ms-4">64 Reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

           

        <footer class="site-footer section-padding">
            
            <div class="container">
                
                <div class="row">

                    <div class="col-12">
                        <h4 class="text-white mb-4 me-5">Authentic Store</h4>
                    </div>

                    <div class="col-lg-4 col-md-7 col-xs-12 tooplate-mt30">
                        <h6 class="text-white mb-lg-4 mb-3">Lokasi Terkini</h6>

                        <p>Jawa Barat,Kota Bandung,Kecamatan Sukajadi</p>

                        <a href="https://www.google.com/maps/@-6.8736917,107.5771198,16z?entry=ttu" class="custom-btn btn btn-dark mt-2">Directions</a>
                    </div>

                    <div class="col-lg-4 col-md-6 col-xs-12 tooplate-mt30">
                        <h6 class="text-white mb-lg-4 mb-3">Sosial Media</h6>

                        <ul class="social-icon">
                            <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="https://twitter.com/search?q=tooplate.com&src=typed_query&f=live" target="_blank"
                            	 class="social-icon-link bi-twitter"></a></li>

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                        </ul>
                    
                        <p class="copyright-text tooplate-mt60">Copyright © 2023 Authentic Store
                        <br><a rel="nofollow" href="https://www.tooplate.com/" target="_blank"></a></p>
                        
                    </div>

                </div><!-- row ending -->
                
             </div><!-- container ending -->
             
        </footer>

        <!-- Modal -->
        <div class="modal fade" id="BookingModal" tabindex="-1" aria-labelledby="BookingModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="mb-0">Pemesan Barang</h3>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body d-flex flex-column justify-content-center">
                        <div class="booking">
                            
                            <form class="booking-form row" role="form" action="#" method="post">
                                <div class="col-lg-6 col-12">
                                    <label for="name" class="form-label">Full Lengkap</label>

                                    <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="email" class="form-label">Alamat email</label>

                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="your@email.com" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="phone" class="form-label">Nomor telepon</label>

                                    <input type="telephone" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" placeholder="123-456-7890">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="people" class="form-label">Alamat Anda</label>

                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Address" required>
                                </div>

                                

                                <div class="col-12">
                                    <label for="message" class="form-label">Permintaan Pemesanan</label>

                                    <textarea class="form-control" rows="4" id="message" name="message" placeholder=""></textarea>
                                </div>

                                <div class="col-lg-4 col-12 ms-auto">
                                    <button type="submit" class="form-control">Kirim Permintaan</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="modal-footer"></div>
                    
                </div>
                
            </div>
        </div>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
