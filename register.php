<?php 
    include "service/database.php";

    $register_message = "";

 if(isset($_POST["register"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hash_password = hash("sha256", $password);

    try {
        $sql = "INSERT INTO users (username, password) VALUES
       ('$username', '$hash_password')";

       if($db->query($sql)) {
            $register_message = "daftar akun berhasil, silahkan login";
       }else {
            $register_message = "daftar akun gagal,silahkan coba lagi";
       }
    }catch (mysqli_sql_exception) {
        $register_message = "username sudah digunakan";
       }
       $db->close();

    
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
    <div class="container justify-content-center">
      <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
           <img src="img/logo1.png" class="d-inline-block align-top" alt="Pizza_club">
        </a>
      </nav>
      <div class="modal-body text-center">
                <img src="img/modal/2.svg" alt="register">
                <form class="align-self-center" action="register.php" method="POST">
                    <h3 class="pt-5 pb-3">Buat Akun Anda</h3>
                    <i><?= $register_message ?></i>
                    <div class="container">
                        <label for="username">Email</label> <br>
                        <input class="input-register" type="text" placeholder="Masukan email anda" name="username"
                            required> <br><br>
                        <label for="password">Password</label> <br>
                        <input class="input-register" type="password" placeholder="Masukan Password anda" name="password"
                            required> <br><br><br>
                        <button type="submit" name="register" class="btn btn-primary button-register mb-4">register</button>
                    </div>
                </form>

            </div>
    </div>

</body>
</html>