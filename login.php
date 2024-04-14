<!-- php login -->

<?php 
    include "service/database.php";
    session_start();

    $login_message = "";

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hash_password = hash('sha256', $password);

        $sql = "SELECT * FROM users WHERE
        username= '$username' AND password='$hash_password'";

        $result = $db->query($sql);

        if($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            $_SESSION["username"] = $data["username"];
            $_SESSION["is_login"] = true;

            header("location: dashboard.php");
        }else {
            $login_message = "akun tidak ditemukan";
        }
        $db->close();
    }
?>

<!--akhir php login -->

<!-- modal login -->

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
                <img src="img/modal/2.svg" alt="login">
                <form class="align-self-center" action="login.php" method="POST">
                    <h3 class="pt-5 pb-3">Buat Akun Anda</h3>
                    <i><?= $login_message ?></i>
                    <div class="container">
                        <label for="username">Email</label> <br>
                        <input class="input-login" type="text" placeholder="Masukan email anda" name="username"
                            required> <br><br>
                        <label for="password">Password</label> <br>
                        <input class="input-login" type="password" placeholder="Masukan Password anda" name="password"
                            required> <br><br><br>
                        <button type="submit" name="login" class="btn btn-primary button-login mb-4">login</button>
                    </div>
                </form>

            </div>
    </div>

</body>
</html>



<!-- akhir modal login -->