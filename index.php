<?php
    session_start();
    if(isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header('location: login.php');
    }

?>

<?php
session_start();

if( !isset($_SESSION["is_login"])) {
    header("location: login.php");
    exit;
}


?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Ini Fontawesome -->
    <link rel="stylesheet" href="css/all.css">

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Montserrat:wght@200;400;600&family=Inter:wght@100..900&display=swap"
        rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Pizza Clube</title>
</head>

<body>


    <!-- Navbar -->
        <?php include "Layout/navbar2.html" ?>
    <!-- Akhir Navbar -->





    <!-- Carousel -->

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="container pt-5">
                <div class="carousel-item active">
                    <div class="row pt-5 justify-content-center">
                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                            <h1 class="mb-4">Pizza Spesial untuk Orang Spesial</h1>
                            <p class="mb-4">Dapatkan Pizza Spesial dengan tambahan topping ekskulif untuk Orang Spesial
                            </p>
                            <a href="food-page.php" class="btn btn-warning text-white"
                                style="border-radius: 10px;">Dapatkan
                                Sekarang</a>
                        </div>
                        <div class="col col-sm-3 col-md-4 col-lg-4 d-none d-sm-block offset-1">
                            <img src="img/Product/carousel 1.png" class="img-fluid img-carousel">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row pt-5 justify-content-center">
                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                            <h1 class="mb-4">Pizza Spesial untuk Orang Spesial</h1>
                            <p class="mb-4">Dapatkan Pizza Spesial dengan tambahan topping ekskulif untuk Orang Spesial
                            </p>
                            <a href="food-page.php" class="btn btn-warning text-white"
                                style="border-radius: 10px;">Dapatkan
                                Sekarang</a>
                        </div>
                        <div class="col-3 col-sm-6 col-md-4 col-lg-4 d-none d-sm-block offset-1">
                            <img src="img/Product/carousel 2.png" class="img-fluid img-carousel">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row pt-5 justify-content-center">
                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                            <h1 class="mb-4">Pizza Spesial untuk Orang Spesial</h1>
                            <p class="mb-4">Dapatkan Pizza Spesial dengan tambahan topping ekskulif untuk Orang Spesial
                            </p>
                            <a href="food-page.php" class="btn btn-warning text-white"
                                style="border-radius: 10px;">Dapatkan
                                Sekarang</a>
                        </div>
                        <div class="col-3 col-sm-6 col-md-4 col-lg-4 d-none d-sm-block offset-1">
                            <img src="img/Product/carousel 3.png" class="img-fluid img-carousel">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Akhir Carousel -->

    <!-- Menu Terlaris -->


    <div class="container-fluid menu-terlaris">
        <div class="menu">
            <div class="row pt-5 px-5 text-center">
                <div class="col">
                    <h3>Menu Terlaris</h3>
                    <p>Menu Pizza terlaris spesial untuk kamu</p>
                </div>
            </div>
            <div class="row pb-5 px-5">
                <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="figure pb-3">
                        <figure class="figure-img text-center rounded-circle">
                            <img src="img/menu terlaris/img_pizza1.png" class="figure-img img-fluid"
                                style="width: 180px;">
                            <figcaption class="figure-caption text-center">
                                <div class="col">
                                    <h5>American Black<br>Pepper Chicken</h5>
                                    <p>2-3 orang</p>
                                </div>
                                <div class="col"><span>Rp99.000</span></div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="figure pb-3">
                        <figure class="figure-img text-center">
                            <img src="img/menu terlaris/img_pizza2.png" class="figure-img img-fluid"
                                style="width: 180px;">
                            <figcaption class="figure-caption text-center">
                                <div class="col">
                                    <h5>Cheese Meatball<br>Classic</h5>
                                    <p>3-4 orang</p>
                                </div>
                                <div class="col"><span>Rp134.000</span></div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="figure pb-3">
                        <figure class="figure-img text-center">
                            <img src="img/menu terlaris/img_pizza3.png" class="figure-img img-fluid"
                                style="width: 180px;">
                            <figcaption class="figure-caption text-center">
                                <div class="col">
                                    <h5>Cheese Melt<br>Special Beef</h5>
                                    <p>2-3 orang</p>
                                </div>
                                <div class="col"><span>Rp129.000</span></div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="figure pb-3">
                        <figure class="figure-img text-center">
                            <img src="img/menu terlaris/img_pizza4.png" class="figure-img img-fluid"
                                style="width: 180px;">
                            <figcaption class="figure-caption text-center">
                                <div class="col">
                                    <h5>Black Pepper<br>Beef Cheese Melt</h5>
                                    <p>3-5 orang</p>
                                </div>
                                <div class="col"><span>Rp149.000</span></div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col pb-5 text-center">
                    <button class="btn btn-warning text-white" type="button"
                        style="width: 216px; height: 60px; border-radius: 10px;">Lihat Menu</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Akhir Menu Terlaris -->

    <!-- Features -->


    <section class="features bg-light p-5">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h3>Layanan Terbaik</h3>
                    <p>Kami berikan layanan terbaik khusus untuk kamu</p>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-5 d-flex justify-content-center">
                    <div class="card card-layanan" style="max-width: 280px;">
                        <div class="row no-gutters align-items-center">
                            <div class="col-2">
                                <img src="img/Feature/f1.png" class="left-sec">
                            </div>
                            <div class="col-10">
                                <div class="card-body float-right align-content-end">
                                    <p>Gratis<br />Ongkos<br />Kirim</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-5 d-flex justify-content-center">
                    <div class="card card-layanan" style="max-width: 280px;">
                        <div class="row no-gutters align-items-center">
                            <div class="col-2">
                                <img src="img/Feature/f2.png" class="left-sec">
                            </div>
                            <div class="col-10">
                                <div class="card-body float-right align-content-end">
                                    <p>Jaminan<br>Makanan<br>Fresh</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-5 d-flex justify-content-center">
                    <div class="card card-layanan" style="max-width: 280px;">
                        <div class="row no-gutters align-items-center">
                            <div class="col-2">
                                <img src="img/Feature/f3.png" class="left-sec">
                            </div>
                            <div class="col-10">
                                <div class="card-body float-right align-content-end">
                                    <p>Banyak<br>Promo<br>Menarik</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Akhir Features -->

    <!-- Olshop -->



    <section class="olshop">
        <div class="container">
            <div class="row justify-content-center">
                <div class="small-center col-lg-6 col-sm-12 col-md-12">
                    <h3>Juga Tersedia di</h3>
                    <p>Kami juga tersedia di layanan favorit kamu</p>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <img src="img/olsop/1.png" alt="">
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 pt-2">
                    <img src="img/olsop/2.png" alt="">
                </div>
            </div>
        </div>
    </section>



    <!-- Akhir Olshop -->



    <!-- Footer -->

   <?php include "Layout/footer.html" ?>

    <!-- Akhir Footer -->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/all.js"></script>
</body>

</html>