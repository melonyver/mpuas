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
    if($_GET["textCari"]){
        $keyword = $_GET["textCari"];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Detail Produk</title>
    <link rel="stylesheet" href="index.css">
    <link href="css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
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

    <div class="container">	
        <div class="columncategory">
        <h2 class="produk">Cari berdasarkan kata: <?=$keyword?></h2>
		<table class="buku table">
        <tr class="tr-buku">
				<?php 
				$batas = 6;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                $id = isset($_GET['id'])?(int)$_GET['id'] : 1;
				$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
 
				$previous = $halaman - 1;
				$next = $halaman + 1;
				
				$data = mysqli_query($conn,"SELECT * FROM `book` WHERE title LIKE '%".$keyword."%' OR category LIKE '%".$keyword."%' OR tag LIKE '%".$keyword."%' OR price LIKE '%".$keyword."%'");
				$jumlah_data = mysqli_num_rows($data);
                
				$total_halaman = ceil($jumlah_data / $batas);
 
				$data_category = mysqli_query($conn,"SELECT * FROM `book` WHERE title LIKE '%".$keyword."%' OR category LIKE '%".$keyword."%' OR tag LIKE '%".$keyword."%' OR price LIKE '%".$keyword."%' LIMIT $halaman_awal, $batas");
				$nomor = $halaman_awal+1;
				while($d = mysqli_fetch_array($data_category)){
					?>
                            <td class="td-category">
                                <a href="detail.php?isbn=<?=$d["isbn"]?>"><img src="<?=$d["image"]?>" alt=""></a>
                            </td>
					<?php
				}
				?>
        </tr>
        <tr>
            <?php
                $data_category = mysqli_query($conn,"SELECT * FROM `book` WHERE title LIKE '%".$keyword."%' OR category LIKE '%".$keyword."%' OR tag LIKE '%".$keyword."%' OR price LIKE '%".$keyword."%' LIMIT $halaman_awal, $batas");
                if($jumlah_data == 0){
                    echo "<h1 class='booknotfound'>===BUKU TIDAK DITEMUKAN===</h1>";
                }
                while($d = mysqli_fetch_array($data_category)){
			?>
                <td class="td-category">
                    <h3><?=$d["title"]?></h3>
                    <h5><?=$d["author"]?></h5>
                    <h4>Rp<?= number_format($d["price"],2,",",".")?></h4>
                    <?php if($role == "Admin"){?>
                        <h5><a href="update.php?isbn=<?=$d["isbn"]?>"><button class="btn-success">Update</button></a></h5>
                        <h5><a href="delete.php?isbn=<?=$d["isbn"]?>" onclick="return confirm('Mau dihapus?')"><button class="btn-danger">Delete</button></a></h5>
                    <?php }?>
                    
                </td>
            <?php 
                }
            ?>
        </tr>
		</table>
    </div>
        <?php
            if($jumlah_data > 0){
        ?>
		<nav class="nav-page">
			<ul class="pagination justify-content-center">
				<li class="page-item">
					<a class="page-link" <?php if($halaman > 1){ echo "href='?textCari=$keyword&halaman=$previous'"; } ?>>Previous</a>
				</li>
				<?php 
				for($x=1;$x<=$total_halaman;$x++){
				?> 
					<li class="page-item"><a class="page-link" href="?textCari=<?=$keyword?>&halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
				<?php
				}
				?>				
				<li class="page-item">
					<a class="page-link" <?php if($halaman < $total_halaman) { echo "href='?textCari=$keyword&halaman=$next'"; } ?>>Next</a>
				</li>
			</ul>
		</nav>
        <?php
            }
        ?>
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