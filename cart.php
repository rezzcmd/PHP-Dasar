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
    <?php include "login.php" ?>
    <?php include "register.php" ?>
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
            <ol class="breadcrumb bg-transparent pl-0 pt-4">
                <li class="breadcrumb-item"><a href="#">Foods</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
        </nav>
    </div>
    <!-- Akhir Breadcrums -->


    <div class="container cart-header p-5">
        <div class="row text-center">
            <div class="col">
                <h3>Keranjang Kamu</h3>
                <p>Periksa kembali pesanan kamu sebelum checkout</p>
            </div>
        </div>
    </div>



    <!-- check out -->

    <section class="checkout pt-4">
        <div class="container">
            <div class="row justify-content-between" style="margin-bottom: 100px;">
                <div class="col-lg-7 col-sm-12">
                    <h4 class="mb-4 judul-co">Pesanan Kamu</h4>
                    <div class="row mb-4">
                        <div class="col-3">
                            <img src="img/cekout/1.png">
                        </div>
                        <div class="col-5">
                            <h5 class="title-co">Cheese Meatball Classic</h5>
                            <p class="sub-title-co">Rp134.000</p>
                            <p class="sub-sub-co">Size: Medium</p>
                        </div>
                        <div class="col-4 text-right">
                            <button type="button" class="btn btn-sm border-0 bg-light">-</button>
                            <input type="text" class="input-qty" value="1">
                            <button type="button" class="btn btn-sm border-0 bg-light">+</button>
                            <button type="button" class="btn btn-sm btn-danger" style="color: white;"><img
                                    src="img/trash.png" alt=""></button>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-3">
                            <img src="img/cekout/2.png">
                        </div>
                        <div class="col-5">
                            <h5 class="title-co">Spaghetti w Sauce Bolognese</h5>
                            <p class="sub-title-co">Rp39.000</p>
                        </div>
                        <div class="col-4 text-right">
                            <button type="button" class="btn btn-sm border-0 bg-light">-</button>
                            <input type="text" class="input-qty" value="1">
                            <button type="button" class="btn btn-sm border-0 bg-light">+</button>
                            <button type="button" class="btn btn-sm btn-danger" style="color: white;"><img
                                    src="img/trash.png" alt=""></button>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-3">
                            <img src="img/cekout/3.png">
                        </div>
                        <div class="col-5">
                            <h5 class="title-co">Salad Egg with Special Sauce</h5>
                            <p class="sub-title-co">Rp24.500</p>
                        </div>
                        <div class="col-4 text-right">
                            <button type="button" class="btn btn-sm border-0 bg-light">-</button>
                            <input type="text" class="input-qty" value="1">
                            <button type="button" class="btn btn-sm border-0 bg-light">+</button>
                            <button type="button" class="btn btn-sm btn-danger" style="color: white;"><img
                                    src="img/trash.png" alt=""></button>
                        </div>
                    </div>

                    <h4 class="mb-3 judul-alamat" style="margin-top: 100px;">Detail Pengiriman</h4>


                    <form class="data-pengiriman">
                        <div class="form-group">
                            <label for="address">Alamat Lengkap</label>
                            <input type="text" class="form-control" id="address"
                                placeholder="Nama Jalan, Nomor Rumah, RT/RW">
                        </div>
                        <div class="form-group">
                            <label for="city">Provinsi</label>
                            <select class="custom-select">
                                <option selected>Pilih Provinsi</option>
                                <option value="1">Bandung</option>
                                <option value="2">Jakarta</option>
                                <option value="3">Surabaya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="country">Kecamatan</label>
                            <select class="custom-select">
                                <option selected>Pilih Kecamatan</option>
                                <option value="1">Padalarang</option>
                                <option value="2">Cimahi</option>
                                <option value="3">Cipatat</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address2">Kode Pos</label>
                            <input type="text" class="form-control" id="address2" placeholder="Kode Pos">
                        </div>
                    </form>
                </div>

                <div class="col-lg-5 pr-0">
                    <div class="card rounded-0 checkout-detail bg-light border-0">
                        <div class="card-body">
                            <h5 class="card-title">Infomasi Biaya</h5>
                            <div class="row mb-3">
                                <div class="col">
                                    <h6 class="m-0">Cheese Meatball Classic</h6>
                                    <small style="color: #6f6f6f;">1 item, Medium</small>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <h6 class="m-0 align-self-center" style="color: #FF930D;">Rp134.000</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <h6 class="m-0">Spaghetti w Sauce Bolognese</h6>
                                    <small style="color: #6f6f6f;">2 items</small>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <h6 class="m-0 align-self-center" style="color: #FF930D;">Rp39.000</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <h6 class="m-0">Salad Egg with Special Sauce</h6>
                                    <small style="color: #6f6f6f;">2 items</small>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <h6 class="m-0 align-self-center" style="color: #FF930D;">Rp24.500</h6>
                                </div>
                            </div>

                            <hr>

                            <div class="row mb-3">
                                <div class="col">
                                    <h6 class="m-0">Ongkos Kirim</h6>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <h6 class="m-0 align-self-center" style="color: #FF930D;">Rp0</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <h6 class="m-0">Diskon</h6>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <h6 class="m-0 align-self-center" style="color: #FF7676;">-Rp15.000</h6>
                                </div>
                            </div>
                            <br>
                            <div class="row mb-3">
                                <div class="col">
                                    <h5 class="m-0">Total</h5>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <h6 class="m-0 align-self-center" style="color: #FF930D;">Rp182.500</h6>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <button type="button " class="btn btn-block btn-warning"
                                style=" background-color: #fff; color: #FF930D;">Tambah Pesanan</button>
                        </div>
                        <div class="col">
                            <button type="button " class="btn btn-warning btn-block border-co text-white"
                                data-toggle="modal" data-target="#checkoutmodal">Buat Pesanan</button>
                        </div>
                    </div>

                </div>
            </div>
    </section>

    <!-- Akhir check out -->



    <!-- modal-checkout -->


    <!-- Modal -->

    <div class="modal fade checkout-modal-succes" id="checkoutmodal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <img src="img/order_confirmed.svg">
                    <h3>Pesanan Diterima</h3>
                    <p>Pesanan sudah kami terima dan akan <br> diproses segera. Silakan duduk manis <br> menunggu
                        pengantaran.</p>
                    <button type="button" class="btn mt-3 mb-4" style=" background-color: #FF930D; color: #fff;"
                        data-dismiss="modal">Kembali Ke Home</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Akhir modal-checkout -->


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