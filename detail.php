<?php
  include "connection.php";
  session_start();

  $isValid = false;
  if(empty($_SESSION['username'])){
    $isValid = false;
  }else{
    $isValid = true;
  }

  $role = $_SESSION['role'];

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
            <a href="#about">Daftar</a>
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
            <input type="text" placeholder="Temukan Bukumu">
            <button type="submit">Cari</button>
        </div>
    </div>

    <!-- kolom main  -->

    <!-- gambar buku -->
    <div class="columngambar">
        <img class="gambarbuku" src="buku baru 4.jpg" alt="">
        <a href=""><img class="detail" src="detail buku 2.jfif" alt=""></a>
        <a href=""> <img class="detail" src="detail buku.jfif" alt=""></a>

        <img src="" alt="">
    </div>
    <!-- kolom deskripsi -->
    <div class="columndeskripsi">
        <h1 class="produk">Bukan Golongan Kami</h1>
        <table class="deskripsi">
            <tr>
                <td>
                    <h3>Coki Pardede & Tretan Muslim</h3>
                    <h5>Kategori: <a href="#">Novel</a>, Tags: <a href="#">Non-fiksi</a>, <a href="#">Sosial &
                            Politik</a>, <a href="#"> Motivasi</a></h5>

                    <p>Bukan Golongan Kami adalah kumpulan tulisan keresahan Coki & Muslim. Tak hanya soal jatuh bangun
                        karier mereka di panggung komedi Indonesia, buku ini menggali lebih jauh ke masa lalu yang
                        membuat cara mereka memaknai keberagaman hingga
                        saat ini. Dua muka buku ini mewakili sudut pandang Coki dan Muslim hingga mereka akhirnya
                        bertemu di tengah menjadi duo komedian paling dinanti saat ini.</p>
                    <h2>Rating</h2>
                    <img src="star-fill.svg" alt="">
                    <img src="star-fill.svg" alt="">
                    <img src="star-fill.svg" alt="">
                    <img src="star-fill.svg" alt="">
                    <img src="star.svg" alt="">
                </td>
            </tr>
        </table>
    </div>
    <!-- kolom beli-->
    <div class="columnbeli">

        <table class="deskripsi">
            <tr>
                <td>
                    <h2>Beli Bekas</h2>
                    <h3>Rp 50.000,-</h3>
                    <div class="belisekarang">
                        <a href="#" class="tulisanbeli">Beli Sekarang</a>
                        <a href="#" class="wishlist"><img src="heart.svg"> Tambah Wishlist</a>
                    </div>
                    <h2>Beli Baru</h2>
                    <h3>Rp 77.000,-</h3>
                    <div class="belisekarang">
                        <a href="#" class="tulisanbeli">Sekarang</a>
                        <a href="#" class="wishlist"><img src="heart.svg"> Tambah Wishlist</a>
                    </div>

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
                    <div class="kondisi">
                        <h2>Kondisi</h2>
                </td>
                <td>
                    <h2>Tentang Penulis</h2>
                </td>
                <td>
                </div>
    </tr>
    <tr>
        <td>
            <p>BRAND NEW BOOK. Lebih dari 1,5 juta pelanggan yang puas. Jaminan uang kembali 100%. </p>
        </td>
        <td>
            <p>Reza Pardede (lahir di Jakarta, Indonesia, 21 Januari 1988; umur 33 tahun), atau lebih dikenal sebagai
                Coki Pardede, adalah seorang pelawak tunggal. Ia merupakan salah seorang kontestan ajang pencarian bakat
                Stand Up Comedy Indonesia
                Season 4 yang diselenggarakan oleh Kompas TV dan Stand Up Comedy Academy 2 yang diselenggarakan
                Indosiar.</p>
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
                    <div id="jarak">

                    </div>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Format: Paperback | 208 pages</h4>
                    <h4>Dimensi: 14cm x 20cm x 2cm | 430g</h4>
                    <h4>Tanggal Publikasi: 26 Agustus 2019</h4>
                    <h4>Tim Publikasi: Coki Parded & Tretan Muslim</h4>
                    <h4>Penerbit: Bukune</h4>
                </td>
                <td>

                </td>
                <td>
                    <h4>Kota/Negara Publikasi: Jabodetabek, Indonesia</h4>
                    <h4>Bahasa: Indonesia</h4>
                    <h4>ISBN10: 0327267008228</h4>
                    <h4>ISBN13: 9786022203278</h4>
                    <h4>Ranking Bestseller: 666</h4>
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