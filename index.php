<?php
  include "connection.php";
  session_start();

  $isValid = false;
  if(empty($_SESSION['username'])){
    $isValid = false;
  }else if($_SESSION['role'] == "Admin"){
    $isValid = false;
  }else{
    $isValid = true;
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>JD'Books</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <?php
    if($isValid){?>
    <!-- header -->
    <div class="header">
        <img src="logoku.png" alt="">
        <a href="index.php" class="logo">JD'BOOKS</a>
        <div class="header-right">
            <a href="logout.php">Keluar</a>
        </div>
    </div>

    <!-- navigasi -->
    <div class="topnav">
        <a class="active" href="#">Home</a>
        <a href="#">Buku Baru</a>
        <a href="#">Semua Buku</a>
        <a href="#">Buku Promo</a>
        <a href="#">Buku Terlaris</a>
        <div class="search-container">
            <form action="cari.php" method="get">
                <input type="text" name="textCari" placeholder="Temukan Bukumu">
                <button type="submit" name="submitCari" value="search">Cari</button>
            </form>
        </div>
    </div>

    <!-- kolom kategori -->
    <div class="vertical-menu">
        <h2>Kategori Buku</h2>
        <?php    
            $query = "SELECT * FROM `category`";
            $res = mysqli_query($conn, $query);
            if($res->num_rows > 0){
                while($row = $res->fetch_array()){
                    echo
                    '
                    <a href="category.php?id='.$row["id"].'" class="nama1">'.$row["category"].'</a>
                    ';
                }
            }
        ?>
    </div>


    <!-- kolom main  -->

    <!--promo 1 -->
    <div class="column">
        <h2 class="produk">Promo Terbaru</h2>
        <img class="banner" src="maze-runner-banner.jpg" alt="">
    </div>

    <!-- buku baru -->
    <div class="columnbuku">
        <h2 class="produk">Buku Baru</h2>
        <table class="buku">
            <tr class="tr-buku">
                <?php    
                    $query = "SELECT * FROM `book` WHERE promo LIKE '%baru%' ORDER BY title LIMIT 5";
                    $res = mysqli_query($conn, $query);
                    if($res->num_rows > 0){
                        while($row = $res->fetch_array()){
                            echo
                            '
                                <td>
                                    <a href="detail.php?isbn='.$row["isbn"].'"><img src="'.$row["image"].'" alt=""></a>
                                </td>
                            ';
                        }
                    }
                ?>
            </tr>
            <tr>
                <?php
                    $res = mysqli_query($conn, $query);
                    if($res->num_rows > 0){
                        while($row = $res->fetch_array()){
                            echo
                            '
                                <td>
                                    <h3>'.$row["title"].'</h3>
                                    <h5>'.$row["author"].'</h5>
                                    <h4>Rp '.number_format($row["price"],2,",",".").'</h4>
                                </td>
                            ';
                        }
                    }
                ?>
            </tr>
        </table>

    </div>
    </div>
    <!-- buku populer -->
    <div class="columnbuku">
        <h2 class="produk">Buku-Buku Terpopuler</h2>
        <table class="buku">
            <tr class="tr-buku">
                <?php    
                    $query = "SELECT * FROM `book` WHERE promo LIKE '%populer%' ORDER BY title LIMIT 5";
                    $res = mysqli_query($conn, $query);
                    if($res->num_rows > 0){
                        while($row = $res->fetch_array()){
                            echo
                            '
                                <td>
                                    <a href="detail.php?isbn='.$row["isbn"].'"><img src="'.$row["image"].'" alt=""></a>
                                </td>
                            ';
                        }
                    }
                ?>
            </tr>
            <tr>
                <?php
                    $res = mysqli_query($conn, $query);
                    if($res->num_rows > 0){
                        while($row = $res->fetch_array()){
                            echo
                            '
                                <td>
                                    <h3>'.$row["title"].'</h3>
                                    <h5>'.$row["author"].'</h5>
                                    <h4>Rp '.number_format($row["price"],2,",",".").'</h4>
                                </td>
                            ';
                        }
                    }
                ?>
            </tr>
        </table>
    </div>
    <!-- kolom filter -->
    <div class="vertical-menu2">

        <h3>Filter berdasarkan harga</h3>
        <h4>Minimum</h4>
        <div class="harga">
            <input type="text" placeholder="Rp     0">
        </div>
        <h4>Maksimum</h4>
        <div class="harga">
            <input type="text" placeholder="Rp    500.000,-">
        </div>
        <br>

        <h3>Filter berdasarkan jenis buku</h3>
        <form>
            <input type="radio" id="Baru" name="jenis" value="Baru">
            <label for="Baru">Baru</label>
            <br>
            <input type="radio" id="Bekas" name="jenis" value="Bekas">
            <label for="Bekas">Bekas</label>
            <br>

        </form>
        <br>

        <h3>Filter berdasarkan stok</h3>
        <form>
            <input type="radio" id="Semua" name="stok" value="Semua">
            <label for="Semua">Semua</label>
            <br>
            <input type="radio" id="Tersedia" name="stok" value="Tersedia">
            <label for="Tersedia">Tersedia</label>
            <br>

        </form>

    </div>

    <!-- bannerpromo -->
    <div class="columnbuku">
        <h2 class="produk">Promo JD'Books Bulan Ini</h2>
        <img class="banner" id="promo2" src="banner2.png" alt="">
    </div>

    <!-- buku terlaris -->
    <div class="columnbuku">
        <h2 class="produk">Buku-Buku Terlaris</h2>
        <table class="buku">
            <tr class="tr-buku">
                <?php    
                    $query = "SELECT * FROM `book` WHERE promo LIKE '%laris%' ORDER BY title LIMIT 5";
                    $res = mysqli_query($conn, $query);
                    if($res->num_rows > 0){
                        while($row = $res->fetch_array()){
                            echo
                            '
                                <td>
                                    <a href="detail.php?isbn='.$row["isbn"].'"><img src="'.$row["image"].'" alt=""></a>
                                </td>
                            ';
                        }
                    }
                ?>
            </tr>
            <tr>
                <?php
                    $res = mysqli_query($conn, $query);
                    if($res->num_rows > 0){
                        while($row = $res->fetch_array()){
                            echo
                            '
                                <td>
                                    <h3>'.$row["title"].'</h3>
                                    <h5>'.$row["author"].'</h5>
                                    <h4>Rp '.number_format($row["price"],2,",",".").'</h4>
                                </td>
                            ';
                        }
                    }
                ?>
            </tr>
        </table>
    </div>

    <!-- kolom footer  -->
    <div class="footer">
        <br>
        <br>
        <div class="rowfooter">
            <div class="columnfooter">
                <h2>Layanan Pelanggan</h2>
                <a href="#">Cara Belanja</a>
                <a href="#">Pembayaran</a>
                <a href="#">Deposit</a>
            </div>
            <div class="columnfooter">
                <h2>Kebijakan JD'Books</h2>
                <a href="#">Pengiriman</a>
                <a href="#">Pengembalian Barang</a>
                <a href="#">Pengembalian Uang</a>
            </div>
            <div class="columnfooter">
                <h2>Tentang JD'Books</h2>
                <a href="#">Syarat & Ketentuan</a>
                <a href="#">Kebijakan & Privasi</a>
                <a href="#">Hubungi Kami</a>
                <a href="#">Bantuan</a>
            </div>
            <div class="columnfooter">
                <h2>Sosial Media</h2>
                <a href="#">
                    <img class="sosmed" src="facebook-circular-logo.svg" alt="">
                    <img class="sosmed" src="pinterest.svg" alt="">
                    <img class="sosmed" src="twitter.svg" alt="">
                    <img class="sosmed" src="instagram.svg" alt="">
                </a>
                <h2>Jasa Pengiriman</h2>
                <a href="#">
                    <img class="sosmed" src="Logo-TIKI.png" alt="">
                    <img class="sosmed" src="New_Logo_JNE.png" alt="">
                    <img class="sosmed" src="Logo Anteraja-New-01.png" alt="">
                    <img class="sosmed" src="Logo_J&T_Merah_Square.jpg" alt="">
                </a>
            </div>
            <div class="columnfooter">
                <h2>JD'Books Apps</h2>
                <a href="#">
                    <img src="app-store.png" alt="">
                    <img src="play-store.png" alt="">
                </a>
            </div>
        </div>
        <h4>Copyright © 2016 - 2021 JD'Books — All Rights Reserved</h4>
    </div>
    <?php
    }else{
        header("Location: login.php");
    }
    ?>
</body>

</html>