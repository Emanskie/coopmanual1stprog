<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "dbconnection.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: admin.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>

        <!-- partial:index.partial.html -->
    <div class="screen-1">
    <img src="img\logo4.png" alt="Your Logo" style="width: 200px; height: 200px; display: block; margin: 0 auto;">
      <form action="login.php" method="post">
        <div class="email">
            <ion-icon name="mail-outline"></ion-icon>
            <input type="email" placeholder="Enter Email:" name="email" class="form-control">
        </div>
        <div class="password">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input type="password" placeholder="Enter Password:" name="password" class="form-control">
            <ion-icon class="show-hide" name="eye-outline"></ion-icon>
        </div>
        <div class="form-group text-center">
        <input type="submit" value="Login" name="login" class="btn btn-primary">
        </div>
      </form>
     <div><p>Proceed to Client Dashboard <a href="/CoopManual/index.php"> Click Here!</a></p></div>
    </div>
</body>
</html>