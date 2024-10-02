<?php
  session_start();

  if(!isset($_SESSION['user'])){
    header('location:login.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>✨ Cari Villa dan Rent Car Malang ✨</title>
    <!-- 👇 css code file 👇 -->
    <link rel="stylesheet" href="./src/style/global.css"/>
    <link rel="stylesheet" href="./src/style/index.css">
    <!-- Font Share -->
    <link href="https://api.fontshare.com/v2/css?f[]=hind@300,400,500,600,700&display=swap" rel="stylesheet">
    <!-- Google Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,200,0,0" />
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/185a3acc44.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Nav -->
    <nav>
        <div class="container">
            <div class="row d-flex">
                <div class="col">
                    <a href="#" class="logo">FunVilla Malang.com</a>
                </div>
                <div class="col socmed d-flex">
                    <span class="material-symbols-outlined menuBtn">
                        menu
                    </span>
                </div>
                <div class="col menu d-flex">
                    <a href="#">Beranda</a>
                    <a href="#villas">Sewa Villa</a>
                    <a href="#vehicle">Rental Kendaraan</a>
                    <a href="#">Account</a>
                    <a href="#">FAQ</a>
                    <a href="login.php">Login</a>
                    <a href="register.php">Register</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Nav -->

    <!-- Jumbotron -->
     <section id="jumbotron">
        <div class="container d-flex">
            <figcaption>
                <p class="judul">Liburan Seru, Jalanin Aja Dulu !</p>
            </figcaption>
        </div>
     </section>
    <!-- End Jumbotron -->

    <!-- Section List Villa -->
     <section id="villas">
        <div class="container">
            <figcaption>
                <h3>Rekomendasi Villa</h3>
            </figcaption>
            <div class="row d-grid">
                <a href="#" class="card">
                    <div class="img-slide"></div>
                    <figcaption class="caption d-flex">
                       <div class="col">
                        <h3>Pesona Villa</h3>
                        <div class="max-pax d-flex">
                            <span class="material-symbols-outlined">
                                group
                            </span>
                            <p class="capacity"></p>
                        </div>
                        <div class="price-list">
                            <figcaption class="price"></figcaption>
                            <button class="order-btn">Order</button> <!-- Button Order -->
                        </div>
                       </div>
                       <div class="col">
                        <span class="material-symbols-outlined">
                            star
                        </span>
                       </div>
                    </figcaption>
                </a>
                <a href="#" class="card">
                    <div class="img-slide"></div>
                    <figcaption class="caption d-flex">
                       <div class="col">
                        <h3>Pesona Villa</h3>
                        <div class="max-pax d-flex">
                            <span class="material-symbols-outlined">
                                group
                            </span>
                            <p class="capacity"></p>
                        </div>
                        <div class="price-list">
                            <figcaption class="price"></figcaption>
                            <button class="order-btn">Order</button> <!-- Button Order -->
                            
                        </div>
                       </div>
                       <div class="col">
                        <span class="material-symbols-outlined">
                            star
                        </span>
                       </div>
                    </figcaption>
                </a>
                <a href="#" class="card">
                    <div class="img-slide"></div>
                    <figcaption class="caption d-flex">
                       <div class="col">
                        <h3>Pesona Villa</h3>
                        <div class="max-pax d-flex">
                            <span class="material-symbols-outlined">
                                group
                            </span>
                            <p class="capacity"></p>
                        </div>
                        <div class="price-list">
                            <figcaption class="price"></figcaption>
                           <a href=""></a>  <!-- Button Order -->
                        </div>
                       </div>
                       <div class="col">
                        <span class="material-symbols-outlined">
                            star
                        </span>
                       </div>
                    </figcaption>
                </a>
                <a href="#" class="card">
                    <div class="img-slide"></div>
                    <figcaption class="caption d-flex">
                       <div class="col">
                        <h3>Pesona Villa</h3>
                        <div class="max-pax d-flex">
                            <span class="material-symbols-outlined">
                                group
                            </span>
                            <p class="capacity"></p>    
                        </div>
                        <div class="price-list">
                            <figcaption class="price"></figcaption>
                            <button class="order-btn">Order</button> <!-- Button Order -->
                        </div>
                       </div>
                       <div class="col">
                        <span class="material-symbols-outlined">
                            star
                        </span>
                       </div>
                    </figcaption>
                </a> -->
            </div>
        </div>
     </section>
    <!-- End Section List Villa -->

    <!-- Section vehicles -->
     <section id="vehicle">
        <div class="container">
            <figcaption>
                <h3>Rental Mobil</h3>
            </figcaption>
            <div class="row d-flex">
                <figure class="card-vehicle">
                    <div class="imgUnit">
                        <img src="src/assets/Rental/Hiace.jpeg" alt="">
                    </div>
                    <figcaption>
                        <h3 class="vehicle-type">Mobil Hiace</h3>
                        <div class="vehicle-capacity d-flex">
                            <span class="material-symbols-outlined">
                                group
                            </span>
                            <p class="vehicle-pax">15 Seater</p>
                        </div>
                        <p class="vehicle-price">1.000.000 / Hari</p>
                        <button class="order-btn"><a href="Rental.html">Order</a></button> <!-- Button Order -->
                    </figcaption>
                </figure>
                <figure class="card-vehicle">
                    <div class="imgUnit">
                        <img src="src/assets/Rental/Mobilio.jpeg" alt="">
                    </div>
                    <figcaption>
                        <h3 class="vehicle-type">Mobilio</h3>
                        <div class="vehicle-capacity d-flex">
                            <span class="material-symbols-outlined">
                                group
                            </span>
                            <p class="vehicle-pax">7 Seater</p>
                        </div>
                        <p class="vehicle-price">350.000 / Hari</p>
                        <button class="order-btn"><a href="Rental.html">Order</a></button> <!-- Button Order -->
                    </figcaption>
                </figure>
                <figure class="card-vehicle">
                    <div class="imgUnit">
                        <img src="src/assets/Rental/Avanza.jpeg" alt="">
                    </div>
                    <figcaption>
                        <h3 class="vehicle-type">Avanza</h3>
                        <div class="vehicle-capacity d-flex">
                            <span class="material-symbols-outlined">
                                group
                            </span>
                            <p class="vehicle-pax">7 Seater</p>
                        </div>
                        <p class="vehicle-price">325.000 / Hari</p>
                        <button class="order-btn"><a href="Rental.html">Order</a></button> <!-- Button Order -->
                    </figcaption>
                </figure>
                <figure class="card-vehicle">
                    <div class="imgUnit">
                        <img src="src/assets/Rental/Xenia.jpeg" alt="">
                    </div>
                    <figcaption>
                        <h3 class="vehicle-type">Xenia</h3>
                        <div class="vehicle-capacity d-flex">
                            <span class="material-symbols-outlined">
                                group
                            </span>
                            <p class="vehicle-pax">7 Seater</p>
                        </div>
                        <p class="vehicle-price">300.000 / Hari</p>
                        <button class="order-btn"><a href="Rental.html">Order</a></button> <!-- Button Order -->
                    </figcaption>
                </figure>
                <figure class="card-vehicle">
                    <div class="imgUnit">
                        <img src="src/assets/Rental/Brio.jpeg" alt="">
                    </div>
                    <figcaption>
                        <h3 class="vehicle-type">Brio</h3>
                        <div class="vehicle-capacity d-flex">
                            <span class="material-symbols-outlined">
                                group
                            </span>
                            <p class="vehicle-pax">5 Seater</p>
                        </div>
                        <p class="vehicle-price">250.000 / Hari</p>
                        <button class="order-btn"><a href="Rental.html">Order</a></button> <!-- Button Order -->
                    </figcaption>
                </figure>
            </div>
        </div>
     </section>


    <!-- End Section vehicles -->


    <!-- 👇 javascript code file 👇 -->
    <script src="./src/js/index.js"></script>
    <script src="./src/js/calling.js"></script>
</body>
</html>