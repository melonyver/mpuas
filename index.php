<?php
  include "connection.php";
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
    <title>JD'Books</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <?php
    if($isValid){?>
    <!-- header -->
    <div class="header">
        <img src="logoku.png" alt="">
        <a href="#default" class="logo">JD'BOOKS</a>
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

    <!-- kolom kategori -->
    <div class="vertical-menu">
        <h2>Kategori Buku</h2>
        <a href="#" class="nama1">Agama & Filsafat</a>
        <a href="#" class="nama1">Buku Anak</a>
        <a href="#" class="nama1">Ensiklopedia</a>
        <a href="#" class="nama1">Fiksi dan Literatur</a>
        <a href="#" class="nama1">Hobby & Teknologi Tepat Guna</a>
        <a href="#" class="nama1">Kesehatan</a>
        <a href="#" class="nama1">Komik</a>
        <a href="#" class="nama1">Lifestyle</a>
        <a href="#" class="nama1">Motivasi & Bisnis</a>
        <a href="#" class="nama1">Novel</a>
        <a href="#" class="nama1">Perguruan Tinggi</a>
        <a href="#" class="nama1">Sosial, Politik, Budaya, Sejarah</a>
        <a href="#" class="nama1">Tes & Psikotes</a>
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
                <td>
                    <a href="detail.php"><img src="buku baru 1.jpg" alt=""></a>
                </td>
                <td class="kosong">
                    <a href="detail.php">
                        <img src="buku baru 2.jpg" alt="">
                    </a>
                </td>
                <td>
                    <a href="detail.php"><img src="buku baru 3.jpg" alt=""></a>

                </td>
                <td>
                    <a href="detail.php"> <img src="buku baru 4.jpg" alt=""></a>

                </td>
                <td>
                    <a href="detail.php"><img src="buku baru 5.jpg" alt=""></a>

                </td>
            </tr>
            <tr>
                <td>
                    <h3>One Piece 95</h3>
                    <h5>Eichiro Oda</h5>
                    <h4>Rp 21.000,-</h4>
                </td>
                <td>
                    <h3>Perjamuan Khong Guan</h3>
                    <h5>Joko Pinurbo</h5>
                    <h4>Rp 68.000,-</h4>
                </td>
                <td>
                    <h3>Nebula</h3>
                    <h5>Tere Liye</h5>
                    <h4>Rp 63.750,-</h4>
                </td>
                <td>
                    <h3>Bukan Golongan Kami</h3>
                    <h5>Coki Pardede & Tretan Muslim</h5>
                    <h4>Rp 77.000,-</h4>
                </td>
                <td>
                    <h3>Tapak Jejak</h3>
                    <h5>Fiersa Besari</h5>
                    <h4>Rp 74.800,-</h4>
                </td>

            </tr>
        </table>

    </div>
    </div>
    <!-- buku populer -->
    <div class="columnbuku">
        <h2 class="produk">Buku-Buku Terpopuler</h2>
        <table class="buku">
            <tr class="tr-buku">
                <td>
                    <a href="detail.php"><img src="buku1.jpg" alt=""></a>

                </td>
                <td>
                    <a href="detail.php"><img src="buku pop 2.jpg" alt=""></a>

                </td>
                <td>
                    <a href="detail.php"><img src="buku pop 3.jpg" alt=""></a>

                </td>
                <td>
                    <a href="detail.php"><img src="buku pop 4.jpg" alt=""></a>

                </td>
                <td>
                    <a href="detail.php"><img src="buku pop 5.jpg" alt=""></a>

                </td>
            </tr>
            <tr>
                <td>
                    <h3>Smart Traders Not Gamblers</h3>
                    <h5>Ellen May</h5>
                    <h4>Rp 73.500,-</h4>
                </td>
                <td>
                    <h3>Harry Potter and the Prisoner of Azkaban
                    </h3>
                    <h5>J.K. Rowling</h5>
                    <h4>Rp 401.250,-</h4>
                </td>
                <td>
                    <h3>Dilan : Dia Adalah Dilanku Tahun 1990</h3>
                    <h5>Pidi Baiq</h5>
                    <h4>Rp 40.000,-</h4>
                </td>
                <td>
                    <h3>Pulang</h3>
                    <h5>Tere Liye</h5>
                    <h4>Rp 71.200,-</h4>
                </td>
                <td>
                    <h3>Bumi Manusia</h3>
                    <h5>Pramoedya Ananta Toer</h5>
                    <h4>Rp 132.000,-</h4>
                </td>

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
                <td>
                    <a href="detail.php"> <img src="buku laris 1.jpg" alt=""></a>

                </td>
                <td>
                    <a href="detail.php"><img src="buku laris 2.jpg" alt=""></a>

                </td>
                <td>
                    <a href="detail.php"><img src="buku laris 3.jpg" alt=""></a>

                </td>
                <td>
                    <a href="detail.php"> <img src="buku laris 4.jpg" alt=""></a>

                </td>
                <td>
                    <a href="detail.php"><img src="buku laris 5.jpg" alt=""></a>

                </td>
            </tr>
            <tr>
                <td>
                    <h3>Nanti Kita Cerita Tentang Hari Ini</h3>
                    <h5>Marchella FP</h5>
                    <h4>Rp 125.000,-</h4>
                </td>
                <td>
                    <h3>Orang-orang Biasa</h3>
                    <h5>Andrea Hirata</h5>
                    <h4>Rp 89.000,-</h4>
                </td>
                <td>
                    <h3>Ronggeng Dukuh Paruk</h3>
                    <h5>Ahmad Tohari</h5>
                    <h4>Rp 88.000,-</h4>
                </td>
                <td>
                    <h3>Aku Ini Binatang Jalang</h3>
                    <h5>Chairil Anwar</h5>
                    <h4>Rp 20.000,-</h4>
                </td>
                <td>
                    <h3>Negeri 5 Menara</h3>
                    <h5>Ahmad Fuadi</h5>
                    <h4>Rp 98.000,-</h4>
                </td>

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