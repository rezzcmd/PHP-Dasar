<?php include "service/database.php"?>
<?php 
 if(isset($_POST["register"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "INSERT INTO users (username, password) VALUES
       ('$username', '$password')";

 if($db->query($sql)) {
    echo "OK MANTAP DATA MASUK";
 }else {
    echo "DATA GAGAL MASUK";
}

    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <div class="modal fade register" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                <img src="img/modal/2.svg" alt="register">
                <form action="register.php" method="POST">
                    <h3 class="pt-5 pb-3" style="line-height: 40px !important;">Buat Akun Anda</h3>
                    <div class="container modal-lable">
                        <label for="username">Email</label> <br>
                        <input class="input-login" type="text" placeholder="Masukan email anda" name="username"
                            required> <br><br>
                        <label for="password">Password</label> <br>
                        <input class="input-login" type="password" placeholder="Buat Password anda" name="password"
                            required> <br><br><br><br>
                        <button type="submit" name="register"
                            class="btn btn-primary button-login mb-4">Register</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
 </div>    
</body>
</html>

