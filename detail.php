<?php
    include "connection.php";
    session_start();    
    $isValid = false;
    if(empty($_SESSION['username'])){
        $isValid = false;
    }else{
        $isValid = true;
    }
    if(isset($_GET["isbn"])){
        $role = $_SESSION['role'];
        $isbn = $_GET["isbn"];
        $query1 = "SELECT * FROM `book` WHERE isbn='$isbn'";
        $query2 = "SELECT * FROM `detail` WHERE isbn='$isbn'";
        $res1 = mysqli_query($conn, $query1);
        $res2 = mysqli_query($conn, $query2);  
        if($res1->num_rows > 0){
            while($row1 = $res1->fetch_array()){
                $title = $row1["title"];
                $author = $row1["author"];
                $category = $row1["category"];
                $tag = $row1["tag"];
                $explodeTag = explode(",",$tag);
                $countTag = count($explodeTag);
                $bookDesc = $row1["bookDesc"];
                $authDesc = $row1["authDesc"];
                $rating = $row1["rating"];
                $emptyRating = 5 - $rating;
                $promo = $row1["promo"];
                $price = $row1["price"];
                $image = $row1["image"];
            }
            $query3 = "SELECT id FROM `category` WHERE category='$category'";
            $res3 = mysqli_query($conn, $query3);
            if($res3->num_rows > 0){
                while($row3 = $res3->fetch_array()){
                    $id = $row3["id"];
                }
            }
        }
        if($res2->num_rows > 0){
            while($row2 = $res2->fetch_array()){
                $page = $row2["page"];
                $dimension = $row2["dimension"];
                $weight = $row2["weight"];
                $publisher = $row2["publisher"];
                $country = $row2["country"];
            }
        }
    }else{
        $isValid = false;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Detail Produk</title>
    <link rel="stylesheet" href="detail.css">
</head>

<body>
    <?php
    if($isValid){?>
    <!-- header -->
    <div class="header">
        <img src="logoku.png" alt="">
        <?php if($role == "User"){?>
        <a href="index.php" class="logo">JD'BOOKS</a>
        <?php }else{?>
        <a href="admin.php" class="logo">JD'BOOKS</a>
        <?php } ?>
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

    <!-- kolom main  -->

    <!-- gambar buku -->
    <div class="columngambar">
        <img class="gambarbuku" src="<?=$image?>" alt="">
        <a href=""><img class="detail" src="<?=$image?>" alt=""></a>
        <a href=""> <img class="detail" src="<?=$image?>" alt=""></a>

        <img src="" alt="">
    </div>

    <!-- kolom deskripsi -->
    <div class="columndeskripsi">
        <h1 class="produk"><?=$title?></h1>
        <table class="deskripsi">
            <tr>
                <td>
                    <h3><?=$author?></h3>
                    <h5>Kategori: 
                        <a href="category.php?category=<?=$category?>&id=<?=$id?>"><?=$category?></a>
                        Tags:
                        <?php
                        foreach($explodeTag as $t){
                            if($countTag==1){
                                echo '<a href="#">'.$t.'</a></h5>';
                            }else{
                                echo '<a href="#">'.$t.'</a>, ';
                            }
                            $countTag--;
                        }
                        ?>
                    <p><?=$bookDesc?></p>
                </td>
            </tr>
        </table>
    </div>

    <!-- kolom beli dan rating-->
    <div class="columnbeli">
        <table class="deskripsi">
            <tr>
                <td>
                    <h2>Beli Baru</h2>
                    <h3>Rp <?=number_format($price,2,",",".")?></h3>
                    <div class="belisekarang">
                        <a href="#" class="tulisanbeli">Sekarang</a>
                        <a href="#" class="wishlist"><img src="heart.svg"> Tambah Wishlist</a>
                    </div>

                    <h2>Rating</h2>
                    <?php
                        while($rating > 0){
                            echo '<img src="star-fill.svg" alt="">';
                            $rating--;
                        }
                        while($emptyRating > 0){
                            echo '<img src="star.svg" alt="">';
                            $emptyRating--;
                        }
                    ?>
                </td>
            </tr>
        </table>
    </div>

    <!-- kolom kondisi -->
    <div class="columnkondisi">
        <h2 class="produk"></h2>
        <table class="buku">
            <tr>
                <td>
                    <h2>Tentang Penulis</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <p><?=$authDesc?></p>
                </td>
            </tr>
        </table>
    </div>
    
    <!-- kolom detil produk -->
    <div class="detailproduk">
        <table class="buku">
            <tr>
                <td>
                    <h2>Detail Produk</h2>
                </td>
                <td>
                    <div id="jarak"></div>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Format: <?=$page?> pages</h4>
                    <h4>Dimensi: <?=$dimension?> | <?=$weight?>g</h4>
                    <h4>Penerbit: <?=$publisher?></h4>
                </td>
                <td>

                </td>
                <td>
                    <h4>Negara Publikasi: <?=$country?></h4>
                    <h4>ISBN13: <?=$isbn?></h4>
                </td>
            </tr>
        </table>
        <br>
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