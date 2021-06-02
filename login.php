<?php
    include "connection.php";

    if($_POST){
        $query = "SELECT * FROM user WHERE username = '".$_POST['username']."' AND password = '".$_POST['password']."'";

        $res = mysqli_query($conn, $query);
        $result = mysqli_num_rows($res);

        if($result > 0){
            $temp = mysqli_fetch_assoc($res);
            if($_POST['username'] == $temp['username'] && $_POST['password'] == $temp['password']){
                session_start();
                $_SESSION['username'] = $temp['username'];
                $_SESSION['role'] = $temp['role'];
                if($_SESSION['role'] == "User"){
                    header('Location: index.php');
                }else if($_SESSION['role'] == "Admin"){
                    header('Location: admin.php');
                }
            }
        }else{
            echo '<script>alert("Username dan Password salah")</script>';
        }
    }

    session_start();
    $isValid = false;
    if(empty($_SESSION['username'])){
        $isValid = false;
    }else{
        $isValid = true;
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>JD'BOOKS</title>
    <link rel="stylesheet" href="index.css">
    <link href="css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
  </head>
  <body>
    <?php
    if(!$isValid){?>
    <!-- header -->
    <div class="header">
        <img src="logoku.png" alt="">
        <a href="index.php" class="logo">JD'BOOKS</a>
        <div class="header-right">
            <a href="login.php">Masuk</a>
            <a href="#about">Daftar</a>
        </div>
    </div>
  <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-5 pt-5">
                    <div id="login-box" class="col-md-10 pt-5">
                        <form class="form" method="post">
                            <h3 class="text-center text-primary pt-5">JD'Books Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-primary">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-primary">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-outline-success btn-md mt-1 fw-bold" value="Login">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    }else{
        if($_SESSION['role'] == "User"){
            header("Location: index.php");
        }else if($_SESSION['role'] == "Admin"){
            header("Location: admin.php");
        }
        
    }
    ?>
  </body>
</html>