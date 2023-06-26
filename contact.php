<?php
    $koneksi = mysqli_connect("localhost", "root", "", "authentic_store");

    // jika tombol register ditekan
    if ( isset( $_POST['register'] ) ) {
        // tangkap semua data yang dikirim lewat post
        $username = $_POST['username'];
        $password = $_POST['password'];

        // lakukan query
        mysqli_query(
            $koneksi, "INSERT INTO user VALUES ('', '$username', '$password')"
        );

        if ( mysqli_affected_rows($koneksi) ) {
            echo "<script>
            alert('Insert data berhasil!');
            </script>";
        }
    }

    // jika tombol login ditekan
    if( isset($_POST['login']) ) {
        $login_username = $_POST['login_username'];
        $login_password = $_POST['login_password'];

        $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$login_username'");

        if ( mysqli_num_rows($result) == 1 ) {
            $row = mysqli_fetch_assoc($result);

            if ( $login_password == $row['password'] ) {
                header('Location: index.php');
                exit;
            }
        }
        $error = true;
    }


?>

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
                            <a class="nav-link" href="index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Story</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="menu.html">Produk</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="contact.php">Login</a>
                        </li>
                    </ul>
                </div>

                <div class="d-none d-lg-block">
                    <button type="button" class="custom-btn btn btn-danger" data-bs-toggle="modal" data-bs-target="#BookingModal">Pemesanan</button>
                </div>

            </div>
        </nav>

        <main>

            <header class="site-header site-contact-header">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 mx-auto">
                            <h1 class="text-white">Halo </h1>
                        </div>

                    </div>
                </div>
                
                <div class="overlay"></div>
            </header>

            <section class="contact section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-4">Login Or Register</h2>
                        </div>

                        <div class="col-lg-6 col-12">
                            <?php if ( isset($error) ) : ?>
                                <div class="alert alert-danger">Username / password salah!</div>
                                <?php endif; ?>
                            <form class="custom-form contact-form row" action="" method="post">
                                <div class="col-lg-12 col-12">
                                    <label for="login_username" class="form-label">Username </label>
                                    <input type="text" name="login_username" id="login_username" class="form-control" placeholder="Nama lengkap Anda" required>
                                </div>

                                <div class="col-12">
                                    <label for="login_password" class="form-label">Password</label>

                                    <input type="password" name="login_password" id="login_password"  class="form-control" placeholder="Masukkan password" required="">

                                    </div>

                                <div class="col-lg-12 col-12 ms-start">
                                    <button type="submit" class="form-control" name="login">Login</button>
                                    <!-- Button trigger modal -->
                                    <button class="btn btn-primary form-control" data-bs-toggle="modal" data-bs-target="#exampleModal">Register</button>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-4 col-12 mx-auto mt-lg-5 mt-4">

                            

                        <div class="col-12">
                            <h4 class="mt-5 mb-4">Jawa Barat,Kota Bandung,Kecamatan Sukajadi</h4>

        
                    </div>
                </div>
            </section>

        </main>

        <footer class="site-footer section-padding">
            
            <div class="container">
                
                <div class="row">

                    <div class="col-12">
                        <h4 class="text-white mb-4 me-5">Authentic Store</h4>
                    </div>

                    <div class="col-lg-4 col-md-7 col-xs-12 tooplate-mt30">
                        <h6 class="text-white mb-lg-4 mb-3">Lokasi Terkini</h6>

                        <p>121 Einstein Loop N, Bronx, NY 10475, United States</p>

                        <a href="https://www.google.com/maps/place/Kec.+Sukajadi,+Kota+Bandung,+Jawa+Barat/@-6.8892545,107.5768458,15z/data=!3m1!4b1!4m6!3m5!1s0x2e68e662c0cb8881:0x487870020c4f8b2c!8m2!3d-6.8922842!4d107.5909487!16s%2Fg%2F11b_2mtn5y?entry=ttu" class="custom-btn btn btn-dark mt-2">Lokasi</a>
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
                    
                        <p class="copyright-text tooplate-mt60">Copyright © 2023 Authentic Store.
                        <br> <a rel="nofollow" href="https://www.tooplate.com/" target="_blank"></a></p>
                        
                    </div>

                </div><!-- row ending -->
                
             </div><!-- container ending -->
             
        </footer>

        <!-- Modal -->
        <div class="modal fade" id="BookingModal" tabindex="-1" aria-labelledby="BookingModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="mb-0">Pemesanan Produk</h3>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body d-flex flex-column justify-content-center">
                        <div class="booking">
                            
                            <form class="booking-form row" role="form" action="#" method="post">
                                <div class="col-lg-6 col-12">
                                    <label for="name" class="form-label">Nama Lengkap</label>

                                    <input type="text" name="name" id="name" class="form-control" placeholder="Nama Lengkap Anda" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="Address" class="form-label"> Alamat Anda</label>

                                    <input type="Address" name="Address" id="Address" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Alamat Lengkap Anda" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="phone" class="form-label">Nomer Telepon</label>

                                    <input type="telephone" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" placeholder="+62(08)">
                                </div>
                                
                                <div class="col-lg-6 col-12">
                                    <label for="email" class="form-label">Alamat Email</label>

                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="@email.com" required>
                                </div>
                                

                                <div class="col-12">
                                    <label for="message" class="form-label">Permintaan Pemesanan</label>

                                    <textarea class="form-control" rows="4" id="message" name="message" placeholder=""></textarea>
                                </div>

                                <div class="col-lg-4 col-12 ms-auto">
                                    <button type="submit" class="form-control">Pesan</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="modal-footer"></div>
                    
                </div>
                
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Registrasi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="username">
                    </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" name="register">Register</button>
                        </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
