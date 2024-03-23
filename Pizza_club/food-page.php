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
 <?php include "Layout/navbar.html" ?>
    <!-- Akhir Navbar -->


    <!-- modal login -->


    <div class="modal fade login" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <nav class="navbar navbar-expand-lg navbar-light border-bottom navbar-set"
                    style="box-shadow: rgba(211, 211, 211, 0.25);">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav text-uppercase mx-auto">
                                <li class="nav-item active">
                                    <a class="navbar-brand" href="index.php">
                                        <img src="img/logo1.png" alt="Pizza_club">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="modal-body text-center">
                    <img src="img/modal/2.svg" alt="login">
                    <form action="">
                        <h3 class="pt-5 pb-3" style="line-height: 40px !important;">Masuk ke Akun Anda</h3>
                        <div class="container modal-lable">
                            <label for="username">Email</label> <br>
                            <input class="input-login" type="text" placeholder="Masukan email anda" name="username"
                                required> <br><br>
                            <label for="password">Password</label> <br>
                            <input class="input-login" type="password" placeholder="Masukan Password anda"
                                name="password" required> <br><br><br><br>
                            <button class="btn btn-warning button-login mb-4">Login</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>




    <!-- akhir modal login -->



    <!-- Breadcrumbs -->
    <div class="container pt-5">
        <nav class="pt-5">
            <ol class="breadcrumb bg-transparent pl-0 pt-5">
                <li class="breadcrumb-item"><a href="#">Foods</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pizza</li>
            </ol>
        </nav>
    </div>

    <!-- Akhir Breadcrumbs -->


    <!-- Single Produk -->


    <section class="single-product px-2">
        <div class="container">
            <div class="row">
                <div class="img-product img-single col-lg-5 col-md-6">
                    <div class="figure-single">
                        <img src="img/single/1.png" class="figure-img img-fluid rounded">
                    </div>
                </div>
                <div class="align-self-center col-lg-5 col-md-6">
                    <h3 class="title-product">Cheese Meatball Classic</h3>
                    <p class="subtitle-product">Rp134.000</p>
                    <div class="row justify-content-center pb-1 pt-3">
                        <div class="col-2">
                            <p class="qty">Qty</p>
                        </div>
                        <div class="col-10">
                            <button type="button" class="btn btn-sm border-0 bg-light">-</button>
                            <input type="text" class="input-qty" value="1">
                            <button type="button" class="btn btn-sm border-0 bg-light">+</button>
                        </div>
                    </div>
                    <div class="row pt-1">
                        <div class="col-2">
                            <p class="qty">Size</p>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <select class="custom-select bg-light">
                                    <option selected>Pilih Ukuran</option>
                                    <option value="1">Small</option>
                                    <option value="2">Medium</option>
                                    <option value="3">Large</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col pt-3">
                            <div class="btn-product">
                                <a href="cart.php" class="btn btn-warning text-white"
                                    style="border-radius: 10px;">Masukan
                                    Keranjang</a>
                                <a href="" class="btn btn-outline-warning"><img src="img/heart-regular 1.png"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Akhir Single Produk -->


    <!-- Product Description & Review -->

    <section class="product-description py-5 px-2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-tabs nav-item-tab">
                            <a class="nav-link-review nav-link active judul-tabs" id="description-tab" data-toggle="tab"
                                href="#description" role="tab" aria-controls="description"
                                aria-selected="true">Deskripsi</a>
                        </li>
                        <li class="nav-tabs nav-item-tab">
                            <a class="nav-link-review nav-link judul-tabs-tidak-aktiv" id="review-tab" data-toggle="tab"
                                href="#review" role="tab" aria-controls="review" aria-selected="false">Ulasan</a>
                        </li>
                    </ul>
                    <div class="tab-content p-3" id="myTabContent">
                        <div class="tab-pane fade show active product-review" id="description" role="tabpanel"
                            aria-labelledby="description-tab">
                            <p>
                                Pizza khas italia yang dibuat dengan roti ketebalan sedang yang sangat lembut dimulut
                                disertai dengan pinggiran berisi sosis panggang yang nikmat.
                            </p>
                            <p>Dilengkapi dengan berbagai topping yang dapat melengkapi kenikmatanmu dengan irisan
                                bakso, sosis, paprika dan dilapisi dengan keju mozarella yang lumer. Rasakan kenikmatan
                                yang tidak biasa ketika menyantap Pizza tersebut. Ditambah dengan sauce sambal dan sauce
                                tomat yang dapat menggugah kenikmatan saat menyantap pizza bersama orang tersayang.</p>
                        </div>
                        <div class="tab-pane fade product-review" id="review" role="tabpanel"
                            aria-labelledby="review-tab">
                            <div class="row">
                                <div class="col-1 d-none d-md-block">
                                    <img src="img/Ulasan/1.png" alt="">
                                </div>
                                <div class="col review-product">
                                    <h5>Fajar Mukharom</h5>
                                    <p>Rasanya seenak itu gangerti lagi! Pas masuk ke mulut keju-nya tuh melted gitu
                                        ditambah baksonya yang dagingnya berasa banget.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1 d-none d-md-block">
                                    <img src="img/Ulasan/2.png" alt="">
                                </div>
                                <div class="col review-product">
                                    <h5>Sinta Amalia</h5>
                                    <p>Gangerti lagi sih pengen meninggal rasanya, perpaduan topping sama rotinya tuh
                                        pas banget di mulut.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1 d-none d-md-block">
                                    <img src="img/Ulasan/3.png" alt="">
                                </div>
                                <div class="col review-product">
                                    <h5>Indra Muhammad</h5>
                                    <p>Gila ini sih pizza terenak yang pernah gw makan! Rasanya tuh khas banget ga kayak
                                        pizza pada umumnya, apalagi kejunya waw banget.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Akhir Product Description & Review -->



    <!-- Menu Lainnya -->


    <div class="container-fluid menu-lainnya">
        <div class="menu">
            <div class="row p-5 text-center">
                <div class="col pb-3">
                    <h3>Menu Lainnya</h3>
                    <p>Menu lain untuk temani santapan kamu</p>
                </div>
            </div>
            <div class="row pb-5 px-5">
                <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="figure menu-lain">
                        <figure class="figure-img text-center rounded-circle">
                            <img src="/img/Menu lainnya/1.png" class="figure-img img-fluid" style="width: 180px;">
                            <figcaption class="figure-caption text-center">
                                <div class="col">
                                    <h5>Spaghetti with<br>Sauce Bolognese</h5>
                                </div>
                                <div class="col"><span>Rp39.000</span></div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="figure menu-lain">
                        <figure class="figure-img text-center">
                            <img src="/img/Menu lainnya/2.png" class="figure-img img-fluid" style="width: 180px;">
                            <figcaption class="figure-caption text-center">
                                <div class="col">
                                    <h5>Macaroni Schotel Mozarella Cheese</h5>
                                </div>
                                <div class="col"><span>Rp34.000</span></div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="figure menu-lain">
                        <figure class="figure-img text-center">
                            <img src="/img/Menu lainnya/3.png" class="figure-img img-fluid" style="width: 180px;">
                            <figcaption class="figure-caption text-center">
                                <div class="col">
                                    <h5>Salad Egg with<br>Special Sauce</h5>
                                </div>
                                <div class="col"><span>Rp24.500</span></div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="figure menu-lain">
                        <figure class="figure-img text-center">
                            <img src="/img/Menu lainnya/4.png" class="figure-img img-fluid" style="width: 180px;">
                            <figcaption class="figure-caption text-center">
                                <div class="col">
                                    <h5>Chicken Rice<br>Bowl</h5>
                                </div>
                                <div class="col"><span>Rp34.500</span></div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Akhir Menu Lainnya -->




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